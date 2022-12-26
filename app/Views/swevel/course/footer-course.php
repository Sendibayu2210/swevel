<section id="footer">
    <div class="container pt-5 pb-5">
        <div class="row">
            <div class="col-lg-5">
                <h2 class="lh-lg">PT Swevel Universal Media</h2>
                <div class="text-justify">Sevel Universal Media mengutamakan System End User dan memberikan solusi kreatif TI. PT. Swevel Universal Media fokus pada WEB Developer dan Mobile Smartphone Application</div>
            </div>
            <div class="col-lg-1"></div>
            <div class="col-lg-2">
                <ul class="list-unstyled" id="link">
                    <li><a class="text-decoration-none text-dark" href="/course">Kursus</a></li>
                    <li><a class="text-decoration-none text-dark" href="/training">Pelatihan</a></li>
                    <li><a class="text-decoration-none text-dark" href="/pendampingan">Pendampingan</a></li>                    
                </ul>
            </div>
            <div class="col-lg-4 text-center">
                <div class="footer-logo mt-3 mb-4">
                    <a href="/"><img src="/img/swevel-logo.png" alt="" style="max-width: 220px;"></a>
                </div>
                <div class="footer-sosmed">
                    <?php foreach ($kontak as $x) : ?>
                        <?php if($x['name'] != 'location-dot' && $x['name'] != 'envelope') :  ?>
                            <a href="<?= $x['description']; ?>" target="_blank" class="mx-2 text-dark h4"><?= $x['icon']; ?></a>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>    
</section>
<section id="footer-training">
    <div class="container">
        <div class="text-center p-4 text-purple-100 fw-bold">
            PT Swevel Universal Media | <?= date('Y') ?>
        </div>
    </div>
</section>