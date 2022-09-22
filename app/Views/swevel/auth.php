<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="asset/vendor/jquery/jquery-3.6.1.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@3.6.12/dist/css/splide.min.css">
    <link rel="stylesheet" href="/asset/vendor/bootstrap5/css/bootstrap.min.css">
    <link rel="stylesheet" href="/asset/vendor/fontawesome612/css/all.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/asset/css/custom.css">
    <title>Swevel | Login</title>
</head>

<body id="auth">
    <div class="container h-100 w-100">
        <div class="wave1"></div>
        <section id="login">
            <div class="row justify-content-center h-100">
                <div class="col-sm-12 col-md-5 my-auto px-4">
                    <div class="card p-3">
                        <div class="card-body">
                            <div class="text-center fw-bold fs-5 my-4">
                                User Login
                            </div>
                            <form action="#login.php" method="POST" autocomplete="off">
                                <div class="mb-3">
                                    <input id="username" type="text" class="form-control" name="username" placeholder="Username">
                                </div>
                                <div class="mb-3">
                                    <input id="password" type="password" class="form-control" name="password" placeholder="Password">
                                </div>
                                <div class="mb-3">
                                    <button id="btnLogin" type="button" class="btn btn-login w-100" name="login">LOGIN</button>
                                </div>
                            </form>
                            <div class="text-center">
                                <code class="text-dark">
                                    <em>forget password? klik </em>
                                    <a href="#">here</a><br>
                                </code>
                                <code class="text-dark">
                                    <a id="toRegister" href="#register" class="w-100">Create Your Account</a>
                                </code>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="register" class="d-none">
            <div class="row justify-content-center h-100">
                <div class="col-sm-12 col-md-9 my-auto px-4">
                    <div class="card p-3">
                        <div class="card-body">
                            <div class="text-center fw-bold fs-5 my-4">
                                Create New Account!
                            </div>
                            <form action="#register.php" method="POST">
                                <div class="row">
                                    <div class="col-sm-12 col-md-6 mb-3">
                                        <input type="text" class="form-control" name="fullname" placeholder="Fullname">
                                    </div>
                                    <div class="col-sm-12 col-md-6 mb-3">
                                        <input type="text" class="form-control" name="lastname" placeholder="Lastname">
                                    </div>
                                    <div class="col-sm-12 col-md-6 mb-3">
                                        <input type="text" class="form-control" name="username" placeholder="Username">
                                    </div>
                                    <div class="col-sm-12 col-md-6 mb-3">
                                        <input type="text" class="form-control" name="email" placeholder="Email">
                                    </div>
                                    <div class="col-sm-12 col-md-6 mb-3">
                                        <input type="password" class="form-control" name="password" placeholder="Password">
                                    </div>
                                    <div class="col-sm-12 col-md-6 mb-3">
                                        <input type="password" class="form-control" name="confirm-password" placeholder="Confirm Password">
                                    </div>
                                </div>
                                <div class="mb-3 text-center">
                                    <button type="submit" class="btn btn-login w-50" name="login">CREATE</button>
                                </div>
                            </form>
                            <div class="text-center">
                                <code class="text-dark fw-bold">
                                    <p class="m-0">Alreade have an account?</p>
                                    <a id="toLogin" href="#login">Login here</a><br>
                                </code>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="wave2"></div>
    </div>
    <script src="/asset/vendor/bootstrap5/js/bootstrap.bundle.min.js"></script>
    <script src="/asset/vendor/fontawesome612/js/all.min.js"></script>

    <script>
        $(document).ready(function() {
            $(function() {
                let lastSegment = window.location.href.split('#').pop();
                if (lastSegment == 'register') {
                    $('#login').addClass('d-none');
                    $('#register').removeClass('d-none');
                }
                if (lastSegment == 'login') {
                    $('#register').addClass('d-none');
                    $('#login').removeClass('d-none');
                }
            });
            $('#toRegister').click(function() {
                $('#login').addClass('d-none');
                $('#register').removeClass('d-none');
            });
            $('#toLogin').click(function() {
                $('#register').addClass('d-none');
                $('#login').removeClass('d-none');
            });
            $('#btnLogin').click(function() {
                let username = $('#username').val();
                let password = $('#password').val();
                if (username == '' || password == '') {
                    alert('Username or Password is empty!');
                } else {
                    console.log(username);
                    console.log(password);
                }
            });
        });
    </script>
</body>

</html>