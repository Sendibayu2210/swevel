<section id="article-homepage" class="pt-5 mb-5 pb-5">
    <div class="container pt-5">
        <div class="row">
            <div class="col-lg-8 d-sm-none d-lg-block">
                <div class="line-main-2"><?= line(); ?></div>
            </div>
            <div class="col-lg-4 text-lg-end">
                <h2 class="text-purple">
                    <span>Newest <span class="fw-bold">Article</span></span>
                    <p> of Swevel</p>
                </h2>
            </div>
        </div>
        <div class="row mt-5 justify-content-center">
            <?php for ($i = 0; $i < 3; $i++) : ?>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-sm-4">
                    <div class="card card-article border-0 mx-2">
                        <img src="https://img.business.com/w/700/aHR0cHM6Ly9pbWFnZXMuYnVzaW5lc3NuZXdzZGFpbHkuY29tL2FwcC91cGxvYWRzLzIwMjIvMDQvMDQwNzQ1NTMvMTU1NDI0NDAxMC5qcGVn" class="card-img-top" alt="...">
                        <div class="card-body px-0">
                            <h5 class="card-title">This Technology Allows a Device to Identify</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                    </div>
                </div>
            <?php endfor; ?>
        </div>
    </div>
</section>