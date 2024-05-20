@extends('templates.public.main')
@section('title', 'Career - Jasamedika Transmedic')
@section('content')
<section class="accordion page-section-ptb">
    <div class="container">
        <div class="row mt-3">
            <div class="col-md-12">
                <div class="accordion icon" id="content">

                </div>
            </div>
            <div id="loading-animation" class="col-md-12 justify-content-center"  style="display: none">
                <img src="{{ asset('assets/images/loading.gif') }}" width="30px">
            </div>
        </div>
    </div>
</section>
@endsection
@push('scripts')
    <script>
         function loadMoreData() {
            $('#content').empty();
            $("#loading-animation").show();
            var key = 'career';
            $.ajax({
                url: "{{ route('main.data') }}",
                type: 'GET',
                data: { key: key },
                success: function(data) {
                    setTimeout(function() {
                        $("#loading-animation").hide();
                        $('#content').append(data);
                    }, 2000);
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.error("Error: " + textStatus, errorThrown);
                    $("#loading-animation").hide();
                }
            });
        }
        loadMoreData();
    </script>
@endpush
