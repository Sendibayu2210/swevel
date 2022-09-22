<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="/asset/vendor/jquery/jquery-3.6.1.min.js"></script>
    <link rel="stylesheet" href="/asset/vendor/bootstrap5/css/bootstrap.min.css">
    <link rel="stylesheet" href="/asset/vendor/fontawesome612/css/all.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">
    <link rel="stylesheet" href="/asset/css/admin.css">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <title><?= $title ?></title>
</head>

<style>
    #portfolio #portfolioImg .col-12 {
        margin-bottom: 0.5rem;
        padding-top: 0;
        padding-bottom: 0;
        padding-right: 0.25rem;
        padding-left: 0.25rem;
    }

    #portfolio #inputfile {
        background-color: #ddd;
        color: #000;
        font-weight: 600;
        letter-spacing: 1px;
    }

    #portfolio input[type="date"] {
        background-color: #ddd;
        color: #000;
        letter-spacing: 3px;
    }

    #addpage span {
        color: #717171;
    }

    #form-control {
        border-radius: 10px;
    }

    #inputfile {
        border-radius: 10px;
        background-color: #773CD3;
        color: #fff;
        margin-right: 50px;
    }

    #addspeaker {
        color: black;
        font-size: 10px;
    }
</style>

<body>
    <div id="more-event" class="admin-menu">

        <div class="sidebar">
            <header class="row">
                <div class="col p-0">
                    <a href="#!" class="menu-toggle"><i class="fas fa-xmark"></i></a>
                </div>
            </header>
            <nav class="sidebar-nav-list">
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
                            <img src="/asset/image/event/pablo.png" width="200px" alt=".">
                        </div>
                        <div class="col-12 col-md-12 profile text-white text-center mt-2">
                            <h6 class="fw-bold">Administrator</h6>
                            <p class="mt-1">swevelid@gmail.com</p>
                        </div>
                    </div>
                </div>
                <div class="mx-auto mt-3" style="max-height: 10px;width:80%">
                    <div class="sidebar-nav-item text-center" style="border-top: 1.5px solid #fff"></div>
                </div>
                <a href="#" class="sidebar-nav-item active">About Us <i class="fa-solid fa-angle-right"></i></a>
                <div class="sidebar-nav-dropdown">
                    <a href="#!" class="sidebar-nav-item sidebar-nav-dropdown-toggle">Services <i class="fa-solid fa-angle-right"></i></a>
                    <div class="sidebar-nav-dropdown-menu">
                        <a href="#" class="sidebar-nav-dropdown-item active">Event <i class="fa-solid fa-angle-right"></i></a>
                        <a href="#" class="sidebar-nav-dropdown-item">Course <i class="fa-solid fa-angle-right"></i></a>
                        <a href="#" class="sidebar-nav-dropdown-item">Training <i class="fa-solid fa-angle-right"></i></a>
                    </div>
                </div>
                <a href="#" class="sidebar-nav-item">Article <i class="fa-solid fa-angle-right"></i></a>
                <a href="<?= base_url('admin/admin-portfolio'); ?>" class="sidebar-nav-item">Portfolio <i class="fa-solid fa-angle-right"></i></a>
                <a href="#" class="sidebar-nav-item">Testimoni <i class="fa-solid fa-angle-right"></i></a>
                <a href="#" class="sidebar-nav-item">FAQ <i class="fa-solid fa-angle-right"></i></a>
                <a href="#" class="sidebar-nav-item">Contact Us <i class="fa-solid fa-angle-right"></i></a>
            </nav>
        </div>

        <div class="main">
            <header class="main-toolbar">
                <div class="row w-100">
                    <div class="col-sm-12 p-0 align-items-center" style="display:inline-flex">
                        <span class="menu-toggle h-100" role="button"><i class="fa-solid fa-bars"></i></span>
                        <i id="search-phone" class="fa-solid fa-magnifying-glass ms-3" role="button"></i>
                        <form id="search-toolbar" class="ms-auto show" role="search">
                            <button class="btn" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                            <input class="form-control" type="text" placeholder="search here" aria-label="Search">
                        </form>
                        <a href="#" class="swevel-brand ms-auto">Swevel</a>
                    </div>
                </div>
            </header>
            <div class="main-content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-sm-12">

                            <div id="addpage">
                                <h3 class="h5 my-4">Add page</h3>
                                <span>Choose type of content</span>
                                <form action="" class="my-3">
                                    <select id="coc" name="addpage" class="custom-select mt-2">
                                        <option value="event">Event</option>
                                        <option value="course">Course</option>
                                        <option value="training">Training</option>
                                    </select>
                                </form>
                                <span>Choose type of service</span>
                                <form action="" class="mt-3">
                                    <select name="addpage" class="custom-select">
                                        <option value="software">Software Development</option>
                                        <option value="learning">Learning Management</option>
                                    </select>
                                </form>
                            </div>

                            <div id="title">
                                <h3 class="h5 mt-5 mb-4">Title</h3>
                                <input type="text" class="form-control" placeholder="Type your tittle" required>
                            </div>

                            <div id="main" class="p-0">
                                <h3 class="h5 mt-5 mb-4 w-100">Main Content</h3>

                                <div class="paragraf1">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Paragraf 1
                                        </label>
                                    </div>
                                    <div class="form-check ms-3">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            add photo
                                        </label>
                                    </div>
                                    <div class="ms-3 py-3">
                                        <textarea name="isi" id="isi" cols="30" rows="30" class="form-control summernote my-3"></textarea>
                                    </div>
                                </div>

                                <div class="paragraf2 mt-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Paragraf 2
                                        </label>
                                    </div>
                                    <div class="form-check ms-3">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            add photo
                                        </label>
                                    </div>
                                </div>

                                <div class="input-group input-group-sm my-3 mb-3 ms-3">
                                    <button id="inputfile" class="btn btn-sm rounded shadow-none">choose from files</button>
                                    <input type="file" class="form-control d-none" id="formfile" accept="image/*">
                                </div>

                                <div id="paragraf" class="p-0 ms-3">
                                    <textarea name="paragraf2" id="paragraf2" cols="30" rows="10" class="form-control border-0 p-4 is-invalid shadow" placeholder="ketik disini"></textarea>
                                </div>

                                <div id="price" class="row my-5 justify-content-end">
                                    <div class="col-sm-12 col-md-6">
                                        <h5>add price</h5>
                                        <div class="input-group mb-3 w-50">
                                            <span class="input-group-text fw-bold bg-transparent border-0" id="basic-addon1">Rp</span>
                                            <input type="text" class="form-control border-0 shadow-none" placeholder="35000" aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                    <div class="col-sm-8 col-md-6">
                                        <h5>add discount</h5>
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="input-group">
                                                    <span class="input-group-text fw-bold bg-transparent border-0" id="basic-addon1">Rp</span>
                                                    <input type="text" class="form-control border-0 shadow-none" placeholder="35000" aria-label="Username" aria-describedby="basic-addon1">
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="input-group">
                                                    <span class="input-group-text fw-bold bg-transparent border-0" id="basic-addon1">or %</span>
                                                    <input type="text" class="form-control border-0 shadow-none" placeholder="50" aria-label="Username" aria-describedby="basic-addon1">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-7 text-end">
                                        <div class="input-group w-75 ms-auto">
                                            <h6 class="w-100 text-start my-3 ps-2"> disc period</h6>
                                            <div class="row">
                                                <div class="col-sm-12 col-md-6 p-0">
                                                    <div class="input-group">
                                                        <span class="input-group-text fw-bold bg-transparent border-0" id="basic-addon1">from</span>
                                                        <input type="date" class="form-control border-0 shadow-none" placeholder="35000" aria-label="Username" aria-describedby="basic-addon1">
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-md-6 p-0">
                                                    <div class="input-group">
                                                        <span class="input-group-text fw-bold bg-transparent border-0 text-start" id="basic-addon1">to</span>
                                                        <input type="date" class="form-control border-0 shadow-none" placeholder="35000" aria-label="Username" aria-describedby="basic-addon1">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div id="timeline">
                                    <div class="row mt-5">
                                        <div class="col-sm-12 col-md-8">
                                            <h5>activities timeline</h5>
                                            <div class="row">
                                                <div class="col-sm-12 col-md-6">
                                                    <div class="input-group mt-3">
                                                        <span class="input-group-text fw-bold bg-transparent border-0" id="basic-addon1">from</span>
                                                        <input type="date" class="form-control border-0 shadow-none" placeholder="35000" aria-label="Username" aria-describedby="basic-addon1">
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-md-6">
                                                    <div class="input-group mt-3">
                                                        <span class="input-group-text fw-bold bg-transparent border-0 text-start" id="basic-addon1">to</span>
                                                        <input type="date" class="form-control border-0 shadow-none" placeholder="35000" aria-label="Username" aria-describedby="basic-addon1">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 col-md-8 mt-5 text-center">
                                            <textarea name="timeline" id="timeline" cols="30" rows="3" class="form-control border-0 mb-3 p-4 shadow" placeholder="keterangan timeline"></textarea>
                                            <button class="btn btn-sm btn-secondary rounded shadow-none">add timeline</button>
                                        </div>
                                    </div>
                                </div>

                                <div id="category" class="p-0">
                                    <h3 class="h5 my-4">Categories</h3>
                                    <form action="">
                                        <select name="category" class="custom-select">
                                            <option value="webinar">Webinar</option>
                                            <option value="bootcamp">Bootcamp</option>
                                            <option value="technology">Technology</option>
                                            <option value="bootcamp">Bootcamp</option>
                                            <option value="bootcamp">Bootcamp</option>
                                        </select>
                                    </form>

                                    <div id="addspeaker" class="p-0">
                                        <h3 class="h5 my-4">Add Speakers</h3>
                                        <h6>how many speakers do you want?</h6>
                                        <form action="">
                                            <select name="addspeaker" class="custom-select" multiple>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                            </select>
                                        </form>

                                        <div class="row justify-content-end">
                                            <div class="col-sm-12 col-md-6 mb-3">
                                                <h5>Nama</h5>
                                                <input type="text" class="form-control w-50" placeholder="tulis nama" required>
                                            </div>
                                            <div class="col-sm-12 col-md-6 mb-3">
                                                <h5>Position</h5>
                                                <input type="text" class="form-control w-50" placeholder="tulis position" required>
                                            </div>
                                            <div class="col-sm-12 col-md-6">
                                                <h5>Nama</h5>
                                                <input type="text" class="form-control w-50" placeholder="tulis nama" required>
                                            </div>
                                            <div class="col-sm-12 col-md-6 mb-3">
                                                <h5>Position</h5>
                                                <input type="text" class="form-control w-50" placeholder="tulis position" required>
                                            </div>
                                            <div class="row">
                                                <div class="addphoto col-ms-3 col-md-6">
                                                    <h6 class="form-check-label" for="flexCheckDefault">
                                                        add photo
                                                    </h6>
                                                </div>
                                                <div class="addphoto col-ms-3 col-md-6">
                                                    <h6 class="form-check-label" for="flexCheckDefault">
                                                        add photo
                                                    </h6>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="addphoto col-ms-3 col-md-6">
                                                    <button id="inputfile" class="btn btn-sm rounded shadow-none">choose from files</button>
                                                    <input type="file" class="form-control d-none" id="formfile" accept="image/*">
                                                </div>
                                                <div class="addphoto col-ms-3 col-md-6">
                                                    <button id="inputfile" class="btn btn-sm rounded shadow-none">choose from files</button>
                                                    <input type="file" class="form-control d-none" id="formfile" accept="image/*">
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-md-8 text-end">
                                                <button class="btn btn-lg btn-purple text-center mt-5 mb-10 mx-3">Save</button>
                                                <button class="btn btn-lg btn-secondary text-center mt-5 mb-10 mx-3">Discard</button>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-12">
                            <h3 class="h5 mt-4 mb-4">Preview</h3>
                            <div class="card mb-4 border-0">
                                <div class="card-body">
                                    <img src="/asset/image/event/card2.png" class="w-50 ms-3" alt=".">
                                    <p class="ms-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum incidunt dolore unde autem dolorum numquam totam impedit officiis rem sit eaque voluptates officia possimus, exercitationem vitae eligendi quo veniam atque?</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="/asset/vendor/bootstrap5/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.26.0/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
    <script src="/asset/js/admin.js"></script>


    <script>
        $(document).ready(function() {
            $('#inputfile').click(function() {
                $('#formfile').click();
            });
        })
        $('.summernote').summernote({
            placeholder: 'Ketikkan isi konten disini',
            tabsize: 2,
            height: 100,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ]
        });
    </script>
</body>

</html>