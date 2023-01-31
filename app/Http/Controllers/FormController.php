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

    public function store(Request $request)
    {
         
        $validatedData = $request->validate([
          'name' => 'required|min:5',
          'email' => 'required|email',
          'age' => 'nullable'
        ]);

        dd($validatedData);
 
    }
}
