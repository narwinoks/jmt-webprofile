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
                            <img class="img-fluid" src="assets/images/insight-wearable.jpg" alt="">
                        </div>
                        <div class="clearfix"></div>
                        <div class="blog-detail mt-3">
                            <div class="entry-title mb-1"><br>
                                <h5><strong>Mengenal tentang Wearable Sensors</strong></h5>
                            </div>
                            <div class="entry-meta mb-1">
                                <ul>
                                    <li><a href="#"><i class="ti-calendar"></i> 8 Januari 2023</a></li>
                                </ul>
                            </div><br>

                            <div class="entry-content">
                                <p>Wearable sensors adalah perangkat analisis terintegrasi yang menggabungkan karakteristik
                                    umum pusat pelayanan kesehatan dengan konektivitas nirkabel mobile yang berjalan mandiri
                                    dan ringkas.</p>
                                <p>Kehadiran wearable sensors khususnya dalam produk wearable konsumen seperti jam pintar
                                    memudahkan pasien untuk melakukan pengukuran sederhana sebagai bentuk evaluasi kesehatan
                                    mandiri. Sensor ini dapat berjalan 24 jam sehingga juga dipakai oleh dokter maupun
                                    tenaga medis untuk mendapatkan pengukuran kondisi medis konstan yang lebih utuh mengenai
                                    pasien tersebut. Apalagi jika perangkat tersebut memiliki kemampuan IoT maka rekaman
                                    tersebut dapat diakses kapan saja dan di mana saja baik oleh pasien maupun tenaga medis.
                                    Pada saat ini terdapat empat jenis wearable sensors:</p>
                                <ol class="number-mark-article">
                                    <li>Sensor Kimia yang mengukur konsentrasi kimiawi dalam keringat atau cairan tubuh
                                        lainnya. Contohnya adalah pengukur kadar gula untuk penderita diabetes, tingkat
                                        laktat, maupun identifikasi tingkat hormon stres dalam keringat.</li>
                                    <li>Sensor elektromekanis mengukur pergerakan tubuh. Biasanya dalam bentuk accelerometer
                                        untuk mengukur tingkat aktivitas fisik. Sangat umum dipakai dalam perangkat wearable
                                        konsumen serta smartphone.</li>
                                    <li>Sensor optik juga sangat umum dipakai dalam produk wearable konsumen untuk
                                        pengukuran kesehatan sederhana seperti detak jantung, saturasi oksigen, dan tekanan
                                        darah. Sensor ini menggunakan sinar LED untuk dipancarkan ke dalam tubuh, lalu
                                        sensor akan mengukur seberapa banyak cahaya yang diserap maupun dipantulkan kembali
                                        menggunakan analisis spektroskopi.</li>
                                    <li>Sensor elektronik menggunakan sinyal elektrik untuk mengukur denyut nadi atau
                                        aktivitas otak. Dipakai dalam perangkat ECG (electrocardiogram) untuk mencatat
                                        aktivitas jantung, EEG (electroencephalogram) untuk mencatat gelombang otak, serta
                                        EMG (electromyography) untuk mengukur pergerakan otot.</li>
                                </ol>

                                <p>Pengembangan terhadap sensor-sensor tersebut terus berlangsung sehingga ukurannya semakin
                                    kecil, pengukurannya semakin akurat, dan semakin andal untuk digunakan. Produksi massal
                                    sensor juga mengakibatkan komponen sensor menjadi lebih terjangkau dan memungkinkan
                                    untuk dipakai dalam perangkat konsumen umum, tidak hanya perangkat rumah sakit.</p>

                                <p>Sumber :
                                    <br><a href="https://www.nature.com/articles/s41578-022-00460-x" target="_blank">
                                        https://www.nature.com/articles/s41578-022-00460-x
                                    </a>
                                    <br><a
                                        href="https://thryve.health/recent-advances-in-wearable-sensors-for-health-monitoring/"
                                        target="_blank">
                                        https://thryve.health/recent-advances-in-wearable-sensors-for-health-monitoring/
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
