@extends('templates.admin.main')
@section('content')
    <div class="page-body">
        <div class="container-xl">
            <div class="row row-cards">
                <div class="col-12">
                    <form method="POST" id="formAddInsight" enctype="multipart/form-data" class="card">
                        @csrf
                        <div class="card-header">
                            <h4 class="card-title">Tambah Content Website</h4>
                            <button class="btn btn-warning ms-auto" type="button" id="btn_show_modal">Upload Image</button>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="row">
                                        <div class="col-md-12 col-xl-12">
                                            <div class="mb-3">
                                                <label class="form-label">Judul</label>
                                                <input type="text" class="form-control" name="title"
                                                    placeholder="Masukan Judul Kontent">
                                                <span class="error-title text-danger d-none"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="row">
                                        <div class="col-md-12 col-xl-12">
                                            <div class="mb-3">
                                                <label class="form-label">Kontent</label>
                                                <div class="col-md-12 col-12">
                                                    <div id="editor"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="row mt-5">
                                        <div class="col-12 text-center">
                                            <iframe id='preview'></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-end">
                            <div class="d-flex">
                                <a href="{{ route('admin.contents.index') }}" class="btn btn-link">Cancel</a>
                                <button type="button" id="bt-save-content" class="btn btn-primary ms-auto">
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
    <div class="modal fade modal-blur" id="modal-gallery" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">

            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Gallery Image</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn me-auto" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    @endsection
    @push('scripts')
        <script src="{{ asset('assets/template/libs/ace-builds/src-min/ace.js') }}"></script>
        <script src="{{ asset('assets/template/libs/ace-builds/src-min/theme-chaos.js') }}"></script>
        <script src="{{ asset('assets/main/validation.js') }}"></script>
        <script src="{{ asset('assets/main/alert.js') }}"></script>
        <script>
            $(document).ready(function() {
                var editor = ace.edit("editor");
                editor.setTheme("ace/theme/dracula");
                editor.getSession().setMode("ace/mode/html");
                editor.setOption("showPrintMargin", false);
                editor
                    .getSession()
                    .setValue(
                        `<h1>Hallo Words</h1>`
                    );
                var editorContent = editor.getSession().getValue();
                editor.getSession().on("change", function() {
                    var editorContent = editor.getSession().getValue();
                    $("#preview").contents().find("body").html(editorContent);
                });
                $("#preview").contents().find("body").html(editorContent);
                // save function
                $('#bt-save-content').on('click', function(e) {
                    e.preventDefault();
                    console.log("save function");
                    $(this).prop('disabled', false);
                    $(this).find('.spinner-border').removeClass('d-none');
                    $(this).find('#tag-button').addClass('d-none');
                    var formData = new FormData($('#formAddInsight')[0]);
                    formData.append('category', 'general');
                    formData.append("content", editor.getSession().getValue());
                    $.ajax({
                        url: '{{ route('admin.content.store') }}',
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
                            $('#bt-save-content').find('.spinner-border').addClass('d-none');
                            $('#bt-save-content').find('#tag-button').removeClass('d-none');
                        }
                    });
                });
            })
            $("#btn_show_modal").click(function(e) {
                e.preventDefault();
                $.ajax({
                    type: "GET",
                    url: "{{ route('admin.content.showGallery') }}",
                    data: {
                        key: "show_image",
                    },
                    success: function(data) {
                        console.log(data);
                        $(".modal-body").html(data);
                        $("#modal-gallery").modal("show");
                        loadArticleGallery();
                    },
                });
            });

            function loadArticleGallery() {
                $.ajax({
                    url: '{{ route('admin.content.images') }}',
                    type: 'GET'
                }).done(function(data) {
                    $("body").find("#fillimage").html(data);
                });
            }
            $("body").on("click", ".add-image", function(e) {
                e.preventDefault();
                var dataUrl = $(this).data("image");
                var imageTag =
                    "<img class='img-responsive' style='max-width: 750px; margin-left: auto; margin-right: auto;' src='" +
                    dataUrl + "' title='" + dataUrl + "'/>";
                var editor = ace.edit("editor");
                var currentText = editor.getValue();
                var newText = currentText + imageTag;
                editor.setValue(newText);
            });
            $("body").on("click", ".remove-image", function(e) {
                e.preventDefault();
                var dataId = $(this).data("id");
                $.ajax({
                    type: 'DELETE',
                    url: "{{ route('admin.content.deleteImage') }}",
                    data: {
                        id: dataId,
                        _token: '{{ csrf_token() }}',
                    },
                    success: (data) => {
                        loadArticleGallery();
                        showAlert("Data Berhasil DItambah !", "success")
                    },
                    error: function(error) {
                        printErrorMsg(error);
                        showAlert(error.responseJSON.message, "danger")
                    }
                });
            });
            $("body").on("submit", "#form-add-image", function(e) {
                e.preventDefault();
                var formData = new FormData(this);

                $.ajax({
                    type: 'POST',
                    url: "{{ route('admin.content.uploadImage') }}",
                    data: formData,
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: (data) => {
                        loadArticleGallery();
                        showAlert("Data Berhasil DiTambahkan !", "success")
                    },
                    error: function(error) {
                        printErrorMsg(error);
                        showAlert(error.responseJSON.message, "danger")
                    }
                });
            });
        </script>
    @endpush

    @push('styles')
        <style>
            #editor {
                width: auto;
                height: auto;
                min-height: 50vh;
            }

            iframe {
                width: 1200px;
                height: 40vh;
                border-style: 2px solid;
            }
        </style>
    @endpush
