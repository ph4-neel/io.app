<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{ asset('css/entry_soft.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title></title>
</head>

<body>

    <div class="container-fluid px-0">
        <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-fixed">
            <div class="container-fluid d-flex"> <a class="navbar-brand" href="#"></a>
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation"> <a class="nav-link active" id="home-tab"
                            data-toggle="tab" href="#home" role="tab" aria-controls="home"
                            aria-selected="true"></a> </li>
                    <li class="nav-item" role="presentation"> <a class="nav-link" id="profile-tab" data-toggle="tab"
                            href="#profile" role="tab" aria-controls="profile" aria-selected="false"></a> </li>
                    <li class="nav-item" role="presentation"> <a class="nav-link" id="contact-tab" data-toggle="tab"
                            href="#contact" role="tab" aria-controls="contact" aria-selected="false"></a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <div class="container-fluid mt-2 mb-5">
        <div class="products">
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <div class="d-flex justify-content-between p-3 bg-white mb-3 align-items-center"> <span
                            class="font-weight-bold text-uppercase">Softt skills</span>
                        <div> <img src="" width="30" /> <img
                                src="https://img.icons8.com/ios-filled/100/000000/squared-menu.png" width="25" />
                        </div>
                    </div>
                    <div class="row g-3">
                        @foreach ( $skills as $items )



                        <div class="col-md-4">
                            <div class="card"> <img src="{{ asset('images/background_page-0001.jpg') }}" class="card-img-top">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between"> <span class="font-weight-bold">{{$items->title}}</span> <span class="font-weight-bold">$600</span> </div>
                                    <p class="card-text mb-1 mt-1">{{$items->description}}</p>
                                    <div class="d-flex align-items-center flex-row"> <img
                                            src="{{ asset('images/IDL-112.jpg') }}" width="20"> <span
                                            class="guarantee">Preferd by Interviewo</span> </div>
                                </div>
                                <hr>
                                <div class="card-body">
                                    <div class="text-right buttons">
                                         <a href="{{ url('get_data/'.$items->id) }}" class="btn btn-outline-dark">Know More</a>
                                         <button class="btn btn-dark">Courses</button>
                                     </div>
                                </div>
                            </div>
                        </div>

                        @endforeach

                    </div>
                </div>

                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                    <!--Dining-->
                    <div class="d-flex justify-content-between p-3 bg-white mb-3 align-items-center"> <span
                            class="font-weight-bold text-uppercase">Luxury Dining</span>
                        <div> <img src="https://img.icons8.com/windows/100/000000/list.png" width="30" /> <img
                                src="https://img.icons8.com/ios-filled/100/000000/squared-menu.png" width="25" />
                        </div>
                    </div>
                    <div class="row g-3">
                        <div class="col-md-4">
                            <div class="card"> <img src="https://i.imgur.com/hnQ492C.jpg" class="card-img-top">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between"> <span
                                            class="font-weight-bold">Dinning table set-4</span> <span
                                            class="font-weight-bold">$450</span> </div>
                                    <p class="card-text mb-1 mt-1">Some quick example text to build on the card title
                                        and make up the bulk of the card's content.</p>
                                    <div class="d-flex align-items-center flex-row"> <img
                                            src="https://i.imgur.com/e9VnSng.png" width="20"> <span
                                            class="guarantee">4 Years Guarantee</span> </div>
                                </div>
                                <hr>
                                <div class="card-body">
                                    <div class="text-right buttons"> <button class="btn btn-outline-dark">add to
                                            wishlist</button> <button class="btn btn-dark">Add to cart</button> </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card"> <img src="https://i.imgur.com/10JlX4K.jpg" class="card-img-top">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between"> <span
                                            class="font-weight-bold">Dinning set set-8</span> <span
                                            class="font-weight-bold">$2,000</span> </div>
                                    <p class="card-text mb-1 mt-1">Some quick example text to build on the card title
                                        and make up the bulk of the card's content.</p>
                                    <div class="d-flex align-items-center flex-row"> <img
                                            src="https://i.imgur.com/e9VnSng.png" width="20"> <span
                                            class="guarantee">6 Years Guarantee</span> </div>
                                </div>
                                <hr>
                                <div class="card-body">
                                    <div class="text-right buttons"> <button class="btn btn-outline-dark">add to
                                            wishlist</button> <button class="btn btn-dark">Add to cart</button> </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card"> <img src="https://i.imgur.com/eu74Mje.jpg" class="card-img-top">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between"> <span
                                            class="font-weight-bold">Dinning chairs set-3</span> <span
                                            class="font-weight-bold">$900</span> </div>
                                    <p class="card-text mb-1 mt-1">Some quick example text to build on the card title
                                        and make up the bulk of the card's content.</p>
                                    <div class="d-flex align-items-center flex-row"> <img
                                            src="https://i.imgur.com/e9VnSng.png" width="20"> <span
                                            class="guarantee">4 Years Guarantee</span> </div>
                                </div>
                                <hr>
                                <div class="card-body">
                                    <div class="text-right buttons"> <button class="btn btn-outline-dark">add to
                                            wishlist</button> <button class="btn btn-dark">Add to cart</button> </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card"> <img src="https://i.imgur.com/uh0knIW.jpg" class="card-img-top">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between"> <span
                                            class="font-weight-bold">Dinning table set-10</span> <span
                                            class="font-weight-bold">$3,500</span> </div>
                                    <p class="card-text mb-1 mt-1">Some quick example text to build on the card title
                                        and make up the bulk of the card's content.</p>
                                    <div class="d-flex align-items-center flex-row"> <img
                                            src="https://i.imgur.com/e9VnSng.png" width="20"> <span
                                            class="guarantee">6 Years Guarantee</span> </div>
                                </div>
                                <hr>
                                <div class="card-body">
                                    <div class="text-right buttons"> <button class="btn btn-outline-dark">add to
                                            wishlist</button> <button class="btn btn-dark">Add to cart</button> </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card"> <img src="https://i.imgur.com/rdYgwhr.jpg" class="card-img-top">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between"> <span class="font-weight-bold">Table
                                            chair set-5</span> <span class="font-weight-bold">$250</span> </div>
                                    <p class="card-text mb-1 mt-1">Some quick example text to build on the card title
                                        and make up the bulk of the card's content.</p>
                                    <div class="d-flex align-items-center flex-row"> <img
                                            src="https://i.imgur.com/e9VnSng.png" width="20"> <span
                                            class="guarantee">8 Years Guarantee</span> </div>
                                </div>
                                <hr>
                                <div class="card-body">
                                    <div class="text-right buttons"> <button class="btn btn-outline-dark">add to
                                            wishlist</button> <button class="btn btn-dark">Add to cart</button> </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card"> <img src="https://i.imgur.com/x6hhqGn.jpg" class="card-img-top">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between"> <span class="font-weight-bold">Luxury
                                            Dinning set-7</span> <span class="font-weight-bold">$750</span> </div>
                                    <p class="card-text mb-1 mt-1">Some quick example text to build on the card title
                                        and make up the bulk of the card's content.</p>
                                    <div class="d-flex align-items-center flex-row"> <img
                                            src="https://i.imgur.com/e9VnSng.png" width="20"> <span
                                            class="guarantee">6 Years Guarantee</span> </div>
                                </div>
                                <hr>
                                <div class="card-body">
                                    <div class="text-right buttons"> <button class="btn btn-outline-dark">add to
                                            wishlist</button> <button class="btn btn-dark">Add to cart</button> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


        {{-- ----------footer---------- --}}
        <section id="footer">
            <div class="container">
                <div class="row text-center text-xs-center text-sm-left text-md-left">
                    <div class="col-xs-12 col-sm-4 col-md-4">
                        <h5>Quick links</h5>
                        <ul class="list-unstyled quick-links">
                            <li><a href="https://www.fiverr.com/share/qb8D02"><i
                                        class="fa fa-angle-double-right"></i>Home</a></li>
                            <li><a href="https://www.fiverr.com/share/qb8D02"><i
                                        class="fa fa-angle-double-right"></i>About</a></li>
                            <li><a href="https://www.fiverr.com/share/qb8D02"><i
                                        class="fa fa-angle-double-right"></i>FAQ</a></li>
                            <li><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-angle-double-right"></i>Get
                                    Started</a></li>
                            <li><a href="https://www.fiverr.com/share/qb8D02"><i
                                        class="fa fa-angle-double-right"></i>Videos</a></li>
                        </ul>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4">
                        <h5>Quick links</h5>
                        <ul class="list-unstyled quick-links">
                            <li><a href="https://www.fiverr.com/share/qb8D02"><i
                                        class="fa fa-angle-double-right"></i>Home</a></li>
                            <li><a href="https://www.fiverr.com/share/qb8D02"><i
                                        class="fa fa-angle-double-right"></i>About</a></li>
                            <li><a href="https://www.fiverr.com/share/qb8D02"><i
                                        class="fa fa-angle-double-right"></i>FAQ</a></li>
                            <li><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-angle-double-right"></i>Get
                                    Started</a></li>
                            <li><a href="https://www.fiverr.com/share/qb8D02"><i
                                        class="fa fa-angle-double-right"></i>Videos</a></li>
                        </ul>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4">
                        <h5>Quick links</h5>
                        <ul class="list-unstyled quick-links">
                            <li><a href="https://www.fiverr.com/share/qb8D02"><i
                                        class="fa fa-angle-double-right"></i>Home</a></li>
                            <li><a href="https://www.fiverr.com/share/qb8D02"><i
                                        class="fa fa-angle-double-right"></i>About</a></li>
                            <li><a href="https://www.fiverr.com/share/qb8D02"><i
                                        class="fa fa-angle-double-right"></i>FAQ</a></li>
                            <li><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-angle-double-right"></i>Get
                                    Started</a></li>
                            <li><a href="https://wwwe.sunlimetech.com" title="Design and developed by"><i
                                        class="fa fa-angle-double-right"></i>Imprint</a></li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
                        <ul class="list-unstyled list-inline social text-center">
                            <li class="list-inline-item"><a href="https://www.fiverr.com/share/qb8D02"><i
                                        class="fa fa-facebook"></i></a></li>
                            <li class="list-inline-item"><a href="https://www.fiverr.com/share/qb8D02"><i
                                        class="fa fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="https://www.fiverr.com/share/qb8D02"><i
                                        class="fa fa-instagram"></i></a></li>
                            <li class="list-inline-item"><a href="https://www.fiverr.com/share/qb8D02"><i
                                        class="fa fa-google-plus"></i></a></li>
                            <li class="list-inline-item"><a href="https://www.fiverr.com/share/qb8D02" target="_blank"><i
                                        class="fa fa-envelope"></i></a></li>
                        </ul>
                    </div>
                    <hr>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
                        <p><u><a href="https://www.nationaltransaction.com/">National Transaction Corporation</a></u> is a
                            Registered MSP/ISO of Elavon, Inc. Georgia [a wholly owned subsidiary of U.S. Bancorp,
                            Minneapolis, MN]</p>
                        <p class="h6">© All right Reversed.<a class="text-green ml-2"
                                href="https://www.sunlimetech.com" target="_blank">Sunlimetech</a></p>
                    </div>
                    <hr>
                </div>
            </div>
        </section>






    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>

</body>

</html>
