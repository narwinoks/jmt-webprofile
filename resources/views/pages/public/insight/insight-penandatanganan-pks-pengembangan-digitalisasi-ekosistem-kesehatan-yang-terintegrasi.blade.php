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
                                        <img class="img-fluid"
                                            src="assets/images/insight-penandatanganan-pks-jmt-telkom-1.jpg" alt="#">
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="studies-entry">
                                    <div class="entry-image clearfix">
                                        <img class="img-fluid"
                                            src="assets/images/insight-penandatanganan-pks-jmt-telkom-2.jpg" alt="#">
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="studies-entry">
                                    <div class="entry-image clearfix">
                                        <img class="img-fluid"
                                            src="assets/images/insight-penandatanganan-pks-jmt-telkom-3.jpg" alt="#">
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="clearfix"></div>
                        <div class="blog-detail mt-3">
                            <div class="entry-title mb-1"><br>
                                <h5><strong>Penandatanganan PKS Pengembangan Digitalisasi Ekosistem Kesehatan yang
                                        Terintegrasi antara Jasamedika Saranatama (JMT Group) dan Telkom Indonesia</strong>
                                </h5>
                            </div>
                            <div class="entry-meta mb-1">
                                <ul>
                                    <li><a href="#"><i class="ti-calendar"></i> 23 Mei 2023</a></li>
                                </ul>
                            </div><br>

                            <div class="entry-content">
                                <p>Jasamedika Saranatama (JMT Group) menjalin kerja sama dengan Telkom Indonesia melalui
                                    Divisi Digital Business & Technology untuk pengembangan bersama dan penyediaan
                                    digitalisasi fasilitas layanan kesehatan berbasis ekosistem kesehatan yang terintegrasi.
                                    Penandatanganan perjanjian kerja sama ini dilakukan oleh EVP Digital Business &
                                    Technology Telkom, Komang Budi Aryasa dengan Direktur Utama PT Jasamedika Saranatama,
                                    Peni Pahlawanda yang bertempat di Telkom Landmark Tower, Jakarta pada Senin, 22 Mei
                                    2023.</p>
                                <br>

                                <p>Baca lebih lengkap disini :
                                    <br><a href="https://partner.telkom.co.id/news/646d872440c79c001352cfe5"
                                        target="_blank">
                                        https://partner.telkom.co.id/news/646d872440c79c001352cfe5
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
