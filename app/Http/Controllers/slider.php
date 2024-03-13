<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;
use Intervention\Image\ImageManager;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;

class slider extends Controller
{

    // public function showSlider()
    // {
    //     $slides = Slide::all(); // Use the correct model name

    //     return view('home', compact('slides'));
    // }

    public function slider()
    {
        return view('admin.slider');
    }

    public function uploadImage(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imagePath = $request->file('image')->store('images', 'public');

        $image = Image::make(public_path("storage/{$imagePath}"))->fit(1400, 800);
        $image->save();

        $slider = new Slider();
        $slider->image = $imagePath;
        $slider->save();

        return redirect()->back()->with('success', 'Image uploaded successfully.');
    }
}
