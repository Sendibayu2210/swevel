<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<?= $this->include('swevel/navbar'); ?>

<?php
// untuk membuat lingkaran 4x4
function circlecourse()
{
    $star = 4;
    for ($a = 0; $a < $star; $a++) {
        echo '<div class="d-flex">';
        for ($i = 1; $i <= $a; $i++) {
            echo '<div class="circlecourse"></div>';
        }
        for ($c = $star; $c > $a; $c -= 1) {
            echo '<div class="circlecourse"></div>';
        }
        echo '</div>';
        echo '<br>';
    }
}
?>

<section id="detail-course">
    <input type="hidden" readonly id="id_course" value="<?= $id; ?>">
    <div class="container">
        <div class="row mt-5 justify-content-center">
            <div class="text-white kotak-text title-course"></div>
            <img src="/img/skeleton2.gif" class="detail-img" alt="course">
        </div>
        <div class="h3 title-course text-center d-lg-none my-3 text-purple fw-bold"></div>
        <div class=" row" id="section1" style="margin:auto;">
            <div class="col" style="margin: auto;">
                <div class="circle-4 d-sm-none d-lg-block">
                    <?= circlecourse(); ?>
                </div>
            </div>
        </div>
        <div class="col" style="margin: auto;">

        </div>
    </div>

    <div class="container">
        <div class="row mb-5 pb-5" id="section2.">
            <div class="text-lg-end text-md-start mb-lg-0 mb-md-5 mb-sm-5 border-kotak">
                <h5><s class="old_price">Rp </s></h5>
                <h4 class="text-red new_price">Rp </h4>                
                <?= $link; ?>                              
            </div>
            <div class="text2. mb-5 h2 title-benefits-course col-lg-4">Benefits you get when join our course</div>

            <div class="row">
                <?php for ($i = 0; $i < 3; $i++) : ?>
                    <div class="col-lg-4 mb-3">
                        <div class="text-purple">Fleksible</div>
                        <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos nulla voluptate vero molestiae quisquam tempora possimus hic eius animi aut.</div>
                    </div>
                <?php endfor; ?>
            </div>
        </div>

        <div class="mt-5 mb-5 pb-5 text-center">
            <div class="h2 text-purple fw-bold mb-4 title-course"></div>
            <div class="d-flex justify-content-center">
                <div class="col-lg-8 description-course"></div>
            </div>
        </div>

        <div class="row mt-4 pt-4 mb-5 pb-5 justify-content-center" id="section3">
            <div class="col-lg-6 d-lg-block d-md-none d-sm-none">
                <img src="/img/skeleton2.gif" class="detail-img2" alt="course">
            </div>
            <div class="col-lg-6">
                <h4><strong>Penjelasan Course</strong></h4>
                <div class="description-course"></div>
            </div>
            <div class="circle-5 d-sm-none d-md-none d-lg-block">
                <?= circlecourse(); ?>
            </div>
        </div>

        <!-- <div class="row mb-5 ">
            <h2 class="fw-bold text-dark">Related Course</h2>
        </div> -->

    </div>

</section>

<script>
    $(document).ready(function() {
        let id_course = $('#id_course').val();
        $.ajax({
            url: 'https://lms.lazy2.codes/api/course/detail/' + id_course,
            type: 'GET',
            dataType: 'json',
            // data: {
            //     // apikey: '9fd3ac6f',
            //     // i: id_course,
            //     id: id_course
            // },
            success: function(result) {
                $('.title-course').html(result.title);
                $('.key_takeaways').html(result.key_takeaways);
                $('.description-course').html(result.description);
                $(".old_price").html('Rp ' + formatRupiah(result.old_price));
                $(".new_price").html('Rp ' + formatRupiah(result.new_price));
                // $('.detail-img').attr('src', result.thumbnail);
                $('.detail-img').attr('src', '/img/loaderpurple2.gif');
                $('.detail-img2').attr('src', result.thumbnail);
            }
        })

        $("img").bind("error", function() {
            $(this).attr("src", "/img/loaderpurple2.gif");
        });


        // mengatur tinggi line
        // hitung dulu colom pertama
        let heightCol1 = $('.timeline .col2')[0].scrollHeight;
        // hitung tinggi step number
        let heightStepNumber = $('.timeline .step-number')[0].scrollHeight;
        // mengatur line pertama
        $('.line-before').css('height', (heightCol1 / 2) - heightStepNumber);
        // mengatur line kedua
        $('.line-after').css('height', (heightCol1 / 2) + heightStepNumber);


        $(".timeline").find('.card').hover(function() {
            $(this).addClass("shadow");
        })
        $(".timeline").find('.card').mouseleave(function() {
            $(this).removeClass("shadow");
        })

        relatedCourse();
    })

    let relatedCourse = () => {
        let mediaSm = window.matchMedia("(max-width: 576px)");
        let mediaMd = window.matchMedia("(max-width: 768px)");
        let medialg = window.matchMedia("(max-width: 1200px)");
        if (mediaSm.matches) {
            var perPage = 1;
        } else if (mediaMd.matches) {
            var perPage = 2;
        } else if (medialg.matches) {
            var perPage = 3;
        } else {
            var perPage = 3;
        }
        var splide = new Splide('.splide.related-course', {
            // type: 'loop',
            perPage: perPage,
            rewind: true,
            arrows: false,
            // autoplay: true,
            // speed: 2000,
            // width: '100%',
            // padding: '10px',
        });

        splide.mount();
    }
</script>

<?= $this->include('swevel/homepage/footer'); ?>
<?= $this->include('swevel/training/footer'); ?>
<?= $this->endSection(); ?>