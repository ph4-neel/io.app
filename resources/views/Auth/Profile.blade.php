<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>Interview.app-profile</title>


    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="../../assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../../assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="../../assets/img/favicons/favicon.ico">
    <link rel="manifest" href="../../assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="../../assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">

    <script src="{{ asset('js/OverlayScrollbars.min.js') }}"></script>
    <script src="{{ asset('js/config.js') }}"></script>




    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href="../../vendors/glightbox/" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.gstatic.com">

    <link href="{{ asset('css/glightbox.min.css') }}" rel="stylesheet">


    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7cPoppins:300,400,500,600,700,800,900&amp;display=swap"
        rel="stylesheet">


    <link href="{{ asset('css/OverlayScrollbars.min.cs') }}" rel="stylesheet">
    <link href="{{ asset('css/theme-rtl.min.css') }}" rel="stylesheet">
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

                    </div><a class="navbar-brand" href="../../index.html">
                        <div class="d-flex align-items-center py-3"><img class="me-2"
                                src="../../assets/img/icons/spot-illustrations/falcon.png" alt=""
                                width="40" /><span class="font-sans-serif">interviewo</span>
                        </div>
                    </a>
                </div>
                <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
                    <div class="navbar-vertical-content scrollbar">
                        <ul class="navbar-nav flex-column mb-3" id="navbarVerticalNav">
                            <li class="nav-item">
                                <!-- parent pages--><a class="nav-link dropdown-indicator" href="#dashboard"
                                    role="button" data-bs-toggle="collapse" aria-expanded="false"
                                    aria-controls="dashboard">
                                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                                class="fas fa-chart-pie"></span></span><span
                                            class="nav-link-text ps-1">Dashboard</span>
                                    </div>
                                </a>
                                <ul class="nav collapse false" id="dashboard">
                                    <li class="nav-item"><a class="nav-link" href="../../index.html"
                                            aria-expanded="false">
                                            <div class="d-flex align-items-center"><span
                                                    class="nav-link-text ps-1">Default</span>
                                            </div>
                                        </a>
                                        <!-- more inner pages-->
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="../../dashboard/analytics.html"
                                            aria-expanded="false">
                                            <div class="d-flex align-items-center"><span
                                                    class="nav-link-text ps-1">Analytics</span>
                                            </div>
                                        </a>
                                        <!-- more inner pages-->
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="../../dashboard/crm.html"
                                            aria-expanded="false">
                                            <div class="d-flex align-items-center"><span
                                                    class="nav-link-text ps-1">CRM</span>
                                            </div>
                                        </a>
                                        <!-- more inner pages-->
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="../../dashboard/e-commerce.html"
                                            aria-expanded="false">
                                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">E
                                                    commerce</span>
                                            </div>
                                        </a>
                                        <!-- more inner pages-->
                                    </li>
                                    <li class="nav-item"><a class="nav-link"
                                            href="../../dashboard/project-management.html" aria-expanded="false">
                                            <div class="d-flex align-items-center"><span
                                                    class="nav-link-text ps-1">Management</span>
                                            </div>
                                        </a>
                                        <!-- more inner pages-->
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="../../dashboard/saas.html"
                                            aria-expanded="false">
                                            <div class="d-flex align-items-center"><span
                                                    class="nav-link-text ps-1">SaaS</span>
                                            </div>
                                        </a>
                                        <!-- more inner pages-->
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <!-- label-->
                                <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
                                    <div class="col-auto navbar-vertical-label">App
                                    </div>
                                    <div class="col ps-0">
                                        <hr class="mb-0 navbar-vertical-divider" />
                                    </div>
                                </div>
                                <!-- parent pages--><a class="nav-link" href="../../app/calendar.html" role="button"
                                    aria-expanded="false">
                                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                                class="fas fa-calendar-alt"></span></span><span
                                            class="nav-link-text ps-1">Calendar</span>
                                    </div>
                                </a>
                                <!-- parent pages--><a class="nav-link" href="../../app/chat.html" role="button"
                                    aria-expanded="false">
                                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                                class="fas fa-comments"></span></span><span
                                            class="nav-link-text ps-1">Chat</span>
                                    </div>
                                </a>
                                <!-- parent pages--><a class="nav-link dropdown-indicator" href="#email"
                                    role="button" data-bs-toggle="collapse" aria-expanded="false"
                                    aria-controls="email">
                                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                                class="fas fa-envelope-open"></span></span><span
                                            class="nav-link-text ps-1">Email</span>
                                    </div>
                                </a>
                                <ul class="nav collapse false" id="email">
                                    <li class="nav-item"><a class="nav-link" href="../../app/email/inbox.html"
                                            aria-expanded="false">
                                            <div class="d-flex align-items-center"><span
                                                    class="nav-link-text ps-1">Inbox</span>
                                            </div>
                                        </a>
                                        <!-- more inner pages-->
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="../../app/email/email-detail.html"
                                            aria-expanded="false">
                                            <div class="d-flex align-items-center"><span
                                                    class="nav-link-text ps-1">Email detail</span>
                                            </div>
                                        </a>
                                        <!-- more inner pages-->
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="../../app/email/compose.html"
                                            aria-expanded="false">
                                            <div class="d-flex align-items-center"><span
                                                    class="nav-link-text ps-1">Compose</span>
                                            </div>
                                        </a>
                                        <!-- more inner pages-->
                                    </li>
                                </ul>
                                <!-- parent pages--><a class="nav-link dropdown-indicator" href="#events"
                                    role="button" data-bs-toggle="collapse" aria-expanded="false"
                                    aria-controls="events">
                                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                                class="fas fa-calendar-day"></span></span><span
                                            class="nav-link-text ps-1">Events</span>
                                    </div>
                                </a>
                                <ul class="nav collapse false" id="events">
                                    <li class="nav-item"><a class="nav-link"
                                            href="../../app/events/create-an-event.html" aria-expanded="false">
                                            <div class="d-flex align-items-center"><span
                                                    class="nav-link-text ps-1">Create an event</span>
                                            </div>
                                        </a>
                                        <!-- more inner pages-->
                                    </li>
                                    <li class="nav-item"><a class="nav-link"
                                            href="../../app/events/event-detail.html" aria-expanded="false">
                                            <div class="d-flex align-items-center"><span
                                                    class="nav-link-text ps-1">Event detail</span>
                                            </div>
                                        </a>
                                        <!-- more inner pages-->
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="../../app/events/event-list.html"
                                            aria-expanded="false">
                                            <div class="d-flex align-items-center"><span
                                                    class="nav-link-text ps-1">Event list</span>
                                            </div>
                                        </a>
                                        <!-- more inner pages-->
                                    </li>
                                </ul>
                                <!-- parent pages--><a class="nav-link dropdown-indicator" href="#e-commerce"
                                    role="button" data-bs-toggle="collapse" aria-expanded="false"
                                    aria-controls="e-commerce">
                                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                                class="fas fa-shopping-cart"></span></span><span
                                            class="nav-link-text ps-1">E commerce</span>
                                    </div>
                                </a>
                                <ul class="nav collapse false" id="e-commerce">
                                    <li class="nav-item"><a class="nav-link dropdown-indicator" href="#product"
                                            data-bs-toggle="collapse" aria-expanded="false"
                                            aria-controls="e-commerce">
                                            <div class="d-flex align-items-center"><span
                                                    class="nav-link-text ps-1">Product</span>
                                            </div>
                                        </a>
                                        <!-- more inner pages-->
                                        <ul class="nav collapse false" id="product">
                                            <li class="nav-item"><a class="nav-link"
                                                    href="../../app/e-commerce/product/product-list.html"
                                                    aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text ps-1">Product list</span>
                                                    </div>
                                                </a>
                                                <!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link"
                                                    href="../../app/e-commerce/product/product-grid.html"
                                                    aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text ps-1">Product grid</span>
                                                    </div>
                                                </a>
                                                <!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link"
                                                    href="../../app/e-commerce/product/product-details.html"
                                                    aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text ps-1">Product details</span>
                                                    </div>
                                                </a>
                                                <!-- more inner pages-->
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item"><a class="nav-link dropdown-indicator" href="#orders"
                                            data-bs-toggle="collapse" aria-expanded="false"
                                            aria-controls="e-commerce">
                                            <div class="d-flex align-items-center"><span
                                                    class="nav-link-text ps-1">Orders</span>
                                            </div>
                                        </a>
                                        <!-- more inner pages-->
                                        <ul class="nav collapse false" id="orders">
                                            <li class="nav-item"><a class="nav-link"
                                                    href="../../app/e-commerce/orders/order-list.html"
                                                    aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text ps-1">Order list</span>
                                                    </div>
                                                </a>
                                                <!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link"
                                                    href="../../app/e-commerce/orders/order-details.html"
                                                    aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text ps-1">Order details</span>
                                                    </div>
                                                </a>
                                                <!-- more inner pages-->
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item"><a class="nav-link"
                                            href="../../app/e-commerce/customers.html" aria-expanded="false">
                                            <div class="d-flex align-items-center"><span
                                                    class="nav-link-text ps-1">Customers</span>
                                            </div>
                                        </a>
                                        <!-- more inner pages-->
                                    </li>
                                    <li class="nav-item"><a class="nav-link"
                                            href="../../app/e-commerce/customer-details.html" aria-expanded="false">
                                            <div class="d-flex align-items-center"><span
                                                    class="nav-link-text ps-1">Customer details</span>
                                            </div>
                                        </a>
                                        <!-- more inner pages-->
                                    </li>
                                    <li class="nav-item"><a class="nav-link"
                                            href="../../app/e-commerce/shopping-cart.html" aria-expanded="false">
                                            <div class="d-flex align-items-center"><span
                                                    class="nav-link-text ps-1">Shopping cart</span>
                                            </div>
                                        </a>
                                        <!-- more inner pages-->
                                    </li>
                                    <li class="nav-item"><a class="nav-link"
                                            href="../../app/e-commerce/checkout.html" aria-expanded="false">
                                            <div class="d-flex align-items-center"><span
                                                    class="nav-link-text ps-1">Checkout</span>
                                            </div>
                                        </a>
                                        <!-- more inner pages-->
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="../../app/e-commerce/billing.html"
                                            aria-expanded="false">
                                            <div class="d-flex align-items-center"><span
                                                    class="nav-link-text ps-1">Billing</span>
                                            </div>
                                        </a>
                                        <!-- more inner pages-->
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="../../app/e-commerce/invoice.html"
                                            aria-expanded="false">
                                            <div class="d-flex align-items-center"><span
                                                    class="nav-link-text ps-1">Invoice</span>
                                            </div>
                                        </a>
                                        <!-- more inner pages-->
                                    </li>
                                </ul>
                                <!-- parent pages--><a class="nav-link" href="../../app/kanban.html" role="button"
                                    aria-expanded="false">
                                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                                class="fab fa-trello"></span></span><span
                                            class="nav-link-text ps-1">Kanban</span>
                                    </div>
                                </a>
                                <!-- parent pages--><a class="nav-link dropdown-indicator" href="#social"
                                    role="button" data-bs-toggle="collapse" aria-expanded="false"
                                    aria-controls="social">
                                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                                class="fas fa-share-alt"></span></span><span
                                            class="nav-link-text ps-1">Social</span>
                                    </div>
                                </a>
                                <ul class="nav collapse false" id="social">
                                    <li class="nav-item"><a class="nav-link" href="../../app/social/feed.html"
                                            aria-expanded="false">
                                            <div class="d-flex align-items-center"><span
                                                    class="nav-link-text ps-1">Feed</span>
                                            </div>
                                        </a>
                                        <!-- more inner pages-->
                                    </li>
                                    <li class="nav-item"><a class="nav-link"
                                            href="../../app/social/activity-log.html" aria-expanded="false">
                                            <div class="d-flex align-items-center"><span
                                                    class="nav-link-text ps-1">Activity log</span>
                                            </div>
                                        </a>
                                        <!-- more inner pages-->
                                    </li>
                                    <li class="nav-item"><a class="nav-link"
                                            href="../../app/social/notifications.html" aria-expanded="false">
                                            <div class="d-flex align-items-center"><span
                                                    class="nav-link-text ps-1">Notifications</span>
                                            </div>
                                        </a>
                                        <!-- more inner pages-->
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="../../app/social/followers.html"
                                            aria-expanded="false">
                                            <div class="d-flex align-items-center"><span
                                                    class="nav-link-text ps-1">Followers</span>
                                            </div>
                                        </a>
                                        <!-- more inner pages-->
                                    </li>
                                </ul>
                            </li>
                           
                        </ul>
                        <div class="settings mb-3">
                           
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
                    <a class="navbar-brand me-1 me-sm-3" href="../../index.html">
                        <div class="d-flex align-items-center"><img class="me-2"
                                src="../../assets/img/icons/spot-illustrations/falcon.png" alt=""
                                width="40" /><span class="font-sans-serif">falcon</span>
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
                               
                                <div class="dropdown-menu border font-base start-0 mt-2 py-0 overflow-hidden w-100">
                                    <div class="scrollbar list py-3" style="max-height: 24rem;">
                                        <h6 class="dropdown-header fw-medium text-uppercase px-card fs--2 pt-0 pb-2">
                                            Recently Browsed</h6><a
                                            class="dropdown-item fs--1 px-card py-1 hover-primary"
                                            href="../../app/events/event-detail.html">
                                            <div class="d-flex align-items-center">
                                                <span class="fas fa-circle me-2 text-300 fs--2"></span>

                                                <div class="fw-normal title">Pages <span
                                                        class="fas fa-chevron-right mx-1 text-500 fs--2"
                                                        data-fa-transform="shrink-2"></span> Events</div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item fs--1 px-card py-1 hover-primary"
                                            href="../../app/e-commerce/customers.html">
                                            <div class="d-flex align-items-center">
                                                <span class="fas fa-circle me-2 text-300 fs--2"></span>

                                                <div class="fw-normal title">E-commerce <span
                                                        class="fas fa-chevron-right mx-1 text-500 fs--2"
                                                        data-fa-transform="shrink-2"></span> Customers</div>
                                            </div>
                                        </a>

                                        <hr class="bg-200 dark__bg-900" />
                                        <h6 class="dropdown-header fw-medium text-uppercase px-card fs--2 pt-0 pb-2">
                                            Suggested Filter</h6><a class="dropdown-item px-card py-1 fs-0"
                                            href="../../app/e-commerce/customers.html">
                                            <div class="d-flex align-items-center"><span
                                                    class="badge fw-medium text-decoration-none me-2 badge-soft-warning">customers:</span>
                                                <div class="flex-1 fs--1 title">All customers list</div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item px-card py-1 fs-0"
                                            href="../../app/events/event-detail.html">
                                            <div class="d-flex align-items-center"><span
                                                    class="badge fw-medium text-decoration-none me-2 badge-soft-success">events:</span>
                                                <div class="flex-1 fs--1 title">Latest events in current month</div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item px-card py-1 fs-0"
                                            href="../../app/e-commerce/product/product-grid.html">
                                            <div class="d-flex align-items-center"><span
                                                    class="badge fw-medium text-decoration-none me-2 badge-soft-info">products:</span>
                                                <div class="flex-1 fs--1 title">Most popular products</div>
                                            </div>
                                        </a>

                                        <hr class="bg-200 dark__bg-900" />
                                        <h6 class="dropdown-header fw-medium text-uppercase px-card fs--2 pt-0 pb-2">
                                            Files</h6><a class="dropdown-item px-card py-2" href="#!">
                                            <div class="d-flex align-items-center">
                                                <div class="file-thumbnail me-2"><img
                                                        class="border h-100 w-100 fit-cover rounded-3"
                                                        src="../../assets/img/products/3-thumb.png"
                                                        alt="" /></div>
                                                <div class="flex-1">
                                                    <h6 class="mb-0 title">iPhone</h6>
                                                    <p class="fs--2 mb-0 d-flex"><span
                                                            class="fw-semi-bold">Antony</span><span
                                                            class="fw-medium text-600 ms-2">27 Sep at 10:30 AM</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item px-card py-2" href="#!">
                                            <div class="d-flex align-items-center">
                                                <div class="file-thumbnail me-2"><img class="img-fluid"
                                                        src="../../assets/img/icons/zip.png" alt="" /></div>
                                                <div class="flex-1">
                                                    <h6 class="mb-0 title">Falcon v1.8.2</h6>
                                                    <p class="fs--2 mb-0 d-flex"><span
                                                            class="fw-semi-bold">John</span><span
                                                            class="fw-medium text-600 ms-2">30 Sep at 12:30 PM</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </a>

                                        <hr class="bg-200 dark__bg-900" />
                                        <h6 class="dropdown-header fw-medium text-uppercase px-card fs--2 pt-0 pb-2">
                                            Members</h6><a class="dropdown-item px-card py-2"
                                            href="../../pages/user/profile.html">
                                            <div class="d-flex align-items-center">
                                                <div class="avatar avatar-l status-online me-2">
                                                    <img class="rounded-circle" src="../../assets/img/team/1.jpg"
                                                        alt="" />

                                                </div>
                                                <div class="flex-1">
                                                    <h6 class="mb-0 title">Anna Karinina</h6>
                                                    <p class="fs--2 mb-0 d-flex">Technext Limited</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item px-card py-2" href="../../pages/user/profile.html">
                                            <div class="d-flex align-items-center">
                                                <div class="avatar avatar-l me-2">
                                                    <img class="rounded-circle" src="../../assets/img/team/2.jpg"
                                                        alt="" />

                                                </div>
                                                <div class="flex-1">
                                                    <h6 class="mb-0 title">Antony Hopkins</h6>
                                                    <p class="fs--2 mb-0 d-flex">Brain Trust</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item px-card py-2" href="../../pages/user/profile.html">
                                            <div class="d-flex align-items-center">
                                                <div class="avatar avatar-l me-2">
                                                    <img class="rounded-circle" src="../../assets/img/team/3.jpg"
                                                        alt="" />

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
                                href="../../app/e-commerce/shopping-cart.html"><span class="fas fa-shopping-cart"
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
                                                                src="../../assets/img/team/1-thumb.png"
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
                                                            <strong>Mia Khalifa's</strong> status</p>
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
                                                                src="../../assets/img/icons/weather-sm.jpg"
                                                                alt="" />

                                                        </div>
                                                    </div>
                                                    <div class="notification-body">
                                                        <p class="mb-1">The forecast today shows a low of 20&#8451;
                                                            in California. See today's weather.</p>
                                                        <span class="notification-time"><span class="me-2"
                                                                role="img"
                                                                aria-label="Emoji">🌤️</span>1d</span>

                                                    </div>
                                                </a>

                                            </div>
                                            <div class="list-group-item">
                                                <a class="border-bottom-0 notification-unread  notification notification-flush"
                                                    href="#!">
                                                    <div class="notification-avatar">
                                                        <div class="avatar avatar-xl me-3">
                                                            <img class="rounded-circle"
                                                                src="../../assets/img/logos/oxford.png"
                                                                alt="" />

                                                        </div>
                                                    </div>
                                                    <div class="notification-body">
                                                        <p class="mb-1"><strong>University of Oxford</strong>
                                                            created an event : "Causal Inference Hilary 2019"</p>
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
                                                                src="../../assets/img/team/10.jpg" alt="" />

                                                        </div>
                                                    </div>
                                                    <div class="notification-body">
                                                        <p class="mb-1"><strong>James Cameron</strong> invited to
                                                            join the group: United Nations International Children's Fund
                                                        </p>
                                                        <span class="notification-time"><span class="me-2"
                                                                role="img"
                                                                aria-label="Emoji">🙋‍</span>2d</span>

                                                    </div>
                                                </a>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer text-center border-top"><a class="card-link d-block"
                                            href="../../app/social/notifications.html">View all</a></div>
                                </div>
                            </div>

                        </li>
                        <li class="nav-item dropdown"><a class="nav-link pe-0" id="navbarDropdownUser"
                                href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                {{-- <div class="avatar avatar-xl">
                                    <img class="rounded-circle" src="../../assets/img/team/3-thumb.png"
                                        alt="" />

                                </div> --}}
                            </a>
                            <div class="dropdown-menu dropdown-menu-end py-0" aria-labelledby="navbarDropdownUser">
                                <div class="bg-white dark__bg-1000 rounded-2 py-2">
                                    <a class="dropdown-item fw-bold text-warning" href="#!"><span
                                            class="fas fa-crown me-1"></span><span>Go Pro</span></a>

                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#!">Set status</a>
                                    <a class="dropdown-item" href="../../pages/user/profile.html">Profile &amp;
                                        account</a>
                                    <a class="dropdown-item" href="#!">Feedback</a>

                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="../../pages/user/settings.html">Settings</a>
                                    <a class="dropdown-item"
                                        href="../../pages/authentication/card/logout.html">Logout</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </nav>
                <div class="card mb-3">
                    <div class="card-header position-relative min-vh-25 mb-7">
                        <div class="bg-holder rounded-3 rounded-bottom-0"
                            style="background-image:url(../../assets/img/generic/4.jpg);">
                        </div>
                        <!--/.bg-holder-->

                        <div class="avatar avatar-5xl avatar-profile"><img
                                class="rounded-circle img-thumbnail shadow-sm" src="../../assets/img/team/2.jpg"
                                width="200" alt="" /></div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-8">
                                <h4 class="mb-1"> Anthony Hopkins<span data-bs-toggle="tooltip"
                                        data-bs-placement="right" title="Verified"><small
                                            class="fa fa-check-circle text-primary"
                                            data-fa-transform="shrink-4 down-2"></small></span>
                                </h4>
                                <h5 class="fs-0 fw-normal">Senior Software Engineer at Technext Limited</h5>
                                <p class="text-500">New York, USA</p>
                                <button class="btn btn-falcon-primary btn-sm px-3" type="button">Following</button>
                                <button class="btn btn-falcon-default btn-sm px-3 ms-2"
                                    type="button">Message</button>
                                <div class="border-dashed-bottom my-4 d-lg-none"></div>
                            </div>
                            <div class="col ps-2 ps-lg-3"><a class="d-flex align-items-center mb-2"
                                    href="#"><span class="fas fa-user-circle fs-3 me-2 text-700"
                                        data-fa-transform="grow-2"></span>
                                    <div class="flex-1">
                                        <h6 class="mb-0">See followers (330)</h6>
                                    </div>
                                </a><a class="d-flex align-items-center mb-2" href="#"><img
                                        class="align-self-center me-2" src="../../assets/img/logos/g.png"
                                        alt="Generic placeholder image" width="30" />
                                    <div class="flex-1">
                                        <h6 class="mb-0">Google</h6>
                                    </div>
                                </a><a class="d-flex align-items-center mb-2" href="#"><img
                                        class="align-self-center me-2" src="../../assets/img/logos/apple.png"
                                        alt="Generic placeholder image" width="30" />
                                    <div class="flex-1">
                                        <h6 class="mb-0">Apple</h6>
                                    </div>
                                </a><a class="d-flex align-items-center mb-2" href="#"><img
                                        class="align-self-center me-2" src="../../assets/img/logos/hp.png"
                                        alt="Generic placeholder image" width="30" />
                                    <div class="flex-1">
                                        <h6 class="mb-0">Hewlett Packard</h6>
                                    </div>
                                </a></div>
                        </div>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-lg-8 pe-lg-2">
                        <div class="card mb-3">
                            <div class="card-header bg-light">
                                <h5 class="mb-0">Intro</h5>
                            </div>
                            <div class="card-body text-justify">
                                <p class="mb-0 text-1000">Dedicated, passionate, and accomplished Full Stack Developer
                                    with 9+ years of progressive experience working as an Independent Contractor for
                                    Google and developing and growing my educational social network that helps others
                                    learn programming, web design, game development, networking.</p>
                                <div class="collapse show" id="profile-intro">
                                    <p class="mt-3 text-1000">I’ve acquired a wide depth of knowledge and expertise in
                                        using my technical skills in programming, computer science, software
                                        development, and mobile app development to developing solutions to help
                                        organizations increase productivity, and accelerate business performance. </p>
                                    <p class="text-1000">It’s great that we live in an age where we can share so much
                                        with technology but I’m but I’m ready for the next phase of my career, with a
                                        healthy balance between the virtual world and a workplace where I help others
                                        face-to-face.</p>
                                    <p class="text-1000 mb-0">There’s always something new to learn, especially in
                                        IT-related fields. People like working with me because I can explain technology
                                        to everyone, from staff to executives who need me to tie together the details
                                        and the big picture. I can also implement the technologies that successful
                                        projects need.</p>
                                </div>
                            </div>
                            <div class="card-footer bg-light p-0 border-top">
                                <button class="btn btn-link d-block w-100 btn-intro-collapse" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#profile-intro" aria-expanded="true"
                                    aria-controls="profile-intro">Show <span class="less">less<span
                                            class="fas fa-chevron-up ms-2 fs--2"></span></span><span
                                        class="full">full<span
                                            class="fas fa-chevron-down ms-2 fs--2"></span></span></button>
                            </div>
                        </div>
                        <div class="card mb-3">
                            <div class="card-header bg-light d-flex justify-content-between">
                                <h5 class="mb-0">Associations</h5><a class="font-sans-serif"
                                    href="../../pages/miscellaneous/associations.html">All Associations</a>
                            </div>
                            <div class="card-body fs--1 pb-0">
                                <div class="row">
                                    <div class="col-sm-6 mb-3">
                                        <div class="d-flex position-relative align-items-center mb-2"><img
                                                class="d-flex align-self-center me-2 rounded-3"
                                                src="../../assets/img/logos/apple.png" alt=""
                                                width="50" />
                                            <div class="flex-1">
                                                <h6 class="fs-0 mb-0"><a class="stretched-link"
                                                        href="#!">Apple</a></h6>
                                                <p class="mb-1">3243 associates</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                        <div class="d-flex position-relative align-items-center mb-2"><img
                                                class="d-flex align-self-center me-2 rounded-3"
                                                src="../../assets/img/logos/g.png" alt=""
                                                width="50" />
                                            <div class="flex-1">
                                                <h6 class="fs-0 mb-0"><a class="stretched-link"
                                                        href="#!">Google</a></h6>
                                                <p class="mb-1">34598 associates</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                        <div class="d-flex position-relative align-items-center mb-2"><img
                                                class="d-flex align-self-center me-2 rounded-3"
                                                src="../../assets/img/logos/intel-2.png" alt=""
                                                width="50" />
                                            <div class="flex-1">
                                                <h6 class="fs-0 mb-0"><a class="stretched-link"
                                                        href="#!">Intel</a></h6>
                                                <p class="mb-1">7652 associates</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                        <div class="d-flex position-relative align-items-center mb-2"><img
                                                class="d-flex align-self-center me-2 rounded-3"
                                                src="../../assets/img/logos/facebook.png" alt=""
                                                width="50" />
                                            <div class="flex-1">
                                                <h6 class="fs-0 mb-0"><a class="stretched-link"
                                                        href="#!">Facebook</a></h6>
                                                <p class="mb-1">765 associates</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-3">
                            <div class="card-header bg-light d-flex justify-content-between">
                                <h5 class="mb-0">Activity log</h5><a class="font-sans-serif"
                                    href="../../app/social/activity-log.html">All logs</a>
                            </div>
                            <div class="card-body fs--1 p-0">
                                <a class="border-bottom-0 notification rounded-0 border-x-0 border border-300"
                                    href="#!">
                                    <div class="notification-avatar">
                                        <div class="avatar avatar-xl me-3">
                                            <div class="avatar-emoji rounded-circle "><span role="img"
                                                    aria-label="Emoji">🎁</span></div>
                                        </div>
                                    </div>
                                    <div class="notification-body">
                                        <p class="mb-1"><strong>Jennifer Kent</strong> Congratulated <strong>Anthony
                                                Hopkins</strong></p>
                                        <span class="notification-time">November 13, 5:00 Am</span>

                                    </div>
                                </a>

                                <a class="border-bottom-0 notification rounded-0 border-x-0 border border-300"
                                    href="#!">
                                    <div class="notification-avatar">
                                        <div class="avatar avatar-xl me-3">
                                            <div class="avatar-emoji rounded-circle "><span role="img"
                                                    aria-label="Emoji">🏷️</span></div>
                                        </div>
                                    </div>
                                    <div class="notification-body">
                                        <p class="mb-1"><strong>California Institute of Technology</strong> tagged
                                            <strong>Anthony Hopkins</strong> in a post.</p>
                                        <span class="notification-time">November 8, 5:00 PM</span>

                                    </div>
                                </a>

                                <a class="border-bottom-0 notification rounded-0 border-x-0 border border-300"
                                    href="#!">
                                    <div class="notification-avatar">
                                        <div class="avatar avatar-xl me-3">
                                            <div class="avatar-emoji rounded-circle "><span role="img"
                                                    aria-label="Emoji">📋️</span></div>
                                        </div>
                                    </div>
                                    <div class="notification-body">
                                        <p class="mb-1"><strong>Anthony Hopkins</strong> joined <strong>Victory day
                                                cultural Program</strong> with <strong>Tony Stark</strong></p>
                                        <span class="notification-time">November 01, 11:30 AM</span>

                                    </div>
                                </a>

                                <a class="notification border-x-0 border-bottom-0 border-300 rounded-top-0"
                                    href="#!">
                                    <div class="notification-avatar">
                                        <div class="avatar avatar-xl me-3">
                                            <div class="avatar-emoji rounded-circle "><span role="img"
                                                    aria-label="Emoji">📅️</span></div>
                                        </div>
                                    </div>
                                    <div class="notification-body">
                                        <p class="mb-1"><strong>Massachusetts Institute of Technology</strong>
                                            invited <strong>Anthony Hopkin</strong> to an event</p>
                                        <span class="notification-time">October 28, 12:00 PM</span>

                                    </div>
                                </a>

                            </div>
                        </div>
                        <div class="card mb-3 mb-lg-0">
                            <div class="card-header bg-light">
                                <h5 class="mb-0">Photos</h5>
                            </div>
                            <div class="card-body overflow-hidden">
                                <div class="row g-0">
                                    <div class="col-6 p-1"><a class="glightbox"
                                            href="../../assets/img/generic/4.jpg" data-gallery="gallery1"
                                            data-glightbox="data-glightbox"><img class="img-fluid rounded"
                                                src="../../assets/img/generic/4.jpg" alt="..." /></a></div>
                                    <div class="col-6 p-1"><a class="glightbox"
                                            href="../../assets/img/generic/5.jpg" data-gallery="gallery1"
                                            data-glightbox="data-glightbox"><img class="img-fluid rounded"
                                                src="../../assets/img/generic/5.jpg" alt="..." /></a></div>
                                    <div class="col-4 p-1"><a class="glightbox"
                                            href="../../assets/img/gallery/4.jpg" data-gallery="gallery1"
                                            data-glightbox="data-glightbox"><img class="img-fluid rounded"
                                                src="../../assets/img/gallery/4.jpg" alt="..." /></a></div>
                                    <div class="col-4 p-1"><a class="glightbox"
                                            href="../../assets/img/gallery/5.jpg" data-gallery="gallery1"
                                            data-glightbox="data-glightbox"><img class="img-fluid rounded"
                                                src="../../assets/img/gallery/5.jpg" alt="..." /></a></div>
                                    <div class="col-4 p-1"><a class="glightbox"
                                            href="../../assets/img/gallery/3.jpg" data-gallery="gallery1"
                                            data-glightbox="data-glightbox"><img class="img-fluid rounded"
                                                src="../../assets/img/gallery/3.jpg" alt="..." /></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 ps-lg-2">
                        <div class="sticky-sidebar">
                            <div class="card mb-3">
                                <div class="card-header bg-light">
                                    <h5 class="mb-0">Experience</h5>
                                </div>
                                <div class="card-body fs--1">
                                    <div class="d-flex"><a href="#!"> <img class="img-fluid"
                                                src="../../assets/img/logos/g.png" alt=""
                                                width="56" /></a>
                                        <div class="flex-1 position-relative ps-3">
                                            <h6 class="fs-0 mb-0">Big Data Engineer<span data-bs-toggle="tooltip"
                                                    data-bs-placement="top" title="Verified"><small
                                                        class="fa fa-check-circle text-primary"
                                                        data-fa-transform="shrink-4 down-2"></small></span>
                                            </h6>
                                            <p class="mb-1"> <a href="#!">Google</a></p>
                                            <p class="text-1000 mb-0">Apr 2012 - Present &bull; 6 yrs 9 mos</p>
                                            <p class="text-1000 mb-0">California, USA</p>
                                            <div class="border-dashed-bottom my-3"></div>
                                        </div>
                                    </div>
                                    <div class="d-flex"><a href="#!"> <img class="img-fluid"
                                                src="../../assets/img/logos/apple.png" alt=""
                                                width="56" /></a>
                                        <div class="flex-1 position-relative ps-3">
                                            <h6 class="fs-0 mb-0">Software Engineer<span data-bs-toggle="tooltip"
                                                    data-bs-placement="top" title="Verified"><small
                                                        class="fa fa-check-circle text-primary"
                                                        data-fa-transform="shrink-4 down-2"></small></span>
                                            </h6>
                                            <p class="mb-1"> <a href="#!">Apple</a></p>
                                            <p class="text-1000 mb-0">Jan 2012 - Apr 2012 &bull; 4 mos</p>
                                            <p class="text-1000 mb-0">California, USA</p>
                                            <div class="border-dashed-bottom my-3"></div>
                                        </div>
                                    </div>
                                    <div class="d-flex"><a href="#!"> <img class="img-fluid"
                                                src="../../assets/img/logos/nike.png" alt=""
                                                width="56" /></a>
                                        <div class="flex-1 position-relative ps-3">
                                            <h6 class="fs-0 mb-0">Mobile App Developer<span data-bs-toggle="tooltip"
                                                    data-bs-placement="top" title="Verified"><small
                                                        class="fa fa-check-circle text-primary"
                                                        data-fa-transform="shrink-4 down-2"></small></span>
                                            </h6>
                                            <p class="mb-1"> <a href="#!">Nike</a></p>
                                            <p class="text-1000 mb-0">Jan 2011 - Apr 2012 &bull; 1 yr 4 mos</p>
                                            <p class="text-1000 mb-0">Beaverton, USA</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-3">
                                <div class="card-header bg-light">
                                    <h5 class="mb-0">Education</h5>
                                </div>
                                <div class="card-body fs--1">
                                    <div class="d-flex"><a href="#!">
                                            <div class="avatar avatar-3xl">
                                                <div class="avatar-name rounded-circle"><span>SU</span></div>
                                            </div>
                                        </a>
                                        <div class="flex-1 position-relative ps-3">
                                            <h6 class="fs-0 mb-0"> <a href="#!">Stanford University<span
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="Verified"><small
                                                            class="fa fa-check-circle text-primary"
                                                            data-fa-transform="shrink-4 down-2"></small></span></a>
                                            </h6>
                                            <p class="mb-1">Computer Science and Engineering</p>
                                            <p class="text-1000 mb-0">2010 - 2014 • 4 yrs</p>
                                            <p class="text-1000 mb-0">California, USA</p>
                                            <div class="border-dashed-bottom my-3"></div>
                                        </div>
                                    </div>
                                    <div class="d-flex"><a href="#!"> <img class="img-fluid"
                                                src="../../assets/img/logos/staten.png" alt=""
                                                width="56" /></a>
                                        <div class="flex-1 position-relative ps-3">
                                            <h6 class="fs-0 mb-0"> <a href="#!">Staten Island Technical High
                                                    School<span data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="Verified"><small
                                                            class="fa fa-check-circle text-primary"
                                                            data-fa-transform="shrink-4 down-2"></small></span></a>
                                            </h6>
                                            <p class="mb-1">Higher Secondary School Certificate, Science</p>
                                            <p class="text-1000 mb-0">2008 - 2010 &bull; 2 yrs</p>
                                            <p class="text-1000 mb-0">New York, USA</p>
                                            <div class="border-dashed-bottom my-3"></div>
                                        </div>
                                    </div>
                                    <div class="d-flex"><a href="#!"> <img class="img-fluid"
                                                src="../../assets/img/logos/tj-heigh-school.png" alt=""
                                                width="56" /></a>
                                        <div class="flex-1 position-relative ps-3">
                                            <h6 class="fs-0 mb-0"> <a href="#!">Thomas Jefferson High School
                                                    for Science and Technology<span data-bs-toggle="tooltip"
                                                        data-bs-placement="top" title="Verified"><small
                                                            class="fa fa-check-circle text-primary"
                                                            data-fa-transform="shrink-4 down-2"></small></span></a>
                                            </h6>
                                            <p class="mb-1">Secondary School Certificate, Science</p>
                                            <p class="text-1000 mb-0">2003 - 2008 &bull; 5 yrs</p>
                                            <p class="text-1000 mb-0">Alexandria, USA</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-3 mb-lg-0">
                                <div class="card-header bg-light">
                                    <h5 class="mb-0">Events</h5>
                                </div>
                                <div class="card-body fs--1">
                                    <div class="d-flex btn-reveal-trigger">
                                        <div class="calendar"><span class="calendar-month">Feb</span><span
                                                class="calendar-day">21</span></div>
                                        <div class="flex-1 position-relative ps-3">
                                            <h6 class="fs-0 mb-0"><a
                                                    href="../../app/events/event-detail.html">Newmarket Nights</a>
                                            </h6>
                                            <p class="mb-1">Organized by <a href="#!"
                                                    class="text-700">University of Oxford</a></p>
                                            <p class="text-1000 mb-0">Time: 6:00AM</p>
                                            <p class="text-1000 mb-0">Duration: 6:00AM - 5:00PM</p>Place: Cambridge
                                            Boat Club, Cambridge
                                            <div class="border-dashed-bottom my-3"></div>
                                        </div>
                                    </div>
                                    <div class="d-flex btn-reveal-trigger">
                                        <div class="calendar"><span class="calendar-month">Dec</span><span
                                                class="calendar-day">31</span></div>
                                        <div class="flex-1 position-relative ps-3">
                                            <h6 class="fs-0 mb-0"><a href="../../app/events/event-detail.html">31st
                                                    Night Celebration</a></h6>
                                            <p class="mb-1">Organized by <a href="#!"
                                                    class="text-700">Chamber Music Society</a></p>
                                            <p class="text-1000 mb-0">Time: 11:00PM</p>
                                            <p class="text-1000 mb-0">280 people interested</p>Place: Tavern on the
                                            Greend, New York
                                            <div class="border-dashed-bottom my-3"></div>
                                        </div>
                                    </div>
                                    <div class="d-flex btn-reveal-trigger">
                                        <div class="calendar"><span class="calendar-month">Dec</span><span
                                                class="calendar-day">16</span></div>
                                        <div class="flex-1 position-relative ps-3">
                                            <h6 class="fs-0 mb-0"><a href="../../app/events/event-detail.html">Folk
                                                    Festival</a></h6>
                                            <p class="mb-1">Organized by <a href="#!"
                                                    class="text-700">Harvard University</a></p>
                                            <p class="text-1000 mb-0">Time: 9:00AM</p>
                                            <p class="text-1000 mb-0">Location: Cambridge Masonic Hall Association</p>
                                            Place: Porter Square, North Cambridge
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer bg-light p-0 border-top"><a
                                        class="btn btn-link d-block w-100"
                                        href="../../app/events/event-list.html">All Events<span
                                            class="fas fa-chevron-right ms-1 fs--2"></span></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mt-3">
                    <div class="card-header bg-light">
                        <div class="row align-items-center">
                            <div class="col">
                                <h5 class="mb-0" id="followers">Followers <span
                                        class="d-none d-sm-inline-block">(233)</span></h5>
                            </div>
                            <div class="col text-end"><a class="font-sans-serif"
                                    href="../../app/social/followers.html">All Members</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body bg-light px-1 py-0">
                        <div class="row g-0 text-center fs--1">
                            <div class="col-6 col-md-4 col-lg-3 col-xxl-2 mb-1">
                                <div class="bg-white dark__bg-1100 p-3 h-100"><a
                                        href="../../pages/user/profile.html"><img
                                            class="img-thumbnail img-fluid rounded-circle mb-3 shadow-sm"
                                            src="../../assets/img/team/1.jpg" alt="" width="100" /></a>
                                    <h6 class="mb-1"><a href="../../pages/user/profile.html">Emilia Clarke</a>
                                    </h6>
                                    <p class="fs--2 mb-1"><a class="text-700" href="#!">Technext limited</a>
                                    </p>
                                </div>
                            </div>
                            <div class="col-6 col-md-4 col-lg-3 col-xxl-2 mb-1">
                                <div class="bg-white dark__bg-1100 p-3 h-100"><a
                                        href="../../pages/user/profile.html"><img
                                            class="img-thumbnail img-fluid rounded-circle mb-3 shadow-sm"
                                            src="../../assets/img/team/2.jpg" alt="" width="100" /></a>
                                    <h6 class="mb-1"><a href="../../pages/user/profile.html">Kit Harington</a>
                                    </h6>
                                    <p class="fs--2 mb-1"><a class="text-700" href="#!">Harvard Korea
                                            Society</a></p>
                                </div>
                            </div>
                            <div class="col-6 col-md-4 col-lg-3 col-xxl-2 mb-1">
                                <div class="bg-white dark__bg-1100 p-3 h-100"><a
                                        href="../../pages/user/profile.html"><img
                                            class="img-thumbnail img-fluid rounded-circle mb-3 shadow-sm"
                                            src="../../assets/img/team/3.jpg" alt="" width="100" /></a>
                                    <h6 class="mb-1"><a href="../../pages/user/profile.html">Sophie Turner</a>
                                    </h6>
                                    <p class="fs--2 mb-1"><a class="text-700" href="#!">Graduate Student
                                            Council</a></p>
                                </div>
                            </div>
                            <div class="col-6 col-md-4 col-lg-3 col-xxl-2 mb-1">
                                <div class="bg-white dark__bg-1100 p-3 h-100"><a
                                        href="../../pages/user/profile.html"><img
                                            class="img-thumbnail img-fluid rounded-circle mb-3 shadow-sm"
                                            src="../../assets/img/team/4.jpg" alt="" width="100" /></a>
                                    <h6 class="mb-1"><a href="../../pages/user/profile.html">Peter Dinklage</a>
                                    </h6>
                                    <p class="fs--2 mb-1"><a class="text-700" href="#!">Art Club, MIT</a></p>
                                </div>
                            </div>
                            <div class="col-6 col-md-4 col-lg-3 col-xxl-2 mb-1">
                                <div class="bg-white dark__bg-1100 p-3 h-100"><a
                                        href="../../pages/user/profile.html"><img
                                            class="img-thumbnail img-fluid rounded-circle mb-3 shadow-sm"
                                            src="../../assets/img/team/5.jpg" alt="" width="100" /></a>
                                    <h6 class="mb-1"><a href="../../pages/user/profile.html">Nikolaj Coster</a>
                                    </h6>
                                    <p class="fs--2 mb-1"><a class="text-700" href="#!">Archery Club, MIT</a>
                                    </p>
                                </div>
                            </div>
                            <div class="col-6 col-md-4 col-lg-3 col-xxl-2 mb-1">
                                <div class="bg-white dark__bg-1100 p-3 h-100"><a
                                        href="../../pages/user/profile.html"><img
                                            class="img-thumbnail img-fluid rounded-circle mb-3 shadow-sm"
                                            src="../../assets/img/team/6.jpg" alt="" width="100" /></a>
                                    <h6 class="mb-1"><a href="../../pages/user/profile.html">Isaac Hempstead</a>
                                    </h6>
                                    <p class="fs--2 mb-1"><a class="text-700" href="#!">Asymptones</a></p>
                                </div>
                            </div>
                            <div class="col-6 col-md-4 col-lg-3 col-xxl-2 mb-1">
                                <div class="bg-white dark__bg-1100 p-3 h-100"><a
                                        href="../../pages/user/profile.html"><img
                                            class="img-thumbnail img-fluid rounded-circle mb-3 shadow-sm"
                                            src="../../assets/img/team/7.jpg" alt="" width="100" /></a>
                                    <h6 class="mb-1"><a href="../../pages/user/profile.html">Alfie Allen</a>
                                    </h6>
                                    <p class="fs--2 mb-1"><a class="text-700" href="#!">Brain Trust</a></p>
                                </div>
                            </div>
                            <div class="col-6 col-md-4 col-lg-3 col-xxl-2 mb-1">
                                <div class="bg-white dark__bg-1100 p-3 h-100"><a
                                        href="../../pages/user/profile.html"><img
                                            class="img-thumbnail img-fluid rounded-circle mb-3 shadow-sm"
                                            src="../../assets/img/team/8.jpg" alt="" width="100" /></a>
                                    <h6 class="mb-1"><a href="../../pages/user/profile.html">Iain Glen</a>
                                    </h6>
                                    <p class="fs--2 mb-1"><a class="text-700" href="#!">GSAS Action
                                            Coalition</a></p>
                                </div>
                            </div>
                            <div class="col-6 col-md-4 col-lg-3 col-xxl-2 mb-1">
                                <div class="bg-white dark__bg-1100 p-3 h-100"><a
                                        href="../../pages/user/profile.html"><img
                                            class="img-thumbnail img-fluid rounded-circle mb-3 shadow-sm"
                                            src="../../assets/img/team/9.jpg" alt="" width="100" /></a>
                                    <h6 class="mb-1"><a href="../../pages/user/profile.html">Liam Cunningham</a>
                                    </h6>
                                    <p class="fs--2 mb-1"><a class="text-700" href="#!">Caving Club, MIT</a>
                                    </p>
                                </div>
                            </div>
                            <div class="col-6 col-md-4 col-lg-3 col-xxl-2 mb-1">
                                <div class="bg-white dark__bg-1100 p-3 h-100"><a
                                        href="../../pages/user/profile.html"><img
                                            class="img-thumbnail img-fluid rounded-circle mb-3 shadow-sm"
                                            src="../../assets/img/team/10.jpg" alt=""
                                            width="100" /></a>
                                    <h6 class="mb-1"><a href="../../pages/user/profile.html">John Bradley</a>
                                    </h6>
                                    <p class="fs--2 mb-1"><a class="text-700" href="#!">Chess Club</a></p>
                                </div>
                            </div>
                            <div class="col-6 col-md-4 col-lg-3 col-xxl-2 mb-1">
                                <div class="bg-white dark__bg-1100 p-3 h-100"><a
                                        href="../../pages/user/profile.html"><img
                                            class="img-thumbnail img-fluid rounded-circle mb-3 shadow-sm"
                                            src="../../assets/img/team/11.jpg" alt=""
                                            width="100" /></a>
                                    <h6 class="mb-1"><a href="../../pages/user/profile.html">Rory McCann</a>
                                    </h6>
                                    <p class="fs--2 mb-1"><a class="text-700" href="#!">Chamber Music
                                            Society</a></p>
                                </div>
                            </div>
                            <div class="col-6 col-md-4 col-lg-3 col-xxl-2 mb-1">
                                <div class="bg-white dark__bg-1100 p-3 h-100"><a
                                        href="../../pages/user/profile.html"><img
                                            class="img-thumbnail img-fluid rounded-circle mb-3 shadow-sm"
                                            src="../../assets/img/team/12.jpg" alt=""
                                            width="100" /></a>
                                    <h6 class="mb-1"><a href="../../pages/user/profile.html">Joe Dempsie</a>
                                    </h6>
                                    <p class="fs--2 mb-1"><a class="text-700" href="#!">Clubchem</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <footer class="footer">
                    <div class="row g-0 justify-content-between fs--1 mt-4 mb-3">
                        <div class="col-12 col-sm-auto text-center">
                            <p class="mb-0 text-600">Thank you for creating with Falcon <span
                                    class="d-none d-sm-inline-block">| </span><br class="d-sm-none" /> 2021 &copy;
                                <a href="https://themewagon.com">Themewagon</a></p>
                        </div>
                        <div class="col-12 col-sm-auto text-center">
                            <p class="mb-0 text-600">v3.4.0</p>
                        </div>
                    </div>
                </footer>
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
                                    <input class="form-control" type="text" autocomplete="on"
                                        id="modal-auth-name" />
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
                                    <input class="form-check-input" type="checkbox"
                                        id="modal-auth-register-checkbox" />
                                    <label class="form-label" for="modal-auth-register-checkbox">I accept the <a
                                            href="#!">terms </a>and <a href="#!">privacy
                                            policy</a></label>
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
                                    src="../../assets/img/generic/falcon-mode-default.jpg"
                                    alt="" /></span><span class="label-text">Light</span></label>
                    </div>
                    <div class="col-6">
                        <input class="btn-check" id="themeSwitcherDark" name="theme-color" type="radio"
                            value="dark" data-theme-control="theme" />
                        <label class="btn d-inline-block btn-navbar-style fs--1" for="themeSwitcherDark"> <span
                                class="hover-overlay mb-2 rounded d-block"><img class="img-fluid img-prototype mb-0"
                                    src="../../assets/img/generic/falcon-mode-dark.jpg"
                                    alt="" /></span><span class="label-text"> Dark</span></label>
                    </div>
                </div>
            </div>
            <hr />
            <div class="d-flex justify-content-between">
                <div class="d-flex align-items-start"><img class="me-2"
                        src="../../assets/img/icons/left-arrow-from-left.svg" width="20" alt="" />
                    <div class="flex-1">
                        <h5 class="fs-0">RTL Mode</h5>
                        <p class="fs--1 mb-0">Switch your language direction </p><a class="fs--1"
                            href="../../documentation/customization/configuration.html">RTL Documentation</a>
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
                        src="../../assets/img/icons/arrows-h.svg" width="20" alt="" />
                    <div class="flex-1">
                        <h5 class="fs-0">Fluid Layout</h5>
                        <p class="fs--1 mb-0">Toggle container layout system </p><a class="fs--1"
                            href="../../documentation/customization/configuration.html">Fluid Documentation</a>
                    </div>
                </div>
                <div class="form-check form-switch">
                    <input class="form-check-input ms-0" id="mode-fluid" type="checkbox"
                        data-theme-control="isFluid" />
                </div>
            </div>
            <hr />
            <div class="d-flex align-items-start"><img class="me-2" src="../../assets/img/icons/paragraph.svg"
                    width="20" alt="" />
                <div class="flex-1">
                    <h5 class="fs-0 d-flex align-items-center">Navigation Position </h5>
                    <p class="fs--1 mb-2">Select a suitable navigation system for your web application </p>
                    <div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" id="option-navbar-vertical" type="radio"
                                name="navbar" value="vertical"
                                data-page-url="../../modules/components/navs-and-tabs/vertical-navbar.html"
                                data-theme-control="navbarPosition" />
                            <label class="form-check-label" for="option-navbar-vertical">Vertical</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" id="option-navbar-top" type="radio" name="navbar"
                                value="top"
                                data-page-url="../../modules/components/navs-and-tabs/top-navbar.html"
                                data-theme-control="navbarPosition" />
                            <label class="form-check-label" for="option-navbar-top">Top</label>
                        </div>
                        <div class="form-check form-check-inline me-0">
                            <input class="form-check-input" id="option-navbar-combo" type="radio"
                                name="navbar" value="combo"
                                data-page-url="../../modules/components/navs-and-tabs/combo-navbar.html"
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
                    href="../../modules/components/navs-and-tabs/vertical-navbar.html#navbar-styles">See
                    Documentation</a></p>
            <div class="btn-group d-block w-100 btn-group-navbar-style">
                <div class="row gx-2">
                    <div class="col-6">
                        <input class="btn-check" id="navbar-style-transparent" type="radio" name="navbarStyle"
                            value="transparent" data-theme-control="navbarStyle" />
                        <label class="btn d-block w-100 btn-navbar-style fs--1" for="navbar-style-transparent"> <img
                                class="img-fluid img-prototype" src="../../assets/img/generic/default.png"
                                alt="" /><span class="label-text"> Transparent</span></label>
                    </div>
                    <div class="col-6">
                        <input class="btn-check" id="navbar-style-inverted" type="radio" name="navbarStyle"
                            value="inverted" data-theme-control="navbarStyle" />
                        <label class="btn d-block w-100 btn-navbar-style fs--1" for="navbar-style-inverted"> <img
                                class="img-fluid img-prototype" src="../../assets/img/generic/inverted.png"
                                alt="" /><span class="label-text"> Inverted</span></label>
                    </div>
                    <div class="col-6">
                        <input class="btn-check" id="navbar-style-card" type="radio" name="navbarStyle"
                            value="card" data-theme-control="navbarStyle" />
                        <label class="btn d-block w-100 btn-navbar-style fs--1" for="navbar-style-card"> <img
                                class="img-fluid img-prototype" src="../../assets/img/generic/card.png"
                                alt="" /><span class="label-text"> Card</span></label>
                    </div>
                    <div class="col-6">
                        <input class="btn-check" id="navbar-style-vibrant" type="radio" name="navbarStyle"
                            value="vibrant" data-theme-control="navbarStyle" />
                        <label class="btn d-block w-100 btn-navbar-style fs--1" for="navbar-style-vibrant"> <img
                                class="img-fluid img-prototype" src="../../assets/img/generic/vibrant.png"
                                alt="" /><span class="label-text"> Vibrant</span></label>
                    </div>
                </div>
            </div>
            <div class="text-center mt-5"><img class="mb-4"
                    src="../../assets/img/icons/spot-illustrations/47.png" alt="" width="120" />
                <h5>Like What You See?</h5>
                <p class="fs--1">Get Falcon now and create beautiful dashboards with hundreds of widgets.</p><a
                    class="mb-3 btn btn-primary"
                    href="https://themes.getbootstrap.com/product/falcon-admin-dashboard-webapp-template/"
                    target="_blank">Purchase</a>
            </div>
        </div>



        <!-- ===============================================-->
        <!--    JavaScripts-->
        <!-- ===============================================-->

        <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
        <script src="{{ asset('js/theme.js') }}"></script>
        <script src="{{ asset('js/list.min.js') }}"></script>
        <script src="{{ asset('lodash.min.js') }}"></script>
        <script src="{{ asset('all.min.js') }}"></script>
        <script src="{{ asset('glightbox.min.js') }}"></script>
        <script src="{{ asset('anchor.min.js') }}"></script>
        <script src="{{ asset('is.min.js') }}"></script>
        <script src="{{ asset('bootstrap.min.js') }}"></script>
        <script src="{{ asset('popper.min.js') }}"></script>




</body>

</html>
