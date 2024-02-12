@extends('templates.admin.main')
@section('content')
    <div class="page-body">
        <div class="container-xl">
            <div class="row row-cards">
                <div class="col-lg-12">
                    <a href="{{ route('admin.insight.create') }}" class="btn btn-primary">
                        Tambah
                    </a>
                </div>
                <div class="col-lg-12">
                    <div class="card">
                        <div class="p-4">
                            <table class="table table-vcenter table-nowrap" id="table-content">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Title</th>
                                        <th>Terakhir Diupdate</th>
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
@endsection
@push('scripts')
    <script src="{{ asset('assets/template/libs/data-tables/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('assets/template/libs/data-tables/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('assets/main/validation.js') }}"></script>
    <script src="{{ asset('assets/main/alert.js') }}"></script>
    <script>
        var table = $("#table-content").DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: "{{ route('admin.data.content') }}",
                type: "GET",
                data: {
                    type: 'insight'
                },
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
                    data: "last",
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
        $("body").on("click", ".edit-content", function(e) {
            // id: $(this).data("id")
            e.preventDefault();
            var yourDataId = $(this).data("id");
            window.location.href = `{{ url('admin/insight/edit/${yourDataId}') }}`;
        });
    </script>
@endpush
@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/template/libs/data-tables/dataTables.bootstrap4.min.css') }}">
@endpush