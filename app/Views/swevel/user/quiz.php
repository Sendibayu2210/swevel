<?= $this->extend('layout/template-materi'); ?>
<?= $this->section('content'); ?>

<div id="kuis">
    <div class="container py-3">
        <input type="hidden" readonly id="course" value="<?= $course; ?>">
        <input type="hidden" readonly id="video" value="<?= $video; ?>">
        <input type="hidden" readonly id="nomor-soal" value="<?= $soal; ?>">
        <div class="row justify-content-between flex-row-reverse w-100">
            <h4 class="text-dark mb-3 judul-kuis"></h4>
            <div class="text-dark mb-4">Sisa waktu : <span class="ms-1 fw-bold text-purple" id="countdown"></span></div>

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
        $('#user-sidebar-materi').addClass('hide')
        $('.content-materi').css('width', '100%')
        let videoId = $('#video').val()
        let course = $('#course').val()
        $.ajax({
            url: 'https://lms.lazy2.codes/public/api/course/video/' + videoId,
            type: "GET",
            dataType: "JSON",
            success: function(result) {
                let quiz = result.quiz.soal;
                let jmlsoal = quiz.length;
                let nomorSoal = $('#nomor-soal').val();
                let num = 0;

                $('.judul-kuis').html('Kuis ' + result.title);

                // button preview, next, finish
                $('.btn-prev-next').append(`
                    <div class="button">
                        <a href="kuis?v=` + videoId + `&s=` + (parseInt(nomorSoal) - 1) + `" class="ms-3 btn btn-purple btn-back">Preview</a>
                        <a href="kuis?v=` + videoId + `&s=` + (parseInt(nomorSoal) + 1) + `" class="ms-3 btn btn-purple btn-next">Next</a>                                    
                        <a href="#finish" class="ms-3 btn btn-warning btn-finish">Finish</a>                                    
                    </div>
                `);

                if (nomorSoal <= 1) {
                    nomorSoal = 1;
                    $(".btn-finish, .btn-back").addClass('hide');
                } else if (nomorSoal >= jmlsoal) {
                    nomorSoal = jmlsoal;
                    $(".btn-next").addClass('hide');
                    $(".btn-finish").removeClass('hide');
                } else if (nomorSoal < jmlsoal) {
                    $('.btn-finish').addClass('hide');
                }

                // list soal
                $('#daftar-soal').append(`                                        
                    <div class="mb-4 soal">
                        <input type="hidden" readonly name="nomor_soal" value="` + nomorSoal + `">
                        <div class="fw-bold mb-2">` + (nomorSoal) + '. ' + quiz[parseInt(nomorSoal) - 1].question + `</div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="answer" id="answer` + (num + 1) + `" value="` + (num + 1) + `">
                            <label class="form-check-label" for="answer` + (num + 1) + `">
                                ` + quiz[parseInt(nomorSoal) - 1].answer[0] + `
                            </label>
                        </div>
                        <div class="form-check mb-1">
                            <input class="form-check-input" type="radio" name="answer" id="answer` + (num + 2) + `" value="` + (num + 2) + `">
                            <label class="form-check-label" for="answer` + (num + 2) + `">
                                ` + quiz[parseInt(nomorSoal) - 1].answer[1] + `
                            </label>
                        </div>
                        <div class="form-check mb-1">
                            <input class="form-check-input" type="radio" name="answer" id="answer` + (num + 3) + `" value="` + (num + 3) + `">
                            <label class="form-check-label" for="answer` + (num + 3) + `">
                                ` + quiz[parseInt(nomorSoal) - 1].answer[2] + `
                            </label>
                        </div>
                        <div class="form-check mb-1">
                            <input class="form-check-input" type="radio" name="answer" id="answer` + (num + 4) + `" value="` + (num + 4) + `">
                            <label class="form-check-label" for="answer` + (num + 4) + `">
                                ` + quiz[parseInt(nomorSoal) - 1].answer[3] + `
                            </label>
                        </div>
                    </div>                                                        
                `);

                // jumlah soal
                for (let i = 1; i <= jmlsoal; i++) {
                    $('.nomor-kuis').append(`                        
                        <a href="kuis?v=` + videoId + `&s=` + i + `" class="text-decoration-none text-dark"><span class="` + (i == nomorSoal ? 'active' : '') + `">` + i + `</span></a>                        
                    `);
                }

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

    const menit = 15;
    let time = menit * 60;
    const countDown = document.getElementById('countdown');
    setInterval(updateCountDown, 1000);

    function updateCountDown() {
        const minutes = Math.floor(time / 60);
        let seconds = time % 60;
        if (seconds < 10) {
            seconds = "0" + seconds;
        }
        countDown.innerHTML = `${minutes} : ${seconds}`;
        time--;

        if (minutes < 0) {
            $('#countdown').html('selesai')
        }
    }
</script>
<?= $this->endSection(); ?>