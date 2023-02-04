<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Api\ProductRequest;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        // dump($products);

        // return response()->json($products);
        return response()->json([
            'success' => true,
            'message' => 'List products',
            'data' => $products
        ], 200);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
            'price_in_cents' => 'required|integer',
            'sku' => 'nullable',
            'image' => 'nullable|string',
        ]);

        $product = Product::create($request->all());
        
        response()->json([
            'success' => true,
            'message' => 'Product created',
            'data' => $product
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return response()->json([
            'success' => true,
            'message' => 'Product data',
            'data' => $product
        ], 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRequest $request, Product $product)
    {
        $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
            'price_in_cents' => 'required|integer',
            'sku' => 'nullable',
            'image' => 'nullable|string',
        ]);

        $product_to_edit = Product::find($product->id);

        if ($product_to_edit) {
            $product_to_edit->update([
                'title' => $request->title,
                'content' => $request->content
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Product updated',
                'data' => $product_to_edit
            ], 200);
        }
        return response()->json([
            'success' => false,
            'message' => 'Product not found'
        ], 404);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        if ($product) {
            $product->delete();

            return response()->json([
                'success' => true,
                'message' => 'Product deleted'
            ], 200);
        }
        return response()->json([
            'success' => false,
            'message' => 'Product not found'
        ], 404);
    }

}
