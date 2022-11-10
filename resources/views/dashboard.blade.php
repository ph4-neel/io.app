<!DOCTYPE html>
<html>

<head>
    <title>Custom Auth in Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
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
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-lg mb-5" style="background-color: #e3f2fd;">
        <div class="container">
            <a class="navbar-brand mr-auto" href="#">PositronX</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register-user') }}">Register</a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('signout') }}">Logout</a>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
    @yield('content')
</body>

</html>
