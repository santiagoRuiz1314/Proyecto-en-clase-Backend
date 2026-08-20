<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){ 
        return view('product.index'); // Show Products
    }
    public function create(){ // id // name // precio // descripcion // categoria //url imagen
        return view('product.create'); // from to Create Product
    }
    public function show($idProduct){ 
        return view('product.show'); // Detail of Product: $idProduct
    }
}
