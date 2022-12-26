<?= $this->extend('swevel/admin/admin-template'); ?>
<?= $this->section('content'); ?>


<div id="admin-faq" class="container">

    <?php if (session()->getFlashdata('message')) : ?>
        <span id="message2" data-message="<?= (session()->getFlashdata('message2')) ?? ''; ?>"></span>
        <div class="toast-container position-fixed top-0 end-0 p-3">
            <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header bg-white"><?= session()->getFlashdata('message1'); ?></div>
                <div class="toast-body bg-light"><?= session()->getFlashdata('message'); ?></div>
            </div>
        </div>
    <?php endif; ?>

    <div class="mt-3 mb-5 d-flex justify-content-between">
        <button class="btn btn-purple btn-add-faq">Tambah FAQ</button>
        <button class="btn btn-purple btn-show-faq-user hide">Lihat FAQ</button>
        <div class="h3 fw-bold text-purple">FAQ</div>
    </div>

    <div class="mt-5 add-faq hide">
        <form action="/add-faq" method="post">
            <?= csrf_field(); ?>
            <div class="mt-4 mb-4">
                <label for="">Pilih Kategori FAQ</label>
                <select name="add-kategori" id="" class="form-control <?= ($validation->hasError('add-kategori')) ? 'is-invalid' : ''; ?>">
                    <option value="kursus">Kursus</option>
                    <option value="pelatihan">Pelatihan</option>
                    <option value="lainnya" selected>Lainnya</option>
                </select>
                <div class="invalid-feedback"><?= $validation->getError('add-kategori'); ?></div>
            </div>

            <div class="mt-4">
                <div class="h3 mb-4">Pertanyaan</div>
                <div class="input-question">
                    <textarea class="form-control border-0 p-4 shadow <?= ($validation->hasError('add-question')) ? 'is-invalid' : ''; ?>" name="add-question" id="add-question" placeholder="ketikan pertanyaan disini"><?= old('add-question'); ?></textarea>
                    <div class="invalid-feedback"><?= $validation->getError('add-question'); ?></div>
                </div>
            </div>
            <div class="mt-4">
                <div class="h3 mb-4">Tanggapan</div>
                <div class="input-answer">
                    <textarea class="form-control border-0 p-4 shadow <?= ($validation->hasError('add-answer')) ? 'is-invalid' : ''; ?>" name="add-answer" id="add-answer" placeholder="ketikan tanggapan disini"><?= old('add-answer'); ?></textarea>
                    <div class="invalid-feedback"><?= $validation->getError('add-answer'); ?></div>
                </div>
            </div>
            <div>
                <button type="submit" class="btn btn-purple text-center w-100 mt-5 mb-5">Publish</button>
            </div>
        </form>
    </div>


    <div class="faq-from-user">
        <div class="h3 mb-4">Pilih Pertanyaan</div>
        <div class="box-question row overflow-auto">
            <?php foreach ($faq as $x) : ?>
                <div class="col-lg-3 col-md-6 cursor-pointer mb-3">
                    <div class="form-check question cursor-pointer" data-question='<?= $x['question']; ?>' data-from="<?= $x['from']; ?>" data-publish="<?= date('d m Y', strtotime($x['updated_at'])); ?>" data-id="<?= $x['id']; ?>" data-answer='<?= $x['answer']; ?>'>
                        <input class="form-check-input d-none position-absolute" type="radio" name="flexRadioDefault" id="<?= $x['id']; ?>">
                        <label class="form-check-label" for="<?= $x['id']; ?>">
                            <div class="card card-question shadow cursor-pointer">
                                <div class="card-body">
                                    <div class="small">
                                        <div class="small <?= ($x['answer'] != '') ? 'text-success' : 'text-danger'; ?>"><?= ($x['answer'] != '') ? 'sudah dijawab' : 'belum dijawab'; ?></div>
                                        <div class="small text-muted">Dari :  <span class="fw-bold"><?= $x['from'] . ' - ' . $x['email']; ?></span></div>
                                        <div class="small text-muted">Tanggal : <?= date('d m Y', strtotime($x['updated_at'])); ?></div>
                                        <div class="small text-muted">Kategori : <?= $x['kategori']; ?></div>
                                    </div>
                                    <div class="mt-2 fw-bold small"><?= substr($x['question'], 0, 20); ?></div>
                                </div>
                            </div>
                        </label>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <form action="/answer-question" method="post">
            <?= csrf_field(); ?>
            <div class="mt-5">
                <div class="mb-2 fw-bold">Detail Pertanyaan</div>
                <div class="card card-question mx-2 mb-3 shadow">
                    <div class="card-body">
                        <div class="small">
                            <input type="hidden" name="detail-id" id="detail-id">
                            <div class="small text-muted">dari : <span class="fw-bold detail-from"></span></div>
                            <div class="small text-muted">Tanggal : <span class="detail-published"></span></div>
                        </div>
                        <div class="mt-2 fw-bold small detail-question"></div>
                    </div>
                </div>
                <div class="mb-4">
                    <button type="button" class="btn btn-purple btn-sm ms-3 btn-delete-faq hide" data-bs-toggle="modal" data-bs-target="#deleteFaq">Hapus pertanyaan ini</button>
                </div>
            </div>
            <div class="mt-4">
                <div class="mb-2 fw-bold">Tanggapan</div>
                <div class="input-answer">
                    <textarea class="form-control border-0 p-4 shadow <?= ($validation->hasError('update-answer')) ? 'is-invalid' : ''; ?>" name="update-answer" id="update-answer" placeholder="ketiakn tanggapan disini"><?= old('name-answer'); ?></textarea>
                    <div id="validationServerUsernameFeedback" class="invalid-feedback"><?= $validation->getError('update-answer'); ?></div>
                </div>
            </div>
            <div>
                <button type="submit" class="btn btn-purple text-center w-100 mt-5 mb-5">Publish</button>
            </div>
        </form>
    </div>
</div>

<!-- Modal delete FAQ-->
<div class="modal fade" id="deleteFaq" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Konfirmasi</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="/delete-faq" method="post">
                <div class="modal-body">
                    <div class="text-center">
                        <div class="h4">Yakin ingin menghapus data ini ? </div>
                        <div>setelah dihapus data ini tidak dapat dipulihkan</div>
                    </div>
                    <?= csrf_field(); ?>
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="hidden" name="idFaq" id="idFaq">
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
        $(".btn-add-faq").click(function() {
            addFaqShow();
        })
        $(".btn-show-faq-user").click(function() {
            $('.btn-show-faq-user').addClass('hide');
            $('.btn-add-faq').removeClass('hide');
            $('.add-faq').addClass("hide");
            $('.faq-from-user').removeClass('hide');
        })
        $('.toast').toast('show');

        $(".form-check.question").click(function() {
            let from = $(this).data('from');
            let publish = $(this).data('publish');
            let question = $(this).data('question');
            let answer = $(this).data('answer');
            let id = $(this).data('id');
            $('.detail-from').html(from);
            $('.detail-published').html(publish);
            $('.detail-question').html(question);
            $('#detail-id').val(id);
            $('#idFaq').val(id);
            setUpdateAnswer.setData(answer);
            $(".btn-delete-faq").removeClass('hide');
        })

        let message2 = $("#message2").data('message');
        if (message2 == 'ErrorAdd') {
            addFaqShow();
        }
    })

    function addFaqShow() {
        $('.btn-add-faq').addClass('hide');
        $('.add-faq').removeClass('hide');
        $('.faq-from-user').addClass('hide');
        $('.btn-show-faq-user').removeClass('hide');
    }
    let setUpdateAnswer;
    ClassicEditor
        .create(document.querySelector('#update-answer'))
        .then(editor => {
            window.editor = editor;
            setUpdateAnswer = editor;
        })
        .catch(error => {
            console.error(error);
        });
    ClassicEditor
        .create(document.querySelector('#add-question'))
        .catch(error => {
            console.error(error);
        });
    ClassicEditor
        .create(document.querySelector('#add-answer'))
        .catch(error => {
            console.error(error);
        });
</script>

<?= $this->endSection(); ?>