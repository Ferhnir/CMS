<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Page;

class PagesContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pages = Page::orderBy('order')->get();
        return view('admin.webcontent.pages.index', ['pages' => $pages]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.webcontent.pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required|min:8',
        ]);
    
        $lastMaxOrder = Page::max('order');

        $newPage            = new Page();
        $newPage->name      = $request->input('name');
        $newPage->html_tag  = str_replace(' ','',ucwords($request->input('name')));
        $newPage->order     = $lastMaxOrder + 1;
        $newPage->save();

        return redirect()->route('admin.webcontent.pages.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $page = Page::find($id);
        $all_pages = Page::all();
        return view('admin.webcontent.pages.edit', [
            'page'          => $page,
            'pages'         => $all_pages
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        //NEED ADD VALIDATION
        $page = Page::findOrFail($id);

        $input = $request->all();
        $page->fill($input)->save();

        $pages = Page::orderBy('order')->get();

        return redirect()->route('admin.webcontent.pages.index',[
            'pages' => $pages
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
