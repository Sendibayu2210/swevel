<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<?= $this->include('swevel/navbar'); ?>
<div id="kuis">
    <div class="container mt-5 py-3">
        <div class="row justify-content-between flex-row-reverse w-100">
            <h4 class="text-dark mb-3">Kuis Pemrograman dengan Kotlin</h4>
            <div class="text-dark">Kuis Latihan : <span class="ms-1 fw-bold text-purple">20 menit</span></div>
            <h5 class="fw-bold mt-5 mb-3">Mulai Kuis</h5>

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
        $.ajax({
            url: "https://lms.lazy2.codes/public/api/quiz",
            type: "GET",
            dataType: "JSON",
            success: function(data) {
                var result = JSON.parse(data[0].question);
                $.each(result, function(i, data) {
                    $.each(data, function(index, value) {
                        var i = index + 1;
                        $('.nomor-kuis').append(`
                            <span class="nomor">` + i + `</span>
                        `)
                        $('#daftar-soal').append(`
                        <div class="daftar-soal mt-3 no` + i + `">
                            <div class="soal d-flex">
                                <span class="me-2">` + i + `</span>
                                <p class="ms-1">` + value.question + `</p>
                            </div>
                            <div class="point">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="` + i + `" id="` + i + `` + 0 + `">
                                    <label class="form-check-label" for="` + i + `` + 0 + `">
                                        ` + value.answer[0] + `
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="` + i + `" id="` + i + `` + 1 + `">
                                    <label class="form-check-label" for="` + i + `` + 1 + `">
                                        ` + value.answer[1] + `
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="` + i + `" id="` + i + `` + 2 + `">
                                    <label class="form-check-label" for="` + i + `` + 2 + `">
                                        ` + value.answer[2] + `
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="` + i + `" id="` + i + `` + 3 + `">
                                    <label class="form-check-label" for="` + i + `` + 3 + `">
                                        ` + value.answer[3] + `
                                    </label>
                                </div>
                            </div>
                        </div>`);
                    })
                });
                // soal();
            }
        });
    })
</script>
<?= $this->endSection(); ?>