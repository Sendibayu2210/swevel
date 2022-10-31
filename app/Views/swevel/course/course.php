<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<?= $this->include('swevel/navbar'); ?>
<?= $this->include('swevel/training/page_first'); ?>
<?= $this->include('swevel/course/menu_course_training_event'); ?>

<section id="course" class="pb-5 mb-5">
    <div class="container mt-5">      
        <section id="popular-course">
            <div class="h1 mt-5 pt-4 pb-5 fw-bold"><span class="text-purple-100">Course</span></div>
            <div class="d-flex justify-content-center">
                <img src="/img/loaderpurple1.gif" alt="" class="skeleton">
            </div>
            <div class="row.">
                <div class="splide. popular-course">
                    <div class="splide.__track">
                        <div class="splide.__list pb-5 row" id="card-popular-course">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="h1 mt-5 pt-4 pb-3 fw-bold">Paket <span class="text-purple-100">Bundling</span></div>
        <div class="h3 text-muted col-lg-5 mb-5 ">Ambil paket bundling untuk raih lebih banyak</div>
        <section id="bundling-course">
        <div class="d-flex justify-content-center"><img src="/img/loaderpurple1.gif" alt="" class="skeleton-bundling"></div>
            <div class="row bundling-course card-group"></div>
        </section>
    </div>
</section>

<script>
    $(document).ready(function() {

        getCourse('https://lms.lazy2.codes/api/course');
        getBundling();

        $("img").bind("error", function() {
            $(this).attr("src", "/img/imagenotavailable.jpg");
        });
        $('#btn-search-course-training').click(function() {
            refreshCourse();
        })
        $('#search-course-training').on('keypress', function(e) {
            if (e.which == 13) {
                refreshCourse();
            }
        });        
        // popularCourse();
        // saleCourse();
    })

    function refreshCourse() {
        $('.skeleton').removeClass('hide')
        $('#card-popular-course').html('');
        let inputSearch = $('#search-course-training').val();
        if (inputSearch == '') {
            getCourse('https://lms.lazy2.codes/api/course');
        } else {
            getCourse('https://lms.lazy2.codes/api/course/find/' + inputSearch);
        }
    }

    function getCourse(url, searchCourse) {
        let getUrl = url;
        $.ajax({
            url: getUrl,
            type: 'GET',
            dataType: 'json',
            success: function(result) {
                $.each(result, function(i, data) {
                    $.each(data.tag, function(i, dataa) {
                        $('.menu-tag').append(`                                                    
                            <button type="button" class="btn btn-light mx-3 tag-name">` + dataa.name + `</button>
                        `);

                        // remove duplicate
                        var seen = {};
                        $('.tag-name').each(function() {
                            var txt = $(this).text();
                            if (seen[txt])
                                $(this).remove();
                            else
                                seen[txt] = true;
                        });
                        // end remove
                    })
                })
                let countData = result.length;
                if (countData >= 1) {
                    $('.skeleton').addClass('hide')
                    $('#card-popular-course').html('');
                    $.each(result, function(i, data) {
                        $('#card-popular-course').append(`
                        <div class="col-md-4 col-lg-4 col-sm-12 .splide__slide mb-5">
                                <div class="card card-course border-0 shadow">
                                    <div class="course-circle-time small"><small>`+data.suitable_for+`</small></div>
                                    <div class="image-content">
                                        <div class="card-image.">
                                            <div class="course-img-polygon">
                                                <img src="` + data.thumbnail + `" alt="" class="card-img">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-content ps-4 py-4">
                                        <h5 class="card-title fw-bold lh-base">` + data.title + ` </h5>                                        
                                        <div class="row">
                                            <div class="col-sm-8 col-md-6 col-lg-12">
                                                <p class="card-text h6 text-decoration-line-through text-secondary">Rp ` + formatRupiah(data.old_price) + `</p>
                                                <p class="card-text h5 fw-bold text-red">Rp ` + formatRupiah(data.new_price) + `</p>
                                            </div>
                                            <div class="col-sm-4 col-md-6 col-lg-12 text-sm-end  text-lg-start">
                                                <a href="/payment/`+data.course_id+`" class="btn btn-sm btn-purple-100 mt-2">Join Now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="/course/detail/` + data.course_id + `" class="text-decoration-none btn btn-sm btn-light fw-bold course-btn-read-more">Read More</a>
                                </div>
                            </div>
                        `);
                    })
                    $("img").bind("error", function() {
                        $(this).attr("src", "/img/loaderpurple2.gif");
                    });
                } else {
                    $('.skeleton').addClass('hide')
                    $('#card-popular-course').append(`
                    <div class="alert alert-warning w-100 text-center" role="alert">
                    Maaf, keyword yang anda cari tidak ditemukan.
                    </div>
                `)
                }
            },
            error: function(result, ajaxOptions, thrownError) {
                $('.skeleton').addClass('hide')
                $('#card-popular-course').append(`
                    <div class="alert alert-danger w-100 text-center" role="alert">
                    Maaf, untuk saat ini course belum bisa di akses.
                    </div>
                `)
            }
        })
    }

    function getBundling(){
        $.ajax({
                url : 'https://lms.lazy2.codes/public/api/bundling',
                type : 'get',
                dataType : 'json',
                success : function(result){            
                    $('.skeleton-bundling').addClass('hide').attr('src','');
                        $.each(result, function(index, bundling){   
                                $('.bundling-course').append(`
                                 <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                                         <div class="card border-0 shadow card-bundling cursor-pointer" style="border-radius: 10px;">
                                         <div class="card-body">
                                                 <div class="d-flex justify-content-between">
                                                    <div class="title-bundling fw-bold text-purple">`+bundling.title+`</div>
                                                    <div class="title-bundling fw-bold text-purple">`+bundling.category_name+`</div>
                                                 </div>
                                                 <div class="my-2 description-bundling">`+bundling.description+`</div>
                                                 <div class="list-course-bundling-`+bundling.bundling_id+` small text-white">`+getDetailBundling(bundling.bundling_id)+`</div>  
                                                 <div class="col-sm-8 col-md-6 col-lg-12">
                                                         <p class="card-text h6 text-decoration-line-through text-secondary">Rp ` + formatRupiah(bundling.old_price) + `</p>
                                                         <p class="card-text h5 fw-bold text-red">Rp ` + formatRupiah(bundling.new_price) + `</p>
                                                 </div>            
                                                 <div class="col-sm-4 col-md-6 col-lg-12 text-sm-end mt-4 text-lg-start">
                                                         <button class="btn btn-sm btn-purple-100 mt-2 w-100">Join Now</button>
                                                 </div>                                          
                                         </div>
                                         </div>
                                 </div>
                                 `);

                                 function getDetailBundling(id){                                        
                                        $.ajax({
                                                url : 'https://lms.lazy2.codes/public/api/bundling/detail/'+id,
                                                type : 'get',
                                                dataType : 'json',
                                                success : function(result){                                                                                                                                                                    
                                                        if(result.course.length > 0){
                                                                $.each(result.course, function(index, data){                                                                            
                                                                        $('.list-course-bundling-'+id).append(`                                                                        
                                                                                <div class="row">
                                                                                    <div class="col-2">
                                                                                        <div class="mb-3 text-dark"><i class="fa-solid fa-check text-purple small"></i></div>
                                                                                    </div>
                                                                                    <div class="col-9">
                                                                                        <div class="mb-3 text-dark">`+data.title+`</div>
                                                                                    </div>
                                                                                </div>
                                                                        `);
                                                                })                                                                
                                                        }
                                                        if(result.course.length == 0){
                                                            $('.list-course-bundling-'+id).append(`<div class="mb-3 text-dark">course belum tersedia</div>`);
                                                        }
                                                }
                                        })
                                 }                             
                        })
                }
        })
    }



    // let popularCourse = () => {
    //     let mediaSm = window.matchMedia("(max-width: 576px)");
    //     let mediaMd = window.matchMedia("(max-width: 577px)");
    //     if (mediaSm.matches) {
    //         var perPage = 1;
    //     } else if (mediaMd.matches) {
    //         var perPage = 3;
    //     } else {
    //         var perPage = 3;
    //     }
    //     var splide = new Splide('.splide.popular-course', {
    //         // type: 'loop',
    //         perPage: perPage,
    //         rewind: true,
    //         arrows: false,
    //         // autoplay: true,
    //         // speed: 2000,
    //         // width: '100%',
    //         // padding: '10px',
    //     });

    //     splide.mount();
    // }
    // let saleCourse = () => {
    //     let mediaSm = window.matchMedia("(max-width: 576px)");
    //     let mediaMd = window.matchMedia("(max-width: 577px)");
    //     if (mediaSm.matches) {
    //         var perPage = 1;
    //     } else if (mediaMd.matches) {
    //         var perPage = 3;
    //     } else {
    //         var perPage = 3;
    //     }
    //     var splide = new Splide('.splide.sale-course', {
    //         // type: 'loop',
    //         perPage: perPage,
    //         rewind: true,
    //         arrows: false,
    //         // autoplay: true,
    //         // speed: 2000,
    //         // width: '100%',
    //         // padding: '10px',
    //     });

    //     splide.mount();
    // }
</script>
<?= $this->include('swevel/homepage/footer'); ?>
<?= $this->include('swevel/training/footer'); ?>
<?= $this->endSection(); ?>