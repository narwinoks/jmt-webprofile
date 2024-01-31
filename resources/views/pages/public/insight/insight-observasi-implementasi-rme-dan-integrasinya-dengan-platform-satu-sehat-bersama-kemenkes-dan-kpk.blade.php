@extends('templates.public.main')
@section('title', 'Insight - Jasamedika Transmedic')
@section('content')
    <section class="section-banner parallax-banner-default"></section>
    <section class="blog-single page-section-ptb">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="blog-entry mb-3">
                        <div class="owl-carousel" data-nav-dots="true" data-nav-arrow="false" data-items="1" data-md-items="1"
                            data-sm-items="1" data-xs-items="1" data-autoplay="false">
                            <div class="item">
                                <div class="studies-entry">
                                    <div class="entry-image clearfix">
                                        <img class="img-fluid" src="assets/images/insight-observasi-implementasi-rme-01.jpg"
                                            alt="#">
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="studies-entry">
                                    <div class="entry-image clearfix">
                                        <img class="img-fluid" src="assets/images/insight-observasi-implementasi-rme-02.jpg"
                                            alt="#">
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="studies-entry">
                                    <div class="entry-image clearfix">
                                        <img class="img-fluid" src="assets/images/insight-observasi-implementasi-rme-03.jpg"
                                            alt="#">
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="studies-entry">
                                    <div class="entry-image clearfix">
                                        <img class="img-fluid" src="assets/images/insight-observasi-implementasi-rme-04.jpg"
                                            alt="#">
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="studies-entry">
                                    <div class="entry-image clearfix">
                                        <img class="img-fluid" src="assets/images/insight-observasi-implementasi-rme-05.jpg"
                                            alt="#">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="blog-detail mt-3">
                            <div class="entry-title mb-1"><br>
                                <h5><strong>Observasi Implementasi Rekam Medis Elektronik (RME) dan Integrasinya dengan
                                        platform SATU SEHAT bersama Kemenkes dan Komisi Pemberantasan Korupsi (KPK)</strong>
                                </h5>
                            </div>
                            <div class="entry-meta mb-1">
                                <ul>
                                    <li><a href="#"><i class="ti-calendar"></i> 5 September 2023</a></li>
                                </ul>
                            </div><br>

                            <div class="entry-content">
                                <p>Dalam rangka pelaksaan Strategi Nasional Pencegahan Korupsi (Stranas PK) tahun 2023
                                    khususnya aksi optimalisasi interoperabilitas data berbasis NIK untuk program
                                    pemerintah, Digital Transformation Office (DTO) Kemenkes bersama dengan Komisi
                                    Pemberantasan Korupsi (KPK) dan Dinas Kesehatan (Dinkes) kota Bandung dan Jawa Barat
                                    mengadakan kunjungan ke RS Jantung & Pembuluh Darah (RSJP) Paramarta pada hari Jum’at 1
                                    September 2023.</p>
                                <p>Pada kesempatan ini RSJP Paramarta mempresentasikan penggunaan SIMRS Transmedic yang
                                    sudah terintegrasi dan terstandar Kemenkes, khususnya implementasi RME dan integrasinya
                                    dengan platform SATU SEHAT milik Kemenkes. Selain ini Kemenkes dan KPK juga memantau
                                    kesiapan dalam hal rujukan klaim Jaminan Kesehatan Nasional (JKN) yang kedepannya klaim
                                    JKN ini bisa merujuk pada Rekam Medis Elektronik, sistem yang berbasis lebih transparan
                                    dan akuntabilitas dalam pelayanan publik.</p>
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
