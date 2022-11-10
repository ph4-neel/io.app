<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
  @include('layouts.app')
  <link rel="stylesheet" href="{{ asset('css/leaflet.css') }}">
  <link rel="stylesheet" href="{{ asset('css/MarkerCluster.css ') }}">
  <link rel="stylesheet" href="{{ asset('css/MarkerCluster.Default.css') }}">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7cPoppins:300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/OverlayScrollbars.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/ theme-rtl.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/theme.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/ user-rtl.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/ user.min.css') }}">
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

              <button class="btn navbar-toggler-humburger-icon navbar-vertical-toggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>

            </div><a class="navbar-brand" href="../index.html">
              <div class="d-flex align-items-center py-3"><img class="me-2" src="../assets/img/icons/spot-illustrations/falcon.png" alt="" width="40" /><span class="font-sans-serif">falcon</span>
              </div>
            </a>
          </div>
          <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
            <div class="navbar-vertical-content scrollbar">
              <ul class="navbar-nav flex-column mb-3" id="navbarVerticalNav">
                <li class="nav-item">
                  <!-- parent pages--><a class="nav-link dropdown-indicator" href="#dashboard" role="button" data-bs-toggle="collapse" aria-expanded="true" aria-controls="dashboard">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-chart-pie"></span></span><span class="nav-link-text ps-1">Dashboard</span>
                    </div>
                  </a>
                  <ul class="nav collapse show" id="dashboard">
                    <li class="nav-item"><a class="nav-link" href="{{url('/dash')}}" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Default</span>
                        </div>
                      </a>
                      <!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="{{url('/anal')}}" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Analytics</span>
                        </div>
                      </a>
                      <!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link active" href="{{url('/crms')}}" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">CRM</span>
                        </div>
                      </a>
                      <!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="{{url('/ecom')}}" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">E commerce</span>
                        </div>
                      </a>
                      <!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="{{url('/project')}}" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Management</span>
                        </div>
                      </a>
                      <!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link"  href="{{url('/saas')}}"  aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">SaaS</span>
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
                  <!-- parent pages--><a class="nav-link" href="../app/calendar.html" role="button" aria-expanded="false">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-calendar-alt"></span></span><span class="nav-link-text ps-1">Calendar</span>
                    </div>
                  </a>
                  <!-- parent pages--><a class="nav-link" href="../app/chat.html" role="button" aria-expanded="false">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-comments"></span></span><span class="nav-link-text ps-1">Chat</span>
                    </div>
                  </a>
                  <!-- parent pages--><a class="nav-link dropdown-indicator" href="#email" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="email">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-envelope-open"></span></span><span class="nav-link-text ps-1">Email</span>
                    </div>
                  </a>
                  <ul class="nav collapse false" id="email">
                    <li class="nav-item"><a class="nav-link" href="../app/email/inbox.html" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Inbox</span>
                        </div>
                      </a>
                      <!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../app/email/email-detail.html" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Email detail</span>
                        </div>
                      </a>
                      <!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../app/email/compose.html" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Compose</span>
                        </div>
                      </a>
                      <!-- more inner pages-->
                    </li>
                  </ul>
                  <!-- parent pages--><a class="nav-link dropdown-indicator" href="#events" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="events">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-calendar-day"></span></span><span class="nav-link-text ps-1">Events</span>
                    </div>
                  </a>
                  <ul class="nav collapse false" id="events">
                    <li class="nav-item"><a class="nav-link" href="../app/events/create-an-event.html" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Create an event</span>
                        </div>
                      </a>
                      <!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../app/events/event-detail.html" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Event detail</span>
                        </div>
                      </a>
                      <!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../app/events/event-list.html" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Event list</span>
                        </div>
                      </a>
                      <!-- more inner pages-->
                    </li>
                  </ul>
                  <!-- parent pages--><a class="nav-link dropdown-indicator" href="#e-commerce" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="e-commerce">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-shopping-cart"></span></span><span class="nav-link-text ps-1">E commerce</span>
                    </div>
                  </a>
                  <ul class="nav collapse false" id="e-commerce">
                    <li class="nav-item"><a class="nav-link dropdown-indicator" href="#product" data-bs-toggle="collapse" aria-expanded="false" aria-controls="e-commerce">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Product</span>
                        </div>
                      </a>
                      <!-- more inner pages-->
                      <ul class="nav collapse false" id="product">
                        <li class="nav-item"><a class="nav-link" href="../app/e-commerce/product/product-list.html" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Product list</span>
                            </div>
                          </a>
                          <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="../app/e-commerce/product/product-grid.html" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Product grid</span>
                            </div>
                          </a>
                          <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="../app/e-commerce/product/product-details.html" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Product details</span>
                            </div>
                          </a>
                          <!-- more inner pages-->
                        </li>
                      </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link dropdown-indicator" href="#orders" data-bs-toggle="collapse" aria-expanded="false" aria-controls="e-commerce">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Orders</span>
                        </div>
                      </a>
                      <!-- more inner pages-->
                      <ul class="nav collapse false" id="orders">
                        <li class="nav-item"><a class="nav-link" href="../app/e-commerce/orders/order-list.html" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Order list</span>
                            </div>
                          </a>
                          <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="../app/e-commerce/orders/order-details.html" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Order details</span>
                            </div>
                          </a>
                          <!-- more inner pages-->
                        </li>
                      </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../app/e-commerce/customers.html" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Customers</span>
                        </div>
                      </a>
                      <!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../app/e-commerce/customer-details.html" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Customer details</span>
                        </div>
                      </a>
                      <!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../app/e-commerce/shopping-cart.html" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Shopping cart</span>
                        </div>
                      </a>
                      <!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../app/e-commerce/checkout.html" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Checkout</span>
                        </div>
                      </a>
                      <!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../app/e-commerce/billing.html" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Billing</span>
                        </div>
                      </a>
                      <!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../app/e-commerce/invoice.html" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Invoice</span>
                        </div>
                      </a>
                      <!-- more inner pages-->
                    </li>
                  </ul>
                  <!-- parent pages--><a class="nav-link" href="../app/kanban.html" role="button" aria-expanded="false">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fab fa-trello"></span></span><span class="nav-link-text ps-1">Kanban</span>
                    </div>
                  </a>
                  <!-- parent pages--><a class="nav-link dropdown-indicator" href="#social" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="social">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-share-alt"></span></span><span class="nav-link-text ps-1">Social</span>
                    </div>
                  </a>
                  <ul class="nav collapse false" id="social">
                    <li class="nav-item"><a class="nav-link" href="../app/social/feed.html" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Feed</span>
                        </div>
                      </a>
                      <!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../app/social/activity-log.html" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Activity log</span>
                        </div>
                      </a>
                      <!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../app/social/notifications.html" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Notifications</span>
                        </div>
                      </a>
                      <!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../app/social/followers.html" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Followers</span>
                        </div>
                      </a>
                      <!-- more inner pages-->
                    </li>
                  </ul>
                </li>
                <li class="nav-item">
                  <!-- label-->
                  <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
                    <div class="col-auto navbar-vertical-label">Pages
                    </div>
                    <div class="col ps-0">
                      <hr class="mb-0 navbar-vertical-divider" />
                    </div>
                  </div>
                  <!-- parent pages--><a class="nav-link" href="../pages/starter.html" role="button" aria-expanded="false">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-flag"></span></span><span class="nav-link-text ps-1">Starter</span>
                    </div>
                  </a>
                  <!-- parent pages--><a class="nav-link" href="../pages/landing.html" role="button" aria-expanded="false">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-globe"></span></span><span class="nav-link-text ps-1">Landing</span>
                    </div>
                  </a>
                  <!-- parent pages--><a class="nav-link dropdown-indicator" href="#authentication" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="authentication">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-lock"></span></span><span class="nav-link-text ps-1">Authentication</span>
                    </div>
                  </a>
                  <ul class="nav collapse false" id="authentication">
                    <li class="nav-item"><a class="nav-link dropdown-indicator" href="#simple" data-bs-toggle="collapse" aria-expanded="false" aria-controls="authentication">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Simple</span>
                        </div>
                      </a>
                      <!-- more inner pages-->
                      <ul class="nav collapse false" id="simple">
                        <li class="nav-item"><a class="nav-link" href="../pages/authentication/simple/login.html" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Login</span>
                            </div>
                          </a>
                          <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="../pages/authentication/simple/logout.html" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Logout</span>
                            </div>
                          </a>
                          <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="../pages/authentication/simple/register.html" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Register</span>
                            </div>
                          </a>
                          <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="../pages/authentication/simple/forgot-password.html" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Forgot password</span>
                            </div>
                          </a>
                          <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="../pages/authentication/simple/confirm-mail.html" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Confirm mail</span>
                            </div>
                          </a>
                          <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="../pages/authentication/simple/reset-password.html" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Reset password</span>
                            </div>
                          </a>
                          <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="../pages/authentication/simple/lock-screen.html" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Lock screen</span>
                            </div>
                          </a>
                          <!-- more inner pages-->
                        </li>
                      </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link dropdown-indicator" href="#card" data-bs-toggle="collapse" aria-expanded="false" aria-controls="authentication">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Card</span>
                        </div>
                      </a>
                      <!-- more inner pages-->
                      <ul class="nav collapse false" id="card">
                        <li class="nav-item"><a class="nav-link" href="../pages/authentication/card/login.html" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Login</span>
                            </div>
                          </a>
                          <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="../pages/authentication/card/logout.html" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Logout</span>
                            </div>
                          </a>
                          <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="../pages/authentication/card/register.html" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Register</span>
                            </div>
                          </a>
                          <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="../pages/authentication/card/forgot-password.html" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Forgot password</span>
                            </div>
                          </a>
                          <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="../pages/authentication/card/confirm-mail.html" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Confirm mail</span>
                            </div>
                          </a>
                          <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="../pages/authentication/card/reset-password.html" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Reset password</span>
                            </div>
                          </a>
                          <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="../pages/authentication/card/lock-screen.html" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Lock screen</span>
                            </div>
                          </a>
                          <!-- more inner pages-->
                        </li>
                      </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link dropdown-indicator" href="#split" data-bs-toggle="collapse" aria-expanded="false" aria-controls="authentication">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Split</span>
                        </div>
                      </a>
                      <!-- more inner pages-->
                      <ul class="nav collapse false" id="split">
                        <li class="nav-item"><a class="nav-link" href="../pages/authentication/split/login.html" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Login</span>
                            </div>
                          </a>
                          <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="../pages/authentication/split/logout.html" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Logout</span>
                            </div>
                          </a>
                          <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="../pages/authentication/split/register.html" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Register</span>
                            </div>
                          </a>
                          <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="../pages/authentication/split/forgot-password.html" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Forgot password</span>
                            </div>
                          </a>
                          <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="../pages/authentication/split/confirm-mail.html" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Confirm mail</span>
                            </div>
                          </a>
                          <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="../pages/authentication/split/reset-password.html" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Reset password</span>
                            </div>
                          </a>
                          <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="../pages/authentication/split/lock-screen.html" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Lock screen</span>
                            </div>
                          </a>
                          <!-- more inner pages-->
                        </li>
                      </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../pages/authentication/wizard.html" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Wizard</span>
                        </div>
                      </a>
                      <!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../#authentication-modal" data-bs-toggle="modal" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Modal</span>
                        </div>
                      </a>
                      <!-- more inner pages-->
                    </li>
                  </ul>
                  <!-- parent pages--><a class="nav-link dropdown-indicator" href="#user" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="user">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-user"></span></span><span class="nav-link-text ps-1">User</span>
                    </div>
                  </a>
                  <ul class="nav collapse false" id="user">
                    <li class="nav-item"><a class="nav-link" href="../pages/user/profile.html" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Profile</span>
                        </div>
                      </a>
                      <!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../pages/user/settings.html" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Settings</span>
                        </div>
                      </a>
                      <!-- more inner pages-->
                    </li>
                  </ul>
                  <!-- parent pages--><a class="nav-link dropdown-indicator" href="#pricing" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="pricing">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-tags"></span></span><span class="nav-link-text ps-1">Pricing</span>
                    </div>
                  </a>
                  <ul class="nav collapse false" id="pricing">
                    <li class="nav-item"><a class="nav-link" href="../pages/pricing/pricing-default.html" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Pricing default</span>
                        </div>
                      </a>
                      <!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../pages/pricing/pricing-alt.html" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Pricing alt</span>
                        </div>
                      </a>
                      <!-- more inner pages-->
                    </li>
                  </ul>
                  <!-- parent pages--><a class="nav-link dropdown-indicator" href="#faq" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="faq">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-question-circle"></span></span><span class="nav-link-text ps-1">Faq</span>
                    </div>
                  </a>
                  <ul class="nav collapse false" id="faq">
                    <li class="nav-item"><a class="nav-link" href="../pages/faq/faq-basic.html" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Faq basic</span>
                        </div>
                      </a>
                      <!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../pages/faq/faq-alt.html" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Faq alt</span>
                        </div>
                      </a>
                      <!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../pages/faq/faq-accordion.html" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Faq accordion</span>
                        </div>
                      </a>
                      <!-- more inner pages-->
                    </li>
                  </ul>
                  <!-- parent pages--><a class="nav-link dropdown-indicator" href="#errors" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="errors">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-exclamation-triangle"></span></span><span class="nav-link-text ps-1">Errors</span>
                    </div>
                  </a>
                  <ul class="nav collapse false" id="errors">
                    <li class="nav-item"><a class="nav-link" href="../pages/errors/404.html" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">404</span>
                        </div>
                      </a>
                      <!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../pages/errors/500.html" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">500</span>
                        </div>
                      </a>
                      <!-- more inner pages-->
                    </li>
                  </ul>
                  <!-- parent pages--><a class="nav-link dropdown-indicator" href="#miscellaneous" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="miscellaneous">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-thumbtack"></span></span><span class="nav-link-text ps-1">Miscellaneous</span>
                    </div>
                  </a>
                  <ul class="nav collapse false" id="miscellaneous">
                    <li class="nav-item"><a class="nav-link" href="../pages/miscellaneous/associations.html" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Associations</span>
                        </div>
                      </a>
                      <!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../pages/miscellaneous/invite-people.html" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Invite people</span>
                        </div>
                      </a>
                      <!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../pages/miscellaneous/privacy-policy.html" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Privacy policy</span>
                        </div>
                      </a>
                      <!-- more inner pages-->
                    </li>
                  </ul>
                </li>
                <li class="nav-item">
                  <!-- label-->
                  <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
                    <div class="col-auto navbar-vertical-label">Modules
                    </div>
                    <div class="col ps-0">
                      <hr class="mb-0 navbar-vertical-divider" />
                    </div>
                  </div>
                  <!-- parent pages--><a class="nav-link dropdown-indicator" href="#forms" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="forms">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-file-alt"></span></span><span class="nav-link-text ps-1">Forms</span>
                    </div>
                  </a>
                  <ul class="nav collapse false" id="forms">
                    <li class="nav-item"><a class="nav-link dropdown-indicator" href="#basic" data-bs-toggle="collapse" aria-expanded="false" aria-controls="forms">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Basic</span>
                        </div>
                      </a>
                      <!-- more inner pages-->
                      <ul class="nav collapse false" id="basic">
                        <li class="nav-item"><a class="nav-link" href="../modules/forms/basic/form-control.html" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Form control</span>
                            </div>
                          </a>
                          <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="../modules/forms/basic/input-group.html" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Input group</span>
                            </div>
                          </a>
                          <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="../modules/forms/basic/select.html" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Select</span>
                            </div>
                          </a>
                          <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="../modules/forms/basic/checks.html" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Checks</span>
                            </div>
                          </a>
                          <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="../modules/forms/basic/range.html" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Range</span>
                            </div>
                          </a>
                          <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="../modules/forms/basic/layout.html" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Layout</span>
                            </div>
                          </a>
                          <!-- more inner pages-->
                        </li>
                      </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link dropdown-indicator" href="#advance" data-bs-toggle="collapse" aria-expanded="false" aria-controls="forms">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Advance</span>
                        </div>
                      </a>
                      <!-- more inner pages-->
                      <ul class="nav collapse false" id="advance">
                        <li class="nav-item"><a class="nav-link" href="../modules/forms/advance/advance-select.html" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Advance select</span>
                            </div>
                          </a>
                          <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="../modules/forms/advance/date-picker.html" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Date picker</span>
                            </div>
                          </a>
                          <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="../modules/forms/advance/editor.html" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Editor</span>
                            </div>
                          </a>
                          <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="../modules/forms/advance/emoji-button.html" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Emoji button</span>
                            </div>
                          </a>
                          <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="../modules/forms/advance/file-uploader.html" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">File uploader</span>
                            </div>
                          </a>
                          <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="../modules/forms/advance/rating.html" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Rating</span>
                            </div>
                          </a>
                          <!-- more inner pages-->
                        </li>
                      </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../modules/forms/floating-labels.html" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Floating labels</span>
                        </div>
                      </a>
                      <!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../modules/forms/wizard.html" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Wizard</span>
                        </div>
                      </a>
                      <!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../modules/forms/validation.html" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Validation</span>
                        </div>
                      </a>
                      <!-- more inner pages-->
                    </li>
                  </ul>
                  <!-- parent pages--><a class="nav-link dropdown-indicator" href="#tables" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="tables">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-table"></span></span><span class="nav-link-text ps-1">Tables</span>
                    </div>
                  </a>
                  <ul class="nav collapse false" id="tables">
                    <li class="nav-item"><a class="nav-link" href="../modules/tables/basic-tables.html" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Basic tables</span>
                        </div>
                      </a>
                      <!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../modules/tables/advance-tables.html" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Advance tables</span>
                        </div>
                      </a>
                      <!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../modules/tables/bulk-select.html" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Bulk select</span>
                        </div>
                      </a>
                      <!-- more inner pages-->
                    </li>
                  </ul>
                  <!-- parent pages--><a class="nav-link dropdown-indicator" href="#charts" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="charts">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-chart-line"></span></span><span class="nav-link-text ps-1">Charts</span>
                    </div>
                  </a>
                  <ul class="nav collapse false" id="charts">
                    <li class="nav-item"><a class="nav-link" href="../modules/charts/chartjs.html" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Chartjs</span>
                        </div>
                      </a>
                      <!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link dropdown-indicator" href="#eCharts" data-bs-toggle="collapse" aria-expanded="false" aria-controls="charts">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">ECharts</span>
                        </div>
                      </a>
                      <!-- more inner pages-->
                      <ul class="nav collapse false" id="eCharts">
                        <li class="nav-item"><a class="nav-link" href="../modules/charts/echarts/line-charts.html" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Line charts</span>
                            </div>
                          </a>
                          <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="../modules/charts/echarts/bar-charts.html" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Bar charts</span>
                            </div>
                          </a>
                          <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="../modules/charts/echarts/candlestick-charts.html" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Candlestick charts</span>
                            </div>
                          </a>
                          <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="../modules/charts/echarts/geo-map.html" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Geo map</span>
                            </div>
                          </a>
                          <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="../modules/charts/echarts/scatter-charts.html" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Scatter charts</span>
                            </div>
                          </a>
                          <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="../modules/charts/echarts/pie-charts.html" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Pie charts</span>
                            </div>
                          </a>
                          <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="../modules/charts/echarts/radar-charts.html" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Radar charts</span>
                            </div>
                          </a>
                          <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="../modules/charts/echarts/heatmap-charts.html" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Heatmap charts</span>
                            </div>
                          </a>
                          <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="../modules/charts/echarts/how-to-use.html" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">How to use</span>
                            </div>
                          </a>
                          <!-- more inner pages-->
                        </li>
                      </ul>
                    </li>
                  </ul>
                  <!-- parent pages--><a class="nav-link dropdown-indicator" href="#icons" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="icons">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-shapes"></span></span><span class="nav-link-text ps-1">Icons</span>
                    </div>
                  </a>
                  <ul class="nav collapse false" id="icons">
                    <li class="nav-item"><a class="nav-link" href="../modules/icons/font-awesome.html" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Font awesome</span>
                        </div>
                      </a>
                      <!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../modules/icons/bootstrap-icons.html" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Bootstrap icons</span>
                        </div>
                      </a>
                      <!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../modules/icons/feather.html" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Feather</span>
                        </div>
                      </a>
                      <!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../modules/icons/material-icons.html" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Material icons</span>
                        </div>
                      </a>
                      <!-- more inner pages-->
                    </li>
                  </ul>
                  <!-- parent pages--><a class="nav-link dropdown-indicator" href="#maps" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="maps">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-map"></span></span><span class="nav-link-text ps-1">Maps</span>
                    </div>
                  </a>
                  <ul class="nav collapse false" id="maps">
                    <li class="nav-item"><a class="nav-link" href="../modules/maps/google-map.html" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Google map</span>
                        </div>
                      </a>
                      <!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../modules/maps/leaflet-map.html" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Leaflet map</span>
                        </div>
                      </a>
                      <!-- more inner pages-->
                    </li>
                  </ul>
                  <!-- parent pages--><a class="nav-link dropdown-indicator" href="#components" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="components">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-puzzle-piece"></span></span><span class="nav-link-text ps-1">Components</span>
                    </div>
                  </a>
                  <ul class="nav collapse false" id="components">
                    <li class="nav-item"><a class="nav-link" href="../modules/components/accordion.html" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Accordion</span>
                        </div>
                      </a>
                      <!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../modules/components/alerts.html" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Alerts</span>
                        </div>
                      </a>
                      <!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../modules/components/anchor.html" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Anchor</span>
                        </div>
                      </a>
                      <!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../modules/components/animated-icons.html" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Animated icons</span>
                        </div>
                      </a>
                      <!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../modules/components/background.html" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Background</span>
                        </div>
                      </a>
                      <!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../modules/components/badges.html" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Badges</span>
                        </div>
                      </a>
                      <!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../modules/components/breadcrumbs.html" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Breadcrumbs</span>
                        </div>
                      </a>
                      <!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../modules/components/buttons.html" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Buttons</span>
                        </div>
                      </a>
                      <!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../modules/components/calendar.html" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Calendar</span>
                        </div>
                      </a>
                      <!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../modules/components/cards.html" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Cards</span>
                        </div>
                      </a>
                      <!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link dropdown-indicator" href="#carousel" data-bs-toggle="collapse" aria-expanded="false" aria-controls="components">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Carousel</span>
                        </div>
                      </a>
                      <!-- more inner pages-->
                      <ul class="nav collapse false" id="carousel">
                        <li class="nav-item"><a class="nav-link" href="../modules/components/carousel/bootstrap.html" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Bootstrap</span>
                            </div>
                          </a>
                          <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="../modules/components/carousel/swiper.html" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Swiper</span>
                            </div>
                          </a>
                          <!-- more inner pages-->
                        </li>
                      </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../modules/components/collapse.html" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Collapse</span>
                        </div>
                      </a>
                      <!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../modules/components/cookie-notice.html" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Cookie notice</span>
                        </div>
                      </a>
                      <!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../modules/components/countup.html" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Countup</span>
                        </div>
                      </a>
                      <!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../modules/components/draggable.html" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Draggable</span>
                        </div>
                      </a>
                      <!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../modules/components/dropdowns.html" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Dropdowns</span>
                        </div>
                      </a>
                      <!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../modules/components/list-group.html" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">List group</span>
                        </div>
                      </a>
                      <!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../modules/components/modals.html" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Modals</span>
                        </div>
                      </a>
                      <!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link dropdown-indicator" href="#navs-_and_-Tabs" data-bs-toggle="collapse" aria-expanded="false" aria-controls="components">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Navs &amp; Tabs</span>
                        </div>
                      </a>
                      <!-- more inner pages-->
                      <ul class="nav collapse false" id="navs-_and_-Tabs">
                        <li class="nav-item"><a class="nav-link" href="../modules/components/navs-and-tabs/navs.html" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Navs</span>
                            </div>
                          </a>
                          <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="../modules/components/navs-and-tabs/navbar.html" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Navbar</span>
                            </div>
                          </a>
                          <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="../modules/components/navs-and-tabs/vertical-navbar.html" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Vertical navbar</span>
                            </div>
                          </a>
                          <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="../modules/components/navs-and-tabs/top-navbar.html" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Top navbar</span>
                            </div>
                          </a>
                          <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="../modules/components/navs-and-tabs/combo-navbar.html" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Combo navbar</span>
                            </div>
                          </a>
                          <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="../modules/components/navs-and-tabs/tabs.html" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Tabs</span>
                            </div>
                          </a>
                          <!-- more inner pages-->
                        </li>
                      </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../modules/components/offcanvas.html" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Offcanvas</span>
                        </div>
                      </a>
                      <!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link dropdown-indicator" href="#pictures" data-bs-toggle="collapse" aria-expanded="false" aria-controls="components">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Pictures</span>
                        </div>
                      </a>
                      <!-- more inner pages-->
                      <ul class="nav collapse false" id="pictures">
                        <li class="nav-item"><a class="nav-link" href="../modules/components/pictures/avatar.html" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Avatar</span>
                            </div>
                          </a>
                          <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="../modules/components/pictures/images.html" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Images</span>
                            </div>
                          </a>
                          <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="../modules/components/pictures/figures.html" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Figures</span>
                            </div>
                          </a>
                          <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="../modules/components/pictures/hoverbox.html" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Hoverbox</span>
                            </div>
                          </a>
                          <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="../modules/components/pictures/lightbox.html" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Lightbox</span>
                            </div>
                          </a>
                          <!-- more inner pages-->
                        </li>
                      </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../modules/components/progress-bar.html" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Progress bar</span>
                        </div>
                      </a>
                      <!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../modules/components/placeholder.html" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Placeholder</span>
                        </div>
                      </a>
                      <!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../modules/components/pagination.html" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Pagination</span>
                        </div>
                      </a>
                      <!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../modules/components/popovers.html" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Popovers</span>
                        </div>
                      </a>
                      <!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../modules/components/scrollspy.html" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Scrollspy</span>
                        </div>
                      </a>
                      <!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../modules/components/search.html" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Search</span>
                        </div>
                      </a>
                      <!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../modules/components/spinners.html" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Spinners</span>
                        </div>
                      </a>
                      <!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../modules/components/toasts.html" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Toasts</span>
                        </div>
                      </a>
                      <!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../modules/components/tooltips.html" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Tooltips</span>
                        </div>
                      </a>
                      <!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../modules/components/treeview.html" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Treeview</span><span class="badge rounded-pill ms-2 badge-soft-success">New</span>
                        </div>
                      </a>
                      <!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../modules/components/typed-text.html" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Typed text</span>
                        </div>
                      </a>
                      <!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link dropdown-indicator" href="#videos" data-bs-toggle="collapse" aria-expanded="false" aria-controls="components">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Videos</span>
                        </div>
                      </a>
                      <!-- more inner pages-->
                      <ul class="nav collapse false" id="videos">
                        <li class="nav-item"><a class="nav-link" href="../modules/components/videos/embed.html" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Embed</span>
                            </div>
                          </a>
                          <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="../modules/components/videos/plyr.html" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Plyr</span>
                            </div>
                          </a>
                          <!-- more inner pages-->
                        </li>
                      </ul>
                    </li>
                  </ul>
                  <!-- parent pages--><a class="nav-link dropdown-indicator" href="#utilities" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="utilities">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-fire"></span></span><span class="nav-link-text ps-1">Utilities</span>
                    </div>
                  </a>
                  <ul class="nav collapse false" id="utilities">
                    <li class="nav-item"><a class="nav-link" href="../modules/utilities/borders.html" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Borders</span>
                        </div>
                      </a>
                      <!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../modules/utilities/clearfix.html" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Clearfix</span>
                        </div>
                      </a>
                      <!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../modules/utilities/colors.html" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Colors</span>
                        </div>
                      </a>
                      <!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../modules/utilities/colored-links.html" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Colored links</span>
                        </div>
                      </a>
                      <!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../modules/utilities/display.html" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Display</span>
                        </div>
                      </a>
                      <!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../modules/utilities/flex.html" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Flex</span>
                        </div>
                      </a>
                      <!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../modules/utilities/float.html" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Float</span>
                        </div>
                      </a>
                      <!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../modules/utilities/grid.html" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Grid</span>
                        </div>
                      </a>
                      <!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../modules/utilities/overlayscrollbars.html" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Overlayscrollbars</span>
                        </div>
                      </a>
                      <!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../modules/utilities/position.html" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Position</span>
                        </div>
                      </a>
                      <!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../modules/utilities/spacing.html" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Spacing</span>
                        </div>
                      </a>
                      <!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../modules/utilities/sizing.html" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Sizing</span>
                        </div>
                      </a>
                      <!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../modules/utilities/stretched-link.html" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Stretched link</span>
                        </div>
                      </a>
                      <!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../modules/utilities/text-truncation.html" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Text truncation</span>
                        </div>
                      </a>
                      <!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../modules/utilities/typography.html" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Typography</span>
                        </div>
                      </a>
                      <!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../modules/utilities/vertical-align.html" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Vertical align</span>
                        </div>
                      </a>
                      <!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../modules/utilities/visibility.html" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Visibility</span>
                        </div>
                      </a>
                      <!-- more inner pages-->
                    </li>
                  </ul>
                  <!-- parent pages--><a class="nav-link" href="../widgets.html" role="button" aria-expanded="false">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-poll"></span></span><span class="nav-link-text ps-1">Widgets</span>
                    </div>
                  </a>
                  <!-- parent pages--><a class="nav-link dropdown-indicator" href="#multi-level" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="multi-level">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-layer-group"></span></span><span class="nav-link-text ps-1">Multi level</span>
                    </div>
                  </a>
                  <ul class="nav collapse false" id="multi-level">
                    <li class="nav-item"><a class="nav-link dropdown-indicator" href="#level-two" data-bs-toggle="collapse" aria-expanded="false" aria-controls="multi-level">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Level two</span>
                        </div>
                      </a>
                      <!-- more inner pages-->
                      <ul class="nav collapse false" id="level-two">
                        <li class="nav-item"><a class="nav-link" href="../#!.html" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Item 1</span>
                            </div>
                          </a>
                          <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="../#!.html" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Item 2</span>
                            </div>
                          </a>
                          <!-- more inner pages-->
                        </li>
                      </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link dropdown-indicator" href="#level-three" data-bs-toggle="collapse" aria-expanded="false" aria-controls="multi-level">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Level three</span>
                        </div>
                      </a>
                      <!-- more inner pages-->
                      <ul class="nav collapse false" id="level-three">
                        <li class="nav-item"><a class="nav-link" href="../#!.html" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Item 3</span>
                            </div>
                          </a>
                          <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link dropdown-indicator" href="#item-4" data-bs-toggle="collapse" aria-expanded="false" aria-controls="level-three">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Item 4</span>
                            </div>
                          </a>
                          <!-- more inner pages-->
                          <ul class="nav collapse false" id="item-4">
                            <li class="nav-item"><a class="nav-link" href="../#!.html" aria-expanded="false">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Item 5</span>
                                </div>
                              </a>
                              <!-- more inner pages-->
                            </li>
                            <li class="nav-item"><a class="nav-link" href="../#!.html" aria-expanded="false">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Item 6</span>
                                </div>
                              </a>
                              <!-- more inner pages-->
                            </li>
                          </ul>
                        </li>
                      </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link dropdown-indicator" href="#level-four" data-bs-toggle="collapse" aria-expanded="false" aria-controls="multi-level">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Level four</span>
                        </div>
                      </a>
                      <!-- more inner pages-->
                      <ul class="nav collapse false" id="level-four">
                        <li class="nav-item"><a class="nav-link" href="../#!.html" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Item 6</span>
                            </div>
                          </a>
                          <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link dropdown-indicator" href="#item-7" data-bs-toggle="collapse" aria-expanded="false" aria-controls="level-four">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Item 7</span>
                            </div>
                          </a>
                          <!-- more inner pages-->
                          <ul class="nav collapse false" id="item-7">
                            <li class="nav-item"><a class="nav-link" href="../#!.html" aria-expanded="false">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Item 8</span>
                                </div>
                              </a>
                              <!-- more inner pages-->
                            </li>
                            <li class="nav-item"><a class="nav-link dropdown-indicator" href="#item-9" data-bs-toggle="collapse" aria-expanded="false" aria-controls="item-7">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Item 9</span>
                                </div>
                              </a>
                              <!-- more inner pages-->
                              <ul class="nav collapse false" id="item-9">
                                <li class="nav-item"><a class="nav-link" href="../#!.html" aria-expanded="false">
                                    <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Item 10</span>
                                    </div>
                                  </a>
                                  <!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="../#!.html" aria-expanded="false">
                                    <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Item 11</span>
                                    </div>
                                  </a>
                                  <!-- more inner pages-->
                                </li>
                              </ul>
                            </li>
                          </ul>
                        </li>
                      </ul>
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
                  <!-- parent pages--><a class="nav-link" href="../documentation/getting-started.html" role="button" aria-expanded="false">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-rocket"></span></span><span class="nav-link-text ps-1">Getting started</span>
                    </div>
                  </a>
                  <!-- parent pages--><a class="nav-link dropdown-indicator" href="#customization" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="customization">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-wrench"></span></span><span class="nav-link-text ps-1">Customization</span>
                    </div>
                  </a>
                  <ul class="nav collapse false" id="customization">
                    <li class="nav-item"><a class="nav-link" href="../documentation/customization/configuration.html" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Configuration</span>
                        </div>
                      </a>
                      <!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../documentation/customization/styling.html" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Styling</span>
                        </div>
                      </a>
                      <!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../documentation/customization/dark-mode.html" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Dark mode</span><span class="badge rounded-pill ms-2 badge-soft-success">New</span>
                        </div>
                      </a>
                      <!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../documentation/customization/plugin.html" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Plugin</span>
                        </div>
                      </a>
                      <!-- more inner pages-->
                    </li>
                  </ul>
                  <!-- parent pages--><a class="nav-link" href="../documentation/gulp.html" role="button" aria-expanded="false">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fab fa-gulp"></span></span><span class="nav-link-text ps-1">Gulp</span>
                    </div>
                  </a>
                  <!-- parent pages--><a class="nav-link" href="../documentation/design-file.html" role="button" aria-expanded="false">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-palette"></span></span><span class="nav-link-text ps-1">Design file</span>
                    </div>
                  </a>
                  <!-- parent pages--><a class="nav-link" href="../changelog.html" role="button" aria-expanded="false">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-code-branch"></span></span><span class="nav-link-text ps-1">Changelog</span>
                    </div>
                  </a>
                </li>
              </ul>
              <div class="settings mb-3">
                <div class="card alert p-0 shadow-none" role="alert">
                  <div class="btn-close-falcon-container">
                    <div class="btn-close-falcon" aria-label="Close" data-bs-dismiss="alert"></div>
                  </div>
                  <div class="card-body text-center"><img src="../assets/img/icons/spot-illustrations/navbar-vertical.png" alt="" width="80" />
                    <p class="fs--2 mt-2">Loving what you see? <br />Get your copy of <a href="#!">Falcon</a></p>
                    <div class="d-grid"><a class="btn btn-sm btn-purchase" href="https://themes.getbootstrap.com/product/falcon-admin-dashboard-webapp-template/" target="_blank">Purchase</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </nav>
        <div class="content">
          <nav class="navbar navbar-light navbar-glass navbar-top navbar-expand">

            <button class="btn navbar-toggler-humburger-icon navbar-toggler me-1 me-sm-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse" aria-controls="navbarVerticalCollapse" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
            <a class="navbar-brand me-1 me-sm-3" href="../index.html">
              <div class="d-flex align-items-center"><img class="me-2" src="../assets/img/icons/spot-illustrations/falcon.png" alt="" width="40" /><span class="font-sans-serif">falcon</span>
              </div>
            </a>
            <ul class="navbar-nav align-items-center d-none d-lg-block">
              <li class="nav-item">
                <div class="search-box" data-list='{"valueNames":["title"]}'>
                  <form class="position-relative" data-bs-toggle="search" data-bs-display="static">
                    <input class="form-control search-input fuzzy-search" type="search" placeholder="Search..." aria-label="Search" />
                    <span class="fas fa-search search-box-icon"></span>

                  </form>
                  <div class="btn-close-falcon-container position-absolute end-0 top-50 translate-middle shadow-none" data-bs-dismiss="search">
                    <div class="btn-close-falcon" aria-label="Close"></div>
                  </div>
                  <div class="dropdown-menu border font-base start-0 mt-2 py-0 overflow-hidden w-100">
                    <div class="scrollbar list py-3" style="max-height: 24rem;">
                      <h6 class="dropdown-header fw-medium text-uppercase px-card fs--2 pt-0 pb-2">Recently Browsed</h6><a class="dropdown-item fs--1 px-card py-1 hover-primary" href="../app/events/event-detail.html">
                        <div class="d-flex align-items-center">
                          <span class="fas fa-circle me-2 text-300 fs--2"></span>

                          <div class="fw-normal title">Pages <span class="fas fa-chevron-right mx-1 text-500 fs--2" data-fa-transform="shrink-2"></span> Events</div>
                        </div>
                      </a>
                      <a class="dropdown-item fs--1 px-card py-1 hover-primary" href="../app/e-commerce/customers.html">
                        <div class="d-flex align-items-center">
                          <span class="fas fa-circle me-2 text-300 fs--2"></span>

                          <div class="fw-normal title">E-commerce <span class="fas fa-chevron-right mx-1 text-500 fs--2" data-fa-transform="shrink-2"></span> Customers</div>
                        </div>
                      </a>

                      <hr class="bg-200 dark__bg-900" />
                      <h6 class="dropdown-header fw-medium text-uppercase px-card fs--2 pt-0 pb-2">Suggested Filter</h6><a class="dropdown-item px-card py-1 fs-0" href="../app/e-commerce/customers.html">
                        <div class="d-flex align-items-center"><span class="badge fw-medium text-decoration-none me-2 badge-soft-warning">customers:</span>
                          <div class="flex-1 fs--1 title">All customers list</div>
                        </div>
                      </a>
                      <a class="dropdown-item px-card py-1 fs-0" href="../app/events/event-detail.html">
                        <div class="d-flex align-items-center"><span class="badge fw-medium text-decoration-none me-2 badge-soft-success">events:</span>
                          <div class="flex-1 fs--1 title">Latest events in current month</div>
                        </div>
                      </a>
                      <a class="dropdown-item px-card py-1 fs-0" href="../app/e-commerce/product/product-grid.html">
                        <div class="d-flex align-items-center"><span class="badge fw-medium text-decoration-none me-2 badge-soft-info">products:</span>
                          <div class="flex-1 fs--1 title">Most popular products</div>
                        </div>
                      </a>

                      <hr class="bg-200 dark__bg-900" />
                      <h6 class="dropdown-header fw-medium text-uppercase px-card fs--2 pt-0 pb-2">Files</h6><a class="dropdown-item px-card py-2" href="#!">
                        <div class="d-flex align-items-center">
                          <div class="file-thumbnail me-2"><img class="border h-100 w-100 fit-cover rounded-3" src="../assets/img/products/3-thumb.png" alt="" /></div>
                          <div class="flex-1">
                            <h6 class="mb-0 title">iPhone</h6>
                            <p class="fs--2 mb-0 d-flex"><span class="fw-semi-bold">Antony</span><span class="fw-medium text-600 ms-2">27 Sep at 10:30 AM</span></p>
                          </div>
                        </div>
                      </a>
                      <a class="dropdown-item px-card py-2" href="#!">
                        <div class="d-flex align-items-center">
                          <div class="file-thumbnail me-2"><img class="img-fluid" src="../assets/img/icons/zip.png" alt="" /></div>
                          <div class="flex-1">
                            <h6 class="mb-0 title">Falcon v1.8.2</h6>
                            <p class="fs--2 mb-0 d-flex"><span class="fw-semi-bold">John</span><span class="fw-medium text-600 ms-2">30 Sep at 12:30 PM</span></p>
                          </div>
                        </div>
                      </a>

                      <hr class="bg-200 dark__bg-900" />
                      <h6 class="dropdown-header fw-medium text-uppercase px-card fs--2 pt-0 pb-2">Members</h6><a class="dropdown-item px-card py-2" href="../pages/user/profile.html">
                        <div class="d-flex align-items-center">
                          <div class="avatar avatar-l status-online me-2">
                            <img class="rounded-circle" src="../assets/img/team/1.jpg" alt="" />

                          </div>
                          <div class="flex-1">
                            <h6 class="mb-0 title">Anna Karinina</h6>
                            <p class="fs--2 mb-0 d-flex">Technext Limited</p>
                          </div>
                        </div>
                      </a>
                      <a class="dropdown-item px-card py-2" href="../pages/user/profile.html">
                        <div class="d-flex align-items-center">
                          <div class="avatar avatar-l me-2">
                            <img class="rounded-circle" src="../assets/img/team/2.jpg" alt="" />

                          </div>
                          <div class="flex-1">
                            <h6 class="mb-0 title">Antony Hopkins</h6>
                            <p class="fs--2 mb-0 d-flex">Brain Trust</p>
                          </div>
                        </div>
                      </a>
                      <a class="dropdown-item px-card py-2" href="../pages/user/profile.html">
                        <div class="d-flex align-items-center">
                          <div class="avatar avatar-l me-2">
                            <img class="rounded-circle" src="../assets/img/team/3.jpg" alt="" />

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
                  <input class="form-check-input ms-0 theme-control-toggle-input" id="themeControlToggle" type="checkbox" data-theme-control="theme" value="dark" />
                  <label class="mb-0 theme-control-toggle-label theme-control-toggle-light" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Switch to light theme"><span class="fas fa-sun fs-0"></span></label>
                  <label class="mb-0 theme-control-toggle-label theme-control-toggle-dark" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Switch to dark theme"><span class="fas fa-moon fs-0"></span></label>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link px-0 notification-indicator notification-indicator-warning notification-indicator-fill fa-icon-wait" href="../app/e-commerce/shopping-cart.html"><span class="fas fa-shopping-cart" data-fa-transform="shrink-7" style="font-size: 33px;"></span><span class="notification-indicator-number">1</span></a>

              </li>
              <li class="nav-item dropdown">
                <a class="nav-link notification-indicator notification-indicator-primary px-0 fa-icon-wait" id="navbarDropdownNotification" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-bell" data-fa-transform="shrink-6" style="font-size: 33px;"></span></a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-card dropdown-menu-notification" aria-labelledby="navbarDropdownNotification">
                  <div class="card card-notification shadow-none">
                    <div class="card-header">
                      <div class="row justify-content-between align-items-center">
                        <div class="col-auto">
                          <h6 class="card-header-title mb-0">Notifications</h6>
                        </div>
                        <div class="col-auto ps-0 ps-sm-3"><a class="card-link fw-normal" href="#">Mark all as read</a></div>
                      </div>
                    </div>
                    <div class="scrollbar-overlay" style="max-height:19rem">
                      <div class="list-group list-group-flush fw-normal fs--1">
                        <div class="list-group-title border-bottom">NEW</div>
                        <div class="list-group-item">
                          <a class="notification notification-flush notification-unread" href="#!">
                            <div class="notification-avatar">
                              <div class="avatar avatar-2xl me-3">
                                <img class="rounded-circle" src="../assets/img/team/1-thumb.png" alt="" />

                              </div>
                            </div>
                            <div class="notification-body">
                              <p class="mb-1"><strong>Emma Watson</strong> replied to your comment : "Hello world 😍"</p>
                              <span class="notification-time"><span class="me-2" role="img" aria-label="Emoji">💬</span>Just now</span>

                            </div>
                          </a>

                        </div>
                        <div class="list-group-item">
                          <a class="notification notification-flush notification-unread" href="#!">
                            <div class="notification-avatar">
                              <div class="avatar avatar-2xl me-3">
                                <div class="avatar-name rounded-circle"><span>AB</span></div>
                              </div>
                            </div>
                            <div class="notification-body">
                              <p class="mb-1"><strong>Albert Brooks</strong> reacted to <strong>Mia Khalifa's</strong> status</p>
                              <span class="notification-time"><span class="me-2 fab fa-gratipay text-danger"></span>9hr</span>

                            </div>
                          </a>

                        </div>
                        <div class="list-group-title border-bottom">EARLIER</div>
                        <div class="list-group-item">
                          <a class="notification notification-flush" href="#!">
                            <div class="notification-avatar">
                              <div class="avatar avatar-2xl me-3">
                                <img class="rounded-circle" src="../assets/img/icons/weather-sm.jpg" alt="" />

                              </div>
                            </div>
                            <div class="notification-body">
                              <p class="mb-1">The forecast today shows a low of 20&#8451; in California. See today's weather.</p>
                              <span class="notification-time"><span class="me-2" role="img" aria-label="Emoji">🌤️</span>1d</span>

                            </div>
                          </a>

                        </div>
                        <div class="list-group-item">
                          <a class="border-bottom-0 notification-unread  notification notification-flush" href="#!">
                            <div class="notification-avatar">
                              <div class="avatar avatar-xl me-3">
                                <img class="rounded-circle" src="../assets/img/logos/oxford.png" alt="" />

                              </div>
                            </div>
                            <div class="notification-body">
                              <p class="mb-1"><strong>University of Oxford</strong> created an event : "Causal Inference Hilary 2019"</p>
                              <span class="notification-time"><span class="me-2" role="img" aria-label="Emoji">✌️</span>1w</span>

                            </div>
                          </a>

                        </div>
                        <div class="list-group-item">
                          <a class="border-bottom-0 notification notification-flush" href="#!">
                            <div class="notification-avatar">
                              <div class="avatar avatar-xl me-3">
                                <img class="rounded-circle" src="../assets/img/team/10.jpg" alt="" />

                              </div>
                            </div>
                            <div class="notification-body">
                              <p class="mb-1"><strong>James Cameron</strong> invited to join the group: United Nations International Children's Fund</p>
                              <span class="notification-time"><span class="me-2" role="img" aria-label="Emoji">🙋‍</span>2d</span>

                            </div>
                          </a>

                        </div>
                      </div>
                    </div>
                    <div class="card-footer text-center border-top"><a class="card-link d-block" href="../app/social/notifications.html">View all</a></div>
                  </div>
                </div>

              </li>
              <li class="nav-item dropdown"><a class="nav-link pe-0" id="navbarDropdownUser" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <div class="avatar avatar-xl">
                    <img class="rounded-circle" src="../assets/img/team/3-thumb.png" alt="" />

                  </div>
                </a>
                <div class="dropdown-menu dropdown-menu-end py-0" aria-labelledby="navbarDropdownUser">
                  <div class="bg-white dark__bg-1000 rounded-2 py-2">
                    <a class="dropdown-item fw-bold text-warning" href="#!"><span class="fas fa-crown me-1"></span><span>Go Pro</span></a>

                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#!">Set status</a>
                    <a class="dropdown-item" href="../pages/user/profile.html">Profile &amp; account</a>
                    <a class="dropdown-item" href="#!">Feedback</a>

                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="../pages/user/settings.html">Settings</a>
                    <a class="dropdown-item" href="../pages/authentication/card/logout.html">Logout</a>
                  </div>
                </div>
              </li>
            </ul>
          </nav>
          <div class="row mb-3">
            <div class="col">
              <div class="card bg-100 shadow-none border">
                <div class="row gx-0 flex-between-center">
                  <div class="col-sm-auto d-flex align-items-center"><img class="ms-n2" src="../assets/img/illustrations/crm-bar-chart.png" alt="" width="90" />
                    <div>
                      <h6 class="text-primary fs--1 mb-0">Welcome to </h6>
                      <h4 class="text-primary fw-bold mb-0">Falcon <span class="text-info fw-medium">CRM</span></h4>
                    </div><img class="ms-n4 d-md-none d-lg-block" src="../assets/img/illustrations/crm-line-chart.png" alt="" width="150" />
                  </div>
                  <div class="col-md-auto p-3">
                    <form class="row align-items-center g-3">
                      <div class="col-auto">
                        <h6 class="text-700 mb-0">Showing Data For: </h6>
                      </div>
                      <div class="col-md-auto position-relative">
                        <input class="form-control form-control-sm datetimepicker ps-4" id="CRMDateRange" type="text" data-options="{&quot;mode&quot;:&quot;range&quot;,&quot;dateFormat&quot;:&quot;M d&quot;,&quot;disableMobile&quot;:true , &quot;defaultDate&quot;: [&quot;Sep 12&quot;, &quot;Sep 19&quot;] }" /><span class="fas fa-calendar-alt text-primary position-absolute top-50 translate-middle-y ms-2"> </span>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row mb-3 g-3">
            <div class="col-lg-12 col-xxl-9">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-lg-4 border-lg-end border-bottom border-lg-0 pb-3 pb-lg-0">
                      <div class="d-flex flex-between-center mb-3">
                        <div class="d-flex align-items-center">
                          <div class="icon-item icon-item-sm bg-soft-primary shadow-none me-2 bg-soft-primary"><span class="fs--2 fas fa-phone text-primary"></span></div>
                          <h6 class="mb-0">New Contact</h6>
                        </div>
                        <div class="dropdown font-sans-serif btn-reveal-trigger">
                          <button class="btn btn-link text-600 btn-sm dropdown-toggle dropdown-caret-none btn-reveal" type="button" id="dropdown-new-contact" data-bs-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--2"></span></button>
                          <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="dropdown-new-contact"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                          </div>
                        </div>
                      </div>
                      <div class="d-flex">
                        <div class="d-flex">
                          <p class="font-sans-serif lh-1 mb-1 fs-4 pe-2">15%</p>
                          <div class="d-flex flex-column"> <span class="me-1 text-success fas fa-caret-up text-primary"></span>
                            <p class="fs--2 mb-0 text-nowrap">2500 vs 2683 </p>
                          </div>
                        </div>
                        <div class="echart-crm-statistics w-100 ms-2" data-echart-responsive="true" data-echarts='{"series":[{"type":"line","data":[220,230,150,175,200,170,70,160],"color":"#2c7be5","areaStyle":{"color":{"colorStops":[{"offset":0,"color":"#2c7be53A"},{"offset":1,"color":"#2c7be50A"}]}}}],"grid":{"bottom":"-10px"}}'></div>
                      </div>
                    </div>
                    <div class="col-lg-4 border-lg-end border-bottom border-lg-0 py-3 py-lg-0">
                      <div class="d-flex flex-between-center mb-3">
                        <div class="d-flex align-items-center">
                          <div class="icon-item icon-item-sm bg-soft-primary shadow-none me-2 bg-soft-info"><span class="fs--2 fas fa-user text-info"></span></div>
                          <h6 class="mb-0">New Users</h6>
                        </div>
                        <div class="dropdown font-sans-serif btn-reveal-trigger">
                          <button class="btn btn-link text-600 btn-sm dropdown-toggle dropdown-caret-none btn-reveal" type="button" id="dropdown-new-users" data-bs-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--2"></span></button>
                          <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="dropdown-new-users"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                          </div>
                        </div>
                      </div>
                      <div class="d-flex">
                        <div class="d-flex">
                          <p class="font-sans-serif lh-1 mb-1 fs-4 pe-2">13%</p>
                          <div class="d-flex flex-column"> <span class="me-1 text-success fas fa-caret-up text-success"></span>
                            <p class="fs--2 mb-0 text-nowrap">1635 vs 863 </p>
                          </div>
                        </div>
                        <div class="echart-crm-statistics w-100 ms-2" data-echart-responsive="true" data-echarts='{"series":[{"type":"line","data":[90,160,150,120,230,155,220,240],"color":"#27bcfd","areaStyle":{"color":{"colorStops":[{"offset":0,"color":"#27bcfd3A"},{"offset":1,"color":"#27bcfd0A"}]}}}],"grid":{"bottom":"-10px"}}'></div>
                      </div>
                    </div>
                    <div class="col-lg-4 pt-3 pt-lg-0">
                      <div class="d-flex flex-between-center mb-3">
                        <div class="d-flex align-items-center">
                          <div class="icon-item icon-item-sm bg-soft-primary shadow-none me-2 bg-soft-success"><span class="fs--2 fas fa-bolt text-success"></span></div>
                          <h6 class="mb-0">New Leads</h6>
                        </div>
                        <div class="dropdown font-sans-serif btn-reveal-trigger">
                          <button class="btn btn-link text-600 btn-sm dropdown-toggle dropdown-caret-none btn-reveal" type="button" id="dropdown-new-leads" data-bs-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--2"></span></button>
                          <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="dropdown-new-leads"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                          </div>
                        </div>
                      </div>
                      <div class="d-flex">
                        <div class="d-flex">
                          <p class="font-sans-serif lh-1 mb-1 fs-4 pe-2">16%</p>
                          <div class="d-flex flex-column"> <span class="me-1 text-success fas fa-caret-down text-danger"></span>
                            <p class="fs--2 mb-0 text-nowrap">1423 vs 256 </p>
                          </div>
                        </div>
                        <div class="echart-crm-statistics w-100 ms-2" data-echart-responsive="true" data-echarts='{"series":[{"type":"line","data":[200,150,175,130,150,115,130,100],"color":"#00d27a","areaStyle":{"color":{"colorStops":[{"offset":0,"color":"#00d27a3A"},{"offset":1,"color":"#00d27a0A"}]}}}],"grid":{"bottom":"-10px"}}'></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header d-flex flex-between-center ps-0 py-0 border-bottom">
                  <ul class="nav nav-tabs border-0 flex-nowrap tab-active-caret" id="crm-revenue-chart-tab" role="tablist" data-tab-has-echarts="data-tab-has-echarts">
                    <li class="nav-item" role="presentation"><a class="nav-link py-3 mb-0 active" id="crm-revenue-tab" data-bs-toggle="tab" href="#crm-revenue" role="tab" aria-controls="crm-revenue" aria-selected="true">Revenue</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link py-3 mb-0" id="crm-users-tab" data-bs-toggle="tab" href="#crm-users" role="tab" aria-controls="crm-users" aria-selected="false">Users</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link py-3 mb-0" id="crm-deals-tab" data-bs-toggle="tab" href="#crm-deals" role="tab" aria-controls="crm-deals" aria-selected="false">Deals</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link py-3 mb-0" id="crm-profit-tab" data-bs-toggle="tab" href="#crm-profit" role="tab" aria-controls="crm-profit" aria-selected="false">Profit</a></li>
                  </ul>
                  <div class="dropdown font-sans-serif btn-reveal-trigger">
                    <button class="btn btn-link text-600 btn-sm dropdown-toggle dropdown-caret-none btn-reveal" type="button" id="dropdown-session-by-country" data-bs-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--2"></span></button>
                    <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="dropdown-session-by-country"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                      <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <div class="row g-1">
                    <div class="col-xxl-3">
                      <div class="row g-0 my-2">
                        <div class="col-md-6 col-xxl-12">
                          <div class="border-xxl-bottom border-xxl-200 mb-2">
                            <h2 class="text-primary">$37,950</h2>
                            <p class="fs--2 text-500 fw-semi-bold mb-0"><span class="fas fa-circle text-primary me-2"></span>Closed Amount</p>
                            <p class="fs--2 text-500 fw-semi-bold"><span class="fas fa-circle text-warning me-2"></span>Revenue Goal</p>
                          </div>
                          <div class="form-check form-check-inline me-2">
                            <input class="form-check-input" id="crmInbound" type="radio" name="bound" value="inbound" Checked="Checked" />
                            <label class="form-check-label" for="crmInbound">Inbound</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" id="outbound" type="radio" name="bound" value="outbound" />
                            <label class="form-check-label" for="outbound">Outbound</label>
                          </div>
                        </div>
                        <div class="col-md-6 col-xxl-12 py-2">
                          <div class="row mx-0">
                            <div class="col-6 border-end border-bottom py-3">
                              <h5 class="fw-normal text-600">$4.2k</h5>
                              <h6 class="text-500 mb-0">Email</h6>
                            </div>
                            <div class="col-6 border-bottom py-3">
                              <h5 class="fw-normal text-600">$5.6k</h5>
                              <h6 class="text-500 mb-0">Social</h6>
                            </div>
                            <div class="col-6 border-end py-3">
                              <h5 class="fw-normal text-600">$6.7k</h5>
                              <h6 class="text-500 mb-0">Call</h6>
                            </div>
                            <div class="col-6 py-3">
                              <h5 class="fw-normal text-600">$2.3k</h5>
                              <h6 class="text-500 mb-0">Other</h6>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-xxl-9">
                      <div class="tab-content">
                        <!-- Find the JS file for the following chart at: src/js/charts/echarts/crm-revenue.js-->
                        <!-- If you are not using gulp based workflow, you can find the transpiled code at: public/assets/js/theme.js-->
                        <div class="tab-pane active" id="crm-revenue" role="tabpanel" aria-labelledby="crm-revenue-tab">
                          <div class="echart-crm-revenue" data-echart-responsive="true" data-echart-tab="data-echart-tab" style="height:320px;"></div>
                        </div>
                        <div class="tab-pane" id="crm-users" role="tabpanel" aria-labelledby="crm-users-tab">
                          <div class="echart-crm-users" data-echart-responsive="true" data-echart-tab="data-echart-tab" style="height:320px;"></div>
                        </div>
                        <div class="tab-pane" id="crm-deals" role="tabpanel" aria-labelledby="crm-deals-tab">
                          <div class="echart-crm-deals" data-echart-responsive="true" data-echart-tab="data-echart-tab" style="height:320px;"></div>
                        </div>
                        <div class="tab-pane" id="crm-profit" role="tabpanel" aria-labelledby="crm-profit-tab">
                          <div class="echart-crm-profit" data-echart-responsive="true" data-echart-tab="data-echart-tab" style="height:320px;"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xxl-3">
              <div class="card">
                <div class="card-header d-flex flex-between-center py-2 border-bottom">
                  <h6 class="mb-0">Most Leads</h6>
                  <div class="dropdown font-sans-serif btn-reveal-trigger">
                    <button class="btn btn-link text-600 btn-sm dropdown-toggle dropdown-caret-none btn-reveal" type="button" id="dropdown-most-leads" data-bs-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--2"></span></button>
                    <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="dropdown-most-leads"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                      <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                    </div>
                  </div>
                </div>
                <div class="card-body d-flex flex-column justify-content-between">
                  <div class="row align-items-center">
                    <div class="col-md-5 col-xxl-12 mb-xxl-1">
                      <div class="position-relative">
                        <!-- Find the JS file for the following chart at: src/js/charts/echarts/most-leads.js-->
                        <!-- If you are not using gulp based workflow, you can find the transpiled code at: public/assets/js/theme.js-->
                        <div class="echart-most-leads my-2" data-echart-responsive="true"></div>
                        <div class="position-absolute top-50 start-50 translate-middle text-center">
                          <p class="fs--1 mb-0 text-400 font-sans-serif fw-medium">Total</p>
                          <p class="fs-3 mb-0 font-sans-serif fw-medium mt-n2">15.6k</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-xxl-12 col-md-7">
                      <hr class="mx-ncard mb-0 d-md-none d-xxl-block" />
                      <div class="d-flex flex-between-center border-bottom py-3 pt-md-0 pt-xxl-3">
                        <div class="d-flex"><img class="me-2" src="../assets/img/crm/email.svg " width="16" height="16" alt="..." />
                          <h6 class="text-700 mb-0">Email </h6>
                        </div>
                        <p class="fs--1 text-500 mb-0 fw-semi-bold">5200 vs 1052</p>
                        <h6 class="text-700 mb-0">12%</h6>
                      </div>
                      <div class="d-flex flex-between-center border-bottom py-3">
                        <div class="d-flex"><img class="me-2" src="../assets/img/crm/social.svg " width="16" height="16" alt="..." />
                          <h6 class="text-700 mb-0">Social </h6>
                        </div>
                        <p class="fs--1 text-500 mb-0 fw-semi-bold">5623 vs 4929</p>
                        <h6 class="text-700 mb-0">25%</h6>
                      </div>
                      <div class="d-flex flex-between-center border-bottom py-3">
                        <div class="d-flex"><img class="me-2" src="../assets/img/crm/call.svg " width="16" height="16" alt="..." />
                          <h6 class="text-700 mb-0">Call </h6>
                        </div>
                        <p class="fs--1 text-500 mb-0 fw-semi-bold">2535 vs 1486</p>
                        <h6 class="text-700 mb-0">63%</h6>
                      </div>
                      <div class="d-flex flex-between-center border-bottom py-3 border-bottom-0 pb-0">
                        <div class="d-flex"><img class="me-2" src="../assets/img/crm/other.svg " width="16" height="16" alt="..." />
                          <h6 class="text-700 mb-0">Other </h6>
                        </div>
                        <p class="fs--1 text-500 mb-0 fw-semi-bold">256 vs 189</p>
                        <h6 class="text-700 mb-0">53%</h6>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-footer bg-light p-0"><a class="btn btn-sm btn-link d-block py-2" href="#!">Primary<span class="fas fa-chevron-right ms-1 fs--2"></span></a></div>
              </div>
            </div>
            <div class="col-md-12 col-xxl-8">
              <div class="card h-100">
                <div class="card-header d-flex flex-between-center border-bottom border-200 py-2">
                  <h6 class="mb-0">Deal Forecast</h6>
                  <div class="dropdown font-sans-serif btn-reveal-trigger">
                    <button class="btn btn-link text-600 btn-sm dropdown-toggle dropdown-caret-none btn-reveal" type="button" id="crm-deal-forecast-bar" data-bs-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--2"></span></button>
                    <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="crm-deal-forecast-bar"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                      <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                    </div>
                  </div>
                </div>
                <div class="card-body d-flex align-items-center">
                  <div class="w-100">
                    <h3 class="text-700 mb-6">$90,439</h3>
                    <div class="progress overflow-visible rounded-3 font-sans-serif fw-medium fs--1 mt-xxl-auto" style="height: 20px;">
                      <div class="progress-bar overflow-visible bg-progress-gradient border-end border-white border-2 rounded-end rounded-pill text-start" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"><span class="text-700 mt-n6">$47.8k</span></div>
                      <div class="progress-bar overflow-visible bg-soft-primary border-end border-white border-2 text-start" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"><span class="text-700 mt-n6">$20.2k</span></div>
                      <div class="progress-bar overflow-visible bg-soft-info border-end border-white border-2 text-start" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"><span class="text-700 mt-n6">$18k</span></div>
                      <div class="progress-bar overflow-visible bg-info rounded-start rounded-pill text-start" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="15" aria-valuemax="100"><span class="text-700 mt-n6">$16k</span></div>
                    </div>
                    <div class="row fs--1 fw-semi-bold text-500 mt-3 g-0 mt-3 mt-xxl-4">
                      <div class="col-auto d-flex align-items-center pe-3"><span class="dot bg-primary"></span><span>Closed won</span><span class="d-none d-md-inline-block d-lg-none d-xxl-inline-block">(100%)</span></div>
                      <div class="col-auto d-flex align-items-center pe-3"><span class="dot bg-soft-primary"></span><span>Contact sent</span><span class="d-none d-md-inline-block d-lg-none d-xxl-inline-block">(5%)</span></div>
                      <div class="col-auto d-flex align-items-center pe-3"><span class="dot bg-soft-info"></span><span>Pending</span><span class="d-none d-md-inline-block d-lg-none d-xxl-inline-block">(5%)</span></div>
                      <div class="col-auto d-flex align-items-center"><span class="dot bg-info"></span><span>Qualified</span><span class="d-none d-md-inline-block d-lg-none d-xxl-inline-block">(20%)</span></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xxl-4">
              <div class="card h-100">
                <div class="card-header d-flex flex-between-center border-bottom py-2">
                  <h6 class="mb-0">Deal Storage Funnel</h6><a class="btn btn-link btn-sm px-0 shadow-none" href="#!">View Details<span class="fas fa-chevron-right ms-1 fs--2"></span></a>
                </div>
                <div class="card-body">
                  <div class="row rtl-row-reverse g-1">
                    <div class="col">
                      <div class="d-flex flex-between-center rtl-row-reverse">
                        <h6 class="fs--2 text-500">Deal Stage</h6>
                        <h6 class="fs--2 text-500">Count of Deals</h6>
                      </div>
                    </div>
                    <div class="col-auto">
                      <h6 class="fs--2 text-500">Conversion </h6>
                    </div>
                  </div>
                  <!-- Find the JS file for the following chart at: src/js/charts/echarts/deal-storage-funnel.js-->
                  <!-- If you are not using gulp based workflow, you can find the transpiled code at: public/assets/js/theme.js-->
                  <div class="echart-deal-storage-funnel" data-echart-responsive="true" data-options='{"data":[7,10,13,19,19],"dataAxis1":["Processing","Contact won","Contact Sent","Qualified to Buy","Created"],"dataAxis2":["50%","70%","76%","68%","99%"]}'></div>
                </div>
              </div>
            </div>
            <div class="col-xxl-6">
              <div class="card h-100">
                <div class="card-header d-flex flex-between-center py-2">
                  <h6 class="mb-0">Deal Closed vs Goal</h6>
                  <div class="dropdown font-sans-serif btn-reveal-trigger">
                    <button class="btn btn-link text-600 btn-sm dropdown-toggle dropdown-caret-none btn-reveal" type="button" id="crm-closed-vs-goal" data-bs-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--2"></span></button>
                    <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="crm-closed-vs-goal"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                      <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <!-- Find the JS file for the following chart at: src/js/charts/echarts/closed-vs-goal.js-->
                  <!-- If you are not using gulp based workflow, you can find the transpiled code at: public/assets/js/theme.js-->
                  <div class="echart-closed-vs-goal" data-echart-responsive="true"></div>
                </div>
              </div>
            </div>
            <div class="col-xxl-6">
              <div class="card overflow-hidden">
                <div class="card-header">
                  <h6 class="mb-0">Deal Forecast by Owner</h6>
                </div>
                <div class="card-body p-0">
                  <div class="table-responsive scrollbar">
                    <table class="table mb-0 fs--1 border-200 table-borderless">
                      <thead class="bg-light">
                        <tr class="text-800 bg-200">
                          <th class="text-nowrap">Owner</th>
                          <th class="text-center text-nowrap">Qualified to buy</th>
                          <th class="text-center text-nowrap">Appointment </th>
                          <th class="text-end text-nowrap">Contact sent</th>
                          <th class="pe-card text-end text-nowrap">Closed won</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr class="border-bottom border-200">
                          <td class="align-middle font-sans-serif fw-medium text-nowrap"><a href="../app/e-commerce/customer-details.html">John oliver</a></td>
                          <td class="align-middle text-center">1000</td>
                          <td class="align-middle text-center">$2600</td>
                          <td class="align-middle text-center">$3523</td>
                          <td class="align-middle text-end">$1311</td>
                        </tr>
                        <tr class="border-bottom border-200">
                          <td class="align-middle font-sans-serif fw-medium text-nowrap"><a href="../app/e-commerce/customer-details.html">Sean Paul</a></td>
                          <td class="align-middle text-center">1500</td>
                          <td class="align-middle text-center">$1600</td>
                          <td class="align-middle text-center">$3523</td>
                          <td class="align-middle text-end">$2311</td>
                        </tr>
                        <tr class="border-bottom border-200">
                          <td class="align-middle font-sans-serif fw-medium text-nowrap"><a href="../app/e-commerce/customer-details.html">Brad Shaw</a></td>
                          <td class="align-middle text-center">1400</td>
                          <td class="align-middle text-center">$2200</td>
                          <td class="align-middle text-center">$3523</td>
                          <td class="align-middle text-end">$3311</td>
                        </tr>
                        <tr>
                          <td class="align-middle font-sans-serif fw-medium text-nowrap"><a href="../app/e-commerce/customer-details.html">Max Payne</a></td>
                          <td class="align-middle text-center">6600</td>
                          <td class="align-middle text-center">$2220</td>
                          <td class="align-middle text-center">$3523</td>
                          <td class="align-middle text-end">$1511</td>
                        </tr>
                      </tbody>
                      <tfoot class="bg-light">
                        <tr class="text-700 fw-bold">
                          <td>Total</td>
                          <td class="text-center">$6359</td>
                          <td class="text-center"> $8151</td>
                          <td class="text-center"> $9174</td>
                          <td class="pe-card text-end"> $12587</td>
                        </tr>
                      </tfoot>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row mb-3 g-3">
            <div class="col-lg-7">
              <div class="card" id="CrmLocationBySessionTable" data-list='{"valueNames":["country","sessions","users"],"page":3,"pagination":true}'>
                <div class="card-header d-flex flex-between-center bg-light py-2">
                  <h6 class="mb-0">Location By Session</h6>
                  <div class="d-flex">
                    <div class="btn-reveal-trigger">
                      <button class="btn btn-link btn-reveal btn-sm location-by-session-map-reset" type="button"><span class="fas fa-sync-alt fs--1"></span></button>
                    </div>
                    <div class="dropdown font-sans-serif btn-reveal-trigger">
                      <button class="btn btn-link text-600 btn-sm dropdown-toggle dropdown-caret-none btn-reveal" type="button" id="crm-location-by-session" data-bs-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--2"></span></button>
                      <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="crm-location-by-session"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                        <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-body pb-0 position-relative">
                  <!-- Find the JS file for the following chart at: src/js/charts/echarts/location-by-session-crm.js-->
                  <!-- If you are not using gulp based workflow, you can find the transpiled code at: public/assets/js/theme.js-->
                  <div class="echart-location-by-session-map" data-echart-responsive="true" style="height:302px;"></div>
                  <div class="position-absolute top-0 border mt-3 border-200 rounded-3 bg-light">
                    <button class="btn btn-link btn-sm bg-100 rounded-bottom-0 px-2 location-by-session-map-zoom text-700" type="button"><span class="fas fa-plus fs--1"></span></button>
                    <hr class="bg-200 m-0" />
                    <button class="btn btn-link btn-sm bg-100 rounded-top-0 px-2 location-by-session-map-zoomOut text-700" type="button"><span class="fas fa-minus fs--1"></span></button>
                  </div>
                  <div class="table-responsive scrollbar mx-ncard mt-3">
                    <table class="table fs--1 mb-0">
                      <thead class="bg-200 text-800">
                        <tr>
                          <th class="sort" data-sort="country">Country</th>
                          <th class="sort" data-sort="sessions">Sessions</th>
                          <th class="sort" data-sort="users">Users</th>
                          <th class="sort text-end" style="width: 9.625rem;">Percentage</th>
                        </tr>
                      </thead>
                      <tbody class="list" id="table-crm-location-session">
                        <tr>
                          <td class="align-middle py-3"><a href="#!">
                              <div class="d-flex align-items-center"><img src="../assets/img/crm/india.png" alt="" />
                                <p class="mb-0 ps-3 country text-700">India</p>
                              </div>
                            </a></td>
                          <td class="align-middle fw-semi-bold sessions">268,663</td>
                          <td class="users align-middle">325,633</td>
                          <td class="align-middle pe-card">
                            <div class="d-flex align-items-center justify-content-end">
                              <p class="mb-0 me-2">89%</p>
                              <div class="progress rounded-3 bg-200" style="height: 0.3125rem;width:3.8rem">
                                <div class="progress-bar bg-primary rounded-pill" role="progressbar" style="width: 89%;" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td class="align-middle py-3"><a href="#!">
                              <div class="d-flex align-items-center"><img src="../assets/img/crm/uae.png" alt="" />
                                <p class="mb-0 ps-3 country text-700">UAE</p>
                              </div>
                            </a></td>
                          <td class="align-middle fw-semi-bold sessions">250,663</td>
                          <td class="users align-middle">525,633</td>
                          <td class="align-middle pe-card">
                            <div class="d-flex align-items-center justify-content-end">
                              <p class="mb-0 me-2">62%</p>
                              <div class="progress rounded-3 bg-200" style="height: 0.3125rem;width:3.8rem">
                                <div class="progress-bar bg-primary rounded-pill" role="progressbar" style="width: 62%;" aria-valuenow="62" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td class="align-middle py-3"><a href="#!">
                              <div class="d-flex align-items-center"><img src="../assets/img/crm/nepal.png" alt="" />
                                <p class="mb-0 ps-3 country text-700">Nepal</p>
                              </div>
                            </a></td>
                          <td class="align-middle fw-semi-bold sessions">268,663</td>
                          <td class="users align-middle">325,633</td>
                          <td class="align-middle pe-card">
                            <div class="d-flex align-items-center justify-content-end">
                              <p class="mb-0 me-2">50%</p>
                              <div class="progress rounded-3 bg-200" style="height: 0.3125rem;width:3.8rem">
                                <div class="progress-bar bg-primary rounded-pill" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </div>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="card-footer text-end p-0">
                  <div class="pagination d-none"></div>
                  <p class="mb-0 fs--1 px-card"><span class="d-none d-sm-inline-block me-2" data-list-info="data-list-info"> </span><span class="d-none d-sm-inline-block me-2">&mdash;  </span><a class="btn btn-link btn-sm py-2 px-0" href="#!">View all<span class="fas fa-angle-right ms-1"></span></a></p>
                </div>
              </div>
            </div>
            <div class="col-lg-5">
              <div class="row g-3">
                <div class="col-12">
                  <div class="card">
                    <div class="card-header">
                      <h6 class="mb-0">Average Call Duration<span class="ms-1 text-400" data-bs-toggle="tooltip" data-bs-placement="top" title="Average call duration based of last 50 calls"><span class="far fa-question-circle" data-fa-transform="shrink-1"></span></span></h6>
                    </div>
                    <div class="card-body">
                      <div class="row g-3">
                        <div class="col">
                          <h4 class="text-primary fw-normal">10m:8s</h4>
                          <p class="fs--2 fw-semi-bold text-500 mb-0">Based on 50 calls</p>
                        </div>
                        <div class="col-auto pe-0 text-end">
                          <div class="echart-call-duration" data-echart-responsive="true" data-echarts='{"series":[{"type":"line","data":[8,15,12,14,18,12,12,25,13,12,10,13,35],"color":"#f5803e","areaStyle":{"color":{"colorStops":[{"offset":0,"color":"#f5803e3A"},{"offset":1,"color":"#f5803e0A"}]}}}],"grid":{"bottom":"-10px","right":"0px"}}'></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="card h-100">
                    <div class="card-header d-flex flex-between-center border-bottom border-200 py-2">
                      <h6 class="mb-0">Lead Conversion</h6>
                      <div class="dropdown font-sans-serif btn-reveal-trigger">
                        <button class="btn btn-link text-600 btn-sm dropdown-toggle dropdown-caret-none btn-reveal" type="button" id="crm-lead-conversion" data-bs-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--2"></span></button>
                        <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="crm-lead-conversion"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                          <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                        </div>
                      </div>
                    </div>
                    <div class="card-body pt-0">
                      <div class="d-flex bg-100 py-2 mb-3 justify-content-center mx-ncard fs--1 border-bottom border-200">
                        <p class="text-600 mb-0 border-end border-200 px-card d-flex align-items-center">Current Rete: <span class="fs-sm-1 font-sans-serif ms-2 text-700"> 4.5%</span><span class="fas fa-caret-up ms-2 ms-xxl-3 fs--1 text-success"></span></p>
                        <p class="text-600 mb-0 px-card">Target Rete:<span class="fs-sm-1 font-sans-serif ms-2 text-700"> 6%</span></p>
                      </div>
                      <!-- Find the JS file for the following chart at: src/js/charts/echarts/lead-conversion.js-->
                      <!-- If you are not using gulp based workflow, you can find the transpiled code at: public/assets/js/theme.js-->
                      <div class="echart-lead-conversion" data-echart-responsive="true"></div>
                    </div>
                    <div class="card-footer bg-light p-0"><a class="btn btn-sm btn-link d-block py-2" href="#!">View Details<span class="fas fa-chevron-right ms-1 fs--2"></span></a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row g-3 mb-3">
            <div class="col-lg-5">
              <div class="card h-100">
                <div class="card-header border-bottom">
                  <h6 class="mb-0">To Do List</h6>
                </div>
                <div class="card-body p-0 overflow-hidden">
                  <div class="row gx-3 align-items-center my-3 px-card">
                    <div class="col-auto">
                      <h6 class="text-primary mb-0">25%</h6>
                    </div>
                    <div class="col">
                      <div class="progress rounded-pill" style="height: 0.5625rem;">
                        <div class="progress-bar bg-progress-gradient rounded-pill" role="progressbar" style="width: 75%" aria-valuenow="43.72" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                  <div class="d-flex justify-content-between hover-actions-trigger btn-reveal-trigger px-card hover-bg-100">
                    <div class="form-check mb-0 d-flex align-items-center">
                      <input class="form-check-input rounded-3 form-check-line-through p-2 mt-0 form-check-input-undefined" type="checkbox" id="crm-checkbox-todo-0" />
                      <label class="form-check-label mb-0 p-3" for="crm-checkbox-todo-0">Design a ad</label>
                    </div>
                    <div class="d-flex align-items-center">
                      <div class="hover-actions">
                        <button class="btn icon-item rounded-3 me-2 fs--2 icon-item-sm"><span class="fas fa-clock"></span></button>
                        <button class="btn icon-item rounded-3 me-2 fs--2 icon-item-sm"><span class="fas fa-user-plus"> </span></button>
                      </div>
                      <div class="dropdown font-sans-serif btn-reveal-trigger">
                        <button class="btn btn-link text-600 btn-sm dropdown-toggle dropdown-caret-none btn-reveal-sm transition-none" type="button" id="crm-to-do-list-0" data-bs-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--2"></span></button>
                        <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="crm-to-do-list-0"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                          <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="d-flex justify-content-between hover-actions-trigger btn-reveal-trigger px-card hover-bg-100">
                    <div class="form-check mb-0 d-flex align-items-center">
                      <input class="form-check-input rounded-3 form-check-line-through p-2 mt-0 form-check-input-undefined" type="checkbox" id="crm-checkbox-todo-1" />
                      <label class="form-check-label mb-0 p-3" for="crm-checkbox-todo-1">Analyze Data</label>
                    </div>
                    <div class="d-flex align-items-center">
                      <div class="hover-actions">
                        <button class="btn icon-item rounded-3 me-2 fs--2 icon-item-sm"><span class="fas fa-clock"></span></button>
                        <button class="btn icon-item rounded-3 me-2 fs--2 icon-item-sm"><span class="fas fa-user-plus"> </span></button>
                      </div>
                      <div class="dropdown font-sans-serif btn-reveal-trigger">
                        <button class="btn btn-link text-600 btn-sm dropdown-toggle dropdown-caret-none btn-reveal-sm transition-none" type="button" id="crm-to-do-list-1" data-bs-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--2"></span></button>
                        <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="crm-to-do-list-1"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                          <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="d-flex justify-content-between hover-actions-trigger btn-reveal-trigger px-card hover-bg-100">
                    <div class="form-check mb-0 d-flex align-items-center">
                      <input class="form-check-input rounded-3 form-check-line-through p-2 mt-0 form-check-input-undefined" type="checkbox" id="crm-checkbox-todo-2" />
                      <label class="form-check-label mb-0 p-3" for="crm-checkbox-todo-2">Youtube campaign</label>
                    </div>
                    <div class="d-flex align-items-center">
                      <div class="hover-actions">
                        <button class="btn icon-item rounded-3 me-2 fs--2 icon-item-sm"><span class="fas fa-clock"></span></button>
                        <button class="btn icon-item rounded-3 me-2 fs--2 icon-item-sm"><span class="fas fa-user-plus"> </span></button>
                      </div>
                      <div class="dropdown font-sans-serif btn-reveal-trigger">
                        <button class="btn btn-link text-600 btn-sm dropdown-toggle dropdown-caret-none btn-reveal-sm transition-none" type="button" id="crm-to-do-list-2" data-bs-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--2"></span></button>
                        <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="crm-to-do-list-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                          <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="d-flex justify-content-between hover-actions-trigger btn-reveal-trigger px-card hover-bg-100">
                    <div class="form-check mb-0 d-flex align-items-center">
                      <input class="form-check-input rounded-3 form-check-line-through p-2 mt-0 form-check-input-undefined" type="checkbox" id="crm-checkbox-todo-3" />
                      <label class="form-check-label mb-0 p-3" for="crm-checkbox-todo-3">Assaign employee</label>
                    </div>
                    <div class="d-flex align-items-center">
                      <div class="hover-actions">
                        <button class="btn icon-item rounded-3 me-2 fs--2 icon-item-sm"><span class="fas fa-clock"></span></button>
                        <button class="btn icon-item rounded-3 me-2 fs--2 icon-item-sm"><span class="fas fa-user-plus"> </span></button>
                      </div>
                      <div class="dropdown font-sans-serif btn-reveal-trigger">
                        <button class="btn btn-link text-600 btn-sm dropdown-toggle dropdown-caret-none btn-reveal-sm transition-none" type="button" id="crm-to-do-list-3" data-bs-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--2"></span></button>
                        <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="crm-to-do-list-3"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                          <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="d-flex justify-content-between hover-actions-trigger btn-reveal-trigger px-card hover-bg-100">
                    <div class="form-check mb-0 d-flex align-items-center">
                      <input class="form-check-input rounded-3 form-check-line-through p-2 mt-0 form-check-input-undefined" type="checkbox" id="crm-checkbox-todo-4" />
                      <label class="form-check-label mb-0 p-3" for="crm-checkbox-todo-4">Video Conference</label>
                    </div>
                    <div class="d-flex align-items-center">
                      <div class="hover-actions">
                        <button class="btn icon-item rounded-3 me-2 fs--2 icon-item-sm"><span class="fas fa-clock"></span></button>
                        <button class="btn icon-item rounded-3 me-2 fs--2 icon-item-sm"><span class="fas fa-user-plus"> </span></button>
                      </div>
                      <div class="dropdown font-sans-serif btn-reveal-trigger">
                        <button class="btn btn-link text-600 btn-sm dropdown-toggle dropdown-caret-none btn-reveal-sm transition-none" type="button" id="crm-to-do-list-4" data-bs-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--2"></span></button>
                        <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="crm-to-do-list-4"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                          <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-footer bg-light p-0"><a class="btn btn-sm btn-link d-block py-2" href="#!"><span class="fas fa-plus me-1 fs--2"></span>Add New Task</a></div>
              </div>
            </div>
            <div class="col-lg-7">
              <div class="card" id="TableCrmRecentLeads" data-list='{"valueNames":["name","email","status"],"page":8,"pagination":true}'>
                <div class="card-header d-flex flex-between-center py-2">
                  <h6 class="mb-0">Recent Leads</h6>
                  <div class="dropdown font-sans-serif btn-reveal-trigger">
                    <button class="btn btn-link text-600 btn-sm dropdown-toggle dropdown-caret-none btn-reveal" type="button" id="recent-leads-header-dropdownundefined" data-bs-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--2"></span></button>
                    <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="recent-leads-header-dropdownundefined"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                      <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                    </div>
                  </div>
                </div>
                <div class="card-body px-0 py-0">
                  <div class="table-responsive scrollbar">
                    <table class="table fs--1 mb-0">
                      <thead class="bg-200 text-800">
                        <tr>
                          <th class="py-3 white-space-nowrap" style="max-width: 30px;">
                            <div class="form-check mb-0 d-flex align-items-center">
                              <input class="form-check-input" id="checkbox-bulk-leads-select" type="checkbox" data-bulk-select='{"body":"table-recent-leads-body","actions":"table-recent-leads-actions","replacedElement":"table-recent-leads-replace-element"}' />
                            </div>
                          </th>
                          <th class="sort align-middle" data-sort="name">Name</th>
                          <th class="sort align-middle" data-sort="email">Email and Phone</th>
                          <th class="sort align-middle" data-sort="status">Status</th>
                          <th class="sort align-middle text-end">Action</th>
                        </tr>
                      </thead>
                      <tbody class="list" id="table-recent-leads-body">
                        <tr class="hover-actions-trigger btn-reveal-trigger hover-bg-100">
                          <td class="align-middle" style="max-width: 30px;">
                            <div class="form-check mb-0">
                              <input class="form-check-input" type="checkbox" id="recent-leads-0" data-bulk-select-row="data-bulk-select-row" />
                            </div>
                          </td>
                          <td class="align-middle white-space-nowrap"><a href="../pages/user/profile.html">
                              <div class="d-flex align-items-center">
                                <div class="avatar avatar-xl">
                                  <img class="rounded-circle" src="../assets/img/team/1-thumb.png" alt="" />

                                </div>
                                <h6 class="mb-0 ps-2 text-800 name">Kerry Ingram</h6>
                              </div>
                            </a></td>
                          <td class="align-middle white-space-nowrap text-primary email"><a href="mailto:john@gmail.com">john@gmail.com</a></td>
                          <td class="align-middle white-space-nowrap"><small class="badge fw-semi-bold rounded-pill status badge-soft-primary"> New Lead</small></td>
                          <td class="align-middle white-space-nowrap text-end position-relative">
                            <div class="hover-actions bg-100">
                              <button class="btn icon-item rounded-3 me-2 fs--2 icon-item-sm"><span class="far fa-edit"></span></button>
                              <button class="btn icon-item rounded-3 me-2 fs--2 icon-item-sm"><span class="far fa-comment"></span></button>
                            </div>
                            <div class="dropdown font-sans-serif btn-reveal-trigger">
                              <button class="btn btn-link text-600 btn-sm dropdown-toggle dropdown-caret-none btn-reveal-sm transition-none" type="button" id="crm-recent-leads-0" data-bs-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--2"></span></button>
                              <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="crm-recent-leads-0"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr class="hover-actions-trigger btn-reveal-trigger hover-bg-100">
                          <td class="align-middle" style="max-width: 30px;">
                            <div class="form-check mb-0">
                              <input class="form-check-input" type="checkbox" id="recent-leads-1" data-bulk-select-row="data-bulk-select-row" />
                            </div>
                          </td>
                          <td class="align-middle white-space-nowrap"><a href="../pages/user/profile.html">
                              <div class="d-flex align-items-center">
                                <div class="avatar avatar-xl">
                                  <img class="rounded-circle" src="../assets/img/team/2-thumb.png" alt="" />

                                </div>
                                <h6 class="mb-0 ps-2 text-800 name">Bradie Knowall</h6>
                              </div>
                            </a></td>
                          <td class="align-middle white-space-nowrap text-primary email"><a href="mailto:bradie@mail.ru">bradie@mail.ru</a></td>
                          <td class="align-middle white-space-nowrap"><small class="badge fw-semi-bold rounded-pill status badge-soft-primary"> New Lead</small></td>
                          <td class="align-middle white-space-nowrap text-end position-relative">
                            <div class="hover-actions bg-100">
                              <button class="btn icon-item rounded-3 me-2 fs--2 icon-item-sm"><span class="far fa-edit"></span></button>
                              <button class="btn icon-item rounded-3 me-2 fs--2 icon-item-sm"><span class="far fa-comment"></span></button>
                            </div>
                            <div class="dropdown font-sans-serif btn-reveal-trigger">
                              <button class="btn btn-link text-600 btn-sm dropdown-toggle dropdown-caret-none btn-reveal-sm transition-none" type="button" id="crm-recent-leads-1" data-bs-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--2"></span></button>
                              <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="crm-recent-leads-1"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr class="hover-actions-trigger btn-reveal-trigger hover-bg-100">
                          <td class="align-middle" style="max-width: 30px;">
                            <div class="form-check mb-0">
                              <input class="form-check-input" type="checkbox" id="recent-leads-2" data-bulk-select-row="data-bulk-select-row" />
                            </div>
                          </td>
                          <td class="align-middle white-space-nowrap"><a href="../pages/user/profile.html">
                              <div class="d-flex align-items-center">
                                <div class="avatar avatar-xl">
                                  <img class="rounded-circle" src="../assets/img/team/3-thumb.png" alt="" />

                                </div>
                                <h6 class="mb-0 ps-2 text-800 name">Jenny Horas</h6>
                              </div>
                            </a></td>
                          <td class="align-middle white-space-nowrap text-primary email"><a href="mailto:jenny@mail.ru">jenny@mail.ru</a></td>
                          <td class="align-middle white-space-nowrap"><small class="badge fw-semi-bold rounded-pill status badge-soft-warning"> Cold Lead</small></td>
                          <td class="align-middle white-space-nowrap text-end position-relative">
                            <div class="hover-actions bg-100">
                              <button class="btn icon-item rounded-3 me-2 fs--2 icon-item-sm"><span class="far fa-edit"></span></button>
                              <button class="btn icon-item rounded-3 me-2 fs--2 icon-item-sm"><span class="far fa-comment"></span></button>
                            </div>
                            <div class="dropdown font-sans-serif btn-reveal-trigger">
                              <button class="btn btn-link text-600 btn-sm dropdown-toggle dropdown-caret-none btn-reveal-sm transition-none" type="button" id="crm-recent-leads-2" data-bs-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--2"></span></button>
                              <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="crm-recent-leads-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr class="hover-actions-trigger btn-reveal-trigger hover-bg-100">
                          <td class="align-middle" style="max-width: 30px;">
                            <div class="form-check mb-0">
                              <input class="form-check-input" type="checkbox" id="recent-leads-3" data-bulk-select-row="data-bulk-select-row" />
                            </div>
                          </td>
                          <td class="align-middle white-space-nowrap"><a href="../pages/user/profile.html">
                              <div class="d-flex align-items-center">
                                <div class="avatar avatar-xl">
                                  <img class="rounded-circle" src="../assets/img/team/4-thumb.png" alt="" />

                                </div>
                                <h6 class="mb-0 ps-2 text-800 name">Chris Pratt</h6>
                              </div>
                            </a></td>
                          <td class="align-middle white-space-nowrap text-primary email"><a href="mailto:pratt@mail.ru">pratt@mail.ru</a></td>
                          <td class="align-middle white-space-nowrap"><small class="badge fw-semi-bold rounded-pill status badge-soft-warning"> New Lead</small></td>
                          <td class="align-middle white-space-nowrap text-end position-relative">
                            <div class="hover-actions bg-100">
                              <button class="btn icon-item rounded-3 me-2 fs--2 icon-item-sm"><span class="far fa-edit"></span></button>
                              <button class="btn icon-item rounded-3 me-2 fs--2 icon-item-sm"><span class="far fa-comment"></span></button>
                            </div>
                            <div class="dropdown font-sans-serif btn-reveal-trigger">
                              <button class="btn btn-link text-600 btn-sm dropdown-toggle dropdown-caret-none btn-reveal-sm transition-none" type="button" id="crm-recent-leads-3" data-bs-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--2"></span></button>
                              <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="crm-recent-leads-3"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr class="hover-actions-trigger btn-reveal-trigger hover-bg-100">
                          <td class="align-middle" style="max-width: 30px;">
                            <div class="form-check mb-0">
                              <input class="form-check-input" type="checkbox" id="recent-leads-4" data-bulk-select-row="data-bulk-select-row" />
                            </div>
                          </td>
                          <td class="align-middle white-space-nowrap"><a href="../pages/user/profile.html">
                              <div class="d-flex align-items-center">
                                <div class="avatar avatar-xl">
                                  <img class="rounded-circle" src="../assets/img/team/5-thumb.png" alt="" />

                                </div>
                                <h6 class="mb-0 ps-2 text-800 name">Andy Murray</h6>
                              </div>
                            </a></td>
                          <td class="align-middle white-space-nowrap text-primary email"><a href="mailto:andy@gmail.com">andy@gmail.com</a></td>
                          <td class="align-middle white-space-nowrap"><small class="badge fw-semi-bold rounded-pill status badge-soft-success"> Won Lead</small></td>
                          <td class="align-middle white-space-nowrap text-end position-relative">
                            <div class="hover-actions bg-100">
                              <button class="btn icon-item rounded-3 me-2 fs--2 icon-item-sm"><span class="far fa-edit"></span></button>
                              <button class="btn icon-item rounded-3 me-2 fs--2 icon-item-sm"><span class="far fa-comment"></span></button>
                            </div>
                            <div class="dropdown font-sans-serif btn-reveal-trigger">
                              <button class="btn btn-link text-600 btn-sm dropdown-toggle dropdown-caret-none btn-reveal-sm transition-none" type="button" id="crm-recent-leads-4" data-bs-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--2"></span></button>
                              <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="crm-recent-leads-4"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                              </div>
                            </div>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="card-footer bg-light p-0">
                  <div class="pagination d-none"></div><a class="btn btn-sm btn-link d-block py-2" href="#!">Show full list<span class="fas fa-chevron-right ms-1 fs--2"></span></a>
                </div>
              </div>
            </div>
          </div>
          <footer class="footer">
            <div class="row g-0 justify-content-between fs--1 mt-4 mb-3">
              <div class="col-12 col-sm-auto text-center">
                <p class="mb-0 text-600">Thank you for creating with Falcon <span class="d-none d-sm-inline-block">| </span><br class="d-sm-none" /> 2021 &copy; <a href="https://themewagon.com">Themewagon</a></p>
              </div>
              <div class="col-12 col-sm-auto text-center">
                <p class="mb-0 text-600">v3.4.0</p>
              </div>
            </div>
          </footer>
        </div>
        <div class="modal fade" id="authentication-modal" tabindex="-1" role="dialog" aria-labelledby="authentication-modal-label" aria-hidden="true">
          <div class="modal-dialog mt-6" role="document">
            <div class="modal-content border-0">
              <div class="modal-header px-5 position-relative modal-shape-header bg-shape">
                <div class="position-relative z-index-1 light">
                  <h4 class="mb-0 text-white" id="authentication-modal-label">Register</h4>
                  <p class="fs--1 mb-0 text-white">Please create your free Falcon account</p>
                </div>
                <button class="btn-close btn-close-white position-absolute top-0 end-0 mt-2 me-2" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body py-4 px-5">
                <form>
                  <div class="mb-3">
                    <label class="form-label" for="modal-auth-name">Name</label>
                    <input class="form-control" type="text" autocomplete="on" id="modal-auth-name" />
                  </div>
                  <div class="mb-3">
                    <label class="form-label" for="modal-auth-email">Email address</label>
                    <input class="form-control" type="email" autocomplete="on" id="modal-auth-email" />
                  </div>
                  <div class="row gx-2">
                    <div class="mb-3 col-sm-6">
                      <label class="form-label" for="modal-auth-password">Password</label>
                      <input class="form-control" type="password" autocomplete="on" id="modal-auth-password" />
                    </div>
                    <div class="mb-3 col-sm-6">
                      <label class="form-label" for="modal-auth-confirm-password">Confirm Password</label>
                      <input class="form-control" type="password" autocomplete="on" id="modal-auth-confirm-password" />
                    </div>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="modal-auth-register-checkbox" />
                    <label class="form-label" for="modal-auth-register-checkbox">I accept the <a href="#!">terms </a>and <a href="#!">privacy policy</a></label>
                  </div>
                  <div class="mb-3">
                    <button class="btn btn-primary d-block w-100 mt-3" type="submit" name="submit">Register</button>
                  </div>
                </form>
                <div class="position-relative mt-5">
                  <hr class="bg-300" />
                  <div class="divider-content-center">or register with</div>
                </div>
                <div class="row g-2 mt-2">
                  <div class="col-sm-6"><a class="btn btn-outline-google-plus btn-sm d-block w-100" href="#"><span class="fab fa-google-plus-g me-2" data-fa-transform="grow-8"></span> google</a></div>
                  <div class="col-sm-6"><a class="btn btn-outline-facebook btn-sm d-block w-100" href="#"><span class="fab fa-facebook-square me-2" data-fa-transform="grow-8"></span> facebook</a></div>
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


    <div class="offcanvas offcanvas-end settings-panel border-0" id="settings-offcanvas" tabindex="-1" aria-labelledby="settings-offcanvas">
      <div class="offcanvas-header settings-panel-header bg-shape">
        <div class="z-index-1 py-1 light">
          <h5 class="text-white"> <span class="fas fa-palette me-2 fs-0"></span>Settings</h5>
          <p class="mb-0 fs--1 text-white opacity-75"> Set your own customized style</p>
        </div>
        <button class="btn-close btn-close-white z-index-1 mt-0" type="button" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body scrollbar-overlay px-card" id="themeController">
        <h5 class="fs-0">Color Scheme</h5>
        <p class="fs--1">Choose the perfect color mode for your app.</p>
        <div class="btn-group d-block w-100 btn-group-navbar-style">
          <div class="row gx-2">
            <div class="col-6">
              <input class="btn-check" id="themeSwitcherLight" name="theme-color" type="radio" value="light" data-theme-control="theme" />
              <label class="btn d-inline-block btn-navbar-style fs--1" for="themeSwitcherLight"> <span class="hover-overlay mb-2 rounded d-block"><img class="img-fluid img-prototype mb-0" src="../assets/img/generic/falcon-mode-default.jpg" alt=""/></span><span class="label-text">Light</span></label>
            </div>
            <div class="col-6">
              <input class="btn-check" id="themeSwitcherDark" name="theme-color" type="radio" value="dark" data-theme-control="theme" />
              <label class="btn d-inline-block btn-navbar-style fs--1" for="themeSwitcherDark"> <span class="hover-overlay mb-2 rounded d-block"><img class="img-fluid img-prototype mb-0" src="../assets/img/generic/falcon-mode-dark.jpg" alt=""/></span><span class="label-text"> Dark</span></label>
            </div>
          </div>
        </div>
        <hr />
        <div class="d-flex justify-content-between">
          <div class="d-flex align-items-start"><img class="me-2" src="../assets/img/icons/left-arrow-from-left.svg" width="20" alt="" />
            <div class="flex-1">
              <h5 class="fs-0">RTL Mode</h5>
              <p class="fs--1 mb-0">Switch your language direction </p><a class="fs--1" href="../documentation/customization/configuration.html">RTL Documentation</a>
            </div>
          </div>
          <div class="form-check form-switch">
            <input class="form-check-input ms-0" id="mode-rtl" type="checkbox" data-theme-control="isRTL" />
          </div>
        </div>
        <hr />
        <div class="d-flex justify-content-between">
          <div class="d-flex align-items-start"><img class="me-2" src="../assets/img/icons/arrows-h.svg" width="20" alt="" />
            <div class="flex-1">
              <h5 class="fs-0">Fluid Layout</h5>
              <p class="fs--1 mb-0">Toggle container layout system </p><a class="fs--1" href="../documentation/customization/configuration.html">Fluid Documentation</a>
            </div>
          </div>
          <div class="form-check form-switch">
            <input class="form-check-input ms-0" id="mode-fluid" type="checkbox" data-theme-control="isFluid" />
          </div>
        </div>
        <hr />
        <div class="d-flex align-items-start"><img class="me-2" src="../assets/img/icons/paragraph.svg" width="20" alt="" />
          <div class="flex-1">
            <h5 class="fs-0 d-flex align-items-center">Navigation Position </h5>
            <p class="fs--1 mb-2">Select a suitable navigation system for your web application </p>
            <div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" id="option-navbar-vertical" type="radio" name="navbar" value="vertical" data-page-url="../modules/components/navs-and-tabs/vertical-navbar.html" data-theme-control="navbarPosition" />
                <label class="form-check-label" for="option-navbar-vertical">Vertical</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" id="option-navbar-top" type="radio" name="navbar" value="top" data-page-url="../modules/components/navs-and-tabs/top-navbar.html" data-theme-control="navbarPosition" />
                <label class="form-check-label" for="option-navbar-top">Top</label>
              </div>
              <div class="form-check form-check-inline me-0">
                <input class="form-check-input" id="option-navbar-combo" type="radio" name="navbar" value="combo" data-page-url="../modules/components/navs-and-tabs/combo-navbar.html" data-theme-control="navbarPosition" />
                <label class="form-check-label" for="option-navbar-combo">Combo</label>
              </div>
            </div>
          </div>
        </div>
        <hr />
        <h5 class="fs-0 d-flex align-items-center">Vertical Navbar Style</h5>
        <p class="fs--1 mb-0">Switch between styles for your vertical navbar </p>
        <p> <a class="fs--1" href="../modules/components/navs-and-tabs/vertical-navbar.html#navbar-styles">See Documentation</a></p>
        <div class="btn-group d-block w-100 btn-group-navbar-style">
          <div class="row gx-2">
            <div class="col-6">
              <input class="btn-check" id="navbar-style-transparent" type="radio" name="navbarStyle" value="transparent" data-theme-control="navbarStyle" />
              <label class="btn d-block w-100 btn-navbar-style fs--1" for="navbar-style-transparent"> <img class="img-fluid img-prototype" src="../assets/img/generic/default.png" alt="" /><span class="label-text"> Transparent</span></label>
            </div>
            <div class="col-6">
              <input class="btn-check" id="navbar-style-inverted" type="radio" name="navbarStyle" value="inverted" data-theme-control="navbarStyle" />
              <label class="btn d-block w-100 btn-navbar-style fs--1" for="navbar-style-inverted"> <img class="img-fluid img-prototype" src="../assets/img/generic/inverted.png" alt="" /><span class="label-text"> Inverted</span></label>
            </div>
            <div class="col-6">
              <input class="btn-check" id="navbar-style-card" type="radio" name="navbarStyle" value="card" data-theme-control="navbarStyle" />
              <label class="btn d-block w-100 btn-navbar-style fs--1" for="navbar-style-card"> <img class="img-fluid img-prototype" src="../assets/img/generic/card.png" alt="" /><span class="label-text"> Card</span></label>
            </div>
            <div class="col-6">
              <input class="btn-check" id="navbar-style-vibrant" type="radio" name="navbarStyle" value="vibrant" data-theme-control="navbarStyle" />
              <label class="btn d-block w-100 btn-navbar-style fs--1" for="navbar-style-vibrant"> <img class="img-fluid img-prototype" src="../assets/img/generic/vibrant.png" alt="" /><span class="label-text"> Vibrant</span></label>
            </div>
          </div>
        </div>
        <div class="text-center mt-5"><img class="mb-4" src="../assets/img/icons/spot-illustrations/47.png" alt="" width="120" />
          <h5>Like What You See?</h5>
          <p class="fs--1">Get Falcon now and create beautiful dashboards with hundreds of widgets.</p><a class="mb-3 btn btn-primary" href="https://themes.getbootstrap.com/product/falcon-admin-dashboard-webapp-template/" target="_blank">Purchase</a>
        </div>
      </div>
    </div><a class="card setting-toggle" href="#settings-offcanvas" data-bs-toggle="offcanvas">
      <div class="card-body d-flex align-items-center py-md-2 px-2 py-1">
        <div class="bg-soft-primary position-relative rounded-start" style="height:34px;width:28px">
          <div class="settings-popover"><span class="ripple"><span class="fa-spin position-absolute all-0 d-flex flex-center"><span class="icon-spin position-absolute all-0 d-flex flex-center">
                  <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M19.7369 12.3941L19.1989 12.1065C18.4459 11.7041 18.0843 10.8487 18.0843 9.99495C18.0843 9.14118 18.4459 8.28582 19.1989 7.88336L19.7369 7.59581C19.9474 7.47484 20.0316 7.23291 19.9474 7.03131C19.4842 5.57973 18.6843 4.28943 17.6738 3.20075C17.5053 3.03946 17.2527 2.99914 17.0422 3.12011L16.393 3.46714C15.6883 3.84379 14.8377 3.74529 14.1476 3.3427C14.0988 3.31422 14.0496 3.28621 14.0002 3.25868C13.2568 2.84453 12.7055 2.10629 12.7055 1.25525V0.70081C12.7055 0.499202 12.5371 0.297594 12.2845 0.257272C10.7266 -0.105622 9.16879 -0.0653007 7.69516 0.257272C7.44254 0.297594 7.31623 0.499202 7.31623 0.70081V1.23474C7.31623 2.09575 6.74999 2.8362 5.99824 3.25599C5.95774 3.27861 5.91747 3.30159 5.87744 3.32493C5.15643 3.74527 4.26453 3.85902 3.53534 3.45302L2.93743 3.12011C2.72691 2.99914 2.47429 3.03946 2.30587 3.20075C1.29538 4.28943 0.495411 5.57973 0.0322686 7.03131C-0.051939 7.23291 0.0322686 7.47484 0.242788 7.59581L0.784376 7.8853C1.54166 8.29007 1.92694 9.13627 1.92694 9.99495C1.92694 10.8536 1.54166 11.6998 0.784375 12.1046L0.242788 12.3941C0.0322686 12.515 -0.051939 12.757 0.0322686 12.9586C0.495411 14.4102 1.29538 15.7005 2.30587 16.7891C2.47429 16.9504 2.72691 16.9907 2.93743 16.8698L3.58669 16.5227C4.29133 16.1461 5.14131 16.2457 5.8331 16.6455C5.88713 16.6767 5.94159 16.7074 5.99648 16.7375C6.75162 17.1511 7.31623 17.8941 7.31623 18.7552V19.2891C7.31623 19.4425 7.41373 19.5959 7.55309 19.696C7.64066 19.7589 7.74815 19.7843 7.85406 19.8046C9.35884 20.0925 10.8609 20.0456 12.2845 19.7729C12.5371 19.6923 12.7055 19.4907 12.7055 19.2891V18.7346C12.7055 17.8836 13.2568 17.1454 14.0002 16.7312C14.0496 16.7037 14.0988 16.6757 14.1476 16.6472C14.8377 16.2446 15.6883 16.1461 16.393 16.5227L17.0422 16.8698C17.2527 16.9907 17.5053 16.9504 17.6738 16.7891C18.7264 15.7005 19.4842 14.4102 19.9895 12.9586C20.0316 12.757 19.9474 12.515 19.7369 12.3941ZM10.0109 13.2005C8.1162 13.2005 6.64257 11.7893 6.64257 9.97478C6.64257 8.20063 8.1162 6.74905 10.0109 6.74905C11.8634 6.74905 13.3792 8.20063 13.3792 9.97478C13.3792 11.7893 11.8634 13.2005 10.0109 13.2005Z" fill="#2A7BE4"></path>
                  </svg></span></span></span></div>
        </div><small class="text-uppercase text-primary fw-bold bg-soft-primary py-2 pe-2 ps-1 rounded-end">customize</small>
      </div>
    </a>


    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="../vendors/popper/popper.min.js"></script>
    <script src="../vendors/bootstrap/bootstrap.min.js"></script>
    <script src="../vendors/anchorjs/anchor.min.js"></script>
    <script src="../vendors/is/is.min.js"></script>
    <script src="../vendors/chart/chart.min.js"></script>
    <script src="../vendors/leaflet/leaflet.js"></script>
    <script src="../vendors/leaflet.markercluster/leaflet.markercluster.js"></script>
    <script src="../vendors/leaflet.tilelayer.colorfilter/leaflet-tilelayer-colorfilter.min.js"></script>
    <script src="../vendors/countup/countUp.umd.js"></script>
    <script src="../vendors/echarts/echarts.min.js"></script>
    <script src="../assets/data/world.js"></script>
    <script src="../vendors/dayjs/dayjs.min.js"></script>
    <script src="../assets/js/flatpickr.js"></script>
    <script src="../vendors/fontawesome/all.min.js"></script>
    <script src="../vendors/lodash/lodash.min.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="../vendors/list.js/list.min.js"></script>
    <script src="../assets/js/theme.js"></script>

  </body>

</html>