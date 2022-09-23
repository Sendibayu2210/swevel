<section id="client">
    <div class="container pt-5">
        <div class="text-center mb-5 mt-4">
            <h2 class="text-purple-100">Our <span class="fw-bold">Client</span></h2>
            <p>Colaboration with various top companies</p>
        </div>

        <!-- <div class="slider">
            <div class="slide-track">
                <div class="slide text-center">
                    <img src="http://new2.beecons.co.id/wp-content/uploads/2020/04/Logo-BEE.png" alt="" style="max-width: 130px;">
                    <div>PT Baracipta Esa Engineering</div>
                </div>
                <div class="slide text-center">
                    <img src="http://new2.beecons.co.id/wp-content/uploads/2020/04/Logo-BEE.png" alt="" style="max-width: 130px;">
                    <div>PT Baracipta Esa Engineering</div>
                </div>
                <div class="slide text-center">
                    <img src="http://new2.beecons.co.id/wp-content/uploads/2020/04/Logo-BEE.png" alt="" style="max-width: 130px;">
                    <div>PT Baracipta Esa Engineering</div>
                </div>
                <div class="slide text-center">
                    <img src="http://new2.beecons.co.id/wp-content/uploads/2020/04/Logo-BEE.png" alt="" style="max-width: 130px;">
                    <div>PT Baracipta Esa Engineering</div>
                </div>
                <div class="slide text-center">
                    <img src="http://new2.beecons.co.id/wp-content/uploads/2020/04/Logo-BEE.png" alt="" style="max-width: 130px;">
                    <div>PT Baracipta Esa Engineering</div>
                </div>
                <div class="slide text-center">
                    <img src="http://new2.beecons.co.id/wp-content/uploads/2020/04/Logo-BEE.png" alt="" style="max-width: 130px;">
                    <div>PT Baracipta Esa Engineering</div>
                </div>
                <div class="slide text-center">
                    <img src="http://new2.beecons.co.id/wp-content/uploads/2020/04/Logo-BEE.png" alt="" style="max-width: 130px;">
                    <div>PT Baracipta Esa Engineering</div>
                </div>
                <div class="slide text-center">
                    <img src="http://new2.beecons.co.id/wp-content/uploads/2020/04/Logo-BEE.png" alt="" style="max-width: 130px;">
                    <div>PT Baracipta Esa Engineering</div>
                </div>
            </div>
        </div> -->

        <div class="pb-5">
            <div class="splide splide-client">
                <div class="splide__track">
                    <div class="splide__list">
                        <?php for ($i = 0; $i < 10; $i++) : ?>
                            <div class="splide__slide">
                                <div class="card card-client mx-1 border-0 bg-transparent">
                                    <div class="card-body text-center">
                                        <img src="http://new2.beecons.co.id/wp-content/uploads/2020/04/Logo-BEE.png" alt="" class="img-primary" style="max-width: 130px;">
                                        <div class="mt-3">PT Baracipta Esa Engineering</div>
                                    </div>
                                </div>
                            </div>
                        <?php endfor; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    $(document).ready(function() {
        // Slider Team
        sliderClient();
    })

    let sliderClient = () => {
        let mediaSm = window.matchMedia("(max-width: 576px)");
        let mediaMd = window.matchMedia("(max-width: 768px)");
        let mediaLg = window.matchMedia("(max-width: 100px)");
        if (mediaSm.matches) {
            var perPage = 1;
        } else if (mediaMd.matches) {
            var perPage = 2;
        } else if (mediaLg.matches) {
            var perPage = 4;
        } else {
            var perPage = 4;
        }
        var splide = new Splide('.splide.splide-client', {
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