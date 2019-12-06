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
                <a 
                    data-toggle="modal" 
                    data-id="{{ $page->id }}" 
                    data-name="{{ $page->name }}"
                    data-url="{{ route('admin.webcontent.pages.delete', ['id' => $page->id]) }}" 
                    title="Delete" 
                    class="open-modal btn btn-danger btn-sm">
                    Delete
                </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

      
     <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <form id="destroyModalForm" method="POST">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Are you sure?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p class="text-center">Do you want to delete:</p>
                    <h3 id="elementName" class="text-center"></h3>    
                </div>
                <div class="modal-footer">
                    <button id="destroyBtn" type="submit" class="btn btn-danger btn-block">Delete</button>
                    <button type="button" class="btn btn-success btn-block mt-0" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
        </form>
    </div>
    <script>
    $(document).on("click", ".open-modal", function () {

        var myElementId = $(this).data('id');
        var myElementName = $(this).data('name');
        var actionUrl = $(this).data('url');

        $(".modal-body #elementName").html( myElementName );
        $("#destroyModalForm").attr('action', actionUrl );
        $('#exampleModal').modal('show');
    });
    </script>
@endsection