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

    <?= $this->renderSection('content'); ?>


    <script src="/asset/custom_vendor/bootstrap5/js/bootstrap.bundle.min.js"></script>
    <script src="/asset/custom_vendor/fontawesome612/js/all.min.js"></script>


    <script>
        $(document).ready(function() {
            // scroll link
            let lastId,
                topMenu = $('#navbar-nav'),
                topMneuHeight = topMenu.outerHeight() + 1,
                menuItems = topMenu.find('a'),
                scrollItems = menuItems.map(function() {
                    let item = $($(this).attr('href'));
                    if (item.length) {
                        return item;
                    }
                });
            menuItems.click(function(e) {
                let href = $(this).attr('href'),
                    offsetTopo = hreff === "#" ? 0 :
                    $(href).offset().top - topMneuHeight + 1;

                $('html,body').stop().animate({
                    scrollTop: offsetTop
                }, 850);
                e.preventDefault();
            })

        });
    </script>

    <script src="/js/swevel.js"></script>



</body>

</html>