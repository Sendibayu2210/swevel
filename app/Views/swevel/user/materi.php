<?= $this->extend('layout/template-materi'); ?>
<?= $this->section('content'); ?>

<div class="container">
    <div id="message-materi"></div>

    <div id="materi">
        <input type="hidden" readonly name="" id="course" value="<?= $course; ?>">
        <input type="hidden" readonly id="category" value="<?= $category; ?>">
        <div class="h4 mb-5 fw-bold title"></div>
        <div class="d-flex justify-content-center loader">
            <img src="/img/loaderpurple2.gif" alt="">
        </div>
        <div class="d-flex justify-content-center">
            <iframe width="640" height="360" class="video1" src="" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="text-end mt-3 mb-4">
            <a href="#" class="text-purple me-5">Download Materi</a>
        </div>
        <div>
            <div class="fw-bold mb-4 judul-materi"></div>
            <div class="penjelasan-materi"></div>

            <div class="text-end mt-5 mb-5 pb-5 col-lg-11">
                <a href="#" class="btn btn-outline-purple w-150px me-2 text-purple text-decoration-none">Preview</a>
                <a href="#" class="btn btn-purple w-150px text-decoration-none">Next</a>
            </div>
        </div>
    </div>
</div>

<script src="/js/materi.js"></script>

<?= $this->endSection(); ?>