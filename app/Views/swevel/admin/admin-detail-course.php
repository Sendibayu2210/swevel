<?= $this->extend('swevel/admin/admin-template'); ?>
<?= $this->section('content'); ?>

<section id="detail-course">

    <div class="container">
        <div class="mb-5 d-flex">
            <a href="/add-step-course/<?= $course['slug_course']; ?>" class="btn btn-purple btn-sm">Tambah step course</a>
            <button class="btn btn-purple btn-sm ms-3">Edit course</button>
        </div>
        <div class="row mb-5 pb-3 border-bottom">
            <div class="text-dark h3 my-3 fw-bold kotak-text col-lg-7"><?= $course['nama_course']; ?></div>
            <div class="text-lg-end text-md-start border-kotak col-lg-5">
                <h5><s>Rp <?= formatRupiah($course['harga']); ?></s></h5>
                <h4 class="text-red">Rp <?= formatRupiah($course['harga'] - $course['diskon']); ?></h4>
            </div>
        </div>
        <div class="mb-5 h5 title-benefits-course">Benefits you get when join our course</div>
        <div class="row">
            <?php for ($i = 0; $i < 3; $i++) : ?>
                <div class="col-lg-4 mb-3">
                    <div class="text-purple">Fleksible</div>
                    <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos nulla voluptate vero molestiae quisquam tempora possimus hic eius animi aut.</div>
                </div>
            <?php endfor; ?>
        </div>
        <div class="mt-5 mb-5">
            <div class="h2 text-purple fw-bold mb-4 text-"><?= $course['nama_course']; ?></div>
            <div><?= $course['deskripsi']; ?> </div>
        </div>
        <div>
            <?php foreach ($step_course as $x) : ?>
                <div class="row timeline">
                    <div class="col-lg-5 col-md-6 col-sm-12 col1">
                        <a href="/course-materi/<?= $slug_course; ?>" class="text-dark text-decoration-none">
                            <div class="card border mb-lg-5 mb-md-5 small">
                                <div class="card-body">
                                    <div class="small mb-3">
                                        <i class="fa-solid fa-signal text-purple"></i>
                                        <span class="ms-3">Langkah <?= $x['step']; ?></span>
                                    </div>
                                    <div class="fw-bold"><?= $x['title']; ?></div>
                                    <div class="d-flex justify-content-between mt-3">
                                        <div>
                                            <i class="fa-regular fa-clock text-purple"></i>
                                            <span class="ms-3"><?= $x['hours']; ?> Jam</span>
                                        </div>
                                        <div>
                                            <i class="fa-solid fa-star text-orange"></i>
                                            <span class="ms-3">4,8</span>
                                        </div>
                                        <div>
                                            <i class="fa-solid fa-chart-simple text-purple"></i>
                                            <span class="ms-3"><?= $x['level']; ?></span>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between mt-4 mb-4">
                                        <div>
                                            <i class="fa-solid fa-book"></i>
                                            <span class="ms-3">119 Modul</span>
                                        </div>
                                        <div>
                                            <i class="fa-solid fa-users"></i>
                                            <span class="ms-3">134 People join this course</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-2 text-center col2 d-lg-block d-md-none d-sm-none">
                        <div class="text-center">
                            <div class="pt-5 line-timeline line-before"></div>
                            <div class="h5 step-number"><?= $x['step']; ?></div>
                            <div class="pt-5 line-timeline line-after"></div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-6 col-sm-12 col3 mb-sm-5 pb-sm-5 mb-md-5 pb-md-5">
                        <div class="fw-bold mb-3 h5 pt-5">Langkah <?= $x['step']; ?></div>
                        <div><?= $x['deskripsi']; ?></div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<script>
    $(document).ready(function() {
        // mengatur tinggi line
        // hitung dulu colom pertama
        let heightCol1 = $('.timeline .col2')[0].scrollHeight;
        // hitung tinggi step number
        let heightStepNumber = $('.timeline .step-number')[0].scrollHeight;
        // mengatur line pertama
        $('.line-before').css('height', (heightCol1 / 2) - heightStepNumber);
        // mengatur line kedua
        $('.line-after').css('height', (heightCol1 / 2) + heightStepNumber);


        $(".timeline").find('.card').hover(function() {
            $(this).addClass("shadow");
        })
        $(".timeline").find('.card').mouseleave(function() {
            $(this).removeClass("shadow");
        })
    })
</script>
<?= $this->endSection(); ?>