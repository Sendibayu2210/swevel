<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<?= $this->include('swevel/navbar'); ?>
<div id="detail-kurikulum" class="mb-5 pb-5">
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-4">
                <img src="/img/Frame 69.png" alt="" style="width: 350px;">
            </div>
            <div class="col-lg-6">
                <div class="d-flex">
                    <div class="me-5">
                        <i class="fa-solid fa-star text-orange me-3"></i>
                        4.87
                    </div>
                    <div class="my-auto">
                        Android - Course
                    </div>
                </div>
                <div class="h3 fw-bold mt-4">Memulai Pemrograman dengan Kotlin</div>
                <div class="mt-3">
                    <i class="fa-solid fa-chart-simple text-purple"></i>
                    <span class="ms-3">Basic - Beginner</span>
                </div>
                <div class="mt-3">
                    <i class="fa-regular fa-clock text-purple"></i>
                    <span class="ms-3">50 Jam</span>
                </div>
                <div class="mt-3">
                    <i class="fa-solid fa-users text-secondary"></i>
                    <span class="ms-3">134 People join this course</span>
                </div>
                <div class="mt-5 lh-lg">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ullam eos magnam ad adipisci tempore beatae non molestiae magni totam aliquid.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, aut?
                </div>
            </div>
        </div>

        <div class="mt-5 pt-3">
            <div class="row mb-5">
                <div class="col-lg-4">
                    <div class="h3 fw-bold title-banefits">Benefits your get when join our course</div>
                </div>
                <div class="col-lg-8 text-end">
                    <div class="mb-3"><a href="#" class="btn btn-purple-100 ">Start Class</a></div>
                    <div><a href="#" class="btn btn-purple-100">View Silabus</a></div>
                </div>
            </div>
            <div class="row">
                <?php for ($i = 0; $i < 6; $i++) : ?>
                    <div class="col-lg-4 mb-5 d-flex">
                        <div class="row">
                            <div class="col-2">
                                <i class="fa-regular fa-clock text-purple-100"></i>
                            </div>
                            <div class="col-10">
                                <div class="fw-bold text-purple-100 h5">Sertificate</div>
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Earum praesentium totam dolores, ut autem minima illum quae. Adipisci, voluptatibus voluptas doloremque quae temporibus alias explicabo.
                            </div>
                        </div>
                    </div>
                <?php endfor; ?>
            </div>
        </div>

        <div class="mt-5">
            <div class="row">
                <div class="col-lg-6">
                    <div>
                        <div class="h5 mb-4 fw-bold">Description</div>
                        <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum, quisquam consectetur reiciendis architecto, est animi magni quidem a cumque quibusdam sit natus illo. Assumenda totam expedita nisi blanditiis vero alias esse maiores nobis, quis, architecto maxime aut. Ea neque vero culpa molestiae porro, dolores provident nisi sed laboriosam consequuntur recusandae quo, tempora ratione obcaecati, reiciendis at atque. Possimus odit ad necessitatibus eum ratione minus odio quaerat, illum suscipit sequi esse! Excepturi consequatur eum quis libero aliquid, ut suscipit deserunt sit necessitatibus laboriosam, dolores cupiditate quia? Dolorum asperiores explicabo nobis. Iusto sit excepturi assumenda. Maiores quidem sint eligendi voluptas, ullam libero?</div>
                        <div class="text-center mt-3"><a href="#" class="text-decoration-none text-dark">Selengkapnya...</a></div>
                    </div>
                    <div class="mt-5">
                        <div class="h5 mb-4 fw-bold">Instruction</div>
                        <div>Kelas ini merupakan langkah ke-satu anda untuk menjadi Android Developer.</div>
                        <div class="mt-3"><a href="#" class="text-decoration-none text-muted">langkah selanjutnya</a></div>
                        <div class="card shadow border-0 mb-lg-5 mb-md-5 mt-4">
                            <div class="card-body">
                                <div class="small mb-3">
                                    <i class="fa-solid fa-signal text-purple"></i>
                                    <span class="ms-3">Langkah <?= $i; ?></span>
                                </div>
                                <div class="fw-bold">Memulai Pemrograman dengan kotlin</div>
                                <div class="d-flex justify-content-between mt-3">
                                    <div>
                                        <i class="fa-regular fa-clock text-purple"></i>
                                        <span class="ms-3">50 Jam</span>
                                    </div>
                                    <div>
                                        <i class="fa-solid fa-star text-orange"></i>
                                        <span class="ms-3">4,8</span>
                                    </div>
                                    <div>
                                        <i class="fa-solid fa-chart-simple text-purple"></i>
                                        <span class="ms-3">Basic - Beginner</span>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between mt-4 mb-4">
                                    <div>
                                        <i class="fa-solid fa-book"></i>
                                        <span class="ms-3">119 Modul</span>
                                    </div>
                                    <div>
                                        <i class="fa-solid fa-users"></i>
                                        <span class="ms-3">134 People join this course</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-5">
                    <div class="fw-bold mb-3 h5">Perlatan Belajan</div>
                    <div>
                        <div>Spesifikasi minimal perangkat :
                            <br> processor : intel core i3 (Rekomendasi Core i5 keatas)
                            <br>Tools yang dibutuhkan saat belajar
                            <br>Intelij Idea Community
                            <br>Cara instalasi akan dijelaskan pada kelas ini
                        </div>
                    </div>
                    <div class="fw-bold mb-3 mt-5 h5">Metode Ajar</div>
                    <div>
                        Online self learning
                        <ul>
                            <li>Total jam belajar : 50 jam</li>
                            <li>Rekomendasi waktu belajar : 10 jam perminggu (selesai dalam 30 hari)</li>
                            <li>Anda tentukan sendiri berapa lama waktu yang akan digunakan untuk belajar materi kelas ini selama masih aktif terdaftar pada kelas.</li>
                        </ul>
                    </div>
                    <div class="fw-bold mb-3 mt-5 h5">Evaluasi Pembelajaran</div>
                    <div>
                        <ul>
                            <li>Ujian akhir kelas</li>
                            <li>Submission</li>
                        </ul>
                    </div>
                    <div class="fw-bold mb-3 mt-5 h5">Contributor</div>
                    <div>
                        Curriculum contributor yang membangun kelas ini
                        <?php for ($i = 0; $i < 2; $i++) : ?>
                            <div class="row mt-3">
                                <div class="col-2">
                                    <div class="card-img-circle-50">
                                        <img src="https://img.okezone.com/content/2022/05/04/33/2589370/manager-rizky-billar-sebut-rico-valentino-babak-belur-dipukuli-10-orang-TjvvVtjDZO.jpg" alt="" class="">
                                    </div>
                                </div>
                                <div class="col-10">
                                    <div>Mrs Sandy M.M</div>
                                    <div>Cloud Automation Lead - Gopay Indonesia</div>
                                </div>
                            </div>
                        <?php endfor; ?>
                    </div>
                    <div class="fw-bold mb-3 mt-5 h5">Reviewer</div>
                    <div>
                        Code reviewer yang akan me-review tugas dan kode anda :
                        <div class="d-flex justify-content-center mt-3">
                            <?php for ($i = 0; $i < 5; $i++) : ?>
                                <div class="card-img-circle-50">
                                    <img src="https://img.okezone.com/content/2022/05/04/33/2589370/manager-rizky-billar-sebut-rico-valentino-babak-belur-dipukuli-10-orang-TjvvVtjDZO.jpg" alt="" class="">
                                </div>
                            <?php endfor; ?>
                        </div>
                        <div class="mt-4"><a href="#" class="text-decoration-none text-purple">Lihat semua kontributor dan reviewer...</a></div>
                    </div>
                </div>
            </div>
        </div>

        <section id="customer-review" class="pt-5 pb-5">
            <div class="container mt-3">
                <div class="h2 text-center">Testimoni Siswa</div>
                <div class="text-center">Ribuan siswa sukses belajar di Dicoding Academy. Apa kata mereka? Berikut adalah testimoni asli mereka.</div>
            </div>
            <div class="bg1 mt-5 pt-4">
                <div class="container bg-transparent p-3">
                    <div class="row flex-row-reverse">
                        <div class="col-sm-12 col-md-6 text-center my-auto">
                            <img src="asset/image/contactUs/img.png" alt="" width="150px">
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <p class="fs-4">
                                <span class="fw-bold">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro esse commodi.
                                </span class="fw-bold">
                            </p>
                            <div class="p">
                                <p class="fs-6">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione voluptatibus harum iusto ipsa, temporibus, recusandae sequi accusamus porro hic quibusdam sapiente rerum asperiores impedit saepe debitis ut? Voluptatibus, sapiente quae.</p>
                                <p class="fs-7">created by <span class="fw-semibold ls-05">natasyafw</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="col-lg-9 mx-auto">
            <div class="mt-5 text-center h2">Silabus</div>
            <div class="text-center mb-5">Materi yang akan Anda pelajari pada kelas ini.</div>
            <div class="accordion" id="accordionPanelsStayOpenExample">
                <div class="accordion-item mb-4">
                    <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                            <div class="h4">Persipan Kelas</div>
                            <div>Memperkenalkan sejarah Kotlin, mengapa harus mempelajari Kotlin, karakteristik Kotlin, dan bagaimana Kotlin berperan dalam pengembangan aplikasi. Akan dibahas juga tentang ekosistem Kotlin.</div>
                            <div class="d-flex">
                                <div class="mt-3 me-3">
                                    <i class="fa-solid fa-file text-white"></i>
                                    <span class="ms-3">5 Artikel</span>
                                </div>
                                <div class="mt-3">
                                    <i class="fa-regular fa-clock text-purple"></i>
                                    <span class="ms-3">50 Jam</span>
                                </div>
                            </div>
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                        <div class="accordion-body">
                            <ul class="list-unstyled ps-4 lh-lg">
                                <li>Persetujuan Hak Cipta > 1 Menit</li>
                                <li>Mekanisme Belajar > 5 Menit</li>
                                <li>Persetujuan Hak Cipta > 1 Menit</li>
                                <li>Mekanisme Belajar > 5 Menit</li>
                                <li>Persetujuan Hak Cipta > 1 Menit</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item mb-4">
                    <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                            <div class="h4">Pendahuluan</div>
                            <div>Memperkenalkan sejarah Kotlin, mengapa harus mempelajari Kotlin, karakteristik Kotlin, dan bagaimana Kotlin berperan dalam pengembangan aplikasi. Akan dibahas juga tentang ekosistem Kotlin.</div>
                            <div class="d-flex">
                                <div class="mt-3 me-3">
                                    <i class="fa-solid fa-file text-white"></i>
                                    <span class="ms-3">5 Artikel</span>
                                </div>
                                <div class="mt-3">
                                    <i class="fa-regular fa-clock text-purple"></i>
                                    <span class="ms-3">50 Jam</span>
                                </div>
                            </div>
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                        <div class="accordion-body">
                            <ul class="list-unstyled ps-4 lh-lg">
                                <li>Persetujuan Hak Cipta > 1 Menit</li>
                                <li>Mekanisme Belajar > 5 Menit</li>
                                <li>Persetujuan Hak Cipta > 1 Menit</li>
                                <li>Mekanisme Belajar > 5 Menit</li>
                                <li>Persetujuan Hak Cipta > 1 Menit</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item mb-4">
                    <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                            <div class="h4">Main Course</div>
                            <div>Memperkenalkan sejarah Kotlin, mengapa harus mempelajari Kotlin, karakteristik Kotlin, dan bagaimana Kotlin berperan dalam pengembangan aplikasi. Akan dibahas juga tentang ekosistem Kotlin.</div>
                            <div class="d-flex">
                                <div class="mt-3 me-3">
                                    <i class="fa-solid fa-file text-white"></i>
                                    <span class="ms-3">5 Artikel</span>
                                </div>
                                <div class="mt-3">
                                    <i class="fa-regular fa-clock text-purple"></i>
                                    <span class="ms-3">50 Jam</span>
                                </div>
                            </div>
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                        <div class="accordion-body">
                            <ul class="list-unstyled ps-4 lh-lg">
                                <li>Persetujuan Hak Cipta > 1 Menit</li>
                                <li>Mekanisme Belajar > 5 Menit</li>
                                <li>Persetujuan Hak Cipta > 1 Menit</li>
                                <li>Mekanisme Belajar > 5 Menit</li>
                                <li>Persetujuan Hak Cipta > 1 Menit</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item mb-4">
                    <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="false" aria-controls="panelsStayOpen-collapseFour">
                            <div class="h4">Penutup</div>
                            <div>Memperkenalkan sejarah Kotlin, mengapa harus mempelajari Kotlin, karakteristik Kotlin, dan bagaimana Kotlin berperan dalam pengembangan aplikasi. Akan dibahas juga tentang ekosistem Kotlin.</div>
                            <div class="d-flex">
                                <div class="mt-3 me-3">
                                    <i class="fa-solid fa-file text-white"></i>
                                    <span class="ms-3">5 Artikel</span>
                                </div>
                                <div class="mt-3">
                                    <i class="fa-regular fa-clock text-purple"></i>
                                    <span class="ms-3">50 Jam</span>
                                </div>
                            </div>
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                        <div class="accordion-body">
                            <ul class="list-unstyled ps-4 lh-lg">
                                <li>Persetujuan Hak Cipta > 1 Menit</li>
                                <li>Mekanisme Belajar > 5 Menit</li>
                                <li>Persetujuan Hak Cipta > 1 Menit</li>
                                <li>Mekanisme Belajar > 5 Menit</li>
                                <li>Persetujuan Hak Cipta > 1 Menit</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->include('swevel/homepage/footer'); ?>
<?= $this->include('swevel/training/footer'); ?>

<?= $this->endSection(); ?>