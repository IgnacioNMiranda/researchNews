<?php

namespace App\Http\Controllers\Product;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class ProductController extends Controller
{
    public function create(){
        return view('products.create');

    }

    public function edit(){
        //return view('products.edit');

    }


}