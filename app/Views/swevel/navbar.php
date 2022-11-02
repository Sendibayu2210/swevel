<nav class="navbar navbar-expand-lg bg-white">
    <div class="container">
        <a class="navbar-brand fw-bold" href="/"><img src="/img/logo-swevel.png" alt="" style="max-width: 110px; height:50px;" ></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-3">
                <li class="nav-item mx-1 ms-lg-5 ps-lg-5">
                    <a class="nav-link" aria-current="page" href="<?= ($title == 'Swevel') ? '#about-us' : '/#about-us'; ?>">About Us</a>
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
            <?php if(!session()->get('swevel_email')) : ?>
            <div>
                <a href="/login" class="btn fw-bold text-purple text-decoration-none br-20">Login</a>                
            </div>
            <?php endif; ?>
        </div>
    </div>
</nav>