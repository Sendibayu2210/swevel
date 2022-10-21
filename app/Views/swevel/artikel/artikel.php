<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<?= $this->include('swevel/navbar'); ?>
<section id="article">
    <div class="container mb-5">
        <nav aria-label="breadcrumb" class="my-4">
            <ol class="breadcrumb text-capitalize">
                <li class="breadcrumb-item"><a href="#">beranda</a></li>
                <li class="breadcrumb-item active" aria-current="page">artikel</li>
            </ol>
        </nav>

        <div class="content-article">
            <div class="row">
                <div class="col-lg-8">
                    <div class="h4 mb-4 fw-bold">Popular Article</div>
                    <div class="card mb-3 border-0">
                        <img src="https://cdn0-production-images-kly.akamaized.net/xilcF2WJtdfH5Qu3ssQ-luM_2qE=/640x358/smart/filters:quality(75):strip_icc():format(jpeg)/kly-media-production/thumbnails/4148628/original/010953600_1662458648-viral-petugas-spbu-emosi-ke-pelanggan-dua-kali-serobot-antrian-83b65f.jpg" class="card-img-top" alt="...">
                        <div class="card-body mt-2">
                            <h5 class="card-title h3 lh-lg">The Future of Education On The Blockchain</h5>
                            <p class="card-text">PT. Swevel Universal Media is one of Information Technology Service Industry that gives service excellence quality. Point of product of PT. Swevel Universal Media prioritize System End User and gives creative solution IT.
                                PT. Swevel Universal Media focus in WEB Developer and Mobile Smart Phone Application.</p>
                            <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="my-3 fw-bold">Related Article</div>
                    <?php foreach ($artikel as $x) : ?>
                        <div class="card mb-3 border-0">
                            <div class="row g-0">
                                <div class="col-md-4 my-auto">
                                    <img src="/img/artikel/<?= $x['poster']; ?>" class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
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

            <div class="lates-article">
                <div class="mt-5 mb-4 h4 text-center">Lates Article</div>
                <div class="row">
                    <?php foreach ($artikel as $x) : ?>
                        <div class="col-lg-4">
                            <div class="card mb-3 border-0">
                                <div class="row g-0">
                                    <div class="col-md-4 my-auto">
                                        <img src="/img/artikel/<?= $x['poster']; ?>" class="img-fluid rounded-start" alt="...">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title small"><?= $x['judul']; ?></h5>
                                            <p class="card-text"></p>
                                            <p class="card-text"><a href="/detail-artikel/<?= $x['slug']; ?>" class="text-decoration-none"><small class="text-muted">Read more</small></a></p>
                                        </div>
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