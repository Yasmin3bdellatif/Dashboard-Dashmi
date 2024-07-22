<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\BannerSlide;  
use App\Models\Category;  
use App\Models\Product;  
use App\Models\TeamMember;  


class FrontsiteController extends Controller
{
    public function index()
    {
        // استعلام لجلب الشرائح التي يتم عرضها فقط
        $bannerSlides = BannerSlide::where('isShown', 1)
            ->orderBy('slideOrder', 'desc')
            ->get();

            $categories = Category::all();

            // استعلام لجلب المنتجات مع فئاتها
            $products = Product::with('category')->get();

            $teamMembers = TeamMember::all();

        // تمرير البيانات إلى العرض
        return view('welcome', [
            'bannerSlides' => $bannerSlides,
            'categories' => $categories,
            'products' => $products,
            'teamMembers' => $teamMembers,
        ]);
    }
}
