<?= $this->extend("layout/template"); 
$this->section('content'); ?>
<?= $this->include('swevel/navbar'); ?>
<?php
function circle(){makeCircle();}
function circle1(){makeCircle();}
?>

<style>
   
</style>        


<div class="position-relative">
    <!-- <div class="bg-homepage-swevel"></div> -->
    <div id="homepage-page-top">
        <div class="container pb-5">
            <div class="row my-5 py-5">
                <div class="col-lg-8 d-flex align-items-center pb-5">
                    <div class="pb-5">
                        <div class="fw-bold h1 mt-5 mb-4">One of <span class="ch_color">Information Technology</span> Service Industry</div>
                        <p class="">PT. Swevel Universal Media merupakan salah satu Industri Jasa Teknologi Informasi yang memberikan kualitas service excellence. Titik produk PT. Swevel Universal Media mengutamakan System End User dan memberikan solusi kreatif TI. PT. Swevel Universal Media fokus pada WEB Developer dan Mobile Smart Phone Application.</p>
                    </div>
                </div>
            </div>    
            <div class="homepage-page-top-img-right hide-md">        
                <img src="/img/GambarTentang.png" class="max-width-400" alt="...">
                <div class="circle-3"><?= circle(); ?></div>        
            </div>
        </div>   
    </div>
    <div id="tentang">
        <div id="aboutUs" class="page-2 pb-10">
            <div class="container">
            <div class="row">
                <div class="col-lg-5 d-flex justify-content-end">
                    <div class="semi-circle justify-content-center">
                        <img src="/img/fsdk.png" alt="" class="img">                    
                        <img src="/img/Group 2317.png" alt="" class="bg">                                        
                    </div>                
                </div>
                <div class="col-lg-6">
                    <?php foreach ($profile as $x) : ?>
                        <div class="card card-profile mb-4 border-0 shadow ">
                            <div class="card-body">
                                <div class="row btn-card-profile">                                
                                    <div class="h4 mt-2">PT Swevel Universal Media</div>
                                </div>
                                <div class="deskripsi-profile mt-3">
                                    <div><?= $x['description']; ?></div>
                                </div>
                            </div>                        
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="col-lg-1"></div>
            </div>
        </div>
    </div>
    
</div>

<section id="service" class="py-5">
    <div class="container pt-5">
        <div class="text-center mb-5 pb-5 ">
            <h1 class="fw-bold" style="letter-spacing: 0px;"><span class=" text-purple">Layanan</span> Kami</h1>
            <div class="w-75 d-flex justify-content-center mx-auto">
                Kami menyediakan berbagai jasa konsultasi bidang konstruksi dan instrumen pembelajaran terkait BIM (Building Information Modelling) bagi para akademisi atau engineer muda professional
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 mb-4 d-flex justify-content-lg-end justify-content-md-center justify-content-sm-center d-flex justify-content-center">
                <a href="/training" class="text-decoration-none text-dark" data-aos="zoom-in-up">
                    <div class="card card-service shadow mb-md-4 mb-sm-4 mx-3">
                        <div class="card-body text-center">
                            <h3 class="card-title">Pelatihan Teknik</h3>
                            <p class="card-text">Ikuti berbagai kursus dan pelatihan terkait BIM yang akan difasilitasi oleh mentor handal yang akan membantu menaikkan level keahlian Anda</p>
                        </div>
                        <img src="/img/kostruksi.webp" class="card-img-bottom" alt="...">
                    </div>
                </a>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 mb-4 d-flex justify-content-lg-start justify-content-md-center justify-content-sm-center d-flex justify-content-center">
                <a href="/pendampingan" class="text-decoration-none text-dark" data-aos="zoom-in-up">
                    <div class="card card-service shadow mb-md-4 mb-sm-4 mx-3">
                        <img src="/img/konsultasi.jpg" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                            <h3 class="card-title">Konsultasi Proyek</h3>
                            <p class="card-text">Dukungan tenaga ahli dan tim teknis yang kompeten dan tersertifikasi yang siap membantu menyelesaikan proyek Anda lebih cepat</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<div class="container" id="course">
    <div class="row">
        <div class="col-lg-6">
            <div class="text-purple h1 fw-bold position-absolute">Kursus</div>
        </div>        
    </div>    
    <div class="d-flex justify-content-center">                
        <div class="spinner-border text-purple skeleton" role="status"><span class="visually-hidden">Loading...</span></div>
    </div>
    <div id="card-list-course" class="row mt-5 pt-5"></div>
    <input type="hidden" name="" id="limit-course" value="3">
    <input type="hidden" id="input-categ" value="semua" readonly>
    <div class="d-flex justify-content-center mt-3">
        <a href="/course" class="btn btn-purple px-5 btn-more-course text-light">Lihat semua</a>
    </div>
</div>

<section id="portofolio">
    <div class="container mb-5 pb-5 pt-5 mt-5">
        <div class="row">
            <div class="col-lg-6 d-sm-none d-lg-block d-md-none position-relative">
                <img src="/img/GroupImg.png" alt="" class="decoration" style="z-index: 5;">
            </div>
            <div class="col-lg-6 text-end">
                <h2 class="text-purple fw-bold">Portofolio</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem reiciendis dolorum doloremque eius facilis voluptatum corporis.</p>
            </div>
        </div>
        <div class="image-portofolio">
            <div class="row">
                <?php foreach($portofolio_limit as $porto) :  ?>
                    <div class="col-lg-3 position-relative" >
                        <img src="/img/portofolio/<?= $porto['gambar']; ?>" class="w-100 br-15 image-portofolio" alt="" data-bs-toggle="modal" data-bs-target="#modal-view-portofolio">
                        <div class="small text-center judul-portofolio hide"><?= $porto['judul']; ?></div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<!-- Modal view portofolio -->
<div class="modal fade" id="modal-view-portofolio" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content bg-light">            
            <div class="modal-body position-relative">
               <img src="" alt="" class="img-view-portofolio w-100">
            </div>                
        </div>
    </div>
</div>




<section id="milestone">
    <div class="mt-5 container pt-5 pb-5">
        <div class="h1 text-center mb-5 text-purple fw-bold">Milestone</div>
        <?php foreach ($milestoneLimit as $x) : ?>
            <div class="row milestone-content">
                <div class="col-lg-2 col-md-12 col-sm-12 text-lg-end text-md-center text-sm-center fw-bold h4 year-milestone"><?= $x['year']; ?></div>
                <div class="col-lg-1 col-md-12 col-sm-12 box-line d-sm-none d-md-none d-lg-block">
                    <div class="line-milestone-1"></div>
                    <div class="bead"></div>
                    <div class="line-milestone-2"></div>
                </div>
                <div class="col-lg-3 col-md-12 col-sm-12 text-center"><img src="/img/milestone/<?= $x['image']; ?>" alt="" style="max-width: 10rem;border-radius: 15px;"></div>
                <div class="col-lg-5 col-md-12 col-sm-12 text-lg-start text-md-center text-sm-center"><?= $x['description']; ?></div>
            </div>
        <?php endforeach; ?>
        <div class="text-center mt-4">
            <button class="btn btn-purple btn-more-milestone" data-bs-toggle="modal" data-bs-target="#modalMilestone">Lihat Semua Milestone</button>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="modalMilestone" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-scrollable modal-fullscreen-md-down">
            <div class="modal-content modal-content-milestone bg-dark-blue">
                <div class="modal-header text-white border-0">
                    <h5 class="modal-title" id="exampleModalLabel"></h5>
                    <button type="button" class="btn text-white border-0" data-bs-dismiss="modal"><i class="fa-solid fa-xmark me-2"></i> Tutup</button>
                </div>
                <div class="modal-body">
                    <div class="text-white">
                        <div class="h1 text-center mb-5 text-purple fw-bold">Milestone</div>
                        <?php foreach ($milestone as $y) : ?>
                            <div class="row milestone-content">
                                <div class="col-lg-2 col-md-12 col-sm-12 text-lg-end text-md-center text-sm-center fw-bold h4"><?= $y['year']; ?></div>
                                <div class="col-lg-1 col-md-12 col-sm-12 box-line d-sm-none d-md-none d-lg-block">
                                    <div class="line-milestone-1"></div>
                                    <div class="bead"></div>
                                    <div class="line-milestone-2"></div>
                                </div>
                                <div class="col-lg-3 col-md-12 col-sm-12 text-lg-end text-md-center text-sm-center"><img src="/img/milestone/<?= $y['image']; ?>" alt="" style="max-width: 10rem;border-radius: 15px;"></div>
                                <div class="col-lg-5 col-md-12 col-sm-12 mb-5 text-lg-start text-md-center text-sm-center"><?= $y['description']; ?></div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
</section>

<section id="article-homepage" class="pt-5 mb-5 pb-5">
    <div class="container pt-5">
        <div class="row">
            <div class="col-lg-4">
                <h1 class="text-purple">
                     <span class="fw-bold">Artikel</span><span> Terbaru</span>
                    <p> Swevel</p>
                </h1>
            </div>
            <div class="col-lg-8 d-sm-none d-lg-block position-relative">
                <img src="/img/GroupImg.png" alt="" class="decoration">
            </div>
        </div>
        <div class="row mt-5 pt-5 justify-content-center">
            <?php foreach ($artikel as $x) : ?>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-sm-4 d-flex">
                    <a href="/detail-artikel/<?= $x['slug']; ?>" class="text-decoration-none text-dark w-100 d-flex">
                        <div class="card card-article border-0 mx-2 cursor-pointer shadow br-15 position-relative">
                            <img src="/img/artikel/<?= $x['poster']; ?>" class="card-img-top" alt="...">
                            <div class="card-body px-0 px-4">
                                <div class="text-center"><?= $x['judul']; ?></div>
                                <!-- <p class="card-text"><?= substr($x['isi_artikel'], 0, 20); ?></p> -->
                            </div>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<link rel="stylesheet" href="/css/splide.min.css">

<section id="team" class="pt-5">
    <div class="container">        
        <div class=" pt-5 mb-4">
            <div class="row text-white">
                <div class="col-lg-6">
                    <h1 class="text-white lh-base"><span class="fw-bold">Pengalaman & Tim Profesional</span> Swevel</h1>
                </div>
                <div class="col-lg-6">
                    <p>PT. Swevel Universal Media merupakan salah satu Industri Jasa Teknologi Informasi yang memberikan kualitas service excellence. Titik produk PT. <br><br>
                    Swevel Universal Media mengutamakan System End User dan memberikan solusi kreatif TI. PT. Swevel Universal Media fokus pada WEB Developer dan Aplikasi Smartphone.</p>   
                </div>
            </div>
        </div>

        <div class=" pt-5 pb-5">            
             <div class="team-carousel row">        
                <?php foreach ($team as $x) : ?>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="cell">
                        <img src="/img/team/<?= $x['image']; ?>" alt="" class="img-primary">
                    </div>
                    <div class="team-deskripsi">
                        <p class="fw-bold text-purple-100"><?= $x['nama']; ?></p>
                        <p><?= $x['jabatan']; ?></p>
                    </div>
                </div>
                <?php endforeach; ?>                
            </div>          
        </div>
    </div>
</section>

<section id="client">
    <div class="container pt-5">
        <div class="text-center mb-5 mt-4">
            <h2 class="text-purple-100"><span class="fw-bold">Klien</span> Kami</h2>
            <p>Kolaborasi dengan berbagai perusahaan </p>
        </div>
        <div class="pb-7">
            <div class="pb-5 row client-carousel">           
                <?php foreach($klien as $k) : ?>
                    <div class="col-lg-3 col-md-6 cell text-center">                    
                        <img src="/img/klien/<?= $k['gambar']; ?>" alt="" class="img-primary">                            
                    </div>
                <?php endforeach; ?>
            </div>   
        </div>              
    </div>
</section>

<main id="contact">
    <section id="customer-review" class="pt-5 pb-5">
        <div class="container mt-3">
            <h1 style="letter-spacing: 0px;"><strong><span class=" text-dark-purple">Ulasan</span><span> Pelanggan</span></strong></h1>
        </div>
        <div class="bg1 mt-5" data-aos="zoom-in-right">
            <div class="container bg-transparent p-3">
                <div class="row flex-row-reverse">
                    <div class="col-sm-12 col-md-12 col-lg-6 text-center my-auto image-customer-review">
                        <img src="asset/image/contactUs/img.png" alt="" width="200px">
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-6">
                        <p class="fs-4">
                            <span class="fw-bold">
                                Pembelajaran Kursus yang bagus dan berbobot
                            </span class="fw-bold">
                        </p>
                        <div class="p">
                            <p class="fs-6"><i>"Kursus pembelajaran menyajikan materi yang jelas dan lengkap disertai video pembelajaran lagi."</i></p>
                            <p class="fs-7">dibuat oleh <span class="fw-semibold ls-05">natasya</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg2 mt-5" data-aos="zoom-in-left">
            <div class="container bg-transparent p-3">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-6 text-center my-auto image-customer-review">
                        <img src="asset/image/contactUs/img.png" alt="" width="200px">
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-6">
                        <p class="fs-4">
                            <span class="fw-bold">
                                Portofolio proyek PT Swevel terjamin kualitasnya.
                            </span class="fw-bold">
                        </p>
                        <div class="p">
                            <p class="fs-6"><i>"Dilihat dari foto portofolio pada website PT Multi Visi Kaya memang perusahaan yang kompeten dan memiliki banyak hasil kerja yang memuaskan disetiap klien pelanggan."</i></p>
                            <p class="fs-7">dibuat oleh <span class="fw-semibold ls-05">romanoff</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg1 mt-5" data-aos="zoom-in-right">
            <div class="container bg-transparent p-3">
                <div class="row flex-row-reverse">
                    <div class="col-sm-12 col-md-12 col-lg-6 text-center my-auto image-customer-review">
                        <img src="asset/image/contactUs/img.png" alt="" width="200px">
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-6">
                        <p class="fs-4">
                            <span class="fw-bold">
                                Fitur website yang mudah digunakan dan terlihat menarik
                            </span class="fw-bold">
                        </p>
                        <div class="p">
                            <p class="fs-6"><i>"Saya sebagai pengguna baru dalam menggunakan website ini tidak merasa kesulitan dan paham dengan fitur-fitur yang ada dalam website karena websitenya yang menarik dan responsif"</i></p>
                            <p class="fs-7">dibuat oleh <span class="fw-semibold ls-05">hackeye</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contactUs" class="pb-5">
        <div class="container">
            <div class="row">
                <h1 class="mt-5 fw-bold text-center" style="letter-spacing: 0px;"><span class=" text-dark-purple">Kontak</span> Kami</h1>
            </div>
            <div class="card mt-5 border-0 shadow br-0">
                <div class="card-body p-0">
                    <div class="container">
                        <div class="row">
                            <div class="col1 col-sm-12 col-md-12 col-lg-4 bg-purple">
                                <div class="row justify-content-center text-white">
                                    <div class=" text-center mb-4">
                                        <h3 class="fw-bold">Informasi Kontak</h3>
                                        <p>Ada pertanyaan atau Komentar? Cukup Tulis Pesan kepada Kami</p>
                                    </div>
                                    
                                    <?php foreach ($kontak as $k) : ?>
                                        <?php if($k['name'] == 'phone') : ?>                                        
                                            <div class="row mb-3">
                                                <div class="col-2">
                                                    <?= $k['icon']; ?>
                                                </div>
                                                <div class="col-10">
                                                    <span><?= $k['description']; ?></span>
                                                </div>
                                            </div>                              
                                        <?php endif; ?>                                          
                                    <?php endforeach; ?>
                                    <?php foreach ($kontak as $k) : ?>
                                        <?php if($k['name'] == 'envelope') : ?>                                        
                                            <div class="row mb-3">
                                                <div class="col-2">
                                                    <?= $k['icon']; ?>
                                                </div>
                                                <div class="col-10">
                                                    <span><?= $k['description']; ?></span>
                                                </div>
                                            </div>                              
                                        <?php endif; ?>                                          
                                    <?php endforeach; ?>
                                    <?php foreach ($kontak as $k) : ?>
                                        <?php if($k['name'] == 'location-dot') : ?>                                        
                                            <div class="row mb-3">
                                                <div class="col-2">
                                                    <?= $k['icon']; ?>
                                                </div>
                                                <div class="col-10">
                                                    <span><?= $k['description']; ?></span>
                                                </div>
                                            </div>                              
                                        <?php endif; ?>                                          
                                    <?php endforeach; ?>                                                            
                                </div>
                            </div>

                            <div class="col2 col-sm-12 col-md-12 col-lg-8">
                                <form class="row p-5" method="post" id="form-kirim-faq">                                    
                                    <div class="mb-3">
                                        <label class="">Nama <sup class="text-danger">*</sup></label>
                                        <input type="text" class="form-control" name="nama" id="nama" placeholder="">
                                        <div class="invalid-feedback nama"></div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="">Email <sup class="text-danger">*</sup></label>
                                        <input type="email" class="form-control" name="email" id="email" placeholder="">
                                        <div class="invalid-feedback email"></div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="">Telepon</label>
                                        <input type="text" class="form-control" name="telepon" id="telepon" placeholder="">
                                    </div>
                                    <div class="mb-3">
                                        <label class="">Pesan <sup class="text-danger">*</sup></label>
                                        <textarea class="form-control" placeholder="" name="pesan" id="pesan" rows="1"></textarea>
                                        <div class="invalid-feedback pesan"></div>
                                    </div>
                                    <div class="col-md-12">
                                        <p class="mt-3 fs-7 fw-bold">Apa topik yang ingin ditanyakan?</p>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="kategori" id="kursun" value="kursus">
                                            <label class="form-check-label cursor-pointer" for="kursun">Kursus</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="kategori" id="pelatihan" value="pelatihan">
                                            <label class="form-check-label cursor-pointer" for="pelatihan">Pelatihan</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" checked name="kategori" id="lainnya" value="lainnya">
                                            <label class="form-check-label cursor-pointer" for="lainnya">lainnya</label>
                                        </div>
                                    </div>
                                    <div class="col-12 text-end mt-5 sendMsg">
                                        <button id="btnSend" type="button" class="btn btn-dark-purple btn-sm text-white rounded-pill ps-4 pe-4 btn-kirim-faq">Kirim</button>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<script>
    $(document).ready(function() {

        $('body').css('overflow-x','hidden');  
          // landingpage
        let heightPageTop = $("#homepage-page-top")[0].scrollHeight;
        let heightTentang = $("#tentang")[0].scrollHeight;
        $(".bg-homepage-swevel").css('height',(heightPageTop+heightTentang));
        // end landingpage     

        // portofolio
        $('.image-portofolio').click(function(){
            let src = $(this).attr('src');
            $(".img-view-portofolio").attr('src',src);
        });
        $(".image-portofolio img").hover(function(){
            let widthImg = $(this)[0].scrollWidth;            
            $(this).parent().find('.judul-portofolio').addClass('active').css('width',widthImg);            
        });
        $(".image-portofolio img").mouseleave(function(){
            $(this).parent().find('.judul-portofolio').removeClass('active');
        });
        // end portofolio


        // kirim pesan faq
        $(".btn-kirim-faq").click(function(){
            $(this).html(`<div class="spinner-border text-purple skeleton" role="status"><span class="visually-hidden">Loading...</span></div>`);
            $("#form-kirim-faq input").removeClass('is-invalid');
            let nama = $('#form-kirim-faq #nama').val();
            let email = $('#form-kirim-faq #email').val();            
            let pesan = $('#form-kirim-faq #pesan').val();

            if(nama == ''){
                $("#form-kirim-faq #nama").addClass('is-invalid');
                $(".invalid-feedback.nama").html("Nama harus diisi");
            }else if(email == ''){
                $("#form-kirim-faq #email").addClass('is-invalid');
                $(".invalid-feedback.email").html("Email harus diisi");
            }else if(pesan == ''){
                $("#form-kirim-faq #pesan").addClass('is-invalid');
                $(".invalid-feedback.pesan").html("Pesan harus diisi");
            }else{
                $.ajax({
                    url : '/kirim-faq',
                    type : 'post',
                    dataType : 'json',
                    data : $('#form-kirim-faq').serialize(),
                    success: function(result){                        
                        if(result.code == '200'){
                            $('.btn-kirim-faq').html('Pesan berhasil dikirm');
                            $('#form-kirim-faq #nama, #email, #telepon, textarea').val('')

                            setTimeout(function(){
                                $('.btn-kirim-faq').html('Kirim');
                            },5000);
                        }else{
                            $('.btn-kirim-faq').html('Pesan gagal dikirm');
                            setTimeout(function(){
                                $('.btn-kirim-faq').html('Kirim');
                            },5000);
                        }
                    }
                })
            }
        })
        // end kirim pesan      

        // Milestone
        // mengatur tinggi garis
        let heightBoxLine = $(".row.milestone-content")[0].scrollHeight;
        let heightBead = $(".bead")[0].scrollHeight;
        $('.line-milestone-1').css('height', (heightBoxLine / 2) - heightBead);
        $('.line-milestone-2').css('height', (heightBoxLine / 2) + heightBead);
        $('.year-milestone').css('padding-top', (heightBoxLine / 2) - (heightBead*2))        

        $(".milestone-content").hover(function() {
            $(".milestone-content").removeClass("active");
            $(this).addClass("active");            
            $(this).find('.bead').addClass('active');
            $('.line-milestone-1, .line-milestone-2');
        });
        $('.milestone-content').mouseleave(function() {
            $('.bead').removeClass('active');
        });
        $('.modal-content-milestone').css('border-radius', '20px'); 
        setTimeout(function(){
            getCourse('https://stufast.id/api/course/latest/author/2?limit=3');  
        },1500);
        // end milestone
    })    
</script> 
 <script>
    $('.team-carousel, .client-carousel').flickity({
      // options
      cellAlign: 'left',
      // contain: true
      wrapAround:true,
      freeScroll:true,
    });

</script>   
<script src="/js/course.js"></script>
<?= $this->include('swevel/homepage/footer'); ?>


<?= $this->endSection(); ?>


