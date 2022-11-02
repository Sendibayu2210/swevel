<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/img/logo-swevel-top2.png" type="image/x-icon">
    <script src="asset/custom_vendor/jquery/jquery-3.6.1.min.js"></script>
    <link rel="stylesheet" href="/asset/custom_vendor/bootstrap5/css/bootstrap.min.css">
    <link rel="stylesheet" href="/asset/custom_vendor/fontawesome612/css/all.css">
    <link rel="stylesheet" href="/asset/css/custom.css">
    <title>Swevel | Login</title>
</head>

<body id="auth">
    <nav class="navbar navbar-expand-lg bg-transparent position-absolute w-100 shadow-none" style="top: 0;">
        <div class="container">
            <a class="navbar-brand fw-bold" href="/"><img src="/img/logo-swevel.png" alt="" style="max-width: 110px;"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-3"></ul>            
            </div>
        </div>
    </nav>
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
                            <div class="message-register success my-3"></div>
                            <form action="#" method="POST" autocomplete="off" id="form-login">
                                <?= csrf_field(); ?>
                                <div class="mb-3">
                                    <input id="email" type="text" class="form-control" name="email" placeholder="email" autofocus>
                                    <div class="invalid-feedback email"></div>
                                </div>
                                <div class="mb-3">
                                    <input id="password" type="password" class="form-control" name="password" placeholder="Password">
                                    <div class="invalid-feedback password"></div>
                                    <div class="small text-end"><input type="checkbox" name="" id="show-password-login"><label for="show-password-login" class="text-muted ms-2 mt-2 cursor-pointer">Lihat password</label></div>
                                </div>
                                <div class="mb-3">
                                    <button id="btnLogin" type="button" class="btn btn-login w-100" name="login">LOGIN</button>
                                </div>
                                <input type="hidden" name="payment" id="" value="<?= $payment; ?>">
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
                            <div class="message-register failed my-3"></div>
                            <form action="#register.php" method="POST" id="form-register">
                                <?= csrf_field(); ?>
                                <div class="row">
                                    <div class="col-sm-12 col-md-6 mb-3">
                                        <input type="text" class="form-control" id="register-fullname" name="fullname" placeholder="Fullname">
                                        <div class="invalid-feedback fullname"></div>
                                    </div>                                    
                                    <div class="col-sm-12 col-md-6 mb-3">
                                        <input type="text" class="form-control" id="register-email" name="email" placeholder="Email">
                                        <div class="invalid-feedback email"></div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 mb-3">
                                        <input type="password" class="form-control" id="register-password" name="password" placeholder="Password">
                                        <div class="invalid-feedback password"></div>                                        
                                    </div>
                                    <div class="col-sm-12 col-md-6 mb-3">
                                        <input type="password" class="form-control" id="register-confirm-password" name="confirm-password" placeholder="Confirm Password">
                                        <div class="invalid-feedback confirm-password"></div>
                                        <div class="small text-end"><input type="checkbox" name="" id="show-password-register"><label for="show-password-register" class="text-muted ms-2 mt-2 cursor-pointer">Lihat password</label></div>
                                    </div>
                                </div>
                                <div class="mb-3 text-center">
                                    <button type="button" class="btn btn-register w-50" name="create">CREATE</button>
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
    <script src="/asset/custom_vendor/bootstrap5/js/bootstrap.bundle.min.js"></script>
    <script src="/asset/custom_vendor/fontawesome612/js/all.min.js"></script>

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

            $('#show-password-login, #show-password-register').change(function(){
                if(this.checked){
                    $('#password,#register-password,#register-confirm-password').attr('type','text');
                }else{                
                    $('#password,#register-password,#register-confirm-password').attr('type','password');
                }
            })

            $('#btnLogin').click(function() {
                $(this).html(`<div class="spinner-border" role="status"><span class="visually-hidden">Loading...</span></div>`);
                $('#login #email,#login #password').removeClass("is-invalid");
                $('.invalid-feedback').html('');
                $(".message-register.success").removeClass('alert alert-success').html('');
                let email = $('#login #email').val();
                let password = $('#login #password').val();
                if (email == '') {
                    $(this).html('LOGIN');
                    $('#login #email').addClass("is-invalid").focus();
                    $('.invalid-feedback.email').html("Masukan Email");
                }else if ( password == '') {
                    $(this).html('LOGIN');
                    $('#login #password').addClass("is-invalid").focus();
                    $('.invalid-feedback.password').html("Masukan Password");
                }else{
                    $.ajax({
                        url: '/verifikasi-login',
                        type: 'post',
                        dataType: 'json',
                        data: $('#form-login').serialize(),
                        success : function(result){
                            $('#btnLogin').html('LOGIN');
                            if(result.message == 'email tidak ditemukan'){
                                $("#email").addClass('is-invalid').focus();
                                $('.invalid-feedback.email').html(result.message);
                            }
                            if(result.message == 'password salah'){
                                $("#password").addClass('is-invalid').focus();
                                $('.invalid-feedback.password').html(result.message);
                            }
                            if(result.message == 'login success'){
                                window.location.href = result.redirect;
                            }
                        }
                    })
                }
            });          
            $('#login #email,#login #password').keypress(function(e){
                if(e.which == 13){
                    $('#btnLogin').click();
                }
            })
            $('#register input').keypress(function(e){
                if(e.which == 13){
                    $(".btn-register").click();
                }
            })
            $('.btn-register').click(function() {
                $(this).html(`<div class="spinner-border" role="status"><span class="visually-hidden">Loading...</span></div>`);
                $('#register #register-email,#register #register-password,#register #register-fullname, #register #register-confirm-password').removeClass("is-invalid");
                $('#register .invalid-feedback').html('');
                $(".message-register.failed").removeClass('alert alert-danger').html('');
                let fullname = $('#register-fullname').val();
                let email = $('#register-email').val();
                let password = $('#register-password').val();
                let confirmPassword = $('#register-confirm-password').val();
                 if (fullname == '') {
                    $(this).html('CREATE');
                    $('#register #register-fullname').addClass("is-invalid").focus();
                    $('#register .invalid-feedback.fullname').html("Masukan Nama");
                }
                else if (email == '') {
                    $(this).html('CREATE');
                    $('#register #register-email').addClass("is-invalid").focus();
                    $('#register .invalid-feedback.email').html("Masukan Email");
                }
                else if ( password == '') {
                    $(this).html('CREATE');
                    $('#register #register-password').addClass("is-invalid").focus();
                    $('#register .invalid-feedback.password').html("Masukan Password");
                }
                else if ( confirmPassword == '') {
                    $(this).html('CREATE');
                    $('#register-confirm-password').addClass("is-invalid").focus();
                    $('#register .invalid-feedback.confirm-password').html("Masukan Konfirmasi Password");
                }
                else if (password != confirmPassword) {
                    $(this).html('CREATE');
                    $('#register #register-confirm-password').addClass("is-invalid").focus();
                    $('#register .invalid-feedback.confirm-password').html("Konfirmasi password tidak sesuai");
                }
                                        
                else{
                    $.ajax({
                        url: '/verifikasi-register',
                        type: 'post',
                        dataType: 'json',
                        data: $('#form-register').serialize(),
                        success : function(result){
                            if(result.code == '200'){
                                $('.btn-register').html("CREATE");
                                $('.message-register.success').html('Registrasi berhasil. silahkan login').addClass("alert alert-success");
                                $('#toLogin').click();
                            }else{
                                $('.btn-register').html("CREATE");
                                $('.message-register.failed').html('Registrasi gagal. silahkan registrasi ulang').addClass('alert alert-danger');
                            }
                        }
                    })
                }
            }); 
            
        });
    </script>
</body>

</html>