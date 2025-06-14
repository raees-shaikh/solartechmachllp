<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Exhibition;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManager;
use Illuminate\Support\Str;
use App\Models\Media;

class ExhibitionController extends Controller
{
  

    public function index()
    {
        $exhibitions = Exhibition::latest()->paginate(10);
        return view('frontend.exhibitions.index', compact('exhibitions'));
    }

    public function show($exhibitionSlug)
    {
        $exhibition = Exhibition::where('slug', $exhibitionSlug)->firstOrFail();
        $medias = $exhibition->medias()->latest()->get();
        //dd($medias);
        return view('frontend.exhibitions.exhibition', compact('exhibition', 'medias'));
    }
  
}
