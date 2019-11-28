@extends('admin.layouts.app')

@section('content')
    <p class="display-text-4">Page content managment #Edit</p>
    <hr />
    <div class="card">
        <form id="pageContentForm" action="{!! action('Admin\PagesContentController@update', ['id' => $page->id]) !!}" method="POST">
        <div class="row">
            <div class="col-md-12">
                <div class="card-body">
                    <div class="card-title">
                        <h5 class="card-title">Header</h5>
                    </div>
                    <div class="card-body">
                        <div class="form-row">
                            <div class="col-md-8 p-3">
                                <label for="pageName">Page title</label>
                                <input 
                                    type="text" 
                                    class="form-control" 
                                    id="pageName" 
                                    name="name"
                                    aria-describedby="nameHelp" 
                                    placeholder="Enter page title"
                                    value="{{ $page->name }}"
                                >
                            </div>
                            <div class="col-md-2 text-center p-3">
                                <label for="pageActive">Active</label>
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="activate-switch" name="active" value="{{ $page->active ? 0 : 1 }}" {{ $page->active ? 'checked' : '' }}>
                                    <label class="custom-control-label" for="activate-switch">{{ $page->active ? 'On' : 'Off' }}</label>
                                </div>
                            </div>
                            <div class="col-md-2 p-3">
                                <label for="pageActive">Order</label>
                                <input 
                                    type="text" 
                                    class="form-control" 
                                    id="pageOrder" 
                                    name="order"
                                    aria-describedby="orderHelp" 
                                    value="{{ $page->order }}"
                                >
                                <small id="orderHelpBlock" class="form-text text-muted">
                                    Can only contain numbers 1-xx
                                </small>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-8 p-3">
                                <label for="pageHtmlTag">Html unique tag</label>
                                <input 
                                    type="text" 
                                    class="form-control" 
                                    id="pageHtmlTag" 
                                    aria-describedby="htmlTagHelpBlock" 
                                    placeholder="Enter page title"
                                    name="html_tag"
                                    value="{{ $page->html_tag }}"
                                >
                                <small id="htmlTagHelpBlock" class="form-text text-muted">
                                        Name can't contain white spaces between words
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
    <div class="mt-3">
        <table class="table">
            <thead class="thead">
                <tr>
                    <th class="text-left" style="width: 50px;">ID</th>
                    <th class="text-left" style="width: auto;">Element name</th>
                    <th class="text-center" style="width: 200px;">Order</th>
                    <th class="text-center" style="width: 100px;">Active</th>
                    <th class="text-center" style="width: 220px;">Actions</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
@endsection