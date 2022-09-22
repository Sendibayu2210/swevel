<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<main>
    <div class="container p-2 m-auto">
        <div class="row" id="section1">
            <div class="col-lg-8">
                <div class="card border-3 bg-white">
                    <div class="bg mt-3">
                        <div class="container bg-transparent p-3">
                            <div class="row flex-row-reverse">
                                <div class="col-sm-12 col-md-12 col-lg-12 my-auto">
                                    <h3><img src="/img/Visual-Studio-Logo.png" alt="" class="rounded float-end" style="max-width: 60px;"></h3>
                                    <h3 class="fw-bold">BIM Revit All Discline Basic</h3>
                                    <p style="color: #AFAFAF;">Introduction to BIM and Autodesk Revit </p>
                                    <p>Apakah kamu ingin berpindah karir menjadi seorang Engineer dan memulai dari awal hingga mahir? Apakah kamu ingin menjadi seorang engineer yang siap kerja? Apakah kamu seorang engineer yang ingin menambah skills? Kelas ini cocok untuk kamu!</p>
                                    <h4 class="text-end" style="color: red;">RP 1.500.000</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-5 pb-5">
                <div class="row" id="section2">
                    <div class="card border-3 bg-white">
                        <div class="bg mt-1">
                            <div class="container bg-transparent p-3">
                                <div class="row flex-row-reverse">
                                    <div class="col-sm-12 col-md-12 col-lg-12 my-auto">
                                        <div class="row">
                                            <div class="col-6">
                                                <p style="color: #666666;">Kelas</p>
                                                <p style="color: #666666;">Kelas</p>
                                            </div>
                                            <div class="col-6">
                                                <p class="text-end" style="color: red;">Kelas</p>
                                                <p class="text-end fw-bold">Kelas</p>
                                            </div>
                                        </div>
                                        <hr class="mt-1">
                                        <div class="row">
                                            <p style="color: #666666;">Kelas</p>
                                            <div class="input-group mb-3">
                                                <input type="text" style="width: 30px;" class="form-control" placeholder="code" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                                <button class="btn btn-purple">Use</button>
                                            </div>
                                            <div class="col-6">
                                                <p style="color: #666666;">Kelas</p>
                                            </div>
                                            <div class="col-6">
                                                <p class="text-end fw-bold">Kelas</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-3" id="section3">
                    <div class="card border-3 bg-white">
                        <div class="bg mt-1">
                            <div class="container bg-transparent p-3">
                                <div class="row flex-row-reverse">
                                    <div class="col-sm-12 col-md-12 col-lg-12 my-auto">
                                        <h6 class="fw-bold mb-4">Pilih Metode Pembayaran</h6>
                                        <div class="accordion" id="accordionExample">
                                            <div class="accordion-item">
                                                <h4 class="accordion-header" id="headingOne">
                                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                        <div class="row">
                                                            <div class="col-2"><i class="fa-solid fa-building-columns"></i></div>
                                                            <div class="col-8 mt-2">
                                                                <p>Transfer Bank</p>
                                                            </div>
                                                        </div>
                                                    </button>
                                                </h4>
                                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <table class="table table-borderless">
                                                            <tbody>
                                                                <tr>
                                                                    <td><button data-norek="BNI834736983" class="btn bank">BNI</button></td>
                                                                    <td><button data-norek="Mandiri348932749387" class="btn bank">Mandiri</button></td>
                                                                    <td><button data-norek="Pertama348932749387" class="btn bank">Permata</button></td>
                                                                </tr>
                                                                <tr>
                                                                    <td><button data-norek="BRI348932749387" class="btn bank">BRI</button></td>
                                                                    <td><button data-norek="BCA348932749387" class="btn bank">BCA</button></td>
                                                                    <td><button data-norek="Lain348932749387" class="btn bank">Bank Lain</button></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row text-end mt-3">
                                                <div class="fw-bold">Pay Within</div>
                                                <div id="time-part" class="text-purple">23.09.44</div>
                                            </div>
                                            <div class="row mt-3">
                                                <p style="font-size: 10px;">Order ID #0deaa41e-b467-49f6-8b2b-1f7fd7c2a72e</p>
                                                <p style="font-size: 10px;">Complete payment from BRI to the virtual account number below.</p>
                                                <br>
                                                <h6>Virtual account number</h6>
                                                <div class="col-8">
                                                    <div type="text" class="fw-bold" value="" id="virtual_kode">-</div>
                                                </div>
                                                <div class="col-4">
                                                    <h5 class="text-end" style="color: #6F32BE; cursor:pointer" onclick="copyToClipboard('#virtual_kode')">COPY</h5>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row flex-row-reverse">
                                    <div class="text-end">How to Pay</div>
                                    <div class="accordion-payment">
                                        <div class="row">
                                            <h5 class="fw-bold mb-3 cursor-pointer">ATM BRI</h5>
                                            <p>1.Lorem</p>
                                            <p>1.Lorem</p>
                                            <p>1.Lorem</p>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <h5 class="fw-bold mb-3 cursor-pointer">ATM BRI</h5>
                                            <p>1.Lorem</p>
                                            <p>1.Lorem</p>
                                            <p>1.Lorem</p>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <h5 class="fw-bold mb-3 cursor-pointer">ATM BRI</h5>
                                            <p>1.Lorem</p>
                                            <p>1.Lorem</p>
                                            <p>1.Lorem</p>
                                        </div>
                                        <hr>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-2 mb-4 w-100">
                            <a href="" class="btn btn-purple-100 d-block p-2">View Status</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</main>


<script>
    $(document).ready(function() {
        $('.bank').click(function() {
            let norek = $(this).data('norek');
            $('#virtual_kode').html(norek)
        })

    })

    $('.accordion-payment .row h5').click(function() {
        $(this).nextUntil('.row h5').toggle();
    });

    function copyToClipboard(element) {
        var $temp = $("<input>");
        $("body").append($temp);
        $temp.val($(element).text()).select();
        document.execCommand("copy");
        $temp.remove();
        alert('copy sukses')
    }
</script>

<?= $this->endSection(); ?>