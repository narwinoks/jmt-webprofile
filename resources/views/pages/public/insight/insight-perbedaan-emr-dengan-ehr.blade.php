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
                            <img class="img-fluid" src="images/insight-rme.jpg" alt="">
                        </div>
                        <div class="clearfix"></div>
                        <div class="blog-detail mt-3">
                            <div class="entry-title mb-1"><br>
                                <h5><strong>Perbedaan EMR (Electronic Medical Record) dengan EHR (Electronic Health
                                        Record)</strong></h5>
                            </div>
                            <div class="entry-meta mb-1">
                                <ul>
                                    <li><a href="#"><i class="ti-calendar"></i> 2 Januari 2023</a></li>
                                </ul>
                            </div><br>

                            <div class="entry-content">
                                <p>Electronic Medical Record (EMR) atau dikenal sebagai Rekam Medis Elektronik adalah rekam
                                    medis berbasis digital yang menggantikan laporan rekam medis kertas. EMR biasanya memuat
                                    riwayat kesehatan dan perawatan yang telah dijalani pasien. Karena berbasis digital,
                                    maka EMR memiliki kelebihan dibandingkan rekam medis biasa. Yaitu:</p>
                                <ol class="number-mark-article">
                                    <li>Pemantauan data yang mutakhir dan aktual</li>
                                    <li>Lebih mudah untuk mengidentifikasi pasien sesuai dengan kebutuhan pemeriksaan dan
                                        tindakan pencegahan</li>
                                    <li>Dapat memantau riwayat pasien dalam hal tertentu dengan lebih akurat seperti kondisi
                                        tekanan darah dan vaksin</li>
                                    <li>Monitoring yang lebih akurat sehingga dapat meningkatkan kualitas pelayanan medis
                                        yang diterima oleh pasien.</li>
                                </ol>

                                <p>Electronic Health Record (EHR) mencakup hal yang lebih luas dari EMR, karena menyediakan
                                    gambaran kesehatan pasien secara komprehensif dan menyeluruh. EHR ini tidak hanya
                                    terjangkau dalam lingkup satu rumah sakit atau institusi kesehatan, namun juga dapat
                                    diakses oleh institusi kesehatan lainnya. Sehingga ketika pasien mengunjungi rumah sakit
                                    atau laboratorium kesehatan lain, maka sudah terdapat rekaman kesehatan dari institusi
                                    kesehatan sebelumnya yang mencatat data pasien. Bahkan, data tersebut juga dapat terus
                                    diperbaharui oleh institusi kesehatan yang baru sehingga pasien dan rumah sakit dapat
                                    terus mengikuti perkembangan kesehatannya.</p>

                                <p>Dengan penggunaan EHR, maka:</p>
                                <ol class="number-mark-article">
                                    <li>Tenaga medis manapun dapat memperoleh informasi medis penting mengenai pasien
                                        tersebut bahkan dalam keadaan darurat ketika pasien tengah dalam kondisi yang kritis
                                        (tidak dapat memberikan informasi).</li>
                                    <li>Pasien dapat memantau sendiri kondisi kesehatannya dari rekam medis rumah sakit dan
                                        laboratorium dari waktu ke waktu. Sehingga pasien dapat mengevaluasi sendiri
                                        mengenai kesehatannya dan hal-hal yang perlu dilakukan terhadap kondisi tersebut.
                                    </li>
                                    <li>Hasil laboratorium termutakhir dapat diakses oleh tenaga medis yang membutuhkan
                                        informasi tanpa harus melakukan pemeriksaan ulang.</li>
                                    <li>Dokter dan tenaga medis rawat inap dapat memberikan informasi tambahan dan
                                        penanganan lanjut setelah pasien meninggalkan rumah sakit sehingga ketika dibutuhkan
                                        maka pasien dapat menggunakan laporan tersebut untuk menjadi basis informasi
                                        institusi kesehatan lainnya.</li>
                                </ol><br>

                                <p>Sumber :
                                    <br><a
                                        href="https://www.healthit.gov/buzz-blog/electronic-health-and-medical-records/emr-vs-ehr-difference"
                                        target="_blank">
                                        https://www.healthit.gov/buzz-blog/electronic-health-and-medical-records/emr-vs-ehr-difference
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
