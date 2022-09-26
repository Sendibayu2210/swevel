<?= $this->extend('swevel/admin/admin-template'); ?>
<?= $this->section('content'); ?>
<div id="profile">
    <div class="container">
        <?php if (session()->getFlashdata('message')) : ?>
            <div class="alert alert-success my-4">
                <?= session()->getFlashdata('message'); ?>
            </div>
        <?php endif; ?>

        <div class="accordion" id="accordionExample">
            <?php foreach ($profile as $x) : ?>
                <div class="accordion-item homepage mb-3">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button bg-white text-dark collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#<?= $x['category']; ?>" aria-expanded="true" aria-controls="<?= $x['category']; ?>">
                            <div class=" p-2">
                                <h5><strong><?= $x['title']; ?></strong></h5>
                                <p class="text-muted mt-2">PT. Swevel Universal Media</p>
                            </div>
                        </button>
                    </h2>
                    <div id="<?= $x['category']; ?>" class="accordion-collapse collapse " aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body border-top">
                            <p><?= $x['description']; ?></p>

                            <div class="d-flex border-top mt-5">
                                <a href="/profile/<?= $x['id']; ?>" class="btn btn-purple btn-sm me-2 w-25 mt-3">Edit</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

    </div>
</div>
<?= $this->endSection(); ?>