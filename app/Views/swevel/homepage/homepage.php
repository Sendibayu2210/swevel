<?= $this->extend("layout/template"); 
$this->section('content'); ?>
<?= $this->include('swevel/navbar'); ?>
<?php
function circle(){makeCircle();}
function circle1(){makeCircle();}
?>
<style>
    #about-us .page-1{
        border-top: 1px solid white;
        min-height: calc(100vh - 100px);
        background: rgb(216, 185, 255);
        background: linear-gradient(340deg, rgba(159, 136, 195, 1) -20%, rgba(255, 255, 255, 1) 62%);        
    }
    #about-us .page-2{
        min-height: 100vh;        
        background: rgb(216, 185, 255);
        background: linear-gradient(590deg, rgba(159, 136, 195, 1) -20%, rgba(255, 255, 255, 1) 70%);        
    }
    #about-us .btn-more{
        padding: 15px 50px;        
        border-radius : 40px;
        text-align: center;
        font-weight: bold;
        font-size: 17px;
    }
    .card-profile{
        border-radius: 15px;
        min-height: 120px;
        padding: 10px 20px;        
        font-size: 18px;        
    }    
    .semi-circle{
        display:flex;
    }
    .semi-circle .img{
        clip-path: circle(49.9% at 0 50%);        
        width: 350px;
        position: relative;
        z-index:5
    }    
    .semi-circle .bg{
        position:absolute;
        width:380px;
        margin-top: -50px;
        margin-left:-70px;
    }   
    .btn-more-milestone{
        padding:15px;
        border-radius:25px;
    }

    @media only screen and (max-width: 992px){
        .semi-circle{
            display:none;
        }
    }
</style>

<div id="about-us">
    <div class="page-1 ">
        <div class="container">
            <div class="col-lg-8 col-md-12 col-12 mt-5 mb-5">
                <div class="text pt-5">
                    <h1 class="fw-bold">One of <span class="ch_color">Information Technology</span> Service Industry</h1>
                    <p class="cover-text my-5">PT. Swevel Universal Media is one of Information Technology Service Industry that gives service excellence quality. Point of product of PT. Swevel Universal Media prioritize System End User and gives creative solution IT. PT. Swevel
                        Universal Media focus in WEB Developer and Mobile Smart Phone Application.</p>
                </div>
                <a href="#aboutUs" class="btn btn-purple btn-more">More</a>
            </div>
            <div class="col-lg-4">
                <div class="image-homepage">
                    <img src="/img/Gambar.png" class="mt-5" alt="...">
                </div>                
                <div class="circle-3"><?= circle(); ?></div>
            </div>
        </div>
    </div>
    <div id="aboutUs" class="page-2 py-5">
        <div class="container mt-5 pt-5">
        <div class="row">
            <div class="col-lg-6">
                <div class="semi-circle justify-content-center">
                    <img src="/img/image 9.png" alt="" class="img">                    
                    <img src="/img/Group 2317.png" alt="" class="bg">                                        
                </div>                
            </div>
            <div class="col-lg-6">
                <?php foreach ($profile as $x) : ?>
                    <div class="card card-profile mb-4 border-0 shadow cursor-pointer">
                        <div class="card-body">
                            <div class="row btn-card-profile">
                                <div class="col-lg-9"><?= $x['title']; ?></div>
                                <div class="text-muted mt-2">PT. Swevel Universal Media</div>
                            </div>
                            <div class="deskripsi-profile mt-5 hide">
                                <div><?= $x['description']; ?></div>
                            </div>
                        </div>                        
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    </div>    
</div>

<section id="service">
    <div class="container pt-5">
        <div class="text-center mb-5 pb-5 ">
            <h1 class="fw-bold">Our <span class="text-purple">Servive</span></h1>
            <div class="">
                <span class="d-block">Swevel Universal Media focus in Software Development</span>
                <span class="d-block">and Learning Management</span>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 d-flex justify-content-lg-end justify-content-md-center justify-content-sm-center">
                <a href="/course" class="text-decoration-none text-dark">
                    <div class="card card-service shadow mb-md-4 mb-sm-4 mx-3">
                        <div class="card-body">
                            <h3 class="card-title">Software Development</h3>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                        <img src="https://img.business.com/w/700/aHR0cHM6Ly9pbWFnZXMuYnVzaW5lc3NuZXdzZGFpbHkuY29tL2FwcC91cGxvYWRzLzIwMjIvMDQvMDQwNzQ1NTMvMTU1NDI0NDAxMC5qcGVn" class="card-img-bottom" alt="...">
                    </div>
                </a>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 d-flex justify-content-lg-start justify-content-md-center justify-content-sm-center">
                <a href="/course" class="text-decoration-none text-dark">
                    <div class="card card-service shadow mb-md-4 mb-sm-4 mx-3">
                        <img src="https://img.business.com/w/700/aHR0cHM6Ly9pbWFnZXMuYnVzaW5lc3NuZXdzZGFpbHkuY29tL2FwcC91cGxvYWRzLzIwMjIvMDQvMDQwNzQ1NTMvMTU1NDI0NDAxMC5qcGVn" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h3 class="card-title">Learning Management</h3>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>    
    <div class="circle-1 d-sm-none d-md-none d-lg-block"><?= circle1(); ?></div>
    <div class="circle-2 d-sm-none d-md-none d-lg-block"><?= circle1(); ?></div>
</section>

<section id="portofolio">
    <div class="container mb-5 pb-5">
        <div class="row">
            <div class="col-lg-6 d-sm-none d-lg-block d-md-none">
                <img src="/img/GroupImg.png" alt="" class="decoration" style="z-index: 5;">
            </div>
            <div class="col-lg-6 text-end">
                <h2 class="text-purple fw-bold">Portofolio</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem reiciendis dolorum doloremque eius facilis voluptatum corporis.</p>
            </div>
        </div>
        <div class="image-portofolio text-center">
            <div class="mt-3 mb-3">
                <div class="img">
                    <?php foreach ($portofolio as $x) : ?>
                        <img src="/img/portofolio/<?= $x['image']; ?>" alt="" style="width: 200px;" class="mx-2 mb-3">
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="milestone">
    <div class="mt-5 container-milestone bg-dark-blue text-white pt-5">
        <div class="h1 text-center mb-5 text-purple fw-bold">Milestone</div>
        <?php foreach ($milestoneLimit as $x) : ?>
            <div class="row milestone-content">
                <div class="col-lg-2 col-md-12 col-sm-12 text-lg-end text-md-center text-sm-center fw-bold h4"><?= $x['year']; ?></div>
                <div class="col-lg-1 col-md-12 col-sm-12 box-line d-sm-none d-md-none d-lg-block">
                    <div class="line-milestone-1"></div>
                    <div class="bead"></div>
                    <div class="line-milestone-2"></div>
                </div>
                <div class="col-lg-3 col-md-12 col-sm-12 text-center"><img src="/img/milestone/<?= $x['image']; ?>" alt="" style="max-width: 10rem;border-radius: 15px;"></div>
                <div class="col-lg-5 col-md-12 col-sm-12 mb-5 pb-5 text-lg-end text-md-center text-sm-center"><?= $x['description']; ?></div>
            </div>
        <?php endforeach; ?>
        <div class="text-center mt-4">
            <button class="btn btn-purple btn-more-milestone" data-bs-toggle="modal" data-bs-target="#modalMilestone">Lihat Semua Milestone</button>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="modalMilestone" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-scrollable modal-fullscreen-md-down">
            <div class="modal-content modal-content-milestone bg-dark-blue">
                <div class="modal-header text-white border-0">
                    <h5 class="modal-title" id="exampleModalLabel"></h5>
                    <button type="button" class="btn text-white border-0" data-bs-dismiss="modal"><i class="fa-solid fa-xmark me-2"></i> Tutup</button>
                </div>
                <div class="modal-body">
                    <div class="text-white">
                        <div class="h1 text-center mb-5 text-purple fw-bold">Milestone</div>
                        <?php foreach ($milestone as $y) : ?>
                            <div class="row milestone-content">
                                <div class="col-lg-2 col-md-12 col-sm-12 text-lg-end text-md-center text-sm-center fw-bold h4"><?= $y['year']; ?></div>
                                <div class="col-lg-1 col-md-12 col-sm-12 box-line d-sm-none d-md-none d-lg-block">
                                    <div class="line-milestone-1"></div>
                                    <div class="bead"></div>
                                    <div class="line-milestone-2"></div>
                                </div>
                                <div class="col-lg-3 col-md-12 col-sm-12 text-lg-end text-md-center text-sm-center"><img src="/img/milestone/<?= $y['image']; ?>" alt="" style="max-width: 10rem;border-radius: 15px;"></div>
                                <div class="col-lg-5 col-md-12 col-sm-12 mb-5 text-lg-start text-md-center text-sm-center"><?= $y['description']; ?></div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
</section>
<section id="article-homepage" class="pt-5 mb-5 pb-5">
    <div class="container pt-5">
        <div class="row">
            <div class="col-lg-4">
                <h1 class="text-purple">
                    <span>Newest <span class="fw-bold">Article</span></span>
                    <p> of Swevel</p>
                </h1>
            </div>
            <div class="col-lg-8 d-sm-none d-lg-block">
                <img src="/img/GroupImg.png" alt="" class="decoration">
            </div>
        </div>
        <div class="row mt-5 pt-5 justify-content-center">
            <?php foreach ($artikel as $x) : ?>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-sm-4">
                    <a href="/detail-artikel/<?= $x['slug']; ?>" class="text-decoration-none text-dark">
                        <div class="card card-article border-0 mx-2 cursor-pointer">
                            <img src="/img/artikel/<?= $x['poster']; ?>" class="card-img-top" alt="...">
                            <div class="card-body px-0">
                                <h5 class="card-title"><?= $x['judul']; ?></h5>
                                <p class="card-text"><?= substr($x['isi_artikel'], 0, 20); ?></p>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
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
<section id="client">
    <div class="container pt-5">
        <div class="text-center mb-5 mt-4">
            <h2 class="text-purple-100">Our <span class="fw-bold">Client</span></h2>
            <p>Colaboration with various top companies</p>
        </div>
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
<main id="contact">
    <section id="customer-review" class="pt-5 pb-5">
        <div class="container mt-3">
            <h1><strong><span class="text-dark-purple">Customer </span><span>Review</span></strong></h1>
        </div>
        <div class="bg1 mt-5">
            <div class="container bg-transparent p-3">
                <div class="row flex-row-reverse">
                    <div class="col-sm-12 col-md-6 text-center my-auto">
                        <img src="asset/image/contactUs/img.png" alt="" width="150px">
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <p class="fs-4">
                            <span class="fw-bold">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro esse commodi.
                            </span class="fw-bold">
                        </p>
                        <div class="p">
                            <p class="fs-6">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione voluptatibus harum iusto ipsa, temporibus, recusandae sequi accusamus porro hic quibusdam sapiente rerum asperiores impedit saepe debitis ut? Voluptatibus, sapiente quae.</p>
                            <p class="fs-7">created by <span class="fw-semibold ls-05">natasyafw</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg2 mt-5">
            <div class="container bg-transparent p-3">
                <div class="row">
                    <div class="col-sm-12 col-md-6 text-center my-auto">
                        <img src="asset/image/contactUs/img.png" alt="" width="150px">
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <p class="fs-4">
                            <span class="fw-bold">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro esse commodi.
                            </span class="fw-bold">
                        </p>
                        <div class="p">
                            <p class="fs-6">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione voluptatibus harum iusto ipsa, temporibus, recusandae sequi accusamus porro hic quibusdam sapiente rerum asperiores impedit saepe debitis ut? Voluptatibus, sapiente quae.</p>
                            <p class="fs-7">created by <span class="fw-semibold ls-05">natasyafw</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg1 mt-5">
            <div class="container bg-transparent p-3">
                <div class="row flex-row-reverse">
                    <div class="col-sm-12 col-md-6 text-center my-auto">
                        <img src="asset/image/contactUs/img.png" alt="" width="150px">
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <p class="fs-4">
                            <span class="fw-bold">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro esse commodi.
                            </span class="fw-bold">
                        </p>
                        <div class="p">
                            <p class="fs-6">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione voluptatibus harum iusto ipsa, temporibus, recusandae sequi accusamus porro hic quibusdam sapiente rerum asperiores impedit saepe debitis ut? Voluptatibus, sapiente quae.</p>
                            <p class="fs-7">created by <span class="fw-semibold ls-05">natasyafw</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section id="contactUs" class="pb-5" style="background-color: #FAF6FF">
        <div class="container">
            <div class="row">
                <h1 class="mt-5 fw-bold text-center">Contact <strong>Us</strong></h1>
                <p class="text-center">Any question or Remarks? Just Write Us a Message</p>
            </div>
            <div class="card mt-5">
                <div class="card-body p-0">
                    <div class="container">
                        <div class="row">

                            <div class="col1 col-sm-12 col-md-4 bg-purple">
                                <div class="row justify-content-center text-white">
                                    <div class="col-12 text-center">
                                        <h3 class="fw-bold">Contact Information</h3>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae id rerum saepe.</p>
                                    </div>

                                    <div class="col col-11">
                                        <div class="row">
                                            <div class="col-2">
                                                <i class="fa-solid fa-phone fs-5"></i>
                                            </div>
                                            <div class="col-10">
                                                <?php foreach ($kontak as $x) : ?>
                                                    <?php if ($x['name'] == 'phone') : ?>
                                                        <span><?= $x['description']; ?></span>
                                                    <?php endif; ?>
                                                <?php endforeach; ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col col-11">
                                        <div class="row">
                                            <div class="col-2">
                                                <i class="fa-regular fa-envelope fs-5"></i>
                                            </div>
                                            <div class="col-10">
                                                <?php foreach ($kontak as $x) : ?>
                                                    <?php if ($x['name'] == 'envelope') : ?>
                                                        <span><?= $x['description']; ?></span>
                                                    <?php endif; ?>
                                                <?php endforeach; ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col col-11">
                                        <div class="row">
                                            <div class="col-2">
                                                <i class="fa-solid fa-location-dot fs-5"></i>
                                            </div>
                                            <div class="col-10">
                                                <span>Jl. H.R. Rasuna Said, Kav 3, South Jakarta, 12950 - Indonesia</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col2 col-sm-12 col-md-8">
                                <form class="row g-3 justify-content-between">
                                    <div class="col-sm-12 col-md-5">
                                        <label class="form-input-label">first name</label>
                                        <input type="text" class="form-control" placeholder="write your first name">
                                    </div>
                                    <div class="col-sm-12 col-md-5">
                                        <label class="form-input-label">last name</label>
                                        <input type="text" class="form-control" placeholder="write your last name">
                                    </div>
                                    <div class="col-sm-12 col-md-5">
                                        <label class="form-input-label">mail</label>
                                        <input type="email" class="form-control" placeholder="write your mail">
                                    </div>
                                    <div class="col-sm-12 col-md-5">
                                        <label class="form-input-label">phone</label>
                                        <input type="text" class="form-control" placeholder="08123456789">
                                    </div>
                                    <div class="col-sm-12 col-md-12">
                                        <label class="form-input-label">message</label>
                                        <textarea class="form-control" placeholder="write your message" rows="1"></textarea>
                                    </div>
                                    <div class="col-md-12">
                                        <p class="mt-3 fs-7 fw-bold">what topic you need to ask ?</p>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="softwareDevelopment">
                                            <label class="form-check-label" for="inlineRadio1">software development</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="learningManagement">
                                            <label class="form-check-label" for="inlineRadio2">learning management</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" checked name="inlineRadioOptions" id="inlineRadio3" value="other">
                                            <label class="form-check-label" for="inlineRadio3">other</label>
                                        </div>
                                    </div>
                                    <div class="col-12 text-end mt-5 sendMsg">
                                        <button id="btnSend" type="submit" class="btn btn-dark-purple btn-sm text-white fw-bolder rounded-pill ps-4 pe-4">SEND</button>
                                    </div>
                                </form>
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

        $('body').css('overflow-x','hidden');

        // About Us
        $(".card-profile").click(function(){
            $('.deskripsi-profile').hide(400);            
            $(this).find('.deskripsi-profile').show(400);            
        })

        // Milestone
        // mengatur tinggi garis
        let heightBoxLine = $(".row.milestone-content")[0].scrollHeight;
        let heightBead = $(".bead")[0].scrollHeight;
        $('.line-milestone-1').css('height', (heightBoxLine / 2) - heightBead);
        $('.line-milestone-2').css('height', (heightBoxLine / 2) + heightBead);

        $(".milestone-content").hover(function() {
            $(this).addClass("active").css('transition', 'ease .5s').prevAll().removeClass("active");
            $(this).nextAll().removeClass("active");
            $(this).find('.bead').addClass('active').css('transition', 'all .7s');
            $('.line-milestone-1, .line-milestone-2').css('opacity', '.4')
        });
        $('.milestone-content').mouseleave(function() {
            $(this).find('.bead').removeClass('active');
        })

        $('.modal-content-milestone').css('border-radius', '20px');
    })
</script>


<?= $this->include('swevel/homepage/footer'); ?>
<?= $this->endSection(); ?>
