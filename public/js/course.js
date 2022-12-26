$(document).ajaxComplete(function(){
        setTimeout(function(){
            $('.card-price').removeClass('hide');        
        },1000);        
        $(".btn-more-course").removeClass('hide');   

        $('.btn-category-course').click(function(){
            let getCateg = $(this).data('categ');                    
            getCourse('https://stufast.id/api/course/author/filter/course/category/2?cat='+getCateg);
            $('.btn-category-course').removeClass('btn-purple text-white').addClass('btn-light');
            $(this).removeClass('btn-light').addClass('btn-purple text-white');
        })   

        $('#btn-search-course-training').click(function() {
            refreshCourse();
        })
        $('#search-course-training').on('keypress', function(e) {
            if (e.which == 13) {
                refreshCourse();
            }
        });
});

function refreshCourse() {
     $('.skeleton').removeClass('hide')
     $('#card-list-course').html('');

     let inputSearch = $('#search-course-training').val();
     if (inputSearch == '') {
         getCourse('https://stufast.id/api/course/author/2');
     } else {
         getCourse('https://stufast.id/api/course/author/filter/course/title/2?title=' + inputSearch);
     }
 }

 function getCourse(url) {     
     $.ajax({
         url: url,
         type: 'GET',
         dataType: 'json',        
         success: function(result) {
             $('.skeleton').addClass('hide')
             let countData = result.length;             
             if (countData >= 1) {
                $('#card-list-course').html('');                                  
                $.each(result, function(i, data) {                      
                    $('#card-list-course').append(`
                        <div class="col-md-6 col-lg-4 col-sm-12 col-course mb-5 d-flex" data-id="` + data.course_id + `">
                            <div class="card card-course border-0 cursor-pointer shadow br-15" data-id="` + data.course_id + `">                
                                <img src="${data.thumbnail}" alt="" class="card-img-top card-thumbnail-course" data-id="${data.course_id}">                                
                                <div class="category-course-training bg-purple text-white">${(data.category[0].name) ?  data.category[0].name : data.category}</div>          
                                <div class="card-body card-content card-content-course cursor-pointer py-4"  data-id="` + data.course_id + `">
                                    <h5 class="card-title fw-bold lh-base ">` + data.title + `</h5>                                                                            
                                    <div class="row">
                                        <div class="col-sm-8 col-md-6 col-lg-12">
                                            <p class="card-text h6 text-decoration-line-through text-secondary">Rp ` + formatRupiah(data.old_price) + `</p>
                                            <p class="card-text h5 fw-bold text-red">Rp ` + formatRupiah(data.new_price) + `</p>
                                        </div>                        
                                    </div>
                                </div>
                                <div class="row m-0 mb-3">
                                    <div class="col-10">
                                        <a href="/login" class="btn btn-purple btn-sm w-100 btn-buy-course">Beli Kursus</a>
                                    </div>
                                    <div class="col-2 p-0 align-self-center">                        
                                        <a href="/login" class="btn-chart-course"><i class="fa-solid fa-cart-shopping text-purple"></i></a>                                                
                                    </div>
                                </div>                
                            </div>
                        </div>`);
                });                    

                // $("img").bind("error", function() {
                //     $(this).attr("src", "/img/error_course.webp");
                // }); 

                // sorting ascending list menu sidebar materi
                var $parentMenu = $("#card-list-course"),
                $listMenu = $parentMenu.children("div");
                $listMenu.sort(function(a, b) {
                    var an = a.getAttribute("data-id"),
                        bn = b.getAttribute("data-id");
                    if (parseInt(an) > parseInt(bn)) {
                        return 1;
                    }
                    if (parseInt(an) < parseInt(bn)) {
                        return -1;
                    }
                    return 0;
                });
                $listMenu.detach().appendTo($parentMenu);     
                // end sorting          

                 $('.btn-more-course').removeClass("hide");                 

                 let limit = $('#limit-course').val();
                 if (limit > 0) {                     
                     $('.col-course').slice(limit, countData).remove();
                 }               
                          
             } else {
                 $('.skeleton').addClass('hide')
                 $('#card-list-course').append(`
                    <div class="d-flex justify-content-center">   
                        <div class="alert alert-warning w-75 text-center br-20" role="alert">
                            Maaf, keyword yang anda cari tidak ditemukan.
                        </div>
                    </div> 
                `)
             }

             $('.card-thumbnail-course, .card-content-course').click(function() {
                 let id = $(this).data('id');
                 window.location.href = '/course/detail/' + id;
             })
         },
         error: function(result, ajaxOptions, thrownError) {
             $('.skeleton').addClass('hide')
             $('#card-list-course').html(`
                <div class="d-flex justify-content-center">   
                    <div class="alert alert-warning w-75 text-center br-20" role="alert">
                        Maaf, course tidak tersedia.
                    </div>
                </div> 
            `);
         }
     })
 }