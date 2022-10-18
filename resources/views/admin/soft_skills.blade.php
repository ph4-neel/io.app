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

    <style>
        @import url(http://fonts.googleapis.com/css?family=Calibri:400,300,700);



        .container {
            margin-top: 50px;
        }


        .card {
            position: relative;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 0px solid transparent;
            border-radius: 0px;
        }
        }

        .card-body {
            -webkit-box-flex: 1;
            -ms-flex: 1 1 auto;
            flex: 1 1 auto;
            padding: 1.25rem;
        }

        .card .card-title {
            position: relative;
            font-weight: 600;
            margin-bottom: 10px;
        }


        .table {
            width: 100%;
            max-width: 100%;
            margin-bottom: 1rem;
            background-color: transparent;
        }

        * {
            outline: none;
        }

        .table th,
        .table thead th {
            font-weight: 500;
        }


        .table thead th {
            vertical-align: bottom;
            border-bottom: 2px solid #dee2e6;
        }


        .table th {
            padding: 1rem;
            vertical-align: top;
            border-top: 1px solid #dee2e6;
        }


        .table th,
        .table thead th {
            font-weight: 500;
        }


        th {
            text-align: inherit;
        }


        .m-b-20 {
            margin-bottom: 20px;
        }


        .customcheckbox {
            display: block;
            position: relative;
            padding-left: 24px;
            font-weight: 100;
            margin-bottom: 12px;
            cursor: pointer;
            font-size: 22px;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }


        .customcheckbox input {
            position: absolute;
            opacity: 0;
            cursor: pointer;
        }

        .checkmark {
            position: absolute;
            top: -3px;
            left: 0;
            height: 20px;
            width: 20px;
            background-color: #CDCDCD;
            border-radius: 6px;
        }


        .customcheckbox input:checked~.checkmark {
            background-color: #2196BB;
        }


        .customcheckbox .checkmark:after {
            left: 8px;
            top: 4px;
            width: 5px;
            height: 10px;
            border: solid white;
            border-width: 0 3px 3px 0;
            -webkit-transform: rotate(45deg);
            -ms-transform: rotate(45deg);
            transform: rotate(45deg);
        }
    </style>

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

                                    <li class="nav-item"><a class="nav-link" href="{{ url('/saas') }}"
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


                                    <li class="nav-item"><a class="nav-link" href="{{ url('/saas') }}"
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
            <div class="content" style="background-color: ">
                <div class="row g-3 mb-3">
                    <div class="container">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <h5 class="card-title m-b-0">Skills Records</h5>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-dark">
                                            <thead class="thead-dark">
                                                <tr>
                                                    <th>
                                                        <label class="customcheckbox m-b-20">
                                                            <input type="checkbox" id="mainCheckbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </th>
                                                    <th scope="col">Title</th>
                                                    <th scope="col">Description</th>
                                                    <th scope="col">Features</th>
                                                    <th scope="col">Tag</th>
                                                    <th scope="col">Details</th>
                                                    <th scope="col">Actions</th>
                                                    <th scope="col"> </th>
                                                </tr>
                                            </thead>
                                            <tbody class="customtable">
                                                @foreach ( $skills as $items )


                                                <tr>

                                                    <td>{{$items->id}}</td>
                                                    <td>{{$items->title}}</td>
                                                    <td>{{$items->description}}</td>
                                                    <td>{{$items->features}}</td>
                                                    <td>{{$items->tags}}</td>
                                                    <td>{{$items->details}}</td>
                                                    <td><a href="{{ url('get_del/'.$items->id) }}" class="btn btn-primary">delete</a></td>
                                                    <td><a href="" class="btn btn-success">Update</a></td>
                                                </tr>

                                                @endforeach



                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-6 col-xxl-4">


                    </div>
                </div>
                <div class="col-md-6 col-xxl-4"></div>



            </div>



        </div>


        </div>
        </div>
    </main>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->





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
