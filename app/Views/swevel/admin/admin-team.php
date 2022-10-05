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

    <div class="d-flex justify-content-between mb-5">
        <a href="/admin-tambah-team" class="btn btn-purple">Add Team</a>
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
                                <button class="btn btn-purple btn-sm me-2 btn-update-team">Edit</button>
                                <button class="btn btn-purple btn-sm me-2 btn-delete-team" data-bs-toggle="modal" data-bs-target="#modalDeleteTeam" data-id="<?= $x['id']; ?>">Delete</button>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
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

        $('.btn-delete-team').click(function() {
            let id = $(this).data('id');
            $("#idTeam").val(id);
        })

        $('.toast').toast('show');
    })
</script>
<?= $this->endSection(); ?>