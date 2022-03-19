<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="template" content="Ecomart">
    <meta name="title" content="Ecomart - eCommerce HTML Template">
    <meta name="keywords"
          content="ecomart, ecommerce, shop, store, catalog, html, apparel,retail, multipurpose, rtl, online store, fashion, electronics, grocery, furniture">
    <title>Tuğran - Yeşim Bitirme Projesi</title>
    <link rel="icon" href="{{ asset('Frontend/images/favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('Frontend/fonts/icofont/icofont.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Frontend/fonts/flaticon/clothes/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('Frontend/css/vendor/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('Frontend/css/vendor/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('Frontend/css/custom/main.css') }}">
    <link rel="stylesheet" href="{{ asset('Frontend/css/custom/index.css') }}">
    @toastr_css
</head>
<body>
@include('Frontend.layouts.header-navbar')
<!-- checkout bar-->
@include('Frontend.layouts.sidebar')
@include('Frontend.layouts.banner')
<section class="product-part">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="product-category">
                    <ul class="cate-list">
                        <li><a class="cate-link dropdown" href="#"><i
                                    class="flaticon-blazer"></i><span>blazers</span></a>
                            <ul class="dropdown-list">
                                <li><a href="#">item name</a></li>
                                <li><a href="#">item name</a></li>
                                <li><a href="#">item name</a></li>
                            </ul>
                        </li>
                        <li><a class="cate-link dropdown" href="#"><i class="flaticon-sweater"></i><span>sweaters</span></a>
                            <ul class="dropdown-list">
                                <li><a href="#">item name</a></li>
                                <li><a href="#">item name</a></li>
                                <li><a href="#">item name</a></li>
                            </ul>
                        </li>
                        <li><a class="cate-link dropdown" href="#"><i
                                    class="flaticon-dress"></i><span>dresses</span></a>
                            <ul class="dropdown-list">
                                <li><a href="#">item name</a></li>
                                <li><a href="#">item name</a></li>
                                <li><a href="#">item name</a></li>
                            </ul>
                        </li>
                        <li><a class="cate-link dropdown" href="#"><i class="flaticon-bikini"></i><span>Swimsuits</span></a>
                            <ul class="dropdown-list">
                                <li><a href="#">item name</a></li>
                                <li><a href="#">item name</a></li>
                                <li><a href="#">item name</a></li>
                            </ul>
                        </li>
                        <li><a class="cate-link dropdown" href="#"><i
                                    class="flaticon-swim-shorts"></i><span>shorts</span></a>
                            <ul class="dropdown-list">
                                <li><a href="#">item name</a></li>
                                <li><a href="#">item name</a></li>
                                <li><a href="#">item name</a></li>
                            </ul>
                        </li>
                        <li><a class="cate-link dropdown" href="#"><i class="flaticon-coat"></i><span>coats</span></a>
                            <ul class="dropdown-list">
                                <li><a href="#">item name</a></li>
                                <li><a href="#">item name</a></li>
                                <li><a href="#">item name</a></li>
                            </ul>
                        </li>
                        <li><a class="cate-link dropdown" href="#"><i class="flaticon-t-shirt"></i><span>t-shirts</span></a>
                            <ul class="dropdown-list">
                                <li><a href="#">item name</a></li>
                                <li><a href="#">item name</a></li>
                                <li><a href="#">item name</a></li>
                            </ul>
                        </li>
                        <li><a class="cate-link dropdown" href="#"><i class="flaticon-jeans"></i><span>jeans</span></a>
                            <ul class="dropdown-list">
                                <li><a href="#">item name</a></li>
                                <li><a href="#">item name</a></li>
                                <li><a href="#">item name</a></li>
                            </ul>
                        </li>
                        <li><a class="cate-link dropdown" href="#"><i class="flaticon-skirt"></i><span>skirts</span></a>
                            <ul class="dropdown-list">
                                <li><a href="#">item name</a></li>
                                <li><a href="#">item name</a></li>
                                <li><a href="#">item name</a></li>
                            </ul>
                        </li>
                        <li><a class="cate-link dropdown" href="#"><i class="flaticon-socks"></i><span>socks</span></a>
                            <ul class="dropdown-list">
                                <li><a href="#">item name</a></li>
                                <li><a href="#">item name</a></li>
                                <li><a href="#">item name</a></li>
                            </ul>
                        </li>
                        <li><a class="cate-link dropdown" href="#"><i
                                    class="flaticon-dress-1"></i><span>baby dress</span></a>
                            <ul class="dropdown-list">
                                <li><a href="#">item name</a></li>
                                <li><a href="#">item name</a></li>
                                <li><a href="#">item name</a></li>
                            </ul>
                        </li>
                        <li><a class="cate-link dropdown" href="#"><i
                                    class="flaticon-shirts"></i><span>shirts</span></a>
                            <ul class="dropdown-list">
                                <li><a href="#">item name</a></li>
                                <li><a href="#">item name</a></li>
                                <li><a href="#">item name</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="product-filter">
                            <div class="product-filter-short"><label class="form-label">short by:</label><select
                                    class="form-select">
                                    <option value="default" selected>default</option>
                                    <option value="man">man</option>
                                    <option value="woman">woman</option>
                                    <option value="child">child</option>
                                </select></div>
                            <ul class="product-filter-list">
                                <li>
                                    <button class="column-3" data-toggle="tooltip" title="Three Column"><i
                                            class="icofont-justify-all"></i></button>
                                </li>
                                <li>
                                    <button class="column-4" data-toggle="tooltip" title="Four Column"><i
                                            class="icofont-indent"></i></button>
                                </li>
                            </ul>
                            <div class="product-filter-short"><label class="form-label">size by:</label><select
                                    class="form-select">
                                    <option value="default" selected>default</option>
                                    <option value="small">small</option>
                                    <option value="mediaum">mediaum</option>
                                    <option value="large">large</option>
                                    <option value="xl">xtra large</option>
                                </select></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                        <div class="product-card">
                            <figure class="product-media">
                                <div class="product-label-group"><label
                                        class="product-label label-new">new</label><label class="product-label label-off">-10%</label>
                                </div>
                                <a class="product-image" href="product-single.html"><img
                                        src="{{ asset('Frontend/images/shop/product/clothes/01.jpg') }}" alt="product"></a></figure>
                            <div class="product-content">
                                <h5 class="product-price"><span>$25 </span>
                                    <del>$42</del>
                                </h5>
                                <h5 class="product-name"><a href="product-single.html">product name</a></h5>
                                <div class="product-action-group">
                                    <div class="product-action">
                                        <button class="action-wish" title="Product Wish"><i class="icofont-ui-love"></i>
                                        </button>
                                        <button class="action-cart" title="Add to Cart"><span>add to cart</span>
                                        </button>
                                        <button class="action-view" title="Product View" data-toggle="modal"
                                                data-target="#product-view"><i class="icofont-eye-alt"></i></button>
                                    </div>
                                    <div class="product-action">
                                        <button class="action-minus" title="Quantity Minus"><i
                                                class="icofont-minus"></i></button>
                                        <input class="action-input" title="Quantity Number" type="text" name="quantity"
                                               value="1">
                                        <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                        <div class="product-card">
                            <figure class="product-media"><a class="product-image" href="product-single.html"><img
                                        src="{{ asset('Frontend/images/shop/product/clothes/02.jpg') }}" alt="product"></a></figure>
                            <div class="product-content">
                                <h5 class="product-price"><span>$25 </span>
                                    <del>$42</del>
                                </h5>
                                <h5 class="product-name"><a href="product-single.html">product name</a></h5>
                                <div class="product-action-group">
                                    <div class="product-action">
                                        <button class="action-wish" title="Product Wish"><i class="icofont-ui-love"></i>
                                        </button>
                                        <button class="action-cart" title="Add to Cart"><span>add to cart</span>
                                        </button>
                                        <button class="action-view" title="Product View" data-toggle="modal"
                                                data-target="#product-view"><i class="icofont-eye-alt"></i></button>
                                    </div>
                                    <div class="product-action">
                                        <button class="action-minus" title="Quantity Minus"><i
                                                class="icofont-minus"></i></button>
                                        <input class="action-input" title="Quantity Number" type="text" name="quantity"
                                               value="1">
                                        <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                        <div class="product-card">
                            <figure class="product-media"><a class="product-image" href="product-single.html"><img
                                        src="{{ asset('Frontend/images/shop/product/clothes/03.jpg') }}" alt="product"></a></figure>
                            <div class="product-content">
                                <h5 class="product-price"><span>$25 </span>
                                    <del>$42</del>
                                </h5>
                                <h5 class="product-name"><a href="product-single.html">product name</a></h5>
                                <div class="product-action-group">
                                    <div class="product-action">
                                        <button class="action-wish" title="Product Wish"><i class="icofont-ui-love"></i>
                                        </button>
                                        <button class="action-cart" title="Add to Cart"><span>add to cart</span>
                                        </button>
                                        <button class="action-view" title="Product View" data-toggle="modal"
                                                data-target="#product-view"><i class="icofont-eye-alt"></i></button>
                                    </div>
                                    <div class="product-action">
                                        <button class="action-minus" title="Quantity Minus"><i
                                                class="icofont-minus"></i></button>
                                        <input class="action-input" title="Quantity Number" type="text" name="quantity"
                                               value="1">
                                        <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                        <div class="product-card product-disable">
                            <figure class="product-media"><a class="product-image" href="product-single.html"><img
                                        src="{{ asset('Frontend/images/shop/product/clothes/04.jpg') }}" alt="product"></a></figure>
                            <div class="product-content">
                                <h5 class="product-price"><span>$25 </span>
                                    <del>$42</del>
                                </h5>
                                <h5 class="product-name"><a href="product-single.html">product name</a></h5>
                                <div class="product-action-group">
                                    <div class="product-action">
                                        <button class="action-wish" title="Product Wish"><i class="icofont-ui-love"></i>
                                        </button>
                                        <button class="action-cart" title="Add to Cart"><span>add to cart</span>
                                        </button>
                                        <button class="action-view" title="Product View" data-toggle="modal"
                                                data-target="#product-view"><i class="icofont-eye-alt"></i></button>
                                    </div>
                                    <div class="product-action">
                                        <button class="action-minus" title="Quantity Minus"><i
                                                class="icofont-minus"></i></button>
                                        <input class="action-input" title="Quantity Number" type="text" name="quantity"
                                               value="1">
                                        <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                        <div class="product-card">
                            <figure class="product-media">
                                <div class="product-label-group"><label class="product-label label-new">new</label>
                                </div>
                                <a class="product-image" href="product-single.html"><img
                                        src="{{ asset('Frontend/images/shop/product/clothes/05.jpg') }}" alt="product"></a></figure>
                            <div class="product-content">
                                <h5 class="product-price"><span>$25 </span>
                                    <del>$42</del>
                                </h5>
                                <h5 class="product-name"><a href="product-single.html">product name</a></h5>
                                <div class="product-action-group">
                                    <div class="product-action">
                                        <button class="action-wish" title="Product Wish"><i class="icofont-ui-love"></i>
                                        </button>
                                        <button class="action-cart" title="Add to Cart"><span>add to cart</span>
                                        </button>
                                        <button class="action-view" title="Product View" data-toggle="modal"
                                                data-target="#product-view"><i class="icofont-eye-alt"></i></button>
                                    </div>
                                    <div class="product-action">
                                        <button class="action-minus" title="Quantity Minus"><i
                                                class="icofont-minus"></i></button>
                                        <input class="action-input" title="Quantity Number" type="text" name="quantity"
                                               value="1">
                                        <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                        <div class="product-card">
                            <figure class="product-media"><a class="product-image" href="product-single.html"><img
                                        src="{{ asset('Frontend/images/shop/product/clothes/06.jpg') }}" alt="product"></a></figure>
                            <div class="product-content">
                                <h5 class="product-price"><span>$25 </span>
                                    <del>$42</del>
                                </h5>
                                <h5 class="product-name"><a href="product-single.html">product name</a></h5>
                                <div class="product-action-group">
                                    <div class="product-action">
                                        <button class="action-wish" title="Product Wish"><i class="icofont-ui-love"></i>
                                        </button>
                                        <button class="action-cart" title="Add to Cart"><span>add to cart</span>
                                        </button>
                                        <button class="action-view" title="Product View" data-toggle="modal"
                                                data-target="#product-view"><i class="icofont-eye-alt"></i></button>
                                    </div>
                                    <div class="product-action">
                                        <button class="action-minus" title="Quantity Minus"><i
                                                class="icofont-minus"></i></button>
                                        <input class="action-input" title="Quantity Number" type="text" name="quantity"
                                               value="1">
                                        <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                        <div class="product-card">
                            <figure class="product-media">
                                <div class="product-label-group"><label class="product-label label-off">-10%</label>
                                </div>
                                <a class="product-image" href="product-single.html"><img
                                        src="{{ asset('Frontend/images/shop/product/clothes/07.jpg') }}" alt="product"></a></figure>
                            <div class="product-content">
                                <h5 class="product-price"><span>$25 </span>
                                    <del>$42</del>
                                </h5>
                                <h5 class="product-name"><a href="product-single.html">product name</a></h5>
                                <div class="product-action-group">
                                    <div class="product-action">
                                        <button class="action-wish" title="Product Wish"><i class="icofont-ui-love"></i>
                                        </button>
                                        <button class="action-cart" title="Add to Cart"><span>add to cart</span>
                                        </button>
                                        <button class="action-view" title="Product View" data-toggle="modal"
                                                data-target="#product-view"><i class="icofont-eye-alt"></i></button>
                                    </div>
                                    <div class="product-action">
                                        <button class="action-minus" title="Quantity Minus"><i
                                                class="icofont-minus"></i></button>
                                        <input class="action-input" title="Quantity Number" type="text" name="quantity"
                                               value="1">
                                        <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                        <div class="product-card">
                            <figure class="product-media"><a class="product-image" href="product-single.html"><img
                                        src="{{ asset('Frontend/images/shop/product/clothes/08.jpg') }}" alt="product"></a></figure>
                            <div class="product-content">
                                <h5 class="product-price"><span>$25 </span>
                                    <del>$42</del>
                                </h5>
                                <h5 class="product-name"><a href="product-single.html">product name</a></h5>
                                <div class="product-action-group">
                                    <div class="product-action">
                                        <button class="action-wish" title="Product Wish"><i class="icofont-ui-love"></i>
                                        </button>
                                        <button class="action-cart" title="Add to Cart"><span>add to cart</span>
                                        </button>
                                        <button class="action-view" title="Product View" data-toggle="modal"
                                                data-target="#product-view"><i class="icofont-eye-alt"></i></button>
                                    </div>
                                    <div class="product-action">
                                        <button class="action-minus" title="Quantity Minus"><i
                                                class="icofont-minus"></i></button>
                                        <input class="action-input" title="Quantity Number" type="text" name="quantity"
                                               value="1">
                                        <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                        <div class="product-card">
                            <figure class="product-media"><a class="product-image" href="product-single.html"><img
                                        src="{{ asset('Frontend/images/shop/product/clothes/08.jpg') }}" alt="product"></a></figure>
                            <div class="product-content">
                                <h5 class="product-price"><span>$25 </span>
                                    <del>$42</del>
                                </h5>
                                <h5 class="product-name"><a href="product-single.html">product name</a></h5>
                                <div class="product-action-group">
                                    <div class="product-action">
                                        <button class="action-wish" title="Product Wish"><i class="icofont-ui-love"></i>
                                        </button>
                                        <button class="action-cart" title="Add to Cart"><span>add to cart</span>
                                        </button>
                                        <button class="action-view" title="Product View" data-toggle="modal"
                                                data-target="#product-view"><i class="icofont-eye-alt"></i></button>
                                    </div>
                                    <div class="product-action">
                                        <button class="action-minus" title="Quantity Minus"><i
                                                class="icofont-minus"></i></button>
                                        <input class="action-input" title="Quantity Number" type="text" name="quantity"
                                               value="1">
                                        <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="load-btn">
                            <button class="btn btn-outline">Load more items</button>
                        </div>
                        <div class="footer-part"><p>Ecomart | &COPY; Copyright by <a href="#">Mironcoder</a></p></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="modal fade" id="product-view">
    <div class="modal-dialog">
        <div class="modal-content">
            <button class="modal-close icofont-close" data-dismiss="modal"></button>
            <div class="product-view">
                <div class="row">
                    <div class="col-md-6 col-lg-6">
                        <div class="product-gallery">
                            <ul class="preview-slider">
                                <li><img src="{{ asset('Frontend/images/shop/product/clothes/01.jpg') }}" alt="product"></li>
                                <li><img src="{{ asset('Frontend/images/shop/product/clothes/01.jpg') }}" alt="product"></li>
                                <li><img src="{{ asset('Frontend/images/shop/product/clothes/01.jpg') }}" alt="product"></li>
                                <li><img src="{{ asset('Frontend/images/shop/product/clothes/01.jpg') }}" alt="product"></li>
                                <li><img src="{{ asset('Frontend/images/shop/product/clothes/01.jpg') }}" alt="product"></li>
                                <li><img src="{{ asset('Frontend/images/shop/product/clothes/01.jpg') }}" alt="product"></li>
                                <li><img src="{{ asset('Frontend/images/shop/product/clothes/01.jpg') }}" alt="product"></li>
                            </ul>
                            <ul class="thumb-slider">
                                <li><img src="{{ asset('Frontend/images/shop/product/clothes/01.jpg') }}" alt="product"></li>
                                <li><img src="{{ asset('Frontend/images/shop/product/clothes/01.jpg') }}" alt="product"></li>
                                <li><img src="{{ asset('Frontend/images/shop/product/clothes/01.jpg') }}" alt="product"></li>
                                <li><img src="{{ asset('Frontend/images/shop/product/clothes/01.jpg') }}" alt="product"></li>
                                <li><img src="{{ asset('Frontend/images/shop/product/clothes/01.jpg') }}" alt="product"></li>
                                <li><img src="{{ asset('Frontend/images/shop/product/clothes/01.jpg') }}" alt="product"></li>
                                <li><img src="{{ asset('Frontend/images/shop/product/clothes/01.jpg') }}" alt="product"></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="product-details"><h3 class="details-name"><a href="brand-profile.html">existing
                                    product name</a></h3>
                            <div class="details-meta">SKU:<span class="details-sku">1234567</span>BRAND:<a
                                    class="details-brand" href="#">radhuni</a></div>
                            <h3 class="details-price"><span>$124.00</span>
                                <del>$42.00</del>
                            </h3>
                            <p class="details-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit non tempora
                                magni repudiandae sint suscipit tempore quis maxime explicabo veniam eos reprehenderit
                                fuga</p>
                            <div class="details-group"><label class="details-group-title">color:</label>
                                <ul class="details-color-list">
                                    <li><a class="color red" href="#">red</a></li>
                                    <li><a class="color blue" href="#">blue</a></li>
                                    <li><a class="color green" href="#">green</a></li>
                                    <li><a class="color yellow" href="#">yellow</a></li>
                                </ul>
                            </div>
                            <div class="details-group"><label class="details-group-title">size:</label>
                                <ul class="details-size-list">
                                    <li><a class="size" href="#">xxl</a></li>
                                    <li><a class="size" href="#">xl</a></li>
                                    <li><a class="size" href="#">l</a></li>
                                    <li><a class="size" href="#">m</a></li>
                                    <li><a class="size" href="#">s</a></li>
                                </ul>
                            </div>
                            <div class="details-group"><label class="details-group-title">tags:</label>
                                <ul class="details-tag-list">
                                    <li><a href="#">clothes</a></li>
                                    <li><a href="#">blazer</a></li>
                                    <li><a href="#">coat</a></li>
                                </ul>
                            </div>
                            <div class="details-group"><label class="details-group-title">Share:</label>
                                <ul class="details-share-list">
                                    <li><a href="#" class="icofont-facebook"></a></li>
                                    <li><a href="#" class="icofont-twitter"></a></li>
                                    <li><a href="#" class="icofont-linkedin"></a></li>
                                </ul>
                            </div>
                            <hr class="details-devider">
                            <div class="details-action-group">
                                <button class="details-cart" title="Add Your Cartlist"><i
                                        class="icofont-cart"></i><span>add to cart</span></button>
                                <div class="details-action">
                                    <button class="details-minus" title="Quantity Minus"><i class="icofont-minus"></i>
                                    </button>
                                    <input class="details-input" title="Quantity Number" type="text" name="quantity"
                                           value="1">
                                    <button class="details-plus" title="Quantity Plus"><i class="icofont-plus"></i>
                                    </button>
                                </div>
                                <a href="#" class="details-wish" title="Add Your Wishlist"><i class="icofont-heart"></i><span>add to wish</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="mobile-check">
    <button class="check-btn"><span class="check-item"><i class="icofont-basket"></i><span>0 items</span></span><span
            class="check-price">$00.00</span></button>
</div>
<script src="{{ asset('Frontend/js/vendor/jquery-1.12.4.min.js') }}"></script>
<script src="{{ asset('Frontend/js/vendor/popper.min.js') }}"></script>
<script src="{{ asset('Frontend/js/vendor/bootstrap.min.js') }}"></script>
<script src="{{ asset('Frontend/js/custom/header-part.js') }}"></script>
<script src="{{ asset('Frontend/js/custom/product-part.js') }}"></script>
<script src="{{ asset('Frontend/js/custom/product-view.js') }}"></script>
<script src="{{ asset('Frontend/js/custom/select-option.js') }}"></script>
<script src="{{ asset('Frontend/js/custom/dropdown.js') }}"></script>
<script src="{{ asset('Frontend/js/vendor/slick.min.js') }}"></script>
<script src="{{ asset('Frontend/js/custom/slick.js') }}"></script>
<script src="{{ asset('Frontend/js/custom/main.js') }}"></script>
@jquery
@toastr_js
@toastr_render
</body>
</html>

