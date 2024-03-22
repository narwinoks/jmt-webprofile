@extends('templates.public.main')
@section('title', 'Milestone - Jasamedika Transmedic')
@section('content')
    <section class="section-banner parallax-banner-default">
        <div class="container">
            <div class="breadcrumb-title">
                <h2>Milestone</h2>
            </div>
        </div>
    </section>
    <section class="page-section-ptb">
        <div class="container">
            <div class="container-history">
                @php
                    $timeline = App\Helpers\content('timeline-block');
                @endphp
                @foreach ($timeline as $key => $t)
                    {!! $t->content !!}
                @endforeach
            </div>
        </div>
    </section>
@endsection
