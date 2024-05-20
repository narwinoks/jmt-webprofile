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
                <div id="loading-animation" class="col-md-12 justify-content-center" style="display: none">
                    <img src="{{ asset('assets/images/loading.gif') }}" width="30px">
                </div>
            </div>
        </div>
    </section>
@endsection
@push('scripts')
    <script>
        $(document).ready(function() {
            loadMoreData();
        });

        // Memanggil fungsi setelah memuat komponen
        function loadMoreData() {
            $('#content').empty();
            $("#loading-animation").show();
            var key = 'career';
            $.ajax({
                url: "{{ route('main.data') }}",
                type: 'GET',
                data: {
                    key: key
                },
                success: function(data) {
                    setTimeout(function() {
                        $("#loading-animation").hide();
                        $('#content').append(data);
                        testing();
                    }, 2000);
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.error("Error: " + textStatus, errorThrown);
                    $("#loading-animation").hide();
                }
            });
        }

        function testing() {
            var $acpanel = $(".accordion .acd-group > .acd-des"),
                $acsnav = $(".accordion .acd-group > .acd-heading");

            $acpanel.hide().first().slideDown("easeOutExpo");
            $acsnav.first().addClass("acd-active");
            $(".accordion").on('click', '.acd-heading',
                function() {
                    var $this = $(this).next(".acd-des");
                    $(this).closest('.accordion').find(".acd-group").removeClass("acd-active");
                    $(this).parent().addClass("acd-active");
                    $(this).closest('.accordion').find(".acd-des").not($this).slideUp("easeInExpo");
                    $(this).next().slideDown("easeOutExpo");
                    return false;
                });
        }
    </script>
@endpush
