<main>
    <section>
        <div class="container">
            <div class="row text-center">
                <div class="col-category col-4 text-end">
                    <a class="btn btn-category text-decoration-none" href="/course" role="button">
                        <h2>Course.</h2>
                    </a>
                </div>
                <div class="col-category col-4">
                    <a class="btn btn-category text-decoration-none" href="/event" role="button">
                        <h2>Event.</h2>
                    </a>
                </div>
                <div class="col-category col-4 text-start">
                    <a class="btn btn-category text-decoration-none" href="/training" role="button">
                        <h2>Training.</h2>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="course-section">
        <div class="container mt-5 pt-4">
            <div class="row text-center">
                <div class="h1 fw-bold text-uppercase"><?= $title; ?></div>
            </div>

            <div class="d-flex justify-content-center">
                <form action="" method="get">
                </form>
                <div class="search-event mt-4">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="search" data-kategori="course" id="search-course-training" placeholder="Search">
                        <button class="btn btn-purple" type="button" id="btn-search-course-training">search</button>
                    </div>
                </div>

            </div>
            <div class="row text-center mt-3">
                <p class="text-purple">Tag</p>
            </div>
            <div class="mt-2 d-flex justify-content-center menu-tag">

            </div>
        </div>
    </section>
</main>