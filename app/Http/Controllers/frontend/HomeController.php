<?php

namespace App\Http\Controllers\frontend;

use App\Models\Data;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;

class HomeController extends Controller
{
    public function index()
    {
        $products = Product::limit(9)->get();
        $prodctCounts = Product::count();
        $categories = Category::latest()->limit(9)->get();
        $categoriesCount = Category::count();
        $data = Data::where('name', 'Technical Data')->where('visibility', 1)->first();
        return view('frontend.index', compact('products', 'prodctCounts', 'categories', 'categoriesCount', 'data'));
    }
}
