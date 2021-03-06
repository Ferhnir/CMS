@extends('admin.layouts.app')

@section('content')
<p class="display-text-4">Page content managment #Create</p>
<hr />
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
                                class="form-control @error('name') is-invalid @enderror" 
                                name="name" 
                                aria-describedby="nameHelp" 
                                placeholder="Enter page title"
                                value="{{ old('name') }}" 
                            />
                            @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
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