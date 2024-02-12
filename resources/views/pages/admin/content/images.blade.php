@foreach ($data as $key => $image)
    @if ($image->type == 'embed')
        <div class="col-3 mt-5">
            <div class="image-preview">
                <iframe width="420" height="315" src="{{ asset('assets/images/', $image->url) }}">
                </iframe>
                <div class="image-buttons">
                    <a class="btn btn-danger delete-image" data-id="{{ $image->id }}">Delete</a>
                    <a class="btn btn-success set-thumbnail" data-id="{{ $image->id }}">Set Thumbnail</a>
                </div>
            </div>
        </div>
    @elseif($image->type == 'video')
        <div class="col-3 mt-5">
            <div class="image-preview">
                <video width="100%" height="auto" autoplay muted controls>
                    <source src="{{ asset('assets/images/' . $image->url) }}">
                    <p class="warning">Your browser does not support HTML5 video.</p>
                </video>
            </div>
            <div class="image-buttons">
                <a class="btn btn-danger delete-image" data-id="{{ $image->id }}">Delete</a>
                <a class="btn btn-success set-thumbnail" data-id="{{ $image->id }}">Set Thumbnail</a>
            </div>
        </div>
    @else
        <div class="col-3 mt-5">
            <div class="image-preview">
                <img src="{{ asset('assets/images/' . $image->url) }}" alt="{{ $image->url }}">
                <div class="image-buttons">
                    <a class="btn btn-danger delete-image" data-id="{{ $image->id }}">Delete</a>
                    <a class="btn btn-success set-thumbnail" data-id="{{ $image->id }}">Set Thumbnail</a>
                </div>
            </div>
        </div>
    @endif
@endforeach
<style>
    .image-preview {
        position: relative;
        width: 100%;
        height: auto;
        overflow: hidden;
    }

    .image-preview video {
        width: 100%;
        height: auto;
        display: block;
    }

    .image-buttons {
        display: flex;
        justify-content: space-between;
        margin-top: 10px;
    }

    .btn {
        padding: 10px;
        border-radius: 5px;
        cursor: pointer;
        display: flex;
        align-items: center;
    }

    .btn-danger {
        background-color: #dc3545;
        color: #fff;
    }

    .btn-success {
        background-color: #28a745;
        color: #fff;
    }

    .fa {
        margin-right: 5px;
    }
</style>
