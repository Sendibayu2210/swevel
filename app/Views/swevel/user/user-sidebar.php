<div id="user-sidebar">
    <div class="accordion accordion-flush" id="accordionFlushExample">
        <?php for ($i = 1; $i <= 5; $i++) : ?>
            <div class="accordion-item mb-3 border-bottom">
                <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button accordion-button-primary bg-white text-dark collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse<?= $i; ?>" aria-expanded="false" aria-controls="flush-collapseOne">
                        <div class="row">
                            <div class="col-3">
                                <img src="https://cms-assets.tutsplus.com/uploads/users/1499/posts/29590/preview_image/kotlin.jpg" alt="" style="width: 50px;">
                            </div>
                            <div class="col-9">
                                <div class="fw-bold">Memulai Pemrograman dengan Kotlin</div>
                                <div class="mt-3">
                                    <i class="fa-solid fa-chart-pie text-purple"></i>
                                    <span class="ms-3">Basic - Beginner</span>
                                </div>
                                <div class="mt-2">
                                    <i class="fa-solid fa-chart-simple text-purple"></i>
                                    <span class="ms-3">Langkah <?= $i; ?></span>
                                </div>
                            </div>
                        </div>
                    </button>
                </h2>
                <div id="flush-collapse<?= $i; ?>" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <div class="accordion mt-3" id="accordionPanelsStayOpenExample">
                            <?php for ($j = 1; $j <= 3; $j++) : ?>
                                <div class="accordion-item mb-2 border-0 ">
                                    <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                        <button class="accordion-button bg-light text-dark collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse<?= $j; ?>" aria-expanded="true" aria-controls="panelsStayOpen-collapse<?= $j; ?>">
                                            <?= $j; ?>. Persiapan Kelas
                                        </button>
                                    </h2>
                                    <div id="panelsStayOpen-collapse<?= $j; ?>" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading<?= $j; ?>">
                                        <div class="accordion-body">
                                            <ul>
                                                <li class="mb-2"><a href="#" class="text-decoration-none text-dark">Persetujuan Hak Cipta</a></li>
                                                <li class="mb-2"><a href="#" class="text-decoration-none text-dark">Pendahuluan</a></li>
                                                <li class="mb-2"><a href="#" class="text-decoration-none text-dark">Pendahuluan</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            <?php endfor; ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php endfor; ?>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('.accordion-button-primary').click(function() {
            $('.accordion-button-primary').removeClass('bg-purple text-white active')
            $(this).removeClass("bg-white text-dark").addClass('active')

        })
    })
</script>