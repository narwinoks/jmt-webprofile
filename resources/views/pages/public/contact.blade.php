@extends('templates.public.main')
@section('title', 'Contact Us - Jasamedika Transmedic')
@section('content')
    <section class="section-banner parallax-banner-default">
        <div class="container">
            <div class="breadcrumb-title">
                <h2>Contact Us</h2>
            </div>
        </div>
    </section>
    <section class="page-section-ptb pb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="contact-address mb-3 white-bg">
                                <div class="address-title mb-3">
                                    <h4 class="mb-1"><strong>Lokasi</strong></h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 mb-2 sm-mb-1">
                            <div class="d-flex">
                                <div class="contact-box">

                                    <div class="contact-icon">
                                        <i class="ti-direction-alt text-blue"></i>
                                    </div>
                                </div>
                                <div class="">
                                    <h6>Gedung PARAMARTA TRIDHARMA</h6>
                                    <span class="mb-0">Jl. Cikutra Baru Raya No 28<br>Bandung 40124 Indonesia</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 mb-2 sm-mb-1">
                            <div class="d-flex">
                                <div class="contact-box">

                                    <div class="contact-icon">
                                        <i class="ti-headphone-alt text-blue"></i>
                                    </div>
                                </div>
                                <div class="">
                                    <h6>+62 22 877877 81</h6>
                                    <span class="mb-0">Phone</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 mb-2 sm-mb-1">
                            <div class="d-flex">
                                <div class="contact-box">

                                    <div class="contact-icon">
                                        <i class="ti-email text-blue"></i>
                                    </div>
                                </div>
                                <div class="">
                                    <h6>info@jasamedikatransmedic.com</h6>
                                    <span class="mb-0">Email</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 mb-5 sm-mb-1">
                            <div class="d-flex">
                                <div class="contact-box">

                                    <div class="contact-icon">
                                        <i class="ti-instagram text-blue"></i>
                                    </div>
                                </div>
                                <div class="">
                                    <h6>jmtgroup.id</h6>
                                    <span class="mb-0">Instagram</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="contact-form-title mb-4">
                        <h4 class="mb-1"><strong>Hubungi Kami Sekarang</strong></h4>
                    </div>
                    <form class="gray-form row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="email" class="form-control" id="exampleInputphone" placeholder="Nama">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="email" class="form-control" id="exampleInputphone1" placeholder="No.HP">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="email" class="form-control" id="exampleInputPassword1" placeholder="Email">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <textarea class="form-control" rows="7" placeholder="Tulis pesan anda disini..."></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <button class="button"><span>Kirim</span></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
