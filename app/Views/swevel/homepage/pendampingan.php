<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<?= $this->include('swevel/navbar-course'); ?>

<section id="course" class="mb-6">
    <div class="container mt-5">
        <section id="popular-course">
            <div class="row justify-content-center text-center my-5 pb-3">
                <div class="col-8">
                    <div class="row">
                        <h2 class="fw-bold mb-3">Pendampingan</h2>
                        <div>Kami selalu siap membantu dengan cepat dan jitu kebutuhan Anda</div>
                        <div>Layanan konsultasi yang dapat menyelesaikan permasalahan Anda dalam implementasi BIM</div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    
    <div class="container mt-5">
        <main id="faq">
            <section id="faqTop">
                <div class="container">
                    <div class="row justify-content-between mt-5">

                        <div class="col-sm-12 col-md-4 col-lg-4">
                            <img src="/img/pendampingan.png" alt="" class="img-fluid" style="margin-top: -80px;">
                        </div>

                        <div class="col-sm-12 col-md-7 col-lg-7">
                            <div class="row mb-3">Keuntungan menggunakan layanan kami:</div>
                            <div class="row benefit">
                                <div class="col-12 mb-4 p-0">                                    
                                    <i class="fa-solid fa-circle-check text-purple"></i>
                                    <span class="ms-3 h5">Pendampingan langsung oleh tenaga ahli tersertifikasi</span>                                    
                                </div>
                                <div class="col-12 mb-4 p-0">                                    
                                    <i class="fa-solid fa-circle-check text-purple"></i>
                                    <span class="ms-3 h5">Waktu fleksibel mengikuti timeline proyek</span>                                    
                                </div>
                                <div class="col-12 mb-4 p-0">                                    
                                    <i class="fa-solid fa-circle-check text-purple"></i>
                                    <span class="ms-3 h5">Metode implementasi lintas disiplin</span>                                    
                                </div>
                            </div>

                        </div>
                        <div class="text-center mt-3">                                
                            <a href="/#kontak" class="btn btn-purple text-white rounded-pill px-5 py-2">Hubungi Kami</a>                                    
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </div>
</section>

<?= $this->include('swevel/course/footer-course'); ?>
<?= $this->endSection(); ?>