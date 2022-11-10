<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>


    @include('layouts.app')




    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->


    <link rel="stylesheet" href="{{ asset('css/swiper-bundle.min.css') }}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7cPoppins:300,400,500,600,700,800,900&amp;display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/OverlayScrollbars.min.css') }}">

    <link rel="stylesheet" href="{{ asset('css/ theme-rtl.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/theme.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/ user-rtl.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/ user.min.css') }}">

    <link rel="stylesheet" href="{{ asset('css/soft_foter.css') }}">
    <title>Upto 64 Letters</title>
	<meta name="description" content="Transform your Universities & Institutions with high-quality, job-relevant online courses from leading corporates and companies. Deliver world-class learning to your students, alumni, faculty, and staff." />
	<link rel="canonical" href="https://www.interviewo.app/Universities & Institutions/" />
	<meta property="og:locale" content="en_US" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="Teach your students the skills of the future" />
	<meta property="og:description" content="interviewo for Universities & Institutions empowers any university to offer job-relevant, credit-ready online education to students, faculty, and staff." />
	<meta property="og:url" content="https://www.interviewo.app/" />
	<meta property="og:site_name" content="interviewo for Universities & Institutions" />
	<meta property="article:modified_time" content="2022-09-27T15:35:30+00:00" />
	<meta property="og:image" content="https://149343988.v2.pressablecdn.com/wp-content/uploads/iStock-1226994628-min.jpg" />
	<meta property="og:image:width" content="2121" />
	<meta property="og:image:height" content="1414" />
	<meta property="og:image:type" content="image/jpeg" />
	<meta name="twitter:card" content="summary_large_image" />
	<meta name="twitter:title" content="Teach your students the skills of the future" />
	<meta name="twitter:description" content="interviewo for Universities & Institutions empowers any university to offer job-relevant, credit-ready online education to students, faculty, and staff." />
	<meta name="twitter:image" content="https://149343988.v2.pressablecdn.com/wp-content/uploads/iStock-1226994628-min.jpg" />


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
                        {{-- <div class="btn-close-falcon" aria-label="Close" data-bs-dismiss="alert"></div> --}}
                        {{-- </div> --}}
                        {{-- <div class="card-body text-center"><img
                                src="../../../assets/img/icons/spot-illustrations/navbar-vertical.png" alt=""
                                width="80" />
                            <p class="fs--2 mt-2">Loving what you see? <br />Get your copy of </p>
                            <div class="d-grid"></div>
                        </div> --}}
                    </div>
                </div>
            </div>
            </nav>
            <div class="content">
                <nav class="navbar navbar-light navbar-glass navbar-top navbar-expand">
                    <button class="btn navbar-toggler-humburger-icon navbar-toggler me-1 me-sm-3" type="button"
                        data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse"
                        aria-controls="navbarVerticalCollapse" aria-expanded="false"
                        aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span
                                class="toggle-line"></span></span></button>
                    <a class="navbar-brand me-1 me-sm-3" href="../../../index.html">
                        <div class="d-flex align-items-center"><img class="me-2"
                                src="{{ url('images/Java-485.jpg') }}" alt="" width="40" /><span
                                class="font-sans-serif">Interviewo</span>
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
                                            {{-- Recently Browsed</h6><a
                                            class="dropdown-item fs--1 px-card py-1 hover-primary"
                                            href="../../../app/events/event-detail.html">
                                            <div class="d-flex align-items-center">
                                                <span class="fas fa-circle me-2 text-300 fs--2"></span>

                                                <div class="fw-normal title">Pages <span
                                                        class="fas fa-chevron-right mx-1 text-500 fs--2"
                                                        data-fa-transform="shrink-2"></span> Events</div>
                                            </div>
                                        </a> --}}
                                            {{-- <a class="dropdown-item fs--1 px-card py-1 hover-primary"
                                            href="../../../app/e-commerce/customers.html">
                                            <div class="d-flex align-items-center">
                                                <span class="fas fa-circle me-2 text-300 fs--2"></span>

                                                <div class="fw-normal title">E-commerce <span
                                                        class="fas fa-chevron-right mx-1 text-500 fs--2"
                                                        data-fa-transform="shrink-2"></span> Customers</div>
                                            </div>
                                        </a> --}}

                                            <hr class="bg-200 dark__bg-900" />
                                            <h6
                                                class="dropdown-header fw-medium text-uppercase px-card fs--2 pt-0 pb-2">
                                                Suggested Filter</h6><a class="dropdown-item px-card py-1 fs-0"
                                                href="../../../app/e-commerce/customers.html">
                                                <div class="d-flex align-items-center"><span
                                                        class="badge fw-medium text-decoration-none me-2 badge-soft-warning">customers:</span>
                                                    <div class="flex-1 fs--1 title">All customers list</div>
                                                </div>
                                            </a>
                                            <a class="dropdown-item px-card py-1 fs-0"
                                                href="../../../app/events/event-detail.html">
                                                <div class="d-flex align-items-center"><span
                                                        class="badge fw-medium text-decoration-none me-2 badge-soft-success">events:</span>
                                                    <div class="flex-1 fs--1 title">Latest events in current month</div>
                                                </div>
                                            </a>
                                            <a class="dropdown-item px-card py-1 fs-0"
                                                href="../../../app/e-commerce/product/product-grid.html">
                                                <div class="d-flex align-items-center"><span
                                                        class="badge fw-medium text-decoration-none me-2 badge-soft-info">products:</span>
                                                    <div class="flex-1 fs--1 title">Most popular products</div>
                                                </div>
                                            </a>

                                            <hr class="bg-200 dark__bg-900" />
                                            <h6
                                                class="dropdown-header fw-medium text-uppercase px-card fs--2 pt-0 pb-2">
                                                Files</h6><a class="dropdown-item px-card py-2" href="#!">
                                                <div class="d-flex align-items-center">
                                                    <div class="file-thumbnail me-2"><img
                                                            class="border h-100 w-100 fit-cover rounded-3"
                                                            src="../../../assets/img/products/3-thumb.png"
                                                            alt="" /></div>
                                                    <div class="flex-1">
                                                        <h6 class="mb-0 title">iPhone</h6>
                                                        <p class="fs--2 mb-0 d-flex"><span
                                                                class="fw-semi-bold">Antony</span><span
                                                                class="fw-medium text-600 ms-2">27 Sep at 10:30
                                                                AM</span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="dropdown-item px-card py-2" href="#!">
                                                <div class="d-flex align-items-center">
                                                    <div class="file-thumbnail me-2"><img class="img-fluid"
                                                            src="../../../assets/img/icons/zip.png" alt="" />
                                                    </div>
                                                    <div class="flex-1">
                                                        <h6 class="mb-0 title">Falcon v1.8.2</h6>
                                                        <p class="fs--2 mb-0 d-flex"><span
                                                                class="fw-semi-bold">John</span><span
                                                                class="fw-medium text-600 ms-2">30 Sep at 12:30
                                                                PM</span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </a>

                                            <hr class="bg-200 dark__bg-900" />
                                            <h6
                                                class="dropdown-header fw-medium text-uppercase px-card fs--2 pt-0 pb-2">
                                                Members</h6><a class="dropdown-item px-card py-2"
                                                href="../../../pages/user/profile.html">
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar avatar-l status-online me-2">
                                                        <img class="rounded-circle"
                                                            src="../../../assets/img/team/1.jpg" alt="" />

                                                    </div>
                                                    <div class="flex-1">
                                                        <h6 class="mb-0 title">Anna Karinina</h6>
                                                        <p class="fs--2 mb-0 d-flex">Technext Limited</p>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="dropdown-item px-card py-2"
                                                href="../../../pages/user/profile.html">
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar avatar-l me-2">
                                                        <img class="rounded-circle"
                                                            src="../../../assets/img/team/2.jpg" alt="" />

                                                    </div>
                                                    <div class="flex-1">
                                                        <h6 class="mb-0 title">Antony Hopkins</h6>
                                                        <p class="fs--2 mb-0 d-flex">Brain Trust</p>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="dropdown-item px-card py-2"
                                                href="../../../pages/user/profile.html">
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar avatar-l me-2">
                                                        <img class="rounded-circle"
                                                            src="../../../assets/img/team/3.jpg" alt="" />

                                                    </div>
                                                    <div class="flex-1">
                                                        <h6 class="mb-0 title">Emma Watson</h6>
                                                        <p class="fs--2 mb-0 d-flex">Google</p>
                                                    </div>
                                                </div>
                                            </a>

                                    </div>
                                    <div class="text-center mt-n3">
                                        <p class="fallback fw-bold fs-1 d-none">No Result Found.</p>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <ul class="navbar-nav navbar-nav-icons ms-auto flex-row align-items-center">
                        <li class="nav-item">
                            <div class="theme-control-toggle fa-icon-wait px-2">
                                <input class="form-check-input ms-0 theme-control-toggle-input"
                                    id="themeControlToggle" type="checkbox" data-theme-control="theme"
                                    value="dark" />
                                <label class="mb-0 theme-control-toggle-label theme-control-toggle-light"
                                    for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left"
                                    title="Switch to light theme"><span class="fas fa-sun fs-0"></span></label>
                                <label class="mb-0 theme-control-toggle-label theme-control-toggle-dark"
                                    for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left"
                                    title="Switch to dark theme"><span class="fas fa-moon fs-0"></span></label>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-0 notification-indicator notification-indicator-warning notification-indicator-fill fa-icon-wait"
                                href="../../../app/e-commerce/shopping-cart.html"><span class="fas fa-shopping-cart"
                                    data-fa-transform="shrink-7" style="font-size: 33px;"></span><span
                                    class="notification-indicator-number">1</span></a>

                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link notification-indicator notification-indicator-primary px-0 fa-icon-wait"
                                id="navbarDropdownNotification" href="#" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span
                                    class="fas fa-bell" data-fa-transform="shrink-6"
                                    style="font-size: 33px;"></span></a>
                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-card dropdown-menu-notification"
                                aria-labelledby="navbarDropdownNotification">
                                <div class="card card-notification shadow-none">
                                    <div class="card-header">
                                        <div class="row justify-content-between align-items-center">
                                            <div class="col-auto">
                                                <h6 class="card-header-title mb-0">Notifications</h6>
                                            </div>
                                            <div class="col-auto ps-0 ps-sm-3"><a class="card-link fw-normal"
                                                    href="#">Mark all as read</a></div>
                                        </div>
                                    </div>
                                    <div class="scrollbar-overlay" style="max-height:19rem">
                                        <div class="list-group list-group-flush fw-normal fs--1">
                                            <div class="list-group-title border-bottom">NEW</div>
                                            <div class="list-group-item">
                                                <a class="notification notification-flush notification-unread"
                                                    href="#!">
                                                    <div class="notification-avatar">
                                                        <div class="avatar avatar-2xl me-3">
                                                            <img class="rounded-circle"
                                                                src="../../../assets/img/team/1-thumb.png"
                                                                alt="" />

                                                        </div>
                                                    </div>
                                                    <div class="notification-body">
                                                        <p class="mb-1"><strong>Emma Watson</strong> replied to your
                                                            comment : "Hello world 😍"</p>
                                                        <span class="notification-time"><span class="me-2"
                                                                role="img" aria-label="Emoji">💬</span>Just
                                                            now</span>

                                                    </div>
                                                </a>

                                            </div>
                                            <div class="list-group-item">
                                                <a class="notification notification-flush notification-unread"
                                                    href="#!">
                                                    <div class="notification-avatar">
                                                        <div class="avatar avatar-2xl me-3">
                                                            <div class="avatar-name rounded-circle"><span>AB</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="notification-body">
                                                        <p class="mb-1"><strong>Albert Brooks</strong> reacted to
                                                            <strong>Mia Khalifa's</strong> status
                                                        </p>
                                                        <span class="notification-time"><span
                                                                class="me-2 fab fa-gratipay text-danger"></span>9hr</span>

                                                    </div>
                                                </a>

                                            </div>
                                            <div class="list-group-title border-bottom">EARLIER</div>
                                            <div class="list-group-item">
                                                <a class="notification notification-flush" href="#!">
                                                    <div class="notification-avatar">
                                                        <div class="avatar avatar-2xl me-3">
                                                            <img class="rounded-circle"
                                                                src="../../../assets/img/icons/weather-sm.jpg"
                                                                alt="" />

                                                        </div>
                                                    </div>
                                                    <div class="notification-body">
                                                        <p class="mb-1">The forecast today shows a low of 20&#8451;
                                                            in California. See today's weather.</p>
                                                        <span class="notification-time"><span class="me-2"
                                                                role="img" aria-label="Emoji">🌤️</span>1d</span>

                                                    </div>
                                                </a>

                                            </div>
                                            <div class="list-group-item">
                                                <a class="border-bottom-0 notification-unread  notification notification-flush"
                                                    href="#!">
                                                    <div class="notification-avatar">
                                                        <div class="avatar avatar-xl me-3">
                                                            <img class="rounded-circle"
                                                                src="../../../assets/img/logos/oxford.png"
                                                                alt="" />

                                                        </div>
                                                    </div>
                                                    <div class="notification-body">
                                                        <p class="mb-1"><strong>University of Oxford</strong> created
                                                            an event : "Causal Inference Hilary 2019"</p>
                                                        <span class="notification-time"><span class="me-2"
                                                                role="img" aria-label="Emoji">✌️</span>1w</span>

                                                    </div>
                                                </a>

                                            </div>
                                            <div class="list-group-item">
                                                <a class="border-bottom-0 notification notification-flush"
                                                    href="#!">
                                                    <div class="notification-avatar">
                                                        <div class="avatar avatar-xl me-3">
                                                            <img class="rounded-circle"
                                                                src="../../../assets/img/team/10.jpg"
                                                                alt="" />

                                                        </div>
                                                    </div>
                                                    <div class="notification-body">
                                                        <p class="mb-1"><strong>James Cameron</strong> invited to
                                                            join the group: United Nations International Children's Fund
                                                        </p>
                                                        <span class="notification-time"><span class="me-2"
                                                                role="img" aria-label="Emoji">🙋‍</span>2d</span>

                                                    </div>
                                                </a>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer text-center border-top"><a class="card-link d-block"
                                            href="../../../app/social/notifications.html">View all</a></div>
                                </div>
                            </div>

                        </li>
                        <li class="nav-item dropdown"><a class="nav-link pe-0" id="navbarDropdownUser"
                                href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <div class="avatar avatar-xl">
                                    <img class="rounded-circle" src="{{ url('images/Rog.jpg') }}"
                                        alt="" />

                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end py-0" aria-labelledby="navbarDropdownUser">
                                {{-- <div class="bg-white dark__bg-1000 rounded-2 py-2">
                                    <a class="dropdown-item fw-bold text-warning" href="#!"><span
                                            class="fas fa-crown me-1"></span><span>Go Pro</span></a>

                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#!">Set status</a>
                                    <a class="dropdown-item" href="../../../pages/user/profile.html">Profile &amp;
                                        account</a>
                                    <a class="dropdown-item" href="#!">Feedback</a>

                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="../../../pages/user/settings.html">Settings</a>
                                    <a class="dropdown-item"
                                        href="../../../pages/authentication/card/logout.html">Logout</a>
                                </div> --}}
                            </div>
                        </li>
                    </ul>
                </nav>
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6 mb-4 mb-lg-0">
                                <div class="product-slider" id="galleryTop">
                                    <div class="swiper-container theme-slider position-lg-absolute all-0"
                                        data-swiper='{"autoHeight":true,"spaceBetween":5,"loop":true,"loopedSlides":5,"thumb":{"spaceBetween":5,"slidesPerView":5,"loop":true,"freeMode":true,"grabCursor":true,"loopedSlides":5,"centeredSlides":true,"slideToClickedSlide":true,"watchSlidesVisibility":true,"watchSlidesProgress":true,"parent":"#galleryTop"},"slideToClickedSlide":true}'>
                                        <div class="swiper-wrapper h-100">
                                            <div class="swiper-slide h-100"><img
                                                    class="rounded-1 fit-cover h-100 w-100"
                                                    src="{{ url('images/Rog.jpg') }}" alt="" />
                                            </div>
                                            {{-- <div class="swiper-slide h-100"><img
                                                    class="rounded-1 fit-cover h-100 w-100"
                                                    src="../../../assets/img/products/1-2.jpg" alt="" /></div>
                                            <div class="swiper-slide h-100"> <img
                                                    class="rounded-1 fit-cover h-100 w-100"
                                                    src="../../../assets/img/products/1-3.jpg" alt="" /></div>
                                            <div class="swiper-slide h-100"> <img
                                                    class="rounded-1 fit-cover h-100 w-100"
                                                    src="../../../assets/img/products/1-4.jpg" alt="" /></div>
                                            <div class="swiper-slide h-100"> <img
                                                    class="rounded-1 fit-cover h-100 w-100"
                                                    src="../../../assets/img/products/1-5.jpg" alt="" /></div>
                                            <div class="swiper-slide h-100"> <img
                                                    class="rounded-1 fit-cover h-100 w-100"
                                                    src="../../../assets/img/products/1-6.jpg" alt="" /></div> --}}
                                        </div>
                                        <div class="swiper-nav">
                                            <div class="swiper-button-next swiper-button-white"></div>
                                            <div class="swiper-button-prev swiper-button-white"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <h5>Apple MacBook Pro (15" Retina, Touch Bar, 2.2GHz 6-Core Intel Core i7, 16GB RAM,
                                    256GB SSD) - Space Gray (Latest Model)</h5><a class="fs--1 mb-2 d-block"
                                    href="#!">Computer &amp; Accessories</a>
                                <div class="fs--2 mb-3 d-inline-block text-decoration-none"><span
                                        class="fa fa-star text-warning"></span><span
                                        class="fa fa-star text-warning"></span><span
                                        class="fa fa-star text-warning"></span><span
                                        class="fa fa-star text-warning"></span><span
                                        class="fa fa-star-half-alt text-warning star-icon"></span><span
                                        class="ms-1 text-600">(8)</span>
                                </div>
                                <p class="fs--1">Testing conducted by Apple in October 2018 using pre-production
                                    2.9GHz 6‑core Intel Core i9‑based 15-inch MacBook Pro systems with Radeon Pro Vega
                                    20 graphics, and shipping 2.9GHz 6‑core Intel Core i9‑based 15‑inch MacBook Pro
                                    systems with Radeon Pro 560X graphics, both configured with 32GB of RAM and 4TB SSD.
                                </p>
                                <h4 class="d-flex align-items-center"><span
                                        class="text-warning me-2">$1200</span><span class="me-1 fs--1 text-500">
                                        <del class="me-1">$2400</del><strong>-50%</strong></span></h4>
                                <p class="fs--1 mb-1"> <span>Shipping Cost: </span><strong>$50</strong></p>
                                <p class="fs--1">Stock: <strong class="text-success">Available</strong></p>
                                <p class="fs--1 mb-3">Tags: <a class="ms-2" href="#!">Computer,</a><a
                                        class="ms-1" href="#!">Mac Book,</a><a class="ms-1"
                                        href="#!">Mac Book Pro,</a><a class="ms-1" href="#!">Laptop </a>
                                </p>
                                <div class="row">
                                    <div class="col-auto pe-0">
                                        <div class="input-group input-group-sm" data-quantity="data-quantity">
                                            <button class="btn btn-sm btn-outline-secondary border-300"
                                                data-field="input-quantity" data-type="minus">-</button>
                                            <input class="form-control text-center input-quantity input-spin-none"
                                                type="number" min="0" value="0"
                                                aria-label="Amount (to the nearest dollar)" style="max-width: 50px" />
                                            <button class="btn btn-sm btn-outline-secondary border-300"
                                                data-field="input-quantity" data-type="plus">+</button>
                                        </div>
                                    </div>
                                    <div class="col-auto px-2 px-md-3"><a class="btn btn-sm btn-primary"
                                            href="#!"><span class="fas fa-cart-plus me-sm-2"></span><span
                                                class="d-none d-sm-inline-block">Add To Cart</span></a></div>
                                    <div class="col-auto px-0"><a class="btn btn-sm btn-outline-danger border-300"
                                            href="#!" data-bs-toggle="tooltip" data-bs-placement="top"
                                            title="Add to Wish List"><span class="far fa-heart me-1"></span>282</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Description --}}

                        <div class="row">
                            <div class="col-12">
                                <div class="overflow-hidden mt-4">
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item"><a class="nav-link active ps-0" id="description-tab"
                                                data-bs-toggle="tab" href="#tab-description" role="tab"
                                                aria-controls="tab-description" aria-selected="true">Description</a>
                                        </li>




                                    </ul>
                                    <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade show active" id="tab-description" role="tabpanel"
                                            aria-labelledby="description-tab">
                                            <div class="mt-3">
                                                <p>Over the years, Apple has built a reputation for releasing its
                                                    products with a lot of fanfare – but that didn’t exactly happen for
                                                    the MacBook Pro 2018. Rather, Apple’s latest pro laptop experienced
                                                    a subdued launch, in spite of it offering a notable spec upgrade
                                                    over the 2017 model – along with an improved keyboard. And, as with
                                                    previous generations the 15-inch MacBook Pro arrives alongside a
                                                    13-inch model.</p>
                                                <p>Apple still loves the MacBook Pro though, despite the quiet release.
                                                    This is because, while the iPhone XS and iPad, along with the
                                                    12-inch MacBook, are aimed at everyday consumers, the MacBook Pro
                                                    has always aimed at the creative and professional audience. This new
                                                    MacBook Pro brings a level of performance (and price) unlike its
                                                    more consumer-oriented devices. </p>
                                                <p>Still, Apple wants mainstream users to buy the MacBook Pro, too. So,
                                                    if you’re just looking for the most powerful MacBook on the market,
                                                    you’ll love this new MacBook Pro. Just keep in mind that, while the
                                                    keyboard has been updated, there are still some issues with it.</p>
                                                <p>There’s enough of a difference between the two sizes when it comes to
                                                    performance to warrant two separate reviews, and here we’ll be
                                                    looking at how the flagship 15-inch MacBook Pro performs in 2019.
                                                </p>
                                                <p>It's build quality and design is batter than elit. Numquam excepturi
                                                    a debitis, sint voluptates, nam odit vel delectus id repellendus
                                                    vero reprehenderit quidem totam praesentium vitae nesciunt deserunt.
                                                    Sint, veniam?</p>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="tab-reviews" role="tabpanel"
                                            aria-labelledby="reviews-tab">
                                            <div class="row mt-3">
                                                <div class="col-lg-6 mb-4 mb-lg-0">
                                                    <div class="mb-1"><span
                                                            class="fa fa-star text-warning fs--1"></span><span
                                                            class="fa fa-star text-warning fs--1"></span><span
                                                            class="fa fa-star text-warning fs--1"></span><span
                                                            class="fa fa-star text-warning fs--1"></span><span
                                                            class="fa fa-star text-warning fs--1"></span><span
                                                            class="ms-3 text-dark fw-semi-bold">Awesome support, great
                                                            code 😍</span>
                                                    </div>
                                                    <p class="fs--1 mb-2 text-600">By Drik Smith • October 14, 2019</p>
                                                    <p class="mb-0">You shouldn't need to read a review to see how
                                                        nice and polished this theme is. So I'll tell you something you
                                                        won't find in the demo. After the download I had a technical
                                                        question, emailed the team and got a response right from the
                                                        team CEO with helpful advice.</p>
                                                    <hr class="my-4" />
                                                    <div class="mb-1"><span
                                                            class="fa fa-star text-warning fs--1"></span><span
                                                            class="fa fa-star text-warning fs--1"></span><span
                                                            class="fa fa-star text-warning fs--1"></span><span
                                                            class="fa fa-star text-warning fs--1"></span><span
                                                            class="fa fa-star-half-alt text-warning star-icon fs--1"></span><span
                                                            class="ms-3 text-dark fw-semi-bold">Outstanding Design,
                                                            Awesome Support</span>
                                                    </div>
                                                    <p class="fs--1 mb-2 text-600">By Liane • December 14, 2019</p>
                                                    <p class="mb-0">This really is an amazing template - from the
                                                        style to the font - clean layout. SO worth the money! The demo
                                                        pages show off what Bootstrap 4 can impressively do. Great
                                                        template!! Support response is FAST and the team is amazing -
                                                        communication is important.</p>
                                                </div>
                                               
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="overflow-hidden mt-4">
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item"><a class="nav-link active ps-0" id="description-tab"
                                                data-bs-toggle="tab" href="#tab-description" role="tab"
                                                aria-controls="tab-description" aria-selected="true">Benefits</a>
                                        </li>




                                    </ul>
                                    <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade show active" id="tab-description" role="tabpanel"
                                            aria-labelledby="description-tab">
                                            <div class="mt-3">
                                                <p>Over the years, Apple has built a reputation for releasing its
                                                    products with a lot of fanfare – but that didn’t exactly happen for
                                                    the MacBook Pro 2018. Rather, Apple’s latest pro laptop experienced
                                                    a subdued launch, in spite of it offering a notable spec upgrade
                                                    over the 2017 model – along with an improved keyboard. And, as with
                                                    previous generations the 15-inch MacBook Pro arrives alongside a
                                                    13-inch model.</p>
                                                <p>Apple still loves the MacBook Pro though, despite the quiet release.
                                                    This is because, while the iPhone XS and iPad, along with the
                                                    12-inch MacBook, are aimed at everyday consumers, the MacBook Pro
                                                    has always aimed at the creative and professional audience. This new
                                                    MacBook Pro brings a level of performance (and price) unlike its
                                                    more consumer-oriented devices. </p>
                                                <p>Still, Apple wants mainstream users to buy the MacBook Pro, too. So,
                                                    if you’re just looking for the most powerful MacBook on the market,
                                                    you’ll love this new MacBook Pro. Just keep in mind that, while the
                                                    keyboard has been updated, there are still some issues with it.</p>
                                                <p>There’s enough of a difference between the two sizes when it comes to
                                                    performance to warrant two separate reviews, and here we’ll be
                                                    looking at how the flagship 15-inch MacBook Pro performs in 2019.
                                                </p>
                                                <p>It's build quality and design is batter than elit. Numquam excepturi
                                                    a debitis, sint voluptates, nam odit vel delectus id repellendus
                                                    vero reprehenderit quidem totam praesentium vitae nesciunt deserunt.
                                                    Sint, veniam?</p>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="tab-reviews" role="tabpanel"
                                            aria-labelledby="reviews-tab">
                                            <div class="row mt-3">
                                                <div class="col-lg-6 mb-4 mb-lg-0">
                                                    <div class="mb-1"><span
                                                            class="fa fa-star text-warning fs--1"></span><span
                                                            class="fa fa-star text-warning fs--1"></span><span
                                                            class="fa fa-star text-warning fs--1"></span><span
                                                            class="fa fa-star text-warning fs--1"></span><span
                                                            class="fa fa-star text-warning fs--1"></span><span
                                                            class="ms-3 text-dark fw-semi-bold">Awesome support, great
                                                            code 😍</span>
                                                    </div>
                                                    <p class="fs--1 mb-2 text-600">By Drik Smith • October 14, 2019</p>
                                                    <p class="mb-0">You shouldn't need to read a review to see how
                                                        nice and polished this theme is. So I'll tell you something you
                                                        won't find in the demo. After the download I had a technical
                                                        question, emailed the team and got a response right from the
                                                        team CEO with helpful advice.</p>
                                                    <hr class="my-4" />
                                                    <div class="mb-1"><span
                                                            class="fa fa-star text-warning fs--1"></span><span
                                                            class="fa fa-star text-warning fs--1"></span><span
                                                            class="fa fa-star text-warning fs--1"></span><span
                                                            class="fa fa-star text-warning fs--1"></span><span
                                                            class="fa fa-star-half-alt text-warning star-icon fs--1"></span><span
                                                            class="ms-3 text-dark fw-semi-bold">Outstanding Design,
                                                            Awesome Support</span>
                                                    </div>
                                                    <p class="fs--1 mb-2 text-600">By Liane • December 14, 2019</p>
                                                    <p class="mb-0">This really is an amazing template - from the
                                                        style to the font - clean layout. SO worth the money! The demo
                                                        pages show off what Bootstrap 4 can impressively do. Great
                                                        template!! Support response is FAST and the team is amazing -
                                                        communication is important.</p>
                                                </div>
                                               
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>


                        <div class="row">
                            <div class="col-12">
                                <div class="overflow-hidden mt-4">
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item"><a class="nav-link active ps-0" id="description-tab"
                                                data-bs-toggle="tab" href="#tab-description" role="tab"
                                                aria-controls="tab-description" aria-selected="true">Features</a>
                                        </li>




                                    </ul>
                                    <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade show active" id="tab-description" role="tabpanel"
                                            aria-labelledby="description-tab">
                                            <div class="mt-3">
                                                <p>Over the years, Apple has built a reputation for releasing its
                                                    products with a lot of fanfare – but that didn’t exactly happen for
                                                    the MacBook Pro 2018. Rather, Apple’s latest pro laptop experienced
                                                    a subdued launch, in spite of it offering a notable spec upgrade
                                                    over the 2017 model – along with an improved keyboard. And, as with
                                                    previous generations the 15-inch MacBook Pro arrives alongside a
                                                    13-inch model.</p>
                                                <p>Apple still loves the MacBook Pro though, despite the quiet release.
                                                    This is because, while the iPhone XS and iPad, along with the
                                                    12-inch MacBook, are aimed at everyday consumers, the MacBook Pro
                                                    has always aimed at the creative and professional audience. This new
                                                    MacBook Pro brings a level of performance (and price) unlike its
                                                    more consumer-oriented devices. </p>
                                                <p>Still, Apple wants mainstream users to buy the MacBook Pro, too. So,
                                                    if you’re just looking for the most powerful MacBook on the market,
                                                    you’ll love this new MacBook Pro. Just keep in mind that, while the
                                                    keyboard has been updated, there are still some issues with it.</p>
                                                <p>There’s enough of a difference between the two sizes when it comes to
                                                    performance to warrant two separate reviews, and here we’ll be
                                                    looking at how the flagship 15-inch MacBook Pro performs in 2019.
                                                </p>
                                                <p>It's build quality and design is batter than elit. Numquam excepturi
                                                    a debitis, sint voluptates, nam odit vel delectus id repellendus
                                                    vero reprehenderit quidem totam praesentium vitae nesciunt deserunt.
                                                    Sint, veniam?</p>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="tab-reviews" role="tabpanel"
                                            aria-labelledby="reviews-tab">
                                            <div class="row mt-3">
                                                <div class="col-lg-6 mb-4 mb-lg-0">
                                                    <div class="mb-1"><span
                                                            class="fa fa-star text-warning fs--1"></span><span
                                                            class="fa fa-star text-warning fs--1"></span><span
                                                            class="fa fa-star text-warning fs--1"></span><span
                                                            class="fa fa-star text-warning fs--1"></span><span
                                                            class="fa fa-star text-warning fs--1"></span><span
                                                            class="ms-3 text-dark fw-semi-bold">Awesome support, great
                                                            code 😍</span>
                                                    </div>
                                                    <p class="fs--1 mb-2 text-600">By Drik Smith • October 14, 2019</p>
                                                    <p class="mb-0">You shouldn't need to read a review to see how
                                                        nice and polished this theme is. So I'll tell you something you
                                                        won't find in the demo. After the download I had a technical
                                                        question, emailed the team and got a response right from the
                                                        team CEO with helpful advice.</p>
                                                    <hr class="my-4" />
                                                    <div class="mb-1"><span
                                                            class="fa fa-star text-warning fs--1"></span><span
                                                            class="fa fa-star text-warning fs--1"></span><span
                                                            class="fa fa-star text-warning fs--1"></span><span
                                                            class="fa fa-star text-warning fs--1"></span><span
                                                            class="fa fa-star-half-alt text-warning star-icon fs--1"></span><span
                                                            class="ms-3 text-dark fw-semi-bold">Outstanding Design,
                                                            Awesome Support</span>
                                                    </div>
                                                    <p class="fs--1 mb-2 text-600">By Liane • December 14, 2019</p>
                                                    <p class="mb-0">This really is an amazing template - from the
                                                        style to the font - clean layout. SO worth the money! The demo
                                                        pages show off what Bootstrap 4 can impressively do. Great
                                                        template!! Support response is FAST and the team is amazing -
                                                        communication is important.</p>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>


                    </div>
                </div>

          
          
         
            </div>
        </div>

    </main>
    @include('layouts.footer')
</body>






<!-- ===============================================-->
<!--    End of Main Content-->
<!-- ===============================================-->




<!-- ===============================================-->
<!--    JavaScripts-->
<!-- ===============================================-->
<script src="../../../vendors/popper/popper.min.js"></script>
<script src="../../../vendors/bootstrap/bootstrap.min.js"></script>
<script src="../../../vendors/anchorjs/anchor.min.js"></script>
<script src="../../../vendors/is/is.min.js"></script>
<script src="../../../vendors/swiper/swiper-bundle.min.js"></script>
<script src="../../../vendors/rater-js/index.js"></script>
<script src="../../../vendors/fontawesome/all.min.js"></script>
<script src="../../../vendors/lodash/lodash.min.js"></script>
<script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
<script src="../../../vendors/list.js/list.min.js"></script>
<script src="../../../assets/js/theme.js"></script>

</body>

</html>
