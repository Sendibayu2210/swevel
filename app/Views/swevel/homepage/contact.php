<main id="contact">
    <section id="customer-review" class="pt-5 pb-5">
        <div class="container mt-3">
            <h1><strong><span class="text-dark-purple">Customer </span><span>Review</span></strong></h1>
        </div>
        <div class="bg1 mt-5">
            <div class="container bg-transparent p-3">
                <div class="row flex-row-reverse">
                    <div class="col-sm-12 col-md-6 text-center my-auto">
                        <img src="asset/image/contactUs/img.png" alt="" width="150px">
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <p class="fs-4">
                            <span class="fw-bold">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro esse commodi.
                            </span class="fw-bold">
                        </p>
                        <div class="p">
                            <p class="fs-6">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione voluptatibus harum iusto ipsa, temporibus, recusandae sequi accusamus porro hic quibusdam sapiente rerum asperiores impedit saepe debitis ut? Voluptatibus, sapiente quae.</p>
                            <p class="fs-7">created by <span class="fw-semibold ls-05">natasyafw</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg2 mt-5">
            <div class="container bg-transparent p-3">
                <div class="row">
                    <div class="col-sm-12 col-md-6 text-center my-auto">
                        <img src="asset/image/contactUs/img.png" alt="" width="150px">
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <p class="fs-4">
                            <span class="fw-bold">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro esse commodi.
                            </span class="fw-bold">
                        </p>
                        <div class="p">
                            <p class="fs-6">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione voluptatibus harum iusto ipsa, temporibus, recusandae sequi accusamus porro hic quibusdam sapiente rerum asperiores impedit saepe debitis ut? Voluptatibus, sapiente quae.</p>
                            <p class="fs-7">created by <span class="fw-semibold ls-05">natasyafw</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg1 mt-5">
            <div class="container bg-transparent p-3">
                <div class="row flex-row-reverse">
                    <div class="col-sm-12 col-md-6 text-center my-auto">
                        <img src="asset/image/contactUs/img.png" alt="" width="150px">
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <p class="fs-4">
                            <span class="fw-bold">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro esse commodi.
                            </span class="fw-bold">
                        </p>
                        <div class="p">
                            <p class="fs-6">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione voluptatibus harum iusto ipsa, temporibus, recusandae sequi accusamus porro hic quibusdam sapiente rerum asperiores impedit saepe debitis ut? Voluptatibus, sapiente quae.</p>
                            <p class="fs-7">created by <span class="fw-semibold ls-05">natasyafw</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section id="contactUs" class="pb-5" style="background-color: #FAF6FF">
        <div class="container">
            <div class="row">
                <h1 class="mt-5 fw-bold text-center">Contact <strong>Us</strong></h1>
                <p class="text-center">Any question or Remarks? Just Write Us a Message</p>
            </div>
            <div class="card mt-5">
                <div class="card-body p-0">
                    <div class="container">
                        <div class="row">

                            <div class="col1 col-sm-12 col-md-4 bg-purple">
                                <div class="row justify-content-center text-white">
                                    <div class="col-12 text-center">
                                        <h3 class="fw-bold">Contact Information</h3>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae id rerum saepe.</p>
                                    </div>

                                    <div class="col col-11">
                                        <div class="row">
                                            <div class="col-2">
                                                <i class="fa-solid fa-phone fs-5"></i>
                                            </div>
                                            <div class="col-10">
                                                <?php foreach ($kontak as $x) : ?>
                                                    <?php if ($x['name'] == 'phone') : ?>
                                                        <span><?= $x['description']; ?></span>
                                                    <?php endif; ?>
                                                <?php endforeach; ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col col-11">
                                        <div class="row">
                                            <div class="col-2">
                                                <i class="fa-regular fa-envelope fs-5"></i>
                                            </div>
                                            <div class="col-10">
                                                <?php foreach ($kontak as $x) : ?>
                                                    <?php if ($x['name'] == 'envelope') : ?>
                                                        <span><?= $x['description']; ?></span>
                                                    <?php endif; ?>
                                                <?php endforeach; ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col col-11">
                                        <div class="row">
                                            <div class="col-2">
                                                <i class="fa-solid fa-location-dot fs-5"></i>
                                            </div>
                                            <div class="col-10">
                                                <span>Jl. H.R. Rasuna Said, Kav 3, South Jakarta, 12950 - Indonesia</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col2 col-sm-12 col-md-8">
                                <form class="row g-3 justify-content-between">
                                    <div class="col-sm-12 col-md-5">
                                        <label class="form-input-label">first name</label>
                                        <input type="text" class="form-control" placeholder="write your first name">
                                    </div>
                                    <div class="col-sm-12 col-md-5">
                                        <label class="form-input-label">last name</label>
                                        <input type="text" class="form-control" placeholder="write your last name">
                                    </div>
                                    <div class="col-sm-12 col-md-5">
                                        <label class="form-input-label">mail</label>
                                        <input type="email" class="form-control" placeholder="write your mail">
                                    </div>
                                    <div class="col-sm-12 col-md-5">
                                        <label class="form-input-label">phone</label>
                                        <input type="text" class="form-control" placeholder="08123456789">
                                    </div>
                                    <div class="col-sm-12 col-md-12">
                                        <label class="form-input-label">message</label>
                                        <textarea class="form-control" placeholder="write your message" rows="1"></textarea>
                                    </div>
                                    <div class="col-md-12">
                                        <p class="mt-3 fs-7 fw-bold">what topic you need to ask ?</p>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="softwareDevelopment">
                                            <label class="form-check-label" for="inlineRadio1">software development</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="learningManagement">
                                            <label class="form-check-label" for="inlineRadio2">learning management</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" checked name="inlineRadioOptions" id="inlineRadio3" value="other">
                                            <label class="form-check-label" for="inlineRadio3">other</label>
                                        </div>
                                    </div>
                                    <div class="col-12 text-end mt-5 sendMsg">
                                        <button id="btnSend" type="submit" class="btn btn-dark-purple btn-sm text-white fw-bolder rounded-pill ps-4 pe-4">SEND</button>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>