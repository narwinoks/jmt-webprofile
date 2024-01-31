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
                            <img class="img-fluid" src="images/insight-layanan-kesehatan-digital.jpg" alt="">
                        </div>
                        <div class="clearfix"></div>
                        <div class="blog-detail mt-3">
                            <div class="entry-title mb-1"><br>
                                <h5><strong>Layanan Kesehatan Digital</strong></h5>
                            </div>
                            <div class="entry-meta mb-1">
                                <ul>
                                    <li><a href="#"><i class="ti-calendar"></i> 19 Januari 2023</a></li>
                                </ul>
                            </div><br>

                            <div class="entry-content">
                                <p>Kesehatan digital, atau pelayanan kesehatan digital, adalah konsep multidisiplin yang
                                    luas yang mencakup konsep dari persimpangan antara teknologi dan pelayanan kesehatan.
                                    Kesehatan digital menerapkan transformasi digital ke bidang pelayanan kesehatan dengan
                                    menggabungkan perangkat lunak, perangkat keras, dan layanan. Kesehatan digital mencakup
                                    aplikasi kesehatan seluler (mHealth), catatan kesehatan elektronik (EHR), catatan medis
                                    elektronik (EMR), perangkat yang dapat dikenakan, telehealth dan telemedicine, serta
                                    obat-obatan yang dipersonalisasi.</p>

                                <p><strong>Apa itu kesehatan digital seperti yang kita kenal sekarang?</strong></p>
                                <p>Penerapan teknologi informasi dan komunikasi untuk memberikan intervensi kesehatan
                                    digital dalam rangka mencegah penyakit dan meningkatkan kualitas hidup bukanlah konsep
                                    baru. Namun, dalam menghadapi kekhawatiran global - terkait dengan penuaan, penyakit dan
                                    kematian anak, epidemi dan pandemi, biaya tinggi, dan efek kemiskinan dan diskriminasi
                                    rasial pada akses ke perawatan kesehatan - platform kesehatan digital, sistem kesehatan
                                    dan teknologi terkait terus tumbuh dengan penting dan berkembang.</p>

                                <p><strong>Mengapa kesehatan digital penting?</strong></p>
                                <p>Menurut Deloitte Insights, kesehatan digital menggunakan lebih dari sekadar teknologi dan
                                    alat; ia juga memandang "data yang dapat dioperasikan secara radikal, kecerdasan buatan
                                    (AI), dan platform terbuka dan aman yang dijanjikan akan lebih berfokus pada konsumen
                                    dan berorientasi pencegahan." Kemajuan dalam AI, data besar, robotika, dan pembelajaran
                                    mesin terus membawa perubahan besar dalam perawatan kesehatan digital. Selain itu,
                                    pergantian dalam lanskap perawatan kesehatan digital melanjutkan perkembangan dalam
                                    sensor yang dapat dicerna, pengasuh robot, serta perangkat dan aplikasi untuk memantau
                                    pasien dari jarak jauh.</p>
                                <p>Menurut Deloitte: "AI akan memungkinkan terobosan ilmiah besar, mempercepat penciptaan
                                    terapi dan vaksin baru untuk melawan penyakit. Terapi digital berkemampuan AI dan
                                    rekomendasi yang dipersonalisasi akan memberdayakan konsumen untuk mencegah masalah
                                    kesehatan berkembang. Wawasan yang dihasilkan AI akan memengaruhi diagnosis dan pilihan
                                    perawatan, yang mengarah ke perawatan yang lebih aman dan lebih efektif. Selain itu,
                                    solusi manufaktur dan rantai pasokan yang cerdas akan memastikan perawatan dan
                                    intervensi yang tepat diberikan pada saat yang tepat yang dibutuhkan oleh pasien. "</p>
                                <p>Precedence Research memproyeksikan bahwa pasar kesehatan digital global akan melihat
                                    tingkat pertumbuhan tahunan gabungan (CAGR) sebesar 27,9% dari 2020 hingga 2027, ketika
                                    akan mencapai $ 833,44 miliar. Menurut perusahaan riset pasar yang berbasis di Ottawa,
                                    lonjakan jumlah aplikasi perawatan kesehatan memicu pertumbuhan ini. Amerika Utara
                                    menyumbang pangsa dominan di pasar kesehatan digital global karena meningkatnya populasi
                                    lansia di kawasan ini, tingkat adopsi smartphone yang tinggi, dan dorongan untuk
                                    mengembangkan aplikasi dan platform perawatan kesehatan digital untuk mengurangi biaya
                                    pelayanan kesehatan.</p><br>

                                <p>Sumber :
                                    <br><a
                                        href="https://www.techtarget.com/searchhealthit/definition/digital-health-digital-healthcare"
                                        target="_blank">
                                        https://www.techtarget.com/searchhealthit/definition/digital-health-digital-healthcare
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
