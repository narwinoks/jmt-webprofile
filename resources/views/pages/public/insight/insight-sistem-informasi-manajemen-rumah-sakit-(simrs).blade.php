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
                            <img class="img-fluid" src="assets/images/insight-simrs.jpg" alt="">
                        </div>
                        <div class="clearfix"></div>
                        <div class="blog-detail mt-3">
                            <div class="entry-title mb-1"><br>
                                <h5><strong>Sistem Informasi Manajemen Rumah Sakit (SIMRS)</strong></h5>
                            </div>
                            <div class="entry-meta mb-1">
                                <ul>
                                    <li><a href="#"><i class="ti-calendar"></i> 14 Desember 2023</a></li>
                                </ul>
                            </div><br>

                            <div class="entry-content">
                                <p>Sistem Informasi Rumah Sakit, atau dikenal dengan Hospital Information Service, mengacu
                                    pada komponen sistem informasi kesehatan yang berfokus pada aspek administratif,
                                    keuangan, dan kebutuhan klinis rumah sakit. Sistem Informasi Rumah Sakit dapat
                                    meningkatkan kemampuan tenaga medis untuk mengkoordinasikan seluruh layanan medis
                                    melalui penyediaan informasi kesehatan pasien, riwayat tindakan yang pernah dijalani,
                                    serta langkah tindakan medis yang diperlukan. Sehingga, sistem ini dirancang untuk
                                    mengumpulkan data secara tersinkron antar satu departemen dengan yang lain, mengelola
                                    kebutuhan pasien, dan mengevaluasi situasi medis dalam sebuah rumah sakit. Semuanya
                                    dilakukan dengan presisi, akurat, dan aktual.</p>
                                <p>Terdapat beberapa komponen di dalam sistem informasi rumah sakit, yang terdiri atas:</p>
                                <ol class="number-mark-article">
                                    <li>Komponen inti yang mengelola operasional harian rumah sakit</li>
                                    <li>Sistem keuangan dan manajemen bisnis yang mengelola layanan medis pasien serta
                                        informasi manajerial internal</li>
                                    <li>Sistem komunikasi atau jaringan yang mengelola sistem penjadwalan klinik dan janji
                                        temu dengan dokter</li>
                                    <li>Sistem manajemen departemen yang berhubungan pada pengambilan keputusan manajerial
                                        rumah sakit baik jangka pendek maupun panjang, termasuk manajemen krisis.</li>
                                    <li>Sistem dukungan medis yang mengelola aktivitas layanan medis baik untuk pasien rawat
                                        jalan maupun rawat inap termasuk tindakan medis yang diperlukan.</li>
                                </ol>

                                <p>Dengan kehadiran sistem informasi rumah sakit, maka rumah sakit dapat meningkatkan
                                    kualitas layanan medis secara menyeluruh, khususnya bagian rawat jalan dan UGD.
                                    Efisiensi dan efektivitas tindakan medis juga meningkat akibat sistem pelaporan medis
                                    yang semakin aktual dan cepat antar departemen, serta mengurangi kemungkinan duplikasi
                                    informasi dan miskomunikasi yang biasanya terjadi akibat penulisan manual (tulisan
                                    dokter yang sulit dibaca). Keamanan dan keabsahan informasi juga dapat dijamin karena
                                    tidak dapat diubah oleh pihak yang tidak berwenang. Selain itu sistem manajemen rumah
                                    sakit juga berjalan lebih efisien dan efektif akibat alur informasi yang lebih lancar
                                    dan konsisten.</p><br>

                                <p>Sumber :
                                    <br><a
                                        href="https://www.talkinghealthtech.com/glossary/hospital-information-systems-his"
                                        target="_blank">
                                        https://www.talkinghealthtech.com/glossary/hospital-information-systems-his
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
