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
                    <img src="asset/image/faq/Question.png" width="100%" alt="">                    
                </div>
                <div class="col-sm-12 col-md-6 d-flex align-items-center">
                    <h1 class="fw-light lh-base">
                        Masih ada <span class="fw-bold text-dark-purple">Pertanyaan </span>?</br>                        
                    </h1>                 
                </div>
            </div>
        </div>
    </section>

    <section id="question">
        <div class="container pb-5 ">
            <div class="row mt-5">
                <div class="col-sm-12 col-md-5 justify-content-center d-flex">
                    <ul class="nav flex-column nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
                        <button class="nav-link active" data-bs-toggle="pill" data-bs-target="#kursus" type="button" role="tab" aria-selected="true">Kursus</button>
                        <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pelatihan" type="button" role="tab" aria-selected="false">Pelatihan</button>
                        <button class="nav-link" data-bs-toggle="pill" data-bs-target="#lainnya" type="button" role="tab" aria-selected="false">Lainnya</button>                        
                    </ul>
                </div>
                <div class="col-sm-12 col-md-7">
                    <div class="tab-content" id="pills-tabContent">
                       

                        <div class="tab-pane fade" id="kursus" role="tabpanel" aria-labelledby="kursus-tab" tabindex="0">
                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                <?php foreach($faq as $x) : ?>
                                    <?php if($x['kategori'] == 'kursus' && $x['answer'] != '') :  ?>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="flush-headingOne">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#kursus<?= $x['id'];?>" aria-expanded="false">
                                                    <?= $x['question']; ?>
                                                </button>
                                            </h2>
                                            <div id="kursus<?= $x['id'];?>" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                                <div class="accordion-body"><?= $x['answer']; ?></div>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                <?php endforeach; ?>

                            </div>
                        </div>
                        <div class="tab-pane fade" id="pelatihan" role="tabpanel" aria-labelledby="pelatihan-tab" tabindex="0">
                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                <?php foreach($faq as $x) : ?>
                                    <?php if($x['kategori'] == 'pelatihan' && $x['answer'] != '') :  ?>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="flush-headingOne">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#pelatihan<?= $x['id']; ?>" aria-expanded="false">
                                                    <?= $x['question']; ?>
                                                </button>
                                            </h2>
                                            <div id="pelatihan<?= $x['id']; ?>" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                                <div class="accordion-body"><?= $x['answer']; ?></div>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                <?php endforeach; ?>

                            </div>
                        </div>
                         <div class="tab-pane fade" id="lainnya" role="tabpanel" aria-labelledby="lainnya-tab" tabindex="0">
                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                <?php foreach($faq as $x) : ?>
                                    <?php if($x['kategori'] == 'lainnya' && $x['answer'] != '') :  ?>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="flush-headingOne">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#lainnya<?= $x['id'];?>" aria-expanded="false">
                                                    <?= $x['question']; ?>
                                                </button>
                                            </h2>
                                            <div id="lainnya<?= $x['id'];?>" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                                <div class="accordion-body"><?= $x['answer']; ?></div>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                <?php endforeach; ?>

                            </div>
                        </div>

                         <div class="tab-pane fade" id="pelatihan" role="tabpanel" aria-labelledby="pelatihan-tab" tabindex="0">
                            <div class="accordion accordion-flush" id="accordionFlushExample">

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingOne">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#pelatihan1" aria-expanded="false">
                                            Services #1
                                        </button>
                                    </h2>
                                    <div id="pelatihan1" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="tab-pane fade" id="lainnya" role="tabpanel" aria-labelledby="lainnya-tab" tabindex="0">
                            <div class="accordion accordion-flush" id="accordionFlushExample">

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingOne">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#lainnya1" aria-expanded="false">
                                            About Us #1
                                        </button>
                                    </h2>
                                    <div id="aboutus1" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
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