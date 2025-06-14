<?php

namespace App\Http\Controllers\frontend;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::latest()->paginate(12);
        return view('frontend.products.index', compact('products'));
    }
    public function show($slug)
    {
        $product = Product::where('slug', $slug)->firstOrFail();
        $latestProducts = Product::latest()->where('id', '!=', $product->id)->limit(5)->get();
        $medias = $product->medias()->latest()->get();
        return view('frontend.products.show', compact('product', 'latestProducts', 'medias'));
    }
}
