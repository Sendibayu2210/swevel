<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<?= $this->include('swevel/navbar'); ?>


<div class="container">
    <div class="card mt-5 border-0 shadow br-20">
        <div class="card-body p-5">
            <div class="text-center">
                <div class="mb-5"><i class="fa-solid fa-clock text-purple"></i></div>
                <div class="mb-5 h4">
                    <?php if(session()->getFlashdata('message')) : ?>
                        <?=session()->getFlashdata('message'); ?>                
                    <?php endif; ?>
                </div>
                <a href="/dashboard" class="btn btn-purple br-20">Kembali ke dashboard</a>
            </div>
        </div>
    </div>
</div>


<?= $this->endSection(); ?>