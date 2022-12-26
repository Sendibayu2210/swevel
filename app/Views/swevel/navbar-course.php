<nav class="navbar navbar-expand-lg bg-white">
    <div class="container">
        <a class="navbar-brand fw-bold" href="/"><img src="/img/swevel-logo.png" alt="" style="width: 110px;" ></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 w-100 justify-content-center">
                <li class="nav-item mx-1">
                    <a class="nav-link" aria-current="page" href="/course">Kursus</a>
                </li>
                <li class="nav-item mx-1">
                    <a class="nav-link" aria-current="page" href="/training">Pelatihan</a>
                </li>
                <li class="nav-item mx-1">
                    <a class="nav-link" aria-current="page" href="/pendampingan">Pendampingan</a>
                </li>
            </ul>    
            <?php if(!session()->get('swevel_email')) :  ?>
                <a href="/login" class="btn fw-bold text-purple text-decoration-none">Masuk</a>                
            <?php endif; ?>
        </div>
    </div>
</nav>