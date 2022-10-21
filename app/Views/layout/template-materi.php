<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/img/logo-swevel-top2.png" type="image/x-icon">
    <script src="/asset/custom_vendor/jquery/jquery-3.6.1.min.js"></script>
    <!-- <script src="/js/classic.ckeditor.js"></script> -->

    <link rel="stylesheet" href="/asset/custom_vendor/bootstrap5/css/bootstrap.min.css">
    <link rel="stylesheet" href="/asset/custom_vendor/fontawesome612/css/all.css">
    <!-- <link rel="stylesheet" href="/asset/css/admin.css"> -->
    <link rel="stylesheet" href="/css/swevel_style.css">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;1,300&display=swap" rel="stylesheet">

    <title><?= $title; ?></title>
</head>

<body>
    <!-- <nav class="navbar navbar-expand-lg bg-white shadow">
        <div class="container">
            <a class="navbar-brand fw-bold" href="/"><img src="/img/logo-swevel.png" alt="" style="max-width: 110px;"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-3">
                    <li class="nav-item mx-1 ms-lg-5 ps-lg-5">
                        <a class="nav-link" aria-current="page" href="<?= ($title == 'Swevel') ? '#aboutUs' : '/#aboutUs'; ?>">About Us</a>
                    </li>
                    <li class="nav-item mx-1">
                        <a class="nav-link" href="<?= ($title == 'Swevel') ?  '#service' : '/#service'; ?>">Service</a>
                    </li>
                    <li class="nav-item mx-1">
                        <a class="nav-link" href="<?= ($title == 'Swevel') ?  '#portofolio' : '/#portofolio'; ?>">Portofolio</a>
                    </li>
                    <li class="nav-item mx-1">
                        <a class="nav-link" href="<?= ($title == 'Swevel') ?  '#customer-review' : '/#customer-review'; ?>">Testimoni</a>
                    </li>
                    <li class="nav-item mx-1">
                        <a class="nav-link" href="/faq">FAQ</a>
                    </li>
                    <li class=" nav-item mx-1">
                        <a class="nav-link" href="<?= ($title == 'Swevel') ?  '#contactUs' : '/#contactUs'; ?>">Contact Us</a>
                    </li>
                    <li class="nav-item mx-1">
                        <a class="nav-link" href="/privacy">Privacy</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav> -->

    <nav class="navbar bg-white shadow">
        <div class="container">
            <a class="navbar-brand fw-bold" href="/"><img src="/img/logo-swevel.png" alt="" style="max-width: 110px;"></a>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Cari modul" id="nav-search-modul">
            </form>
        </div>
    </nav>


    <div class="d-flex">
        <div id="user-sidebar-materi">
            <div class="title-course d-flex justify-content-center text-center align-content-center p-2 pb-3 h5 text-purple fw-bold"></div>
            <div class="accordion accordion-flush" id="menu-materi"></div>
        </div>
        <div class="content-materi">
            <?= $this->renderSection('content'); ?>
        </div>
    </div>


    <script src="/asset/custom_vendor/bootstrap5/js/bootstrap.bundle.min.js"></script>
    <!-- <script src="/asset/js/admin.js"></script> -->
    <script src="/js/swevel.js"></script>
</body>

</html>