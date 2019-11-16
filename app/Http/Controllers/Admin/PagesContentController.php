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
        $pages = Page::orderBy('page_order')->get();
        return view('admin.pages.index', ['pages' => $pages]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        return view('admin.pages.edit', [
            'page' => $page
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
    public function update(Request $request)
    {
        $actual = Page::find($request->input('page_id'));

        switch($request->input('target'))
        {
            case 'up':
                $actual->page_order !== 0 ? $actual->page_order-- : '';
            break;
            
            case 'down':
                $actual->page_order++;
            break;
        }

        
        // dd($swaping);
        // dd($swaping_page->page_order);
        // $temp_swap_page = $swaping->page_order;
        // $swaping->page_order = $actual->page_order;
        // $actual->page_order = $temp_swap_page;

        // dd($swaping->page_order, $actual->page_order);
        // if($swaping->touch()){
            $actual->touch();
        // }

        // $pages = Page::find([$swaping_page, $request->input('page_id')]);
        
        // dd($pages);

        // $pages->map(function($pages) use ($pageID, $value){
        //     if($pages->id == $pageID) {
        //         return $pages->page_order = $pages->page_order - $value;
        //     } else {
        //         return $pages->page_order = $pages->page_order - ($value * -1); 
        //     }
        // });

        // dd($pages);

        // $pages->save();

        // $pages->where('id',$request->input['page_id'])->update(['page_order'])
        // $temp = (object) array(
            // 'old' => $page->page_order, 
            // 'actual' => $actual->page_order
            // $a = $pages
        // );

        $pages = Page::orderBy('page_order')->get();
        return redirect()->route('admin.pages.index',[
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
