@extends('admin.layouts.app')

@section('content')
    <p class="display-text-4">Navigation content managment</p>
    <hr />
    <div class="gradient-buttons">
        <a class="btn btn-success mb-3" href="{{ route('admin.webcontent.navdrawer.create') }}">
            <icon class="mdi mdi-view-grid-plus-outline"></icon>
            Add new navigation link
        </a>
    </div>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th class="text-left" style="width: 50px;">ID</th>
                <th class="text-left" style="width: auto;">Name</th>
                <th class="text-left" style="width: 250px">Target to:</th>
                <th class="text-center" style="width: 200px;">Order</th>
                <th class="text-center" style="width: 100px;">Active</th>
                <th class="text-center" style="width: 220px;">Actions</th>
            </tr>
        </thead>
            @foreach($navigation as $nav)
            <tr>
                <td class="text-center">{{ $nav->id }}</td>
                <td>{{ $nav->name }}</td>
                <td class="text-left">
                    @if(!empty($nav->page->name))
                        #{{ $nav->page->name }}
                    @endif
                </td>
                <td class="text-center">
                    @include('admin._include.table.order-body', [
                        'orderData'     => $nav,
                        'first'         => $loop->first ? true : false,
                        'last'          => $loop->last ? true : false
                    ])
                </td>
                <td class="text-center gradient-buttons">
                    <form class="d-inline" id="form-nav-id-{{ $nav->id }}" action="{!! action('Admin\NavdrawerController@update', ['id' => $nav->id]) !!}" method="POST"> 
                        @include('admin._include.buttons.bttn', [
                            'type'          => 'submit',
                            'css_class'     => $nav->active ? 'btn-success' : 'btn-secondary',
                            'name'          => 'active',
                            'value'         => $nav->active ? 0 : 1,
                            'title'         => $nav->active ? 'Dectivate' : 'Activate',
                            'disabled'      => false
                        ])
                    </form>
                </td>
                <td class="text-center gradient-buttons">
                    <form class="d-inline" id="form-nav-id-{{ $nav->id }}" action="{!! action('Admin\NavdrawerController@show', ['id' => $nav->id]) !!}" method="POST"> 
                        @include('admin._include.buttons.bttn', [
                            'type'          => 'submit',
                            'css_class'     => 'btn-light',
                            'name'          => 'edit',
                            'value'         => $nav->id,
                            'icon'          => 'mdi-file-edit-outline',
                            'title'         => 'Edit'
                        ])
                    </form>
                    <form class="d-inline" id="form-nav-id-{{ $nav->id }}" action="{!! action('Admin\NavdrawerController@show', ['id' => $nav->id]) !!}" method="POST">
                        @include('admin._include.buttons.bttn', [
                            'type'          => 'submit',
                            'css_class'     => 'btn-light',
                            'name'          => 'delete',
                            'value'         => $nav->id,
                            'icon'          => 'mdi-delete',
                            'title'         => 'Delete'
                        ])
                    </form>
                </td>
            </tr>
            @endforeach
        <tbody>
        </tbody>
    </table>
@endsection