<?= $this->extend('swevel/admin/admin-template');?>
<?= $this->section('content'); ?>

<div class="container">
    <div class="d-flex justify-content-between pb-4 border-bottom">
        <button class="btn btn-purple tambah-pembayaran">Tambah</button>
        <div class="h4 fw-bold text-purple">Kelola Pembayaran</div>
    </div>

    <?php if (session()->getFlashdata('message')) : ?>
        <div class="toast-container position-fixed top-0 end-0 p-3">
            <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header bg-white" data-message="<?= session()->getFlashdata('message1'); ?>"><?= session()->getFlashdata('message1'); ?></div>
                <div class="toast-body bg-light"><?= session()->getFlashdata('message'); ?></div>
            </div>
        </div>
    <?php endif; ?>

    <div class="card my-4 card-pembayaran hide">
        <div class="card-body">
            <form action="/save-pembayaran" method="post" enctype="multipart/form-data" id="form-kelola-pembayaran">
                <?= csrf_field(); ?>
                <input type="hidden" name="id" id="id">
                <div class="title-kelola-pembayaran fw-bold h5 text-purple mb-3"></div>
                <div class="row">
                    <div class="col-lg-8">
                        <div class="mb-3">
                            <label for="">Nama Bank</label>
                            <input type="text" name="nama" id="nama" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : ''?>" value="<?= old('nama'); ?>">
                            <div class="invalid-feedback"><?= $validation->getError('nama'); ?></div>
                        </div>
                        <div class="mb-3">
                            <label for="">Nomor Rekening</label>
                            <input type="text" name="norek" id="norek" class="form-control  <?= ($validation->hasError('norek')) ? 'is-invalid' : ''?>" value="<?= old('norek'); ?>">
                            <div class="invalid-feedback"><?= $validation->getError('norek'); ?></div>
                        </div>
                        <div class="mb-3">
                            <label for="">Gambar</label>
                            <input type="file" name="berkas" id="berkas" onchange="imgPreview()" class="form-control  <?= ($validation->hasError('berkas')) ? 'is-invalid' : ''?>">
                            <div class="invalid-feedback"><?= $validation->getError('berkas'); ?></div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="mb-3 text-center">image preview</div>                    
                        <div class="d-flex justify-content-center">
                            <img src="" class="img-preview" style="max-width:150px;">                    
                        </div>
                        <button type="submit" class="btn btn-purple mt-5 text-center w-100">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>


    <div class="table-responsive mt-5">
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Bank</th>
                    <th>No Rekening</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no=1; foreach($bank as $x) : ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $x['nama_bank']; ?></td>
                        <td><?= $x['no_rekening']; ?></td>
                        <td><img src="/img/bank/<?= $x['gambar']; ?>" style="max-width:50px;"></td>
                        <td>
                            <div class="d-flex">
                                <div class="me-3 cursor-pointer text-purple edit-pembayaran" data-id="<?= $x['id']; ?>" data-nama="<?= $x['nama_bank']; ?>" data-gambar="<?= $x['gambar']; ?>" data-norek="<?= $x['no_rekening']; ?>"><i class="fa-solid fa-pen"></i></div>
                                <div class="cursor-pointer text-purple delete-pembayaran" data-id="<?= $x['id']; ?>" data-bs-toggle="modal" data-bs-target="#delete_pembayaran"><i class="fa-solid fa-trash"></i></div>
                            </div>
                        </td>

                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="delete_pembayaran" tabindex="-1" aria-labelledby="delete_pembayaranLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="delete_pembayaranLabel">Konfirmasi Penghapusan</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
        <form action="/delete-pembayaran" method="post">
            <?= csrf_field(); ?>
            <input type="hidden" name="_method" value="DELETE">
            <div class="modal-body">
                <div class="text-center">
                    Apakah yakin akan menghapus data ini ?
                </div>
                <input type="hidden" name="id" id="id_delete_pembayaran">
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-purple">Hapus</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            </div>
        </form>
    </div>
  </div>
</div>

<script>
    $(document).ready(function(){
        $('.tambah-pembayaran').click(function(){
            $('.card-pembayaran').show(400);
            $('.title-kelola-pembayaran').html('Tambah Pembayaran');
        })
        $('.edit-pembayaran').click(function(){
            $("#form-kelola-pembayaran").attr('action','/update-pembayaran');
            $('.card-pembayaran input').val("");
            $('.card-pembayaran').show(400);
            $('.title-kelola-pembayaran').html('Edit Pembayaran');

            let nama = $(this).data('nama');
            let norek = $(this).data('norek');
            let gambar = $(this).data('gambar');
            let id = $(this).data('id');

            $('#id').val(id);
            $('#nama').val(nama);
            $('#norek').val(norek);
            $(".img-preview").attr('src','/img/bank/'+gambar);
        })

        $(".delete-pembayaran").click(function(){
            let id = $(this).data('id');
            $('#id_delete_pembayaran').val(id);
        })

        let toast = $('.toast-header').data('message');
        if(toast == 'Error'){
            $('.card-pembayaran').show();
        }
        $('.toast').toast('show');
    })
    
    function imgPreview() {
        let sampul = document.querySelector('#berkas');
        let imgPreview = document.querySelector('.img-preview');

        const fileSampul = new FileReader();
        fileSampul.readAsDataURL(sampul.files[0]);
        fileSampul.onload = function(e) {
            imgPreview.src = e.target.result;
        }
    }
</script>

<?= $this->endSection(); ?>