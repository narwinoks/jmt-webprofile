@extends('templates.admin.main')
@section('content')
    <div class="page-body">
        <div class="container-xl">
            <div class="row row-cards">
                <div class="col-lg-12">
                    <button class="btn btn-primary" id="add-career">
                        Tambah
                    </button>
                </div>
                <div class="col-lg-12">
                    <div class="card">
                        <div class="p-4">
                            <table class="table table-vcenter table-nowrap" id="table-career">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Position</th>
                                        <th>Last Update</th>
                                        <th>Status</th>
                                        <th>Action</th>
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
    <div class="modal fade modal-blur" id="modal-career" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <form method="POST" id="form-add-career">
                @csrf
                @method('POST')
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Manage Career</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                    </div>
            </form>
            <div class="modal-footer">
                <button type="button" class="btn me-auto" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary btn-save" id="button-save">
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
    <script src="{{ asset('assets/template/libs/tinymce/js/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('assets/template/libs/data-tables/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('assets/main/validation.js') }}"></script>
    <script src="{{ asset('assets/main/alert.js') }}"></script>
    <script>
        $(document).ready(function() {
            var table = $("#table-career").DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: "{{ route('admin.dataTables') }}",
                    type: 'GET',
                    data: {
                        key: "career"
                    }
                },
                columns: [{
                        data: "DT_RowIndex",
                        orderable: false,
                        searchable: false,
                    },
                    {
                        data: "position",
                    },
                    {
                        data: "lastUpdate",
                    },
                    {
                        data: "status",
                    },
                    {
                        data: "action",
                        orderable: false,
                        searchable: false,
                    }
                ],
                aLengthMenu: [
                    [5, 10, 15, -1],
                    [5, 10, 15, "All"]
                ],
                iDisplayLength: 10
            });
            $("body").on("submit", "#form-add-career", function(e) {
                e.preventDefault();
                tinymce.triggerSave();
                $(this).prop('disabled', false);
                $(this).find('.spinner-border').removeClass('d-none');
                $(this).find('#tag-button').addClass('d-none');
                var form = document.getElementById('form-add-career');
                var formData = new FormData(form);
                $.ajax({
                    url: '{{ route('admin.save') }}',
                    method: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        showAlert(response.message, 'success')
                        $("#modal-career").modal("hide");
                        table.draw();
                    },
                    error: function(error) {
                        if (error.status == 400 || error.status == 422) {
                            printErrorMsg(error);
                        } else {
                            showAlert(error.responseJSON.message || 'Error', 'danger')
                        }
                    },
                    complete: function(data) {
                        $('#button-save').find('.spinner-border').addClass('d-none');
                        $('#button-save').find('#tag-button').removeClass('d-none');
                    }
                });
            });
            $("#add-career").click(function(e) {
                e.preventDefault();
                $.ajax({
                    type: "GET",
                    url: "{{ route('admin.showModal') }}",
                    data: {
                        key: "career",
                    },
                    success: function(data) {
                        $(".modal-body").html(data);
                        $("#modal-career").modal("show");
                    },
                });
            });
            $("body").on("click", ".edit-career", function(e) {
                e.preventDefault();
                $.ajax({
                    type: "GET",
                    url: "{{ route('admin.showModal') }}",
                    data: {
                        key: "career",
                        id: $(this).data("id")
                    },
                    success: function(data) {
                        $(".modal-body").html(data);
                        $("#modal-career").modal("show");
                    },
                });
            });
            $("body").on("click", ".delete-career", function(e) {
                e.preventDefault();
                var id = $(this).data("id");
                var isConfirmed = confirm("Yakin ?");
                if (isConfirmed) {
                    $.ajax({
                        type: "DELETE",
                        url: "{{ route('admin.delete') }}",
                        data: {
                            id: id,
                            _token: '{{ csrf_token() }}',
                        },
                        success: function(data) {
                            console.log(data);
                            showAlert(data.message || 'Sukses', 'danger')
                            table.draw();
                        },
                        error: function(xhr, status, error) {
                            console.error("Error: " + error);
                        }
                    });
                }
            });
        });
    </script>
@endpush
