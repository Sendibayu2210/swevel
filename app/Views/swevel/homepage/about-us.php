<?php
// untuk membuat lingkaran 4x4
function circle()
{
    makeCircle();
}
?>
<div id="about-us">
    <div class="box">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 col-12 mt-5 mb-5">
                    <div class="text pt-5">
                        <h1 class="fw-bold">One of <span class="ch_color">Information Technology</span> Service Industry</h1>
                        <p class="cover-text my-5">PT. Swevel Universal Media is one of Information Technology Service Industry that gives service excellence quality. Point of product of PT. Swevel Universal Media prioritize System End User and gives creative solution IT. PT. Swevel
                            Universal Media focus in WEB Developer and Mobile Smart Phone Application.</p>
                    </div>
                    <div class="button-wrapper">
                        <a href="#aboutUs" class="btn btn-purple text-white text-decoration-none fw-bold btn-more" style="border-radius: 30px;">MORE
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 d-lg-block d-md-none d-sm-none">
                    <div class="gambar mt-5 pt-5">
                        <img src="/img/Gambar.png" class="img-fluid mt-5" alt="...">
                        <div class="circle-3"><?= circle(); ?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="aboutUs" class="box2 pt-5">
        <div class="container pt-5">
            <div class="row">
                <div class="col-lg-5 d-sm-none d-lg-block ">
                    <div class="big-O"></div>
                    <div class="big-1"></div>
                    <div class="gmbr">
                        <img src="/img/separo.png" class="img-weight">
                    </div>
                </div>
                <div class="col-lg-7 col-12">
                    <div class="accordion" id="accordionExample">
                        <?php foreach ($profile as $x) : ?>
                            <div class="accordion-item homepage mb-3">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button bg-light text-dark collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#<?= $x['category']; ?>" aria-expanded="true" aria-controls="<?= $x['category']; ?>">
                                        <div class="row p-2">
                                            <div class="col-8">
                                                <h5><strong><?= $x['title']; ?></strong></h5>
                                                <p style="color: #474545">PT. Swevel Universal Media</p>
                                            </div>
                                            <div class="col-4 my-auto">
                                                <div class="button-0">
                                                    <i class="fa-solid fa-chevron-down"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </button>
                                </h2>
                                <div id="<?= $x['category']; ?>" class="accordion-collapse collapse " aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p><?= $x['description']; ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>