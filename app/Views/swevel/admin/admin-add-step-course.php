<?= $this->extend('swevel/admin/admin-template'); ?>
<?= $this->section('content'); ?>

<div class="container">
    <div class="mb-5 mt-3">
        <div class="h3">Tambah Step Course</div>
    </div>
    <div class="col-lg-10">
        <form action="/save-step-course" method="post">
            <?= csrf_field(); ?>
            <input type="hidden" name="id" id="" value="<?= $course['id']; ?>">
            <input type="hidden" name="slug" id="" value="<?= $course['slug_course']; ?>">

            <div class="row mb-4">
                <label for="step" class="col-sm-2 col-lg-2 col-md-2 col-form-label">Step</label>
                <div class="col-lg-10">
                    <select class="form-select" size="3" id="step" name="step">
                        <?php foreach ($step_course as $x) : ?>
                            <option value="<?= $x['step']; ?>" disabled><?= $x['step']; ?></option>
                        <?php endforeach; ?>
                        <option value="<?= $count_step; ?>" selected><?= $count_step; ?></option>

                    </select>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control <?= ($validation->hasError('judul')) ? 'is-invalid' : ''; ?>" name="judul" id="judul" value="<?= old('judul'); ?>">
                    <div class="invalid-feedback"><?= $validation->getError('judul'); ?></div>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                <div class="col-sm-10">
                    <textarea class="form-control <?= ($validation->hasError('deskripsi')) ? 'is-invalid' : ''; ?>" name="deskripsi" id="deskripsi" rows="3"><?= old('deskripsi'); ?></textarea>
                    <div class="invalid-feedback"><?= $validation->getError('deskripsi'); ?></div>
                </div>
            </div>
            <div class="row mb-4">
                <label for="level" class="col-sm-2 col-lg-2 col-md-2 col-form-label">Level</label>
                <div class="col-lg-10">
                    <select class="form-select <?= ($validation->hasError('level')) ? 'is-invalid' : ''; ?>" name="level" size="3" id="level">
                        <option value="basic" <?= (old('level') == 'basic') ? 'selected' : ''; ?>>Basic</option>
                        <option value="intermediate" <?= (old('level') == 'intermediate') ? 'selected' : ''; ?>>Intermediate</option>
                        <option value="profesional" <?= (old('level') == 'profesional') ? 'selected' : ''; ?>>Profesional</option>
                    </select>
                    <div class="invalid-feedback"><?= $validation->getError('level'); ?></div>
                </div>
            </div>
            <div class="mb-3 mt-4 row">
                <label for="jam" class="col-sm-2 col-form-label">Total Jam</label>
                <div class="col-sm-10 col-md-3 col-lg-3">
                    <input type="number" class="form-control me-3 <?= ($validation->hasError('jam')) ? 'is-invalid' : ''; ?>" name="jam" id="jam" value="<?= old('jam'); ?>">
                    <div class="invalid-feedback"><?= $validation->getError('jam'); ?></div>
                </div>
            </div>

            <div class="my-5">
                <button type="submit" class="btn btn-purple w-100">Simpan</button>
            </div>
        </form>
    </div>


</div>

<script>
    ClassicEditor
        .create(document.querySelector('#deskripsi'))
        .catch(error => {
            console.error(error);
        });
</script>

<?= $this->endSection(); ?>