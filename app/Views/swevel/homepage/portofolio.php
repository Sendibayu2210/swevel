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
            <div class="col-lg-4">
                <h2 class="text-purple fw-bold">Portofolio</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem reiciendis dolorum doloremque eius facilis voluptatum corporis.</p>
            </div>
            <div class="col-lg-8 d-sm-none d-lg-block">
                <div class="line-main-1"><?= line(); ?></div>
            </div>
        </div>
        <div class="image-portofolio text-center">
            <div class="mt-3 mb-3">
                <?php for ($i = 0; $i < 5; $i++) : ?>
                    <img src="https://img.business.com/w/700/aHR0cHM6Ly9pbWFnZXMuYnVzaW5lc3NuZXdzZGFpbHkuY29tL2FwcC91cGxvYWRzLzIwMjIvMDQvMDQwNzQ1NTMvMTU1NDI0NDAxMC5qcGVn" alt="" style="width: 200px;" class="mx-2">
                <?php endfor; ?>
            </div>
            <div>
                <?php for ($i = 0; $i < 5; $i++) : ?>
                    <img src="https://img.business.com/w/700/aHR0cHM6Ly9pbWFnZXMuYnVzaW5lc3NuZXdzZGFpbHkuY29tL2FwcC91cGxvYWRzLzIwMjIvMDQvMDQwNzQ1NTMvMTU1NDI0NDAxMC5qcGVn" alt="" style="width: 200px;" class="mx-2">
                <?php endfor; ?>
            </div>
        </div>
    </div>
</section>

<script>
    $(document).ready(function() {
        $('#datepicker').datepicker();
        $('#inputfile').click(function() {
            $('#formfile').click();
        });
    })
</script>