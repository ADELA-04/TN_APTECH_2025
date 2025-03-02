<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManagerController extends Controller
{
    public function index()
    {
        return view('managers.manager'); // Đường dẫn đến view quản lý
    }
}
