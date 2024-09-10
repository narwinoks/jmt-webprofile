    <footer class="footer light footer-topbar page-section-pt">
        <div class="container">
            <div class="row top">
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="social">
                        @php
                            $contacts = App\Models\Content::with(['category', 'mediaku'])
                                ->where('status_enabled', true)
                                ->whereHas('category', function ($query) {
                                    $query->where('category', 'contact-us');
                                })
                                ->get();
                        @endphp
                        <h5 class="mb-2">About Us</h5>
                        <ul>
                            @foreach ($contacts as $key => $contact)
                                @if ($contact->title != 'Address')
                                    <li>
                                        <a href="{!! $contact->content !!}" target="_blank"> <i
                                                class="{{ $contact->mediaKu->url }}"></i>{{ $contact->title }}</a>
                                    </li>
                                @else
                                    <br>
                                    <li>
                                        <p>
                                            <i class="{{ $contact->mediaKu->url }}"></i>
                                            {!! $contact->content !!}
                                        </p>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="about-content">
                        @php
                            $partners = App\Models\Content::with(['category', 'mediaku'])
                                ->where('status_enabled', true)
                                ->whereHas('category', function ($query) {
                                    $query->where('category', 'partner');
                                })
                                ->get();
                        @endphp
                        <h5 class="mb-2">Client</h5>
                        <div class="owl-carousel" data-items="5" data-lg-items="4" data-md-items="3" data-sm-items="2"
                            data-space="0" data-loop="true">
                            @foreach ($partners as $key => $partner)
                                <img class="img-fluid center-block footer-partner"
                                    src="{{ asset('assets/images/' . ($partner->mediaku && $partner->mediaku->url ? $partner->mediaku->url : '')) }}"
                                    alt="">
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright mt-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-sm-6">
                        <ul class="list-inline text-left">
                            <li><a href="terms-and-conditions">Terms & Conditions </a> &nbsp;&nbsp;&nbsp;|</li>
                            <li><a href="privacy-policy">Privacy Policy </a></li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <div class="text-right">
                            <p>Copyright ©{{ date('Y') }} Jasamedika Transmedic. All Rights Reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--================================= footer -->


    <a href="https://wa.me/+6287870007781" target="_blank" class="float whatsapp">
        <i class="fa fa-whatsapp my-float"></i>
    </a>
    <!--=================================back to top -->
    <div class="back-to-top">
        <span><i class="fa fa-angle-up"></i></span>
    </div>
    <!--================================= back to top -->
    @include('templates.public.scripts')
    @stack('scripts')
