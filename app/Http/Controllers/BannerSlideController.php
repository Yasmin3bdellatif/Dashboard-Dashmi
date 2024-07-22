<?php

namespace App\Http\Controllers;

use App\Models\BannerSlide;
use Illuminate\Http\Request;

class BannerSlideController extends Controller
{
    public function index()
    {
        $bannerSlides = BannerSlide::all();
        return view('dashboard.banner_slides.index', compact('bannerSlides'));
    }

    public function create()
    {
        return view('dashboard.banner_slides.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif',
            'title' => 'required|string|max:255',
            'details' => 'required|string',
            'link' => 'nullable|url',
            'isShown' => 'required|boolean',
            'slideOrder' => 'required|integer',
        ]);

        $photoPath = $request->file('photo')->store('banner_images', 'public');

        BannerSlide::create([
            'photo' => $photoPath,
            'title' => $request->title,
            'details' => $request->details,
            'link' => $request->link,
            'isShown' => $request->isShown,
            'slideOrder' => $request->slideOrder,
        ]);

        return redirect()->route('banner_slides.index')->with('success', 'Banner Slide added successfully!');
    }

    public function edit(BannerSlide $bannerSlide)
    {
        return view('dashboard.banner_slides.edit', compact('bannerSlide'));
    }

    public function update(Request $request, BannerSlide $bannerSlide)
    {
        $request->validate([
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'title' => 'required|string|max:255',
            'details' => 'required|string',
            'link' => 'nullable|url',
            'isShown' => 'required|boolean',
            'slideOrder' => 'required|integer',
        ]);

        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('banner_images', 'public');
            $bannerSlide->photo = $photoPath;
        }

        $bannerSlide->title = $request->title;
        $bannerSlide->details = $request->details;
        $bannerSlide->link = $request->link;
        $bannerSlide->isShown = $request->isShown;
        $bannerSlide->slideOrder = $request->slideOrder;
        $bannerSlide->save();

        return redirect()->route('banner_slides.index')->with('success', 'Banner Slide updated successfully!');
    }

    public function destroy(BannerSlide $bannerSlide)
    {
        $bannerSlide->delete();
        return redirect()->route('banner_slides.index')->with('success', 'Banner Slide deleted successfully!');
    }
}
