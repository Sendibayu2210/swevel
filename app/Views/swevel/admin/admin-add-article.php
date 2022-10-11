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

    <form action="save-artikel" method="post" enctype="multipart/form-data">
        <?= csrf_field(); ?>
        <div class="h5 mt-4 mb-4"><?= ($category == 'add') ? 'Add Article' : 'Edit Article'; ?></div>
        <div class="row">
            <div class="col-lg-8">
                <div class="mb-4">
                    <input class="form-control form-control-lg border-0 input-title <?= ($validation->hasError('judul')) ? 'is-invalid' : ''; ?>" name="judul" type="text" placeholder="<?= ($category == 'add') ? 'add title article here ..' : ''; ?>" value="<?= old('judul'); ?>">
                    <div class="invalid-feedback"><?= $validation->getError('judul'); ?></div>
                </div>
                <!-- <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label"></label>
                    <textarea name="description-article" class="form-control border-0 input-textarea" id="exampleFormControlTextarea1" placeholder="<?= ($category == 'add') ? 'add description article here ..' : ''; ?>" rows="5"></textarea>
                </div> -->
                <div class="mb-4">
                    <textarea class="form-control border-0 p-4 <?= ($validation->hasError('deskripsi')) ? 'is-invalid' : ''; ?>" name="deskripsi" id="content-article" placeholder="<?= ($category == 'add') ? 'write article here ...' : ''; ?>"><?= old('deskripsi'); ?></textarea>
                    <div class="invalid-feedback"><?= $validation->getError("deskripsi"); ?></div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card mb-4 border-0">
                    <div class="card-body">
                        <div>select category article</div>
                        <select name="kategori" class="form-select border-0 bg-light mt-3 <?= ($validation->hasError('kategori')) ? 'is-invalid' : ''; ?>">
                            <option value="">Open this select category</option>
                            <option value="popular" <?= (old('kategori') == 'popular') ? 'selected' : ''; ?>>popular article</option>
                            <option value="two" <?= (old('kategori') == 'two') ? 'selected' : ''; ?>>Two</option>
                            <option value="three" <?= (old('kategori') == 'three') ? 'selected' : ''; ?>>Three</option>
                        </select>
                        <div class="invalid-feedback"><?= $validation->getError('kategori'); ?></div>
                    </div>
                </div>
                <div class="card border-0 mb-4">
                    <div class="card-body">
                        <div>add files</div>
                        <div class="mb-3 mt-3">
                            <input class="form-control form-control-sm <?= ($validation->hasError('berkas')) ? 'is-invalid' : ''; ?>" name="berkas" id="formFileSm" type="file" value="<?= old('berkas'); ?>">
                            <div class="invalid-feedback"><?= $validation->getError('berkas'); ?></div>
                        </div>
                        <div class="card card-image-preview hide border-0">
                            <div class="card-body text-center">
                                <div class="text-center mb-3">Image Preview</div>
                                <img src="" alt="" class="img-thumbnail img-preview">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card border-0 ">
                    <div class="card-body">
                        <div>publish date</div>
                        <div class="mb-3 mt-3">
                            <input type="date" name="tanggal" class="form-control <?= ($validation->hasError('tanggal')) ? 'is-invalid' : ''; ?>" value="<?= old('tanggal'); ?>">
                            <div class="invalid-feedback"><?= $validation->getError('tanggal'); ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <button type="submit" class="btn btn-purple text-center w-100 mt-5 mb-5">Publish</button>
        </div>
    </form>
</div>


<script>
    $(document).ready(function() {
        $('.toast').toast('show');
    })
    ClassicEditor
        .create(document.querySelector('#content-article'))
        .catch(error => {
            console.error(error);
        });
</script>

<?= $this->endSection(); ?>