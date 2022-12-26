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
        <h3>Klien</h3>
        <div id="portfolioImg" class="col-sm-12 mt-3 col-md-8">
            <div class="card h-100 border-0">
                <div class="card-body">
                    <h5 class="my-3">Klien</h5>
                    <div class="row">
                        <?php foreach ($klien as $x) : ?>
                            <div class="col-12 col-md-4 mb-4 card-portofolio" data-bs-toggle="modal" data-bs-target="#modal-view-portofolio">
                                <img src="/img/klien/<?= $x['gambar']; ?>" class="w-100 cursor-pointer img-portofolio" alt="...">                                
                                <div class="d-flex">
                                    <div class="text-start"><button type="button" class="btn btn-purple btn-sm mt-3 hide btn-delete-portofolio" data-id="<?= $x['id']; ?>" data-image="<?= $x['gambar']; ?>" data-bs-toggle="modal" data-bs-target="#modalDeletePortofolio">Hapus</button></div>
                                    <!-- <div class="text-start ms-2"><button type="button" class="btn btn-purple btn-sm mt-3 hide btn-edit-portofolio" data-id="<?= $x['id']; ?>" data-image="<?= $x['gambar']; ?>" data-bs-toggle="modal" data-bs-target="#none">Edit</button></div>                                     -->
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-12 col-md-4 mt-3 p-0">
            <form action="/add-klien" method="post" id="form-portofolio" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <input type="hidden" name="id" id="input-id-portofolio">
                <input type="hidden" name="file_old" id="file-old-portofolio">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card border-0 overflow-hidden">
                            <div class="card-body">
                                <div class="h4 "><span class="title-action">Tambah</span> Klien</div>                                
                                <div class="row">
                                    <div class="my-3">Tambah file</div>
                                    <div class="input-group input-group-sm">
                                        <button type="button" id="inputfile" class="btn btn-sm rounded shadow-none btn-secondary text-white">pilih file</button>
                                        <input type="file" class="form-control d-none <?= ($validation->hasError('berkas')) ? 'is-invalid' : ''; ?>" id="formfile" name="berkas" accept="image/*" onchange="imgPreview()">
                                        <div class="invalid-feedback"><?= $validation->getError('berkas'); ?></div>
                                    </div>
                                    <code class="my-3 text-danger">*jenis file yang diterima png,jpg,jpeg,gif</code>
                                </div>
                                <div class="card card-image-preview hide border-0">
                                    <div class="card-body text-center">
                                        <div class="text-center mb-3">Image Preview</div>
                                        <img src="" alt="" class="img-thumbnail img-preview">
                                    </div>
                                </div>
                                <button class="btn btn-purple my-3 w-100 btn-publish-portofolio" type="button">Simpan</button>
                            </div>
                        </div>                       
                    </div>
                </div>
            </form>
        </div>        
    </div>
</div>


<!-- Modal view portofolio -->
<div class="modal fade" id="modal-view-portofolio" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">                
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>            
                <div class="modal-body position-relative">
                   <img src="" alt="" class="img-view-portofolio w-100">
                </div>
                <div class="modal-footer">                    
                    <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Tutup</button>
                </div>            
        </div>
    </div>
</div>

<!-- Modal Confirm Delete -->
<div class="modal fade" id="modalDeletePortofolio" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Konfirmasi</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="/delete-klien" method="post">
                <div class="modal-body">
                    <div class="text-center">
                        <div class="h4">Apakah kamu yakin ingin menghapus data ini ? </div>
                        <div>setelah dihapus data ini tidak dapat dipulihkan</div>
                    </div>
                    <?= csrf_field(); ?>
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="hidden" name="id_portofolio" id="id_portofolio">
                    <input type="hidden" name="old_file" id="old_file">
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-sm btn-purple">Hapus</button>
                    <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Tutup</button>
                </div>
            </form>
        </div>
    </div>
</div>





<script>
    $(document).ready(function() {
        $('.card-portofolio').hover(function() {
            $(this).addClass('shadow p-2').css('transition','all .3s')
            $(this).find('.btn-delete-portofolio').removeClass('hide')
            $(this).find('.btn-edit-portofolio').removeClass('hide')
            let imgWidth = $(this).find('img')[0].scrollWidth;
            $(this).find('.judul-portofolio').addClass('active').css('width',imgWidth);            
        })

        $('.card-portofolio').mouseleave(function() {
            $(this).find('.btn-delete-portofolio').addClass('hide')
            $(this).find('.btn-edit-portofolio').addClass('hide')
            $(this).removeClass('shadow p-2')
            $(this).find('.judul-portofolio').removeClass('active');
        })
        $('.card-portofolio img').click(function(){
            let src = $(this).attr('src');
            $('.img-view-portofolio').attr('src',src);
        })       
        $('.btn-delete-portofolio').click(function() {
            let id = $(this).data('id');
            let image = $(this).data('image');
            $("#id_portofolio").val(id);
            $("#old_file").val(image);
        })
        $(".btn-edit-portofolio").click(function(){
            $("#modal-view-portofolio").modal('hide');
            $('.btn-publish-portofolio').html('Update')
            $("#form-portofolio").attr('action','/update-portofolio');
            let id = $(this).data('id');
            let judul = $(this).data('judul');
            let image = $(this).data('image');

            $("#input-id-portofolio").val(id);
            $("#judul").val(judul);            
            $(".img-preview").attr('src','/img/portofolio/'+image)
            $("#file-old-portofolio").val(image);
            $('.card-image-preview').removeClass("hide");
            $(".title-action").html('Update')

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