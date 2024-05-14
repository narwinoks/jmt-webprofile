@extends('templates.public.main')
@section('title', 'About Us - Jasamedika Transmedic')
@section('content')
    <section class="section-banner parallax-banner-default">
        <div class="container">
            <div class="breadcrumb-title">
                <h2>About Us</h2>
            </div>
        </div>
    </section>
    {!! App\Helpers\contentName('visi-misi') !!}
    {!! App\Helpers\contentName('accreditations') !!}
    <section class="blue-bg our-story page-section-ptb">
        <div class="container">
            <div class="row no-gutter text-center">
                <div class="col-lg-12 col-md-12 align-self-center">
                    <div class="section-title text-center">
                        <h4 class="text-white"><strong>Jasamedika Transmedic (Corporate
                                Holding)<br><br>Subsidiaries</strong></h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <br><br><br>
                    <hr class="hr-counter">
                </div>
            </div>
        </div>
    </section>
    @php
        $company = App\Helpers\content('subsidiary');
    @endphp
    @foreach ($company as $key => $com)
        {!! $com->content !!}
    @endforeach
@endsection
