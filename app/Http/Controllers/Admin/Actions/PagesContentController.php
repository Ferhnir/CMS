<?php

namespace App\Http\Controllers\Admin\Actions;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PagesContentController extends Controller
{
    public function show()
    {
        return view('admin.pages.index');
    }
}
