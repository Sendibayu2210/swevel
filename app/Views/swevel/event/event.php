<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<?= $this->include('swevel/navbar'); ?>
<link rel="stylesheet" href="/css/splide.min.css">
<main id="event">
    <div class="bg-light-purple pb-2 pt-4">
        <div class="container mt-1">
            <nav style="--bs-breadcrumb-divider: '/';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Beranda</a></li>
                    <li class="breadcrumb-item"><a href="/event/software-development">Software Development</a></li>
                    <li class="breadcrumb-item ls-1" aria-current="page">Event</li>
                </ol>
            </nav>
        </div>
    </div>

    <section id="event1">
        <div class="container pt-5">
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <div class="card border-0">
                        <div class="card-body p-0">
                            <img src="asset/image/event/pablo.png" alt="" width="100%">
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-6">
                    <div class="text ls-1 text-end">
                        <h3 class="fw-light mb-2">Discovering Amazing <span class="fw-bold">Event</span></h3>
                        <h3><strong>Just For You</strong></h3>
                        <p class="text-secondary mt-4 fw-normal">Get Your Ticket Now !</p>
                    </div>
                    <div class="row row-1 justify-content-end">
                        <div class="col-8">
                            <div class="input-group input1">
                                <span class="input-group-text border-0 bg-transparent" id="basic-addon1">
                                    <i class="bi bi-search text-secondary fs-5"></i>
                                </span>
                                <input type="text" class="form-control border-0" placeholder="Type here ..." aria-label="Username" aria-describedby="basic-addon1">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="popular-event">
        <div class="container">
            <div class="row">
                <div class="col-7 my-auto">
                    <h5><strong>Popular Event</strong></h5>
                </div>
                <div class="col-5 my-auto">
                    <h6 class="fw-semibold ls-2 text-dark-purple text-end">More..</h6>
                </div>
            </div>
            <div class="row mt-3">                
                <?php for ($i = 0; $i < 3; $i++) : ?>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card card-event">
                            <div class="card-body p-3">
                                <img src="asset/image/event/card.png" alt="" width="100%">
                            </div>
                            <div class="card-footer pb-4 pt-3">
                                <p class="ls-1 m-0">Millenials are basically keeping the summer blockbuster</p>
                                <div class="detail">
                                    <div class="row">
                                        <div class="col-1 my-auto mt-3">
                                            <i class="fa-solid fa-location-dot text-purple fs-5"></i>
                                        </div>
                                        <div class="col-11 mt-3">
                                            <p class="m-0 ls-2 fw-semibold">Stadion Mandala Krida</p>
                                            <p class="m-0 ls-2 text-secondary" style="font-size: 10pt">Yogyakarta</p>
                                        </div>
                                        <div class="col-1 my-auto mt-2 mb-3">
                                            <i class="bi bi-calendar4 text-purple fs-6"></i>
                                        </div>
                                        <div class="col-11 mt-2 mb-3">
                                            <p class="m-0 ls-2 fw-semibold">21 - 22 August 2022</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row justify-content-end">
                                    <div class="col-6 text-center">
                                        <a href="/detail-event" class="btn btn-sm btn-purple btn-event fw-light ls-05 px-3 py-2 rounded-5">ENROLL EVENT</a>
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
    </section>

    <section id="category-event" class="pb-5">
        <div class="container">

            <div class="row">
                <div class="col-7 my-auto">
                    <h5><strong>Category Event</strong></h5>
                </div>
                <div class="col-5 my-auto">
                    <h6 class="fw-semibold ls-2 text-dark-purple text-end">More..</h6>
                </div>
            </div>

            <ul class="nav nav-pills mt-3 justify-content-center" id="pills-tab" role="tablist">
                <a class="nav-link active" data-bs-toggle="pill" data-bs-target="#webminar" type="button" role="tab">Webminar</a>
                <a class="nav-link" data-bs-toggle="pill" data-bs-target="#bootcamp" type="button" role="tab">Bootcamp</a>
                <a class="nav-link" data-bs-toggle="pill" data-bs-target="#webminar" type="button" role="tab">Webminar</a>
                <a class="nav-link" data-bs-toggle="pill" data-bs-target="#bootcamp" type="button" role="tab">Bootcamp</a>
            </ul>

            <div class="row justify-content-center pt-5">
                <div class="col-3 text-center" style="border-bottom: 2px solid #45188b">
                    <h5 class="fw-bold text-dark-purple ls-1">6 Result</h5>
                </div>
            </div>

            <div class="pills-tabs tab-content" id="pills-tabContent">

                <div id="webminar" class="nav-content tab-pane fade show active" role="tabpanel">
                    <div class="row">
                        <div class="col-sm-12 col-md-4 mt-3">
                            <div class="card">
                                <div class="card-body p-3">
                                    <img src="asset/image/event/card.png" alt="" width="100%">
                                </div>
                                <div class="card-footer pb-4 pt-3">
                                    <p class="ls-1">Millenials are basically keeping the summer blockbuster</p>
                                    <div class="row justify-content-end">
                                        <div class="col-6 text-center">
                                            <a href="/detail-event" class="btn btn-sm btn-purple btn-event fw-light ls-05 px-3 py-2 rounded-5">ENROLL EVENT</a>
                                        </div>
                                        <div class="col-3 my-auto text-end">
                                            <span class="fa-regular fa-heart text-dark-purple fs-5"></span>
                                            <span class="bi bi-share ms-3 text-dark-purple fs-5"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4 mt-3">
                            <div class="card">
                                <div class="card-body p-3">
                                    <img src="asset/image/event/card.png" alt="" width="100%">
                                </div>
                                <div class="card-footer pb-4 pt-3">
                                    <p class="ls-1">Millenials are basically keeping the summer blockbuster</p>
                                    <div class="row justify-content-end">
                                        <div class="col-6 text-center">
                                            <a href="/detail-event" class="btn btn-sm btn-purple btn-event fw-light ls-05 px-3 py-2 rounded-5">ENROLL EVENT</a>
                                        </div>
                                        <div class="col-3 my-auto text-end">
                                            <span class="fa-regular fa-heart text-dark-purple fs-5"></span>
                                            <span class="bi bi-share ms-3 text-dark-purple fs-5"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4 mt-3">
                            <div class="card">
                                <div class="card-body p-3">
                                    <img src="asset/image/event/card.png" alt="" width="100%">
                                </div>
                                <div class="card-footer pb-4 pt-3">
                                    <p class="ls-1">Millenials are basically keeping the summer blockbuster</p>
                                    <div class="row justify-content-end">
                                        <div class="col-6 text-center">
                                            <a href="/detail-event" class="btn btn-sm btn-purple btn-event fw-light ls-05 px-3 py-2 rounded-5">ENROLL EVENT</a>
                                        </div>
                                        <div class="col-3 my-auto text-end">
                                            <span class="fa-regular fa-heart text-dark-purple fs-5"></span>
                                            <span class="bi bi-share ms-3 text-dark-purple fs-5"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4 mt-3">
                            <div class="card">
                                <div class="card-body p-3">
                                    <img src="asset/image/event/card.png" alt="" width="100%">
                                </div>
                                <div class="card-footer pb-4 pt-3">
                                    <p class="ls-1">Millenials are basically keeping the summer blockbuster</p>
                                    <div class="row justify-content-end">
                                        <div class="col-6 text-center">
                                            <a href="/detail-event" class="btn btn-sm btn-purple btn-event fw-light ls-05 px-3 py-2 rounded-5">ENROLL EVENT</a>
                                        </div>
                                        <div class="col-3 my-auto text-end">
                                            <span class="fa-regular fa-heart text-dark-purple fs-5"></span>
                                            <span class="bi bi-share ms-3 text-dark-purple fs-5"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4 mt-3">
                            <div class="card">
                                <div class="card-body p-3">
                                    <img src="asset/image/event/card.png" alt="" width="100%">
                                </div>
                                <div class="card-footer pb-4 pt-3">
                                    <p class="ls-1">Millenials are basically keeping the summer blockbuster</p>
                                    <div class="row justify-content-end">
                                        <div class="col-6 text-center">
                                            <a href="/detail-event" class="btn btn-sm btn-purple btn-event fw-light ls-05 px-3 py-2 rounded-5">ENROLL EVENT</a>
                                        </div>
                                        <div class="col-3 my-auto text-end">
                                            <span class="fa-regular fa-heart text-dark-purple fs-5"></span>
                                            <span class="bi bi-share ms-3 text-dark-purple fs-5"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4 mt-3">
                            <div class="card">
                                <div class="card-body p-3">
                                    <img src="asset/image/event/card.png" alt="" width="100%">
                                </div>
                                <div class="card-footer pb-4 pt-3">
                                    <p class="ls-1">Millenials are basically keeping the summer blockbuster</p>
                                    <div class="row justify-content-end">
                                        <div class="col-6 text-center">
                                            <a href="/detail-event" class="btn btn-sm btn-purple btn-event fw-light ls-05 px-3 py-2 rounded-5">ENROLL EVENT</a>
                                        </div>
                                        <div class="col-3 my-auto text-end">
                                            <span class="fa-regular fa-heart text-dark-purple fs-5"></span>
                                            <span class="bi bi-share ms-3 text-dark-purple fs-5"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="bootcamp" class="nav-content tab-pane fade" role="tabpanel">
                    <div class="row">
                        <div class="col-sm-12 col-md-4 mt-3">
                            <div class="card">
                                <div class="card-body p-3">
                                    <img src="asset/image/event/card.png" alt="" width="100%">
                                </div>
                                <div class="card-footer pb-4 pt-3">
                                    <p class="ls-1">Millenials are basically keeping the summer blockbuster</p>
                                    <div class="row justify-content-end">
                                        <div class="col-6 text-center">
                                            <a href="/detail-event" class="btn btn-sm btn-purple btn-event fw-light ls-05 px-3 py-2 rounded-5">ENROLL EVENT</a>
                                        </div>
                                        <div class="col-3 my-auto text-end">
                                            <span class="fa-regular fa-heart text-dark-purple fs-5"></span>
                                            <span class="bi bi-share ms-3 text-dark-purple fs-5"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4 mt-3">
                            <div class="card">
                                <div class="card-body p-3">
                                    <img src="asset/image/event/card.png" alt="" width="100%">
                                </div>
                                <div class="card-footer pb-4 pt-3">
                                    <p class="ls-1">Millenials are basically keeping the summer blockbuster</p>
                                    <div class="row justify-content-end">
                                        <div class="col-6 text-center">
                                            <a href="/detail-event" class="btn btn-sm btn-purple btn-event fw-light ls-05 px-3 py-2 rounded-5">ENROLL EVENT</a>
                                        </div>
                                        <div class="col-3 my-auto text-end">
                                            <span class="fa-regular fa-heart text-dark-purple fs-5"></span>
                                            <span class="bi bi-share ms-3 text-dark-purple fs-5"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<script>
    $(document).ready(function() {
        searchHover = function() {
            let input1 = $('#event1 .input1 input');
            input1.on('focus', function() {
                $(this).parent().addClass('focus');
            });
            input1.on('blur', function() {
                if ($(this).val().length == 0) {
                    $(this).parent().removeClass('focus');
                }
            });
        }
        searchHover();

        // Slider Event
        slider = function() {
            let mediaSm = window.matchMedia("(max-width: 576px)");
            let mediaMd = window.matchMedia("(min-width: 577px)");
            if (mediaSm.matches) {
                var perPage = 1;
            } else if (mediaMd.matches) {
                var perPage = 3;
            } else {
                var perPage = 4;
            }
            var splide = new Splide('.splide', {
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
        slider();
    })
</script>

<?= $this->include('swevel/homepage/footer'); ?>
<?= $this->include('swevel/training/footer'); ?>
<?= $this->endSection(); ?>