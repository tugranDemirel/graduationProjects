<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from mironmahmud.com/ecomart/assets/ltr/html/clothes/signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 05 May 2021 13:16:23 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8"/><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="mironcoder">
    <meta name="email" content="mironcoder@gmail.com">
    <meta name="profile" content="https://themeforest.net/user/mironcoder">
    <meta name="template" content="Ecomart">
    <meta name="title" content="Ecomart - eCommerce HTML Template">
    <meta name="keywords"
          content="ecomart, ecommerce, shop, store, catalog, html, apparel,retail, multipurpose, rtl, online store, fashion, electronics, grocery, furniture">
    <title>Ecomart - SignUp</title>
    <link rel="icon" href="{{ asset('Frontend/images/favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('Frontend/fonts/icofont/icofont.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Frontend/fonts/flaticon/clothes/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('Frontend/css/vendor/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('Frontend/css/custom/main.css') }}">
    <link rel="stylesheet" href="{{ asset('Frontend/css/custom/user-form.css') }}">
</head>
<body>
<section class="user-form-part">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-5">
                <div class="user-form-logo"><a href="/"><img src="{{ asset('Frontend//images/logo.png') }}" alt="logo"></a></div>
                <div class="user-form-card">
                    <div class="user-form-title"><h2>HEMEN ŞİMDİ</h2>
                        <p>Birkaç Dakika İçerisinde Kayıt Olun</p></div>
                    <form class="user-form" action="{{ route('register') }}" method="POST">
                        @csrf
                        <div class="form-group ">
                            <input type="text" name="name" class="form-control   " placeholder="Adınız Soyadınız">
                            @if($errors->has('name')) <span class="text-danger"> {{ $errors->first('name') }}</span> @endif
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" placeholder="Email Adresiniz">
                             @if($errors->has('email')) <span class="text-danger"> {{ $errors->first('email') }}</span> @endif
                        </div>
                        <div class="form-group ">
                            <input type="password" name="password" class="form-control" placeholder="Şifreniz">
                             @if($errors->has('password')) <span class="text-danger"> {{ $errors->first('password') }}</span> @endif
                        </div>
                        <div class="form-group">
                            <input type="password" name="password_confirmation" class="form-control" placeholder="Şifre Tekrarı">
                             @if($errors->has('name')) <span class="text-danger"> {{ $errors->first('password') }}</span> @endif
                        </div>
                        <div class="form-button">
                            <button type="submit">Kayıt Ol</button>
{{--                            <p>Forgot your password?<a href="reset.html">reset here</a></p></div>--}}
                    </form>
                </div>
                <div class="user-form-remind"><p>Hesabınız var mı?<a href="login.html">Giriş Yapın</a></p></div>
            </div>
        </div>
    </div>
</section>
<footer class="footer-part"><p>Ecomart | &COPY; Copyright by <a href="#">Mironcoder</a></p></footer>
<script src="{{ asset('Frontend/js/vendor/jquery-1.12.4.min.js') }}"></script>
<script src="{{ asset('Frontend/js/vendor/popper.min.js') }}"></script>
<script src="{{ asset('Frontend/js/vendor/bootstrap.min.js') }}"></script>
<script src="{{ asset('Frontend/js/custom/main.js') }}"></script>
</body>
<!-- Mirrored from mironmahmud.com/ecomart/assets/ltr/html/clothes/signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 05 May 2021 13:16:23 GMT -->
</html>
