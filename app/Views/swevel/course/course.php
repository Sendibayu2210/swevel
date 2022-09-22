<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<?= $this->include('swevel/navbar'); ?>
<?= $this->include('swevel/training/page_first'); ?>
<?= $this->include('swevel/course/menu_course_training_event'); ?>

<section id="course" class="pb-5 mb-5">
    <div class="container mt-5">
        <div>
            <div class="row justify-content-start">
                <h1><strong>My <span style="color: #5423a1;">Course</span></strong></h1>
            </div>
            <div class="row mt-5 justify-content-center">
                <div class="col-md-4">
                    <div class="card card-course p-3 mb-2 overflow-hidden shadow border-0 shadow">
                        <div class="card-body">
                            <div class="mt-3">
                                <h3 class="heading"><strong>How to Start being a Software Developer</strong>
                                </h3>
                                <div class="mt-4">
                                    <div class="detail">
                                        <button type="button" class="btn btn11">See my course</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="button-done">
                        <button type="button" class="btn btn12">DONE</button>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-course p-3 mb-2  overflow-hidden shadow border-0 shadow">
                        <div class="card-body">
                            <div class="mt-3">
                                <h3 class="heading"><strong>How to Start being a Software Developer</strong>
                                </h3>
                                <div class="mt-4">
                                    <div class="detail">
                                        <button type="button" class="btn btn11">See my course</button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="button-done">
                        <button type="button" class="btn btn12">DONE</button>
                    </div>

                </div>
            </div>
        </div>
        <div class="h1 mt-5 pt-4 pb-5 fw-bold">Popular <span class="text-purple-100">Course</span></div>
        <section id="popular-course">
            <div class="row ">
                <div class="splide popular-course">
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
        <div class="h1 mt-5 pt-4 pb-5 fw-bold">Sale <span class="text-purple-100">Course</span></div>
        <section id="sale-course">
            <div class="row ">
                <div class="splide sale-course">
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
        popularCourse();
        saleCourse();
    })

    let popularCourse = () => {
        let mediaSm = window.matchMedia("(max-width: 576px)");
        let mediaMd = window.matchMedia("(max-width: 577px)");
        if (mediaSm.matches) {
            var perPage = 1;
        } else if (mediaMd.matches) {
            var perPage = 3;
        } else {
            var perPage = 3;
        }
        var splide = new Splide('.splide.popular-course', {
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
    let saleCourse = () => {
        let mediaSm = window.matchMedia("(max-width: 576px)");
        let mediaMd = window.matchMedia("(max-width: 577px)");
        if (mediaSm.matches) {
            var perPage = 1;
        } else if (mediaMd.matches) {
            var perPage = 3;
        } else {
            var perPage = 3;
        }
        var splide = new Splide('.splide.sale-course', {
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