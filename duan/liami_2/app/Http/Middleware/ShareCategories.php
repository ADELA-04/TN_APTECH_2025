<?php

namespace App\Http\Middleware;
use App\Models\Category;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;


class ShareCategories
{
    public function handle($request, Closure $next)
    {
        $categories = Category::with('children')->whereNull('parent_id')->get();
        view()->share('categories', $categories); // Chia sẻ biến với tất cả view
        return $next($request);
    }
}
