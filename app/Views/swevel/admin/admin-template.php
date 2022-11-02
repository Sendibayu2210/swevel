<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
    <link rel="shortcut icon" href="/img/logo-swevel-top2.png" type="image/x-icon">
    <script src="/asset/custom_vendor/jquery/jquery-3.6.1.min.js"></script>
    <!-- <script src="/js/classic.ckeditor.js"></script> -->
    <script src="https://cdn.ckeditor.com/ckeditor5/35.1.0/classic/ckeditor.js"></script>

    <link rel="stylesheet" href="/asset/custom_vendor/bootstrap5/css/bootstrap.min.css">
    <link rel="stylesheet" href="/asset/custom_vendor/fontawesome612/css/all.css">
    <link rel="stylesheet" href="/asset/css/admin.css">
    <link rel="stylesheet" href="/css/swevel_style.css">

    <link href="/css/bootstrap-datepicker.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;1,300&display=swap" rel="stylesheet">


</head>

<body>
    <div class="admin-menu">
        <?= $this->include('swevel/admin/admin-sidebar'); ?>

        <div class="main">
            <header class="main-toolbar">
                <div class="row w-100">
                    <div class="col-sm-12 p-0 align-items-center" style="display:inline-flex">
                        <span class="menu-toggle h-100" role="button"><i class="fa-solid fa-bars"></i></span>
                        <i id="search-phone" class="fa-solid fa-magnifying-glass ms-3" role="button"></i>
                        <form id="search-toolbar" class="ms-auto show" role="search">
                            <button class="btn" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                            <input class="form-control" type="text" placeholder="search here" aria-label="Search">
                        </form>
                        <a href="/dashboard" class="swevel-brand ms-auto">Swevel</a>
                    </div>
                </div>
            </header>

            <div class="main-content">
                <?= $this->renderSection('content'); ?>
            </div>
        </div>

    </div>


    <script src="/asset/custom_vendor/bootstrap5/js/bootstrap.bundle.min.js"></script>
    <script src="/asset/js/admin.js"></script>
    <script src="/js/swevel.js"></script>

</body>

</html>