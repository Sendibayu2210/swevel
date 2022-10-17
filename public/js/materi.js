$(document).ready(function() {
    // show sidebar materi
    let course = $('#course').val()
    $.ajax({
        url: "https://lms.lazy2.codes/api/course/detail/" + course,
        type: "GET",
        dataType: "JSON",
        success: function(result) {
            $('.title-course').html(result.title);
            $.each(result.video, function(i, data) {
                $("#menu-materi").append(`
                    <div class="accordion-item mb-3 border-bottom" data-order="` + data.order + `" data-video="` + data.video_id + `">
                        <h2 class="accordion-header" id="flush-materi" data-video="` + data.video_id + `">
                            <button class="accordion-button accordion-button-primary bg-white text-dark collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse` + data.order + `" aria-expanded="false" aria-controls="flush-collapseOne">
                                <div class="row">
                                    <div class="col-3">
                                        <img src="` + data.thumbnail + `" alt="" style="width: 50px;" class="materi-thumbnail">
                                    </div>
                                    <div class="col-9">
                                        <div class="fw-bold">` + data.title + `</div>                                     
                                        <div class="mt-2">
                                            <i class="fa-solid fa-chart-simple text-purple"></i>
                                            <span class="ms-3">Langkah ` + data.order + `</span>
                                        </div>
                                    </div>
                                </div>
                            </button>
                        </h2>
                        <div id="flush-collapse` + data.order + `" class="accordion-collapse collapse" aria-labelledby="flush-materi" data-bs-parent="#menu-materi">
                            <div class="accordion-body">
                                <ul class="list-sub-menu-materi">                                    
                                    <li class="mb-3"><a href="#" class="text-decoration-none cursor pointer text-dark hover-purple btn-materi" data-video="` + data.video_id + `" data-menu="materi">` + data.title + `</a></li>
                                    <li class="mb-3 btn-kuis hide"><a href="/materi/kuis?v=` + data.video_id + `&c=` + course + `" class="text-decoration-none cursor-pointer text-dark hover-purple btn-kuis`+data.video_id+`" data-video="` + data.video_id + `" data-menu="kuis">Kuis</a></li>                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                    `);
            });
            // sort ascending list menu
            var $parentMenu = $("#menu-materi"),
            $listMenu = $parentMenu.children("div.accordion-item");
            $listMenu.sort(function(a, b) {
                var an = a.getAttribute("data-order"),
                    bn = b.getAttribute("data-order");
                if (an > bn) {
                    return 1;
                }
                if (an < bn) {
                    return -1;
                }
                return 0;
            });
            $listMenu.detach().appendTo($parentMenu);     

            
            // cek kuis apakah ada atau tidak        
            // show video and title materi
            $("#menu-materi .accordion-header").click(function() {                
                let video = $(this).data("video");           
                let btnKuis = $(this).find('li.btn-kuis');                    
                $.ajax({
                    url: "https://lms.lazy2.codes/public/api/course/video/" + video,
                    type: "GET",
                    dataType: "JSON",
                    success: function(result) { 
                        // cek kuis apakah ada atau tidak 
                        if(!result.quiz){
                            btnKuis.addClass('hide');
                        }else{
                            btnKuis.removeClass('hide');
                        }        

                        $('#message-materi').addClass('hide')
                        $('#materi').removeClass('hide')
                        $(".title").html(result.title);
                        $("title").html("Materi " + result.title);
                        $(".loader").removeClass("d-flex").addClass("hide");

                        let linkVideo = result.video;
                        linkVideo = linkVideo.split("&v=").pop();
                        linkVideo = linkVideo.split("&feature")[0];
                        let linkYt = "https://www.youtube.com/embed/";
                        linkVideo = linkYt.concat(linkVideo);
                        $(".link-video").html(linkVideo);
                        $(".video1").attr("src", linkVideo);

                    
                    },
                });
            });

        

            // cek kondisi apakah ada di halaman matari atau halaman kuis untuk membuat tombol menjadi anchor
            let category = $("#category").val();
            if (category == "kuis") {
                let video = $('#video').val();
                $.ajax({
                    url: "https://lms.lazy2.codes/public/api/course/video/" + video,
                    type: "GET",
                    dataType: "JSON",
                    success: function(result) {
                        $('.judul-kuis').html('Kuis ' + result.title);
                        $('.btn-preview-strat-quiz').attr('href', '/course/materi/' + course);
                    }
                })
                $(".btn-materi").attr("href", '/course/materi/' + course);                
            }

            $(".hover-purple").hover(function() {
                $(this).addClass("active");
            });
            $(".hover-purple").mouseleave(function() {
                $(this).removeClass("active");
            });
            $("img").bind("error", function() {
                $(this).attr("src", "/img/skeleton2.gif");
            });

            $(".accordion-button-primary").click(function() {
                $(".accordion-button-primary").removeClass(
                    "bg-purple text-white active"
                );
                $(this).removeClass("bg-white text-dark").addClass("active");
            });
        },
    });
});