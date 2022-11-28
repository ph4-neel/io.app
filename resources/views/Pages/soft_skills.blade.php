<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>InterviewO.App-Blog Details</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->


    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('css/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/swiper-bundle.min.css') }}" rel="stylesheet">


    <!-- Template Main CSS File -->
    <link href="{{ asset('css/blog_details.css') }}" rel="stylesheet">


 


    <!-- =======================================================
  * Template Name: Impact - v1.1.1
  * Template URL: https://bootstrapmade.com/impact-bootstrap-business-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <section id="topbar" class="topbar d-flex align-items-center">
        <div class="container d-flex justify-content-center justify-content-md-between">
            <div class="contact-info d-flex align-items-center">
                <i class="bi bi-envelope d-flex align-items-center"><a
                        href="mailto:contact@example.com">contact@example.com</a></i>
                <i class="bi bi-phone d-flex align-items-center ms-4"><span>+1 5589 55488 55</span></i>
            </div>
            <div class="social-links d-none d-md-flex align-items-center">
                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
            </div>
        </div>
    </section><!-- End Top Bar -->

    <header id="header" class="header d-flex align-items-center">

        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
            <a href="index.html" class="logo d-flex align-items-center">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <!-- <img src="assets/img/logo.png" alt=""> -->
                <h1><a href="{{ asset('/') }}">InterviewO.</a></h1>
            </a>
            {{-- <nav id="navbar" class="navbar">
        <ul>
          <li><a href="{{url('/')}}">Home</a></li>
          <li class="dropdown"><span>Courses</span> <i class="bi bi-chevron-down dropdown-indicator"></i>
                        <ul>
                            <li><a href="{{ url('/blog_details') }}">Top Courses</a></li>
                            <li><a href="{{ url('/blog_details') }}">Free Courses</a></li>

                          
                        </ul>
                    </li>

         <li><a href="{{url('/')}}">Contact</a></li>
         <li><a href="{{url('/')}}">Welcome</a></li>
          

          {{-- <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li> --}}

            </ul>
            {{-- </nav> --}}
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="{{ url('/') }}">Home</a></li>

                    <li class="dropdown"><a href="#"><span>Courses 🡣 </span></a>
                        <ul>
                            <li><a href="{{ url('/blog_details') }}">Top Courses</a></li>
                            <li><a href="{{ url('/blog_details') }}">Free Courses</a></li>
                            {{-- <li><a href="{{ url('/blog_details') }}">Enterprise Login</a></li> --}}

                            {{-- <li><a href="#">Company Login</a></li>
                    <li><a href="#">Universities Login</a></li> --}}
                        </ul>
                    </li>

                    <li><a href="#contact">Contact</a></li>
                    <li><a href="#contact">Welcome</a></li>








                </ul>
            </nav>


            <!-- .navbar -->

            <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
            <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

        </div>
    </header><!-- End Header -->
    <!-- End Header -->

    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs">
            <div class="page-header d-flex align-items-center" style="background-image: url('');">
                <div class="container position-relative">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-6 text-center">
                            <h2>Skills Details</h2>
                            <p>Odio et unde deleniti. Deserunt numquam exercitationem. Officiis quo odio sint voluptas
                                consequatur ut a odio voluptatem. Sit dolorum debitis veritatis natus dolores. Quasi
                                ratione sint. Sit quaerat ipsum dolorem.</p>
                        </div>
                    </div>
                </div>
            </div>
            <nav>
                <div class="container">

                    <section id="recent-posts" class="recent-posts sections-bg">
                        <div class="container" data-aos="fade-up">

                            <div class="section-header">
                                <h2>Our Trending Courses</h2>
                                <p>Consequatur libero assumenda est voluptatem est quidem illum et officia imilique qui
                                    vel
                                    architecto accusamus fugit aut qui distinctio</p>
                            </div>

                            <div class="row gy-4">

                                <div class="col-xl-4 col-md-6">
                                    <article>

                                        <div class="post-img">
                                            <img src="{{ asset('images/blog/blog-1.jpg') }}" alt=""
                                                class="img-fluid">
                                        </div>

                                        <p class="post-category">Politics</p>

                                        <h2 class="title">
                                            <a href="{{ url('/blog_details') }}">Dolorum optio tempore voluptas
                                                dignissimos</a>
                                        </h2>

                                        <div class="d-flex align-items-center">
                                            <img src="{{ asset('images/blog/blog-author.jpg') }}" alt=""
                                                class="img-fluid post-author-img flex-shrink-0">
                                            <div class="post-meta">
                                                <p class="post-author">Maria Doe</p>
                                                <p class="post-date">
                                                    <time datetime="2022-01-01">Jan 1, 2022</time>
                                                </p>
                                            </div>
                                        </div>

                                    </article>
                                </div><!-- End post list item -->

                                <div class="col-xl-4 col-md-6">
                                    <article>

                                        <div class="post-img">
                                            <img src="{{ asset('images/blog/blog-2.jpg') }}" alt=""
                                                class="img-fluid">
                                        </div>

                                        <p class="post-category">Sports</p>

                                        <h2 class="title">
                                            <a href="{{ url('/blog_details') }}">Nisi magni odit consequatur autem
                                                nulla
                                                dolorem</a>
                                        </h2>

                                        <div class="d-flex align-items-center">
                                            <img src="{{ asset('images/blog/blog-author-2.jpg') }}" alt=""
                                                class="img-fluid post-author-img flex-shrink-0">
                                            <div class="post-meta">
                                                <p class="post-author">Allisa Mayer</p>
                                                <p class="post-date">
                                                    <time datetime="2022-01-01">Jun 5, 2022</time>
                                                </p>
                                            </div>
                                        </div>

                                    </article>
                                </div><!-- End post list item -->

                                <div class="col-xl-4 col-md-6">
                                    <article>

                                        <div class="post-img">
                                            <img src="{{ asset('images/blog/blog-3.jpg') }}" alt=""
                                                class="img-fluid">
                                        </div>

                                        <p class="post-category">Entertainment</p>

                                        <h2 class="title">
                                            <a href="{{ url('/blog_details') }}">Possimus soluta ut id suscipit ea ut
                                                in quo quia
                                                et
                                                soluta</a>
                                        </h2>

                                        <div class="d-flex align-items-center">
                                            <img src="{{ asset('images/blog/blog-author-3.jpg') }}" alt=""
                                                class="img-fluid post-author-img flex-shrink-0">
                                            <div class="post-meta">
                                                <p class="post-author">Mark Dower</p>
                                                <p class="post-date">
                                                    <time datetime="2022-01-01">Jun 22, 2022</time>
                                                </p>
                                            </div>
                                        </div>

                                    </article>
                                </div><!-- End post list item -->

                            </div>

                            <div class="row gy-4">

                                <div class="col-xl-4 col-md-6">
                                    <article>

                                        <div class="post-img">
                                            <img src="{{ asset('images/blog/blog-1.jpg') }}" alt=""
                                                class="img-fluid">
                                        </div>

                                        <p class="post-category">Politics</p>

                                        <h2 class="title">
                                            <a href="{{ url('/blog_details') }}">Dolorum optio tempore voluptas
                                                dignissimos</a>
                                        </h2>

                                        <div class="d-flex align-items-center">
                                            <img src="{{ asset('images/blog/blog-author.jpg') }}" alt=""
                                                class="img-fluid post-author-img flex-shrink-0">
                                            <div class="post-meta">
                                                <p class="post-author">Maria Doe</p>
                                                <p class="post-date">
                                                    <time datetime="2022-01-01">Jan 1, 2022</time>
                                                </p>
                                            </div>
                                        </div>

                                    </article>
                                </div><!-- End post list item -->

                                <div class="col-xl-4 col-md-6">
                                    <article>

                                        <div class="post-img">
                                            <img src="{{ asset('images/blog/blog-2.jpg') }}" alt=""
                                                class="img-fluid">
                                        </div>

                                        <p class="post-category">Sports</p>

                                        <h2 class="title">
                                            <a href="{{ url('/blog_details') }}">Nisi magni odit consequatur autem
                                                nulla
                                                dolorem</a>
                                        </h2>

                                        <div class="d-flex align-items-center">
                                            <img src="{{ asset('images/blog/blog-author-2.jpg') }}" alt=""
                                                class="img-fluid post-author-img flex-shrink-0">
                                            <div class="post-meta">
                                                <p class="post-author">Allisa Mayer</p>
                                                <p class="post-date">
                                                    <time datetime="2022-01-01">Jun 5, 2022</time>
                                                </p>
                                            </div>
                                        </div>

                                    </article>
                                </div><!-- End post list item -->

                                <div class="col-xl-4 col-md-6">
                                    <article>

                                        <div class="post-img">
                                            <img src="{{ asset('images/blog/blog-3.jpg') }}" alt=""
                                                class="img-fluid">
                                        </div>

                                        <p class="post-category">Entertainment</p>

                                        <h2 class="title">
                                            <a href="{{ url('/blog_details') }}">Possimus soluta ut id suscipit ea ut
                                                in quo quia
                                                et
                                                soluta</a>
                                        </h2>

                                        <div class="d-flex align-items-center">
                                            <img src="{{ asset('images/blog/blog-author-3.jpg') }}" alt=""
                                                class="img-fluid post-author-img flex-shrink-0">
                                            <div class="post-meta">
                                                <p class="post-author">Mark Dower</p>
                                                <p class="post-date">
                                                    <time datetime="2022-01-01">Jun 22, 2022</time>
                                                </p>
                                            </div>
                                        </div>

                                    </article>
                                </div><!-- End post list item -->

                            </div>

                            <div class="row gy-4">

                                <div class="col-xl-4 col-md-6">
                                    <article>

                                        <div class="post-img">
                                            <img src="{{ asset('images/blog/blog-1.jpg') }}" alt=""
                                                class="img-fluid">
                                        </div>

                                        <p class="post-category">Politics</p>

                                        <h2 class="title">
                                            <a href="{{ url('/blog_details') }}">Dolorum optio tempore voluptas
                                                dignissimos</a>
                                        </h2>

                                        <div class="d-flex align-items-center">
                                            <img src="{{ asset('images/blog/blog-author.jpg') }}" alt=""
                                                class="img-fluid post-author-img flex-shrink-0">
                                            <div class="post-meta">
                                                <p class="post-author">Maria Doe</p>
                                                <p class="post-date">
                                                    <time datetime="2022-01-01">Jan 1, 2022</time>
                                                </p>
                                            </div>
                                        </div>

                                    </article>
                                </div><!-- End post list item -->

                                <div class="col-xl-4 col-md-6">
                                    <article>

                                        <div class="post-img">
                                            <img src="{{ asset('images/blog/blog-2.jpg') }}" alt=""
                                                class="img-fluid">
                                        </div>

                                        <p class="post-category">Sports</p>

                                        <h2 class="title">
                                            <a href="{{ url('/blog_details') }}">Nisi magni odit consequatur autem
                                                nulla
                                                dolorem</a>
                                        </h2>

                                        <div class="d-flex align-items-center">
                                            <img src="{{ asset('images/blog/blog-author-2.jpg') }}" alt=""
                                                class="img-fluid post-author-img flex-shrink-0">
                                            <div class="post-meta">
                                                <p class="post-author">Allisa Mayer</p>
                                                <p class="post-date">
                                                    <time datetime="2022-01-01">Jun 5, 2022</time>
                                                </p>
                                            </div>
                                        </div>

                                    </article>
                                </div><!-- End post list item -->

                                <div class="col-xl-4 col-md-6">
                                    <article>

                                        <div class="post-img">
                                            <img src="{{ asset('images/blog/blog-3.jpg') }}" alt=""
                                                class="img-fluid">
                                        </div>

                                        <p class="post-category">Entertainment</p>

                                        <h2 class="title">
                                            <a href="{{ url('/blog_details') }}">Possimus soluta ut id suscipit ea ut
                                                in quo quia
                                                et
                                                soluta</a>
                                        </h2>

                                        <div class="d-flex align-items-center">
                                            <img src="{{ asset('images/blog/blog-author-3.jpg') }}" alt=""
                                                class="img-fluid post-author-img flex-shrink-0">
                                            <div class="post-meta">
                                                <p class="post-author">Mark Dower</p>
                                                <p class="post-date">
                                                    <time datetime="2022-01-01">Jun 22, 2022</time>
                                                </p>
                                            </div>
                                        </div>

                                    </article>
                                </div><!-- End post list item -->

                            </div>

                            <div class="row gy-4">

                                <div class="col-xl-4 col-md-6">
                                    <article>

                                        <div class="post-img">
                                            <img src="{{ asset('images/blog/blog-1.jpg') }}" alt=""
                                                class="img-fluid">
                                        </div>

                                        <p class="post-category">Politics</p>

                                        <h2 class="title">
                                            <a href="{{ url('/blog_details') }}">Dolorum optio tempore voluptas
                                                dignissimos</a>
                                        </h2>

                                        <div class="d-flex align-items-center">
                                            <img src="{{ asset('images/blog/blog-author.jpg') }}" alt=""
                                                class="img-fluid post-author-img flex-shrink-0">
                                            <div class="post-meta">
                                                <p class="post-author">Maria Doe</p>
                                                <p class="post-date">
                                                    <time datetime="2022-01-01">Jan 1, 2022</time>
                                                </p>
                                            </div>
                                        </div>

                                    </article>
                                </div><!-- End post list item -->

                                <div class="col-xl-4 col-md-6">
                                    <article>

                                        <div class="post-img">
                                            <img src="{{ asset('images/blog/blog-2.jpg') }}" alt=""
                                                class="img-fluid">
                                        </div>

                                        <p class="post-category">Sports</p>

                                        <h2 class="title">
                                            <a href="{{ url('/blog_details') }}">Nisi magni odit consequatur autem
                                                nulla
                                                dolorem</a>
                                        </h2>

                                        <div class="d-flex align-items-center">
                                            <img src="{{ asset('images/blog/blog-author-2.jpg') }}" alt=""
                                                class="img-fluid post-author-img flex-shrink-0">
                                            <div class="post-meta">
                                                <p class="post-author">Allisa Mayer</p>
                                                <p class="post-date">
                                                    <time datetime="2022-01-01">Jun 5, 2022</time>
                                                </p>
                                            </div>
                                        </div>

                                    </article>
                                </div><!-- End post list item -->

                                <div class="col-xl-4 col-md-6">
                                    <article>

                                        <div class="post-img">
                                            <img src="{{ asset('images/blog/blog-3.jpg') }}" alt=""
                                                class="img-fluid">
                                        </div>

                                        <p class="post-category">Entertainment</p>

                                        <h2 class="title">
                                            <a href="{{ url('/blog_details') }}">Possimus soluta ut id suscipit ea ut
                                                in quo quia
                                                et
                                                soluta</a>
                                        </h2>

                                        <div class="d-flex align-items-center">
                                            <img src="{{ asset('images/blog/blog-author-3.jpg') }}" alt=""
                                                class="img-fluid post-author-img flex-shrink-0">
                                            <div class="post-meta">
                                                <p class="post-author">Mark Dower</p>
                                                <p class="post-date">
                                                    <time datetime="2022-01-01">Jun 22, 2022</time>
                                                </p>
                                            </div>
                                        </div>

                                    </article>
                                </div><!-- End post list item -->

                            </div>

                            <!-- End recent posts list -->

                        </div>
                    </section>

                </div>
            </nav>
        </div><!-- End Breadcrumbs -->

        <!-- ======= Skills Details Section ======= -->
        <!-- End Blog Details Section -->

    </main><!-- End #main -->

    <section id="faq" class="faq">
        <div class="container" data-aos="fade-up">

            <div class="row gy-4">

                <div class="col-lg-4">
                    <div class="content px-xl-5">
                        <h3>Frequently Asked <strong>Questions</strong></h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
                        </p>
                    </div>
                </div>

                <div class="col-lg-8">

                    <div class="accordion accordion-flush" id="faqlist" data-aos="fade-up" data-aos-delay="100">

                        <div class="accordion-item">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq-content-1">
                                    <span class="num">1.</span>
                                    Non consectetur a erat nam at lectus urna duis?
                                </button>
                            </h3>
                            <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                <div class="accordion-body">
                                    Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus
                                    laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor
                                    rhoncus dolor purus non.
                                </div>
                            </div>
                        </div><!-- # Faq item-->

                        <div class="accordion-item">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq-content-2">
                                    <span class="num">2.</span>
                                    Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque?
                                </button>
                            </h3>
                            <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                <div class="accordion-body">
                                    Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id
                                    interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus
                                    scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim.
                                    Mauris ultrices eros in cursus turpis massa tincidunt dui.
                                </div>
                            </div>
                        </div><!-- # Faq item-->

                        <div class="accordion-item">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq-content-3">
                                    <span class="num">3.</span>
                                    Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi?
                                </button>
                            </h3>
                            <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                <div class="accordion-body">
                                    Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci.
                                    Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl
                                    suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis
                                    convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                                </div>
                            </div>
                        </div><!-- # Faq item-->

                        <div class="accordion-item">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq-content-4">
                                    <span class="num">4.</span>
                                    Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla?
                                </button>
                            </h3>
                            <div id="faq-content-4" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                <div class="accordion-body">
                                    Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id
                                    interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus
                                    scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim.
                                    Mauris ultrices eros in cursus turpis massa tincidunt dui.
                                </div>
                            </div>
                        </div><!-- # Faq item-->

                        <div class="accordion-item">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq-content-5">
                                    <span class="num">5.</span>
                                    Tempus quam pellentesque nec nam aliquam sem et tortor consequat?
                                </button>
                            </h3>
                            <div id="faq-content-5" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                <div class="accordion-body">
                                    Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim
                                    suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan.
                                    Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit
                                    turpis cursus in
                                </div>
                            </div>
                        </div><!-- # Faq item-->

                    </div>

                </div>
            </div>

        </div>
    </section>

    {{-- <section>

        <style>
        

            .button-view {
              position: absolute;
              top:50%;
              background-color:#0a0a23;
              color: #fff;
              border:none; 
              border-radius:10px; 
              padding:15px;
              min-height:30px; 
              min-width: 120px;
            }
            .button-view {
              background-color: #ffbf00;
            }
                </style>
            
        <div >
            <button type="button-view"><a href="{{url('/')}}">View More</a></button>
            
        </div>

  
    </section> --}}

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">

        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-5 col-md-12 footer-info">
                    <a href="index.html" class="logo d-flex align-items-center">
                        <span>Impact</span>
                    </a>
                    <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita
                        valies darta donna mare fermentum iaculis eu non diam phasellus.</p>
                    <div class="social-links d-flex mt-4">
                        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>

                <div class="col-lg-2 col-6 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Terms of service</a></li>
                        <li><a href="#">Privacy policy</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-6 footer-links">
                    <h4>Our Services</h4>
                    <ul>
                        <li><a href="#">Web Design</a></li>
                        <li><a href="#">Web Development</a></li>
                        <li><a href="#">Product Management</a></li>
                        <li><a href="#">Marketing</a></li>
                        <li><a href="#">Graphic Design</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                    <h4>Contact Us</h4>
                    <p>
                        A108 Adam Street <br>
                        New York, NY 535022<br>
                        United States <br><br>
                        <strong>Phone:</strong> +1 5589 55488 55<br>
                        <strong>Email:</strong> info@example.com<br>
                    </p>

                </div>

            </div>
        </div>

        <div class="container mt-4">
            <div class="copyright">
                &copy; Copyright <strong><span>Impact</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/impact-bootstrap-business-website-template/ -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>

    </footer><!-- End Footer -->
    <!-- End Footer -->

    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <div id="preloader"></div>

    <!-- Vendor JS Files -->


    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('vendor/php-email-form/validate.js') }}"></script>


    <!-- Template Main JS File -->
    <script src="{{ asset('js/main.js') }}"></script>


</body>

</html>
