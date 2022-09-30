<?= $this->extend('swevel/admin/admin-template'); ?>
<?= $this->section('content'); ?>

<div class="container">
    <!-- <?php if (session()->getFlashdata('message')) : ?>
        <div class="alert alert-success my-4">
            <?= session()->getFlashdata('message'); ?>
        </div>
    <?php endif; ?> -->
    <form action="/update-milestone/<?= $milestone['id_milestone']; ?>" method="post" enctype="multipart/form-data">
        <?= csrf_field(); ?>
        <input type="hidden" name="_method" value="UPDATE">
        <div class="h5 mt-4 mb-4">Edit Milestone</div>
        <div class="row">
            <div class="col-lg-8">
                <div class="">
                    <input name="year" class="form-control form-control-lg <?= ($validation->hasError('year')) ? 'is-invalid' : ''; ?> border-0 input-title" type="number" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==4) return false;" placeholder="Year" value="<?= (old('year')) ?  old('year') : $milestone['year']; ?>">
                    <div id="validationServerUsernameFeedback" class="invalid-feedback">
                        <?= $validation->getError('year'); ?>
                    </div>
                </div>
                <div class=" mt-4">
                    <label for="description" class="mb-2">Description</label>
                    <textarea name="description" class="form-control border-0  <?= ($validation->hasError('description')) ? 'is-invalid' : ''; ?> shadow" id="description" placeholder=""><?= (old('description')) ?  old('description') : $milestone['description']; ?></textarea>
                    <div id="validationServerUsernameFeedback" class="invalid-feedback">
                        <?= $validation->getError('description'); ?>
                    </div>
                </div>
                <div class="mt-4">
                    <div class="row">
                        <div class="col-8">
                            <label for="formFile" class="form-label">Choose image here</label>
                            <input type="hidden" name="file_old" value="<?= $milestone['image']; ?>">
                            <input class="form-control  <?= ($validation->hasError('berkas')) ? 'is-invalid' : ''; ?>" type="file" id="fileMilestone" name="berkas" onchange="imgPreview()">
                            <div class="small file-name">File name : <?= $milestone['image']; ?></div>
                            <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                <?= $validation->getError('berkas'); ?>
                            </div>
                        </div>
                        <div class="col-4">
                            <label for="" class="d-block">Image Preview</label>
                            <img src="/img/milestone/<?= $milestone['image']; ?>" alt="" class="img-thumbnail img-preview" style="width:150px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <button type="submit" class="btn btn-purple text-center w-25 mt-5 mb-5">Publish</button>
        </div>
    </form>
</div>


<script>
    function imgPreview() {
        let sampul = document.querySelector('#fileMilestone');
        let imgPreview = document.querySelector('.img-preview');

        document.querySelector('.file-name').classList.add('hide');

        const fileSampul = new FileReader();
        fileSampul.readAsDataURL(sampul.files[0]);
        fileSampul.onload = function(e) {
            imgPreview.src = e.target.result;
        }
    }
    ClassicEditor
        .create(document.querySelector('#description'))
        .catch(error => {
            console.error(error);
        });
</script>

<?= $this->endSection(); ?>