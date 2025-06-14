<?php

namespace App\Http\Controllers\cms;

use App\Models\Media;
use App\Models\Product;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{

    public function index()
    {
        $products = Product::latest()->paginate(10);
        return view('backend.products.index', compact('products'));
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('backend.products.show', compact('product'));
    }

    public function create()
    {
        return view('backend.products.create');
    }

    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required|max:200|min:3|string|unique:products,title',
            'description' => 'nullable|max:1500000|min:3',
            'image' => 'required|mimes:jpeg,png,jpg|max:1024',
        ]);

        $product = new Product();
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $destinationPath = storage_path('app/public/images/products/');
            $filename = saveFile($file, $destinationPath);
            $product->image = $filename;
        }
        $product->title = $request->title;
        $product->slug = Str::slug($request->title);
        $product->description = json_encode($request->description);
        if ($product->save()) {
            return redirect()->route('cms.product.index')->with(toast("Product Added Successfully", 'success'));
        } else {
            return redirect()->back()->with([
                "message" => "Something went wrong",
                "alert-type" => "error"
            ]);
        }
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('backend.products.edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|max:200|min:3|string|unique:products,title,' . $id,
            'description' => 'nullable|min:3|max:1500000',
            'image' => 'required|mimes:jpeg,png,jpg|max:1024',
        ]);

        $product = Product::findOrFail($id);
        if ($request->hasFile('image')) {
            if (!Storage::exists('images/products/' . $product->image)) {
                Storage::disk('public')->delete('images/products/' . $product->image);
            }
            $file = $request->file('image');
            $destinationPath = storage_path('app/public/images/products/');
            $filename = saveFile($file, $destinationPath);
            $product->image = $filename;
        }
        $product->title = $request->title;
        $product->slug = Str::slug($request->title);
        $product->description = json_encode($request->description);
        if ($product->save()) {
            return redirect()->route('cms.product.index')->with(
                [
                    "message" => "Product Updated Successfully",
                    "alert-type" => "success"
                ]
            );
        } else {
            return redirect()->back()->with([
                "message" => "Something went wrong",
                "alert-type" => "error"
            ]);
        }
    }

    public function delete($id)
    {
        $product = Product::findOrFail($id);
        optional(Storage::disk('public')->delete('images/products/' . $product->image));
        if ($product->delete()) {
            return redirect()->route('cms.product.index')->with(
                [
                    "message" => "Product Deleted Successfully",
                    "alert-type" => "success"
                ]
            );
        } else {
            return redirect()->route('cms.product.index')->with(
                [
                    "message" => "Something Went Wrong",
                    "alert-type" => "error"
                ]
            );
        }
    }

    public function indexMedia($id)
    {
        $products = Product::findOrFail($id);
        $medias = $products->medias()->latest()->paginate(10);
        return view('backend.product_gallery.index', compact('medias', 'products'));
    }

    public function createMedia($id)
    {
        $product = Product::findOrFail($id);
        return view('backend.product_gallery.create', compact('product'));
    }

    public function storeMedia(Request $request, $id)
    {
        // dd($request);
        $request->validate(
            [
                'image' => 'required|max:8',
                'image.*' => 'mimes:png,jpg,jpeg|max:1024',
            ],
            ['image.*.*' => 'Max 8 file, Max File Size: 1MB, File Type -png,jpg,jpeg.']
        );
        $product = Product::findOrFail($id);
        $mediasCount = $product->medias()->latest()->count();
        if ($mediasCount + count($request->image) > 8) {
            return redirect()->back()->with(['alert-type' => 'info', 'message' => 'Maximum 8 Images allowed in gallery.']);
        }
        $files = $request->file('image');
        foreach ($files as $file) {
            $file_details = uploadFile($file, 'images/products/gallery', 85);
            $media = new Media();
            $media->name = 'Gallery';
            $media->model_id = $product->id;
            $media->model_type = Product::class;
            $media->type = $file_details['type'];
            $media->filename = $file_details['filename'];
            $media->save();
        }
        return redirect()->route('cms.products.media.index', $id)->with(['alert-type' => 'success', 'message' => 'Gallery Image Added Successfully']);
    }

    public function editMedia($product_id, $media_id)
    {
        $product = Product::findOrFail($product_id);
        $medias = $product->medias()->findOrFail($media_id);
        // dd($medias);
        return view('backend.product_gallery.edit', compact('product', 'medias'));
    }

    public function updateMedia(Request $request, $product_id, $media_id)
    {
        $product = Product::findOrFail($product_id);
        $media = $product->medias()->findOrFail($media_id);
        $request->validate([
            'image' => 'required|mimes:png,jpg,jpeg|max:1024',
        ]);
        $file = $request->file('image');
        if ($file) {
            if ($media->filename) {
                Storage::disk('public')->delete('images/products/gallery/' . $media->filename);
            }
            $file_details = uploadFile($file, 'images/products/gallery', 85);
            $media->type = $file_details['type'];
            $media->filename = $file_details['filename'];
            $media->save();
        }


        return redirect()->route('cms.products.media.index', $product_id)->with(['alert-type' => 'success', 'message' => 'Gallery Updated Successfully']);
    }

    public function deleteMedia($product_id, $media_id)
    {
        $product = Product::findOrFail($product_id);
        $media = $product->medias()->findOrFail($media_id);
        if ($media->filename) {
            Storage::disk('public')->delete('images/products/gallery/' . $media->filename);
        }
        if ($media->delete()) {
            return redirect()->route('cms.products.media.index', $product_id)->with(['alert-type' => 'success', 'message' => 'Gallery Image Deleted Successfully']);
        }
        return redirect()->back()->with(['alert-type' => 'error', 'message' => 'Something Went Wrong']);
    }
}
