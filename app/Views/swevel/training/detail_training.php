<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<?= $this->include('swevel/navbar-course'); ?>

<style>
    .detail-img {
        max-width: 500px;
    }
</style>
<section id="detail-training">
    <div class="container">
        <div class="title text-center mt-5 mb-lg-5 pb-4 fw-bold h3 text-purple"><?= $detail->title; ?></div>
        <div class="row mb-5">
            <div class="col-lg-6 overflow-hidden">
                <img src="<?= $detail->thumbnail; ?>" alt="" class="detail-img">
            </div>
            <div class="col-lg-6">
                <div class="h5 fw-bold mb-3">Penjelasan Pelatihan</div>
                <p class="text-justify"><?= $detail->description; ?></p>            
                <div class="row mt-5">
                    <div class="col-lg-6 col-sm-7 d-block">
                        <div class="card-text text-decoration-line-through text-secondary h5"><small>Rp <?= number_format($detail->old_price, 0, ",", ".") ?></small></div>
                        <div class="card-text h4 fw-bold text-red">Rp <?= number_format($detail->new_price, 0, ",", ".") ?></div>
                    </div>
                    <div class="col-lg-6 col-sm-5 text-sm-start">
                        <button type="button" class="btn btn-purple-100 w-100 modal-login redirect-login">Ikuti Pelatihan</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="similiar-event mb-5 mt-5">
            <div class="h3 fw-bold mb-4 text-purple">Pelatihan lainnya</div>
            <section id="similiar-event" class="mb-5 pb-5">
                <div class="row ">
                    <?php foreach($pelatihan as $x) : ?>
                        <div class="col-md-6 col-lg-4">
                            <div class="card border-0 card-training cursor-pointer mb-5 shadow br-15" data-id="<?= $x->course_id; ?>">
                                <img src="<?= $x->thumbnail; ?>" class="card-img-top" alt="...">
                                <div class="card-body">                                    
                                    <h5 class="card-title text-purple"><?= $x->title; ?></h5>                                    
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="small text-decoration-line-through">Rp <?= number_format($x->old_price, 0, ",", ".") ?></div>
                                            <div class="text-red fw-bold">Rp <?= number_format($x->old_price, 0, ",", ".") ?></div>
                                        </div>
                                        <div class="col-6 text-center">
                                            <button class="btn btn-sm btn-purple redirect-login">Ikuti Pelatihan</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

                <div class="d-flex justify-content-center mt-3">
                    <a href="/training" class="btn btn-purple px-5 btn-more-course">Lihat semua</a>
                </div>
            </section>
        </div>
    </div>
</section>



<script>
    $('.card-training').click(function() {
        let id = $(this).data('id');
        window.location.href = "/pelatihan/detail/"+id;
    })
    $('.modal-login').click(function() {
        $('#modal-login').addClass('active');
    })

    $('.redirect-login').click(function(e){
        e.preventDefault();
        window.location.href= '/login';
    })
</script>

<?= $this->include('swevel/course/footer-course'); ?>
<?= $this->endSection(); ?>