@foreach ($data as $img)
    <div class="col-sm-12 col-lg-6">
        <div class="card card-sm">
            <a href="#" class="d-block"><img src="{{ asset('assets/images/' . $img->url) }}" class="card-img-top"></a>
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="ms-auto">
                        <button class="btn btn-danger btn-sm remove-image" data-id="{{ $img->id }}"
                            data-image="{{ asset('assets/images/' . $img->url) }}">Delete</button>
                        <button class="btn btn-success btn-sm add-image" data-id="{{ $img->id }}"
                            data-image="{{ asset('assets/images/' . $img->url) }}">Add</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach
