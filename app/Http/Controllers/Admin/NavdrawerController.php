<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Navdrawer;
use App\Page;

class NavdrawerController extends Controller
{
    public function index()
    {        
        $nav = Navdrawer::with('page')->whereNotNull('page_id')->get();

        $pages = Page::select('id','name')->get();

        return view('admin.webcontent.navdrawer.index', [
            'navigation'    =>    $nav,
            'pages'         =>   $pages
        ]);
    }

    public function show($id)
    {
        $nav = Navdrawer::find($id);
        $pages = Page::select('id','name')->get();

        return view('admin.webcontent.navdrawer.edit', [
            'nav'           => $nav,
            'pages'         => $pages
        ]);
    }

    public function update($id, Request $request)
    {
        $nav = Navdrawer::findOrFail($id);

        $input = $request->all();
        $nav->fill($input)->save();

        $navs = Navdrawer::orderBy('order')->get();

        return redirect()->route('admin.webcontent.navdrawer.index',[
            'nav' => $navs
        ]);
    }
}
