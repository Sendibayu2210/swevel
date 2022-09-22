<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<?= $this->include('swevel/navbar'); ?>
<main id="faq">

    <div class="bg-light-purple pb-2 pt-4">
        <div class="container mt-0">
            <nav style="--bs-breadcrumb-divider: '/';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Beranda</a></li>
                    <li class="breadcrumb-item ls-1" aria-current="page">FAQ</li>
                </ol>
            </nav>
        </div>
    </div>

    <section id="faqTop">
        <div class="container">
            <div class="row justify-content-between flex-row-reverse mt-5">

                <div class="col-sm-12 col-md-4 img">
                    <!-- <div class="card border-0">
                    <div class="card-body p-0"> -->
                    <img src="asset/image/faq/Question.png" width="100%" alt="">
                    <!-- </div>
                </div> -->
                </div>

                <div class="col-sm-12 col-md-6">
                    <h1 class="fw-light lh-base">
                        Have Any <span class="fw-bold text-dark-purple">Question </span>?</br>
                        Look Here
                    </h1>
                    <div class="row search">
                        <div class="col-8">
                            <div class="input-group inputfaq">
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

    <section id="question">
        <div class="container pb-5 ">
            <div class="row mt-5">
                <div class="col-sm-12 col-md-5 justify-content-center d-flex">
                    <ul class="nav flex-column nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
                        <button class="nav-link active" data-bs-toggle="pill" data-bs-target="#general" type="button" role="tab" aria-selected="true">general</button>
                        <button class="nav-link" data-bs-toggle="pill" data-bs-target="#services" type="button" role="tab" aria-selected="false">services</button>
                        <button class="nav-link" data-bs-toggle="pill" data-bs-target="#aboutUs" type="button" role="tab" aria-selected="false">about us</button>
                        <button class="nav-link" data-bs-toggle="pill" data-bs-target="#event" type="button" role="tab" aria-selected="false">event</button>
                        <button class="nav-link" data-bs-toggle="pill" data-bs-target="#course" type="button" role="tab" aria-selected="false">course</button>
                        <button class="nav-link" data-bs-toggle="pill" data-bs-target="#training" type="button" role="tab" aria-selected="false">training</button>
                    </ul>
                </div>
                <div class="col-sm-12 col-md-7">
                    <div class="tab-content" id="pills-tabContent">

                        <div class="tab-pane fade show active" id="general" role="tabpanel" aria-labelledby="general-tab" tabindex="0">
                            <div class="accordion accordion-flush" id="accordionFlushExample">

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingOne">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#general1" aria-expanded="false">
                                            General #1
                                        </button>
                                    </h2>
                                    <div id="general1" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#general2" aria-expanded="false">
                                            General #2
                                        </button>
                                    </h2>
                                    <div id="general2" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#general3" aria-expanded="false">
                                            General #3
                                        </button>
                                    </h2>
                                    <div id="general3" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="tab-pane fade" id="services" role="tabpanel" aria-labelledby="services-tab" tabindex="0">
                            <div class="accordion accordion-flush" id="accordionFlushExample">

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingOne">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#services1" aria-expanded="false">
                                            Services #1
                                        </button>
                                    </h2>
                                    <div id="services1" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="tab-pane fade" id="aboutUs" role="tabpanel" aria-labelledby="aboutUs-tab" tabindex="0">
                            <div class="accordion accordion-flush" id="accordionFlushExample">

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingOne">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#aboutus1" aria-expanded="false">
                                            About Us #1
                                        </button>
                                    </h2>
                                    <div id="aboutus1" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="tab-pane fade" id="event" role="tabpanel" aria-labelledby="event-tab" tabindex="0">
                            <div class="accordion accordion-flush" id="accordionFlushExample">

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingOne">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#event1" aria-expanded="false">
                                            Event #1
                                        </button>
                                    </h2>
                                    <div id="event1" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="tab-pane fade" id="course" role="tabpanel" aria-labelledby="course-tab" tabindex="0">
                            <div class="accordion accordion-flush" id="accordionFlushExample">

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingOne">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#course1" aria-expanded="false">
                                            Course #1
                                        </button>
                                    </h2>
                                    <div id="course1" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="tab-pane fade" id="training" role="tabpanel" aria-labelledby="training-tab" tabindex="0">
                            <div class="accordion accordion-flush" id="accordionFlushExample">

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingOne">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#training1" aria-expanded="false">
                                            Training #1
                                        </button>
                                    </h2>
                                    <div id="training1" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
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
            let input = $('#faq .inputfaq input');
            let i = $('#faq .inputfaq i');
            console.log(input);
            input.on('focus', function() {
                $(this).parent().addClass('focus');
                i.addClass('text-dark-purple');
            })
            input.on('blur', function() {
                if ($(this).val().length == 0) {
                    $(this).parent().removeClass('focus');
                    i.removeClass('text-dark-purple');
                }
            })

        }
        searchHover();

        questionFunc = function() {
            let mediaSm = window.matchMedia("(max-width: 576px)");
            let mediaMd = window.matchMedia("(min-width: 577px)");
            let ul = $('#question ul');
            let parentUl = ul.parent();
            if (mediaSm.matches) {
                if (ul.hasClass('flex-column') && parentUl.hasClass('d-flex')) {
                    ul.removeClass('flex-column');
                    parentUl.removeClass('d-flex');
                }
            }
            if (mediaMd.matches) {
                if (!ul.hasClass('flex-column') && !parentUl.hasClass('d-flex')) {
                    ul.addClass('flex-column');
                    parentUl.addClass('d-flex');
                }
            }
        }
        questionFunc();
        $(window).resize(function() {
            questionFunc();
        });
    });
</script>
<?= $this->include('swevel/homepage/footer'); ?>
<?= $this->include('swevel/training/footer'); ?>
<?= $this->endSection(); ?>