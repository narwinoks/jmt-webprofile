@extends('templates.public.main')
@section('title', 'Hardware - Jasamedika Transmedic')
@section('content')
    <section class="section-banner parallax-banner-hardware">
        <div class="container">
            <div class="breadcrumb-title">
                <h2>Network & Software</h2>
            </div>
        </div>
    </section>
    @foreach ($products as $kye => $product)
        <section class="page-section-ptb">
            <div class="container">
                <div class="row valign">
                    <div class="col-md-6 align-self-center" data-valign-overlay="middle">
                        <img class="img-fluid center-block bottom-m asset-box-shadow-img" alt=""
                            src="{{ asset('assets/images/' . $product->mediaku->url) }}">
                    </div>
                    <div class="col-md-6 text-left">
                        <h4 class="mb-4"><strong>{{ $product->title }}</strong></h4>
                        {!! $product->content !!}
                    </div>
                </div>
            </div>
        </section>
        <div class="container">
            <hr class="product-separator">
        </div>
    @endforeach
@endsection
