@extends('templates.public.main')
@section('title', 'Insight - Jasamedika Transmedic')
@section('content')
    <section class="section-banner parallax-banner-default">
        <div class="container">
            <div class="breadcrumb-title">
                <h2>Insight</h2>
            </div>
        </div>
    </section>
    <section class="blog-page masonry page-section-ptb">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="masonry columns-3" id="content">
                    </div>
                </div>
            </div>
            <input type="hidden" name="limit" id="limit" value="6" />
            <input type="hidden" name="offset" id="offset" value="0" />
            <div class="row">
                <div class="spinner-border text-primary" role="status">
                    <span class="sr-only">Loading...</span>
                </div>
                <div class="col-md-12 justify-content-center text-center">
                    <button class="btn show-more" id="showMoreBtn">
                        <span>Perlihatkan !</span>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <section class="case-studies popup-gallery page-section-ptb">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="mb-7 text-center"><strong>Dari Sosial Media</strong></h4>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="studies-entry mt-3">
                        <div class="entry-image clearfix">
                            <img class="img-fluid" src="assets/images/thumbnail-reel-peran-jmt-group.jpg" alt="">
                            <div class="entry-overlay">
                                <a href="https://www.instagram.com/reel/CmDSKc0gGLx/" target="_blank"> <span
                                        class="ti-instagram"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="studies-entry mt-3">
                        <div class="entry-image clearfix">
                            <img class="img-fluid" src="assets/images/thumbnail-reel-seberapa-penting.webp" alt="">
                            <div class="entry-overlay">
                                <a href="https://www.instagram.com/reel/CmGf_GkAKYh/" target="_blank"> <span
                                        class="ti-instagram"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="studies-entry mt-3">
                        <div class="entry-image clearfix">
                            <img class="img-fluid" src="assets/images/thumbnail-reel-awal-mula-jmt.webp" alt="">
                            <div class="entry-overlay">
                                <a href="https://www.instagram.com/reel/ClQk-YlpxGw/" target="_blank"> <span
                                        class="ti-instagram"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="studies-entry mt-3">
                        <div class="entry-image clearfix">
                            <img class="img-fluid" src="assets/images/thumbnail-reel-idul-fitri-1443h.webp" alt="">
                            <div class="entry-overlay">
                                <a href="https://www.instagram.com/reel/CdCj0arAyzN/" target="_blank"> <span
                                        class="ti-instagram"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('scripts')
    <script>
        var timeout;
        loadMoreData();
        $('#showMoreBtn').on('click', function() {
            loadMoreData();
        });

        function loadMoreData() {
            $("#loading-animation").show();
            var offset = parseInt($('#offset').val());
            var limit = parseInt($('#limit').val());
            $.ajax({
                url: "{{ route('insightData') }}",
                type: 'GET',
                async: false,
                data: {
                    offset: $('#offset').val(),
                    limit: $('#limit').val(),
                    key: true
                },
            }).done(function(data) {
                if (offset == 0) {
                    offset = offset + 6;

                } else {
                    offset = offset + 3;
                }
                $('#offset').val(offset);
                $('#limit').val(3);
                setTimeout(function() {
                    $("#loading-animation").hide();
                }, 6000)
                $('#content').append(data);
            }).fail(function(jqXHR, textStatus, errorThrown) {
                console.error("Error: " + textStatus, errorThrown);
            })
        }
    </script>
@endpush
@push('styles')
@endpush
