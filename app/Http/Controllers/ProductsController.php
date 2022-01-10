<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Products;

class ProductsController extends Controller {
    public function list(){
        $products = Products::all();
        return response()->json($products);
    }
}