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
                            <img class="img-fluid" src="assets/images/insight-teknologi-kesehatan-digital.jpg" alt="">
                        </div>
                        <div class="clearfix"></div>
                        <div class="blog-detail mt-3">
                            <div class="entry-title mb-1"><br>
                                <h5><strong>Teknologi Kesehatan Digital</strong></h5>
                            </div>
                            <div class="entry-meta mb-1">
                                <ul>
                                    <li><a href="#"><i class="ti-calendar"></i> 18 Juli 2023</a></li>
                                </ul>
                            </div><br>

                            <div class="entry-content">
                                <p>Inovasi kesehatan digital dirancang untuk membantu menghemat waktu, meningkatkan akurasi
                                    dan efisiensi, dan menggabungkan teknologi dengan cara yang baru untuk pelayanan
                                    kesehatan. Inovasi ini dapat menggabungkan obat-obatan dan internet of things (IoT),
                                    mHealth dan IoT, obat-obatan dan augmented reality (AR), dan blockchain dan EMR.</p>

                                <p>Internet of medical things (IoMT) mengacu pada kombinasi perangkat medis dan aplikasi
                                    yang terhubung ke sistem TI kesehatan yang menggunakan teknologi jaringan. Kasus
                                    penggunaan IoT berkisar dari teknologi telemedicine untuk meningkatkan komunikasi antara
                                    pasien dan dokter, hingga mengurangi potensi paparan penyakit menular dan berbagai
                                    teknologi sensor pintar yang dapat mengumpulkan data di tingkat pengguna. Misalnya,
                                    permintaan untuk layanan telehealth meningkat sebagai akibat dari COVID-19, dengan lebih
                                    banyak penyedia mengandalkan teknologi untuk memberikan layanan virtual kepada pasien.
                                </p>
                                <p>Aplikasi IoT inovatif dalam pelayanan kesehatan terus bermunculan. Cleveland Clinic
                                    menempatkan perangkat alat pacu jantung berbasis smartphone sebagai inovasi teratas
                                    untuk tahun 2021. Dengan menggunakan aplikasi seluler, perangkat alat pacu jantung yang
                                    terhubung dengan smartphone dapat dirancang untuk mengirimkan data secara aman dan
                                    nirkabel ke jaringan pasien, memberi pasien wawasan yang lebih baik tentang data
                                    kesehatan dari alat pacu jantung dan mengirimkan informasi kesehatan ke dokter mereka.
                                </p>
                                <p>MHealth, termasuk perangkat yang dapat dikenakan, aplikasi, dan teknologi seluler yang
                                    menyediakan akses ke dukungan dan pemantauan pelayanan kesehatan, mengalami pertumbuhan,
                                    terutama untuk membantu mengelola kondisi kronis jangka panjang. Pandemi COVID-19 telah
                                    menyebabkan peningkatan permintaan untuk pemantauan kesehatan pribadi melalui perangkat
                                    yang dapat dikenakan, yang melewati batas antara konsumen dan perangkat medis. Vendor
                                    perangkat yang dapat dikenakan menambahkan fitur untuk variabilitas detak jantung,
                                    oksimeter pulsa, elektrokardiografi, dan pemantauan glukosa berkelanjutan.</p>
                                <p>Aplikasi penting lainnya adalah EMR berbasis blockchain, yang bertujuan untuk mengurangi
                                    waktu yang dibutuhkan untuk mengakses informasi pasien sambil meningkatkan kualitas data
                                    dan interoperabilitas. Manfaat Blockchain – keamanan akses, privasi data, dan
                                    skalabilitas – menarik dalam perawatan kesehatan digital.</p>
                                <p>Menggunakan AI dalam aplikasi pelayanan kesehatan dapat meningkatkan pengambilan
                                    keputusan manusia dengan mengotomatiskan dan mempercepat tugas-tugas yang sebelumnya
                                    padat karya. Banyak rumah sakit, misalnya, menggunakan alat pemantauan pasien berbasis
                                    AI untuk mengumpulkan dan merawat pasien berdasarkan laporan real-time. Dalam pencitraan
                                    medis, penggunaan AI dapat mengurangi jumlah klik yang diperlukan untuk melakukan tugas
                                    dan menentukan langkah selanjutnya berdasarkan konteks. Aplikasi AI lainnya, kembar
                                    digital, dapat digunakan untuk memodelkan perangkat medis dan pasien dan menunjukkan
                                    bagaimana perangkat akan bekerja dalam kondisi aktual.</p>
                                <p>AR, yang mengintegrasikan informasi digital dengan lingkungan pengguna secara real time,
                                    berlaku dalam pendidikan pasien dan dokter, visualisasi bedah dan simulasi penyakit.</p>
                                <p>Big data – yang menarik informasi dari semua sistem dan aplikasi kesehatan ini –
                                    menimbulkan manfaat dan tantangan. Jumlah data sangat besar dan terus berkembang biak.
                                </p>
                                <br>

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
