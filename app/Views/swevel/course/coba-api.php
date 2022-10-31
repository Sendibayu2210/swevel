<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title; ?></title>
    <link rel="shortcut icon" href="/img/logo-swevel-top2.png" type="image/x-icon">

    <script src="/asset/custom_vendor/jquery/jquery-3.6.1.min.js"></script>
    <link rel="stylesheet" href="/asset/custom_vendor/bootstrap5/css/bootstrap.min.css">
    <link rel="stylesheet" href="/asset/custom_vendor/fontawesome612/css/all.css">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;1,300&display=swap" rel="stylesheet">

    <!-- custom -->
    <link rel="stylesheet" href="/css/swevel_style.css">
    <link rel="stylesheet" href="/asset/css/custom.css">
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/course.css">    
</head>

<body>


        <div class="container">
                <div class="bundling-course row"></div>
        </div>
        
    <script src="/asset/custom_vendor/bootstrap5/js/bootstrap.bundle.min.js"></script>
    <script src="/asset/custom_vendor/fontawesome612/js/all.min.js"></script>
    <script src="/js/swevel.js"></script>
    <script>

      $(document).ready(function(){
        $.ajax({
                url : 'https://lms.lazy2.codes/public/api/bundling',
                type : 'get',
                dataType : 'json',
                success : function(result){                         
                        $.each(result, function(index, bundling){   
                                $('.bundling-course').append(`
                                 <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                                         <div class="card">
                                         <div class="card-body">
                                                 <div class="title-bundling fw-bold text-purple">`+bundling.title+`</div>
                                                 <div class="my-2 description-bundling">`+bundling.description+`</div>
                                                 <div class="list-course-bundling-`+bundling.bundling_id+` small text-white">`+getDetailBundling(bundling.bundling_id)+`</div>  
                                                 <div class="col-sm-8 col-md-6 col-lg-12">
                                                         <p class="card-text h6 text-decoration-line-through text-secondary">Rp ` + formatRupiah(bundling.old_price) + `</p>
                                                         <p class="card-text h5 fw-bold text-red">Rp ` + formatRupiah(bundling.new_price) + `</p>
                                                 </div>            
                                                 <div class="col-sm-4 col-md-6 col-lg-12 text-sm-end mt-3 text-lg-start">
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
                                                                                <div class="mb-3 text-dark">`+data.title+`</div>
                                                                        `);
                                                                })                                                                
                                                        }
                                                }
                                        })
                                 }                             
                        })
                }
        })
      })
    </script>
</body>

</html>