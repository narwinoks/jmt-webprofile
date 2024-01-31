@extends('templates.public.main')
@section('title', 'Insight - Jasamedika Transmedic')
@section('content')
    <section class="section-banner parallax-banner-default"></section>
    <section class="blog-single page-section-ptb">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="blog-entry mb-3">
                        <div class="entry-image clearfix">
                            <div class="owl-carousel" data-nav-dots="true" data-nav-arrow="false" data-items="1"
                                data-sm-items="1" data-lg-items="1" data-md-items="1" data-autoplay="false">
                                <div class="item">
                                    <div class="video-local-container">
                                        <img class="img-fluid" src="assets/images/insight-seminar-arssi-hospital-expo-2023-01.jpg"
                                            alt="">
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="video-local-container">
                                        <img class="img-fluid" src="assets/images/insight-seminar-arssi-hospital-expo-2023-02.jpg"
                                            alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="blog-detail mt-3">
                            <div class="entry-title mb-1"><br>
                                <h5><strong>Seminar Nasional IX ARSSI & Hospital Expo 2023</strong></h5>
                            </div>
                            <div class="entry-meta mb-1">
                                <ul>
                                    <li><a href="#"><i class="ti-calendar"></i> 25 Januari 2023</a></li>
                                </ul>
                            </div><br>

                            <div class="entry-content">
                                <p>Change Management in Hospital Organization in the Era of Hospital System Transformation
                                    adalah tema utama pada event Seminar Nasional IX ARSSI & Hospital Expo 2023 yang
                                    berlangsung di Hotel Alila Solo pada 25 Januari 2023. Seminar ini diadakan oleh Asosiasi
                                    Rumah Sakit Swasta Indonesia (ARSSI) dalam rangka mempersiapkan rumah sakit di Indonesia
                                    untuk menghadapi transformasi digital serta membangun relasi antar rumah sakit,
                                    komunitas kesehatan, dan penyedia layanan kesehatan.</p>
                                <p>Jasa Medika Transmedic bekerjasama dengan Samsung Business Indonesia turut berpartisipasi
                                    dalam Seminar ini sebagai bentuk dukungan terhadap peraturan Menteri Kesehatan no. 24
                                    Tahun 2022 yang mewajibkan seluruh fasilitas pelayanan kesehatan di Indonesia untuk
                                    menggunakan rekam medis elektronik sebagai dokumen dalam pemberian pelayanan di
                                    fasilitas pelayanan kesehatan.</p>
                                <p>Jasa Medika Transmedic selaku pengembang Sistem Informasi Manajemen Rumah Sakit (SIMRS)
                                    hadir dalam memberikan solusi inovatif bagi fasilitas pelayanan kesehatan khususnya
                                    rumah sakit untuk menghadapi transformasi digitalisasi di industri kesehatan.</p>
                                <br>

                                <p>Sumber :
                                    <br><a
                                        href="https://www.samsung.com/id/business/insights/samsung-tawarkan-solusi-digital-untuk-industri-kesehatan/"
                                        target="_blank">
                                        https://www.samsung.com/id/business/insights/samsung-tawarkan-solusi-digital-untuk-industri-kesehatan/
                                    </a>
                                </p>
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
