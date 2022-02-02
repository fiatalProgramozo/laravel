<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function main(){
        return view('index');
    }
    public function categories(){
        return view('categories');
    }
    public function product($product = null){
        return view('product', ['product' => $product]);
    }
    public function category($category){
        return view('category', ['category' => $category]);
        dd($category);
    }
}

