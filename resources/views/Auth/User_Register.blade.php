<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>InterviewO.App/User_Register</title>


    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="../../../assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../../../assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../../../assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="../../../assets/img/favicons/favicon.ico">
    <link rel="manifest" href="../../../assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="../../../assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">
    <script src="../../../assets/js/config.js"></script>
    <script src="../../../vendors/overlayscrollbars/OverlayScrollbars.min.js"></script>


    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7cPoppins:300,400,500,600,700,800,900&amp;display=swap"
        rel="stylesheet">


    <link href="{{ asset('css/overlayscrollbars/OverlayScrollbars.min.cs') }}" rel="stylesheet">
    <link href="{{ asset('css/css/theme-rtl.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/theme.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/user-rtl.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/user.min.css') }}" rel="stylesheet">



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
        <div class="container-fluid">
            <div class="row min-vh-100 flex-center g-0">
                <div class="col-lg-8 col-xxl-5 py-3 position-relative"><img class="bg-auth-circle-shape"
                        src="{{ asset('images/blog/bg-shape.png') }}" alt="" width="250"><img
                        class="bg-auth-circle-shape-2" src="{{ asset('images/blog/shape-1.png') }}" alt=""
                        width="150">
                    <div class="card overflow-hidden z-index-1">
                        <div class="card-body p-0">
                            <div class="row g-0 h-100">
                                <div class="col-md-5 text-center bg-card-gradient">
                                    <div class="position-relative p-4 pt-md-5 pb-md-7 light">
                                        <div class="bg-holder bg-auth-card-shape"
                                            style="background-image:{{ asset('images/blog/half-circle.png') }}/)">
                                        </div>
                                        <!--/.bg-holder-->

                                        <div class="z-index-1 position-relative"><a
                                                class="link-light mb-4 font-sans-serif fs-4 d-inline-block fw-bolder"
                                                href="../../../index.html">falcon</a>
                                            <p class="opacity-75 text-white">With the power of Falcon, you can now focus
                                                only on functionaries for your digital products, while leaving the UI
                                                design on us!</p>
                                        </div>
                                    </div>
                                    <div class="mt-3 mb-4 mt-md-4 mb-md-5 light">
                                        <p class="pt-3 text-white">Have an account?<br><a
                                                class="btn btn-outline-light mt-2 px-4"
                                                href="{{ asset('User_Login') }}">Login</a></p>
                                    </div>
                                </div>
                                <div class="col-md-7 d-flex flex-center">
                                    <div class="p-4 p-md-5 flex-grow-1">
                                        <h3>Register</h3>
                                        <form method="POST" action="/User_Registers">
                                            @csrf
                                            <div class="mb-3">
                                                <label class="form-label" for="card-name">Name</label>
                                                <input class="form-control" type="text" name="name"
                                                    autocomplete="on" id="card-name" required />
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label" for="card-name">Usarname</label>
                                                <input class="form-control" type="text" name="username"
                                                    autocomplete="on" id="card-name" required />
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label" for="card-name">Phone</label>
                                                <input class="form-control" type="text" name="phone"
                                                    autocomplete="on" id="card-name" required />
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label" for="card-name">Types</label>
                                                <select class="form-control" type="text" name="types"
                                                    autocomplete="on" id="card-name" required>
                                                    <option value="student">Student</option>
                                                    <option value="instructor">instructor</option>
                                                    <option value="institute">Institute</option>
                                                    <option value="enterPrices">Enterprices</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label" for="card-email">Email address</label>
                                                <input class="form-control" type="email" name="email"
                                                    autocomplete="on" id="card-email" required />
                                            </div>
                                            <div class="row gx-2">
                                                <div class="mb-3 col-sm-6">
                                                    <label class="form-label" for="card-password">Date Of
                                                        Birth</label>
                                                    <input class="form-control" type="text" name="dob"
                                                        autocomplete="on" id="card-password" required />
                                                </div>

                                                <div class="mb-3 col-sm-6">
                                                    <label class="form-label" for="card-password">Gender</label>
                                                    <input class="form-control" type="text" name="gender"
                                                        autocomplete="on" id="card-password" required />
                                                </div>

                                            </div>

                                            <div class="row gx-2">
                                                <div class="mb-3 col-sm-6">
                                                    <label class="form-label" for="card-password">Country</label>
                                                    <input class="form-control" type="text" name="country"
                                                        autocomplete="on" id="card-password" required />
                                                </div>

                                                <div class="mb-3 col-sm-6">
                                                    <label class="form-label" for="card-password">Address</label>
                                                    <input class="form-control" type="text" name="address"
                                                        autocomplete="on" id="card-password" required />
                                                </div>

                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label" for="card-name">Password</label>
                                                <input class="form-control" type="text" name="password" autocomplete="on" id="card-name" required />
                                              </div>



                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox"
                                                    id="card-register-checkbox" required />
                                                <label class="form-label" for="card-register-checkbox">I accept the <a
                                                        href="#!">terms </a>and <a href="#!">privacy
                                                        policy</a></label>
                                            </div>
                                            <div class="mb-3">
                                                <button class="btn btn-primary d-block w-100 mt-3" type="submit"
                                                    name="submit">Register</button>
                                            </div>
                                        </form>
                                        <div class="position-relative mt-4">
                                            <hr class="bg-300" />
                                            <div class="divider-content-center">or register with</div>
                                        </div>
                                        <div class="row g-2 mt-2">
                                            <div class="col-sm-6"><a
                                                    class="btn btn-outline-google-plus btn-sm d-block w-100"
                                                    href="#"><span class="fab fa-google-plus-g me-2"
                                                        data-fa-transform="grow-8"></span> google</a></div>
                                            <div class="col-sm-6"><a
                                                    class="btn btn-outline-facebook btn-sm d-block w-100"
                                                    href="#"><span class="fab fa-facebook-square me-2"
                                                        data-fa-transform="grow-8"></span> facebook</a></div>
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


    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="../../../vendors/popper/popper.min.js"></script>
    <script src="../../../vendors/bootstrap/bootstrap.min.js"></script>
    <script src="../../../vendors/anchorjs/anchor.min.js"></script>
    <script src="../../../vendors/is/is.min.js"></script>
    <script src="../../../vendors/fontawesome/all.min.js"></script>
    <script src="../../../vendors/lodash/lodash.min.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="../../../vendors/list.js/list.min.js"></script>
    <script src="../../../assets/js/theme.js"></script>

</body>

</html>
