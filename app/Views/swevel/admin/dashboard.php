<?= $this->extend('swevel/admin/admin-template'); ?>
<?= $this->section('content'); ?>

<div id="dashboard">
    <div class="container">
        <div class="menu">
            <div class="row">
                <div class="col-lg-3">
                    <a href="/profile" class="text-decoration-none">
                        <div class="card border-start-purple">
                            <div class="card-body text-dark">
                                <div class="h5 text-center my-auto">Profile</div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>