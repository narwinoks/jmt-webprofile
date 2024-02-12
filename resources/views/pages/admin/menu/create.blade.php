<div class="row">
    <div class="col-12">
        <div class="mb-3">
            <label class="form-label">Head</label>
            <select class="form-select" id="menu_id" name="menu_id">
                <option value="">Pilih Menu</option>
                @foreach ($menus as $key => $menu)
                    <option value="{{ $menu->id }}">{{ $menu->name }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="col-12">
        <div class="mb-3">
            <label class="form-label">Nama</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Masukan Nama Menu">
            <span class="error-name text-danger d-none"></span>
        </div>
    </div>
    <div class="col-12">
        <div class="mb-3">
            <label class="form-label">Url</label>
            <input type="text" class="form-control" id="url" name="url" placeholder="Masukan Nama URL">
            <span class="error-url text-danger d-none"></span>
        </div>
    </div>
    <div class="col-12">
        <div class="mb-3">
            <label class="form-label">Order</label>
            <input type="text" class="form-control" id="order" name="order" placeholder="Masukan Nama Order">
            <span class="error-order text-danger d-none"></span>
        </div>
    </div>
    <div class="col-12">
        <div class="mb-3">
            <label class="form-label">Deskripsi</label>
            <textarea class="form-control" name="description" id="description" rows="6" placeholder="Content.."></textarea>
        </div>
    </div>
</div>
