@foreach ($contents as $kye => $content)
    <div class="masonry columns-3">
        <div class="masonry-item">
            <div class="blog-entry mb-5">
                @if ($content->thumbnail)
                    @if ($content->thumbnail->type == 'image')
                        <div class="entry-image clearfix">
                            <img class="img-fluid" src="{{ asset('assets/images/' . $content->thumbnail->url) }}"
                                alt="{{ $content->title }}">
                        </div>
                    @elseif ($content->thumbnail->type == 'embed')
                        <div class="entry-image clearfix">
                            <div class="wrapper-youtube-video">
                                <div class="h_iframe">
                                    <iframe class="video-info-kesehatan-youtube" src="{{ $content->thumbnail->url }}"
                                        frameborder="0" allowfullscreen="allowfullscreen"></iframe>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="entry-image clearfix">
                            <video width="100%" height="auto" autoplay muted controls>
                                <source src="{{ asset('assets/images/' . $content->thumbnail->url) }}">
                                <p class="warning">Your browser does not support HTML5 video.</p>
                            </video>
                        </div>
                    @endif
                @else
                @endif
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
                            <a class="button arrow"
                                href="{{ route('detailInsight', ['slug' => $content->slug]) }}">Selengkapnya<i
                                    class="fa fa-angle-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach
