<!DOCTYPE html>
<html lang="en-US" dir="ltr">




<head>
    @include('layouts.app')

    <link rel="stylesheet" href="{{ asset('css/leaflet.css') }}">
    <link rel="stylesheet" href="{{ asset('css/MarkerCluster.css ') }}">
    <link rel="stylesheet" href="{{ asset('css/MarkerCluster.Default.css') }}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7cPoppins:300,400,500,600,700,800,900&amp;display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/OverlayScrollbars.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/ theme-rtl.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/theme.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/ user-rtl.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/ user.min.css') }}">


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



</head>


<body>

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
        <div class="container" data-layout="container">
            <script>
                var isFluid = JSON.parse(localStorage.getItem('isFluid'));
                if (isFluid) {
                    var container = document.querySelector('[data-layout]');
                    container.classList.remove('container');
                    container.classList.add('container-fluid');
                }
            </script>
            <nav class="navbar navbar-light navbar-vertical navbar-expand-xl">
                <script>
                    var navbarStyle = localStorage.getItem("navbarStyle");
                    if (navbarStyle && navbarStyle !== 'transparent') {
                        document.querySelector('.navbar-vertical').classList.add(`navbar-${navbarStyle}`);
                    }
                </script>
                <div class="d-flex align-items-center">
                    <div class="toggle-icon-wrapper">

                        <button class="btn navbar-toggler-humburger-icon navbar-vertical-toggle"
                            data-bs-toggle="tooltip" data-bs-placement="left" title="Toggle Navigation"><span
                                class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>

                    </div><a class="navbar-brand" href="{{ asset('layouts/index.blade.php') }}">
                        <div class="d-flex align-items-center py-3"><img class="me-2"
                                src="https://interviewo.app/images/own-images/skills/tech/Javascript-667.jpg"
                                alt="" width="40" /><span class="font-sans-serif">interviewo.app
                            </span>
                        </div>
                    </a>
                </div>
                <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
                    <div class="navbar-vertical-content scrollbar">
                        <ul class="navbar-nav flex-column mb-3" id="navbarVerticalNav">
                            <li class="nav-item">
                                <!-- parent pages--><a class="nav-link dropdown-indicator" href="#dashboard"
                                    role="button" data-bs-toggle="collapse" aria-expanded="true"
                                    aria-controls="dashboard">
                                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                                class="fas fa-chart-pie"></span></span><span
                                            class="nav-link-text ps-1">Dashboard</span>
                                    </div>
                                </a>
                                <ul class="nav collapse show" id="dashboard">

                                    <li class="nav-item"><a class="nav-link" href="{{ url('/consumers') }}"
                                            aria-expanded="false">
                                            <div class="d-flex align-items-center"><span
                                                    class="nav-link-text ps-1">Consumers</span>
                                            </div>
                                        </a>
                                        <!-- more inner pages-->
                                    </li>

                                    <li class="nav-item"><a class="nav-link" href="{{ url('/soft_list') }}"
                                            aria-expanded="false">
                                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Soft
                                                    Skills</span>
                                            </div>
                                        </a>
                                        <!-- more inner pages-->
                                    </li>

                                    <li class="nav-item"><a class="nav-link" href="{{ url('/saas') }}"
                                            aria-expanded="false">
                                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Hard
                                                    Skills</span>
                                            </div>
                                        </a>
                                        <!-- more inner pages-->
                                    </li>


                                    <li class="nav-item"><a class="nav-link" href="{{ url('/apis') }}"
                                            aria-expanded="false">
                                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Api
                                                    For App</span>
                                            </div>
                                        </a>
                                        <!-- more inner pages-->
                                    </li>

                                    <li class="nav-item"><a class="nav-link" href="{{ url('/data_entry') }}"
                                            aria-expanded="false">
                                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Data
                                                    Entry</span>
                                            </div>
                                        </a>
                                        <!-- more inner pages-->
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <!-- label-->
                                <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
                                    <div class="col-auto navbar-vertical-label">Documentation
                                    </div>
                                    <div class="col ps-0">
                                        <hr class="mb-0 navbar-vertical-divider" />
                                    </div>
                                </div>
                                <!-- parent pages--><a class="nav-link" href="../documentation/getting-started.html"
                                    role="button" aria-expanded="false">
                                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                                class="fas fa-rocket"></span></span><span
                                            class="nav-link-text ps-1">Getting started</span>
                                    </div>
                                </a>
                                <!-- parent pages--><a class="nav-link dropdown-indicator" href="#customization"
                                    role="button" data-bs-toggle="collapse" aria-expanded="false"
                                    aria-controls="customization">
                                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                                class="fas fa-wrench"></span></span><span
                                            class="nav-link-text ps-1">Customization</span>
                                    </div>
                                </a>
                                <ul class="nav collapse false" id="customization">
                                    <li class="nav-item"><a class="nav-link"
                                            href="../documentation/customization/configuration.html"
                                            aria-expanded="false">
                                            <div class="d-flex align-items-center"><span
                                                    class="nav-link-text ps-1">Configuration</span>
                                            </div>
                                        </a>
                                        <!-- more inner pages-->
                                    </li>
                                    <li class="nav-item"><a class="nav-link"
                                            href="../documentation/customization/styling.html" aria-expanded="false">
                                            <div class="d-flex align-items-center"><span
                                                    class="nav-link-text ps-1">Styling</span>
                                            </div>
                                        </a>
                                        <!-- more inner pages-->
                                    </li>
                                    <li class="nav-item"><a class="nav-link"
                                            href="../documentation/customization/dark-mode.html"
                                            aria-expanded="false">
                                            <div class="d-flex align-items-center"><span
                                                    class="nav-link-text ps-1">Dark mode</span><span
                                                    class="badge rounded-pill ms-2 badge-soft-success">New</span>
                                            </div>
                                        </a>
                                        <!-- more inner pages-->
                                    </li>
                                    <li class="nav-item"><a class="nav-link"
                                            href="../documentation/customization/plugin.html" aria-expanded="false">
                                            <div class="d-flex align-items-center"><span
                                                    class="nav-link-text ps-1">Plugin</span>
                                            </div>
                                        </a>
                                        <!-- more inner pages-->
                                    </li>
                                </ul>
                                <!-- parent pages--><a class="nav-link" href="../documentation/gulp.html"
                                    role="button" aria-expanded="false">
                                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                                class="fab fa-gulp"></span></span><span
                                            class="nav-link-text ps-1">Gulp</span>
                                    </div>
                                </a>
                                <!-- parent pages--><a class="nav-link" href="../documentation/design-file.html"
                                    role="button" aria-expanded="false">
                                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                                class="fas fa-palette"></span></span><span
                                            class="nav-link-text ps-1">Design file</span>
                                    </div>
                                </a>
                                <!-- parent pages--><a class="nav-link" href="../changelog.html" role="button"
                                    aria-expanded="false">
                                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                                class="fas fa-code-branch"></span></span><span
                                            class="nav-link-text ps-1">Changelog</span>
                                    </div>
                                </a>
                            </li>
                        </ul>
                        <div class="settings mb-3">
                            <div class="card alert p-0 shadow-none" role="alert">
                                <div class="btn-close-falcon-container">
                                    <div class="btn-close-falcon" aria-label="Close" data-bs-dismiss="alert">
                                    </div>
                                </div>
                                <div class="card-body text-center">
                                    <p class="fs--2 mt-2">Loving what you see? <br />Get your copy of <a
                                            href="#!">Falcon</a></p>
                                    <div class="d-grid"><a class="btn btn-sm btn-purchase"
                                            href="https://themes.getbootstrap.com/product/falcon-admin-dashboard-webapp-template/"
                                            target="_blank">Purchase</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
            <div class="content">
                <div class="row g-3 mb-3" >
                    <form action="{{ route('data_entry') }}" method="post">
                        @csrf
                    <div class="col-12" style="margin-top: 100px">
                        <input type="text" class="form-control" name="title" placeholder="Title"><br>
                        <textarea class="form-control" name="description" id="" cols="30" rows="10" placeholder="benefits"></textarea><br>
                        {{-- <textarea name="description" id="" cols="30" rows="10" placeholder="Description" class="form-control"></textarea><br> --}}
                        <textarea class="form-control" name="benefits" id="" cols="30" rows="10" placeholder="benefits"></textarea><br>
                        <textarea class="form-control" name="features" id="" cols="30" rows="10" placeholder="features"></textarea><br>
                        <textarea class="form-control" name="image_path" id="" cols="30" rows="10" placeholder="image"></textarea><br>
                        <textarea class="form-control" name="tags" id="" cols="30" rows="10" placeholder="tags"></textarea><br>
                        <textarea class="form-control" name="details" id="" cols="30" rows="10" placeholder="Details"></textarea><br>
                        <button class="btn btn-success" type="submit">Submit</button>
                    </form>
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
                                    src="../assets/img/generic/falcon-mode-default.jpg" alt="" /></span><span
                                class="label-text">Light</span></label>
                    </div>
                    <div class="col-6">
                        <input class="btn-check" id="themeSwitcherDark" name="theme-color" type="radio"
                            value="dark" data-theme-control="theme" />
                        <label class="btn d-inline-block btn-navbar-style fs--1" for="themeSwitcherDark"> <span
                                class="hover-overlay mb-2 rounded d-block"><img class="img-fluid img-prototype mb-0"
                                    src="../assets/img/generic/falcon-mode-dark.jpg" alt="" /></span><span
                                class="label-text"> Dark</span></label>
                    </div>
                </div>
            </div>
            <hr />
            <div class="d-flex justify-content-between">
                <div class="d-flex align-items-start"><img class="me-2"
                        src="../assets/img/icons/left-arrow-from-left.svg" width="20" alt="" />
                    <div class="flex-1">
                        <h5 class="fs-0">RTL Mode</h5>
                        <p class="fs--1 mb-0">Switch your language direction </p><a class="fs--1"
                            href="../documentation/customization/configuration.html">RTL Documentation</a>
                    </div>
                </div>
                <div class="form-check form-switch">
                    <input class="form-check-input ms-0" id="mode-rtl" type="checkbox"
                        data-theme-control="isRTL" />
                </div>
            </div>
            <hr />
            <div class="d-flex justify-content-between">
                <div class="d-flex align-items-start"><img class="me-2" src="../assets/img/icons/arrows-h.svg"
                        width="20" alt="" />
                    <div class="flex-1">
                        <h5 class="fs-0">Fluid Layout</h5>
                        <p class="fs--1 mb-0">Toggle container layout system </p><a class="fs--1"
                            href="../documentation/customization/configuration.html">Fluid Documentation</a>
                    </div>
                </div>
                <div class="form-check form-switch">
                    <input class="form-check-input ms-0" id="mode-fluid" type="checkbox"
                        data-theme-control="isFluid" />
                </div>
            </div>
            <hr />
            <div class="d-flex align-items-start"><img class="me-2" src="../assets/img/icons/paragraph.svg"
                    width="20" alt="" />
                <div class="flex-1">
                    <h5 class="fs-0 d-flex align-items-center">Navigation Position </h5>
                    <p class="fs--1 mb-2">Select a suitable navigation system for your web application </p>
                    <div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" id="option-navbar-vertical" type="radio"
                                name="navbar" value="vertical"
                                data-page-url="../modules/components/navs-and-tabs/vertical-navbar.html"
                                data-theme-control="navbarPosition" />
                            <label class="form-check-label" for="option-navbar-vertical">Vertical</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" id="option-navbar-top" type="radio" name="navbar"
                                value="top" data-page-url="../modules/components/navs-and-tabs/top-navbar.html"
                                data-theme-control="navbarPosition" />
                            <label class="form-check-label" for="option-navbar-top">Top</label>
                        </div>
                        <div class="form-check form-check-inline me-0">
                            <input class="form-check-input" id="option-navbar-combo" type="radio" name="navbar"
                                value="combo" data-page-url="../modules/components/navs-and-tabs/combo-navbar.html"
                                data-theme-control="navbarPosition" />
                            <label class="form-check-label" for="option-navbar-combo">Combo</label>
                        </div>
                    </div>
                </div>
            </div>
            <hr />
            <h5 class="fs-0 d-flex align-items-center">Vertical Navbar Style</h5>
            <p class="fs--1 mb-0">Switch between styles for your vertical navbar </p>
            <p> <a class="fs--1" href="../modules/components/navs-and-tabs/vertical-navbar.html#navbar-styles">See
                    Documentation</a></p>
            <div class="btn-group d-block w-100 btn-group-navbar-style">
                <div class="row gx-2">
                    <div class="col-6">
                        <input class="btn-check" id="navbar-style-transparent" type="radio" name="navbarStyle"
                            value="transparent" data-theme-control="navbarStyle" />
                        <label class="btn d-block w-100 btn-navbar-style fs--1" for="navbar-style-transparent"> <img
                                class="img-fluid img-prototype" src="../assets/img/generic/default.png"
                                alt="" /><span class="label-text"> Transparent</span></label>
                    </div>
                    <div class="col-6">
                        <input class="btn-check" id="navbar-style-inverted" type="radio" name="navbarStyle"
                            value="inverted" data-theme-control="navbarStyle" />
                        <label class="btn d-block w-100 btn-navbar-style fs--1" for="navbar-style-inverted"> <img
                                class="img-fluid img-prototype" src="../assets/img/generic/inverted.png"
                                alt="" /><span class="label-text"> Inverted</span></label>
                    </div>
                    <div class="col-6">
                        <input class="btn-check" id="navbar-style-card" type="radio" name="navbarStyle"
                            value="card" data-theme-control="navbarStyle" />
                        <label class="btn d-block w-100 btn-navbar-style fs--1" for="navbar-style-card"> <img
                                class="img-fluid img-prototype" src="../assets/img/generic/card.png"
                                alt="" /><span class="label-text"> Card</span></label>
                    </div>
                    <div class="col-6">
                        <input class="btn-check" id="navbar-style-vibrant" type="radio" name="navbarStyle"
                            value="vibrant" data-theme-control="navbarStyle" />
                        <label class="btn d-block w-100 btn-navbar-style fs--1" for="navbar-style-vibrant"> <img
                                class="img-fluid img-prototype" src="../assets/img/generic/vibrant.png"
                                alt="" /><span class="label-text"> Vibrant</span></label>
                    </div>
                </div>
            </div>
            <div class="text-center mt-5"><img class="mb-4" src="../assets/img/icons/spot-illustrations/47.png"
                    alt="" width="120" />
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


    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script type="text/javascript" src="{{ URL::asset('js/ckeditor.js') }}"></script>
    <script src="../vendors/popper/popper.min.js"></script>
    <script src="../vendors/bootstrap/bootstrap.min.js"></script>
    <script src="../vendors/anchorjs/anchor.min.js"></script>
    <script src="../vendors/is/is.min.js"></script>
    <script src="../vendors/echarts/echarts.min.js"></script>
    <script src="../assets/data/world.js"></script>
    <script src="../vendors/chart/chart.min.js"></script>
    <script src="../vendors/dayjs/dayjs.min.js"></script>
    <script src="../vendors/fontawesome/all.min.js"></script>
    <script src="../vendors/lodash/lodash.min.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="../vendors/list.js/list.min.js"></script>
    <script src="../assets/js/theme.js"></script>



</body>

</html>
