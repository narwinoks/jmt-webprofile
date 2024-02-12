<div class="row">
    <input type="hidden" class="form-control" id="id" name="id" value="{{ $contact->id }}">
    <div class="col-12">
        <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" class="form-control" id="title" value="{{ $contact->title }}" name="title"
                placeholder="Masukan Nama Menu">
            <span class="error-title text-danger d-none"></span>
        </div>
    </div>
    <div class="col-12">
        <div class="mb-3">
            <label class="form-label">Icon</label>
            <input type="text" class="form-control" id="media" name="media"
                value="{{ $contact->media[0]->url ?? null }}" placeholder="Masukan Nama Icon">
            <span class="error-url text-danger d-none"></span>
        </div>
    </div>
    <div class="col-12">
        <div class="mb-3">
            <label class="form-label">Value</label>
            <textarea class="form-control" id="content" name="content" placeholder="Masukan Nama Value">{{ $contact->content }}</textarea>
            <span class="error-order text-danger d-none"></span>
        </div>
    </div>
</div>
