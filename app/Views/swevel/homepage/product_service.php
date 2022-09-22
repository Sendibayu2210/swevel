<?php
// untuk membuat lingkaran 4x4
function circle1()
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

<section id="service">
    <div class="container">
        <div class="text-center mb-5">
            <h1 class="fw-bold">Our <span class="text-purple">Servive</span></h1>
            <div class="">
                <span class="d-block">Swevel Universal Media focus in Software Development</span>
                <span class="d-block">and Learning Management</span>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 d-flex justify-content-lg-end justify-content-md-center justify-content-sm-center">
                <div class="card card-service shadow mb-md-4 mb-sm-4">
                    <div class="card-body">
                        <h3 class="card-title">Software Development</h3>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
                    </div>
                    <img src="https://img.business.com/w/700/aHR0cHM6Ly9pbWFnZXMuYnVzaW5lc3NuZXdzZGFpbHkuY29tL2FwcC91cGxvYWRzLzIwMjIvMDQvMDQwNzQ1NTMvMTU1NDI0NDAxMC5qcGVn" class="card-img-bottom" alt="...">
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 d-flex justify-content-lg-start justify-content-md-center justify-content-sm-center">
                <div class="card card-service shadow mb-md-4 mb-sm-4">
                    <img src="https://img.business.com/w/700/aHR0cHM6Ly9pbWFnZXMuYnVzaW5lc3NuZXdzZGFpbHkuY29tL2FwcC91cGxvYWRzLzIwMjIvMDQvMDQwNzQ1NTMvMTU1NDI0NDAxMC5qcGVn" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h3 class="card-title">Learning Management</h3>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="service-shadow"></div>
    <div class="circle-1 d-sm-none d-lg-block"><?= circle1(); ?></div>
    <div class="circle-2 d-sm-none d-lg-block"><?= circle1(); ?></div>
</section>