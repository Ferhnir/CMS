@extends('admin.layouts.app')

@section('content')
    <p class="display-text-4">Page content managment #List</p>
    <hr />
    <div class="gradient-buttons">
        <a class="btn btn-success mb-3" href="{{ route('admin.webcontent.pages.create') }}">
            <icon class="mdi mdi-view-grid-plus-outline"></icon>
            Add new page
        </a>
    </div>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th class="text-left" style="width: 50px;">ID</th>
                <th class="text-left" style="width: auto;">Name</th>
                <th class="text-left" style="width: 300;">Html tag</th>
                <th class="text-center" style="width: 200px;">Page Order</th>
                <th class="text-center" style="width: 100px;">Active</th>
                <th class="text-center" style="width: 250px;">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pages as $page)
            <tr>
                <form id="form-page-id-{{ $page->id }}" action="{!! action('Admin\PagesContentController@update', ['id' => $page->id]) !!}" method="POST">
                @csrf
                <th  class="text-center" scope="row">{{ $page->id }}</th>
                <td class="text-left">{{ $page->name }}</td>
                <td class="text-left">#{{ $page->html_tag }}</td>
                <td class="text-center">                                      
                    @include('admin._include.table.order-body', [
                        'orderData'     => $page,
                        'first'         => $loop->first ? true : false,
                        'last'          => $loop->last ? true : false
                    ])
                </td>              
                <td class="text-center gradient-buttons">
                        @include('admin._include.buttons.bttn', [
                            'type'          => 'submit',
                            'css_class'     => $page->active ? 'btn-success' : 'btn-secondary',
                            'name'          => 'active',
                            'value'         => $page->active ? 0 : 1,
                            'title'         => $page->active ? 'Dectivate' : 'Activate',
                            'disabled'      => false
                        ])
                </td>
                </form>
                <td class="text-center gradient-buttons">
                    <form class="d-inline" id="form-page-id-{{ $page->id }}" action="{!! action('Admin\PagesContentController@show', ['id' => $page->id]) !!}" method="POST"> 
                        @include('admin._include.buttons.bttn', [
                            'type'          => 'submit',
                            'css_class'     => 'btn-warning',
                            'name'          => 'edit',
                            'value'         => $page->id,
                            'icon'          => 'mdi-file-edit-outline',
                            'title'         => 'Edit'
                        ])                    
                    </form>
                    <form class="d-inline" id="form-page-id-{{ $page->id }}" action="{!! action('Admin\PagesContentController@show', ['id' => $page->id]) !!}" method="POST">
                        @include('admin._include.buttons.bttn', [
                            'type'          => 'submit',
                            'css_class'     => 'btn-danger',
                            'name'          => 'delete',
                            'value'         => $page->id,
                            'icon'          => 'mdi-delete',
                            'title'         => 'Delete'
                        ])
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
      </table>
@endsection