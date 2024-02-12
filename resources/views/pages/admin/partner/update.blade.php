<div class="row">
    <input type="hidden" value="{{ $partner->id }}" name="id">
    <div class="col-12">
        <div class="mb-3">
            <label class="form-label">Nama</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $partner->title }}"
                placeholder="Masukan Nama Menu">
            <span class="error-title text-danger d-none"></span>
        </div>
    </div>
    <div class="col-12">
        <div class="mb-3">
            <div class="form-label">File</div>
            <input type="file" class="form-control" name="images[]" id="images[]" accept="image/*" />
            <span class="error-image text-danger d-none"></span>
        </div>
    </div>
</div>
