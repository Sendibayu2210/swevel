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
                <div class="search-event mt-4">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Search">
                        <button class="btn btn-purple" type="button" id="button-addon2"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </div>
            <div class="mt-5 d-flex justify-content-center">
                <div class="mx-3">
                    <button type="button" class="btn btn-light active">Webinar</button>
                </div>
                <div class="mx-3">
                    <button type="button" class="btn btn-light">Bootcamp</button>
                </div>
                <div class="mx-3">
                    <button type="button" class="btn btn-light">Technology</button>
                </div>
                <div class="mx-3">
                    <button type="button" class="btn btn-light">Bootcamp</button>
                </div>
                <div class="mx-3">
                    <button type="button" class="btn btn-light">Bootcamp</button>
                </div>
            </div>
            <div class="row text-center mt-3">
                <p><a href="#" style="color: #5423a1;" class="text-decoration-none">more</a></p>
            </div>
        </div>
    </section>
</main>