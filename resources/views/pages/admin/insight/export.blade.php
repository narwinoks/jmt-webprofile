@extends('templates.admin.main')
@section('content')
    <div class="page-body">
        <div class="container-xl">
            <div class="row row-cards">
                <div class="col-12">
                    <form method="POST" id="formAddInsight" enctype="multipart/form-data" class="card">
                        @csrf
                        <div class="card-header">
                            <h4 class="card-title">Tambah Insight Artikel</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="row">
                                        <div class="col-md-12 col-xl-12">
                                            <div class="mb-3">
                                                <label class="form-label">Judul</label>
                                                <input type="file" class="form-control" name="file"
                                                    placeholder="Masukan Judul Artikel"
                                                    accept=".csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel">
                                                <span class="error-file text-danger d-none"></span>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-end">
                            <div class="d-flex">
                                <a href="{{ route('admin.insight.index') }}" class="btn btn-link">Cancel</a>
                                <button type="button" id="bt-export-insight" class="btn btn-primary ms-auto">
                                    <div class="spinner-border d-none mx-4" role="status">
                                    </div>
                                    <span id="tag-button">
                                        Simpan
                                    </span>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script src="{{ asset('assets/main/validation.js') }}"></script>
    <script src="{{ asset('assets/main/alert.js') }}"></script>
    <script>
        // save function
        $(document).ready(function() {
            $('#bt-export-insight').on('click', function(e) {
                e.preventDefault();
                $(this).prop('disabled', false);
                $(this).find('.spinner-border').removeClass('d-none');
                $(this).find('#tag-button').addClass('d-none');
                var formData = new FormData($('#formAddInsight')[0]);
                formData.append('category', 'insight');
                $.ajax({
                    url: '{{ route('admin.insight.store') }}',
                    type: 'POST',
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        showAlert("Success !", "success")
                    },
                    error: function(error) {
                        if (error.status == 400 || error.status == 422) {
                            printErrorMsg(error);
                        } else {
                            showAlert(error.responseJSON.message, "danger")
                        }
                    },
                    complete: function(data) {
                        $('#bt-export-insight').find('.spinner-border').addClass('d-none');
                        $('#bt-export-insight').find('#tag-button').removeClass('d-none');
                    }
                });
            });
        })
    </script>
@endpush
