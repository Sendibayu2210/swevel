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