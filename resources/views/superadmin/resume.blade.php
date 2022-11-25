<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>InterviewO | Skill</title>

    <link rel="apple-touch-icon" sizes="180x180" href="https://interviewo.app/assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32"
        href="https://interviewo.app/assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16"
        href="https://interviewo.app/assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="https://interviewo.app/assets/img/favicons/favicon.ico">
    <meta name="msapplication-TileImage" content="https://interviewo.app/assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">
    <script src="https://interviewo.app/assets/js/config.js"></script>
    <script src="https://interviewo.app/assets/vendors/overlayscrollbars/OverlayScrollbars.min.js"></script>
    <script src="https://interviewo.app/assets/js/jquery.min.js"></script>


    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7cPoppins:300,400,500,600,700,800,900&amp;display=swap"
        rel="stylesheet">
    <link href="https://interviewo.app/assets/vendors/overlayscrollbars/OverlayScrollbars.min.css" rel="stylesheet">
    <link href="https://interviewo.app/assets/css/theme-rtl.min.css" rel="stylesheet" id="style-rtl">
    <link href="https://interviewo.app/assets/css/theme.min.css" rel="stylesheet" id="style-default">
    <link href="https://interviewo.app/assets/css/user-rtl.min.css" rel="stylesheet" id="user-style-rtl">
    <link href="https://interviewo.app/assets/css/user.min.css" rel="stylesheet" id="user-style-default">
    <link href="https://interviewo.app/assets/lib/toastr/toastr.css" rel="stylesheet">
    <script src="https://interviewo.app/assets/lib/toastr/toastr.min.js"></script>


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
    <script>
        var isFluid = JSON.parse(localStorage.getItem('isFluid'));
        if (isFluid) {
            var container = document.querySelector('[data-layout]');
            container.classList.remove('container');
            container.classList.add('container-fluid');
        }
    </script>
</head>

<body>
    <main class="main" id="top">
        <div class="container-fluid" data-layout="container-fluid">
            <nav class="navbar navbar-light navbar-vertical navbar-expand-xl">
                <script>
                    var navbarStyle = "card";
                    if (navbarStyle && navbarStyle !== 'transparent') {
                        document.querySelector('.navbar-vertical').classList.add(`navbar-${navbarStyle}`);
                    }
                </script>
                <div class="d-flex align-items-center">
                    <div class="toggle-icon-wrapper">
                        <button class="btn navbar-toggler-humburger-icon navbar-vertical-toggle"
                            data-bs-toggle="tooltip" data-bs-placement="left" title="Toggle Navigation"><span
                                class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
                    </div>
                    <a class="navbar-brand active" href="https://interviewo.app/admin/dashboard">
                        <div class="d-flex align-items-center py-3"><img class="me-2"
                                src="https://interviewo.app/assets/img/icons/spot-illustrations/falcon.png"
                                alt="" width="40" /><span class="font-sans-serif">io.app</span>
                        </div>
                    </a>
                </div>
                <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
                    <div class="navbar-vertical-content scrollbar">
                        <ul class="navbar-nav flex-column mb-3" id="navbarVerticalNav">
                            <li class="nav-item">
                                <a class="nav-link active" href="https://interviewo.app/admin/dashboard" role="button"
                                    aria-expanded="false">
                                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                                class="fas fa-rocket"></span></span><span
                                            class="nav-link-text ps-1">Dashboard</span>
                                    </div>
                                </a>
                            </li>

                            <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
                                <div class="col-auto navbar-vertical-label">Individual
                                </div>
                                <div class="col ps-0">
                                    <hr class="mb-0 navbar-vertical-divider" />
                                </div>
                            </div>
                            <a class="nav-link" href="/" role="button" aria-expanded="false">
                                <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                            class="fas fa-palette"></span></span><span class="nav-link-text ps-1">Self
                                        Introduction</span>
                                </div>
                            </a>
                            <a class="nav-link" href="/" role="button" aria-expanded="false">
                                <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                            class="fas fa-table"></span></span><span class="nav-link-text ps-1">Resume
                                        Writing</span>
                                </div>
                            </a>
                            <a class="nav-link" href="/" role="button" aria-expanded="false">
                                <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                            class="fas fa-comments"></span></span><span
                                        class="nav-link-text ps-1">Video Resume</span>
                                </div>
                            </a>

                            <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
                                <div class="col-auto navbar-vertical-label">Courses
                                </div>
                                <div class="col ps-0">
                                    <hr class="mb-0 navbar-vertical-divider" />
                                </div>
                            </div>
                            <a class="nav-link" href="/" role="button" aria-expanded="false">
                                <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                            class="fas fa-puzzle-piece"></span></span><span
                                        class="nav-link-text ps-1">Job Roles</span>
                                </div>
                            </a>
                            <a class="nav-link" href="/" role="button" aria-expanded="false">
                                <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                            class="fas fa-envelope-open"></span></span><span
                                        class="nav-link-text ps-1">Companies</span>
                                </div>
                            </a>
                            <a class="nav-link" href="/" role="button" aria-expanded="false">
                                <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                            class="fas fa-user-circle"></span></span><span
                                        class="nav-link-text ps-1">Personal Development</span>
                                </div>
                            </a>

                            <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
                                <div class="col-auto navbar-vertical-label">Skills
                                </div>
                                <div class="col ps-0">
                                    <hr class="mb-0 navbar-vertical-divider" />
                                </div>
                            </div>
                            <a class="nav-link" href="https://interviewo.app/admin/master/skills" role="button"
                                aria-expanded="false">
                                <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                            class="fas fa-award"></span></span><span
                                        class="nav-link-text ps-1">Skills</span>
                                </div>
                            </a>

                            <!-- label-->
                            <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
                                <div class="col-auto navbar-vertical-label">User Engagements
                                </div>
                                <div class="col ps-0">
                                    <hr class="mb-0 navbar-vertical-divider" />
                                </div>
                            </div>

                            <!-- parent pages--><a class="nav-link dropdown-indicator" href="#user" role="button"
                                data-bs-toggle="collapse" aria-expanded="false" aria-controls="user">
                                <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                            class="fas fa-user"></span></span><span
                                        class="nav-link-text ps-1">User</span>
                                </div>
                            </a>

                            <ul class="nav collapse false" id="user">
                                <li class="nav-item"><a class="nav-link" href="pages/user/profile.html"
                                        aria-expanded="false">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Profile</span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="pages/user/settings.html"
                                        aria-expanded="false">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Settings</span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                            </ul>

                            <!-- parent pages--><a class="nav-link dropdown-indicator" href="#card" role="button"
                                data-bs-toggle="collapse" aria-expanded="false" aria-controls="card">
                                <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                            class="fas fa-lock"></span></span><span
                                        class="nav-link-text ps-1">Authentication</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                            <ul class="nav collapse false" id="card">
                                <li class="nav-item"><a class="nav-link" href="pages/authentication/card/login.html"
                                        aria-expanded="false">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Login</span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="pages/authentication/card/logout.html"
                                        aria-expanded="false">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Logout</span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link"
                                        href="pages/authentication/card/register.html" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Register</span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link"
                                        href="pages/authentication/card/forgot-password.html" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Forgot
                                                password</span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link"
                                        href="pages/authentication/card/confirm-mail.html" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Confirm mail</span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link"
                                        href="pages/authentication/card/reset-password.html" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Reset
                                                password</span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link"
                                        href="pages/authentication/card/lock-screen.html" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Lock
                                                screen</span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                            </ul>
                            </li>
                        </ul>
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
                    <a class="navbar-brand me-1 me-sm-3" href="index.html">
                        <div class="d-flex align-items-center"><img class="me-2"
                                src="https://interviewo.app/assets/img/icons/spot-illustrations/falcon.png"
                                alt="" width="40" /><span class="font-sans-serif">interviewo</span>
                        </div>
                    </a>
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
                        <li class="nav-item dropdown">
                            <a class="nav-link pe-0" id="navbarDropdownUser" href="#" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <div class="avatar avatar-xl">
                                    <img class="rounded-circle"
                                        src="https://interviewo.app/assets/img/team/3-thumb.png" alt="" />
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end py-0" aria-labelledby="navbarDropdownUser">
                                <div class="bg-white dark__bg-1000 rounded-2 py-2">
                                    <a class="dropdown-item" href="#">Profile &amp; account</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Settings</a>
                                    <a class="dropdown-item" href="https://interviewo.app/logout"
                                        onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
                                    <form id="logout-form" action="https://interviewo.app/logout" method="POST"
                                        class="d-none">
                                        <input type="hidden" name="_token"
                                            value="FdOlP5Onyo0dR4DBNveCNOhs6L4hvGH7MB0PVQjj">
                                    </form>
                                </div>
                            </div>
                        </li>
                    </ul>
                </nav>
                <script>
                    toastr.options.closeButton = true;
                </script>




                <div class="row gx-0 kanban-header rounded-2 px-card py-2 mt-2 mb-3">
                    <div class="col d-flex align-items-center">
                        <h5 class="mb-0">Skill</h5>
                    </div>
                    <div class="col-auto d-flex align-items-center">
                        <a href="https://interviewo.app/admin/master/skills/create"
                            class="btn btn-sm btn-falcon-default me-2 d-none d-md-block"><span
                                class="fas fa-plus me-2"></span>Add Skill</a>
                    </div>
                </div>


                <div class="row g-3 mb-3">
                    <div class="col-md-12 col-xxl-12">
                        <div class="card h-md-100">
                            <div class="card-header pb-0">
                                <h6 class="mb-0 mt-2 d-flex align-items-center">Skills List</h6>
                            </div>
                            <div class="card-body d-flex flex-column justify-content-end">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Skill Type</th>
                                            <th>Title</th>
                                            <th>Image</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($resume as $items )


                                        <tr>
                                            <td>{{$items->type}}</td>
                                            <td>{{$items->title}}</td>
                                            <td><img src="{{'uploads/'.$items->path }}"  height="30" alt=""></td>
                                            <td><a href="">update</a></td>

                                        </tr>

                                        @endforeach


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <footer class="footer">
                    <div class="row g-0 justify-content-between fs--1 mt-4 mb-3">
                        <div class="col-12 col-sm-auto text-center">
                            <p class="mb-0 text-600">Designed 2022 &copy; <a href="https://fintechgie.com"
                                    target="_blank">FintechGie</a></p>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
    </main>
    <script src="https://interviewo.app/assets/vendors/popper/popper.min.js"></script>
    <script src="https://interviewo.app/assets/vendors/bootstrap/bootstrap.min.js"></script>
    <script src="https://interviewo.app/assets/vendors/anchorjs/anchor.min.js"></script>
    <script src="https://interviewo.app/assets/vendors/is/is.min.js"></script>
    <script src="https://interviewo.app/assets/vendors/echarts/echarts.min.js"></script>
    <script src="https://interviewo.app/assets/vendors/fontawesome/all.min.js"></script>
    <script src="https://interviewo.app/assets/vendors/lodash/lodash.min.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="https://interviewo.app/assets/vendors/list.js/list.min.js"></script>
    <script src="https://interviewo.app/assets/js/theme.js"></script>

</body>

</html>
