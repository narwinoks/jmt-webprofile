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
                                <img class="img-fluid" alt="" src="images/insight-helios.jpg">
                            </div>
                            <div class="item">
                                <div class="video-local-container">
                                    <video width="32%" height="auto" autoplay muted controls
                                        class="video-local-thumbnail">
                                        <source src="video/insight-helios.mp4">
                                        <p class="warning">Your browser does not support HTML5 video.</p>
                                    </video>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="blog-detail mt-3">
                            <div class="entry-title mb-1"><br>
                                <h5><strong>TECHMED Forum “Exploring the Future of Digital Solution in Healthcare”</strong>
                                </h5>
                            </div>
                            <div class="entry-meta mb-1">
                                <ul>
                                    <li><a href="#"><i class="ti-calendar"></i> 6 September 2023</a></li>
                                </ul>
                            </div><br>

                            <div class="entry-content">
                                <p>Helios Informatika Nusantara, Samsung Indonesia dan Jasa Medika Transmedic berpartisipasi
                                    dalam Techmed Forum 2023 yang bertema “Exploring the future of digital solution in
                                    healthcare” yang diselenggarakan di Jakarta, pada hari Kamis, 13 July 2023.</p>
                                <p>Dalam Techmed Forum ini hadir beberapa Keynote Speaker seperti Patota Putra Tambunan
                                    sebagai Head of Tribe-Health Innovation Ecosystem, Digital Transformation Office
                                    Kemenkes, yang mempresentasikan tentang Implementasi Arsitektur Transformasi Kesehatan
                                    Digital 2024. Hadir pula CEO Jasa Medika Transmedic, Peni Pahlawanda yang memberikan
                                    paparan mengenai Transformasi Pelayanan Kesehatan - Digitalisasi Rumah Sakit yang
                                    Terintegrasi. Sebagai pembicara terakhir hadir Clarissa Gunawan sebagai Product
                                    Specialist Mobility dari Helios Informatika Nusantara yang mempresentasikan tentang
                                    Future of Mobility Solutions in Healthcare Industry.</p>
                                <p>Peserta yang hadir baik online dan offline terutama dari kalangan Tenaga Kesehatan
                                    (Nakes) dan IT Enthusiast yang bisnisnya bergerak di dunia kesehatan. Dengan adanya
                                    forum Techmed ini semoga semakin membuka wawasan para peserta yang hadir khususnya dari
                                    kalangan IT di bidang kesehatan.</p>
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
