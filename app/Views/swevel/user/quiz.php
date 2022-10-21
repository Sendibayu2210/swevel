<?= $this->extend('layout/template-materi'); ?>
<?= $this->section('content'); ?>

<div id="kuis">
    <div class="container py-3">
        <input type="hidden" readonly id="course" value="<?= $course; ?>">
        <input type="hidden" readonly id="video" value="<?= $video; ?>">
        <input type="hidden" readonly id="nomor-soal" value="<?= $soal; ?>">
        <div class="row justify-content-between flex-row-reverse w-100">
            <h4 class="text-dark mb-3">Kuis Pemrograman dengan Kotlin</h4>
            <div class="text-dark mb-4">Sisa waktu : <span class="ms-1 fw-bold text-purple" id="countdown">20 menit</span></div>

            <div class="row">
                <div class="col-lg-9">
                    <div id="daftar-soal"></div>
                </div>
                <div class="col-lg-3 my-5">
                    <div class="nomor-kuis"></div>
                </div>
            </div>

            <div class="text-end btn-prev-next mt-5"></div>

        </div>
    </div>
</div>

<script>
    $(document).ready(function() {

        const menit = 20;
        let time = menit * 60;
        const countDown = document.getElementById('countdown');
        setInterval(updateCountDown, 1000);

        function updateCountDown() {
            const minutes = Math.floor(time / 60);
            let seconds = time % 60;
            countDown.innerHTML = `${minutes}: ${seconds}`;
            time--;
        }

        $('#user-sidebar-materi').addClass('hide')
        $('.content-materi').css('width', '100%')
        let videoId = $('#video').val()
        let course = $('#course').val()
        $.ajax({
            url: "https://lms.lazy2.codes/public/api/quiz",
            type: "GET",
            dataType: "JSON",
            success: function(result) {
                $.each(result, function(i, data) {
                    if (data.video_id == videoId) {
                        let question = data.question;
                        let parse = JSON.parse(question);
                        let soal = $('#nomor-soal').val()
                        let num = 0;

                        let jmlsoal = parse.length;
                        if (soal <= 0 || soal == 1) {
                            soal = 1;
                            $(".btn-finish, .btn-back").addClass('hide');
                        } else if (soal >= jmlsoal || soal == jmlsoal) {
                            soal = parse.length;
                            $(".btn-next").addClass('hide');
                            $(".btn-finish").removeClass('hide');
                        } else if (soal < jmlsoal) {
                            $('.btn-finish').addClass('hide');
                        }

                        $('#daftar-soal').append(`                                        
                            <div class="mb-4 soal">
                                <div class="fw-bold mb-2">` + (soal) + '. ' + parse[parseInt(soal) - 1].question + `</div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="answer" id="answer` + (num + 1) + `">
                                    <label class="form-check-label" for="answer` + (num + 1) + `">
                                        ` + parse[parseInt(soal) - 1].answer[0] + `
                                    </label>
                                </div>
                                <div class="form-check mb-1">
                                    <input class="form-check-input" type="radio" name="answer" id="answer` + (num + 2) + `">
                                    <label class="form-check-label" for="answer` + (num + 2) + `">
                                        ` + parse[parseInt(soal) - 1].answer[1] + `
                                    </label>
                                </div>
                                <div class="form-check mb-1">
                                    <input class="form-check-input" type="radio" name="answer" id="answer` + (num + 3) + `">
                                    <label class="form-check-label" for="answer` + (num + 3) + `">
                                        ` + parse[parseInt(soal) - 1].answer[2] + `
                                    </label>
                                </div>
                                <div class="form-check mb-1">
                                    <input class="form-check-input" type="radio" name="answer" id="answer` + (num + 4) + `">
                                    <label class="form-check-label" for="answer` + (num + 4) + `">
                                        ` + parse[parseInt(soal) - 1].answer[3] + `
                                    </label>
                                </div>
                            </div>                                                        
                        `);
                        $('.btn-prev-next').append(`
                            <div class="button">
                                <a href="kuis?v=` + videoId + `&c=` + course + `&s=` + (parseInt(soal) - 1) + `" class="ms-3 btn btn-purple btn-back">Preview</a>
                                <a href="kuis?v=` + videoId + `&c=` + course + `&s=` + (parseInt(soal) + 1) + `" class="ms-3 btn btn-purple btn-next">Next</a>                                    
                                <a href="#finish" class="ms-3 btn btn-warning btn-finish">Finish</a>                                    
                            </div>
                        `);

                        for (let i = 1; i <= jmlsoal; i++) {
                            $('.nomor-kuis').append(`
                               <a href="kuis?v=` + videoId + `&c=` + course + `&s=` + i + `" class="text-decoration-none text-dark"><span class="` + (i == soal ? 'active' : '') + `">` + i + `</span></a>
                            `);
                        }

                    }
                    // remove duplicate
                    var seen = {};
                    $('.soal, .btn-prev-next .button, .jawaban, .nomor-kuis span').each(function() {
                        var txt = $(this).text();
                        if (seen[txt])
                            $(this).remove();
                        else
                            seen[txt] = true;
                    });
                    // end remove
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