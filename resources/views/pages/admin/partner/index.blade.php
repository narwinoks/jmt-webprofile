@extends('templates.admin.main')
@section('content')
    <div class="page-body">
        <div class="container-xl">
            <div class="row row-cards">
                <div class="col-lg-12">
                    <button class="btn btn-primary" id="add-partner">
                        Tambah
                    </button>
                </div>
                <div class="col-lg-12">
                    <div class="card">
                        <div class="p-4">
                            <table class="table table-vcenter table-nowrap" id="table-partner">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Name</th>
                                        <th>Photo</th>
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
    <div class="modal fade modal-blur" id="modal-partner" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <form method="POST" id="form-menu">
                @csrf
                @method('POST')
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Manage Menu</h5>
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
        var table = $("#table-partner").DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: "{{ route('admin.data.content') }}",
                data: {
                    type: "partner"
                }
            },
            columns: [{
                    data: "DT_RowIndex",
                    orderable: false,
                    searchable: false,
                },

                {
                    data: "title",
                },
                {
                    data: "media",
                    render: function(data, type, full, meta) {
                        if (data.length > 0) {
                            return '<img src="/assets/images/' + data[0].url +
                                '" alt="Image" width="50" height="50">';
                        } else {
                            return '';
                        }
                    }
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

        $("#add-partner").click(function(e) {
            e.preventDefault();
            $.ajax({
                type: "GET",
                url: "{{ route('admin.partner.create') }}",
                data: {
                    key: "menu_create",
                },
                success: function(data) {
                    $(".modal-body").html(data);
                    $("#modal-partner").modal("show");
                },
            });
        });
        $("body").on("click", ".edit-content", function(e) {
            e.preventDefault();
            $.ajax({
                type: "GET",
                url: "{{ route('admin.partner.edit') }}",
                data: {
                    key: "partner_id",
                    id: $(this).data("id")
                },
                success: function(data) {
                    $(".modal-body").html(data);
                    $("#modal-partner").modal("show");
                },
            });
        });
        $('.btn-save').on('click', function(e) {
            e.preventDefault();
            var btnSave = $(this);
            $(this).prop('disabled', false);
            $(this).find('.spinner-border').removeClass('d-none');
            $(this).find('#tag-button').addClass('d-none');
            var formData = new FormData($('#form-menu')[0]);
            formData.append('content', 'partner');
            formData.append('category', 'partner');
            formData.append('type', 'image');
            $.ajax({
                url: '{{ route('admin.content.store') }}',
                type: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                success: function(response) {
                    $("#modal-partner").modal("hide");
                    showAlert('Sukses', "success")
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
