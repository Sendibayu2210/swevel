<?= $this->extend('swevel/admin/admin-template'); ?>
<?= $this->section('content'); ?>

<div class="container-fluid">
    <?php if (session()->getFlashdata('message')) : ?>
        <div class="toast-container position-fixed top-0 end-0 p-3">
            <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header bg-white"><?= session()->getFlashdata('message1'); ?></div>
                <div class="toast-body bg-light"><?= session()->getFlashdata('message'); ?></div>
            </div>
        </div>
    <?php endif; ?>

    <div class="row">
        <h3>Portfolio</h3>
        <div id="portfolioImg" class="col-sm-12 mt-3 col-md-8">
            <div class="card h-100 border-0">
                <div class="card-body">
                    <h5 class="my-3">Review Portfolio</h5>
                    <div class="row">
                        <?php foreach ($portofolio as $x) : ?>
                            <div class="col-12 col-md-4 mb-4 card-portofolio">
                                <img src="/img/portofolio/<?= $x['image']; ?>" class="w-100 cursor-pointer img-portofolio" alt="...">
                                <button type="button" class="btn btn-purple btn-sm mt-3 hide btn-delete-portofolio" data-id="<?= $x['id']; ?>" data-image="<?= $x['image']; ?>" data-bs-toggle="modal" data-bs-target="#modalDeletePortofolio">Delete</button>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-12 col-md-4 mt-3 p-0">
            <form action="/add-portofolio" method="post" id="form-portofolio" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card border-0 overflow-hidden">
                            <div class="card-body">
                                <div class="row">
                                    <h5 class="my-3">Add Files</h5>
                                    <div class="input-group input-group-sm">
                                        <button type="button" id="inputfile" class="btn btn-sm rounded shadow-none btn-secondary opacity-50">choose from files</button>
                                        <input type="file" class="form-control d-none <?= ($validation->hasError('berkas')) ? 'is-invalid' : ''; ?>" id="formfile" name="berkas" accept="image/*" onchange="imgPreview()">
                                        <div class="invalid-feedback"><?= $validation->getError('berkas'); ?></div>
                                    </div>
                                    <code class="my-3 text-danger">*required only jpg,jpeg</code>
                                </div>
                                <div class="card card-image-preview hide border-0">
                                    <div class="card-body text-center">
                                        <div class="text-center mb-3">Image Preview</div>
                                        <img src="" alt="" class="img-thumbnail img-preview">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 mt-3">
                            <div class="card">
                                <div class="card-body">
                                    <!-- <div class="row"> -->
                                    <h5>Publish Date</h5>
                                    <input id="datt" type="date" class="form-control my-3">
                                    <!-- <div id="datepicker" class="input-group"></div> -->
                                    <!-- </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <button class="btn btn-purple my-5 w-100 btn-publish-portofolio" type="button">Publish</button>
    </div>
</div>

<!-- Modal Confirm Delete -->
<div class="modal fade" id="modalDeletePortofolio" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Confirm</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="/delete-portofolio" method="post">
                <div class="modal-body">
                    <div class="text-center">
                        <div class="h4">Are you sure ? </div>
                        <div>You won't be able to revert this!</div>
                    </div>
                    <?= csrf_field(); ?>
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="hidden" name="id_portofolio" id="id_portofolio">
                    <input type="hidden" name="old_file" id="old_file">
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-sm btn-purple">Delete</button>
                    <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('.card-portofolio').hover(function() {
            $(this).find('.btn-delete-portofolio').removeClass('hide')
        })
        $('.card-portofolio').mouseleave(function() {
            $(this).find('.btn-delete-portofolio').addClass('hide')
        })
        $('.btn-delete-portofolio').click(function() {
            let id = $(this).data('id');
            let image = $(this).data('image');
            $("#id_portofolio").val(id);
            $("#old_file").val(image);
        })

        $('#inputfile').click(function() {
            $('#formfile').click();
        })
        $('.btn-publish-portofolio').click(function() {
            $('#form-portofolio').submit();
        })
        $('.toast').toast('show');
    })

    function imgPreview() {
        $('.card-image-preview').removeClass("hide")
        let sampul = document.querySelector('#formfile');
        let imgPreview = document.querySelector('.img-preview');
        let label = document.querySelector('#inputfile');

        label.textContent = sampul.files[0].name;
        const fileSampul = new FileReader();
        fileSampul.readAsDataURL(sampul.files[0]);
        fileSampul.onload = function(e) {
            imgPreview.src = e.target.result;
        }
    }
</script>

<?= $this->endSection(); ?>