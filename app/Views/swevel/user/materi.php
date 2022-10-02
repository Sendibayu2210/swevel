<?= $this->extend('layout/user-template'); ?>
<?= $this->section('content'); ?>
<?php if ($materi != '') : ?>
    <div class="container">
        <div class="h4 mb-5 fw-bold">How to start being an Android Developer</div>
        <div class="d-flex justify-content-center">
            <iframe width="640" height="360" src="https://www.youtube.com/embed/2PkWBWhHiwE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="text-end mt-3 mb-4">
            <a href="#" class="text-purple me-5">Download Materi</a>
        </div>

        <div>
            <div class="fw-bold mb-4"><?= $materi['sub_bab']; ?></div>
            <div>
                <?= $materi['konten_materi']; ?>
            </div>

            <div class="text-end mt-5 mb-5 pb-5 col-lg-11">
                <a href="#" class="btn btn-outline-purple w-150px me-2 text-purple text-decoration-none">Preview</a>
                <a href="#" class="btn btn-purple w-150px text-decoration-none">Next</a>
            </div>
        </div>
    </div>
<?php endif; ?>

<?= $this->endSection(); ?>