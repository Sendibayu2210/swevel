<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<?= $this->include('swevel/navbar'); ?>
<?= $this->include('swevel/training/page_first'); ?>
<?= $this->include('swevel/course/menu_course_training_event'); ?>

<section id="course" class="pb-5 mb-5">
    <div class="container mt-5">
        <!-- <div class="my-course">
            <div class="row justify-content-start">
                <h1><strong>My <span style="color: #5423a1;">Course</span></strong></h1>
            </div>
            <div class="row mt-5 justify-content-center">
                <div class="col-md-4 mb-md-4 mb-sm-4">
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
                <div class="col-md-4 mb-md-4 mb-sm-4">
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
        </div> -->
        <section id="popular-course">
            <div class="h1 mt-5 pt-4 pb-5 fw-bold">Popular <span class="text-purple-100">Course</span></div>
            <div class="d-flex justify-content-center">
                <img src="/img/loaderpurple1.gif" alt="" class="skeleton">
            </div>
            <div class="row.">
                <div class="splide. popular-course">
                    <div class="splide.__track">
                        <div class="splide.__list pb-5 row" id="card-popular-course">
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
                        <div class="splide__list pb-5">
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
                                                    <p class="card-text h5 fw-bold text-red">Rp 325.000</p>
                                                </div>
                                                <div class="col-sm-4 col-md-6 col-lg-12 text-sm-end  text-lg-start">
                                                    <button class="btn btn-sm btn-purple-100 mt-2">Join Now</button>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="/detail-course" class="text-decoration-none btn btn-sm btn-light fw-bold course-btn-read-more">Read More</a>
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

        getCourse('https://lms.lazy2.codes/api/course');

        $("img").bind("error", function() {
            $(this).attr("src", "/img/imagenotavailable.jpg");
        });

        $('#btn-search-course-training').click(function() {
            refreshCourse();
        })
        $('#search-course-training').on('keypress', function(e) {
            if (e.which == 13) {
                refreshCourse();
            }
        });
        // popularCourse();
        saleCourse();
    })

    function refreshCourse() {
        $('.skeleton').removeClass('hide')
        $('#card-popular-course').html('');
        let inputSearch = $('#search-course-training').val();
        if (inputSearch == '') {
            getCourse('https://lms.lazy2.codes/api/course');
        } else {
            getCourse('https://lms.lazy2.codes/api/course/find/'.inputSearch);
        }
    }

    function getCourse(url, searchCourse) {
        let getUrl = url;
        $.ajax({
            url: getUrl,
            type: 'GET',
            dataType: 'json',
            data: {
                search: searchCourse,
            },
            success: function(result) {
                $.each(result, function(i, data) {
                    $.each(data.tag, function(i, dataa) {
                        $('.menu-tag').append(`                                                    
                            <button type="button" class="btn btn-light mx-3 tag-name">` + dataa.name + `</button>
                        `);

                        // remove duplicate
                        var seen = {};
                        $('.tag-name').each(function() {
                            var txt = $(this).text();
                            if (seen[txt])
                                $(this).remove();
                            else
                                seen[txt] = true;
                        });
                    })
                })
                let countData = result.length;
                if (countData >= 1) {
                    $('.skeleton').addClass('hide')
                    $('#card-popular-course').html('');
                    $.each(result, function(i, data) {
                        $('#card-popular-course').append(`
                        <div class="col-md-4 col-lg-4 col-sm-12 .splide__slide mb-5">
                                <div class="card card-course border-0 shadow">
                                    <div class="course-circle-time small"><small>3 Weeks</small></div>
                                    <div class="image-content">
                                        <div class="card-image.">
                                            <div class="course-img-polygon">
                                                <img src="` + data.thumbnail + `" alt="" class="card-img">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-content ps-4 py-4">
                                        <h5 class="card-title fw-bold lh-base">` + data.title + ` </h5>
                                        <div class="mb-2 text-purple small"><small>` + data.suitable_for + `</small></div>
                                        <div class="row">
                                            <div class="col-sm-8 col-md-6 col-lg-12">
                                                <p class="card-text h6 text-decoration-line-through text-secondary">Rp ` + formatRupiah(data.old_price) + `</p>
                                                <p class="card-text h5 fw-bold text-red">Rp ` + formatRupiah(data.new_price) + `</p>
                                            </div>
                                            <div class="col-sm-4 col-md-6 col-lg-12 text-sm-end  text-lg-start">
                                                <button class="btn btn-sm btn-purple-100 mt-2">Join Now</button>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="/course/detail/` + data.course_id + `" class="text-decoration-none btn btn-sm btn-light fw-bold course-btn-read-more">Read More</a>
                                </div>
                            </div>
                        `);
                    })
                    $("img").bind("error", function() {
                        $(this).attr("src", "/img/loaderpurple2.gif");
                    });
                } else {
                    $('.skeleton').addClass('hide')
                    $('#card-popular-course').append(`
                    <div class="alert alert-warning w-100 text-center" role="alert">
                    Maaf, keyword yang anda cari tidak ditemukan.
                    </div>
                `)
                }
            },
            error: function(result, ajaxOptions, thrownError) {
                $('.skeleton').addClass('hide')
                $('#card-popular-course').append(`
                    <div class="alert alert-danger w-100 text-center" role="alert">
                    Maaf, untuk saat ini course belum bisa di akses.
                    </div>
                `)
            }
        })
    }

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