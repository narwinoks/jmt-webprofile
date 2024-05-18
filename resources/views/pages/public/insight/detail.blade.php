@extends('templates.public.main')
@section('title', 'Insight - Jasamedika Transmedic')
@section('content')
    <section class="section-banner parallax-banner-default"></section>
    <section class="blog-single page-section-ptb">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="blog-entry mb-3">
                        @if (count($content->media) > 1)
                            <div class="owl-carousel" data-nav-dots="true" data-nav-arrow="false" data-items="1"
                                data-sm-items="1" data-lg-items="1" data-md-items="1" data-autoplay="false">
                                @foreach ($content->media as $key => $item)
                                    @if ($item->type == 'video')
                                        <div class="item">
                                            <div class="video-local-container">
                                                <video width="50%" height="auto" autoplay muted controls
                                                    class="video-local-thumbnail">
                                                    <source src="{{ asset('assets/video/' . $item->url) }}">
                                                    <p class="warning">Your browser does not support HTML5 video.</p>
                                                </video>
                                            </div>
                                        </div>
                                    @elseif($item->type == 'image')
                                        <div class="item">
                                            <div class="entry-image clearfix">
                                                <img class="img-fluid" src="{{ asset('assets/images/' . $item->url) }}"
                                                    alt="">
                                            </div>
                                        </div>
                                    @else
                                        <div class="entry-image clearfix">
                                            <div class="wrapper-youtube-video">
                                                <div class="h_iframe">
                                                    <iframe class="video-info-kesehatan-youtube" src="{{ $item->url }}"
                                                        frameborder="0" allowfullscreen="allowfullscreen"></iframe>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        @else
                            @if ($content->media[0]->type == 'embed')
                                <div class="entry-image clearfix">
                                    <div class="wrapper-youtube-video">
                                        <div class="h_iframe">
                                            <iframe class="video-info-kesehatan-youtube" src="{{ $content->media[0]->url }}"
                                                frameborder="0" allowfullscreen="allowfullscreen"></iframe>
                                        </div>
                                    </div>
                                </div>
                            @endif
                            @if ($content->media[0]->type == 'image')
                                <div class="entry-image clearfix">
                                    <img class="img-fluid" src="{{ asset('assets/images/' . $content->media[0]->url) }}"
                                        alt="{{ $content->title }}">
                                </div>
                            @endif
                            @if ($content->media[0]->type == 'video')
                                <div class="entry-image clearfix">
                                    <div class="video-local-container">
                                        <video width="50%" height="auto" autoplay muted controls
                                            class="video-local-thumbnail">
                                            <source src="{{ asset('assets/video/' . $content->media[0]->url) }}">
                                            <p class="warning">Your browser does not support HTML5 video.</p>
                                        </video>
                                    </div>
                                </div>
                            @endif
                        @endif
                        <div class="clearfix"></div>
                        <div class="blog-detail mt-3">
                            <div class="entry-title mb-1"><br>
                                <h5><strong>{{ $content->title }}</strong></h5>
                            </div>
                            <div class="entry-meta mb-1">
                                <ul>
                                    <li><a href="#"><i class="ti-calendar"></i>
                                            {{ $content->created_at->format('d M Y') }}</a></li>
                                </ul>
                            </div><br>

                            <div class="entry-content">
                                {!! $content->content !!}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="sidebar-widgets-wrap m-0">
                        <div class="sidebar-widget">
                            <h5><strong>Buat SIMRS sesuai kebutuhan Anda</strong></h5>
                            <form class="gray-form row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Nama</label>
                                        <input type="text" class="form-control" id="exampleInputphone"
                                            placeholder="Nama">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Faskes / Perusahaan</label>
                                        <input type="text" class="form-control" id="exampleInputphone1"
                                            placeholder="Faskes / Perusahaan">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1"
                                            placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Telp / WhatsApp</label>
                                        <input type="texy" class="form-control" id="exampleInputPassword1"
                                            placeholder="Telp / WhatsApp">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Keterangan</label>
                                        <textarea class="form-control" rows="7" placeholder="Keterangan"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <button class="button"><span>Submit</span></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
