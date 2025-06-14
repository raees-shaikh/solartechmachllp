<?php

namespace App\Http\Controllers\cms;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Exhibition;
use App\Models\Offer;
use App\Models\Product;
use Illuminate\Http\Request;

class StatisticsController extends Controller
{
    public function index()
    {
        $productCount = Product::count();
        $categoryCount = Category::count();
        $offerCount = Offer::count();
        $exhibitionCount = Exhibition::count();
        return view('backend.statistics.index', compact('productCount', 'categoryCount', 'offerCount', 'exhibitionCount'));
    }
}
