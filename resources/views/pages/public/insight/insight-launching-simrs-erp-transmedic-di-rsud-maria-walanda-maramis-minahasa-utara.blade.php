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
                            <img class="img-fluid" src="assets/images/insight-simrs-erp-rsud-maria-walanda-maramis.jpg" alt="">
                        </div>
                        <div class="clearfix"></div>
                        <div class="blog-detail mt-3">
                            <div class="entry-title mb-1"><br>
                                <h5><strong>Launching SIMRS-ERP Transmedic di RSUD Maria Walanda Maramis, Minahasa Utara</strong></h5>
                            </div>
                            <div class="entry-meta mb-1">
                                <ul>
                                    <li><a href="#"><i class="ti-calendar"></i> 25 Januari 2024</a></li>
                                </ul>
                            </div><br>

                            <div class="entry-content">
                                <p>RSUD Maria Walanda Maramis telah menggunakan Sistem Informasi Manajemen Rumah Sakit (SIMRS)-ERP Transmedic yang berbasis digital dalam upaya untuk meningkatkan kualitas pelayanan terbaik di Minahasa Utara.‌</p>
                                <br>

                                <p>Sumber :
                                    <br><a href="https://terasmanado.com/2023/10/09/bupati-jg-resmikan-simrs-berbasis-digital-rsud-maria-walanda-maramis/" target="_blank">
                                    https://terasmanado.com/2023/10/09/bupati-jg-resmikan-simrs-berbasis-digital-rsud-maria-walanda-maramis/
                                    </a>
                                    <br><a href="https://www.vidio.com/watch/7698431-rsud-walanda-maramis-pertama-di-sulut-gunakan-simrs" target="_blank">
                                    https://www.vidio.com/watch/7698431-rsud-walanda-maramis-pertama-di-sulut-gunakan-simrs
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
                                        <input type="text" class="form-control" id="exampleInputphone" placeholder="Nama">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Faskes / Perusahaan</label>
                                        <input type="text" class="form-control" id="exampleInputphone1" placeholder="Faskes / Perusahaan">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Telp / WhatsApp</label>
                                        <input type="texy" class="form-control" id="exampleInputPassword1" placeholder="Telp / WhatsApp">
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
