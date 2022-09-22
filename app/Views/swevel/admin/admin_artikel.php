<?= $this->extend('swevel/admin/admin-template'); ?>
<?= $this->section('content'); ?>
<div class="container-fluid">
    <h3 class="main-title py-3">Article</h3>
    <div class="row">
        <div id="bar-chart" class="col-sm-12 mt-3 col-md-7">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title my-3">statistic project</h6>
                    <canvas id="barChart" width="100%"></canvas>
                </div>
            </div>
        </div>
        <div id="pie-chart" class="col-sm-12 mt-3 col-md-5">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title my-3 text-center">statistic project</h6>
                    <canvas id="pieChart" height="100%"></canvas>
                </div>
            </div>
        </div>
        <div id="card-article" class="col-sm-12 mt-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="row">

                        <div class="col-12 col-md-6 mt-2">
                            <div class="card border-0 bg-secondary">
                                <div class="card-body text-center">
                                    <p>20</p>
                                    <p>all article</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 mt-2">
                            <div class="card border-0 bg-info">
                                <div class="card-body text-center">
                                    <p>20</p>
                                    <p>all article</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 mt-2">
                            <div class="card border-0 bg-primary">
                                <div class="card-body text-center">
                                    <p>20</p>
                                    <p>all article</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 mt-2">
                            <div class="card border-0 bg-warning">
                                <div class="card-body text-center">
                                    <p>20</p>
                                    <p>all article</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div id="newest-article" class="col-sm-12 mt-3 col-md-6">
            <div class="card h-100">
                <div class="card-body">
                    <div class="container">
                        <div class="row justify-content-between">
                            <h6 class="col fw-bold my-auto">newest article</h6>
                            <h6 class="col text-end">
                                <a href="#" class="text-purple fw-bold">
                                    <i class="fa-solid fa-plus"></i>
                                    add new
                                </a>
                            </h6>
                        </div>
                        <div class="row mt-3">
                            <div class="col-4">
                                <img src="../asset/image/event/card2.png" height="25%" alt="">
                            </div>
                            <div class="col-8"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>