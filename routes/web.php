<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;

Route::get('/', HomeController::class); // landing ecomerce
Route::prefix('product')->controller(ProductController::class)->group(function(){
    Route::get('/', 'index'); // muestre listado de productos
    Route::get('/create', 'create'); // formulario para crear producto
    Route::get('/{idProduct}', 'show');  // el detalle de un producto
});

// Todo apuntando al mismo css ubicado en la carpeta public y se debe llamar style.css, la carpeta aun no exite, crealas