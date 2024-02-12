<div class="container-xl">
    <div class="row row-cards">
        <div class="col-sm-12  col-lg-8">
            <div class="row" id="fillimage">

            </div>
        </div>
        <div class="col-sm-12  col-lg-4">
            <form action="#" method="POST" id="form-add-image">
                @csrf
                @method('POST')
                <div class="mb-3">
                    <div class="form-label">File</div>
                    <input type="file" class="form-control" name="image" id="image" accept="image/*" />
                    <span class="error-image text-danger d-none"></span>
                </div>
                <div class="mb-3">
                    <button id="button-add-image" class="btn btn-success">Upload</button>
                </div>
            </form>
        </div>
    </div>
</div>
