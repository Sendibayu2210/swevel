<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<?= $this->include('swevel/navbar'); ?>

<style>
    .detail-img {
        max-width: 700px;
    }

    .detail-img2 {
        max-width: 550px;
        margin-left: 27;
    }
</style>

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
    <div class="container">
        <div class="row mt-5 mb-5 justify-content-center">
            <img src="/img/poster.png" class="detail-img">
        </div>
        <div class="row" id="section1" style="height: 200px; margin:auto;">
            <div class="col" style="margin: auto;">
                <div class="circle-4 d-sm-none d-lg-block">
                    <?= circlecourse(); ?>
                </div>
            </div>
            <div class="col" style="margin: auto;">
                <div class="kotak-text">
                    <div class="row" style="color: white;">
                        <h3>How to start being a Software Developer.</h3>
                    </div>
                </div>
                <div class="responsive">
                    <div class="row" id="hidden">
                        <h4><s>Rp. 500.000</s></h4>
                        <h4 style="color: red;">RP. 325.000</h4>
                        <button class="btn btn-sm btn-purple-100">Join Now</button>
                    </div>
                </div>
            </div>
            <div class="col" style="margin: auto;">
                <div class="borderkotak"></div>
            </div>
            <div class="col align-self-start" style="margin: auto;">
                <div class="row">
                    <h4><s>Rp. 500.000</s></h4>
                    <h4 style="color: red;">RP. 325.000</h4>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-sm-3 text-sm-start">
                        <button class="btn btn-sm btn-purple-100">Join Now</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mb-5 pb-5" id="section2">
            <div class="row justify-content-start" style="height: 80px;">
                <div class="line"></div>
                <div class="col">
                    <div class="text2">
                        <h1 style="color: black;">Benefits you get when join our course</h1>
                    </div>
                </div>
            </div>
            <div class="row align-items-start">
                <div class="col-1">
                    <i class="bi-alarm-fill"></i>
                </div>

                <div class="col-3">
                    <div class="row pr-3" style="color: #45188B;">
                        <h6>Fleksibel</h6>
                    </div>
                    <div class="row pr-3">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </p>
                    </div>
                </div>
                <div class="col-1">
                    <i class="bi-alarm-fill"></i>
                </div>

                <div class="col-3">
                    <div class="row pr-3" style="color: #45188B;">
                        <h6>Fleksibel</h6>
                    </div>
                    <div class="row pr-3">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </p>
                    </div>
                </div>

                <div class="col-1">
                    <i class="bi-alarm-fill"></i>
                </div>
                <div class="col-3">
                    <div class="row pr-3" style="color: #45188B;">
                        <h6>Fleksibel</h6>
                    </div>
                    <div class="row pr-3">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </p>
                    </div>
                </div>
            </div>
        </div>


        <div class="mt-5 mb-5 pb-5 text-center">
            <div class="h2 text-purple fw-bold mb-4">Android Developer</div>
            <div class="d-flex justify-content-center">
                <div class="col-lg-8">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Est provident repellat mollitia blanditiis possimus assumenda alias sequi laudantium perferendis. Dolore a, odio cum eaque vitae perferendis nam voluptatibus, atque iusto, iure molestias quaerat dicta neque pariatur officia maiores! Voluptatem perspiciatis minus dolorem reprehenderit magni minima est unde, eum aliquam facilis!
                </div>
            </div>
        </div>

        <div class="row mt-4 pt-4 mb-5 pb-5 justify-content-center" id="section3">
            <div class="col">
                <img src="/img/poster2.png" class="detail-img2">
            </div>
            <div class="col">
                <h4><strong>Penjelasan Course</strong></h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quam nulla porttitor massa id neque. Dui vivamus arcu felis bibendum ut.</p>
                <p>Tristique senectus et netus et. Sed cras ornare arcu dui vivamus. Molestie ac feugiat sed lectus. Cursus metus aliquam eleifend mi in nulla. Eget arcu dictum varius duis at. Tempor nec feugiat nisl pretium. Diam maecenas ultricies mi eget mauris pharetra et ultrices.</p>
                <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quam nulla porttitor massa id neque. Dui vivamus arcu felis bibendum ut. </p>
            </div>
            <div class="circle-5 d-sm-none d-lg-block">
                <?= circlecourse(); ?>
            </div>
        </div>


        <div>
            <?php for ($i = 1; $i < 6; $i++) : ?>
                <div class="row timeline">
                    <div class="col-lg-5 col-md-6 col-sm-12 col1">
                        <div class="card shadow border-0 mb-lg-5 mb-md-5">
                            <div class="card-body">
                                <div class="small mb-3">
                                    <i class="fa-solid fa-signal text-purple"></i>
                                    <span class="ms-3">Langkah <?= $i; ?></span>
                                </div>
                                <div class="fw-bold">Memulai Pemrograman dengan kotlin</div>
                                <div class="d-flex justify-content-between mt-3">
                                    <div>
                                        <i class="fa-regular fa-clock text-purple"></i>
                                        <span class="ms-3">50 Jam</span>
                                    </div>
                                    <div>
                                        <i class="fa-solid fa-star text-orange"></i>
                                        <span class="ms-3">4,8</span>
                                    </div>
                                    <div>
                                        <i class="fa-solid fa-chart-simple text-purple"></i>
                                        <span class="ms-3">Basic - Beginner</span>
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
                    </div>
                    <div class="col-lg-2 text-center col2 d-lg-block d-md-none d-sm-none">
                        <div class="text-center">
                            <div class="pt-5 line-timeline line-before"></div>
                            <div class="h5 step-number"><?= $i; ?></div>
                            <div class="pt-5 line-timeline line-after"></div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-6 col-sm-12 col3 mb-sm-5 pb-sm-5 mb-md-5 pb-md-5">
                        <div class="fw-bold mb-3 h5 pt-5">Langkah <?= $i; ?></div>
                        <div>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Architecto impedit, assumenda ab at sequi beatae provident sint numquam quibusdam mollitia?</div>
                    </div>
                </div>
            <?php endfor; ?>

            <div class="mt-5 text-center">
                <div class="fw-bold text-capitalize">Jadilah android Developer seperti mereka</div>
                <div class="d-flex justify-content-center mt-3">
                    <?php for ($i = 0; $i < 8; $i++) : ?>
                        <div class="card-img-circle-50">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQQ-YIPLhIBLVQKh_S4BNo18b03Ct5P_iYFeBBjDCYx&s" alt="">
                        </div>
                    <?php endfor; ?>
                </div>
                <div class="text-center mt-4">
                    <button class="btn btn-purple">Start Class</button>
                </div>
            </div>
        </div>

        <div class="row mb-5 mt-5 pt-5 justify-content-start">
            <h1 style="color: black; letter-spacing:normal"><strong>Related Course</strong></h1>
        </div>
        <section id="related-course" class="mb-5 pb-5">
            <div class="row ">
                <div class="splide related-course">
                    <div class="splide__track">
                        <div class="splide__list">
                            <?php for ($i = 0; $i < 5; $i++) : ?>
                                <div class="col-md-4 splide__slide m-2">
                                    <div class="card card-course border-0 shadow">
                                        <div class="course-circle-time fw-bold">3 Weeks</div>
                                        <div class="image-content">
                                            <span class="overlay"></span>
                                            <div class="card-image.">
                                                <div class="course-img-polygon">
                                                    <img src="https://img.freepik.com/premium-photo/astronaut-outer-open-space-planet-earth-stars-provide-background-erforming-space-planet-earth-sunrise-sunset-our-home-iss-elements-this-image-furnished-by-nasa_150455-16829.jpg?w=2000" alt="" class="card-img">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-content ps-4 py-4">
                                            <h5 class="card-title fw-bold lh-base">How to start being a Software Developer </h5>
                                            <div class="row">
                                                <div class="col-sm-8 col-md-6 col-lg-12">
                                                    <p class="card-text h6 text-decoration-line-through text-secondary">Rp 500.000</p>
                                                    <p class="card-text h5 fw-bold text-danger">Rp 325.000</p>
                                                </div>
                                                <div class="col-sm-4 col-md-6 col-lg-12 text-sm-end  text-lg-start">
                                                    <button class="btn btn-sm btn-purple-100 mt-2">Join Now</button>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="#" class="text-decoration-none btn btn-sm btn-light fw-bold course-btn-read-more">Read More</a>
                                    </div>
                                </div>
                            <?php endfor; ?>
                        </div>
                    </div>
                </div>
            </div>

        </section>
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

        relatedCourse();
    })

    let relatedCourse = () => {
        let mediaSm = window.matchMedia("(max-width: 576px)");
        let mediaMd = window.matchMedia("(max-width: 577px)");
        if (mediaSm.matches) {
            var perPage = 1;
        } else if (mediaMd.matches) {
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