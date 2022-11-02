<main id="menu-course-training">
    <section>
        <div class="container">
            <div class="d-flex justify-content-center text-center">            
                <a class="btn btn-category text-decoration-none mx-2 h3" href="/course" role="button">Course</a>                            
                <a class="btn btn-category text-decoration-none mx-2 h3" href="/event" role="button">Event</a>                            
                <a class="btn btn-category text-decoration-none mx-2 h3" href="/training" role="button">Training</a>                
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