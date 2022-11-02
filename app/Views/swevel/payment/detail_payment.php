<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<?= $this->include('swevel/navbar'); ?>
<main>
    <div class="container p-2 m-auto mt-5">
        <input type="hidden" readonly id="id_course" value="<?= $id; ?>">
        <div class="row" id="section1">
            <div class="col-lg-8">
                <div class="card border-3 bg-white">
                    <div class="bg mt-3">
                        <div class="container bg-transparent p-3">
                            <div class="row flex-row-reverse">
                                <div class="col-sm-12 col-md-12 col-lg-12 my-auto">
                                    <div class="d-flex justify-content-center skeleton">
                                        <img src="/img/skeleton4.gif" alt="">
                                    </div>                
                                    <div class="h5 fw-bold pb-3 border-bottom">Transfer Rekening Bank</div>
                                    <div class="row">
                                        <div class="col-6">Nama Bank</div>
                                        <div class="col-6"></div>
                                    </div>
                                    
                                    <div>Pembelian untuk course </div><h5 class="fw-bold judul-course"></h3>
                                    <p class="text-muted"></p>
                                    <p class="deskripsi-course"></p>
                                    <h4 class="text-end mt-4 text-red new_price"></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-5 pb-5  mt-lg-0 mt-md-4 mt-sm-4">
                <div class="row" id="section2">
                    <div class="card border-3 bg-white">
                        <div class="bg mt-1">
                            <div class="container bg-transparent p-3">
                                <div class="row flex-row-reverse">
                                    <div class="col-sm-12 col-md-12 col-lg-12 my-auto">
                                        <div class="row border-bottom">
                                            <div class="col-6">
                                                <p class="text-muted">Harga Kelas</p>
                                                <p class="text-muted">Potongan</p>
                                            </div>
                                            <div class="col-6">
                                                <p class="text-end fw-bold text-red old_price"></p>
                                                <p class="text-end fw-bold diskon_price"></p>
                                            </div>
                                        </div>
                                        <div class="row mt-4">
                                            <p style="color: #666666;">Kelas</p>
                                            <div class="input-group mb-4">
                                                <input type="text" style="width: 30px;" class="form-control border-0 bg-light" placeholder="code">
                                                <button class="btn btn-purple">Use</button>
                                            </div>
                                            <div class="col-6">
                                                <p style="color: #666666;">Amount</p>
                                            </div>
                                            <div class="col-6">
                                                <p class="text-end fw-bold new_price"></p>
                                                <input type="hidden" id="harga-bayar">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>           
            </div>
        </div>
    </div>
</main>


<div class="toast-container position-fixed bottom-0 end-0 p-3">
    <div id="liveToast" class="toast bg-purple text-white" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header">
            <strong class="me-auto">Copy Success</strong>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body">
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {

        $('.show-detail-pembayaran').click(function(){
            let checkNorek = $('#virtual_kode').html();            
            if(checkNorek == '-'){
                $(".show-detail-pembayaran.selanjutnya").removeClass('btn-purple').addClass('btn-danger').html('Pilih Metode Pembayaran');
                setTimeout(() => {
                    $(".show-detail-pembayaran.selanjutnya").addClass('btn-purple').removeClass('btn-danger').html('Selanjutnya');                
                }, 3000);
            }else{
                $(".show-detail-pembayaran.selanjutnya").html(`<div class="spinner-border text-light" role="status"><span class="visually-hidden">Loading...</span></div>`);                
                let norek = $('#virtual_kode').html();
                let harga = $('#harga-bayar').val();
                $.ajax({
                    url : '/save-purchase',
                    type : 'post',
                    dataType : 'json',
                    data : {
                        course : '<?= $id; ?>',
                        bank : norek,
                        harga : harga,
                    },
                    success: function(result){
                        if(result.code == '200'){
                            window.location.href = result.redirect;
                        }
                        if(result.code == '500' && result.message == 'sudah-beli'){
                            $(".show-detail-pembayaran.selanjutnya").addClass('btn-purple').removeClass('btn-danger').html('anda sudah membeli course ini.\n anda bisa melanjutkan ke halaman materi');                
                            $('.card-selanjutnya').append(`
                                <a href="/`+result.redirect+`" class="btn btn-primary mt-3 w-100 text-decoration-none">kembali ke materi</a>
                            `);
                            
                        }                        
                    }
                })
            }
        })
        
        $('.bank').click(function() {
            let norek = $(this).data('norek');
            let nama = $(this).data('nama');
            $('#virtual_kode').html(norek)
            $('#time-part').html(nama);
        })

        $('.more-bank').click(function(){
            $('.logo-bank.satu').addClass('hide');
            $('.logo-bank.dua').removeClass('hide');            
        })
        $(".sedikit-bank").click(function(){
            $('.logo-bank.satu').removeClass('hide');
            $('.logo-bank.dua').addClass('hide');            
        })

        let id_course = $('#id_course').val();
        $.ajax({
            url: 'https://lms.lazy2.codes/api/course/detail/' + id_course,
            type: 'GET',
            dataType: 'json',
            success: function(result) {
                $('.skeleton').addClass('hide').removeClass('d-flex');
                $('.judul-course').html(result.title);
                $('.deskripsi-course').html(result.description);
                $('.old_price').html('Rp ' + formatRupiah(result.old_price));
                $('.new_price').html('Rp ' + formatRupiah(result.new_price));
                $('.diskon_price').html('-Rp ' + formatRupiah(result.old_price - result.new_price));
                $('#harga-bayar').val(result.new_price);
            }
        })
    })

    $('.accordion-payment .row h5').click(function() {
        $(this).nextUntil('.row h5').toggle();
    });

    function copyToClipboard(element) {
        let norek = $('#virtual_kode').html();
        var $temp = $("<input>");
        $("body").append($temp);
        $temp.val($(element).text()).select();
        document.execCommand("copy");
        $temp.remove();        
        $('.toast-body').html(norek);
        $('.toast').toast('show');
    }
</script>


<?= $this->endSection(); ?>