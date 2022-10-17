<?= $this->extend('layout/template-materi'); ?>
<?= $this->section('content'); ?>

<div id="kuis">
    <div class="container py-3">
        <input type="hidden" readonly id="course" value="<?= $course; ?>">
        <input type="hidden" readonly id="video" value="<?= $video; ?>">
        <div class="row justify-content-between flex-row-reverse w-100">
            <h4 class="text-dark mb-3">Kuis Pemrograman dengan Kotlin</h4>
            <div class="text-dark mb-4">Kuis Latihan : <span class="ms-1 fw-bold text-purple">20 menit</span></div>
            <!-- <h5 class="fw-bold mt-5 mb-3">Mulai Kuis</h5> -->

            <div class="col-lg-3 col-md-12 my-5">
                <div class="nomor-kuis">

                </div>
            </div>

            <div id="daftar-soal" class="col-lg-8 col-md-12">
            </div>

            <div class="row">
                <div class="col-lg-12 col-md-12 text-end">
                    <span role="button" class="btn btn-purple btn-back">Preview</span>
                    <span role="button" class="ms-3 btn btn-purple btn-next">Next</span>
                </div>
            </div>

        </div>
    </div>
</div>

<script>
    $(document).ready(function() {

        $('#user-sidebar-materi').addClass('hide')
        $('.content-materi').css('width', '100%')
        let videoId = $('#video').val()
        $.ajax({
            url: "https://lms.lazy2.codes/public/api/quiz",
            type: "GET",
            dataType: "JSON",
            success: function(result) {
                $.each(result, function(i, data) {

                    if (data.video_id == videoId) {
                        let question = data.question;
                        let parse = JSON.parse(question);
                        let objData = parse.quiz;
                        let index = 0;
                        let num = 0;
                        $('#daftar-soal').append(`                                        
                                <div class="mb-4">
                                <div class="fw-bold mb-2">` + (num + 1) + '. ' + objData[index].question + `</div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="answer" id="answer` + (num + 1) + `">
                                    <label class="form-check-label" for="answer` + (num + 1) + `">
                                        ` + objData[index].answer[0] + `
                                    </label>
                                </div>
                                <div class="form-check mb-1">
                                    <input class="form-check-input" type="radio" name="answer" id="answer` + (num + 2) + `">
                                    <label class="form-check-label" for="answer` + (num + 2) + `">
                                        ` + objData[index].answer[1] + `
                                    </label>
                                </div>
                                <div class="form-check mb-1">
                                    <input class="form-check-input" type="radio" name="answer" id="answer` + (num + 3) + `">
                                    <label class="form-check-label" for="answer` + (num + 3) + `">
                                        ` + objData[index].answer[2] + `
                                    </label>
                                </div>
                                <div class="form-check mb-1">
                                    <input class="form-check-input" type="radio" name="answer" id="answer` + (num + 4) + `">
                                    <label class="form-check-label" for="answer` + (num + 4) + `">
                                        ` + objData[index].answer[3] + `
                                    </label>
                                </div>
                                </div>
                            `)
                    }
                })
            }
        });

        soal = function() {
            $('.daftar-soal').addClass('hide')
            $('.daftar-soal').first().removeClass('hide')

            $('.btn-next').click(function() {
                $('.daftar-soal:visible').next().removeClass('hide');
                $('.daftar-soal:visible').prev().addClass('hide');
            });

            $('.btn-back').click(function() {
                $('.daftar-soal:visible').prev().removeClass('hide');
                $('.daftar-soal:visible').next().addClass('hide');
            });
        }
    })
</script>
<?= $this->endSection(); ?>