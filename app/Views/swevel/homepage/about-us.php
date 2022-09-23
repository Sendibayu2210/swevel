<?php
// untuk membuat lingkaran 4x4
function circle()
{
    $star = 4;
    for ($a = 0; $a < $star; $a++) {
        echo '<div class="d-flex">';
        for ($i = 1; $i <= $a; $i++) {
            echo '<div class="circle"></div>';
        }
        for ($c = $star; $c > $a; $c -= 1) {
            echo '<div class="circle"></div>';
        }
        echo '</div>';
        echo '<br>';
    }
}
?>
<style>
    .img-weight {
        width: 220px;
        height: 450px;
    }

    #about-us .gambar::before {
        content: ' ';
        height: 100px;
        width: 150px;
        background-color: #45188B;
        position: absolute;
        z-index: 1;
        margin: 230px 0 0 -50px;

    }

    #about-us .gambar::after {
        content: ' ';
        height: 100px;
        width: 150px;
        background-color: #a77fe7;
        position: absolute;
        z-index: 1;
        margin: -20px 0 0 250px;
    }
</style>
<div id="about-us">
    <div class="box">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mt-5 mb-5">
                    <div class="text pt-5">
                        <h1 class="fw-bold">One of <span class="ch_color">Information Technology</span> Service Industry</h1>
                        <p class="cover-text my-5">PT. Swevel Universal Media is one of Information Technology Service Industry that gives service excellence quality. Point of product of PT. Swevel Universal Media prioritize System End User and gives creative solution IT. PT. Swevel
                            Universal Media focus in WEB Developer and Mobile Smart Phone Application.</p>
                    </div>
                    <div class="button-wrapper">
                        <a href="#aboutUs" class="button5 text-decoration-none"><strong>MORE &nbsp;</strong>
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
                        <div class="accordion-item homepage mb-3">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button bg-light text-dark" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <div class="row p-2">
                                        <div class="col-8">
                                            <h5><strong>Definition Of Swevel</strong></h5>
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
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>PT. Swevel Universal Media is one of Information Technology Service Industry that gives service excellence quality. Point of product of PT. Swevel Universal Media prioritize System End User and gives creative solution IT.
                                        PT. Swevel Universal Media focus in WEB Developer and Mobile Smart Phone Application.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item homepage mb-3">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button bg-light text-dark collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <div class="row p-2">
                                        <div class="col-8">
                                            <h5><strong>Visi & Mision</strong></h5>
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
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p><strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item homepage mb-3">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button bg-light text-dark collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <div class="row p-2">
                                        <div class="col-8">
                                            <h5><strong>Location</strong></h5>
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
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p><strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>