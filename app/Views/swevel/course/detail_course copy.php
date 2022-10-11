<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<?= $this->include('swevel/navbar'); ?>

<?php
// untuk membuat lingkaran 4x4
function circlecourse()
{
    $star = 4;
    for ($a = 0; $a < $star; $a++) {
        echo '<div class="d-flex">';
        for ($i = 1; $i <= $a; $i++) {
            echo '<div class="circlecourse"></div>';
        }
        for ($c = $star; $c > $a; $c -= 1) {
            echo '<div class="circlecourse"></div>';
        }
        echo '</div>';
        echo '<br>';
    }
}
?>

<section id="detail-course">
    <input type="text" id="id" value="<?= $id; ?>">
    <div class="container">
        <div class="row mt-5 justify-content-center">
            <div class="text-white kotak-text title-course"></div>
            <img src="" class="detail-img">
        </div>
        <div class=" row" id="section1" style="margin:auto;">
            <div class="col" style="margin: auto;">
                <div class="circle-4 d-sm-none d-lg-block">
                    <?= circlecourse(); ?>
                </div>
            </div>
        </div>
        <div class="col" style="margin: auto;">

        </div>
    </div>

    <div class="container">
        <div class="row mb-5 pb-5" id="section2.">
            <div class="text-lg-end text-md-start mb-lg-0 mb-md-5 mb-sm-5 border-kotak">
                <h5><s id="old_price">Rp </s></h5>
                <h4 class="text-red new_price">Rp </h4>
                <a href="/payment/" class="btn btn-sm btn-purple-100">Join Now</a>
            </div>
            <div class="text2. mb-5 h2 title-benefits-course col-lg-4">Benefits you get when join our course</div>

            <div class="row">
                <?php for ($i = 0; $i < 3; $i++) : ?>
                    <div class="col-lg-4 mb-3">
                        <div class="text-purple">Fleksible</div>
                        <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos nulla voluptate vero molestiae quisquam tempora possimus hic eius animi aut.</div>
                    </div>
                <?php endfor; ?>
            </div>
        </div>

        <div class="mt-5 mb-5 pb-5 text-center">
            <div class="h2 text-purple fw-bold mb-4 title-course"></div>
            <div class="d-flex justify-content-center">
                <div class="col-lg-8">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Est provident repellat mollitia blanditiis possimus assumenda alias sequi laudantium perferendis. Dolore a, odio cum eaque vitae perferendis nam voluptatibus, atque iusto, iure molestias quaerat dicta neque pariatur officia maiores! Voluptatem perspiciatis minus dolorem reprehenderit magni minima est unde, eum aliquam facilis!
                </div>
            </div>
        </div>

        <div class="row mt-4 pt-4 mb-5 pb-5 justify-content-center" id="section3">
            <div class="col-lg-6 d-lg-block d-md-none d-sm-none">
                <img src="" class="detail-img2">
            </div>
            <div class="col-lg-6">
                <h4><strong>Penjelasan Course</strong></h4>
                <div id="detail"></div>
            </div>
            <div class="circle-5 d-sm-none d-md-none d-lg-block">
                <?= circlecourse(); ?>
            </div>
        </div>

        <!-- <div>
            <?php foreach ($step_course as $x) : ?>
                <div class="row timeline">
                    <div class="col-lg-5 col-md-6 col-sm-12 col1">
                        <a href="/course-materi/<?= $slug_course; ?>" class="text-dark text-decoration-none">
                            <div class="card border mb-lg-5 mb-md-5">
                                <div class="card-body">
                                    <div class="small mb-3">
                                        <i class="fa-solid fa-signal text-purple"></i>
                                        <span class="ms-3">Langkah <?= $x['step']; ?></span>
                                    </div>
                                    <div class="fw-bold"><?= $x['title']; ?></div>
                                    <div class="d-flex justify-content-between mt-3">
                                        <div>
                                            <i class="fa-regular fa-clock text-purple"></i>
                                            <span class="ms-3"><?= $x['hours']; ?></span>
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

            <div class="mt-5 text-center">
                <div class="fw-bold text-capitalize">Jadilah <?= $course['nama_course']; ?> seperti mereka</div>
                <div class="d-flex justify-content-center mt-3">
                    <?php for ($i = 0; $i < 8; $i++) : ?>
                        <div class="card-img-circle-50">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQQ-YIPLhIBLVQKh_S4BNo18b03Ct5P_iYFeBBjDCYx&s" alt="">
                        </div>
                    <?php endfor; ?>
                </div>
                <div class="text-center mt-4">
                    <a href="/materi" class="btn btn-purple">Start Class</a>
                </div>
            </div>
        </div> -->

        <div class="row mb-5 mt-5 pt-5 justify-content-start">
            <h1 style="color: black; letter-spacing:normal"><strong>Related Course</strong></h1>
        </div>
        <!-- <section id="related-course" class="mb-5 pb-5">
            <div class="row ">
                <div class="splide related-course">
                    <div class="splide__track">
                        <div class="splide__list pb-5">
                            <?php foreach ($related_course as $x) : ?>
                                <div class="col-md-4 splide__slide m-2">
                                    <div class="card card-course border-0 shadow">
                                        <div class="course-circle-time fw-bold">3 Weeks</div>
                                        <div class="image-content">
                                            <div class="card-image.">
                                                <div class="course-img-polygon">
                                                    <img src="/img/course/<?= $x['gambar']; ?>" alt="" class="card-img">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-content ps-4 py-4">
                                            <h5 class="card-title fw-bold lh-base"><?= $x['nama_course']; ?> </h5>
                                            <div class="row">
                                                <div class="col-sm-8 col-md-6 col-lg-12">
                                                    <p class="card-text h6 text-decoration-line-through text-secondary">Rp <?= number_format($x['harga'], 0, ',', '.'); ?></p>
                                                    <p class="card-text h5 fw-bold text-red">Rp <?= number_format($x['harga'] - $x['diskon'], 0, ',', '.'); ?></p>
                                                </div>
                                                <div class="col-sm-4 col-md-6 col-lg-12 text-sm-end  text-lg-start">
                                                    <button class="btn btn-sm btn-purple-100 mt-2">Join Now</button>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="/course/<?= $x['slug_course']; ?>" class="text-decoration-none btn btn-sm btn-light fw-bold course-btn-read-more">Read More</a>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
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

        relatedCourse();
    })

    let relatedCourse = () => {
        let mediaSm = window.matchMedia("(max-width: 576px)");
        let mediaMd = window.matchMedia("(max-width: 768px)");
        let medialg = window.matchMedia("(max-width: 1200px)");
        if (mediaSm.matches) {
            var perPage = 1;
        } else if (mediaMd.matches) {
            var perPage = 2;
        } else if (medialg.matches) {
            var perPage = 3;
        } else {
            var perPage = 3;
        }
        var splide = new Splide('.splide.related-course', {
            // type: 'loop',
            perPage: perPage,
            rewind: true,
            arrows: false,
            // autoplay: true,
            // speed: 2000,
            // width: '100%',
            // padding: '10px',
        });

        splide.mount();
    }
</script>

<?= $this->include('swevel/homepage/footer'); ?>
<?= $this->include('swevel/training/footer'); ?>
<?= $this->endSection(); ?>