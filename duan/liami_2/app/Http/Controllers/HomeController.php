<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('managers.manager_2'); // Đường dẫn đến view trang chính
    }
}
