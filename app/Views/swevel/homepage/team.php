<section id="team" class="bg-purple pt-5">
    <div class="container pt-5 mb-4">
        <div class="row text-white">
            <div class="col-lg-6">
                <h1 class="text-white lh-base">Our <span class="fw-bold">Experience & Professional Team</span> in Swevel</h1>
            </div>
            <div class="col-lg-6">
                <p>PT. Swevel Universal Media is one of Information Technology Service Industry that gives service excellence quality. Point of product of PT. </p>
                <p>Swevel Universal Media prioritize System End User and gives creative solution IT.
                    PT. Swevel Universal Media focus in WEB Developer and Mobile Smart Phone Application.</p>
            </div>
        </div>
    </div>

    <div class="box-team pt-5 pb-5">
        <div class="row pb-5">
            <div class="splide splide-team">
                <div class="splide__track">
                    <div class="splide__list">
                        <?php for ($i = 0; $i < 5; $i++) : ?>
                            <div class="splide__slide">
                                <div class="card card-team opacity-50 mx-0">
                                    <div class="gradient"></div>
                                    <div class="card-body">
                                        <img src="/img/orang (3).png" alt="" class="img-primary">
                                    </div>
                                    <div class="card-footer bg-white pb-4 pt-3 border-0">
                                        <div class="social-media h4">
                                            <a href="#" class="me-1"><i class="fa-brands fa-linkedin text-primary"></i></a>
                                            <a href="#" class="me-1"><i class="fa-brands fa-square-facebook text-primary"></i></a>
                                            <a href="#" class="me-1"><i class="fa-brands fa-square-instagram text-danger"></i></a>
                                        </div>
                                        <p class="ls-1 m-0 fw-bold text-purple-100">David Dell</p>
                                        <p>Direktur Utama</p>
                                        <div class="row justify-content-end d-none">
                                            <div class="col-6 text-center">
                                                <button class="btn btn-sm btn-purple btn-event fw-light ls-05 px-3 py-2 rounded-5">ENROLL EVENT</button>
                                            </div>
                                            <div class="col-3 my-auto text-end">
                                                <span class="fa-regular fa-heart text-dark-purple fs-5"></span>
                                                <span class="bi bi-share ms-3 text-dark-purple fs-5"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>                          
                        <?php endfor; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- <div class="slide-container swiper">
        <div class="slide-content">
            <div class="card-wrapper swiper-wrapper">
                <?php for ($i = 1; $i < 10; $i++) : ?>
                    <div class="card-team swiper-slide border">
                        <div class="image-content-team">
                            <span class="overlay"></span>
                            <div class="card-image">
                                <img src="/img/team.png" alt="" class="card-img">
                            </div>
                        </div>
                        <div class="card-content ps-4">
                            <h2 class="name fw-bold text-purple">David Dell</h2>
                            <p class="description">Direktur</p>
                        </div>
                    </div>
                <?php endfor; ?>
            </div>
        </div>
        <div class="swiper-button-next swiper-navBtn"></div>
        <div class="swiper-button-prev swiper-navBtn"></div>
        <div class="swiper-pagination bullet-white"></div>
    </div> -->


</section>
<script>
    $(document).ready(function() {
        // Slider Team
        sliderTeam();
    })

    let sliderTeam = () => {
        let mediaSm = window.matchMedia("(max-width: 576px)");
        let mediaMd = window.matchMedia("(max-width: 577px)");
        if (mediaSm.matches) {
            var perPage = 1;
        } else if (mediaMd.matches) {
            var perPage = 4;
        } else {
            var perPage = 4;
        }
        var splide = new Splide('.splide.splide-team', {
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