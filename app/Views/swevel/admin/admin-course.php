<?= $this->extend('swevel/admin/admin-template'); ?>
<?= $this->section('content'); ?>

<div id="admin-course">
    <div class="container">
        <div class="mb-5">
            <a href="/add-course" class="btn btn-purple btn-sm">Tambah course</a>
        </div>
        <div class="h4 fw-bold">Daftar Course</div>
        <div class="mt-5">
            <?php foreach ($course as $x) : ?>
                <div class="card border-0 mb-4">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-2 text-center">
                                <img src="/img/course/<?= $x['gambar']; ?>" alt="" style="width: 80px;">
                            </div>
                            <div class="col-lg-7">
                                <div class="fw-bold mb-3"><?= $x['nama_course']; ?></div>
                                <div class="small text-muted"><?= substr($x['deskripsi'], 0, 100); ?></div>
                            </div>
                            <div class="col-lg-3">
                                <div class="text-end">
                                    <!-- <button class="bg-transparent border-0"><i class="fa-solid fa-bookmark h5"></i></button> -->
                                    <button class="bg-transparent border-0"><i class="fa-solid fa-ellipsis-vertical h5"></i></button>
                                </div>
                                <div class="text-end pt-4">
                                    <a href="/admin-course/<?= $x['slug_course']; ?>" class="text-decoration-none btn btn-sm btn-purple-100">View course</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>


<?= $this->endSection(); ?>