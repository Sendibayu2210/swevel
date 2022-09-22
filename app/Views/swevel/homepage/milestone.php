<section id="milestone">
    <div class="mt-5 container-milestone bg-dark-blue text-white pt-5">
        <div class="h1 text-center mb-5 text-purple fw-bold">Milestone</div>
        <?php for ($i = 0; $i < 2; $i++) : ?>
            <div class="row milestone-content">
                <div class="col-lg-2 col-md-12 col-sm-12 text-lg-end text-md-center text-sm-center fw-bold h4">2022</div>
                <div class="col-lg-1 col-md-12 col-sm-12 box-line d-sm-none d-md-none d-lg-block">
                    <div class="line-milestone-1"></div>
                    <div class="bead"></div>
                    <div class="line-milestone-2"></div>
                </div>
                <div class="col-lg-3 col-md-12 col-sm-12 text-center"><img src="/img/Gojek_Tokopedia-01.svg" alt="" style="max-width: 10rem;border-radius: 15px;"></div>
                <div class="col-lg-5 col-md-12 col-sm-12 mb-5 pb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse possimus nemo minus corporis quibusdam perferendis sunt ipsa iste, dolore est dolores delectus exercitationem quos libero!</div>
            </div>
        <?php endfor; ?>
        <div class="text-center mt-4">
            <button class="btn btn-purple" data-bs-toggle="modal" data-bs-target="#modalMilestone">Lihat Semua Milestone</button>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="modalMilestone" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-scrollable">
            <div class="modal-content modal-content-milestone bg-dark-blue">
                <div class="modal-header text-white border-0">
                    <h5 class="modal-title" id="exampleModalLabel"></h5>
                    <button type="button" class="btn text-white border-0" data-bs-dismiss="modal"><i class="fa-solid fa-xmark me-2"></i> Tutup</button>
                </div>
                <div class="modal-body">
                    <div class="text-white">
                        <div class="h1 text-center mb-5 text-purple fw-bold">Milestone</div>
                        <?php for ($i = 2017; $i <= 2022; $i++) : ?>
                            <div class="row milestone-content">
                                <div class="col-lg-2 col-md-12 col-sm-12 text-lg-end text-md-center text-sm-center fw-bold h4"><?= $i; ?></div>
                                <div class="col-lg-1 col-md-12 col-sm-12 box-line d-sm-none d-md-none d-lg-block">
                                    <div class="line-milestone-1"></div>
                                    <div class="bead"></div>
                                    <div class="line-milestone-2"></div>
                                </div>
                                <div class="col-lg-3 col-md-12 col-sm-12 text-center"><img src="/img/Gojek_Tokopedia-01.svg" alt="" style="max-width: 10rem;border-radius: 15px;"></div>
                                <div class="col-lg-5 col-md-12 col-sm-12 mb-5 ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse possimus nemo minus corporis quibusdam perferendis sunt ipsa iste, dolore est dolores delectus exercitationem quos libero!</div>
                            </div>
                        <?php endfor; ?>
                    </div>
                </div>
            </div>
        </div>

</section>

<script>
    $(document).ready(function() {
        // Milestone
        // mengatur tinggi garis
        let heightBoxLine = $(".row.milestone-content")[0].scrollHeight;
        let heightBead = $(".bead")[0].scrollHeight;
        $('.line-milestone-1').css('height', (heightBoxLine / 2) - heightBead);
        $('.line-milestone-2').css('height', (heightBoxLine / 2) + heightBead);

        $(".milestone-content").hover(function() {
            $(this).addClass("active").css('transition', 'ease .5s').prevAll().removeClass("active");
            $(this).nextAll().removeClass("active");
            $(this).find('.bead').addClass('active').css('transition', 'all .7s');
            $('.line-milestone-1, .line-milestone-2').css('opacity', '.4')
        });
        $('.milestone-content').mouseleave(function() {
            $(this).find('.bead').removeClass('active');
        })

        $('.modal-content-milestone').css('border-radius', '20px');
    })
</script>