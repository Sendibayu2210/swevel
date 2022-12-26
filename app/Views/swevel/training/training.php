<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<?= $this->include('swevel/navbar-course'); ?>
<section id="training">
<section id="course-top">
    <div class="wrapper">
        <div class="container">
            <div class="text-center py-5">
                <div class="col-lg-8 mx-auto">
                    <div class="fw-bold h1" style="letter-spacing: 0;">Temukan <span class="ch_color">Jalan Pintas</span> Profesi Anda!</div>
                    <p class="cover-text my-4" style="line-height: 1.8;font-size: 17px;">Mentor professional kami akan menunjukkan berbagai teknik yang akan mempermudah dan mempercepat pekerjaan Anda di perusahaan</p>
                </div>
            </div>
        </div>
    </div>
</section>
    <div class="container pt-5">    
        <div class="h1 fw-bold mb-3"><span class="text-purple-100">Pelatihan</span></div>
        <div class="row mb-5 mt-2 pb-3">
            <div class="col-lg-7">
                <input type="hidden" name="" id="limit-course" value="0">
                <div class="list-category-course">
                    <span class="fw-bold">Kategori : </span>
                    <input type="hidden" id="input-categ" value="semua" readonly>
                    <button class="btn btn-purple text-white btn-sm mx-1 px-3 rounded-pill btn-category-course" data-categ="">Semua</button>
                    <button class="btn btn-light btn-sm mx-1 px-3 rounded-pill btn-category-course" data-categ="basic">Basic</button>
                    <button class="btn btn-light btn-sm mx-1 px-3 rounded-pill btn-category-course" data-categ="intermediate">Intermediate</button>
                    <button class="btn btn-light btn-sm mx-1 px-3 rounded-pill btn-category-course" data-categ="advanced">Advanced</button>
                </div>
            </div>
            <div class="col-lg-5 col-search-course">                    
                <div class="input-group w-100">
                    <input type="text" class="form-control" name="search" data-kategori="course" id="search-course-training" placeholder="Ketik pelatihan yang ingin anda ikuti">
                    <button class="btn btn-purple" type="button" id="btn-search-course-training">Cari</button>
                </div>                    
            </div>
        </div>          
        <div class="training-list mt-3 mb-5 row"></div>
    </div>
</section>


<script>
    $(document).ready(function() {
        getTraining('https://stufast.id/api/course/filter/training/2');        
        $('.btn-category-course').click(function(){
            let getCateg = $(this).data('categ');    
            $('.btn-category-course').removeClass('btn-purple text-white').addClass('btn-light');
            $(this).removeClass('btn-light').addClass('btn-purple text-white');
            $('#input-categ').val(getCateg);
            getTraining('https://stufast.id/api/course/author/filter/training/category/2?cat='+getCateg);
        })
        $('#btn-search-course-training').click(function() {
            refreshTraining();
        })    
        $('#search-course-training').on('keypress', function(e) {
            if (e.which == 13) refreshTraining();
        })
    })
    function getTraining(url) {  
        $('.training-list').html('')  
        $.ajax({
            url: url,
            type: 'GET',
            dataType: 'json',
            success: function(result) {
                $('.skeleton').removeClass('hide');            
                let countData = result.length;
                if (countData > 0) {
                    $.each(result, function(i, data) {  
                        $('.training-list').append(`
                              <div class="col-lg-4 col-md-2">
                                 <div class="card border-0 card-training cursor-pointer mb-5 shadow br-15 d-flex" data-id="${data.course_id}">
                                    <img src="${data.thumbnail}" class="card-img-top" alt="...">
                                    <div class="category-course-training bg-purple text-white">${data.category[0].name}</div>
                                    <div class="card-body">                                    
                                        <h5 class="card-title text-purple">${data.title}</h5>                                    
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="small text-decoration-line-through">Rp ${formatRupiah(data.old_price)}</div>
                                                <div class="text-red fw-bold">Rp ${formatRupiah(data.new_price)}</div>
                                            </div>
                                            <div class="col-6 text-center">
                                                <a href="/login" class="btn btn-sm btn-purple redirect-login">Ikuti Pelatihan</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                              </div>
                        `);                                                          
                    });                    
                } 
                else {
                    $('.training-list').html(`
                        <div class="d-flex justify-content-center">   
                            <div class="alert alert-warning w-50 text-center br-20" role="alert">
                                Maaf, kata kunci yang Anda cari tidak ditemukan.<br>
                                Silakan coba menggunakan kata kunci lain.
                            </div>
                        </div> 
                    `);
                }


                $(".redirect-login").hover(function(){
                    $(this).parent().parent().parent().parent().removeClass('.card-training');
                })
                $(".redirect-login").mouseleave(function(){
                    $(this).parent().parent().parent().parent().addClass('.card-training');
                })
                $('.card-training').click(function() {
                    let id = $(this).data('id');
                    window.location.href = '/pelatihan/detail/' + id;
                })                                                                                 
                
                $('.card-thumbnail-course, .card-content-course .card-title').click(function() {
                    let id = $(this).data('id');
                    window.location.href = '/training/detail/' + id;
                })
                
                $('.btn-buy-course').click(function() {
                    window.location.href = '/login';
                })
            },
            error: function(result, ajaxOptions, thrownError) {
                $('.skeleton').addClass('hide');                            
                $('.training-list').append(`
                    <div class="d-flex justify-content-center">   
                        <div class="alert alert-warning w-75 text-center br-20" role="alert">
                            Maaf, pelatihan tidak tersedia untuk saat ini.<br>
                            Silakan ulangi beberapa saat lagi.
                        </div>
                    </div> 
                `);
            }
        })
    }
     function refreshTraining() {
        let inputSearch = $('#search-course-training').val();        
        if (inputSearch === '') {
            getTraining('https://stufast.id/api/course/author/filter/training/title/2?title=');
        } else {
            getTraining('https://stufast.id/api/course/author/filter/training/title/2?title=' + inputSearch);
        }
    }
 
  
</script>
<?= $this->endSection(); ?>