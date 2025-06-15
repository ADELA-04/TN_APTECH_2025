<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Models\Category;
use App\Models\Setting;
use App\Models\Banner;
use App\Models\BlogPost;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;
use App\Models\PageVisit;
class DashboardController extends Controller
{

    public function index2()
{
    // Lấy dữ liệu lượt ghé thăm theo ngày
    $visits = PageVisit::selectRaw('DATE(visited_at) as visit_date, SUM(count) as visit_count')
        ->groupBy('visit_date')
        ->orderBy('visit_date', 'asc')
        ->get();

    // Chuyển dữ liệu thành mảng cho biểu đồ
    $visitDates = $visits->pluck('visit_date')->toArray();
    $visitCounts = $visits->pluck('visit_count')->toArray();

    // Các biến khác
    $blogs = BlogPost::orderBy('created_at', 'desc')->paginate(3);
    $newProduct = Product::orderBy('created_at', 'desc')->paginate(8);
    $allProduct = Product::all();

    $settings = Setting::all();
    $banners = Banner::all();
    $topViewedProducts = Product::orderBy('View', 'desc')->take(6)->get();
    $categories = Category::with('children')->whereNull('parent_id')->get();

    return view('managers.manager', compact(
        'categories',
        'settings',

        'banners',
        'allProduct',
        'newProduct',
        'blogs',
        'topViewedProducts',
        'visitDates',
        'visitCounts'
    ));
}
}
