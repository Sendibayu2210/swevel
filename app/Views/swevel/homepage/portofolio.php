<?php
// untuk membuat gari
function line()
{
    for ($i = 0; $i < 3; $i++) {
        echo '<div class="line"></div>';
    }
} ?>

<section id="portofolio">
    <div class="container mb-5 pb-5">
        <div class="row">
            <div class="col-lg-6 d-sm-none d-lg-block d-md-none">
                <img src="/img/GroupImg.png" alt="" class="decoration">
            </div>
            <div class="col-lg-6 text-end">
                <h2 class="text-purple fw-bold">Portofolio</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem reiciendis dolorum doloremque eius facilis voluptatum corporis.</p>
            </div>
        </div>
        <div class="image-portofolio text-center">
            <div class="mt-3 mb-3">
                <div class="img">
                    <?php for ($i = 0; $i < 10; $i++) : ?>
                        <img src="https://img.business.com/w/700/aHR0cHM6Ly9pbWFnZXMuYnVzaW5lc3NuZXdzZGFpbHkuY29tL2FwcC91cGxvYWRzLzIwMjIvMDQvMDQwNzQ1NTMvMTU1NDI0NDAxMC5qcGVn" alt="" style="width: 200px;" class="mx-2 mb-3">
                    <?php endfor; ?>
                </div>
            </div>
        </div>
    </div>
</section>