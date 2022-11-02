<section id="training">
    <div class="container mt-5">
        <div class="most-popular mx-5 px-4">
            <h2 class="fw-bold">Most Popular</h2>
            <div class="box-training pt-5">
                <div class="row pb-5">                                   
                                <div class="col-lg-4 col-md-6">
                                    <div class="card card-training  mx-2 border-0">
                                        <div class="card-body text-center">
                                            <img src="/img/Frame 57.png" alt="" class="img-primary">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="card card-training  mx-2 border-0">
                                        <div class="card-body text-center">
                                            <img src="/img/Frame 58.png" alt="" class="img-primary">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="card card-training  mx-2 border-0">
                                        <div class="card-body text-center">
                                            <img src="/img/Image 9.png" alt="" class="img-primary">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="training-list mx-lg-5 px-4 mt-5 pt-5">
            <h2 class="fw-bold mb-5">List For You</h2>
            <?php for ($i = 0; $i < 5; $i++) : ?>
                <div class="card mb-3 border-0 mb-5 ps-4 py-3">
                    <div class="row g-0">
                        <div class="col-md-3 text-sm-center">
                            <img src="/img/Frame 57.png" class="img-fluid rounded-start" alt="..." style="max-width: 200px;">
                        </div>
                        <div class="col-md-7">
                            <div class="card-body">
                                <h5 class="card-title text-purple-100 fw-bold">Training Softskill</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quam nulla porttitor massa id neque. Dui vivamus arcu felis bibendum ut. </p>
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
                        </div>
                    </div>
                </div>
            <?php endfor; ?>
        </div>
    </div>
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
            var perPage = 3;
        } else {
            var perPage = 3;
        }
        var splide = new Splide('.splide.splide-training', {
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