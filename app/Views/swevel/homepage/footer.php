<section id="footer">
    <div class="container pt-5 pb-5">
        <div class="row">
            <div class="col-lg-5">
                <h2 class="lh-lg">Make it different</h2>
                <p class="text-justify">Sevel Universal Media prioritize System End User and gives creative solution IT. PT. Swevel Universal Media focus in WEB Developer and Mobile Smartphone Application</p>
            </div>
            <div class="col-lg-1"></div>
            <div class="col-lg-2">
                <ul class="list-unstyled">
                    <li><a class="text-decoration-none text-dark" href="<?= ($title == 'Swevel') ? '#about-us' : '/#about-us'; ?>">About Us</a></li>
                    <li><a class="text-decoration-none text-dark" href="<?= ($title == 'Swevel') ? '#service' : '/#service'; ?>">Service</a></li>
                    <li><a class="text-decoration-none text-dark" href="<?= ($title == 'Swevel') ? '#portofolio' : '/#portofolio'; ?>">Portofolio</a></li>
                    <li><a class="text-decoration-none text-dark" href="<?= ($title == 'Swevel') ? '#customer-review' : '/#customer-review'; ?>">Testimoni</a></li>
                    <li><a class="text-decoration-none text-dark" href="/faq">FAQ</a></li>
                    <li><a class="text-decoration-none text-dark" href="<?= ($title == 'Swevel') ? '#contactUs' : '/#contactUs'; ?>">Contact Us</a></li>
                </ul>
            </div>
            <div class="col-lg-4 text-center">
                <div class="footer-logo mt-3">
                    <img src="/img/logo-swevel.png" alt="" style="max-width: 200px;">
                </div>
                <div class="footer-sosmed mt-5">
                    <?php foreach ($kontak as $x) : ?>
                        <a href="<?= $x['description']; ?>" target="_blank" class="mx-2 text-dark h4"><?= $x['icon']; ?></a>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="coba-circle circle-1"></div>
</section>