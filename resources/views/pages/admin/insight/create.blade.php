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
                                                <input type="text" class="form-control" name="title"
                                                    placeholder="Masukan Judul Artikel">
                                                <span class="error-title text-danger d-none"></span>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 col-xl-12">
                                            <div class="mb-3">
                                                <label class="form-label">Tanggal</label>
                                                <input type="date" class="form-control" name="date"
                                                    placeholder="Masukan Tanggal Artikel">
                                                <span class="error-date text-danger d-none"></span>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 col-xl-12">
                                            <div class="mb-3">
                                                <label class="form-label">Masukan Body</label>
                                                <textarea class="tinymce" name="content" rows="6" placeholder="Content.."></textarea>
                                                <span class="error-content text-danger d-none"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 col-xl-4">
                                            <div class="mb-3">
                                                <div class="form-label">Tipe Gambar</div>
                                                <select class="form-select" id="type" name="type">
                                                    <option value="">Plih Tipe</option>
                                                    <option value="image">Image</option>
                                                    <option value="embed">Embed</option>
                                                    <option value="video">Video</option>
                                                </select>
                                            </div>
                                            <span class="error-type text-danger d-none"></span>
                                        </div>
                                        <div class="col-md-8 col-xl-8">
                                            <div class="row" id="embed">
                                                <div class="col-12">
                                                    <div class="mb-3">
                                                        <label class="form-label">Embed</label>
                                                        <div class="input-group mb-2">
                                                            <input type="text" class="form-control" name="embed"
                                                                placeholder="https://www.youtube.com/embed/tgbNymZ7vqY?autoplay=1&mute=1"
                                                                aria-describedby="title" value="{{ old('image') }}" />
                                                            <button class="btn" type="button">+</button>
                                                        </div>
                                                    </div>
                                                    <span class="error text-danger d-none video"></span>
                                                </div>
                                            </div>
                                            <div id="image" style="display: none">
                                                <label class="form-label mb-4" for="title">Upload image</label>
                                                <br>
                                                <label>*ukuran maks 5MB, lebar maks: 5000px, tinggi maks: 5000px, per
                                                    gambar
                                                </label>
                                                <div class="input-images"></div>
                                                <br>
                                                <span class="error text-danger d-none images"></span>
                                            </div>
                                            <div id="video" style="display: none">
                                                <div class="mb-3">
                                                    <div class="form-label">Video</div>
                                                    <input type="file" name="video" class="form-control" />
                                                </div>
                                                <span class="error text-danger d-none"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">

                                    </div>
                                </div>
                                <label class="row">
                                    <div class="col-md-6 col-xl-6">
                                        <div class="mb-3">
                                            <div class="form-label">Tambahkan Meta Data</div>
                                            <label class="form-check form-switch">
                                                <input class="form-check-input switch" type="checkbox" />
                                            </label>
                                        </div>
                                    </div>
                                </label>
                                <div class="col-md-12 col-xl-12" style="display: none" id="meta_data">
                                    <div class="mb-3">
                                        <label class="form-label">Meta Data</label>
                                        <textarea class="form-control" name="meta" rows="5"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-end">
                            <div class="d-flex">
                                <a href="{{ route('admin.insight.index') }}" class="btn btn-link">Cancel</a>
                                <button type="button" id="bt-save-insight" class="btn btn-primary ms-auto">
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
@push('styles')
    <link type="text/css" rel="stylesheet"
        href="{{ asset('assets/template/libs/image-upload/image-uploader.min.css') }}" />
@endpush
@push('scripts')
    <script src="{{ asset('assets/template/libs/tinymce/js/tinymce/tinymce.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/template/libs/image-upload/image-uploader.min.js') }}"></script>
    <script src="{{ asset('assets/main/validation.js') }}"></script>
    <script src="{{ asset('assets/main/alert.js') }}"></script>
    <script>
        $('.input-images').imageUploader();
        tinymce.init({
            selector: "textarea.tinymce",
            theme: "modern",
            plugins: [
                "advlist autolink link image lists charmap print preview hr anchor pagebreak",
                "searchreplace wordcount visualblocks visualchars insertdatetime media nonbreaking",
                "table contextmenu directionality emoticons paste textcolor code"
            ],
            toolbar1: "undo redo | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent",
            toolbar2: "| link unlink anchor | image media | forecolor backcolor  | print preview code | fontsizeselect",
            image_advtab: true,
            fontsize_formats: '8pt 9pt 10pt 11pt 12pt 13pt 14pt 15pt 16pt 18pt',
            content_style: "div, p { font-size: 14px; }",
            height: "400",
            relative_urls: false,
            remove_script_host: false,
            document_base_url: "#"

        });
        $("#type").change(function() {
            var selectedType = $(this).val();
            if (selectedType == 'embed') {
                $('#embed').show();
                $('#image').hide();
                $('#video').hide();
            } else if (selectedType == 'image') {
                $('#image').show();
                $('#embed').hide();
                $('#video').hide();
            } else if (selectedType == 'video') {
                $('#video').show();
                $('#embed').hide();
                $('#image').hide();
            }
        });
        $('.switch').on('change', function() {
            var isChecked = $(this).prop('checked');
            if (isChecked) {
                $('#meta_data').show();
            } else {
                $('#meta_data').hide();
            }
        });
        // save function
        $(document).ready(function() {
            $('#bt-save-insight').on('click', function(e) {
                e.preventDefault();
                console.log("save function");
                tinymce.triggerSave();
                $(this).prop('disabled', false);
                $(this).find('.spinner-border').removeClass('d-none');
                $(this).find('#tag-button').addClass('d-none');
                var formData = new FormData($('#formAddInsight')[0]);
                formData.append('category', 'insight');
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
                        $('#bt-save-insight').find('.spinner-border').addClass('d-none');
                        $('#bt-save-insight').find('#tag-button').removeClass('d-none');
                    }
                });
            });
        })
    </script>
@endpush
