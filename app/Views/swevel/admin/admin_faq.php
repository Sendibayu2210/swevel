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
        <button class="btn btn-purple btn-add-faq">Add FAQ</button>
        <button class="btn btn-purple btn-show-faq-user hide">Show FAQ</button>
        <div class="h3 fw-bold text-purple">FAQ</div>
    </div>

    <div class="mt-5 add-faq hide">
        <form action="/add-faq" method="post">
            <?= csrf_field(); ?>
            <div class="mt-4">
                <div class="h3 mb-4">Question</div>
                <div class="input-question">
                    <textarea class="form-control border-0 p-4 shadow <?= ($validation->hasError('add-question')) ? 'is-invalid' : ''; ?>" name="add-question" id="add-question" placeholder="write your question here ..."><?= old('add-question'); ?></textarea>
                    <div class="invalid-feedback"><?= $validation->getError('add-question'); ?></div>
                </div>
            </div>
            <div class="mt-4">
                <div class="h3 mb-4">Answer</div>
                <div class="input-answer">
                    <textarea class="form-control border-0 p-4 shadow <?= ($validation->hasError('add-answer')) ? 'is-invalid' : ''; ?>" name="add-answer" id="add-answer" placeholder="write your answer here ..."><?= old('add-answer'); ?></textarea>
                    <div class="invalid-feedback"><?= $validation->getError('add-answer'); ?></div>
                </div>
            </div>
            <div>
                <button type="submit" class="btn btn-purple text-center w-100 mt-5 mb-5">Publish</button>
            </div>
        </form>
    </div>


    <div class="faq-from-user">
        <div class="h3 mb-4">Choose Question</div>
        <div class="box-question row overflow-auto">
            <?php foreach ($faq as $x) : ?>
                <div class="col-lg-4 col-md-6 d-flex justify-content-center">
                    <div class="form-check question" data-question='<?= $x['question']; ?>' data-from="<?= $x['from']; ?>" data-publish="<?= date('F d Y', strtotime($x['updated_at'])); ?>" data-id="<?= $x['id']; ?>" data-answer='<?= $x['answer']; ?>'>
                        <input class="form-check-input d-none position-absolute" type="radio" name="flexRadioDefault" id="<?= $x['id']; ?>">
                        <label class="form-check-label" for="<?= $x['id']; ?>">
                            <div class="card card-question mx-2 mb-3 shadow">
                                <div class="card-body">
                                    <div class="small">
                                        <div class="small <?= ($x['answer'] != '') ? 'text-success' : 'text-danger'; ?>"><?= ($x['answer'] != '') ? 'answered' : 'unanswered'; ?></div>
                                        <div class="small text-muted">From <span class="fw-bold"><?= $x['from']; ?></span></div>
                                        <div class="small text-muted">published on <?= date('F d Y', strtotime($x['updated_at'])); ?></div>
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
                <div class="mb-2 fw-bold">Detail Question</div>
                <div class="card card-question mx-2 mb-3 shadow">
                    <div class="card-body">
                        <div class="small">
                            <input type="hidden" name="detail-id" id="detail-id">
                            <div class="small text-muted">From <span class="fw-bold detail-from"></span></div>
                            <div class="small text-muted">published on <span class="detail-published"></span></div>
                        </div>
                        <div class="mt-2 fw-bold small detail-question"></div>
                    </div>
                </div>
                <div class="mb-4">
                    <button type="button" class="btn btn-purple btn-sm ms-3 btn-delete-faq hide" data-bs-toggle="modal" data-bs-target="#deleteFaq">Delete</button>
                </div>
            </div>
            <div class="mt-4">
                <div class="h3 mb-4">Answer</div>
                <div class="input-answer">
                    <textarea class="form-control border-0 p-4 shadow <?= ($validation->hasError('update-answer')) ? 'is-invalid' : ''; ?>" name="update-answer" id="update-answer" placeholder="write your answer here ..."><?= old('name-answer'); ?></textarea>
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
                <h5 class="modal-title" id="exampleModalLabel">Confirm</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="/delete-faq" method="post">
                <div class="modal-body">
                    <div class="text-center">
                        <div class="h4">Are you sure ? </div>
                        <div>You won't be able to revert this!</div>
                    </div>
                    <?= csrf_field(); ?>
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="hidden" name="idFaq" id="idFaq">
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