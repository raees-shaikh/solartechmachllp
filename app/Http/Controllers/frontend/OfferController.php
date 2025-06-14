<?php

namespace App\Http\Controllers\frontend;

use App\Models\Offer;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OfferController extends Controller
{
    public function index()
    {
        $categories = Category::latest()->paginate(12);
        return view('frontend.latest-offers.index', compact('categories'));
    }

    public function offerIndex($slug)
    {
        // dd($slug);
        $category = Category::where('slug', $slug)->firstOrFail();
        $offers = $category->offers()->latest()->paginate(12, ['*'], 'offer');
        $relatedCategories = Category::where('id', '!=', $category->id)->limit(7)->latest()->get();
        return view('frontend.latest-offers.offer-index', compact('category', 'relatedCategories', 'offers'));
    }

    public function OfferShow($categorySlug, $offerSlug)
    {
        $category = Category::where('slug', $categorySlug)->firstOrFail();
        $offer = Offer::where('category_id', $category->id)->where('slug', $offerSlug)->firstOrFail();
        $relatedOffers = Offer::where('category_id', $category->id)->where('id', '!=', $offer->id)->limit(7)->latest()->get();

        return view('frontend.latest-offers.offer-show', compact('category', 'offer', 'relatedOffers'));
    }
}
