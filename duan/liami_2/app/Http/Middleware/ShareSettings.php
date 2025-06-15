<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Setting;
class ShareSettings
{
    public function handle($request, Closure $next)
    {
        $settings = Setting::all();
        view()->share('settings', $settings);

        return $next($request);
    }
}
