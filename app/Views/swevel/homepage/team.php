<link rel="stylesheet" href="/css/splide.min.css">

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
                        <?php foreach ($team as $x) : ?>
                            <div class="splide__slide">
                                <div class="card card-team opacity-50 mx-0">
                                    <div class="gradient"></div>
                                    <div class="card-body">
                                        <img src="/img/team/<?= $x['image']; ?>" alt="" class="img-primary">
                                    </div>
                                    <div class="card-footer bg-white pb-4 pt-3 border-0">
                                        <div class="social-media h4">
                                            <a href="<?= $x['linkedin']; ?>" class="me-1"><i class="fa-brands fa-linkedin text-primary"></i></a>
                                            <a href="<?= $x['facebook']; ?>" class="me-1"><i class="fa-brands fa-square-facebook text-primary"></i></a>
                                            <a href="<?= $x['instagram']; ?>" class="me-1"><i class="fa-brands fa-square-instagram text-danger"></i></a>
                                        </div>
                                        <p class="ls-1 m-0 fw-bold text-purple-100"><?= $x['nama']; ?></p>
                                        <p><?= $x['jabatan']; ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="/js/splide.min.js"></script>
<script>
    $(document).ready(function() {
        // Slider Team
        sliderTeam();
    })

    let sliderTeam = () => {
        let mediaSm = window.matchMedia("(max-width: 576px)");
        let mediaMd = window.matchMedia("(max-width: 768px)");
        let mediaLg = window.matchMedia("(min-width: 992px)");
        if (mediaSm.matches) {
            var perPage = 1;
        } else if (mediaMd.matches) {
            var perPage = 2;
        } else if (mediaLg.matches) {
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