<!DOCTYPE html>
<html lang="en-US" dir="ltr">

 <head>
    @include('layouts.app')
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7cPoppins:300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">
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
                    <li class="nav-item"><a class="nav-link" href="{{url('/crms')}}" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">CRM</span>
                        </div>
                      </a>
                      <!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link active" href="{{url('/ecom')}}" aria-expanded="false">
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
                    <li class="nav-item"><a class="nav-link" href="{{url('/saas' )}}" aria-expanded="false">
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
          <div class="row g-3 mb-3">
            <div class="col-xxl-6 col-xl-12">
              <div class="row g-3">
                <div class="col-12">
                  <div class="card bg-transparent-50 overflow-hidden">
                    <div class="card-header position-relative">
                      <div class="bg-holder d-none d-md-block bg-card z-index-1" style="background-image:url(../assets/img/illustrations/ecommerce-bg.png);background-size:230px;background-position:right bottom;z-index:-1;">
                      </div>
                      <!--/.bg-holder-->

                      <div class="position-relative z-index-2">
                        <div>
                          <h3 class="text-primary mb-1">Good Afternoon, Jonathan!</h3>
                          <p>Here’s what happening with your store today </p>
                        </div>
                        <div class="d-flex py-3">
                          <div class="pe-3">
                            <p class="text-600 fs--1 fw-medium">Today's visit </p>
                            <h4 class="text-800 mb-0">14,209</h4>
                          </div>
                          <div class="ps-3">
                            <p class="text-600 fs--1">Today’s total sales </p>
                            <h4 class="text-800 mb-0">$21,349.29 </h4>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card-body p-0">
                      <ul class="mb-0 list-unstyled">
                        <li class="alert mb-0 rounded-0 py-3 px-card alert-warning border-x-0 border-top-0">
                          <div class="row flex-between-center">
                            <div class="col">
                              <div class="d-flex">
                                <div class="fas fa-circle mt-1 fs--2"></div>
                                <p class="fs--1 ps-2 mb-0"><strong>5 products</strong> didn’t publish to your Facebook page</p>
                              </div>
                            </div>
                            <div class="col-auto d-flex align-items-center"><a class="alert-link fs--1 fw-medium" href="#!">View products<i class="fas fa-chevron-right ms-1 fs--2"></i></a></div>
                          </div>
                        </li>
                        <li class="alert mb-0 rounded-0 py-3 px-card greetings-item border-top border-x-0 border-top-0">
                          <div class="row flex-between-center">
                            <div class="col">
                              <div class="d-flex">
                                <div class="fas fa-circle mt-1 fs--2 text-primary"></div>
                                <p class="fs--1 ps-2 mb-0"><strong>7 orders</strong> have payments that need to be captured</p>
                              </div>
                            </div>
                            <div class="col-auto d-flex align-items-center"><a class="alert-link fs--1 fw-medium" href="#!">View payments<i class="fas fa-chevron-right ms-1 fs--2"></i></a></div>
                          </div>
                        </li>
                        <li class="alert mb-0 rounded-0 py-3 px-card greetings-item border-top  border-0">
                          <div class="row flex-between-center">
                            <div class="col">
                              <div class="d-flex">
                                <div class="fas fa-circle mt-1 fs--2 text-primary"></div>
                                <p class="fs--1 ps-2 mb-0"><strong>50+ orders</strong> need to be fulfilled</p>
                              </div>
                            </div>
                            <div class="col-auto d-flex align-items-center"><a class="alert-link fs--1 fw-medium" href="#!">View orders<i class="fas fa-chevron-right ms-1 fs--2"></i></a></div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="row g-3">
                    <div class="col-md-6">
                      <div class="card h-md-100 ecommerce-card-min-width">
                        <div class="card-header pb-0">
                          <h6 class="mb-0 mt-2 d-flex align-items-center">Weekly Sales<span class="ms-1 text-400" data-bs-toggle="tooltip" data-bs-placement="top" title="Calculated according to last week's sales"><span class="far fa-question-circle" data-fa-transform="shrink-1"></span></span></h6>
                        </div>
                        <div class="card-body d-flex flex-column justify-content-end">
                          <div class="row">
                            <div class="col">
                              <p class="font-sans-serif lh-1 mb-1 fs-2">$47K</p><span class="badge badge-soft-success rounded-pill fs--2">+3.5%</span>
                            </div>
                            <div class="col-auto ps-0">
                              <div class="echart-bar-weekly-sales h-100 echart-bar-weekly-sales-smaller-width"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="card product-share-doughnut-width">
                        <div class="card-header pb-0">
                          <h6 class="mb-0 mt-2 d-flex align-items-center">Product Share</h6>
                        </div>
                        <div class="card-body">
                          <div class="d-flex justify-content-between">
                            <div class="d-flex flex-column justify-content-between">
                              <p class="font-sans-serif lh-1 mb-1 fs-2">34.6%</p><span class="badge badge-soft-warning rounded-pill fs--2"><span class="fas fa-caret-up me-1"></span>3.5%</span>
                            </div>
                            <div>
                              <canvas class="my-n5" id="marketShareDoughnut" width="112"></canvas>
                              <p class="mb-0 text-center fs--2 mt-4 text-500">Target: <span class="text-800">55% </span></p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="card h-md-100 h-100">
                        <div class="card-body">
                          <div class="row h-100 justify-content-between g-0">
                            <div class="col-5 col-sm-6 col-xxl pe-2">
                              <h6 class="mt-1">Market Share</h6>
                              <div class="fs--2 mt-3">
                                <div class="d-flex flex-between-center mb-1">
                                  <div class="d-flex align-items-center"><span class="dot bg-primary"></span><span class="fw-semi-bold">Falcon</span></div>
                                  <div class="d-xxl-none">57%</div>
                                </div>
                                <div class="d-flex flex-between-center mb-1">
                                  <div class="d-flex align-items-center"><span class="dot bg-info"></span><span class="fw-semi-bold">Sparrow</span></div>
                                  <div class="d-xxl-none">20%</div>
                                </div>
                                <div class="d-flex flex-between-center mb-1">
                                  <div class="d-flex align-items-center"><span class="dot bg-warning"></span><span class="fw-semi-bold">Phoenix</span></div>
                                  <div class="d-xxl-none">22%</div>
                                </div>
                              </div>
                            </div>
                            <div class="col-auto position-relative">
                              <div class="echart-product-share"></div>
                              <div class="position-absolute top-50 start-50 translate-middle text-dark fs-2">26M</div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="card h-100">
                        <div class="card-header pb-0">
                          <h6 class="mb-0 mt-2 d-flex align-items-center">Total Order</h6>
                        </div>
                        <div class="card-body">
                          <div class="row align-items-end">
                            <div class="col">
                              <p class="font-sans-serif lh-1 mb-1 fs-2">58.4K</p>
                              <div class="badge badge-soft-primary rounded-pill fs--2"><span class="fas fa-caret-up me-1"></span>13.6%</div>
                            </div>
                            <div class="col-auto ps-0">
                              <div class="total-order-ecommerce" data-echarts='{"series":[{"type":"line","data":[110,100,250,210,530,480,320,325]}],"grid":{"bottom":"-10px"}}'></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xxl-6 col-xl-12">
              <div class="card py-3 mb-3">
                <div class="card-body py-3">
                  <div class="row g-0">
                    <div class="col-6 col-md-4 border-200 border-bottom border-end pb-4">
                      <h6 class="pb-1 text-700">Orders </h6>
                      <p class="font-sans-serif lh-1 mb-1 fs-2">15,450 </p>
                      <div class="d-flex align-items-center">
                        <h6 class="fs--1 text-500 mb-0">13,675 </h6>
                        <h6 class="fs--2 ps-3 mb-0 text-primary"><span class="me-1 fas fa-caret-up"></span>21.8%</h6>
                      </div>
                    </div>
                    <div class="col-6 col-md-4 border-200 border-md-200 border-bottom border-md-end pb-4 ps-3">
                      <h6 class="pb-1 text-700">Items sold </h6>
                      <p class="font-sans-serif lh-1 mb-1 fs-2">1,054 </p>
                      <div class="d-flex align-items-center">
                        <h6 class="fs--1 text-500 mb-0">13,675 </h6>
                        <h6 class="fs--2 ps-3 mb-0 text-warning"><span class="me-1 fas fa-caret-up"></span>21.8%</h6>
                      </div>
                    </div>
                    <div class="col-6 col-md-4 border-200 border-bottom border-end border-md-end-0 pb-4 pt-4 pt-md-0 ps-md-3">
                      <h6 class="pb-1 text-700">Refunds </h6>
                      <p class="font-sans-serif lh-1 mb-1 fs-2">$145.65 </p>
                      <div class="d-flex align-items-center">
                        <h6 class="fs--1 text-500 mb-0">13,675 </h6>
                        <h6 class="fs--2 ps-3 mb-0 text-success"><span class="me-1 fas fa-caret-up"></span>21.8%</h6>
                      </div>
                    </div>
                    <div class="col-6 col-md-4 border-200 border-md-200 border-bottom border-md-bottom-0 border-md-end pt-4 pb-md-0 ps-3 ps-md-0">
                      <h6 class="pb-1 text-700">Gross sale </h6>
                      <p class="font-sans-serif lh-1 mb-1 fs-2">$100.26 </p>
                      <div class="d-flex align-items-center">
                        <h6 class="fs--1 text-500 mb-0">$109.65 </h6>
                        <h6 class="fs--2 ps-3 mb-0 text-danger"><span class="me-1 fas fa-caret-up"></span>21.8%</h6>
                      </div>
                    </div>
                    <div class="col-6 col-md-4 border-200 border-md-bottom-0 border-end pt-4 pb-md-0 ps-md-3">
                      <h6 class="pb-1 text-700">Shipping </h6>
                      <p class="font-sans-serif lh-1 mb-1 fs-2">$365.53 </p>
                      <div class="d-flex align-items-center">
                        <h6 class="fs--1 text-500 mb-0">13,675 </h6>
                        <h6 class="fs--2 ps-3 mb-0 text-success"><span class="me-1 fas fa-caret-up"></span>21.8%</h6>
                      </div>
                    </div>
                    <div class="col-6 col-md-4 pb-0 pt-4 ps-3">
                      <h6 class="pb-1 text-700">Processing </h6>
                      <p class="font-sans-serif lh-1 mb-1 fs-2">861 </p>
                      <div class="d-flex align-items-center">
                        <h6 class="fs--1 text-500 mb-0">13,675 </h6>
                        <h6 class="fs--2 ps-3 mb-0 text-info"><span class="me-1 fas fa-caret-up"></span>21.8%</h6>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header">
                  <div class="row flex-between-center g-0">
                    <div class="col-auto">
                      <h6 class="mb-0">Total Sales</h6>
                    </div>
                    <div class="col-auto d-flex">
                      <div class="form-check mb-0 d-flex">
                        <input class="form-check-input form-check-input-primary" id="ecommerceLastMonth" type="checkbox" checked="checked" />
                        <label class="form-check-label ps-2 fs--2 text-600 mb-0" for="ecommerceLastMonth">Last Month<span class="text-dark d-none d-md-inline">: $32,502.00</span></label>
                      </div>
                      <div class="form-check mb-0 d-flex ps-0 ps-md-3">
                        <input class="form-check-input ms-2 form-check-input-warning opacity-75" id="ecommercePrevYear" type="checkbox" checked="checked" />
                        <label class="form-check-label ps-2 fs--2 text-600 mb-0" for="ecommercePrevYear">Prev Year<span class="text-dark d-none d-md-inline">: $46,018.00</span></label>
                      </div>
                    </div>
                    <div class="col-auto">
                      <div class="dropdown font-sans-serif btn-reveal-trigger">
                        <button class="btn btn-link text-600 btn-sm dropdown-toggle dropdown-caret-none btn-reveal" type="button" id="dropdown-total-sales-ecomm" data-bs-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--2"></span></button>
                        <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="dropdown-total-sales-ecomm"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                          <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-body pe-xxl-0">
                  <!-- Find the JS file for the following chart at: src/js/charts/echarts/total-sales-ecommerce.js-->
                  <!-- If you are not using gulp based workflow, you can find the transpiled code at: public/assets/js/theme.js-->
                  <div class="echart-line-total-sales-ecommerce" data-echart-responsive="true" data-options='{"optionOne":"ecommerceLastMonth","optionTwo":"ecommercePrevYear"}'></div>
                </div>
              </div>
            </div>
          </div>
          <div class="row g-3 mb-3">
            <div class="col-xxl-3 col-md-6 col-lg-5">
              <div class="card shopping-cart-bar-min-height h-100">
                <div class="card-header d-flex flex-between-center">
                  <h6 class="mb-0">Shopping Cart</h6>
                  <div class="dropdown font-sans-serif btn-reveal-trigger">
                    <button class="btn btn-link text-600 btn-sm dropdown-toggle dropdown-caret-none btn-reveal" type="button" id="dropdown-shopping-cart-bar" data-bs-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--2"></span></button>
                    <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="dropdown-shopping-cart-bar"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                      <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                    </div>
                  </div>
                </div>
                <div class="card-body py-0 d-flex align-items-center h-100">
                  <div class="flex-1">
                    <div class="row g-0 align-items-center pb-3">
                      <div class="col pe-4">
                        <h6 class="fs--2 text-600">Initiated</h6>
                        <div class="progress" style="height:5px">
                          <div class="progress-bar rounded-3 bg-primary" role="progressbar" style="width: 50% " aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </div>
                      <div class="col-auto text-end">
                        <p class="mb-0 text-900 font-sans-serif"><span class="me-1 fas fa-caret-up text-success"></span>43.6%</p>
                        <p class="mb-0 fs--2 text-500 fw-semi-bold"> Session: <span class ="text-600">6817</span> </p>
                      </div>
                    </div>
                    <div class="row g-0 align-items-center pb-3 border-top pt-3">
                      <div class="col pe-4">
                        <h6 class="fs--2 text-600">Abandonment rate</h6>
                        <div class="progress" style="height:5px">
                          <div class="progress-bar rounded-3 bg-danger" role="progressbar" style="width: 25% " aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </div>
                      <div class="col-auto text-end">
                        <p class="mb-0 text-900 font-sans-serif"><span class="me-1 fas fa-caret-up text-danger"></span>13.11%</p>
                        <p class="mb-0 fs--2 text-500 fw-semi-bold"><span class ="text-600">44</span> of 61</p>
                      </div>
                    </div>
                    <div class="row g-0 align-items-center pb-3 border-top pt-3">
                      <div class="col pe-4">
                        <h6 class="fs--2 text-600">Bounce rate</h6>
                        <div class="progress" style="height:5px">
                          <div class="progress-bar rounded-3 bg-primary" role="progressbar" style="width: 35% " aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </div>
                      <div class="col-auto text-end">
                        <p class="mb-0 text-900 font-sans-serif"><span class="me-1 fas fa-caret-up text-success"></span>12.11%</p>
                        <p class="mb-0 fs--2 text-500 fw-semi-bold"><span class ="text-600">8</span> of 61</p>
                      </div>
                    </div>
                    <div class="row g-0 align-items-center pb-3 border-top pt-3">
                      <div class="col pe-4">
                        <h6 class="fs--2 text-600">Completion rate</h6>
                        <div class="progress" style="height:5px">
                          <div class="progress-bar rounded-3 bg-primary" role="progressbar" style="width: 43% " aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </div>
                      <div class="col-auto text-end">
                        <p class="mb-0 text-900 font-sans-serif"><span class="me-1 fas fa-caret-down text-danger"></span>43.6%</p>
                        <p class="mb-0 fs--2 text-500 fw-semi-bold"><span class ="text-600">18</span> of 179</p>
                      </div>
                    </div>
                    <div class="row g-0 align-items-center pb-3 border-top pt-3">
                      <div class="col pe-4">
                        <h6 class="fs--2 text-600">Revenue Rate</h6>
                        <div class="progress" style="height:5px">
                          <div class="progress-bar rounded-3 bg-primary" role="progressbar" style="width: 60% " aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </div>
                      <div class="col-auto text-end">
                        <p class="mb-0 text-900 font-sans-serif"><span class="me-1 fas fa-caret-up text-success"></span>60.5%</p>
                        <p class="mb-0 fs--2 text-500 fw-semi-bold"><span class ="text-600">18</span> of 179</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xxl-4 col-md-6 col-lg-7 order-xxl-1">
              <div class="card h-100">
                <div class="card-header bg-light py-2 d-flex flex-between-center">
                  <h6 class="mb-0">Top Products</h6>
                  <div class="d-flex"><a class="btn btn-link btn-sm me-2" href="#!">View Details</a>
                    <div class="dropdown font-sans-serif btn-reveal-trigger">
                      <button class="btn btn-link text-600 btn-sm dropdown-toggle dropdown-caret-none btn-reveal" type="button" id="dropdown-top-products" data-bs-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--2"></span></button>
                      <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="dropdown-top-products"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                        <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-body d-flex h-100 flex-column justify-content-end">
                  <!-- Find the JS file for the following chart at: src/js/charts/echarts/top-products.js-->
                  <!-- If you are not using gulp based workflow, you can find the transpiled code at: public/assets/js/theme.js-->
                  <div class="echart-bar-top-products echart-bar-top-products-ecommerce" data-echart-responsive="true"> </div>
                </div>
              </div>
            </div>
            <div class="col-xxl-9 col-md-12">
              <div class="card z-index-1" id="recentPurchaseTable" data-list='{"valueNames":["name","email","product","payment","amount"],"page":7,"pagination":true}'>
                <div class="card-header">
                  <div class="row flex-between-center">
                    <div class="col-6 col-sm-auto d-flex align-items-center pe-0">
                      <h5 class="fs-0 mb-0 text-nowrap py-2 py-xl-0">Recent Purchases </h5>
                    </div>
                    <div class="col-6 col-sm-auto ms-auto text-end ps-0">
                      <div class="d-none" id="table-purchases-actions">
                        <div class="d-flex">
                          <select class="form-select form-select-sm" aria-label="Bulk actions">
                            <option selected="">Bulk actions</option>
                            <option value="Refund">Refund</option>
                            <option value="Delete">Delete</option>
                            <option value="Archive">Archive</option>
                          </select>
                          <button class="btn btn-falcon-default btn-sm ms-2" type="button">Apply</button>
                        </div>
                      </div>
                      <div id="table-purchases-replace-element">
                        <button class="btn btn-falcon-default btn-sm" type="button"><span class="fas fa-plus" data-fa-transform="shrink-3 down-2"></span><span class="d-none d-sm-inline-block ms-1">New</span></button>
                        <button class="btn btn-falcon-default btn-sm mx-2" type="button"><span class="fas fa-filter" data-fa-transform="shrink-3 down-2"></span><span class="d-none d-sm-inline-block ms-1">Filter</span></button>
                        <button class="btn btn-falcon-default btn-sm" type="button"><span class="fas fa-external-link-alt" data-fa-transform="shrink-3 down-2"></span><span class="d-none d-sm-inline-block ms-1">Export</span></button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-body px-0 py-0">
                  <div class="table-responsive scrollbar">
                    <table class="table table-sm fs--1 mb-0 overflow-hidden">
                      <thead class="bg-200 text-900">
                        <tr>
                          <th class="white-space-nowrap">
                            <div class="form-check mb-0 d-flex align-items-center">
                              <input class="form-check-input" id="checkbox-bulk-purchases-select" type="checkbox" data-bulk-select='{"body":"table-purchase-body","actions":"table-purchases-actions","replacedElement":"table-purchases-replace-element"}' />
                            </div>
                          </th>
                          <th class="sort pe-1 align-middle white-space-nowrap" data-sort="name">Customer</th>
                          <th class="sort pe-1 align-middle white-space-nowrap" data-sort="email">Email</th>
                          <th class="sort pe-1 align-middle white-space-nowrap" data-sort="product">Product</th>
                          <th class="sort pe-1 align-middle white-space-nowrap text-center" data-sort="payment">Payment</th>
                          <th class="sort pe-1 align-middle white-space-nowrap text-end" data-sort="amount">Amount</th>
                          <th class="no-sort pe-1 align-middle data-table-row-action"></th>
                        </tr>
                      </thead>
                      <tbody class="list" id="table-purchase-body">
                        <tr class="btn-reveal-trigger">
                          <td class="align-middle" style="width: 28px;">
                            <div class="form-check mb-0">
                              <input class="form-check-input" type="checkbox" id="recent-purchase-0" data-bulk-select-row="data-bulk-select-row" />
                            </div>
                          </td>
                          <th class="align-middle white-space-nowrap name"><a href="../app/e-commerce/customer-details.html">Sylvia Plath</a></th>
                          <td class="align-middle white-space-nowrap email">john@gmail.com</td>
                          <td class="align-middle white-space-nowrap product">Slick - Drag &amp; Drop Bootstrap Generator</td>
                          <td class="align-middle text-center fs-0 white-space-nowrap payment"><span class="badge badge rounded-pill badge-soft-success">Success<span class="ms-1 fas fa-check" data-fa-transform="shrink-2"></span></span>
                          </td>
                          <td class="align-middle text-end amount">$99</td>
                          <td class="align-middle white-space-nowrap text-end">
                            <div class="dropstart font-sans-serif position-static d-inline-block">
                              <button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal float-end" type="button" id="dropdown0" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--1"></span></button>
                              <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="dropdown0"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item" href="#!">Refund</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item text-warning" href="#!">Archive</a><a class="dropdown-item text-danger" href="#!">Delete</a>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr class="btn-reveal-trigger">
                          <td class="align-middle" style="width: 28px;">
                            <div class="form-check mb-0">
                              <input class="form-check-input" type="checkbox" id="recent-purchase-1" data-bulk-select-row="data-bulk-select-row" />
                            </div>
                          </td>
                          <th class="align-middle white-space-nowrap name"><a href="../app/e-commerce/customer-details.html">Homer</a></th>
                          <td class="align-middle white-space-nowrap email">sylvia@mail.ru</td>
                          <td class="align-middle white-space-nowrap product">Bose SoundSport Wireless Headphones</td>
                          <td class="align-middle text-center fs-0 white-space-nowrap payment"><span class="badge badge rounded-pill badge-soft-success">Success<span class="ms-1 fas fa-check" data-fa-transform="shrink-2"></span></span>
                          </td>
                          <td class="align-middle text-end amount">$634</td>
                          <td class="align-middle white-space-nowrap text-end">
                            <div class="dropstart font-sans-serif position-static d-inline-block">
                              <button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal float-end" type="button" id="dropdown1" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--1"></span></button>
                              <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="dropdown1"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item" href="#!">Refund</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item text-warning" href="#!">Archive</a><a class="dropdown-item text-danger" href="#!">Delete</a>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr class="btn-reveal-trigger">
                          <td class="align-middle" style="width: 28px;">
                            <div class="form-check mb-0">
                              <input class="form-check-input" type="checkbox" id="recent-purchase-2" data-bulk-select-row="data-bulk-select-row" />
                            </div>
                          </td>
                          <th class="align-middle white-space-nowrap name"><a href="../app/e-commerce/customer-details.html">Edgar Allan Poe</a></th>
                          <td class="align-middle white-space-nowrap email">edgar@yahoo.com</td>
                          <td class="align-middle white-space-nowrap product">All-New Fire HD 8 Kids Edition Tablet</td>
                          <td class="align-middle text-center fs-0 white-space-nowrap payment"><span class="badge badge rounded-pill badge-soft-secondary">Blocked<span class="ms-1 fas fa-ban" data-fa-transform="shrink-2"></span></span>
                          </td>
                          <td class="align-middle text-end amount">$199</td>
                          <td class="align-middle white-space-nowrap text-end">
                            <div class="dropstart font-sans-serif position-static d-inline-block">
                              <button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal float-end" type="button" id="dropdown2" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--1"></span></button>
                              <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="dropdown2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item" href="#!">Refund</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item text-warning" href="#!">Archive</a><a class="dropdown-item text-danger" href="#!">Delete</a>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr class="btn-reveal-trigger">
                          <td class="align-middle" style="width: 28px;">
                            <div class="form-check mb-0">
                              <input class="form-check-input" type="checkbox" id="recent-purchase-3" data-bulk-select-row="data-bulk-select-row" />
                            </div>
                          </td>
                          <th class="align-middle white-space-nowrap name"><a href="../app/e-commerce/customer-details.html">William Butler Yeats</a></th>
                          <td class="align-middle white-space-nowrap email">william@gmail.com</td>
                          <td class="align-middle white-space-nowrap product">Apple iPhone XR (64GB)</td>
                          <td class="align-middle text-center fs-0 white-space-nowrap payment"><span class="badge badge rounded-pill badge-soft-success">Success<span class="ms-1 fas fa-check" data-fa-transform="shrink-2"></span></span>
                          </td>
                          <td class="align-middle text-end amount">$798</td>
                          <td class="align-middle white-space-nowrap text-end">
                            <div class="dropstart font-sans-serif position-static d-inline-block">
                              <button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal float-end" type="button" id="dropdown3" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--1"></span></button>
                              <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="dropdown3"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item" href="#!">Refund</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item text-warning" href="#!">Archive</a><a class="dropdown-item text-danger" href="#!">Delete</a>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr class="btn-reveal-trigger">
                          <td class="align-middle" style="width: 28px;">
                            <div class="form-check mb-0">
                              <input class="form-check-input" type="checkbox" id="recent-purchase-4" data-bulk-select-row="data-bulk-select-row" />
                            </div>
                          </td>
                          <th class="align-middle white-space-nowrap name"><a href="../app/e-commerce/customer-details.html">Rabindranath Tagore</a></th>
                          <td class="align-middle white-space-nowrap email">tagore@twitter.com</td>
                          <td class="align-middle white-space-nowrap product">ASUS Chromebook C202SA-YS02 11.6&quot;</td>
                          <td class="align-middle text-center fs-0 white-space-nowrap payment"><span class="badge badge rounded-pill badge-soft-secondary">Blocked<span class="ms-1 fas fa-ban" data-fa-transform="shrink-2"></span></span>
                          </td>
                          <td class="align-middle text-end amount">$318</td>
                          <td class="align-middle white-space-nowrap text-end">
                            <div class="dropstart font-sans-serif position-static d-inline-block">
                              <button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal float-end" type="button" id="dropdown4" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--1"></span></button>
                              <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="dropdown4"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item" href="#!">Refund</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item text-warning" href="#!">Archive</a><a class="dropdown-item text-danger" href="#!">Delete</a>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr class="btn-reveal-trigger">
                          <td class="align-middle" style="width: 28px;">
                            <div class="form-check mb-0">
                              <input class="form-check-input" type="checkbox" id="recent-purchase-5" data-bulk-select-row="data-bulk-select-row" />
                            </div>
                          </td>
                          <th class="align-middle white-space-nowrap name"><a href="../app/e-commerce/customer-details.html">Emily Dickinson</a></th>
                          <td class="align-middle white-space-nowrap email">emily@gmail.com</td>
                          <td class="align-middle white-space-nowrap product">Mirari OK to Wake! Alarm Clock &amp; Night-Light</td>
                          <td class="align-middle text-center fs-0 white-space-nowrap payment"><span class="badge badge rounded-pill badge-soft-warning">Pending<span class="ms-1 fas fa-stream" data-fa-transform="shrink-2"></span></span>
                          </td>
                          <td class="align-middle text-end amount">$11</td>
                          <td class="align-middle white-space-nowrap text-end">
                            <div class="dropstart font-sans-serif position-static d-inline-block">
                              <button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal float-end" type="button" id="dropdown5" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--1"></span></button>
                              <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="dropdown5"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item" href="#!">Refund</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item text-warning" href="#!">Archive</a><a class="dropdown-item text-danger" href="#!">Delete</a>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr class="btn-reveal-trigger">
                          <td class="align-middle" style="width: 28px;">
                            <div class="form-check mb-0">
                              <input class="form-check-input" type="checkbox" id="recent-purchase-6" data-bulk-select-row="data-bulk-select-row" />
                            </div>
                          </td>
                          <th class="align-middle white-space-nowrap name"><a href="../app/e-commerce/customer-details.html">Giovanni Boccaccio</a></th>
                          <td class="align-middle white-space-nowrap email">giovanni@outlook.com</td>
                          <td class="align-middle white-space-nowrap product">Summer Infant Contoured Changing Pad</td>
                          <td class="align-middle text-center fs-0 white-space-nowrap payment"><span class="badge badge rounded-pill badge-soft-success">Success<span class="ms-1 fas fa-check" data-fa-transform="shrink-2"></span></span>
                          </td>
                          <td class="align-middle text-end amount">$31</td>
                          <td class="align-middle white-space-nowrap text-end">
                            <div class="dropstart font-sans-serif position-static d-inline-block">
                              <button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal float-end" type="button" id="dropdown6" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--1"></span></button>
                              <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="dropdown6"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item" href="#!">Refund</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item text-warning" href="#!">Archive</a><a class="dropdown-item text-danger" href="#!">Delete</a>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr class="btn-reveal-trigger">
                          <td class="align-middle" style="width: 28px;">
                            <div class="form-check mb-0">
                              <input class="form-check-input" type="checkbox" id="recent-purchase-7" data-bulk-select-row="data-bulk-select-row" />
                            </div>
                          </td>
                          <th class="align-middle white-space-nowrap name"><a href="../app/e-commerce/customer-details.html">Oscar Wilde</a></th>
                          <td class="align-middle white-space-nowrap email">oscar@hotmail.com</td>
                          <td class="align-middle white-space-nowrap product">Munchkin 6 Piece Fork and Spoon Set</td>
                          <td class="align-middle text-center fs-0 white-space-nowrap payment"><span class="badge badge rounded-pill badge-soft-success">Success<span class="ms-1 fas fa-check" data-fa-transform="shrink-2"></span></span>
                          </td>
                          <td class="align-middle text-end amount">$43</td>
                          <td class="align-middle white-space-nowrap text-end">
                            <div class="dropstart font-sans-serif position-static d-inline-block">
                              <button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal float-end" type="button" id="dropdown7" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--1"></span></button>
                              <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="dropdown7"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item" href="#!">Refund</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item text-warning" href="#!">Archive</a><a class="dropdown-item text-danger" href="#!">Delete</a>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr class="btn-reveal-trigger">
                          <td class="align-middle" style="width: 28px;">
                            <div class="form-check mb-0">
                              <input class="form-check-input" type="checkbox" id="recent-purchase-8" data-bulk-select-row="data-bulk-select-row" />
                            </div>
                          </td>
                          <th class="align-middle white-space-nowrap name"><a href="../app/e-commerce/customer-details.html">John Doe</a></th>
                          <td class="align-middle white-space-nowrap email">doe@gmail.com</td>
                          <td class="align-middle white-space-nowrap product">Falcon - Responsive Dashboard Template</td>
                          <td class="align-middle text-center fs-0 white-space-nowrap payment"><span class="badge badge rounded-pill badge-soft-success">Success<span class="ms-1 fas fa-check" data-fa-transform="shrink-2"></span></span>
                          </td>
                          <td class="align-middle text-end amount">$57</td>
                          <td class="align-middle white-space-nowrap text-end">
                            <div class="dropstart font-sans-serif position-static d-inline-block">
                              <button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal float-end" type="button" id="dropdown8" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--1"></span></button>
                              <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="dropdown8"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item" href="#!">Refund</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item text-warning" href="#!">Archive</a><a class="dropdown-item text-danger" href="#!">Delete</a>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr class="btn-reveal-trigger">
                          <td class="align-middle" style="width: 28px;">
                            <div class="form-check mb-0">
                              <input class="form-check-input" type="checkbox" id="recent-purchase-9" data-bulk-select-row="data-bulk-select-row" />
                            </div>
                          </td>
                          <th class="align-middle white-space-nowrap name"><a href="../app/e-commerce/customer-details.html">Emma Watson</a></th>
                          <td class="align-middle white-space-nowrap email">emma@gmail.com</td>
                          <td class="align-middle white-space-nowrap product">Apple iPhone XR (64GB)</td>
                          <td class="align-middle text-center fs-0 white-space-nowrap payment"><span class="badge badge rounded-pill badge-soft-secondary">Blocked<span class="ms-1 fas fa-ban" data-fa-transform="shrink-2"></span></span>
                          </td>
                          <td class="align-middle text-end amount">$999</td>
                          <td class="align-middle white-space-nowrap text-end">
                            <div class="dropstart font-sans-serif position-static d-inline-block">
                              <button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal float-end" type="button" id="dropdown9" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--1"></span></button>
                              <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="dropdown9"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item" href="#!">Refund</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item text-warning" href="#!">Archive</a><a class="dropdown-item text-danger" href="#!">Delete</a>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr class="btn-reveal-trigger">
                          <td class="align-middle" style="width: 28px;">
                            <div class="form-check mb-0">
                              <input class="form-check-input" type="checkbox" id="recent-purchase-10" data-bulk-select-row="data-bulk-select-row" />
                            </div>
                          </td>
                          <th class="align-middle white-space-nowrap name"><a href="../app/e-commerce/customer-details.html">Sylvia Plath</a></th>
                          <td class="align-middle white-space-nowrap email">plath@yahoo.com</td>
                          <td class="align-middle white-space-nowrap product">All-New Fire HD 8 Kids Edition Tablet</td>
                          <td class="align-middle text-center fs-0 white-space-nowrap payment"><span class="badge badge rounded-pill badge-soft-warning">Pending<span class="ms-1 fas fa-stream" data-fa-transform="shrink-2"></span></span>
                          </td>
                          <td class="align-middle text-end amount">$199</td>
                          <td class="align-middle white-space-nowrap text-end">
                            <div class="dropstart font-sans-serif position-static d-inline-block">
                              <button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal float-end" type="button" id="dropdown10" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--1"></span></button>
                              <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="dropdown10"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item" href="#!">Refund</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item text-warning" href="#!">Archive</a><a class="dropdown-item text-danger" href="#!">Delete</a>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr class="btn-reveal-trigger">
                          <td class="align-middle" style="width: 28px;">
                            <div class="form-check mb-0">
                              <input class="form-check-input" type="checkbox" id="recent-purchase-11" data-bulk-select-row="data-bulk-select-row" />
                            </div>
                          </td>
                          <th class="align-middle white-space-nowrap name"><a href="../app/e-commerce/customer-details.html">Rabindranath Tagore</a></th>
                          <td class="align-middle white-space-nowrap email">Rabindra@gmail.com</td>
                          <td class="align-middle white-space-nowrap product">Apple iPhone XR (64GB)</td>
                          <td class="align-middle text-center fs-0 white-space-nowrap payment"><span class="badge badge rounded-pill badge-soft-secondary">Blocked<span class="ms-1 fas fa-ban" data-fa-transform="shrink-2"></span></span>
                          </td>
                          <td class="align-middle text-end amount">$999</td>
                          <td class="align-middle white-space-nowrap text-end">
                            <div class="dropstart font-sans-serif position-static d-inline-block">
                              <button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal float-end" type="button" id="dropdown11" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--1"></span></button>
                              <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="dropdown11"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item" href="#!">Refund</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item text-warning" href="#!">Archive</a><a class="dropdown-item text-danger" href="#!">Delete</a>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr class="btn-reveal-trigger">
                          <td class="align-middle" style="width: 28px;">
                            <div class="form-check mb-0">
                              <input class="form-check-input" type="checkbox" id="recent-purchase-12" data-bulk-select-row="data-bulk-select-row" />
                            </div>
                          </td>
                          <th class="align-middle white-space-nowrap name"><a href="../app/e-commerce/customer-details.html">Anila Wilde</a></th>
                          <td class="align-middle white-space-nowrap email">anila@yahoo.com</td>
                          <td class="align-middle white-space-nowrap product">All-New Fire HD 8 Kids Edition Tablet</td>
                          <td class="align-middle text-center fs-0 white-space-nowrap payment"><span class="badge badge rounded-pill badge-soft-warning">Pending<span class="ms-1 fas fa-stream" data-fa-transform="shrink-2"></span></span>
                          </td>
                          <td class="align-middle text-end amount">$199</td>
                          <td class="align-middle white-space-nowrap text-end">
                            <div class="dropstart font-sans-serif position-static d-inline-block">
                              <button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal float-end" type="button" id="dropdown12" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--1"></span></button>
                              <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="dropdown12"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item" href="#!">Refund</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item text-warning" href="#!">Archive</a><a class="dropdown-item text-danger" href="#!">Delete</a>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr class="btn-reveal-trigger">
                          <td class="align-middle" style="width: 28px;">
                            <div class="form-check mb-0">
                              <input class="form-check-input" type="checkbox" id="recent-purchase-13" data-bulk-select-row="data-bulk-select-row" />
                            </div>
                          </td>
                          <th class="align-middle white-space-nowrap name"><a href="../app/e-commerce/customer-details.html">Jack Watson </a></th>
                          <td class="align-middle white-space-nowrap email">Jack@gmail.com</td>
                          <td class="align-middle white-space-nowrap product">Apple iPhone XR (64GB)</td>
                          <td class="align-middle text-center fs-0 white-space-nowrap payment"><span class="badge badge rounded-pill badge-soft-secondary">Blocked<span class="ms-1 fas fa-ban" data-fa-transform="shrink-2"></span></span>
                          </td>
                          <td class="align-middle text-end amount">$999</td>
                          <td class="align-middle white-space-nowrap text-end">
                            <div class="dropstart font-sans-serif position-static d-inline-block">
                              <button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal float-end" type="button" id="dropdown13" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--1"></span></button>
                              <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="dropdown13"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item" href="#!">Refund</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item text-warning" href="#!">Archive</a><a class="dropdown-item text-danger" href="#!">Delete</a>
                              </div>
                            </div>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="card-footer">
                  <div class="row align-items-center">
                    <div class="pagination d-none"></div>
                    <div class="col">
                      <p class="mb-0 fs--1"><span class="d-none d-sm-inline-block me-2" data-list-info="data-list-info"> </span>
                      </p>
                    </div>
                    <div class="col-auto d-flex">
                      <button class="btn btn-sm btn-primary" type="button" data-list-pagination="prev"><span>Previous</span></button>
                      <button class="btn btn-sm btn-primary px-4 ms-2" type="button" data-list-pagination="next"><span>Next</span></button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xxl-4 col-md-6">
              <div class="card h-100">
                <div class="card-header bg-light">
                  <div class="row justify-content-between">
                    <div class="col-auto">
                      <h6>Returning Customer Rate</h6>
                      <div class="d-flex align-items-center">
                        <h4 class="text-primary mb-0">$59.09%</h4><span class="badge rounded-pill ms-3 badge-soft-primary"><span class="fas fa-caret-up"></span> 3.5%</span>
                      </div>
                    </div>
                    <div class="col-auto">
                      <select class="form-select form-select-sm pe-4" id="select-returning-customer-month">
                        <option value="0">Jan</option>
                        <option value="1">Feb</option>
                        <option value="2">Mar</option>
                        <option value="3">Apr</option>
                        <option value="4">May</option>
                        <option value="5">Jun</option>
                        <option value="6">Jul</option>
                        <option value="7">Aug</option>
                        <option value="8">Sep</option>
                        <option value="9">Oct</option>
                        <option value="10">Nov</option>
                        <option value="11">Dec</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <!-- Find the JS file for the following chart at: src/js/charts/echarts/returning-customer-rate.js-->
                  <!-- If you are not using gulp based workflow, you can find the transpiled code at: public/assets/js/theme.js-->
                  <div class="echart-line-returning-customer-rate h-100" data-echart-responsive="true" data-options='{"target":"returning-customer-rate-footer","monthSelect":"select-returning-customer-month","optionOne":"newMonth","optionTwo":"returningMonth"}'></div>
                </div>
                <div class="card-footer border-top py-2">
                  <div class="row align-items-center gx-0" id="returning-customer-rate-footer">
                    <div class="col-auto me-2">
                      <div class="btn btn-sm btn-text d-flex align-items-center p-0 shadow-none" id="newMonth"><span class="fas fa-circle text-primary fs--2 me-1"></span>New </div>
                    </div>
                    <div class="col-auto">
                      <div class="btn btn-sm btn-text d-flex align-items-center p-0 shadow-none" id="returningMonth"><span class="fas fa-circle text-warning fs--2 me-1"></span>Returning </div>
                    </div>
                    <div class="col text-end"><a class="btn btn-link btn-sm px-0 fw-medium" href="#!">View report <span class="fas fa-chevron-right ms-1 fs--2"></span></a></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xxl-4 col-md-6">
              <div class="card h-100">
                <div class="card-header bg-light py-2">
                  <div class="d-flex flex-between-center">
                    <h6 class="mb-0">Sales by POS location </h6><a class="btn btn-link btn-sm px-0" href="#!">View Details<span class="fas fa-chevron-right ms-1 fs--2"></span></a>
                  </div>
                </div>
                <div class="card-body px-0 pt-4 pb-0">
                  <table class="table table-borderless font-sans-serif fw-medium fs--1">
                    <tbody>
                      <tr>
                        <td class="pb-2 pt-0"> <span class="fas fa-circle fs--2 me-1 text-primary"></span>Allocated Budget</td>
                        <td class="pb-2 pt-0 text-end">$13,325.98</td>
                        <td class="pb-2 pt-0 text-end"><span class="me-1 fas fa-caret-up text-success"></span>10%</td>
                      </tr>
                      <tr>
                        <td class="pb-2 pt-0"> <span class="fas fa-circle fs--2 me-1 text-warning"></span>Actual Spending</td>
                        <td class="pb-2 pt-0 text-end">$12,348.46</td>
                        <td class="pb-2 pt-0 text-end"><span class="me-1 fas fa-caret-down text-success"></span>13%</td>
                      </tr>
                    </tbody>
                  </table>
                  <!-- Find the JS file for the following chart at: src/js/charts/echarts/sales-by-pos-location.js-->
                  <!-- If you are not using gulp based workflow, you can find the transpiled code at: public/assets/js/theme.js-->
                  <div class="echart-radar-sales-by-pos-location h-100 px-md-2 mt-md-5" data-echart-responsive="true"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <div class="card h-lg-100 overflow-hidden">
                <div class="card-body p-0">
                  <div class="table-responsive scrollbar">
                    <table class="table table-dashboard mb-0 table-borderless fs--1 border-200">
                      <thead class="bg-light">
                        <tr class="text-900">
                          <th>Best Selling Products</th>
                          <th class="text-center">Orders(269)</th>
                          <th class="text-center">Order(%)</th>
                          <th class="text-end">Revenue</th>
                          <th class="pe-card text-end" style="width: 8rem">Revenue (%)</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr class="border-bottom border-200">
                          <td>
                            <div class="d-flex align-items-center position-relative"><img class="rounded-1 border border-200" src="../assets/img/ecommerce/1.jpg" width="60" alt="" />
                              <div class="flex-1 ms-3">
                                <h6 class="mb-1 fw-semi-bold text-nowrap"><a class="text-900 stretched-link" href="#!">iPad Pro 2020 11</a></h6>
                                <p class="fw-semi-bold mb-0 text-500">Tablet</p>
                              </div>
                            </div>
                          </td>
                          <td class="align-middle text-center fw-semi-bold">26</td>
                          <td class="align-middle text-center fw-semi-bold">$31%</td>
                          <td class="align-middle text-end fw-semi-bold">$1311</td>
                          <td class="align-middle pe-card">
                            <div class="d-flex align-items-center">
                              <div class="progress me-3 rounded-3 bg-200" style="height: 5px;width:80px">
                                <div class="progress-bar bg-primary rounded-pill" role="progressbar" style="width: 41%;" aria-valuenow="41" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                              <div class="fw-semi-bold ms-2">41%</div>
                            </div>
                          </td>
                        </tr>
                        <tr class="border-bottom border-200">
                          <td>
                            <div class="d-flex align-items-center position-relative"><img class="rounded-1 border border-200" src="../assets/img/ecommerce/2.jpg" width="60" alt="" />
                              <div class="flex-1 ms-3">
                                <h6 class="mb-1 fw-semi-bold text-nowrap"><a class="text-900 stretched-link" href="#!">iPhone XS</a></h6>
                                <p class="fw-semi-bold mb-0 text-500">Smartphone</p>
                              </div>
                            </div>
                          </td>
                          <td class="align-middle text-center fw-semi-bold">18</td>
                          <td class="align-middle text-center fw-semi-bold">$29%</td>
                          <td class="align-middle text-end fw-semi-bold">$1311</td>
                          <td class="align-middle pe-card">
                            <div class="d-flex align-items-center">
                              <div class="progress me-3 rounded-3 bg-200" style="height: 5px;width:80px">
                                <div class="progress-bar bg-primary rounded-pill" role="progressbar" style="width: 41%;" aria-valuenow="41" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                              <div class="fw-semi-bold ms-2">41%</div>
                            </div>
                          </td>
                        </tr>
                        <tr class="border-bottom border-200">
                          <td>
                            <div class="d-flex align-items-center position-relative"><img class="rounded-1 border border-200" src="../assets/img/ecommerce/3.jpg" width="60" alt="" />
                              <div class="flex-1 ms-3">
                                <h6 class="mb-1 fw-semi-bold text-nowrap"><a class="text-900 stretched-link" href="#!">Amazfit Pace (Global)</a></h6>
                                <p class="fw-semi-bold mb-0 text-500">Smartwatch</p>
                              </div>
                            </div>
                          </td>
                          <td class="align-middle text-center fw-semi-bold">16</td>
                          <td class="align-middle text-center fw-semi-bold">$27%</td>
                          <td class="align-middle text-end fw-semi-bold">$539</td>
                          <td class="align-middle pe-card">
                            <div class="d-flex align-items-center">
                              <div class="progress me-3 rounded-3 bg-200" style="height: 5px;width:80px">
                                <div class="progress-bar bg-primary rounded-pill" role="progressbar" style="width: 27%;" aria-valuenow="27" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                              <div class="fw-semi-bold ms-2">27%</div>
                            </div>
                          </td>
                        </tr>
                        <tr class="border-bottom border-200">
                          <td>
                            <div class="d-flex align-items-center position-relative"><img class="rounded-1 border border-200" src="../assets/img/ecommerce/4.jpg" width="60" alt="" />
                              <div class="flex-1 ms-3">
                                <h6 class="mb-1 fw-semi-bold text-nowrap"><a class="text-900 stretched-link" href="#!">Lotto AMF Posh Sports Plus</a></h6>
                                <p class="fw-semi-bold mb-0 text-500">Shoes</p>
                              </div>
                            </div>
                          </td>
                          <td class="align-middle text-center fw-semi-bold">11</td>
                          <td class="align-middle text-center fw-semi-bold">$21%</td>
                          <td class="align-middle text-end fw-semi-bold">$245</td>
                          <td class="align-middle pe-card">
                            <div class="d-flex align-items-center">
                              <div class="progress me-3 rounded-3 bg-200" style="height: 5px;width:80px">
                                <div class="progress-bar bg-primary rounded-pill" role="progressbar" style="width: 17%;" aria-valuenow="17" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                              <div class="fw-semi-bold ms-2">17%</div>
                            </div>
                          </td>
                        </tr>
                        <tr class="border-bottom border-200">
                          <td>
                            <div class="d-flex align-items-center position-relative"><img class="rounded-1 border border-200" src="../assets/img/ecommerce/5.jpg" width="60" alt="" />
                              <div class="flex-1 ms-3">
                                <h6 class="mb-1 fw-semi-bold text-nowrap"><a class="text-900 stretched-link" href="#!">Casual Long Sleeve Hoodie</a></h6>
                                <p class="fw-semi-bold mb-0 text-500">Jacket</p>
                              </div>
                            </div>
                          </td>
                          <td class="align-middle text-center fw-semi-bold">10</td>
                          <td class="align-middle text-center fw-semi-bold">$19%</td>
                          <td class="align-middle text-end fw-semi-bold">$234</td>
                          <td class="align-middle pe-card">
                            <div class="d-flex align-items-center">
                              <div class="progress me-3 rounded-3 bg-200" style="height: 5px;width:80px">
                                <div class="progress-bar bg-primary rounded-pill" role="progressbar" style="width: 7%;" aria-valuenow="7" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                              <div class="fw-semi-bold ms-2">7%</div>
                            </div>
                          </td>
                        </tr>
                        <tr class="border-bottom border-200">
                          <td>
                            <div class="d-flex align-items-center position-relative"><img class="rounded-1 border border-200" src="../assets/img/ecommerce/6.jpg" width="60" alt="" />
                              <div class="flex-1 ms-3">
                                <h6 class="mb-1 fw-semi-bold text-nowrap"><a class="text-900 stretched-link" href="#!">Playstation 4 1TB Slim</a></h6>
                                <p class="fw-semi-bold mb-0 text-500">Console</p>
                              </div>
                            </div>
                          </td>
                          <td class="align-middle text-center fw-semi-bold">10</td>
                          <td class="align-middle text-center fw-semi-bold">$19%</td>
                          <td class="align-middle text-end fw-semi-bold">$234</td>
                          <td class="align-middle pe-card">
                            <div class="d-flex align-items-center">
                              <div class="progress me-3 rounded-3 bg-200" style="height: 5px;width:80px">
                                <div class="progress-bar bg-primary rounded-pill" role="progressbar" style="width: 7%;" aria-valuenow="7" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                              <div class="fw-semi-bold ms-2">7%</div>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="d-flex align-items-center position-relative"><img class="rounded-1 border border-200" src="../assets/img/ecommerce/7.jpg" width="60" alt="" />
                              <div class="flex-1 ms-3">
                                <h6 class="mb-1 fw-semi-bold text-nowrap"><a class="text-900 stretched-link" href="#!">SUNGAIT Lightweight Sunglass</a></h6>
                                <p class="fw-semi-bold mb-0 text-500">Jacket</p>
                              </div>
                            </div>
                          </td>
                          <td class="align-middle text-center fw-semi-bold">10</td>
                          <td class="align-middle text-center fw-semi-bold">$19%</td>
                          <td class="align-middle text-end fw-semi-bold">$234</td>
                          <td class="align-middle pe-card">
                            <div class="d-flex align-items-center">
                              <div class="progress me-3 rounded-3 bg-200" style="height: 5px;width:80px">
                                <div class="progress-bar bg-primary rounded-pill" role="progressbar" style="width: 7%;" aria-valuenow="7" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                              <div class="fw-semi-bold ms-2">7%</div>
                            </div>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="card-footer bg-light py-2">
                  <div class="row flex-between-center">
                    <div class="col-auto">
                      <select class="form-select form-select-sm">
                        <option>Last 7 days</option>
                        <option>Last Month</option>
                        <option>Last Year</option>
                      </select>
                    </div>
                    <div class="col-auto"><a class="btn btn-sm btn-falcon-default" href="#!">View All</a></div>
                  </div>
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
    <script src="../vendors/countup/countUp.umd.js"></script>
    <script src="../vendors/echarts/echarts.min.js"></script>
    <script src="../vendors/dayjs/dayjs.min.js"></script>
    <script src="../vendors/fontawesome/all.min.js"></script>
    <script src="../vendors/lodash/lodash.min.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="../vendors/list.js/list.min.js"></script>
    <script src="../assets/js/theme.js"></script>

  </body>

</html>