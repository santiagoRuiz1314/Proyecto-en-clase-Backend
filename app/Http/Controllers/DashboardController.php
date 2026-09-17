<?php

namespace App\Http\Controllers;

use App\Models\CartItem;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Panel del usuario autenticado con el resumen de su cuenta y del catalogo.
     */
    public function __invoke(Request $request)
    {
        $user = $request->user();

        // Carga ansiosa para no consultar el producto de cada linea por separado
        $cartItems = CartItem::with('product')->where('user_id', $user->id)->get();

        return view('dashboard', [
            'cartItems'       => $cartItems,
            'cartCount'       => $cartItems->sum('quantity'),
            'cartTotal'       => $cartItems->sum(fn ($item) => $item->quantity * $item->product->price),
            'totalProducts'   => Product::count(),
            'totalCategories' => Category::count(),
            'latestProducts'  => Product::with('category')->latest()->take(5)->get(),
        ]);
    }
}
