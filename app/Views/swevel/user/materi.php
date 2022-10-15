<?= $this->extend('layout/user-template'); ?>

<?= $this->section('content'); ?>
<div class="d-flex">
    <div id="user-sidebar-materi">
        <div class="accordion accordion-flush" id="menu-materi"></div>
    </div>

    <div class="container content-materi ">
        <div class="h4 mb-5 fw-bold title"></div>
        <div class="d-flex justify-content-center loader">
            <img src="/img/loaderpurple2.gif" alt="">
        </div>
        <div class="d-flex justify-content-center">
            <iframe width="640" height="360" class="video1" src="" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="text-end mt-3 mb-4">
            <a href="#" class="text-purple me-5">Download Materi</a>
        </div>

        <div>
            <div class="fw-bold mb-4 judul-materi"></div>
            <div class="penjelasan-materi">
            </div>

            <div class="text-end mt-5 mb-5 pb-5 col-lg-11">
                <a href="#" class="btn btn-outline-purple w-150px me-2 text-purple text-decoration-none">Preview</a>
                <a href="#" class="btn btn-purple w-150px text-decoration-none">Next</a>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $.ajax({
            url: "https://lms.lazy2.codes/api/course/detail/3",
            type: "GET",
            dataType: "JSON",
            success: function(result) {

                $.each(result.video, function(i, data) {
                    $('#menu-materi').append(`
                    <div class="accordion-item mb-3 border-bottom" data-order="` + data.order + `">
                        <h2 class="accordion-header" id="flush-headingOne">
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
                        <div id="flush-collapse` + data.order + `" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#menu-materi">
                            <div class="accordion-body">
                                <ul class="list-sub-menu-materi">                                    
                                    <li class="mb-3"><a href="#" class="text-decoration-none text-dark hover-purple btn-materi" data-video="` + data.video_id + `">` + data.title + `</a></li>
                                    <li class="mb-3"><a href="#" class="text-decoration-none text-dark hover-purple">Kuis</a></li>                                        
                                </ul>
                            </div>
                        </div>
                    </div>
                    `)
                })

                // sort ascending list menu
                var $parentMenu = $('#menu-materi'),
                    $listMenu = $parentMenu.children('div.accordion-item');
                $listMenu.sort(function(a, b) {
                    var an = a.getAttribute('data-order'),
                        bn = b.getAttribute('data-order');
                    if (an > bn) {
                        return 1;
                    }
                    if (an < bn) {
                        return -1;
                    }
                    return 0;
                });
                $listMenu.detach().appendTo($parentMenu);

                $('.hover-purple').hover(function() {
                    $(this).addClass('active');
                })
                $('.hover-purple').mouseleave(function() {
                    $(this).removeClass('active');
                })
                $("img").bind("error", function() {
                    $(this).attr("src", "/img/skeleton2.gif");
                });


                $('.btn-materi').click(function() {
                    let video = $(this).data('video');
                    $.ajax({
                        url: 'https://lms.lazy2.codes/public/api/course/video/' + video,
                        type: 'GET',
                        dataType: 'JSON',
                        success: function(result) {
                            $('.loader').attr('src', '/img/skeleton4.gif');
                            $('.title').html(result.title)
                            $('.loader').removeClass('d-flex').addClass('hide')
                            let linkVideo = result.video;
                            linkVideo = linkVideo.split("&v=").pop();
                            linkVideo = linkVideo.split('&feature')[0]
                            let linkYt = "https://www.youtube.com/embed/";
                            linkVideo = linkYt.concat(linkVideo);
                            $('.link-video').html(linkVideo);
                            $('.video1').attr('src', linkVideo);
                        }
                    })


                })


                $('.accordion-button-primary').click(function() {
                    $('.accordion-button-primary').removeClass('bg-purple text-white active')
                    $(this).removeClass("bg-white text-dark").addClass('active')

                })
            }
        })

    })
</script>

<?= $this->endSection(); ?>