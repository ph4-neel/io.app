<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/Dashboard.css') }}">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Document</title>
</head>

<body>

    <nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                    <!--<img src="logo.png" alt="">-->
                </span>

                <div class="text logo-text">
                    <span class="name">TomTom</span>
                    <span class="profession">New Edge</span>
                </div>
            </div>

            <i class='bx bx-chevron-right toggle'></i>
        </header>

        <div class="menu-bar">
            <div class="menu">

                <li class="search-box">
                    <i class='bx bx-search icon'></i>
                    <input type="text" placeholder="Search...">
                </li>

                <ul class="menu-links">
                    

                    <li class="class='bx bx-home-alt icon'">
                        <a href="{{ asset('Profile') }}">
                            <i class='bx bx-profile icon'></i>
                            <span class="text nav-text">Profile</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-bell icon'></i>
                            <span class="text nav-text">Skills</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-pie-chart-alt icon'></i>
                            <span class="text nav-text">Cources</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-heart icon'></i>
                            <span class="text nav-text">Tech News</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-wallet icon'></i>
                            <span class="text nav-text">Money</span>
                        </a>
                    </li>

                </ul>
            </div>

            <div class="bottom-content">
                <li class="">
                    <a href="#">
                        <i class='bx bx-log-out icon'></i>
                        <span class="text nav-text">Logout</span>
                    </a>
                </li>

                <li class="mode">
                    <div class="sun-moon">
                        <i class='bx bx-moon icon moon'></i>
                        <i class='bx bx-sun icon sun'></i>
                    </div>
                    <span class="mode-text text">Dark mode</span>

                    <div class="toggle-switch">
                        <span class="switch"></span>
                    </div>
                </li>

            </div>
        </div>

    </nav>

    <section class="home">
        @auth


        <div class="text">{{auth()->user()->name}}</div>
        @else

        <div class="text">Dashboard Sidebar</div>

        @endauth


       

        <div class="container">


            <h3 class="mt-3 pb-3 mb-4 font-italic border-bottom">
                Todays Tech News
            </h3>
            <div class="row">
                <div class="col-md-8">
                    <div class="card mb-4 bg-dark text-white shadow">
                        <img class="card-img" src="//placeimg.com/780/270/any" alt="Card image">
                        <div class="card-img-overlay">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in
                                to additional content. This content is a little bit longer.</p>
                            <p class="card-text">Last updated 3 mins ago</p>
                        </div>
                        <button class="btn btn-dark">Read The News</button>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 bg-dark text-white shadow">
                        <img class="card-img" src="//placeimg.com/250/180/any" alt="Card image">
                        <div class="card-img-overlay">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in
                                to additional content. This content is a little bit longer.</p>
                            <p class="card-text">Last updated 3 mins ago</p>
                        </div>
                        <button class="btn btn-dark">Read The News</button>
                    </div>
                </div>
            </div>
            <h3 class="mt-3 pb-3 mb-4 font-italic border-bottom">
                Social Cards
            </h3>
            <div class="row">
                <div class="col-md-3">
                    <div class="card mb-4">
                        <div class="social-card-header align-middle text-center bg-facebook">
                            <i class="fab fa-facebook-square"></i>
                        </div>
                        <div class="card-body text-center">
                            <div class="row">
                                <div class="col border-right">
                                    <i class="far fa-thumbs-up text-facebook"></i>
                                    <span class="text-muted">Like</span>
                                    <div class="font-weight-bold">12K</div>
                                </div>
                                <div class="col">
                                    <i class="fas fa-share-alt text-facebook"></i>
                                    <span class="text-muted">Share</span>
                                    <div class="font-weight-bold">10K</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card mb-4">
                        <div class="social-card-header align-middle text-center bg-google-plus">
                            <i class="fab fa-google-plus-square"></i>
                        </div>
                        <div class="card-body text-center">
                            <div class="row">
                                <div class="col border-right">
                                    <i class="fab fa-google-plus-g text-google-plus"></i>
                                    <span class="text-muted">Like</span>
                                    <div class="font-weight-bold">12K</div>
                                </div>
                                <div class="col">
                                    <i class="fas fa-share-alt text-google-plus"></i>
                                    <span class="text-muted">Share</span>
                                    <div class="font-weight-bold">10K</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card mb-4">
                        <div class="social-card-header align-middle text-center bg-twitter">
                            <i class="fab fa-twitter-square"></i>
                        </div>
                        <div class="card-body text-center">
                            <div class="row">
                                <div class="col border-right">
                                    <i class="fab fa-twitter text-twitter"></i>
                                    <span class="text-muted">Tweet</span>
                                    <div class="font-weight-bold">12K</div>
                                </div>
                                <div class="col">
                                    <i class="fas fa-share-alt text-twitter"></i>
                                    <span class="text-muted">Share</span>
                                    <div class="font-weight-bold">10K</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card mb-4">
                        <div class="social-card-header align-middle text-center bg-pinterest">
                            <i class="fab fa-pinterest-square"></i>
                        </div>
                        <div class="card-body text-center">
                            <div class="row">
                                <div class="col border-right">
                                    <i class="fab fa-pinterest-p text-pinterest"></i>
                                    <span class="text-muted">Pin</span>
                                    <div class="font-weight-bold">12K</div>
                                </div>
                                <div class="col">
                                    <i class="fas fa-share-alt text-pinterest"></i>
                                    <span class="text-muted">Share</span>
                                    <div class="font-weight-bold">10K</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <h3 class="mt-3 pb-3 mb-4 font-italic border-bottom">
                Skills
            </h3>
            <div class="row">

                <div class="col-md-4">
                    <div class="card shadow">
                        <img class="card-img-top" src="//placeimg.com/280/180/tech" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title border-bottom pb-3">Card title <a href="#"
                                    class="float-right btn btn-sm btn-info d-inline-flex share"><i
                                        class="fas fa-share-alt"></i></a></h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the
                                bulk of the card's content.</p>
                            <a href="#" class="btn btn-sm btn-info float-right">Read more <i
                                    class="fas fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card bg-light">
                        <img class="card-img-top" src="//placeimg.com/280/180/tech" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title border-bottom pb-3">Card title <a href="#"
                                    class="float-right btn btn-sm btn-info d-inline-flex share"><i
                                        class="fas fa-share-alt"></i></a></h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the
                                bulk of the card's content.</p>
                            <a href="#" class="btn btn-sm btn-info float-right">Read more <i
                                    class="fas fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <hr>

        </div>

        {{-- <div class="container">
            <div class="text">Exclusince Skills
                <hr/ style="width: 30%;">
            </div>

            <div class="row py-4">
                <div class="col-md-4">
                    <div class="card" style="width: 18rem;">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card" style="width: 18rem;">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card" style="width: 18rem;">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="row py-4">

                    <div class="col-md-4">
                        <button class="btn btn-dark">See More</button>
                    </div>

                </div>

            </div>


        </div> --}}



    </section>


    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>

    <script>
        const body = document.querySelector('body'),
            sidebar = body.querySelector('nav'),
            toggle = body.querySelector(".toggle"),
            searchBtn = body.querySelector(".search-box"),
            modeSwitch = body.querySelector(".toggle-switch"),
            modeText = body.querySelector(".mode-text");


        toggle.addEventListener("click", () => {
            sidebar.classList.toggle("close");
        })

        searchBtn.addEventListener("click", () => {
            sidebar.classList.remove("close");
        })

        modeSwitch.addEventListener("click", () => {
            body.classList.toggle("dark");

            if (body.classList.contains("dark")) {
                modeText.innerText = "Light mode";
            } else {
                modeText.innerText = "Dark mode";

            }
        });
    </script>

</body>

</html>
