<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class FormController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return view('form', compact('products'));
    }
}
