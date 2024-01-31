@extends('templates.public.main')
@section('title', 'Insight - Jasamedika Transmedic')
@section('content')
    <section class="section-banner parallax-banner-default"></section>
    <section class="blog-single page-section-ptb">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="blog-entry mb-3">
                        <div class="owl-carousel" data-nav-dots="true" data-nav-arrow="false" data-items="1" data-sm-items="1"
                            data-lg-items="1" data-md-items="1" data-autoplay="false">
                            <div class="item">
                                <img class="img-fluid" alt="" src="assets/images/insight-iomt-1.jpg">
                            </div>
                            <div class="item">
                                <img class="img-fluid" alt="" src="assets/images/insight-iomt-2.jpg">
                            </div>
                            <div class="item">
                                <img class="img-fluid" alt="" src="assets/images/insight-iomt-3.jpg">
                            </div>
                            <div class="item">
                                <img class="img-fluid" alt="" src="assets/images/insight-iomt-4.jpg">
                            </div>
                            <div class="item">
                                <img class="img-fluid" alt="" src="assets/images/insight-iomt-5.jpg">
                            </div>
                            <div class="item">
                                <img class="img-fluid" alt="" src="assets/images/insight-iomt-6.jpg">
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="blog-detail mt-3">
                            <div class="entry-title mb-1"><br>
                                <h5><strong>Scientific Gathering “Peningkatan Pelayanan Kesehatan Berbasis IoMT dan
                                        Telemedicine dalam rangka Percepatan Implementasi Rekam Medis Elektronik”</strong>
                                </h5>
                            </div>
                            <div class="entry-meta mb-1">
                                <ul>
                                    <li><a href="#"><i class="ti-calendar"></i> 31 Oktober 2023</a></li>
                                </ul>
                            </div><br>

                            <div class="entry-content">
                                <p>Dalam rangka mendukung program Transformasi digital kesehatan di Kementerian Kesehatan
                                    Indonesia, Dinas Kesehatan Kota Bandung berkolaborasi dengan Jasa Medika Transmedic,
                                    Indofarma dan BNI mengadakan Scientific Gathering dengan tema “Peningkatan Pelayanan
                                    Kesehatan Berbasis IoMT (Internet of Medical Things) dan Telemedicine dalam rangka
                                    Percepatan Implementasi Rekam Medis Elektronik”.</p>
                                <p>Nara sumber yang mengisi acara ini berasal dari Kemenkes RI, BPJS Kesehatan, Direktur
                                    Rumah Sakit, CEO Layanan Kesehatan dan Pakar Alat Kesehatan dengan membawakan tema yang
                                    beragam yang berkisar pada pelayanan kesehatan dan Telemedicine.</p>
                                <p>Event yang diselenggarakan di Hotel Arya Duta, Bandung ini banyak dihadiri oleh pemilik
                                    Klinik Utama dan Pratama juga pimpinan Puskesmas di kota Bandung, karena pada kesempatan
                                    ini, diadakan pula beberapa Live Demo, seperti Telemonitoring System untuk pemantauan
                                    pasien jarak jauh dari Telindo P15, demo aplikasi E-Klinik dan E-Puskesmas dari
                                    Transmedic, dan demo penggunaaan aplikasi Telemedicine dari RSJP Paramarta.</p>
                                <p>Dengan banyak dukungan dari banyak kalangan tidak hanya dari institusi kesehatan, dan
                                    penyedia alat kesehatan tetapi juga dari institusi keuangan, sehingga semua ini akan
                                    semakin mempercepat proses transformasi digital kesehatan di Indonesia.</p>
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
