<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css"
        type="text/css" />

    <link href="https://fonts.googleapis.com/css?family=PT+Sans+Narrow" rel="stylesheet">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>

    <style>
        body {

            /* background:  #8950fc; */
        }

        .accordion-style .card {
            background: transparent;
            box-shadow: none;
            margin-bottom: 15px;
            margin-top: 0 !important;
            border: none;
        }

        .accordion-style .card:last-child {
            margin-bottom: 0;
        }

        .accordion-style .card-header {
            border: 0;
            background: none;
            padding: 0;
            border-bottom: none;
        }

        .accordion-style .btn-link {
            color: #ffffff;
            position: relative;
            background: #15395a;
            border: 1px solid #15395a;
            display: block;
            width: 100%;
            font-size: 18px;
            border-radius: 3px;
            border-bottom-left-radius: 0;
            border-bottom-right-radius: 0;
            text-align: left;
            white-space: normal;
            box-shadow: none;
            padding: 15px 55px;
            text-decoration: none;
        }

        .accordion-style .btn-link:hover {
            text-decoration: none;
        }

        .accordion-style .btn-link.collapsed {
            background: #ffffff;
            border: 1px solid #15395a;
            color: #1e2022;
            border-radius: 3px;
        }

        .accordion-style .btn-link.collapsed:after {
            background: none;
            border-radius: 3px;
            content: "+";
            left: 16px;
            right: inherit;
            font-size: 20px;
            font-weight: 600;
            line-height: 26px;
            height: 26px;
            transform: none;
            width: 26px;
            top: 15px;
            text-align: center;
            background-color: #15395a;
            color: #fff;
        }

        .accordion-style .btn-link:after {
            background: #fff;
            border: none;
            border-radius: 3px;
            content: "-";
            left: 16px;
            right: inherit;
            font-size: 20px;
            font-weight: 600;
            height: 26px;
            line-height: 26px;
            transform: none;
            width: 26px;
            top: 15px;
            position: absolute;
            color: #15395a;
            text-align: center;
        }

        .accordion-style .card-body {
            padding: 20px;
            border-top: none;
            border-bottom-right-radius: 3px;
            border-bottom-left-radius: 3px;
            border-left: 1px solid #15395a;
            border-right: 1px solid #15395a;
            border-bottom: 1px solid #15395a;
        }

        @media screen and (max-width: 767px) {
            .accordion-style .btn-link {
                padding: 15px 40px 15px 55px;
            }
        }

        @media screen and (max-width: 575px) {
            .accordion-style .btn-link {
                padding: 15px 20px 15px 55px;
            }
        }

        .card-style1 {
            box-shadow: 0px 0px 10px 0px rgb(89 75 128 / 9%);
        }

        .border-0 {
            border: 0 !important;
        }

        .card {
            position: relative;
            display: flex;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 1px solid rgba(0, 0, 0, .125);
            border-radius: 0.25rem;
        }

        section {
            padding: 120px 0;
            overflow: hidden;
            background: #fff;
        }

        .mb-2-3,
        .my-2-3 {
            margin-bottom: 2.3rem;
        }

        .section-title {
            font-weight: 600;
            letter-spacing: 2px;
            text-transform: uppercase;
            margin-bottom: 10px;
            position: relative;
            display: inline-block;
        }

        .text-primary {
            color: #ceaa4d !important;
        }
    </style>

    <section class="bg-light"  background=>
        <div class="container" >
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="card card-style1 border-0">
                        <div class="card-body p-4 p-md-5 p-xl-6">
                            <div class="text-center mb-2-3 mb-lg-6">
                                <span class="section-title text-primary">FAQ's</span>
                                <h2 class="h1 mb-0 text-secondary">Frequently Asked Questions</h2>
                            </div>
                            <div id="accordion" class="accordion-style">
                                <div class="card mb-3">
                                    <div class="card-header" id="headingOne">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link" data-bs-toggle="collapse"
                                                data-bs-target="#collapseOne" aria-expanded="true"
                                                aria-controls="collapseOne"><span
                                                    class="text-theme-secondary me-2">Q.</span> Can I book
                                                online?</button>
                                        </h5>
                                    </div>
                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                        data-bs-parent="#accordion">
                                        <div class="card-body">
                                            It is a long established fact that a reader will be distracted by the
                                            readable content of a page when looking at its layout. The point of using
                                            Lorem Ipsum is that it has a more-or-less normal distribution.
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-3">
                                    <div class="card-header" id="headingTwo">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" data-bs-toggle="collapse"
                                                data-bs-target="#collapseTwo" aria-expanded="false"
                                                aria-controls="collapseTwo"><span
                                                    class="text-theme-secondary me-2">Q.</span> How would I plan a golf
                                                trip for my gathering?</button>
                                        </h5>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                        data-bs-parent="#accordion">
                                        <div class="card-body">
                                            There are many variations of passages of Lorem Ipsum available, but the
                                            majority have suffered alteration in some form, by injected humour, or
                                            randomised words which don't look even slightly believable.
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-3">
                                    <div class="card-header" id="headingThree">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" data-bs-toggle="collapse"
                                                data-bs-target="#collapseThree" aria-expanded="false"
                                                aria-controls="collapseThree"><span
                                                    class="text-theme-secondary me-2">Q.</span> What is the dress
                                                code?</button>
                                        </h5>
                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                        data-bs-parent="#accordion">
                                        <div class="card-body">
                                            Many desktop publishing packages and web page editors now use Lorem Ipsum as
                                            their default model text, and a search for 'lorem ipsum' will uncover many
                                            web sites still in their infancy. Various versions have evolved over the
                                            years.
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-3">
                                    <div class="card-header" id="headingFour">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" data-bs-toggle="collapse"
                                                data-bs-target="#collapseFour" aria-expanded="false"
                                                aria-controls="collapseFour"><span
                                                    class="text-theme-secondary me-2">Q.</span> What are the odds of
                                                making a double eagle?</button>
                                        </h5>
                                    </div>
                                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                                        data-bs-parent="#accordion">
                                        <div class="card-body">
                                            course usually has its golf cart rules on its scorecard or posted in the
                                            clubhouse or near the first tee, so be sure to check those out but don’t
                                            sweat it! The fact that you are getting some exercise, and hanging out with
                                            some good friends!
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingFive">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" data-bs-toggle="collapse"
                                                data-bs-target="#collapseFive" aria-expanded="false"
                                                aria-controls="collapseFive"><span
                                                    class="text-theme-secondary me-2">Q.</span> If I need to drop my
                                                round would i be able to get a discount?</button>
                                        </h5>
                                    </div>
                                    <div id="collapseFive" class="collapse" aria-labelledby="headingFive"
                                        data-bs-parent="#accordion">
                                        <div class="card-body">
                                            It was popularised in the with the release of Letraset sheets containing
                                            Lorem Ipsum passages, and more recently with desktop publishing software
                                            like Aldus PageMaker including versions of Lorem Ipsum.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
</body>

</html>
