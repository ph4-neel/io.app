<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>

    @include('layouts.app')


    <style>
        body {
            background: #eee;
        }

        .card-box {
            position: relative;
            color: #fff;
            padding: 20px 10px 40px;
            margin: 20px 0px;
        }

        .card-box:hover {
            text-decoration: none;
            color: #f1f1f1;
        }

        .card-box:hover .icon i {
            font-size: 100px;
            transition: 1s;
            -webkit-transition: 1s;
        }

        .card-box .inner {
            padding: 5px 10px 0 10px;
        }

        .card-box h3 {
            font-size: 27px;
            font-weight: bold;
            margin: 0 0 8px 0;
            white-space: nowrap;
            padding: 0;
            text-align: left;
        }

        .card-box p {
            font-size: 15px;
        }

        .card-box .icon {
            position: absolute;
            top: auto;
            bottom: 5px;
            right: 5px;
            z-index: 0;
            font-size: 72px;
            color: rgba(0, 0, 0, 0.15);
        }

        .card-box .card-box-footer {
            position: absolute;
            left: 0px;
            bottom: 0px;
            text-align: center;
            padding: 3px 0;
            color: rgba(255, 255, 255, 0.8);
            background: rgba(0, 0, 0, 0.1);
            width: 100%;
            text-decoration: none;
        }

        .card-box:hover .card-box-footer {
            background: rgba(0, 0, 0, 0.3);
        }

        .bg-blue {
            background-color: #00c0ef !important;
        }

        .bg-green {
            background-color: #00a65a !important;
        }

        .bg-orange {
            background-color: #f39c12 !important;
        }

        .bg-red {
            background-color: #d9534f !important;
        }
    </style>






    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link rel="stylesheet" href="{{ asset('css/ swiper-bundle.min.css') }}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7cPoppins:300,400,500,600,700,800,900&amp;display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/OverlayScrollbars.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/ theme-rtl.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/theme.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/ user-rtl.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/user.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <script>
        var isRTL = JSON.parse(localStorage.getItem('isRTL'));
        if (isRTL) {
            var linkDefault = document.getElementById('style-default');
            var userLinkDefault = document.getElementById('user-style-default');
            linkDefault.setAttribute('disabled', true);
            userLinkDefault.setAttribute('disabled', true);
            document.querySelector('html').setAttribute('dir', 'rtl');
        } else {
            var linkRTL = document.getElementById('style-rtl');
            var userLinkRTL = document.getElementById('user-style-rtl');
            linkRTL.setAttribute('disabled', true);
            userLinkRTL.setAttribute('disabled', true);
        }
    </script>



</head>

<body>




    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
        <div class="container" data-layout="container">

            <div class="settings mb-3">
                <div class="card alert p-0 shadow-none" role="alert">
                    <div class="btn-close-falcon-container">
                        {{-- <div class="btn-close-falcon" aria-label="Close" data-bs-dismiss="alert"></div>
                  </div> --}}
                        {{-- <div class="card-body text-center"><img src="https://interviewo.app/front-end/images/about/index-ab-vision.jpg" alt="" width="1" /> --}}
                        {{-- <p class="fs--2 mt-2">Loving what you see? <br />Get your copy of <a href="#!">Falcon</a></p> --}}
                        {{-- <div class="d-grid"><a class="btn btn-sm btn-purchase" href="https://themes.getbootstrap.com/product/falcon-admin-dashboard-webapp-template/" target="_blank">Purchase</a></div> --}}
                    </div>
                </div>
            </div>
        </div>
        </div>
        </nav>
        <div class="content">
            <nav class="navbar navbar-light navbar-glass navbar-top navbar-expand">

                <button class="btn navbar-toggler-humburger-icon navbar-toggler me-1 me-sm-3" type="button"
                    data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse"
                    aria-controls="navbarVerticalCollapse" aria-expanded="false" aria-label="Toggle Navigation"><span
                        class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
                <a class="navbar-brand me-1 me-sm-3" href="{{ url('/dash') }}">
                    <div class="d-flex align-items-center"><img class="me-2"
                            src="https://interviewo.app/images/own-images/skills/tech/Awk-827.jpg" alt=""
                            width="40" /><span class="font-sans-serif">interviewo</span>
                    </div>
                </a>
                <ul class="navbar-nav align-items-center d-none d-lg-block">
                    <li class="nav-item">
                        <div class="search-box" data-list='{"valueNames":["title"]}'>
                            <form class="position-relative" data-bs-toggle="search" data-bs-display="static">
                                <input class="form-control search-input fuzzy-search" type="search"
                                    placeholder="Search..." aria-label="Search" />
                                <span class="fas fa-search search-box-icon"></span>

                            </form>
                            <div class="btn-close-falcon-container position-absolute end-0 top-50 translate-middle shadow-none"
                                data-bs-dismiss="search">
                                <div class="btn-close-falcon" aria-label="Close"></div>
                            </div>

                            <div class="dropdown-menu border font-base start-0 mt-2 py-0 overflow-hidden w-100">
                                <div class="scrollbar list py-3" style="max-height: 24rem;">
                                    <h6 class="dropdown-header fw-medium text-uppercase px-card fs--2 pt-0 pb-2">
                                        Recently Browsed</h6><a class="dropdown-item fs--1 px-card py-1 hover-primary"
                                        href="../../../app/events/event-detail.html">
                                        <div class="d-flex align-items-center">
                                            <span class="fas fa-circle me-2 text-300 fs--2"></span>

                                            <div class="fw-normal title"> <span
                                                    class="fas fa-chevron-right mx-1 text-500 fs--2"
                                                    data-fa-transform="shrink-2"></span> Events</div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>



                </ul>

                <ul class="navbar-nav py-1 align-items-center d-none d-lg-block" style="margin-left:5px ">
                    <li class="nav-item"> <button>HOME</button> </li>

                </ul>

                <ul class="navbar-nav py-1 align-items-center d-none d-lg-block" style="margin-left:35px ">
                    <li class="nav-item"><button>TOP COURSES</button></li>

                </ul>

                <ul class="navbar-nav py-1 align-items-center d-none d-lg-block" style="margin-left:35px ">
                    <li class="nav-item"><button>FREE COURSES</button></li>

                </ul>
            </nav>
            <div class="card mb-3">
                <div class="card-body shadow">
                    <div class="row flex-between-center">
                        <div class="col-sm-auto mb-2 mb-sm-0">
                            {{-- <h6 class="mb-0">Showing 1-24 of 205 Products</h6> --}}
                        </div>
                        <div class="col-sm-auto">
                            <div class="row gx-2 align-items-center">
                                <div class="col-auto">
                                    {{-- <form class="row gx-2">
                                        <div class="col-auto"><small>Sort by:</small></div>
                                        <div class="col-auto">
                                            <select class="form-select form-select-sm" aria-label="Bulk actions">
                                                <option selected="">Best Match</option>
                                                <option value="Refund">Newest</option>
                                                <option value="Delete">Price</option>
                                            </select>
                                        </div>
                                    </form> --}}
                                </div>
                                <div class="col-auto pe-0"> <a class="text-600 px-1"
                                        href="../../../app/e-commerce/product/product-list.html"
                                        data-bs-toggle="tooltip" data-bs-placement="top" title="Product List"><span
                                            class="fas fa-list-ul"></span></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-3">
                <div class="card-body">
                    <div class="row">
                        <div class="mb-4 col-md-6 col-lg-4">
                            <div class="border rounded-1 h-100 d-flex flex-column justify-content-between pb-3">
                                <div class="overflow-hidden">
                                    <div class="position-relative rounded-top overflow-hidden"><a class="d-block"
                                            href="../../../app/e-commerce/product/product-details.html"><img
                                                class="img-fluid rounded-top" src="../../../assets/img/products/2.jpg"
                                                alt="" /></a><span
                                            class="badge rounded-pill bg-success position-absolute mt-2 me-2 z-index-2 top-0 end-0">New</span>
                                    </div>
                                    <div class="p-3">
                                        <h5 class="fs-0"><a class="text-dark"
                                                href="../../../app/e-commerce/product/product-details.html">Apple iMac
                                                Pro (27-inch with Retina 5K Display, 3.0GHz 10-core Intel Xeon W, 1TB
                                                SSD)</a></h5>
                                        <p class="fs--1 mb-3"><a class="text-500" href="#!">Computer &amp;
                                                Accessories</a></p>
                                        <h5 class="fs-md-2 text-warning mb-0 d-flex align-items-center mb-3"> $1199.5
                                            <del class="ms-2 fs--1 text-500">$2399 </del>
                                        </h5>
                                        <p class="fs--1 mb-1">Shipping Cost: <strong>$50</strong></p>
                                        <p class="fs--1 mb-1">Stock: <strong class="text-success">Available</strong>
                                        </p>
                                    </div>
                                </div>
                                <div class="d-flex flex-between-center px-3">
                                    <div><span class="fa fa-star text-warning"></span><span
                                            class="fa fa-star text-warning"></span><span
                                            class="fa fa-star text-warning"></span><span
                                            class="fa fa-star text-warning"></span><span
                                            class="fa fa-star text-300"></span><span class="ms-1">(8)</span>
                                    </div>
                                    <div><a class="btn btn-sm btn-falcon-default me-2" href="#!"
                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                            title="Add to Wish List"><span class="far fa-heart"></span></a><a
                                            class="btn btn-sm btn-falcon-default" href="#!"
                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                            title="Add to Cart"><span class="fas fa-cart-plus"></span></a></div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-4 col-md-6 col-lg-4">
                            <div class="border rounded-1 h-100 d-flex flex-column justify-content-between pb-3">
                                <div class="overflow-hidden">
                                    <div class="position-relative rounded-top overflow-hidden">
                                        <div class="swiper-container theme-slider"
                                            data-swiper='{"autoplay":true,"autoHeight":true,"spaceBetween":5,"loop":true,"loopedSlides":5,"navigation":{"nextEl":".swiper-button-next","prevEl":".swiper-button-prev"}}'>
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide"><a class="d-block"
                                                        href="../../../app/e-commerce/product/product-details.html"><img
                                                            class="rounded-top img-fluid"
                                                            src="../../../assets/img/products/1.jpg"
                                                            alt="" /></a></div>
                                                <div class="swiper-slide"><a class="d-block"
                                                        href="../../../app/e-commerce/product/product-details.html"><img
                                                            class="rounded-top img-fluid"
                                                            src="../../../assets/img/products/1-2.jpg"
                                                            alt="" /></a></div>
                                                <div class="swiper-slide"><a class="d-block"
                                                        href="../../../app/e-commerce/product/product-details.html"><img
                                                            class="rounded-top img-fluid"
                                                            src="../../../assets/img/products/1-3.jpg"
                                                            alt="" /></a></div>
                                            </div>
                                            <div class="swiper-nav">
                                                <div class="swiper-button-next swiper-button-white"></div>
                                                <div class="swiper-button-prev swiper-button-white"></div>
                                            </div>
                                        </div><span
                                            class="badge rounded-pill bg-success position-absolute mt-2 me-2 z-index-2 top-0 end-0">New</span>
                                    </div>
                                    <div class="p-3">
                                        <h5 class="fs-0"><a class="text-dark"
                                                href="../../../app/e-commerce/product/product-details.html">Apple
                                                MacBook Pro (15&quot; Retina, Touch Bar, 2.2GHz 6-Core Intel Core i7,
                                                16GB RAM, 256GB SSD) - Space Gray (Latest Model)</a></h5>
                                        <p class="fs--1 mb-3"><a class="text-500" href="#!">Computer &amp;
                                                Accessories</a></p>
                                        <h5 class="fs-md-2 text-warning mb-0 d-flex align-items-center mb-3"> $7199
                                        </h5>
                                        <p class="fs--1 mb-1">Shipping Cost: <strong>$65</strong></p>
                                        <p class="fs--1 mb-1">Stock: <strong class="text-danger">Sold-Out</strong>
                                        </p>
                                    </div>
                                </div>
                                <div class="d-flex flex-between-center px-3">
                                    <div><span class="fa fa-star text-warning"></span><span
                                            class="fa fa-star text-warning"></span><span
                                            class="fa fa-star text-warning"></span><span
                                            class="fa fa-star text-warning"></span><span
                                            class="fa fa-star-half-alt text-warning star-icon"></span><span
                                            class="ms-1">(20)</span>
                                    </div>
                                    <div><a class="btn btn-sm btn-falcon-default me-2" href="#!"
                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                            title="Add to Wish List"><span class="far fa-heart"></span></a><a
                                            class="btn btn-sm btn-falcon-default" href="#!"
                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                            title="Add to Cart"><span class="fas fa-cart-plus"></span></a></div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-4 col-md-6 col-lg-4">
                            <div class="border rounded-1 h-100 d-flex flex-column justify-content-between pb-3">
                                <div class="overflow-hidden">
                                    <div class="position-relative rounded-top overflow-hidden"><a class="d-block"
                                            href="../../../app/e-commerce/product/product-details.html"><img
                                                class="img-fluid rounded-top" src="../../../assets/img/products/4.jpg"
                                                alt="" /></a>
                                    </div>
                                    <div class="p-3">
                                        <h5 class="fs-0"><a class="text-dark"
                                                href="../../../app/e-commerce/product/product-details.html">Apple iPad
                                                Air 2019 (3GB RAM, 128GB ROM, 8MP Main Camera)</a></h5>
                                        <p class="fs--1 mb-3"><a class="text-500" href="#!">Mobile &amp;
                                                Tabs</a></p>
                                        <h5 class="fs-md-2 text-warning mb-0 d-flex align-items-center mb-3"> $562.5
                                            <del class="ms-2 fs--1 text-500">$750 </del>
                                        </h5>
                                        <p class="fs--1 mb-1">Shipping Cost: <strong>$47</strong></p>
                                        <p class="fs--1 mb-1">Stock: <strong class="text-success">Available</strong>
                                        </p>
                                    </div>
                                </div>
                                <div class="d-flex flex-between-center px-3">
                                    <div><span class="fa fa-star text-warning"></span><span
                                            class="fa fa-star text-warning"></span><span
                                            class="fa fa-star-half-alt text-warning star-icon"></span><span
                                            class="fa fa-star text-300"></span><span
                                            class="fa fa-star text-300"></span><span class="ms-1">(14)</span>
                                    </div>
                                    <div><a class="btn btn-sm btn-falcon-default me-2" href="#!"
                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                            title="Add to Wish List"><span class="far fa-heart"></span></a><a
                                            class="btn btn-sm btn-falcon-default" href="#!"
                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                            title="Add to Cart"><span class="fas fa-cart-plus"></span></a></div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-4 col-md-6 col-lg-4">
                            <div class="border rounded-1 h-100 d-flex flex-column justify-content-between pb-3">
                                <div class="overflow-hidden">
                                    <div class="position-relative rounded-top overflow-hidden"><a class="d-block"
                                            href="../../../app/e-commerce/product/product-details.html"><img
                                                class="img-fluid rounded-top" src="../../../assets/img/products/3.jpg"
                                                alt="" /></a>
                                    </div>
                                    <div class="p-3">
                                        <h5 class="fs-0"><a class="text-dark"
                                                href="../../../app/e-commerce/product/product-details.html">Apple
                                                iPhone XS Max (4GB RAM, 512GB ROM, 12MP Main Camera)</a></h5>
                                        <p class="fs--1 mb-3"><a class="text-500" href="#!">Mobile &amp;
                                                Tabs</a></p>
                                        <h5 class="fs-md-2 text-warning mb-0 d-flex align-items-center mb-3"> $1050
                                        </h5>
                                        <p class="fs--1 mb-1">Shipping Cost: <strong>$65</strong></p>
                                        <p class="fs--1 mb-1">Stock: <strong class="text-success">Available</strong>
                                        </p>
                                    </div>
                                </div>
                                <div class="d-flex flex-between-center px-3">
                                    <div><span class="fa fa-star text-warning"></span><span
                                            class="fa fa-star text-warning"></span><span
                                            class="fa fa-star text-warning"></span><span
                                            class="fa fa-star text-warning"></span><span
                                            class="fa fa-star-half-alt text-warning star-icon"></span><span
                                            class="ms-1">(13)</span>
                                    </div>
                                    <div><a class="btn btn-sm btn-falcon-default me-2" href="#!"
                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                            title="Add to Wish List"><span class="far fa-heart"></span></a><a
                                            class="btn btn-sm btn-falcon-default" href="#!"
                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                            title="Add to Cart"><span class="fas fa-cart-plus"></span></a></div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-4 col-md-6 col-lg-4">
                            <div class="border rounded-1 h-100 d-flex flex-column justify-content-between pb-3">
                                <div class="overflow-hidden">
                                    <div class="position-relative rounded-top overflow-hidden"><a class="d-block"
                                            href="../../../app/e-commerce/product/product-details.html"><img
                                                class="img-fluid rounded-top" src="../../../assets/img/products/8.jpg"
                                                alt="" /></a><span
                                            class="badge rounded-pill bg-success position-absolute mt-2 me-2 z-index-2 top-0 end-0">New</span>
                                    </div>
                                    <div class="p-3">
                                        <h5 class="fs-0"><a class="text-dark"
                                                href="../../../app/e-commerce/product/product-details.html">Canon
                                                Standard Zoom Lens</a></h5>
                                        <p class="fs--1 mb-3"><a class="text-500" href="#!">Camera</a></p>
                                        <h5 class="fs-md-2 text-warning mb-0 d-flex align-items-center mb-3"> $400
                                            <del class="ms-2 fs--1 text-500">$500 </del>
                                        </h5>
                                        <p class="fs--1 mb-1">Shipping Cost: <strong>$60</strong></p>
                                        <p class="fs--1 mb-1">Stock: <strong class="text-danger">Sold Out</strong>
                                        </p>
                                    </div>
                                </div>
                                <div class="d-flex flex-between-center px-3">
                                    <div><span class="fa fa-star text-warning"></span><span
                                            class="fa fa-star text-warning"></span><span
                                            class="fa fa-star text-warning"></span><span
                                            class="fa fa-star text-warning"></span><span
                                            class="fa fa-star text-300"></span><span class="ms-1">(10)</span>
                                    </div>
                                    <div><a class="btn btn-sm btn-falcon-default me-2" href="#!"
                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                            title="Add to Wish List"><span class="far fa-heart"></span></a><a
                                            class="btn btn-sm btn-falcon-default" href="#!"
                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                            title="Add to Cart"><span class="fas fa-cart-plus"></span></a></div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-4 col-md-6 col-lg-4">
                            <div class="border rounded-1 h-100 d-flex flex-column justify-content-between pb-3">
                                <div class="overflow-hidden">
                                    <div class="position-relative rounded-top overflow-hidden"><a class="d-block"
                                            href="../../../app/e-commerce/product/product-details.html"><img
                                                class="img-fluid rounded-top" src="../../../assets/img/products/6.jpg"
                                                alt="" /></a><span
                                            class="badge rounded-pill bg-success position-absolute mt-2 me-2 z-index-2 top-0 end-0">New</span>
                                    </div>
                                    <div class="p-3">
                                        <h5 class="fs-0"><a class="text-dark"
                                                href="../../../app/e-commerce/product/product-details.html">Logitech
                                                G305 Gaming Mouse</a></h5>
                                        <p class="fs--1 mb-3"><a class="text-500" href="#!">Computer &amp;
                                                Accessories</a></p>
                                        <h5 class="fs-md-2 text-warning mb-0 d-flex align-items-center mb-3"> $95
                                        </h5>
                                        <p class="fs--1 mb-1">Shipping Cost: <strong>$20</strong></p>
                                        <p class="fs--1 mb-1">Stock: <strong class="text-success">Available</strong>
                                        </p>
                                    </div>
                                </div>
                                <div class="d-flex flex-between-center px-3">
                                    <div><span class="fa fa-star text-warning"></span><span
                                            class="fa fa-star text-warning"></span><span
                                            class="fa fa-star text-warning"></span><span
                                            class="fa fa-star-half-alt text-warning star-icon"></span><span
                                            class="fa fa-star text-300"></span><span class="ms-1">(6)</span>
                                    </div>
                                    <div><a class="btn btn-sm btn-falcon-default me-2" href="#!"
                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                            title="Add to Wish List"><span class="far fa-heart"></span></a><a
                                            class="btn btn-sm btn-falcon-default" href="#!"
                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                            title="Add to Cart"><span class="fas fa-cart-plus"></span></a></div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-4 mb-lg-0 col-md-6 col-lg-4">
                            <div class="border rounded-1 h-100 d-flex flex-column justify-content-between pb-3">
                                <div class="overflow-hidden">



                                    <!-- ===============================================-->
                                    <!--    product-details.html-->
                                    <!-- ===============================================-->

                                    <div class="position-relative rounded-top overflow-hidden"><a class="d-block"
                                            href="../../../app/e-commerce/product/product-details.html"><img
                                                class="img-fluid rounded-top" src="../../../assets/img/products/7.jpg"
                                                alt="" /></a>
                                    </div>
                                    <div class="p-3">
                                        <h5 class="fs-0"><a class="text-dark"
                                                href="../../../app/e-commerce/product/product-details.html">Nikon D3200
                                                Digital DSLR Camera</a></h5>
                                        <p class="fs--1 mb-3"><a class="text-500" href="#!">Camera</a></p>
                                        <h5 class="fs-md-2 text-warning mb-0 d-flex align-items-center mb-3"> $2398
                                        </h5>
                                        <p class="fs--1 mb-1">Shipping Cost: <strong>$30</strong></p>
                                        <p class="fs--1 mb-1">Stock: <strong class="text-success">Available</strong>
                                        </p>
                                    </div>
                                </div>
                                <div class="d-flex flex-between-center px-3">
                                    <div><span class="fa fa-star text-warning"></span><span
                                            class="fa fa-star text-warning"></span><span
                                            class="fa fa-star text-warning"></span><span
                                            class="fa fa-star text-warning"></span><span
                                            class="fa fa-star text-300"></span><span class="ms-1">(5)</span>
                                    </div>
                                    <div><a class="btn btn-sm btn-falcon-default me-2" href="#!"
                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                            title="Add to Wish List"><span class="far fa-heart"></span></a><a
                                            class="btn btn-sm btn-falcon-default" href="#!"
                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                            title="Add to Cart"><span class="fas fa-cart-plus"></span></a></div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-4 mb-lg-0 col-md-6 col-lg-4">
                            <div class="border rounded-1 h-100 d-flex flex-column justify-content-between pb-3">
                                <div class="overflow-hidden">
                                    <div class="position-relative rounded-top overflow-hidden"><a class="d-block"
                                            href="../../../app/e-commerce/product/product-details.html"><img
                                                class="img-fluid rounded-top" src="../../../assets/img/products/5.jpg"
                                                alt="" /></a><span
                                            class="badge rounded-pill bg-success position-absolute mt-2 me-2 z-index-2 top-0 end-0">New</span>
                                    </div>
                                    <div class="p-3">
                                        <h5 class="fs-0"><a class="text-dark"
                                                href="../../../app/e-commerce/product/product-details.html">Apple Watch
                                                Series 4 44mm GPS Only</a></h5>
                                        <p class="fs--1 mb-3"><a class="text-500" href="#!">Watches &amp;
                                                Accessories</a></p>
                                        <h5 class="fs-md-2 text-warning mb-0 d-flex align-items-center mb-3"> $360
                                            <del class="ms-2 fs--1 text-500">$400 </del>
                                        </h5>
                                        <p class="fs--1 mb-1">Shipping Cost: <strong>$24</strong></p>
                                        <p class="fs--1 mb-1">Stock: <strong class="text-success">Available</strong>
                                        </p>
                                    </div>
                                </div>
                                <div class="d-flex flex-between-center px-3">
                                    <div><span class="fa fa-star text-warning"></span><span
                                            class="fa fa-star text-warning"></span><span
                                            class="fa fa-star text-warning"></span><span
                                            class="fa fa-star text-warning"></span><span
                                            class="fa fa-star text-warning"></span><span class="ms-1">(4)</span>
                                    </div>
                                    <div><a class="btn btn-sm btn-falcon-default me-2" href="#!"
                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                            title="Add to Wish List"><span class="far fa-heart"></span></a><a
                                            class="btn btn-sm btn-falcon-default" href="#!"
                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                            title="Add to Cart"><span class="fas fa-cart-plus"></span></a></div>
                                </div>
                            </div>
                        </div>
                        <div class="undefined col-md-6 col-lg-4">
                            <div class="border rounded-1 h-100 d-flex flex-column justify-content-between pb-3">
                                <div class="overflow-hidden">
                                    <div class="position-relative rounded-top overflow-hidden"><a class="d-block"
                                            href="../../../app/e-commerce/product/product-details.html"><img
                                                class="img-fluid rounded-top" src="../../../assets/img/products/9.jpg"
                                                alt="" /></a>
                                    </div>
                                    <div class="p-3">
                                        <h5 class="fs-0"><a class="text-dark"
                                                href="../../../app/e-commerce/product/product-details.html">Nikon AF-S
                                                FX NIKKOR 24-70mm</a></h5>
                                        <p class="fs--1 mb-3"><a class="text-500" href="#!">Camera</a></p>
                                        <h5 class="fs-md-2 text-warning mb-0 d-flex align-items-center mb-3"> $956.57
                                        </h5>
                                        <p class="fs--1 mb-1">Shipping Cost: <strong>$50</strong></p>
                                        <p class="fs--1 mb-1">Stock: <strong class="text-success">Available</strong>
                                        </p>
                                    </div>
                                </div>
                                <div class="d-flex flex-between-center px-3">
                                    <div><span class="fa fa-star text-warning"></span><span
                                            class="fa fa-star text-warning"></span><span
                                            class="fa fa-star text-warning"></span><span
                                            class="fa fa-star text-warning"></span><span
                                            class="fa fa-star text-warning"></span><span class="ms-1">(4)</span>
                                    </div>
                                    <div><a class="btn btn-sm btn-falcon-default me-2" href="#!"
                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                            title="Add to Wish List"><span class="far fa-heart"></span></a><a
                                            class="btn btn-sm btn-falcon-default" href="#!"
                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                            title="Add to Cart"><span class="fas fa-cart-plus"></span></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="card-footer bg-light d-flex justify-content-center">
                    <div>
                        <button class="btn btn-falcon-default btn-sm me-2" type="button" disabled="disabled"
                            data-bs-toggle="tooltip" data-bs-placement="top" title="Prev"><span
                                class="fas fa-chevron-left"></span></button><a
                            class="btn btn-sm btn-falcon-default text-primary me-2" href="#!">1</a><a
                            class="btn btn-sm btn-falcon-default me-2" href="#!">2</a><a
                            class="btn btn-sm btn-falcon-default me-2" href="#!"> <span
                                class="fas fa-ellipsis-h"></span></a><a class="btn btn-sm btn-falcon-default me-2"
                            href="#!">35</a>
                        <button class="  Changelog btn btn-falcon-default btn-sm" type="button"
                            data-bs-toggle="tooltip" data-bs-placement="top" title="Next"><span
                                class="fas fa-chevron-right"> </span></button>
                    </div>
                </div>
            </div>

        </div>
        <div class="modal fade" id="authentication-modal" tabindex="-1" role="dialog"
            aria-labelledby="authentication-modal-label" aria-hidden="true">
            <div class="modal-dialog mt-6" role="document">
                <div class="modal-content border-0">
                    <div class="modal-header px-5 position-relative modal-shape-header bg-shape">
                        <div class="position-relative z-index-1 light">
                            <h4 class="mb-0 text-white" id="authentication-modal-label">Register</h4>
                            <p class="fs--1 mb-0 text-white">Please create your free Falcon account</p>
                        </div>
                        <button class="btn-close btn-close-white position-absolute top-0 end-0 mt-2 me-2"
                            data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body py-4 px-5">
                        <form>
                            <div class="mb-3">
                                <label class="form-label" for="modal-auth-name">Name</label>
                                <input class="form-control" type="text" autocomplete="on" id="modal-auth-name" />
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="modal-auth-email">Email address</label>
                                <input class="form-control" type="email" autocomplete="on"
                                    id="modal-auth-email" />
                            </div>
                            <div class="row gx-2">
                                <div class="mb-3 col-sm-6">
                                    <label class="form-label" for="modal-auth-password">Password</label>
                                    <input class="form-control" type="password" autocomplete="on"
                                        id="modal-auth-password" />
                                </div>
                                <div class="mb-3 col-sm-6">
                                    <label class="form-label" for="modal-auth-confirm-password">Confirm
                                        Password</label>
                                    <input class="form-control" type="password" autocomplete="on"
                                        id="modal-auth-confirm-password" />
                                </div>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="modal-auth-register-checkbox" />
                                <label class="form-label" for="modal-auth-register-checkbox">I accept the <a
                                        href="#!">terms </a>and <a href="#!">privacy policy</a></label>
                            </div>
                            <div class="mb-3">
                                <button class="btn btn-primary d-block w-100 mt-3" type="submit"
                                    name="submit">Register</button>
                            </div>
                        </form>
                        <div class="position-relative mt-5">
                            <hr class="bg-300" />
                            <div class="divider-content-center">or register with</div>
                        </div>
                        <div class="row g-2 mt-2">
                            <div class="col-sm-6"><a class="btn btn-outline-google-plus btn-sm d-block w-100"
                                    href="#"><span class="fab fa-google-plus-g me-2"
                                        data-fa-transform="grow-8"></span> google</a></div>
                            <div class="col-sm-6"><a class="btn btn-outline-facebook btn-sm d-block w-100"
                                    href="#"><span class="fab fa-facebook-square me-2"
                                        data-fa-transform="grow-8"></span> facebook</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </main>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->


    <div class="offcanvas offcanvas-end settings-panel border-0" id="settings-offcanvas" tabindex="-1"
        aria-labelledby="settings-offcanvas">
        <div class="offcanvas-header settings-panel-header bg-shape">
            <div class="z-index-1 py-1 light">
                <h5 class="text-white"> <span class="fas fa-palette me-2 fs-0"></span>Settings</h5>
                <p class="mb-0 fs--1 text-white opacity-75"> Set your own customized style</p>
            </div>
            <button class="btn-close btn-close-white z-index-1 mt-0" type="button" data-bs-dismiss="offcanvas"
                aria-label="Close"></button>
        </div>
        <div class="offcanvas-body scrollbar-overlay px-card" id="themeController">
            <h5 class="fs-0">Color Scheme</h5>
            <p class="fs--1">Choose the perfect color mode for your app.</p>
            <div class="btn-group d-block w-100 btn-group-navbar-style">
                <div class="row gx-2">
                    <div class="col-6">
                        <input class="btn-check" id="themeSwitcherLight" name="theme-color" type="radio"
                            value="light" data-theme-control="theme" />
                        <label class="btn d-inline-block btn-navbar-style fs--1" for="themeSwitcherLight"> <span
                                class="hover-overlay mb-2 rounded d-block"><img class="img-fluid img-prototype mb-0"
                                    src="../../../assets/img/generic/falcon-mode-default.jpg"
                                    alt="" /></span><span class="label-text">Light</span></label>
                    </div>
                    <div class="col-6">
                        <input class="btn-check" id="themeSwitcherDark" name="theme-color" type="radio"
                            value="dark" data-theme-control="theme" />
                        <label class="btn d-inline-block btn-navbar-style fs--1" for="themeSwitcherDark"> <span
                                class="hover-overlay mb-2 rounded d-block"><img class="img-fluid img-prototype mb-0"
                                    src="../../../assets/img/generic/falcon-mode-dark.jpg"
                                    alt="" /></span><span class="label-text"> Dark</span></label>
                    </div>
                </div>
            </div>
            <hr />
            <div class="d-flex justify-content-between">
                <div class="d-flex align-items-start"><img class="me-2"
                        src="../../../assets/img/icons/left-arrow-from-left.svg" width="20" alt="" />
                    <div class="flex-1">
                        <h5 class="fs-0">RTL Mode</h5>
                        <p class="fs--1 mb-0">Switch your language direction </p><a class="fs--1"
                            href="../../../documentation/customization/configuration.html">RTL Documentation</a>
                    </div>
                </div>
                <div class="form-check form-switch">
                    <input class="form-check-input ms-0" id="mode-rtl" type="checkbox"
                        data-theme-control="isRTL" />
                </div>
            </div>
            <hr />
            <div class="d-flex justify-content-between">
                <div class="d-flex align-items-start"><img class="me-2"
                        src="../../../assets/img/icons/arrows-h.svg" width="20" alt="" />
                    <div class="flex-1">
                        <h5 class="fs-0">Fluid Layout</h5>
                        <p class="fs--1 mb-0">Toggle container layout system </p><a class="fs--1"
                            href="../../../documentation/customization/configuration.html">Fluid Documentation</a>
                    </div>
                </div>
                <div class="form-check form-switch">
                    <input class="form-check-input ms-0" id="mode-fluid" type="checkbox"
                        data-theme-control="isFluid" />
                </div>
            </div>
            <hr />
            <div class="d-flex align-items-start"><img class="me-2" src="../../../assets/img/icons/paragraph.svg"
                    width="20" alt="" />
                <div class="flex-1">
                    <h5 class="fs-0 d-flex align-items-center">Navigation Position </h5>
                    <p class="fs--1 mb-2">Select a suitable navigation system for your web application </p>
                    <div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" id="option-navbar-vertical" type="radio"
                                name="navbar" value="vertical"
                                data-page-url="../../../modules/components/navs-and-tabs/vertical-navbar.html"
                                data-theme-control="navbarPosition" />
                            <label class="form-check-label" for="option-navbar-vertical">Vertical</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" id="option-navbar-top" type="radio" name="navbar"
                                value="top"
                                data-page-url="../../../modules/components/navs-and-tabs/top-navbar.html"
                                data-theme-control="navbarPosition" />
                            <label class="form-check-label" for="option-navbar-top">Top</label>
                        </div>
                        <div class="form-check form-check-inline me-0">
                            <input class="form-check-input" id="option-navbar-combo" type="radio" name="navbar"
                                value="combo"
                                data-page-url="../../../modules/components/navs-and-tabs/combo-navbar.html"
                                data-theme-control="navbarPosition" />
                            <label class="form-check-label" for="option-navbar-combo">Combo</label>
                        </div>
                    </div>
                </div>
            </div>
            <hr />
            <h5 class="fs-0 d-flex align-items-center">Vertical Navbar Style</h5>
            <p class="fs--1 mb-0">Switch between styles for your vertical navbar </p>
            <p> <a class="fs--1"
                    href="../../../modules/components/navs-and-tabs/vertical-navbar.html#navbar-styles">See
                    Documentation</a></p>
            <div class="btn-group d-block w-100 btn-group-navbar-style">
                <div class="row gx-2">
                    <div class="col-6">
                        <input class="btn-check" id="navbar-style-transparent" type="radio" name="navbarStyle"
                            value="transparent" data-theme-control="navbarStyle" />
                        <label class="btn d-block w-100 btn-navbar-style fs--1" for="navbar-style-transparent"> <img
                                class="img-fluid img-prototype" src="../../../assets/img/generic/default.png"
                                alt="" /><span class="label-text"> Transparent</span></label>
                    </div>
                    <div class="col-6">
                        <input class="btn-check" id="navbar-style-inverted" type="radio" name="navbarStyle"
                            value="inverted" data-theme-control="navbarStyle" />
                        <label class="btn d-block w-100 btn-navbar-style fs--1" for="navbar-style-inverted"> <img
                                class="img-fluid img-prototype" src="../../../assets/img/generic/inverted.png"
                                alt="" /><span class="label-text"> Inverted</span></label>
                    </div>
                    <div class="col-6">
                        <input class="btn-check" id="navbar-style-card" type="radio" name="navbarStyle"
                            value="card" data-theme-control="navbarStyle" />
                        <label class="btn d-block w-100 btn-navbar-style fs--1" for="navbar-style-card"> <img
                                class="img-fluid img-prototype" src="../../../assets/img/generic/card.png"
                                alt="" /><span class="label-text"> Card</span></label>
                    </div>
                    <div class="col-6">
                        <input class="btn-check" id="navbar-style-vibrant" type="radio" name="navbarStyle"
                            value="vibrant" data-theme-control="navbarStyle" />
                        <label class="btn d-block w-100 btn-navbar-style fs--1" for="navbar-style-vibrant"> <img
                                class="img-fluid img-prototype" src="../../../assets/img/generic/vibrant.png"
                                alt="" /><span class="label-text"> Vibrant</span></label>
                    </div>
                </div>
            </div>
            <div class="text-center mt-5"><img class="mb-4"
                    src="../../../assets/img/icons/spot-illustrations/47.png" alt="" width="120" />
                <h5>Like What You See?</h5>
                <p class="fs--1">Get Falcon now and create beautiful dashboards with hundreds of widgets.</p><a
                    class="mb-3 btn btn-primary"
                    href="https://themes.getbootstrap.com/product/falcon-admin-dashboard-webapp-template/"
                    target="_blank">Purchase</a>
            </div>
        </div>
    </div><a class="card setting-toggle" href="#settings-offcanvas" data-bs-toggle="offcanvas">
        <div class="card-body d-flex align-items-center py-md-2 px-2 py-1">
            <div class="bg-soft-primary position-relative rounded-start" style="height:34px;width:28px">
                <div class="settings-popover"><span class="ripple"><span
                            class="fa-spin position-absolute all-0 d-flex flex-center"><span
                                class="icon-spin position-absolute all-0 d-flex flex-center">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M19.7369 12.3941L19.1989 12.1065C18.4459 11.7041 18.0843 10.8487 18.0843 9.99495C18.0843 9.14118 18.4459 8.28582 19.1989 7.88336L19.7369 7.59581C19.9474 7.47484 20.0316 7.23291 19.9474 7.03131C19.4842 5.57973 18.6843 4.28943 17.6738 3.20075C17.5053 3.03946 17.2527 2.99914 17.0422 3.12011L16.393 3.46714C15.6883 3.84379 14.8377 3.74529 14.1476 3.3427C14.0988 3.31422 14.0496 3.28621 14.0002 3.25868C13.2568 2.84453 12.7055 2.10629 12.7055 1.25525V0.70081C12.7055 0.499202 12.5371 0.297594 12.2845 0.257272C10.7266 -0.105622 9.16879 -0.0653007 7.69516 0.257272C7.44254 0.297594 7.31623 0.499202 7.31623 0.70081V1.23474C7.31623 2.09575 6.74999 2.8362 5.99824 3.25599C5.95774 3.27861 5.91747 3.30159 5.87744 3.32493C5.15643 3.74527 4.26453 3.85902 3.53534 3.45302L2.93743 3.12011C2.72691 2.99914 2.47429 3.03946 2.30587 3.20075C1.29538 4.28943 0.495411 5.57973 0.0322686 7.03131C-0.051939 7.23291 0.0322686 7.47484 0.242788 7.59581L0.784376 7.8853C1.54166 8.29007 1.92694 9.13627 1.92694 9.99495C1.92694 10.8536 1.54166 11.6998 0.784375 12.1046L0.242788 12.3941C0.0322686 12.515 -0.051939 12.757 0.0322686 12.9586C0.495411 14.4102 1.29538 15.7005 2.30587 16.7891C2.47429 16.9504 2.72691 16.9907 2.93743 16.8698L3.58669 16.5227C4.29133 16.1461 5.14131 16.2457 5.8331 16.6455C5.88713 16.6767 5.94159 16.7074 5.99648 16.7375C6.75162 17.1511 7.31623 17.8941 7.31623 18.7552V19.2891C7.31623 19.4425 7.41373 19.5959 7.55309 19.696C7.64066 19.7589 7.74815 19.7843 7.85406 19.8046C9.35884 20.0925 10.8609 20.0456 12.2845 19.7729C12.5371 19.6923 12.7055 19.4907 12.7055 19.2891V18.7346C12.7055 17.8836 13.2568 17.1454 14.0002 16.7312C14.0496 16.7037 14.0988 16.6757 14.1476 16.6472C14.8377 16.2446 15.6883 16.1461 16.393 16.5227L17.0422 16.8698C17.2527 16.9907 17.5053 16.9504 17.6738 16.7891C18.7264 15.7005 19.4842 14.4102 19.9895 12.9586C20.0316 12.757 19.9474 12.515 19.7369 12.3941ZM10.0109 13.2005C8.1162 13.2005 6.64257 11.7893 6.64257 9.97478C6.64257 8.20063 8.1162 6.74905 10.0109 6.74905C11.8634 6.74905 13.3792 8.20063 13.3792 9.97478C13.3792 11.7893 11.8634 13.2005 10.0109 13.2005Z"
                                        fill="#2A7BE4"></path>
                                </svg></span></span></span></div>
            </div><small
                class="text-uppercase text-primary fw-bold bg-soft-primary py-2 pe-2 ps-1 rounded-end">customize</small>
        </div>
    </a>

    <section>

          <style>
             .head{
              text-align: center;
              margin-bottom: 20px
             }
          </style>
          <h1 class="head" > A broad selection of courses</h1>
          <hr style="height: 5px;
           background: teal;
           margin: 20px 0;
           box-shadow: 0px 0px 4px 2px rgba(204,204,204,1);
           margin:auto" 
           width="50%">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="card-box bg-blue">
                        <div class="inner">
                            <h3>Personal Development</h3>

                            <p> Strength of Communication </p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                        </div>
                        <a href="#" class="card-box-footer">View More <i
                                class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="card-box bg-green">
                        <div class="inner">
                            <h3> Top Courses </h3>
                            <p> Development </p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-money" aria-hidden="true"></i>
                        </div>
                        <a href="#" class="card-box-footer">View More <i
                                class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="card-box bg-orange">
                        <div class="inner">
                            <h3> Marketing Courses </h3>
                            <p>Marketing</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-user-plus" aria-hidden="true"></i>
                        </div>
                        <a href="#" class="card-box-footer">View More <i
                                class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="card-box bg-red">
                        <div class="inner">
                            <h3> Free Courses </h3>
                            <p> basecis of Programming </p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-users"></i>
                        </div>
                        <a href="#" class="card-box-footer">View More <i
                                class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <a href="http://www.uiuxstream.com/dashboard-user-profile-page-design-using-bootstrap-4/"></a>
                </div>
            </div>
        </div>


    </section>


    {{-- ----------footer---------- --}}
    <section id="footer">
        <div class="container">
            <div class="row text-center text-xs-center text-sm-left text-md-left">
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <h5>Quick links</h5>
                    <ul class="list-unstyled quick-links">
                        <li><a href="https://www.fiverr.com/share/qb8D02"><i
                                    class="fa fa-angle-double-right"></i>Home</a></li>
                        <li><a href="https://www.fiverr.com/share/qb8D02"><i
                                    class="fa fa-angle-double-right"></i>About</a></li>
                        <li><a href="https://www.fiverr.com/share/qb8D02"><i
                                    class="fa fa-angle-double-right"></i>FAQ</a></li>
                        <li><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-angle-double-right"></i>Get
                                Started</a></li>
                        <li><a href="https://www.fiverr.com/share/qb8D02"><i
                                    class="fa fa-angle-double-right"></i>Videos</a></li>
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <h5>Quick links</h5>
                    <ul class="list-unstyled quick-links">
                        <li><a href="https://www.fiverr.com/share/qb8D02"><i
                                    class="fa fa-angle-double-right"></i>Home</a></li>
                        <li><a href="https://www.fiverr.com/share/qb8D02"><i
                                    class="fa fa-angle-double-right"></i>About</a></li>
                        <li><a href="https://www.fiverr.com/share/qb8D02"><i
                                    class="fa fa-angle-double-right"></i>FAQ</a></li>
                        <li><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-angle-double-right"></i>Get
                                Started</a></li>
                        <li><a href="https://www.fiverr.com/share/qb8D02"><i
                                    class="fa fa-angle-double-right"></i>Videos</a></li>
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <h5>Quick links</h5>
                    <ul class="list-unstyled quick-links">
                        <li><a href="https://www.fiverr.com/share/qb8D02"><i
                                    class="fa fa-angle-double-right"></i>Home</a></li>
                        <li><a href="https://www.fiverr.com/share/qb8D02"><i
                                    class="fa fa-angle-double-right"></i>About</a></li>
                        <li><a href="https://www.fiverr.com/share/qb8D02"><i
                                    class="fa fa-angle-double-right"></i>FAQ</a></li>
                        <li><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-angle-double-right"></i>Get
                                Started</a></li>
                        <li><a href="https://wwwe.sunlimetech.com" title="Design and developed by"><i
                                    class="fa fa-angle-double-right"></i>Imprint</a></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
                    <ul class="list-unstyled list-inline social text-center">
                        <li class="list-inline-item"><a href="https://www.fiverr.com/share/qb8D02"><i
                                    class="fa fa-facebook"></i></a></li>
                        <li class="list-inline-item"><a href="https://www.fiverr.com/share/qb8D02"><i
                                    class="fa fa-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="https://www.fiverr.com/share/qb8D02"><i
                                    class="fa fa-instagram"></i></a></li>
                        <li class="list-inline-item"><a href="https://www.fiverr.com/share/qb8D02"><i
                                    class="fa fa-google-plus"></i></a></li>
                        <li class="list-inline-item"><a href="https://www.fiverr.com/share/qb8D02" target="_blank"><i
                                    class="fa fa-envelope"></i></a></li>
                    </ul>
                </div>
                <hr>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
                    <p><u><a href="https://www.nationaltransaction.com/">National Transaction Corporation</a></u> is a
                        Registered MSP/ISO of Elavon, Inc. Georgia [a wholly owned subsidiary of U.S. Bancorp,
                        Minneapolis, MN]</p>
                    <p class="h6">© All right Reversed.<a class="text-green ml-2"
                            href="https://www.sunlimetech.com" target="_blank">Sunlimetech</a></p>
                </div>
                <hr>
            </div>
        </div>
    </section>


    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="../../../vendors/popper/popper.min.js"></script>
    <script src="../../../vendors/bootstrap/bootstrap.min.js"></script>
    <script src="../../../vendors/anchorjs/anchor.min.js"></script>
    <script src="../../../vendors/is/is.min.js"></script>
    <script src="../../../vendors/swiper/swiper-bundle.min.js"></script>
    <script src="../../../vendors/fontawesome/all.min.js"></script>
    <script src="../../../vendors/lodash/lodash.min.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="../../../vendors/list.js/list.min.js"></script>
    <script src="../../../assets/js/theme.js"></script>




</body>

</html>
