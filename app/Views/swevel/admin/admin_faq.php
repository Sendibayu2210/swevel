<?= $this->extend('swevel/admin/admin-template'); ?>
<?= $this->section('content'); ?>


<div id="admin-faq" class="container">
    <div class="h3 mb-4">Choose Question</div>
    <div class="box-question row overflow-auto">
        <?php for ($i = 0; $i < 15; $i++) : ?>
            <div class="col-lg-4 col-md-6 d-flex justify-content-center">
                <div class="form-check">
                    <input class="form-check-input d-none position-absolute" type="radio" name="flexRadioDefault" id="<?= $i; ?>">
                    <label class="form-check-label" for="<?= $i; ?>">
                        <div class="card card-question mx-2 mb-3 shadow">
                            <div class="card-body">
                                <div class="small">
                                    <div class="small text-muted">From <span class="fw-bold">annisazahr.gmail.com</span></div>
                                    <div class="small text-muted">published on may 23 2022</div>
                                </div>
                                <div class="mt-2 fw-bold small">Lorem ipsum dolor sit amet ?</div>
                            </div>
                        </div>
                    </label>
                </div>
            </div>
        <?php endfor; ?>
    </div>

    <div class="mt-5">
        <div class="mb-2 fw-bold">Detail Question</div>
        <div class="card card-question mx-2 mb-3 shadow">
            <div class="card-body">
                <div class="small">
                    <div class="small text-muted">From <span class="fw-bold">annisazahr.gmail.com</span></div>
                    <div class="small text-muted">published on may 23 2022</div>
                </div>
                <div class="mt-2 fw-bold small">Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, libero! Aliquid illum eum, quo dolores porro tempora accusamus harum numquam optio aspernatur cum ad in ipsam cupiditate fugit nemo possimus, natus incidunt temporibus excepturi quaerat reiciendis enim nobis consequatur? Similique et cum labore, temporibus tempore culpa molestias asperiores necessitatibus exercitationem.</div>
            </div>
        </div>
    </div>


    <form action="" method="post">
        <div class="mt-4">
            <div class="h3 mb-4">Answer</div>
            <div class="input-answer">
                <textarea class="form-control border-0 p-4 is-invalid shadow" id="content-article" placeholder="write your answer here ..."></textarea>
                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                    Please choose a username.
                </div>
            </div>
        </div>
        <div>
            <button class="btn btn-purple text-center w-100 mt-5 mb-5">Publish</button>
        </div>
    </form>
</div>


<script>
    ClassicEditor
        .create(document.querySelector('#content-article'))
        .catch(error => {
            console.error(error);
        });
</script>

<?= $this->endSection(); ?>