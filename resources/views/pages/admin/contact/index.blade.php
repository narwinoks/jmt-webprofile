@extends('templates.admin.main')
@section('content')
    <div class="page-body">
        <div class="container-xl">
            <div class="row row-cards">
                <div class="col-lg-12">
                    <button class="btn btn-primary" id="add-contact">
                        Tambah
                    </button>
                </div>
                <div class="col-lg-12">
                    <div class="card">
                        <div class="p-4">
                            <table class="table table-vcenter table-nowrap" id="table-contact">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Icon</th>
                                        <th>Name</th>
                                        <th>Value</th>
                                        <th class="w-1"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade modal-blur" id="modal-contact" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <form method="POST" id="form-contact">
                @csrf
                @method('POST')
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Manage Contact</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                    </div>
            </form>
            <div class="modal-footer">
                <button type="button" class="btn me-auto" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary btn-save" id="button-save">
                    <div class="spinner-border d-none mx-4" role="status">
                    </div>
                    <span id="tag-button">
                        Simpan
                    </span>
                </button>
            </div>
        </div>
    </div>
@endsection
@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/template/libs/data-tables/dataTables.bootstrap4.min.css') }}">
@endpush
@push('scripts')
    <script src="{{ asset('assets/template/libs/data-tables/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('assets/template/libs/data-tables/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('assets/main/validation.js') }}"></script>
    <script src="{{ asset('assets/main/alert.js') }}"></script>
    <script>
        var table = $("#table-contact").DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: "{{ route('admin.data.content') }}",
                type: "GET",
                data: {
                    type: 'contact-us'
                },
            },
            columns: [{
                    data: "DT_RowIndex",
                    orderable: false,
                    searchable: false,
                },
                {
                    data: "media[0].url",
                },
                {
                    data: "title",
                },
                {
                    data: "content",
                },
                {
                    data: 'action',

                }
            ],
            aLengthMenu: [
                [5, 10, 15, -1],
                [5, 10, 15, "All"],
            ],
            iDisplayLength: 10,
            language: {
                search: "",
            },
        });

        $("#add-contact").click(function(e) {
            e.preventDefault();
            $.ajax({
                type: "GET",
                url: "{{ route('admin.contact.create') }}",
                data: {
                    key: "contact_create",
                },
                success: function(data) {
                    $(".modal-body").html(data);
                    $("#modal-contact").modal("show");
                },
            });
        });
        $("body").on("click", ".edit-content", function(e) {
            e.preventDefault();
            $.ajax({
                type: "GET",
                url: "{{ route('admin.contact.edit') }}",
                data: {
                    key: "menu_edit",
                    id: $(this).data("id")
                },
                success: function(data) {
                    $(".modal-body").html(data);
                    $("#modal-contact").modal("show");
                },
            });
        });
        $('.btn-save').on('click', function(e) {
            e.preventDefault();
            var btnSave = $(this);
            $(this).prop('disabled', false);
            $(this).find('.spinner-border').removeClass('d-none');
            $(this).find('#tag-button').addClass('d-none');
            var formData = new FormData($('#form-contact')[0]);
            formData.append('type', 'icon');
            formData.append('category', 'contact-us');
            $.ajax({
                url: '{{ route('admin.content.store') }}',
                type: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                success: function(response) {
                    $("#modal-contact").modal("hide");
                    showAlert("Sukses", "success")
                    table.draw();
                },
                error: function(error) {
                    if (error.status == 400) {
                        printErrorMsg(error);
                    } else {
                        showAlert(error.responseJSON.message, "danger")
                    }
                },
                complete: function(data) {
                    $('.btn-save').find('.spinner-border').addClass('d-none');
                    $('.btn-save').find('#tag-button').removeClass('d-none');
                }
            });
        });
    </script>
@endpush
