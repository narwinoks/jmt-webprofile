    @php
        $career = json_decode($data->content, true);
    @endphp
    <div class="row">
        <input type="hidden" class="form-control" id="key" name="key" value="career">
        <input type="hidden" class="form-control" id="id" name="id" value="{{ $data->id }}">
        <div class="col-12">
            <div class="mb-3">
                <label class="form-label">Positon</label>
                <input type="text" class="form-control" id="title" name="title"
                    placeholder="Fullstact Progammer" value="{{ $data->title }}">
                <span class="error-title text-danger d-none"></span>
            </div>
        </div>
        <div class="col-12">
            <div class="mb-3">
                <label class="form-label">Deskripsi</label>
                <textarea class="form-control" name="description" id="description" rows="6"
                    placeholder="Melakukan Pemeliharaan..">{{ $career['description'] ?? '' }}</textarea>
            </div>
        </div>
        <div class="col-12">
            <div class="mb-3">
                <label class="form-label">Contact</label>
                <textarea class="form-control" name="contact" id="contact" rows="6" placeholder="Kirim lamaran anda..">{{ $career['contact'] ?? '' }}</textarea>
                <span class="error-contact text-danger d-none"></span>
            </div>
        </div>
        <div class="col-12">
            <div class="mb-3">
                <label class="form-label">Kualifikasi</label>
                <textarea class="tinymce" name="kualifikasi" id="kualifikasi" rows="6" placeholder="Content..">
                    {{ $career['kualifikasi'] ?? '' }}
                </textarea>
            </div>
        </div>
    </div>
    <script>
        tinymce.init({
            selector: "textarea.tinymce",
            theme: "modern",
            plugins: ["advlist autolink link image lists charmap print preview hr anchor pagebreak",
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
    </script>
