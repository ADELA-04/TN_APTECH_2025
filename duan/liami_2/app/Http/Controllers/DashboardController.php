<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Models\Category;
use App\Models\Setting;
use App\Models\Banner;
use App\Models\BlogPost;
use App\Models\Product;
use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Support\Facades\DB;


class DashboardController extends Controller
{
    // Controller

    public function index2()
    {
        $monthlyRevenue = Order::select(
            DB::raw('SUM(TotalAmount) as total'),
            DB::raw('MONTH(created_at) as month')
        )
            ->whereYear('created_at', date('Y'))
            ->groupBy('month')
            ->orderBy('month')
            ->pluck('total');

        $revenueData = array_fill(0, 12, 0);
        foreach ($monthlyRevenue as $key => $value) {
            $revenueData[$key] = $value;
        }
 // Lấy sản phẩm bán chạy nhất
$topProducts = OrderDetail::select('ProductID', DB::raw('SUM(Quantity) as total_quantity'))
    ->groupBy('ProductID')
    ->orderBy('total_quantity', 'desc')
    ->take(5) // Lấy 5 sản phẩm bán chạy nhất
    ->with('product') // Tải thông tin sản phẩm
    ->get();

// Tính tổng số lượng bán ra để tính phần trăm
$totalSales = $topProducts->sum('total_quantity');

// Tạo mảng phần trăm cho biểu đồ
$percentages = $topProducts->map(function ($product) use ($totalSales) {
    return $totalSales > 0 ? ($product->total_quantity / $totalSales) * 100 : 0;
})->toArray();

// Tạo mảng mã sản phẩm cho legend
$productCodes = $topProducts->map(function ($product) {
    return $product->product->ProductID; // Lấy mã sản phẩm
})->toArray();
$totalQuantities = $topProducts->map(function ($product) {
    return $product->total_quantity; // Lấy số lượng bán ra
})->toArray();
        // Các biến khác
        $blogs = BlogPost::orderBy('created_at', 'desc')->paginate(3);
        $newProduct = Product::orderBy('created_at', 'desc')->paginate(8);
        $allProduct = Product::all();

        $settings = Setting::all();
        $banners = Banner::all();
        $topViewedProducts = Product::orderBy('View', 'desc')->take(5)->get();
        $categories = Category::with('children')->whereNull('parent_id')->get();

        return view('managers.manager', compact(
            'categories',
            'settings',
            'revenueData',
            'banners',
            'allProduct',
            'newProduct',
            'blogs',
            'topViewedProducts',
 'percentages' ,
 'productCodes',
 'totalQuantities',
        ));
    }
}
