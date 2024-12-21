<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageSearch extends Controller
{
    //
    public function index(){
        return View('imageSearch');
    }
    public function store(Request $request){
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Handle file upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $path = $image->storeAs('public/images', $image->getClientOriginalName());

            // Generate the public URL to access the uploaded image
            $imageUrl = Storage::url($path);

            // Return the image URL to display in the view
            return redirect()->back()->with('image_url', $imageUrl);
        }

        return redirect()->back()->withErrors(['image' => 'No image uploaded']);
    }

    }

