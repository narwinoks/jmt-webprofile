@extends('templates.public.main')
@section('content')
    @php
        $sliders = App\Helpers\content('slider');
    @endphp
    <div id="rev_slider_19_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="seo-4"
        data-source="gallery"
        style="margin:0px auto;background-color:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">

        <div id="rev_slider_19_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.3.0.2.1">
            <ul>

               @foreach ($sliders as  $key =>$slider)
                {!! $slider->content !!}
               @endforeach

            </ul>
            <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
        </div>
    </div>
    {!! App\Helpers\contentName('digitalizings') !!}
    {!! App\Helpers\contentName('healthcare-operator') !!}
    {!! App\Helpers\contentName('about-us-home-page') !!}
    {!! App\Helpers\contentName('jasamedika-transmedic') !!}
@endsection
