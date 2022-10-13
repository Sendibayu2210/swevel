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