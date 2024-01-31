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
                            <div class="wrapper-youtube-video">
                                <div class="h_iframe">
                                    <iframe class="video-info-kesehatan-youtube"
                                        src="https://www.youtube.com/embed/1tnxD7LOVls" frameborder="0"
                                        allowfullscreen="allowfullscreen"></iframe>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="blog-detail mt-3">
                            <div class="entry-title mb-1"><br>
                                <h5><strong>Apa itu SatuSehat Dan Dampak SatuSehat untuk Rumah Sakit di Indonesia</strong>
                                </h5>
                            </div>
                            <div class="entry-meta mb-1">
                                <ul>
                                    <li><a href="#"><i class="ti-calendar"></i> 19 Oktober 2022</a></li>
                                </ul>
                            </div><br>

                            <div class="entry-content">
                                <p>Pada tanggal 26 Juli 2022, Kementerian Kesehatan Indonesia (Kemenkes) meluncurkan
                                    platform SatuSehat yang bertujuan untuk mengintegrasikan seluruh data kesehatan di
                                    Indonesia dan meningkatkan efisiensi pertukaran data.</p>
                                <p>Platform SatuSehat juga diharapkan <strong>mendukung implementasi lima pilar transformasi
                                        sistem kesehatan</strong> lainnya: </p>
                                <ol class="number-mark-article">
                                    <li>transformasi layanan primer;</li>
                                    <li>transformasi layanan rujukan;</li>
                                    <li>transformasi sistem ketahanan kesehatan;</li>
                                    <li>transformasi sistem pembiayaan kesehatan dan;</li>
                                    <li>transformasi SDM kesehatan.</li>
                                </ol>
                                <p>Platform SatuSehat mengadopsi model infrastruktur Platform-as-a-service (PAAS) yang
                                    menghubungkan seluruh ekosistem industri kesehatan untuk menciptakan satu data kesehatan
                                    nasional yang dapat diandalkan dengan menggunakan SIMRS (Sistem Informasi Manajemen
                                    Rumah Sakit) berstandar FHIR HL7.</p>

                                <p><strong>FASKES YANG DIHARAPKAN UNTUK MENGIKUTI PLATFORM SATUSEHAT:</strong></p>
                                <ul class="list-mark-article">
                                    <li>RS Vertikal</li>
                                    <li>RS Pemerintah</li>
                                    <li>RS Swasta</li>
                                    <li>Puskesmas</li>
                                    <li>Posyandu</li>
                                    <li>Laboratorium</li>
                                    <li>Klinik</li>
                                    <li>Apotek</li>
                                </ul>

                                <p><strong>DAMPAK MENGINTEGRASIKAN DENGAN SATUSEHAT :</strong></p>
                                <ul class="list-mark-article">
                                    <li>Semua pasien memiliki resume rekam medis yang terekam secara digital di SatuSehat
                                        sehingga dapat diakses dimanapun dan kapanpun.</li>
                                    <li>Pasien tidak perlu untuk membawa berkas rekam medik fisik ketika berpindah rumah
                                        sakit.</li>
                                    <li>Nakes hanya perlu untuk mengisi di satu aplikasi yang terhubung secara otomatis
                                        dengan FasKes lainnya.</li>
                                </ul>

                                <p><strong>BAGAIMANA CARA MEMASTIKAN BAHWA SIMRS ANDA TERINTEGRASI DENGAN SATUSEHAT</strong>
                                </p>
                                <p>Dalam rangka mengintegrasikan sistem di Faskes dengan SatuSehat, pastikan bahwa SIMRS
                                    yang dimiliki sudah Up-To-Date dan memiliki modul-modul terintegrasi di seluruh
                                    instalasi rumah sakit :</p>
                                <ul class="list-mark-article">
                                    <li>Pendaftaran pasien yang sudah terintegrasi dengan BPJS & Dinas Kependudukan dan
                                        Pencatatan Sipil;</li>
                                    <li>Diagnosa dan prosedur medis yang terstandar secara nasional (BPJS) dan internasional
                                        (FHIR HL7, SNOMED CT dan ICD);</li>
                                    <li>Data obat yang terintegrasi dengan kamus obat (KFA);</li>
                                    <li>Data laboratorium dan radiologi yang tercatat secara otomatis dalam sistem PACS;
                                    </li>
                                    <li>Data kondisi fisik dan alergi yang tersimpan dalam EMR (Electronic Medical Record /
                                        Resume medis Elektronik)</li>
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
