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
                            <img class="img-fluid" src="assets/images/gedung-kemenkes.jpg" alt="">
                        </div>
                        <div class="clearfix"></div>
                        <div class="blog-detail mt-3">
                            <div class="entry-title mb-1"><br>
                                <h5><strong>Kemenkes Terbitkan Surat Edaran Tentang Penyelenggaraan Rekam Medis Elektronik
                                        di Fasilitas Pelayanan Kesehatan serta Penerapan Sanksi Administratif dalam rangka
                                        Pembinaan dan Pengawasan</strong></h5>
                            </div>
                            <div class="entry-meta mb-1">
                                <ul>
                                    <li><a href="#"><i class="ti-calendar"></i> 19 Desember 2023</a></li>
                                </ul>
                            </div><br>

                            <div class="entry-content">
                                <p>Pada tahun 2022 Kementerian Kesehatan telah meluncurkan peraturan baru yaitu Permenkes
                                    Nomor 24 Tahun 2022 tentang Rekam Medis, dimana seluruh fasilitas pelayanan kesehatan
                                    harus menyelenggarakan rekam medis elektronik sesuai dengan Peraturan Menteri. Permenkes
                                    tersebut memberi batas waktu hingga 31 Desember 2021 bagi Fasilitas Pelayanan Kesehatan
                                    untuk menjalankan sistem rekam medis digital ini.</p>
                                <p>Penyelenggaraan rekam medis elektronik sebagai basis pengolahan data kesehatan nasional
                                    merupakan salah satu implementasi transformasi kesehatan khususnya pilar keenam yaitu
                                    Transformasi Teknologi Kesehatan. Penyelenggaraan rekam medis elektronik mencakup
                                    pencatatan layanan melalui sistem rekam medis seperti Sistem Informasi Manajemen
                                    Puskesmas (SIMPUS), Sistem Informasi Manajemen Rumah Sakit (SIMRS), Sistem Informasi
                                    Manajemen Klinik (SIMKlinik), Sistem Informasi Manajemen Rumah Sakit General Open Source
                                    (SIMRS-GOS) atau sistem lainnya termasuk pencatatan layanan luar gedung melalui Aplikasi
                                    Sehat IndonesiaKu (ASIK) atau sistem daerah yang mengikuti standar Platform SATUSEHAT.
                                </p>
                                <p>Penyelenggaraan rekam medis elektronik di fasilitas pelayanan kesehatan harus memenuhi
                                    prinsip keamanan dan kerahasiaan yang mana data yang diproses pada rekam medis
                                    elektronik tersebut merupakan data pribadi spesifik mengacu pada Undang - Undang Nomor
                                    27 Tahun 2022 tentang Perlindungan Data Pribadi.</p>
                                <p>Untuk itu Kemenkes menerbitkan Surat Edaran Nomor HK.02.01/MENKES/1030/2023 tentang
                                    Penyelenggaraan rekam medis elektronik di fasilitas pelayanan kesehatan serta penerapan
                                    <strong>sanksi administratif</strong> dalam rangka pembinaan dan pengawasan. Surat
                                    Edaran tersebut bertujuan agar seluruh fasilitas pelayanan kesehatan untuk
                                    menyelenggarakan rekam medis elektronik dan melakukan integrasi dengan Platform
                                    SATUSEHAT sebagai upaya peningkatan mutu pelayanan kesehatan.</p>
                                <p>Sanksi administratif yang dimaksud berupa:</p>
                                <ol class="number-mark-article">
                                    <li>Teguran tertulis, bagi fasilitas pelayanan kesehatan yang belum menyelenggarakan
                                        rekam medis elektronik yang terintegrasi dengan Platform SATUSEHAT sampai de ngan
                                        tanggal 31 Desember 2023.</li>
                                    <li>Rekomendasi penyesuaian status akreditasi, bagi fasilitas pelayanan kesehatan.</li>
                                    <li>Rekomendasi pencabutan status akreditasi, bagi fasilitas pelayanan kesehatan yang
                                        tidak sama sekali melaksanakan ketentuan yang berlaku.</li>
                                </ol>
                                <p>Selain sanksi administratif, Menteri melalui Direktur Jenderal Pelayanan Kesehatan dapat
                                    meminta pengenaan <strong>sanksi berupa pencabutan perizinan berusaha</strong> kepada
                                    lembaga yang berwenang sesuai dengan ketentuan peraturan perundang-undangan.</p>

                                <br>
                                <ul class="list-mark-article">
                                    <li><a class="link-penghargaan"
                                            href="assets/images/SE_No_HK_02_01_MENKES_1030_2023_ttg_Penyelenggaraan_Rekam_Medis.pdf"
                                            target="_blank">Klik disini </a>untuk melihat Surat Edaran</li>
                                </ul>
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
