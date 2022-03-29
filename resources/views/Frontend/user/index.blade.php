<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from mironmahmud.com/ecomart/assets/ltr/html/clothes/profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 05 May 2021 13:16:07 GMT -->
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
    <title>Ecomart - Profile</title>
    <link rel="icon" href="{{ asset('Frontend/images/favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('Frontend/fonts/icofont/icofont.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Frontend/fonts/flaticon/clothes/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('Frontend/css/vendor/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('Frontend/css/custom/main.css') }}">
    <link rel="stylesheet" href="{{ asset('Frontend/css/custom/profile.css') }}">
</head>
<body>
@include('Frontend.layouts.header-navbar')
@include('Frontend.layouts.sidebar')
<section class="single-banner" style="background: url({{ asset('Frontend/images/shop/banner/clothes/single-banner.jpg') }}) no-repeat center; background-size: cover;">
    <div class="container"><h2>your profile</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">profile</li>
        </ol>
    </div>
</section>
<section class="profile-part">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="account-card">
                    <div class="account-title"><h4>Profiliniz</h4>
                        <button data-toggle="modal" data-target="#profile-edit">Profil Düzenle</button>
                    </div>
                    <div class="account-content">
                        <div class="row">
                            <div class="col-lg-2">
                                <div class="profile-image"><a href="#"><img src="{{ asset('Frontend/images/user.png') }}" alt="user"></a>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-5">
                                <div class="form-group"><label class="form-label">Adınız Soyadınız</label><input
                                        class="form-control" name="name" type="text" value="Miron Mahmud"></div>
                            </div>
                            <div class="col-md-6 col-lg-5">
                                <div class="form-group"><label class="form-label">Email</label><input
                                        class="form-control" type="email" name="email" value="mironcoder@gmail.com"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="account-card">
                    <div class="account-title"><h4>İletişim Numarası</h4>
                        <button data-toggle="modal" data-target="#contact-add">Telefon Ekle</button>
                    </div>
                    <div class="account-content">
                        <div class="row">
                            <div class="col-md-6 col-lg-4 alert fade show">
                                <div class="profile-card contact active"><h5>Birinil</h5>
                                    <p>+8801838288389</p>
                                    <ul class="user-action">
                                        <li>
                                            <button class="edit" title="Edit This" data-toggle="modal"
                                                    data-target="#contact-edit"><i class="icofont-edit"></i></button>
                                        </li>
                                        <li>
                                            <button class="delete" title="Remove This" data-dismiss="alert"><i
                                                    class="icofont-ui-delete"></i></button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 alert fade show">
                                <div class="profile-card contact"><h5>İkincil</h5>
                                    <p>+8801941101915</p>
                                    <ul class="user-action">
                                        <li>
                                            <button class="edit" title="Edit This" data-toggle="modal"
                                                    data-target="#contact-edit"><i class="icofont-edit"></i></button>
                                        </li>
                                        <li>
                                            <button class="delete" title="Remove This" data-dismiss="alert"><i
                                                    class="icofont-ui-delete"></i></button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 alert fade show">
                                <div class="profile-card contact mb-0"><h5>Diğer</h5>
                                    <p>+8801747875727</p>
                                    <ul class="user-action">
                                        <li>
                                            <button class="edit" title="Edit This" data-toggle="modal"
                                                    data-target="#contact-edit"><i class="icofont-edit"></i></button>
                                        </li>
                                        <li>
                                            <button class="delete" title="Remove This" data-dismiss="alert"><i
                                                    class="icofont-ui-delete"></i></button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="account-card">
                    <div class="account-title"><h4>Teslimat Adresi</h4>
                        <button data-toggle="modal" data-target="#address-add">Adres Ekle</button>
                    </div>
                    <div class="account-content">
                        <div class="row">
                            <div class="col-md-6 col-lg-4 alert fade show">
                                <div class="profile-card address active"><h5>Home</h5>
                                    <p>jalkuri, fatullah, narayanganj-1420. word no-09, road no-17/A</p>
                                    <ul class="user-action">
                                        <li>
                                            <button class="edit" title="Edit This" data-toggle="modal"
                                                    data-target="#address-edit"><i class="icofont-edit"></i></button>
                                        </li>
                                        <li>
                                            <button class="delete" title="Remove This" data-dismiss="alert"><i
                                                    class="icofont-ui-delete"></i></button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 alert fade show">
                                <div class="profile-card address"><h5>Office</h5>
                                    <p>east tejturi bazar, dhaka-1200. word no-04, road no-13/c, house no-4/b</p>
                                    <ul class="user-action">
                                        <li>
                                            <button class="edit" title="Edit This" data-toggle="modal"
                                                    data-target="#address-edit"><i class="icofont-edit"></i></button>
                                        </li>
                                        <li>
                                            <button class="delete" title="Remove This" data-dismiss="alert"><i
                                                    class="icofont-ui-delete"></i></button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 alert fade show">
                                <div class="profile-card address mb-0"><h5>Bussiness</h5>
                                    <p>kawran bazar, dhaka-1100. word no-02, road no-13/d, house no-7/m</p>
                                    <ul class="user-action">
                                        <li>
                                            <button class="edit" title="Edit This" data-toggle="modal"
                                                    data-target="#address-edit"><i class="icofont-edit"></i></button>
                                        </li>
                                        <li>
                                            <button class="delete" title="Remove This" data-dismiss="alert"><i
                                                    class="icofont-ui-delete"></i></button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="account-card mb-0">
                    <div class="account-title"><h4>Ödeme Seçenekleri</h4>
                        <button data-toggle="modal" data-target="#payment-add">Kart Ekle</button>
                    </div>
                    <div class="account-content">
                        <div class="row">
                            <div class="col-md-6 col-lg-4 alert fade show">
                                <div class="payment-card payment active"><img src="{{ asset('Frontend/images/payment/01.png') }}"
                                                                              alt="payment"><h4>card number</h4>
                                    <p><span>****</span><span>****</span><span>****</span><sup>1876</sup></p><h5>miron
                                        mahmud</h5>
                                    <ul class="user-action">
                                        <li>
                                            <button class="delete" title="Remove This" data-dismiss="alert"><i
                                                    class="icofont-ui-delete"></i></button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 alert fade show">
                                <div class="payment-card payment"><img src="{{ asset('Frontend/images/payment/02.png') }}" alt="payment">
                                    <h4>card number</h4>
                                    <p><span>****</span><span>****</span><span>****</span><sup>1876</sup></p><h5>miron
                                        mahmud</h5>
                                    <ul class="user-action">
                                        <li>
                                            <button class="delete" title="Remove This" data-dismiss="alert"><i
                                                    class="icofont-ui-delete"></i></button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 alert fade show">
                                <div class="payment-card payment mb-0"><img src="{{ asset('Frontend/images/payment/03.png') }}"
                                                                            alt="payment"><h4>card number</h4>
                                    <p><span>****</span><span>****</span><span>****</span><sup>1876</sup></p><h5>miron
                                        mahmud</h5>
                                    <ul class="user-action">
                                        <li>
                                            <button class="delete" title="Remove This" data-dismiss="alert"><i
                                                    class="icofont-ui-delete"></i></button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="modal fade" id="contact-add">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <button class="modal-close" data-dismiss="modal"><i class="icofont-close"></i></button>
            <form class="modal-form">
                <div class="form-title"><h3>Yeni Telefon Numarası</h3></div>
                <div class="form-group"><label class="form-label">title</label><select class="form-select">
                        <option selected>choose title</option>
                        <option value="primary">primary</option>
                        <option value="secondary">secondary</option>
                    </select></div>
                <div class="form-group"><label class="form-label">Numara</label><input class="form-control" type="text"
                                                                                       placeholder="Enter your number">
                </div>
                <button class="form-btn" type="submit">Kaydet</button>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="address-add">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <button class="modal-close" data-dismiss="modal"><i class="icofont-close"></i></button>
            <form class="modal-form">
                <div class="form-title"><h3>Yeni Teslimat Adresi</h3></div>
                <div class="form-group"><label class="form-label">Başlık</label><select class="form-select">
                        <option selected>Adres Başlığı</option>
                        <option value="home">home</option>
                        <option value="office">office</option>
                        <option value="Bussiness">Bussiness</option>
                        <option value="academy">academy</option>
                        <option value="others">others</option>
                    </select></div>
                <div class="form-group"><label class="form-label">Tam Adres</label><textarea class="form-control"
                                                                                           placeholder="Enter your address"></textarea>
                </div>
                <button class="form-btn" type="submit">Kaydet</button>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="payment-add">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <button class="modal-close" data-dismiss="modal"><i class="icofont-close"></i></button>
            <form class="modal-form">
                <div class="form-title"><h3>Yeni Ödeme Seçeneği</h3></div>
                <div class="form-group"><label class="form-label">Kart Numarası</label><input class="form-control"
                                                                                            type="text"
                                                                                            placeholder="Enter your card number">
                </div>
                <button class="form-btn" type="submit">Kaydet</button>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="profile-edit">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <button class="modal-close" data-dismiss="modal"><i class="icofont-close"></i></button>
            <form class="modal-form">
                <div class="form-title"><h3>Profili Düzenle</h3></div>
                <div class="form-group"><label class="form-label">Profil Fotoğrafı</label><input class="form-control"
                                                                                              type="file"></div>
                <div class="form-group"><label class="form-label">Adınız Soyadınız</label><input class="form-control" type="text"
                                                                                     value="Miron Mahmud"></div>
                <div class="form-group"><label class="form-label">Email</label><input class="form-control" type="text"
                                                                                      value="mironcoder@gmail.com">
                </div>
                <button class="form-btn" type="submit">Kaydet</button>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="contact-edit">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <button class="modal-close" data-dismiss="modal"><i class="icofont-close"></i></button>
            <form class="modal-form">
                <div class="form-title"><h3>Telefon Numarası Düzenle</h3></div>
                <div class="form-group"><label class="form-label">title</label><select class="form-select">
                        <option value="primary" selected>primary</option>
                        <option value="secondary">secondary</option>
                    </select></div>
                <div class="form-group"><label class="form-label">Telefon Numarası</label><input class="form-control" type="text"
                                                                                       value="+8801838288389"></div>
                <button class="form-btn" type="submit">Kaydet</button>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="address-edit">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <button class="modal-close" data-dismiss="modal"><i class="icofont-close"></i></button>
            <form class="modal-form">
                <div class="form-title"><h3>Teslimat Adresi Bilgileri Düzenle</h3></div>
                <div class="form-group"><label class="form-label">title</label><select class="form-select">
                        <option value="home" selected>home</option>
                        <option value="office">office</option>
                        <option value="Bussiness">Bussiness</option>
                        <option value="academy">academy</option>
                        <option value="others">others</option>
                    </select></div>
                <div class="form-group"><label class="form-label">Tam Adres</label><textarea class="form-control"
                                                                                           placeholder="jalkuri, fatullah, narayanganj-1420. word no-09, road no-17/A"></textarea>
                </div>
                <button class="form-btn" type="submit">Kaydet</button>
            </form>
        </div>
    </div>
</div>
<footer class="footer-part"><p>Ecomart | &COPY; Copyright by <a href="#">Mironcoder</a></p></footer>
<script src="{{ asset('Frontend/js/vendor/jquery-1.12.4.min.js') }}"></script>
<script src="{{ asset('Frontend/js/vendor/popper.min.js') }}"></script>
<script src="{{ asset('Frontend/js/vendor/bootstrap.min.js') }}"></script>
<script src="{{ asset('Frontend/js/custom/header-part.js') }}"></script>
<script src="{{ asset('Frontend/js/custom/select-option.js') }}"></script>
<script src="{{ asset('Frontend/js/custom/dropdown.js') }}"></script>
<script src="{{ asset('Frontend/js/custom/main.js') }}"></script>
</body>
</html>
