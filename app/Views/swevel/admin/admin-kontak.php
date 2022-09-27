<?= $this->extend('swevel/admin/admin-template'); ?>
<?= $this->section('content'); ?>

<?php if (session()->getFlashdata('message')) : ?>
    <div class="toast-container position-fixed top-0 end-0 p-3">
        <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header bg-white">Success</div>
            <div class="toast-body bg-light"><?= session()->getFlashdata('message'); ?></div>
        </div>
    </div>
<?php endif; ?>

<div id="admin-kontak" class="mb-5 pb-5">
    <div class="container">
        <div class="d-flex justify-content-between mb-5">
            <button type="button" class="btn btn-purple btn-sm">Tambah Kontak</button>
            <div class="h3 text-center text-purple fw-bold my-auto">Kontak</div>
        </div>
        <div class="mt-5 mb-5 card-add-kontak">
            <form action="/add-kontak" method="post">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="radio" name="kontak" id="whatsapp" data-name="whatsapp" value='<i class="fa-brands fa-whatsapp"></i>'>
                                    <label class="form-check-label" for="whatsapp">
                                        <span class="me-2">
                                            <i class="fa-brands fa-whatsapp"></i>
                                        </span><span class="text-capitalize">whatsapp</span>
                                    </label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="radio" name="kontak" id="phone" data-name="phone" value='<i class="fa-solid fa-phone"></i>'>
                                    <label class="form-check-label" for="phone">
                                        <span class="me-2">
                                            <i class="fa-solid fa-phone"></i>
                                        </span><span class="text-capitalize">phone</span>
                                    </label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="radio" name="kontak" id="instagram" data-name="instagram" value='<i class="fa-brands fa-instagram"></i>'>
                                    <label class="form-check-label" for="instagram">
                                        <span class="me-2">
                                            <i class="fa-brands fa-instagram"></i>
                                        </span><span class="text-capitalize">instagram</span>
                                    </label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="radio" name="kontak" id="linkedin" data-name="linkedin" value='<i class="fa-brands fa-linkedin"></i>'>
                                    <label class="form-check-label" for="linkedin">
                                        <span class="me-2">
                                            <i class="fa-brands fa-linkedin"></i>
                                        </span><span class="text-capitalize">linkedin</span>
                                    </label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="radio" name="kontak" id="twitter" data-name="twitter" value='<i class="fa-brands fa-twitter"></i>'>
                                    <label class="form-check-label" for="twitter">
                                        <span class="me-2">
                                            <i class="fa-brands fa-twitter"></i>
                                        </span><span class="text-capitalize">twitter</span>
                                    </label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="radio" name="kontak" id="telegram" data-name="telegram" value='<i class="fa-brands fa-telegram"></i>'>
                                    <label class="form-check-label" for="telegram">
                                        <span class="me-2">
                                            <i class="fa-brands fa-telegram"></i>
                                        </span><span class="text-capitalize">telegram</span>
                                    </label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="radio" name="kontak" id="facebook" data-name="facebook" value='<i class="fa-brands fa-facebook"></i>'>
                                    <label class="form-check-label" for="facebook">
                                        <span class="me-2">
                                            <i class="fa-brands fa-facebook"></i>
                                        </span><span class="text-capitalize">facebook</span>
                                    </label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="radio" name="kontak" id="tiktok" data-name="tiktok" value='<i class="fa-brands fa-tiktok"></i>'>
                                    <label class="form-check-label" for="tiktok">
                                        <span class="me-2">
                                            <i class="fa-brands fa-tiktok"></i>
                                        </span><span class="text-capitalize">tiktok</span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <label for="exampleFormControlInput1" class="form-label">Add number or link for <span id="name-kontak"></span></label>
                                <input type="text" class="form-control <?= ($validation->hasError('number_link')) ? 'is-invalid' : ''; ?>" name="number_link" placeholder="add number or link">
                                <div class="invalid-feedback"><?= $validation->getError('number_link'); ?></div>
                                <div class="invalid-feedback"><?= $validation->getError('kontak'); ?></div>
                                <div class="mt-5 text-end">
                                    <input type="hidden" name="category_save" id="category_save">
                                    <button type="submit" class="btn btn-sm btn-purple btn-publish-display">publish and display</button>
                                    <button type="submit" class="btn btn-sm btn-purple btn-only-save">only save</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div>
            <div class="h5 mb-5">List kontak yang tertampil</div>
            <div class="row">
                <?php foreach ($kontak_show as $x) : ?>
                    <div class="col-lg-3">
                        <a href="<?= $x['description']; ?>" target="_blank" class="text-decoration-none">
                            <div class="card card-kontak mb-3">
                                <div class="card-body text-center">
                                    <div><?= $x['name']; ?></div>
                                    <div class="h2 my-2"><?= $x['icon']; ?></div>
                                    <div class="small"><?= $x['description']; ?></div>
                                </div>
                                <div class="card-footer d-none">
                                    <div class="d-flex justify-content-center">
                                        <a href="/edit-kontak/<?= $x['id']; ?>" class="btn btn-sm btn-purple me-3">Edit</a>
                                        <form action="/delete-kontak/<?= $x['id']; ?>" method="post">
                                            <?= csrf_field(); ?>
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button type="submit" class="btn btn-sm btn-purple">Delete</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="h5 mb-5">List kontak yang tersimpan</div>
            <div class="row">
                <?php foreach ($kontak_all as $x) : ?>
                    <div class="col-lg-3">
                        <a href="<?= $x['description']; ?>" target="_blank" class="text-decoration-none">
                            <div class="card card-kontak mb-3">
                                <div class="card-body text-center">
                                    <div><?= $x['name']; ?></div>
                                    <div class="h2 my-2"><?= $x['icon']; ?></div>
                                    <div class="small"><?= $x['description']; ?></div>
                                </div>
                                <div class="card-footer d-none">
                                    <div class="d-flex justify-content-center">
                                        <a href="/edit-kontak/<?= $x['id']; ?>" class="btn btn-sm btn-purple me-3">Edit</a>
                                        <form action="/delete-kontak/<?= $x['id']; ?>" method="post">
                                            <?= csrf_field(); ?>
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button type="submit" class="btn btn-sm btn-purple">Delete</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('.card-kontak').hover(function() {
            $(this).find('.card-footer').removeClass('d-none');
        })
        $('.card-kontak').mouseleave(function() {
            $(this).find('.card-footer').addClass('d-none');
        })
        $('.btn-publish-display').click(function() {
            $('#category_save').val('publish_display');
        })
        $('.btn-only-save').click(function() {
            $('#category_save').val('only_save');
        })
        $('input[type=radio][name=kontak]').change(function() {
            let getName = $(this).data('name');
            $('#name-kontak').html(getName);
        })
        $('.toast').toast('show');
    })
</script>


<?= $this->endSection(); ?>