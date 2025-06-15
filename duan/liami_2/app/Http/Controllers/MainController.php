<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Setting;
use App\Models\Banner;
use App\Models\BlogPost;
use App\Models\Product;
class MainController extends Controller
{
    public function index()
    {
        $blogs=BlogPost::orderBy('created_at', 'desc')->paginate(3);
        $newProduct=Product::orderBy('created_at', 'desc')->paginate(8);
        $allProduct = Product::all();
        $settings = Setting::all();
        $banners = Banner::all();
        $currentUrl = url()->current();
        // Lấy danh mục cha và danh mục con
        $topViewedProducts = Product::orderBy('View', 'desc')->take(6)->get();
        $categories = Category::with('children')->whereNull('parent_id')->get(); // Lấy danh mục cha
        return view('home.index', compact(
            'categories',
            'settings',

            'banners',
            'allProduct',
            'newProduct',
            'blogs',
            'topViewedProducts',
            'currentUrl',

        ));    }
}
