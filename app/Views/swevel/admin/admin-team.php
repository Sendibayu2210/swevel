<?= $this->extend('swevel/admin/admin-template'); ?>
<?= $this->section('content'); ?>

<div class="container">
    <?php if (session()->getFlashdata('message')) : ?>
        <div class="toast-container position-fixed top-0 end-0 p-3">
            <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header bg-white"><?= session()->getFlashdata('message1'); ?></div>
                <div class="toast-body bg-light"><?= session()->getFlashdata('message'); ?></div>
                <div class="message2" data-message="<?= session()->getFlashdata('message2'); ?>"></div>
            </div>
        </div>
    <?php endif; ?>

    <div class="d-flex justify-content-between mb-5">
        <button type="button" class="btn btn-purple" data-bs-toggle="modal" data-bs-target="#modalAddTeam">Add Team</button>
        <div class="h4 fw-bold text-purple">Team</div>
    </div>

    <div class="card-group">
        <div class="row">
            <?php foreach ($team as $x) : ?>
                <div class="col-lg-4">
                    <div class="card mb-3">
                        <img src="/img/team/<?= $x['image']; ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?= $x['nama']; ?></h5>
                            <div class="card-text"><?= $x['jabatan']; ?></div>
                            <div class="my-3">Sosial Media</div>
                            <div class="card-text d-flex">
                                <div><a href="<?= $x['linkedin']; ?>" target="_blank"><i class="fa-brands fa-linkedin text-primary me-3 h3"></i></a></div>
                                <div><a href="<?= $x['instagram']; ?>" target="_blank"><i class="fa-brands fa-square-instagram text-danger me-3 h3"></i></a></div>
                                <div><a href="<?= $x['facebook']; ?>" target="_blank"><i class="fa-brands fa-square-facebook text-primary me-3 h3"></i></a></div>
                            </div>
                            <div class="d-flex mt-4">
                                <button class="btn btn-purple btn-sm me-2 btn-update-team" data-bs-toggle="modal" data-bs-target="#modalEditTeam" data-id="<?= $x['id']; ?>" data-nama="<?= $x['nama']; ?>" data-jabatan="<?= $x['jabatan']; ?>" data-gambar="<?= $x['image']; ?>" data-linkedin="<?= $x['linkedin']; ?>" data-instagram="<?= $x['instagram']; ?>" data-facebook="<?= $x['facebook']; ?>">Edit</button>
                                <button class="btn btn-purple btn-sm me-2 btn-delete-team" data-bs-toggle="modal" data-bs-target="#modalDeleteTeam" data-id="<?= $x['id']; ?>" data-image="<?= $x['image']; ?>">Delete</button>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<!-- Modal add team -->
<div class="modal fade" id="modalAddTeam" tabindex="-1" aria-labelledby="modalAddTeamLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="modalAddTeamLabel">Add Team</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="/add-team" method="post" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-4 text-center">
                            <div class="mb-4">Image Preview</div>
                            <img src="" alt="not found image" style="max-width: 200px;" class="img-preview">
                        </div>
                        <div class="col-lg-8">
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama</label>
                                <input type="text" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : '' ?>" name="nama" id="nama" placeholder="nama" value="<?= old('nama'); ?>">
                                <div class="invalid-feedback"><?= $validation->getError('nama'); ?></div>
                            </div>
                            <div class="mb-3">
                                <label for="jabatan" class="form-label">Jabatan</label>
                                <input type="text" class="form-control <?= ($validation->hasError('jabatan')) ? 'is-invalid' : '' ?>" name="jabatan" id="jabatan" placeholder="jabatan" value="<?= old('jabatan'); ?>">
                                <div class="invalid-feedback"><?= $validation->getError('jabatan'); ?></div>
                            </div>
                            <div class="mb-3">
                                <label for="formFileSm" class="form-label">Pilih Gambar</label>
                                <input class="form-control form-control-sm <?= ($validation->hasError('berkas')) ? 'is-invalid' : '' ?>" id="fileTeam" name="berkas" type="file" onchange="imgPreview()" value="<?= old('berkas'); ?>">
                                <div class="invalid-feedback"><?= $validation->getError('berkas'); ?></div>
                            </div>
                            <div class="mb-3 row">
                                <label for="linkedin" class="col-sm-3 col-form-label"><i class="fa-brands fa-linkedin text-primary me-2"></i>Linkedin</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control <?= ($validation->hasError('linkedin')) ? 'is-invalid' : '' ?>" name="linkedin" value="<?= old('linkedin'); ?>">
                                    <div class="invalid-feedback"><?= $validation->getError('linkedin'); ?></div>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="instagram" class="col-sm-3 col-form-label"><i class="fa-brands fa-square-instagram text-danger me-2"></i>Instagram</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control <?= ($validation->hasError('instagram')) ? 'is-invalid' : '' ?>" name="instagram" value="<?= old('instagram'); ?>">
                                    <div class="invalid-feedback"><?= $validation->getError('instagram'); ?></div>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="facebook" class="col-sm-3 col-form-label"><i class="fa-brands fa-square-facebook text-primary me-2"></i>Facebook</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control <?= ($validation->hasError('facebook')) ? 'is-invalid' : '' ?>" name="facebook" value="<?= old('facebook'); ?>">
                                    <div class="invalid-feedback"><?= $validation->getError('facebook'); ?></div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-purple">Save</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Modal Confirm Delete -->
<div class="modal fade" id="modalDeleteTeam" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Confirm</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="/delete-team" method="post">
                <div class="modal-body">
                    <div class="text-center">
                        <div class="h4">Are you sure ? </div>
                        <div>You won't be able to revert this!</div>
                    </div>
                    <?= csrf_field(); ?>
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="hidden" readonly name="idTeam" id="idTeam">
                    <input type="hidden" readonly name="file_old" id="file_old">
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-sm btn-purple">Delete</button>
                    <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Modal Edit Team -->
<div class="modal fade" id="modalEditTeam" tabindex="-1" aria-labelledby="modalEditTeamLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="modalEditTeamLabel">Edit Team</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="/update-team" method="post" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-4 text-center">
                            <div class="mb-4">Image Preview</div>
                            <img src="" alt="not found image" style="max-width: 200px;" class="img-preview edit">
                            <div class="small mt-2" id="nama_gambar"></div>
                        </div>
                        <div class="col-lg-8">
                            <div class="mb-3">
                                <input type="hidden" readonly name="edit_id" id="edit_id">
                                <label for="nama" class="form-label">Nama</label>
                                <input type="text" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : '' ?>" name="nama" id="edit_nama" placeholder="nama" value="<?= old('nama'); ?>">
                                <div class="invalid-feedback"><?= $validation->getError('nama'); ?></div>
                            </div>
                            <div class="mb-3">
                                <label for="jabatan" class="form-label">Jabatan</label>
                                <input type="text" class="form-control <?= ($validation->hasError('jabatan')) ? 'is-invalid' : '' ?>" name="jabatan" id="edit_jabatan" placeholder="jabatan" value="<?= old('jabatan'); ?>">
                                <div class="invalid-feedback"><?= $validation->getError('jabatan'); ?></div>
                            </div>
                            <div class="mb-3">
                                <label for="formFileSm" class="form-label">Pilih Gambar</label>
                                <input type="hidden" readonly id="file_lama" name="file_lama">
                                <input class="form-control form-control-sm <?= ($validation->hasError('berkas')) ? 'is-invalid' : '' ?>" id="edit_fileTeam" name="berkas" id="edit_berkas" type="file" onchange="imgPreviewEdit()" value="<?= old('berkas'); ?>">
                                <div class="invalid-feedback"><?= $validation->getError('berkas'); ?></div>
                            </div>
                            <div class="mb-3 row">
                                <label for="linkedin" class="col-sm-3 col-form-label"><i class="fa-brands fa-linkedin text-primary me-2"></i>Linkedin</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control <?= ($validation->hasError('linkedin')) ? 'is-invalid' : '' ?>" name="linkedin" id="edit_linkedin" value="<?= old('linkedin'); ?>">
                                    <div class="invalid-feedback"><?= $validation->getError('linkedin'); ?></div>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="instagram" class="col-sm-3 col-form-label"><i class="fa-brands fa-square-instagram text-danger me-2"></i>Instagram</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control <?= ($validation->hasError('instagram')) ? 'is-invalid' : '' ?>" name="instagram" id="edit_instagram" value="<?= old('instagram'); ?>">
                                    <div class="invalid-feedback"><?= $validation->getError('instagram'); ?></div>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="facebook" class="col-sm-3 col-form-label"><i class="fa-brands fa-square-facebook text-primary me-2"></i>Facebook</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control <?= ($validation->hasError('facebook')) ? 'is-invalid' : '' ?>" name="facebook" id="edit_facebook" value="<?= old('facebook'); ?>">
                                    <div class="invalid-feedback"><?= $validation->getError('facebook'); ?></div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-purple">Update</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('.toast').toast('show');

        $('.btn-update-team').click(function() {
            let id = $(this).data('id');
            let nama = $(this).data('nama');
            let jabatan = $(this).data('jabatan');
            let gambar = $(this).data('gambar');
            let linkedin = $(this).data('linkedin');
            let instagram = $(this).data('instagram');
            let facebook = $(this).data('facebook');

            $('#edit_id').val(id);
            $('#edit_nama').val(nama);
            $('#edit_jabatan').val(jabatan);
            $('#file_lama').val(gambar);
            $('#nama_gambar').html(gambar);
            $('#edit_linkedin').val(linkedin);
            $('#edit_instagram').val(instagram);
            $('#edit_facebook').val(facebook);
            $('.img-preview.edit').attr('src', 'img/team/' + gambar);
        })


        $('.btn-delete-team').click(function() {
            let id = $(this).data('id');
            let image = $(this).data('image');
            $("#idTeam").val(id);
            $("#file_old").val(image);
        })

        let message = $('.message2').data('message');
        if (message == 'ErrorAdd') {
            $('#modalAddTeam').modal('show');
        }

    })

    function imgPreviewEdit() {
        $('#nama_gambar').html('');
        let sampul = document.querySelector('#edit_fileTeam');
        let imgPreview = document.querySelector('.img-preview.edit');
        const fileSampul = new FileReader();
        fileSampul.readAsDataURL(sampul.files[0]);
        fileSampul.onload = function(e) {
            imgPreview.src = e.target.result;
        }
    }

    function imgPreview() {
        let sampul = document.querySelector('#fileTeam');
        let imgPreview = document.querySelector('.img-preview');
        const fileSampul = new FileReader();
        fileSampul.readAsDataURL(sampul.files[0]);
        fileSampul.onload = function(e) {
            imgPreview.src = e.target.result;
        }
    }
</script>
<?= $this->endSection(); ?>