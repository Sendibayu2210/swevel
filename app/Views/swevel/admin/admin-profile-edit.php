<?= $this->extend('swevel/admin/admin-template'); ?>
<?= $this->section('content'); ?>

<div class="container">
    <form action="/update-profile/<?= $profile['id']; ?>" method="post">
        <?= csrf_field(); ?>
        <input type="hidden" name="_method" value="UPDATE">
        <div class="h5 mt-4 mb-4">Edit <?= $profile['title']; ?></div>
        <div class="row">
            <div class="col-lg-8">
                <div class="">
                    <input name="title" class="form-control form-control-lg border-0 input-title" type="text" value="<?= $profile['title']; ?>">
                </div>
                <div class=" mt-4">
                    <textarea name="description" class="form-control border-0 is-valid shadow" id="description-profile" placeholder=""><?= $profile['description']; ?></textarea>
                    <div id="validationServerUsernameFeedback" class="invalid-feedback">
                        Please add content
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
    ClassicEditor
        .create(document.querySelector('#description-profile'))
        .catch(error => {
            console.error(error);
        });
</script>

<?= $this->endSection(); ?>