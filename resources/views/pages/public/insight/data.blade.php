@foreach ($contents as $kye => $content)
    <div class="masonry columns-3">
        <div class="masonry-item">
            <div class="blog-entry mb-5">
                <div class="entry-image clearfix">
                    <img class="img-fluid" src="{{ asset('assets/images/' . $content->thumbnail) }}" alt="">
                </div>
                <div class="blog-detail">
                    <div class="entry-title mb-1">
                        <h5><strong><a href="{{ route('detailInsight', ['slug' => $content->slug]) }}">
                                    {!! Str::limit($content->title, 50, ' ...') !!}
                                </a></strong></h5>
                    </div>
                    <div class="entry-meta mb-1">
                        <ul>
                            <li><i class="ti-calendar"></i> {{ $content->created_at->format('D M Y') }}</li>
                        </ul>
                    </div>
                    <div class="entry-share clearfix">
                        <div class="entry-button">
                            <a class="button arrow" href="{{ url($content->slug) }}">Selengkapnya<i
                                    class="fa fa-angle-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach
