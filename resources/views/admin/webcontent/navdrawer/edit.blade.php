@extends('admin.layouts.app')

@section('content')
    <p class="display-text-4">Navigation link</p>
    <hr />
    <div class="card">
        <form id="pageContentForm" action="{!! action('Admin\NavdrawerController@update', ['id' => $nav->id]) !!}" method="POST">
        <div class="row">
            <div class="col-md-12">
                <div class="card-body">
                    <div class="card-title">
                        <h5 class="card-title">Header</h5>
                    </div>
                    <div class="card-body">
                        <div class="form-row">
                            <div class="col-md-5 pr-4">
                                <label for="pageName">Navigation link name</label>
                                <input 
                                    type="text" 
                                    class="form-control" 
                                    id="navName" 
                                    name="name"
                                    aria-describedby="nameHelp" 
                                    placeholder="Enter page title"
                                    value="{{ $nav->name }}"
                                >
                            </div>
                            <div class="col-md-3 pr-4 text-center">
                                <label for="navPageAssign">Assigned to page</label>
                                <select id="pagesList" class="form-control" name="page_id">
                                    @foreach ($pages as $page)
                                        @if ($page->id == $nav->page_id)
                                            <option value="{{ $page->id }}" selected>{{ $page->name }}</option>
                                        @else
                                            <option value="{{ $page->id }}">{{ $page->name }}</option>
                                        @endif    
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-2 pl-4">
                                <label for="navActive">Active</label>
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="activate-switch" name="active" value="{{ $nav->active ? 0 : 1 }}" {{ $nav->active ? 'checked' : '' }}>
                                    <label class="custom-control-label" for="activate-switch">{{ $nav->active ? 'On' : 'Off' }}</label>
                                </div>
                            </div>
                            <div class="col-md-2 pl-4">
                                <label for="navActive">Order</label>
                                <input 
                                    type="text" 
                                    class="form-control" 
                                    id="navOrder" 
                                    name="order"
                                    aria-describedby="orderHelp" 
                                    value="{{ $nav->order }}"
                                >
                                <small id="orderHelpBlock" class="form-text text-muted">
                                    Can only contain numbers 1-xx
                                </small>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary float-right mb-2">Update</button>
                </div>
            </div>
        </div>
        </form>
    </div>
@endsection