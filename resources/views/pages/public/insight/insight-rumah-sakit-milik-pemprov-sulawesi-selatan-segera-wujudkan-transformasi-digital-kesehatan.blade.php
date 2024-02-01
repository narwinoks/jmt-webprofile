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
                            <img class="img-fluid" src="assets/images/seminar-makassar-03.jpg" alt="">
                        </div>
                        <div class="clearfix"></div>
                        <div class="blog-detail mt-3">
                            <div class="entry-title mb-1"><br>
                                <h5><strong>Rumah Sakit Milik Pemprov Sulawesi Selatan Segera Wujudkan Transformasi Digital
                                        Kesehatan</strong></h5>
                            </div>
                            <div class="entry-meta mb-1">
                                <ul>
                                    <li><a href="#"><i class="ti-calendar"></i> 3 Januari 2024</a></li>
                                </ul>
                            </div><br>

                            <div class="entry-content">
                                <p>PT. Jasa Medika Transmedic, Bandung berkolaborasi dengan pemerintah provinsi Sulawesi
                                    Selatan dalam rangka mewujudkan program transformasi digital kesehatan pada layanan
                                    kesehatan. Dengan adanya kerjasama ini diharapkan bisa mempercepat implementasi program
                                    digitalisasi kesehatan di rumah sakit maupun layanan kesehatan lainnya sehingga bisa
                                    memberikan pelayanan yang lebih baik dan efiesien di seluruh Sulawesi Selatan.</p>
                                <br>

                                <p>Sumber :
                                    <br><a
                                        href="https://makassar.antaranews.com/berita/518427/pj-sekda--rs-milik-pemprov-sulsel-segera-wujudkan-transformasi-digital-kesehatan"
                                        target="_blank">
                                        https://makassar.antaranews.com/berita/518427/pj-sekda--rs-milik-pemprov-sulsel-segera-wujudkan-transformasi-digital-kesehatan
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
