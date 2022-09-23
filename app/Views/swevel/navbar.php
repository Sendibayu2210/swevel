<nav class="navbar navbar-expand-lg bg-white">
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
            <div>
                <a href="/login" class="btn btn-purple text-decoration-none">Login</a>
                <a href="/login#register" class="btn btn-purple text-decoration-none">Register</a>
            </div>
        </div>
    </div>
</nav>