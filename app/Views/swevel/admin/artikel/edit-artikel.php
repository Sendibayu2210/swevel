<?= $this->extend('swevel/admin/admin-template'); ?>
<?= $this->section('content'); ?>

<div class="container">
    <?php if (session()->getFlashdata('message')) : ?>
        <div class="toast-container position-fixed top-0 end-0 p-3">
            <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header bg-white"><?= session()->getFlashdata('message1'); ?></div>
                <div class="toast-body bg-light"><?= session()->getFlashdata('message'); ?></div>
            </div>
        </div>
    <?php endif; ?>

    <form action="/update-artikel/<?= $artikel['id']; ?>" method="post" enctype="multipart/form-data">
        <?= csrf_field(); ?>
        <div class="h5 mt-4 mb-4">Edit Artikel</div>
        <div class="row">
            <div class="col-lg-8">
                <div class="mb-4">
                    <label for="" class="mb-3">Judul</label>
                    <input class="form-control form-control-lg border-0 input-title <?= ($validation->hasError('judul')) ? 'is-invalid' : ''; ?>" name="judul" type="text" value="<?= (old('judul')) ? old('judul') : $artikel['judul']; ?>">
                    <div class="invalid-feedback"><?= $validation->getError('judul'); ?></div>
                </div>
                <div class="mb-4">
                    <label for="" class="mb-3">Isi Artikel</label>
                    <textarea class="form-control border-0 p-4 <?= ($validation->hasError('isi_artikel')) ? 'is-invalid' : ''; ?>" name="isi_artikel" id="content-article"><?= old('isi_artikel'); ?><?= (old('isi_artikel')) ? old('isi_artikel') : $artikel['isi_artikel']; ?></textarea>
                    <div class="invalid-feedback"><?= $validation->getError("isi_artikel"); ?></div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card border-0 mb-4">
                    <div class="card-body">
                        <div>Gambar</div>
                        <div class="mb-3 mt-3">
                            <input type="hidden" name="file_lama" value="<?= $artikel['poster']; ?>" readonly>
                            <input class="form-control form-control-sm <?= ($validation->hasError('berkas')) ? 'is-invalid' : ''; ?>" name="berkas" id="fileArtikel" onchange="imgPreview()" type="file" value="<?= old('berkas'); ?>">
                            <div class="invalid-feedback"><?= $validation->getError('berkas'); ?></div>
                        </div>
                        <div class="card card-image-preview border-0">
                            <div class="card-body text-center">
                                <div class="text-center mb-3">Image Preview</div>
                                <img src="/img/artikel/<?= $artikel['poster']; ?>" alt="" class="img-thumbnail img-preview">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <button type="submit" class="btn btn-purple text-center w-100 mt-5 mb-5">Update</button>
        </div>
    </form>
</div>


<script>
    $(document).ready(function() {
        $('.toast').toast('show');

    })

    function imgPreview() {
        let sampul = document.querySelector('#fileArtikel');
        let imgPreview = document.querySelector('.img-preview');

        const fileSampul = new FileReader();
        fileSampul.readAsDataURL(sampul.files[0]);
        fileSampul.onload = function(e) {
            imgPreview.src = e.target.result;
        }
    }
    ClassicEditor
        .create(document.querySelector('#content-article'))
        .catch(error => {
            console.error(error);
        });
</script>

<?= $this->endSection(); ?>