<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <form id="destroyModalForm" method="POST">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <p style="vertical-align: baseline;">
                        <icon class="mdi mdi-trash-can-outline"></icon>
                        <h5 class="modal-title" id="exampleModalLabel">Are you sure?</h5>
                    </p>
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
    $(document).on("click", ".confirm-delete-modal", function () {

        var myElementId = $(this).data('id');
        var myElementName = $(this).data('name');
        var actionUrl = $(this).data('url');

        $(".modal-body #elementName").html( myElementName );
        $("#destroyModalForm").attr('action', actionUrl );
        $('#exampleModal').modal('show');
    });
    </script>