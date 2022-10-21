<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<?= $this->include('swevel/navbar'); ?>
<section id="article">
    <div class="container mb-5">
        <nav aria-label="breadcrumb" class="my-4">
            <ol class="breadcrumb text-capitalize">
                <li class="breadcrumb-item active" aria-current="page"><a href="/artikel" class="text-decoration-none">artikel</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?= $artikel['judul']; ?></li>
            </ol>
        </nav>

        <div class="content-article">
            <div class="row">
                <div class="col-lg-8 pt-4">
                    <div class="card mb-3 border-0">
                        <div class="text-center">
                            <img src="/img/artikel/<?= $artikel['poster']; ?>" class="card-img-top" alt="..." style="max-width: 400px;">
                        </div>
                        <div class="card-body mt-2">
                            <h5 class="card-title h3 lh-lg"><?= $artikel['judul']; ?></h5>
                            <p class="card-text">
                                <?= $artikel['isi_artikel']; ?>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="my-3 fw-bold">Related Article</div>
                    <?php foreach ($artikel_all as $x) : ?>
                        <div class="card  border-0">
                            <div class="row">
                                <div class="col-lg-4 my-auto">
                                    <img src="/img/artikel/<?= $x['poster']; ?>" class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-lg-8">
                                    <div class="card-body">
                                        <h5 class="card-title small"><?= $x['judul']; ?></h5>
                                        <p class="card-text"></p>
                                        <p class="card-text"><a href="/detail-artikel/<?= $x['slug']; ?>" class="text-decoration-none"><small class="text-muted">Read more</small></a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->include('swevel/homepage/footer'); ?>
<?= $this->include('swevel/training/footer'); ?>
<?= $this->endSection(); ?>