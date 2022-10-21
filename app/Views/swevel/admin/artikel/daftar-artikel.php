<?= $this->extend('swevel/admin/admin-template') ?>
<?= $this->section('content') ?>

<?php if (session()->getFlashdata('message')) : ?>
    <div class="toast-container position-fixed top-0 end-0 p-3">
        <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header bg-white"><?= session()->getFlashdata('message1'); ?></div>
            <div class="toast-body bg-light"><?= session()->getFlashdata('message'); ?></div>
        </div>
    </div>
<?php endif; ?>
<div class="main-content">
    <div class="container">

        <div class="d-flex mb-5 justify-content-between">
            <a href="/artikel/tambah" class="btn btn-purple">Tambah</a>
            <div class="fw-bold text-purple my-auto h3">Artikel</div>
        </div>

        <div class="row">
            <?php foreach ($artikel as $x) : ?>
                <div class="col-lg-4 col-md-6 col-12 mb-4">
                    <div class="card">
                        <img src="/img/artikel/<?= $x['poster']; ?>" class="card-img-top" alt="">
                        <div class="card-body">
                            <p class="card-text"><?= $x['judul']; ?></p>
                        </div>
                        <div class="card-footer">
                            <div class="d-flex">
                                <a href="/artikel-edit/<?= $x['slug'] ?>" class="me-3 text-purple"><i class="fa fa-solid fa-file-pen"></i> Edit</a>
                                <div class="text-purple cursor-pointer btn-hapus-artikel" data-id="<?= $x['id']; ?>" data-bs-toggle="modal" data-bs-target="#delete-artikel"><i class="fa-solid fa-trash"></i> Hapus</div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>


<!-- Modal Confirm Delete -->
<div class="modal fade" id="delete-artikel" tabindex="-1" aria-labelledby="delete-artikelLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Konfirmasi</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="/hapus-artikel" method="post">
                <div class="modal-body">
                    <div class="text-center">
                        <div class="h4">Are you sure ? </div>
                        <div>You won't be able to revert this!</div>
                    </div>
                    <?= csrf_field(); ?>
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="hidden" readonly name="id" id="id_artikel">
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-sm btn-purple">Hapus</button>
                    <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Tutup</button>
                </div>
            </form>
        </div>
    </div>
</div>


<script>
    $(document).ready(function() {

        $('.btn-hapus-artikel').click(function() {
            let getId = $(this).data('id');
            $('#id_artikel').val(getId);
        })

    })
</script>





<?= $this->endSection() ?>