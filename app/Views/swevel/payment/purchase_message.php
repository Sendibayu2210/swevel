<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<?= $this->include('swevel/navbar'); ?>


    <div class="container">
        <div class="card border-0 shadow mt-5 p-4 br-20">
            <div class="card-body">
                <?php if(session()->getFlashdata('message')) : ?>
                    <?= session()->getFlashdata('message'); ?>
                <?php else: ?>
                    <div class="text-center"><a href="/course" class="btn btn-purple br-20">Kembali ke course</a></div>
                <?php endif; ?>
            </div>
        </div>
    </div>

<?= $this->endSection(); ?>