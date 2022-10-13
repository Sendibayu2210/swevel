<?php
function circle1()
{
    makeCircle();
}
?>

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

    <div class="service-shadow"></div>
    <div class="circle-1 d-sm-none d-md-none d-lg-block"><?= circle1(); ?></div>
    <div class="circle-2 d-sm-none d-md-none d-lg-block"><?= circle1(); ?></div>
</section>