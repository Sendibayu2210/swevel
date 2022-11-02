<style>
    .sidebar-nav-item:hover{
        display:block;
        background:white;
        color: purple;
        padding: 12px 10px 0 15px;
        margin: 0 15px;
        border-radius:15px;

    }
</style>

<div class="sidebar">
    <header class="row">
        <div class="col p-0">
            <a href="#!" class="menu-toggle"><i class="fas fa-xmark"></i></a>
        </div>
    </header>
    <nav class="sidebar-nav-list pb-5">
        <div class="sidebar-top">
            <div class="row">
                <div class="col-6">
                    <a href="#1"><i class="fa-regular fa-user"></i></a>
                </div>
                <div class="col-6">
                    <a href="#2"><i class="fa-solid fa-ellipsis-vertical"></i></a>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-12 text-center">
                    <img src="../asset/image/event/pablo.png" width="200px" alt="...">
                </div>
                <div class="col-12 col-md-12 profile text-white text-center mt-2">
                    <h6 class="fw-bold"><?= $user['nama']; ?></h6>
                    <p class="mt-1"><?= $user['email']; ?></p>
                </div>
            </div>
        </div>
        <div class="mx-auto mt-3" style="max-height: 10px;width:80%">
            <div class="sidebar-nav-item text-center" style="border-top: 1.5px solid #fff"></div>
        </div>
        <a href="/dashboard" class="sidebar-nav-item active">Dashboard <i class="fa-solid fa-angle-right."></i></a>
        <a href="/profile" class="sidebar-nav-item">Tentang Kami <i class="fa-solid fa-angle-right."></i></a>
        <div class="sidebar-nav-dropdown">
            <a href="#" class="sidebar-nav-item sidebar-nav-dropdown-toggle">Layanan <i class="fa-solid fa-angle-right"></i></a>
            <div class="sidebar-nav-dropdown-menu">
                <a href="/admin-event" class="sidebar-nav-dropdown-item">Event <i class="fa-solid fa-angle-right"></i></a>
                <a href="/admin-course" class="sidebar-nav-dropdown-item">Course <i class="fa-solid fa-angle-right"></i></a>
                <a href="/admin-training" class="sidebar-nav-dropdown-item">Training <i class="fa-solid fa-angle-right"></i></a>
            </div>
        </div>
        <a href="/admin-artikel" class="sidebar-nav-item">Artikel <i class="fa-solid fa-angle-right"></i></a>
        <a href="/admin-portofolio" class="sidebar-nav-item">Portfolio <i class="fa-solid fa-angle-right"></i></a>
        <a href="#" class="sidebar-nav-item">Testimoni <i class="fa-solid fa-angle-right"></i></a>
        <a href="/admin-faq" class="sidebar-nav-item">FAQ <i class="fa-solid fa-angle-right"></i></a>
        <a href="#" class="sidebar-nav-item">Kontak <i class="fa-solid fa-angle-right"></i></a>
        <a href="/pembayaran" class="sidebar-nav-item">Kelola Pembayaran <i class="fa-solid fa-angle-right"></i></a>
        <a href="/logout" class="sidebar-nav-item">Keluar</a>
    </nav>
</div>