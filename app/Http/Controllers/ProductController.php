<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return $products;
    }

    public function show($id)
    {
        $product = Product::find($id);
        return $product;
    }

    public function store(Request $request)
    {
        $product = $request->all();
        $product = Product::create($product);
        
        return $product;
    }

    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $product->update($request->all());

        return $product;
    }

    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
    }
}
