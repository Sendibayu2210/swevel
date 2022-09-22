<?= $this->extend('swevel/admin/admin-template'); ?>
<?= $this->section('content'); ?>

<section id="">
    <div class="alert alert-light">
        <div class="d-flex justify-content-center">
            <a href="#" class="text-decoration-none mx-3 border-bottom-purple">Saved Course</a>
            <a href="#" class="text-decoration-none mx-3">on Going course</a>
            <a href="#" class="text-decoration-none mx-3">Done</a>
        </div>
    </div>


    <div class="container">
        <div class="mt-5">
            <?php for ($i = 0; $i < 5; $i++) : ?>
                <div class="card border-0 mb-4">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-2 text-center">
                                <img src="/img/Frame 58.png" alt="" style="width: 80px;">
                            </div>
                            <div class="col-lg-7">
                                <div class="fw-bold mb-3">Pemrograman dengan Kotlin</div>
                                <div class="small text-muted">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora optio voluptates consequuntur non voluptatem quaerat at harum molestiae illo enim?</div>
                            </div>
                            <div class="col-lg-3">
                                <div class="text-end">
                                    <button class="bg-transparent border-0"><i class="fa-solid fa-bookmark h5"></i></button>
                                    <button class="bg-transparent border-0"><i class="fa-solid fa-ellipsis-vertical h5"></i></button>
                                </div>
                                <div class="text-end pt-4">
                                    <a href="#" class="text-decoration-none btn btn-sm btn-purple-100">View course</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endfor; ?>
        </div>
    </div>
</section>





<?= $this->endSection(); ?>