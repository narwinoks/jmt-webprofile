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
                            <img class="img-fluid" src="assets/images/insight-iot.jpg" alt="">
                        </div>
                        <div class="clearfix"></div>
                        <div class="blog-detail mt-3">
                            <div class="entry-title mb-1"><br>
                                <h5><strong>Apa itu Internet of Things?</strong></h5>
                            </div>
                            <div class="entry-meta mb-1">
                                <ul>
                                    <li><a href="#"><i class="ti-calendar"></i> 21 Desember 2022</a></li>
                                </ul>
                            </div><br>

                            <div class="entry-content">
                                <p>Internet of Things (IoT) merupakan perangkat (things) yang saling terhubung dalam sebuah
                                    jaringan. Perangkat tersebut dilengkapi sensor, piranti lunak, dan teknologi penunjang
                                    lainnya agar perangkat dapat saling terhubung dan bertukar data antar perangkat serta
                                    sistem melalui internet. IoT dapat berupa perkakas harian yang memudahkan kehidupan
                                    rumah tangga maupun peralatan industri yang kompleks.</p>
                                <p>Mengapa IoT harus dipertimbangkan?</p>
                                <p>Teknologi IoT ini telah menjadi salah satu teknologi terpenting pada abad 21. Banyak
                                    perangkat harian yang sudah saling terhubung dalam jaringan internet atau paling tidak
                                    memiliki kemampuan IoT, seperti: lampu bohlam, sistem CCTV, penjernih udara ruangan,
                                    perkakas dapur, termostat, bahkan mobil. Statistik menunjukkan bahwa terdapat 7 milyar
                                    perangkat yang saat ini saling terhubung antara satu dengan yang lain, bahkan diprediksi
                                    angka ini terus meningkat menjadi 22 milyar perangkat pada tahun 2025. Perkembangan
                                    komputasi ekonomis, cloud, big data, analitik, dan teknologi mobile nirkabel menunjang
                                    hubungan antara manusia dengan benda dalam usahanya untuk memudahkan kehidupan manusia.
                                </p><br>

                                <p>Sumber :
                                    <br><a href="https://www.oracle.com/id/internet-of-things/what-is-iot/" target="_blank">
                                        https://www.oracle.com/id/internet-of-things/what-is-iot/
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
