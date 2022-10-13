<?= $this->extend('swevel/admin/admin-template'); ?>
<?= $this->section('content'); ?>

<?php if (session()->getFlashdata('message')) : ?>
    <div class="toast-container position-fixed top-0 end-0 p-3">
        <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header bg-white"><?= session()->getFlashdata('message1'); ?></div>
            <div class="toast-body bg-light"><?= session()->getFlashdata('message'); ?></div>
        </div>
    </div>
<?php endif; ?>

<div id="admin-kontak" class="mb-5 pb-">
    <div class="container">
        <div class="d-flex justify-content-between mb-3">
            <!-- <button type="button" class="btn btn-purple btn-sm">Tambah Kontak</button> -->
            <div class="h3 text-center text-purple fw-bold my-auto">Kontak</div>
        </div>
        <div class=" mb-5 card-add-kontak">
            <form action="/add-kontak" method="post">
                <div class="card">
                    <div class="card-header bg-purple-50 border-0">
                        <div class="fw-bold py-1">Tambah Kontak</div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-check mb-2">
                                    <input class="form-check-input <?= ($validation->hasError('kontak')) ? 'is-invalid' : ''; ?>" type="radio" name="kontak" id="phone" data-name="phone" value='phone'>
                                    <label class="form-check-label" for="phone">
                                        <span class="me-2">
                                            <i class="fa-solid fa-phone"></i>
                                        </span><span class="text-capitalize">phone</span>
                                    </label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input <?= ($validation->hasError('kontak')) ? 'is-invalid' : ''; ?>" type="radio" name="kontak" id="whatsapp" data-name="whatsapp" value='whatsapp'>
                                    <label class="form-check-label" for="whatsapp">
                                        <span class="me-2">
                                            <i class="fa-brands fa-whatsapp"></i>
                                        </span><span class="text-capitalize">whatsapp</span>
                                    </label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input <?= ($validation->hasError('kontak')) ? 'is-invalid' : ''; ?>" type="radio" name="kontak" id="email" data-name="email" value='envelope'>
                                    <label class="form-check-label" for="email">
                                        <span class="me-2">
                                            <i class="fa-solid fa-envelope"></i>
                                        </span><span class="text-capitalize">email</span>
                                    </label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input <?= ($validation->hasError('kontak')) ? 'is-invalid' : ''; ?>" type="radio" name="kontak" id="instagram" data-name="instagram" value='instagram'>
                                    <label class="form-check-label" for="instagram">
                                        <span class="me-2">
                                            <i class="fa-brands fa-instagram"></i>
                                        </span><span class="text-capitalize">instagram</span>
                                    </label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input <?= ($validation->hasError('kontak')) ? 'is-invalid' : ''; ?>" type="radio" name="kontak" id="linkedin" data-name="linkedin" value='linkedin'>
                                    <label class="form-check-label" for="linkedin">
                                        <span class="me-2">
                                            <i class="fa-brands fa-linkedin"></i>
                                        </span><span class="text-capitalize">linkedin</span>
                                    </label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input <?= ($validation->hasError('kontak')) ? 'is-invalid' : ''; ?>" type="radio" name="kontak" id="twitter" data-name="twitter" value='twitter'>
                                    <label class="form-check-label" for="twitter">
                                        <span class="me-2">
                                            <i class="fa-brands fa-twitter"></i>
                                        </span><span class="text-capitalize">twitter</span>
                                    </label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input <?= ($validation->hasError('kontak')) ? 'is-invalid' : ''; ?>" type="radio" name="kontak" id="telegram" data-name="telegram" value='telegram'>
                                    <label class="form-check-label" for="telegram">
                                        <span class="me-2">
                                            <i class="fa-brands fa-telegram"></i>
                                        </span><span class="text-capitalize">telegram</span>
                                    </label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input <?= ($validation->hasError('kontak')) ? 'is-invalid' : ''; ?>" type="radio" name="kontak" id="facebook" data-name="facebook" value='facebook'>
                                    <label class="form-check-label" for="facebook">
                                        <span class="me-2">
                                            <i class="fa-brands fa-facebook"></i>
                                        </span><span class="text-capitalize">facebook</span>
                                    </label>
                                </div>
                                <div class="invalid-feedback"><?= $validation->getError('kontak'); ?></div>
                            </div>
                            <div class="col-lg-8">
                                <label for="exampleFormControlInput1" class="form-label">Add number or link for <span id="name-kontak"></span></label>
                                <input type="text" class="form-control <?= ($validation->hasError('number_link')) ? 'is-invalid' : ''; ?>" name="number_link" placeholder="add number or link" value="<?= old('number_link'); ?>">
                                <div class="invalid-feedback"><?= $validation->getError('number_link'); ?></div>
                                <div class="mt-5 text-end">
                                    <button type="submit" class="btn btn-sm btn-purple w-50">publish</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div>
            <div class="h5 mb-5">Kontak yang tersimpan</div>
            <div class="row">
                <?php foreach ($kontak_all as $x) : ?>
                    <div class="col-lg-3">
                        <div class="card card-kontak mb-3">
                            <a href="<?= $x['description']; ?>" target="_blank" class="text-decoration-none">
                                <div class="card-body text-center">
                                    <div><?= $x['name']; ?></div>
                                    <div class="h2 my-2"><?= $x['icon']; ?></div>
                                    <div class="small"><?= $x['description']; ?></div>
                                </div>
                            </a>
                            <div class="card-footer d-none">
                                <div class="d-flex justify-content-center">
                                    <button class="btn btn-sm btn-purple btn-edit-kontak me-2" data-bs-toggle="modal" data-bs-target="#modalEditKontak" data-id="<?= $x['id']; ?>" data-link="<?= $x['description']; ?>">Edit</button>
                                    <button class="btn btn-sm btn-purple btn-delete-kontak" data-bs-toggle="modal" data-bs-target="#modalDeleteKontak" data-id="<?= $x['id']; ?>">Delete</button>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>



<!-- Modal Confirm Delete -->
<div class="modal fade" id="modalDeleteKontak" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Confirm</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="/delete-kontak" method="post">
                <div class="modal-body">
                    <div class="text-center">
                        <div class="h4">Are you sure ? </div>
                        <div>You won't be able to revert this!</div>
                    </div>
                    <?= csrf_field(); ?>
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="hidden" name="idKontak" id="idKontak">
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-sm btn-purple">Delete</button>
                    <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Modal Edit Kontak -->
<div class="modal fade" id="modalEditKontak" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Kontak</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="/update-kontak" method="post">
                <div class="modal-body">
                    <?= csrf_field(); ?>
                    <input type="hidden" name="edit_id_kontak" id="edit_id_kontak">
                    <label for="">Number or Link</label>
                    <input type="text" class="form-control" name="edit_number_link" id="edit_number_link">
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-sm btn-purple">Update</button>
                    <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </form>
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
        $('input[type=radio][name=kontak]').change(function() {
            let getName = $(this).data('name');
            $('#name-kontak').html(getName);
        })
        $('.btn-delete-kontak').click(function() {
            let id = $(this).data('id');
            $("#idKontak").val(id);
        })
        $('.btn-edit-kontak').click(function() {
            let id = $(this).data('id');
            let link = $(this).data('link');
            $('#edit_id_kontak').val(id);
            $('#edit_number_link').val(link);
        })
        $('.toast').toast('show');
    })
</script>


<?= $this->endSection(); ?>