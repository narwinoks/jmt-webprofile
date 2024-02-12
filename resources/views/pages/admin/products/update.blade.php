    <div class="row">
        <input type="hidden" class="form-control" id="id" name="id" value="{{ $product->id }}">
        <div class="col-12">
            <div class="mb-3">
                <label class="form-label">Nama</label>
                <input type="text" class="form-control" id="title" name="title"
                    placeholder="Masukan Nama Product" value="{{ $product->title }}">
                <span class="error-title text-danger d-none"></span>
            </div>
        </div>
        <div class="col-12">
            <div class="mb-3">
                <label class="form-label">Deskripsi</label>
                <textarea class="tinymce" id="content" name="content">{{ $product->content }}</textarea>
                <span class="error-content text-danger d-none"></span>
            </div>
        </div>
        <div class="col-12">
            <div class="mb-3">
                <label class="form-label">Media</label>
                <div id="image">
                    <br>
                    <label>*ukuran maks 5MB, lebar maks: 5000px, tinggi maks: 5000px, per
                        gambar
                    </label>
                    <div class="input-images"></div>
                    <br>
                    <span class="error text-danger d-none images"></span>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="card mb-3">
                <div class="card-body">
                    <div class="row" id="image-preview">

                    </div>
                </div>
            </div>
        </div>
    </div>
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
            height: "100",
            relative_urls: false,
            remove_script_host: false,
            document_base_url: "#"
        });

        function loadImage() {
            console.log("setting image");
            var id = $('#id').val();
            $("body").find("#image-preview").load(
                "{{ route('admin.content.images', ['key' => 'get_image']) }}&id=" + id,
                () => {})
        }
        loadImage();
    </script>
