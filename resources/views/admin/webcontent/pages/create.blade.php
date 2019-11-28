@extends('admin.layouts.app')

@section('content')
<p class="display-text-4">Page content managment #Create</p>
<hr />
@if ($errors->any())
    <div id="FormAlert" class="alert alert-danger">
        <ul class="mb-0">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="row justify-content-md-center">
    <div class="col-lg-6">
        <div class="card">
        <div class="card-body">
                <form id="pageCreateForm" action="{{ action('Admin\PagesContentController@store') }}" method="POST">
                    @csrf
                    <div class="form-row">
                        <div class="col-md-12 p-2">
                            <label for="pageName">Page name:</label>
                            <input 
                                id="pageName"
                                type="text" 
                                class="form-control" 
                                name="name" 
                                aria-describedby="nameHelp" 
                                placeholder="Enter page title"
                                value="" 
                            />
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-12 p-2 gradient-buttons">
                            <button class="btn btn-success float-md-right pl-5 pr-5">Save</button>
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection