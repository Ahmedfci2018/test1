<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function getProduct(){

        $name = "Ahmed";
        $age = "25";
        $products=[
            'labTop',
            'Mobile',
            'Iphone',
            'Apple'
        ];
        return view('products.product',compact('name','age','products'));

    }
}
