<div class="row">
    <div class="col-12">
        <div class="mb-3">
            <label class="form-label">Head</label>
            <select class="form-select" id="menu_id" name="menu_id">
                <option value="">Pilih Menu</option>
                @foreach ($menus as $key => $m)
                    <option {{ $menu->menu_id == $m->id ? 'selected' : '' }} value="{{ $m->id }}">
                        {{ $m->name }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <input type="hidden" class="form-control" id="id" name="id" value="{{ $menu->id }}"
        placeholder="Masukan Nama Menu">
    <div class="col-12">
        <div class="mb-3">
            <label class="form-label">Nama</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $menu->name }}"
                placeholder="Masukan Nama Menu">
            <span class="error-name text-danger d-none"></span>
        </div>
    </div>
    <div class="col-12">
        <div class="mb-3">
            <label class="form-label">Url</label>
            <input type="text" class="form-control" id="url" name="url" value="{{ $menu->url }}"
                placeholder="Masukan Nama URL">
            <span class="error-url text-danger d-none"></span>
        </div>
    </div>
    <div class="col-12">
        <div class="mb-3">
            <label class="form-label">Order</label>
            <input type="text" class="form-control" value="{{ $menu->order }}" id="order" name="order"
                placeholder="Masukan Nama Order">
            <span class="error-order text-danger d-none"></span>
        </div>
    </div>
    <div class="col-12">
        <div class="mb-3">
            <label class="form-label">Deskripsi</label>
            <textarea class="form-control" name="description" value="{{ $menu->description }}" id="description" rows="6"
                placeholder="Content.."></textarea>
        </div>
    </div>
</div>
