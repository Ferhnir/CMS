<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Navdrawer;

class DashboardController extends Controller
{
    public function show()
    {
        return view('admin.layouts.index');
    }
}
