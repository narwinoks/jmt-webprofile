@extends('templates.public.main')
@section('title', 'Company Partners - Jasamedika Transmedic')
@section('content')
    <section class="section-banner parallax-banner-default">
        <div class="container">
            <div class="breadcrumb-title">
                <h2>Partners</h2>
            </div>
        </div>
    </section>
    <section class="our-team page-section-ptb">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-3">
                    <div class="section-title text-center">
                        <h4><strong>Our Partner Companies</strong></h4>
                    </div>
                </div>
            </div><br><br>
            @php
                $partners = App\Helpers\content('partner');
            @endphp
            <div class="row mb-4">
                @foreach ($partners as $key => $t)
                    {!! $t->content !!}
                @endforeach
            </div>
        </div>
    </section>
@endsection
