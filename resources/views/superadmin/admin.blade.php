
<!DOCTYPE html>
<html lang="en-US" dir="ltr">
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>InterviewO | Skill</title>

    <link rel="apple-touch-icon" sizes="180x180" href="https://interviewo.app/assets/img/favicons/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="https://interviewo.app/assets/img/favicons/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="https://interviewo.app/assets/img/favicons/favicon-16x16.png">
<link rel="shortcut icon" type="image/x-icon" href="https://interviewo.app/assets/img/favicons/favicon.ico">
<meta name="msapplication-TileImage" content="https://interviewo.app/assets/img/favicons/mstile-150x150.png">
<meta name="theme-color" content="#ffffff">
<script src="https://interviewo.app/assets/js/config.js"></script>
<script src="https://interviewo.app/assets/vendors/overlayscrollbars/OverlayScrollbars.min.js"></script>
<script src="https://interviewo.app/assets/js/jquery.min.js"></script>


<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7cPoppins:300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">
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
</script>  </head>
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
            <button class="btn navbar-toggler-humburger-icon navbar-vertical-toggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
        </div>
        <a class="navbar-brand active" href="https://interviewo.app/admin/dashboard">
            <div class="d-flex align-items-center py-3"><img class="me-2" src="https://interviewo.app/assets/img/icons/spot-illustrations/falcon.png" alt="" width="40" /><span class="font-sans-serif">io.app</span>
            </div>
        </a>
    </div>
    <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
        <div class="navbar-vertical-content scrollbar">
            <ul class="navbar-nav flex-column mb-3" id="navbarVerticalNav">
                <li class="nav-item">
                <a class="nav-link active" href="https://interviewo.app/admin/dashboard" role="button" aria-expanded="false">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-rocket"></span></span><span class="nav-link-text ps-1">Dashboard</span>
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
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-palette"></span></span><span class="nav-link-text ps-1">Self Introduction</span>
                    </div>
                </a>
                <a class="nav-link" href="/" role="button" aria-expanded="false">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-table"></span></span><span class="nav-link-text ps-1">Resume Writing</span>
                    </div>
                </a>
                <a class="nav-link" href="/" role="button" aria-expanded="false">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-comments"></span></span><span class="nav-link-text ps-1">Video Resume</span>
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
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-puzzle-piece"></span></span><span class="nav-link-text ps-1">Job Roles</span>
                    </div>
                </a>
                <a class="nav-link" href="/" role="button" aria-expanded="false">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-envelope-open"></span></span><span class="nav-link-text ps-1">Companies</span>
                    </div>
                </a>
                <a class="nav-link" href="/" role="button" aria-expanded="false">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-user-circle"></span></span><span class="nav-link-text ps-1">Personal Development</span>
                    </div>
                </a>
                
                <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
                    <div class="col-auto navbar-vertical-label">Skills
                    </div>
                    <div class="col ps-0">
                      <hr class="mb-0 navbar-vertical-divider" />
                    </div>
                </div>
                <a class="nav-link" href="https://interviewo.app/admin/master/skills" role="button" aria-expanded="false">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-award"></span></span><span class="nav-link-text ps-1">Skills</span>
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

                <!-- parent pages--><a class="nav-link dropdown-indicator" href="#user" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="user">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-user"></span></span><span class="nav-link-text ps-1">User</span>
                    </div>
                  </a>

                  <ul class="nav collapse false" id="user">
                    <li class="nav-item"><a class="nav-link" href="pages/user/profile.html" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Profile</span>
                        </div>
                      </a>
                      <!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="pages/user/settings.html" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Settings</span>
                        </div>
                      </a>
                      <!-- more inner pages-->
                    </li>
                  </ul>

                <!-- parent pages--><a class="nav-link dropdown-indicator" href="#card" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="card">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-lock"></span></span><span class="nav-link-text ps-1">Authentication</span>
                    </div>
                  </a>
                      <!-- more inner pages-->
                      <ul class="nav collapse false" id="card">
                        <li class="nav-item"><a class="nav-link" href="pages/authentication/card/login.html" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Login</span>
                            </div>
                          </a>
                          <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="pages/authentication/card/logout.html" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Logout</span>
                            </div>
                          </a>
                          <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="pages/authentication/card/register.html" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Register</span>
                            </div>
                          </a>
                          <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="pages/authentication/card/forgot-password.html" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Forgot password</span>
                            </div>
                          </a>
                          <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="pages/authentication/card/confirm-mail.html" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Confirm mail</span>
                            </div>
                          </a>
                          <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="pages/authentication/card/reset-password.html" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Reset password</span>
                            </div>
                          </a>
                          <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="pages/authentication/card/lock-screen.html" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Lock screen</span>
                            </div>
                          </a>
                          <!-- more inner pages-->
                        </li>
                      </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>        <div class="content">
          <nav class="navbar navbar-light navbar-glass navbar-top navbar-expand">
    <button class="btn navbar-toggler-humburger-icon navbar-toggler me-1 me-sm-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse" aria-controls="navbarVerticalCollapse" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
    <a class="navbar-brand me-1 me-sm-3" href="index.html">
        <div class="d-flex align-items-center"><img class="me-2" src="https://interviewo.app/assets/img/icons/spot-illustrations/falcon.png" alt="" width="40" /><span class="font-sans-serif">interviewo</span>
        </div>
    </a>
    <ul class="navbar-nav navbar-nav-icons ms-auto flex-row align-items-center">
        <li class="nav-item">
            <div class="theme-control-toggle fa-icon-wait px-2">
                <input class="form-check-input ms-0 theme-control-toggle-input" id="themeControlToggle" type="checkbox" data-theme-control="theme" value="dark" />
                <label class="mb-0 theme-control-toggle-label theme-control-toggle-light" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Switch to light theme"><span class="fas fa-sun fs-0"></span></label>
                <label class="mb-0 theme-control-toggle-label theme-control-toggle-dark" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Switch to dark theme"><span class="fas fa-moon fs-0"></span></label>
            </div>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link pe-0" id="navbarDropdownUser" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="avatar avatar-xl">
                    <img class="rounded-circle" src="https://interviewo.app/assets/img/team/3-thumb.png" alt="" />
                </div>
            </a>
            <div class="dropdown-menu dropdown-menu-end py-0" aria-labelledby="navbarDropdownUser">
                <div class="bg-white dark__bg-1000 rounded-2 py-2">
                    <a class="dropdown-item" href="#">Profile &amp; account</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Settings</a>
                    <a class="dropdown-item" href="https://interviewo.app/logout" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
                    <form id="logout-form" action="https://interviewo.app/logout" method="POST" class="d-none">
                        <input type="hidden" name="_token" value="FdOlP5Onyo0dR4DBNveCNOhs6L4hvGH7MB0PVQjj">                    </form>
                </div>
            </div>
        </li>
    </ul>
</nav>          <script>
    toastr.options.closeButton = true;
</script>



          
  <div class="row gx-0 kanban-header rounded-2 px-card py-2 mt-2 mb-3">
    <div class="col d-flex align-items-center">
        <h5 class="mb-0">Skill</h5>
    </div>
    <div class="col-auto d-flex align-items-center">
        <a href="https://interviewo.app/admin/master/skills/create" class="btn btn-sm btn-falcon-default me-2 d-none d-md-block"><span class="fas fa-plus me-2"></span>Add Skill</a>
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
                                <tr>
                    <td>soft</td>
                    <td>Stress Management</td>
                    <td> <img src="https://interviewo.app/images/own-images/soft-skills/Stress_Management-237.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/1/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>soft</td>
                    <td>Motivational Skills</td>
                    <td> <img src="https://interviewo.app/images/own-images/soft-skills/Motivational_Skills-248.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/2/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>soft</td>
                    <td>Emotional Intelligence</td>
                    <td> <img src="https://interviewo.app/images/own-images/soft-skills/Emotional_Intelligence-595.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/3/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>soft</td>
                    <td>Problem-Solving</td>
                    <td> <img src="https://interviewo.app/images/own-images/soft-skills/Problem-Solving-383.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/4/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>soft</td>
                    <td>Negotiation</td>
                    <td> <img src="https://interviewo.app/images/own-images/soft-skills/Negotiation-68.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/5/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>soft</td>
                    <td>Technical Communication Skills</td>
                    <td> <img src="https://interviewo.app/images/own-images/soft-skills/Technical_Communication_Skills-91.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/6/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>soft</td>
                    <td>Active Listening</td>
                    <td> <img src="https://interviewo.app/images/own-images/soft-skills/Active_Listening-941.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/7/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>soft</td>
                    <td>Work Place Adaptability</td>
                    <td> <img src="https://interviewo.app/images/own-images/soft-skills/Adaptability-881.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/8/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>soft</td>
                    <td>Delegation</td>
                    <td> <img src="https://interviewo.app/images/own-images/soft-skills/Delegation-982.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/9/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>soft</td>
                    <td>Optimism</td>
                    <td> <img src="https://interviewo.app/images/own-images/soft-skills/Optimism-287.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/10/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>soft</td>
                    <td>Mentorship and Training</td>
                    <td> <img src="https://interviewo.app/images/own-images/soft-skills/Mentorship_and_Training-392.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/11/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>soft</td>
                    <td>Respect and Gratitude</td>
                    <td> <img src="https://interviewo.app/images/own-images/soft-skills/Respect_and_Gratitude-362.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/12/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>soft</td>
                    <td>Buisness sense</td>
                    <td> <img src="https://interviewo.app/images/own-images/soft-skills/Buisness_sense-758.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/13/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>soft</td>
                    <td>Leadership Skills</td>
                    <td> <img src="https://interviewo.app/images/own-images/soft-skills/Leadership_Skills-390.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/14/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>soft</td>
                    <td>Understanding of Personalities</td>
                    <td> <img src="https://interviewo.app/images/own-images/soft-skills/Understanding_of_Personalities-447.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/15/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>soft</td>
                    <td>Effective communication</td>
                    <td> <img src="https://interviewo.app/images/own-images/soft-skills/Effective_communication-49.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/16/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>soft</td>
                    <td>Decision-making skills</td>
                    <td> <img src="https://interviewo.app/images/own-images/soft-skills/Decision-making_skills-134.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/17/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>soft</td>
                    <td>Ability to conduct research</td>
                    <td> <img src="https://interviewo.app/images/own-images/soft-skills/Ability_to_conduct_research-761.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/18/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>soft</td>
                    <td>Time management skills</td>
                    <td> <img src="https://interviewo.app/images/own-images/soft-skills/Time_management_skills-62.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/19/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>soft</td>
                    <td>Ability to employ tech talent</td>
                    <td> <img src="https://interviewo.app/images/own-images/soft-skills/Ability_to_employ_tech_talent-229.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/20/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>soft</td>
                    <td>Organisation</td>
                    <td> <img src="https://interviewo.app/images/own-images/soft-skills/Organisation-271.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/21/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>soft</td>
                    <td>Strategic Thinking skills</td>
                    <td> <img src="https://interviewo.app/images/own-images/soft-skills/Strategic_Thinking_skills-11.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/22/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>soft</td>
                    <td>Time management</td>
                    <td> <img src="https://interviewo.app/images/own-images/soft-skills/Time_management-703.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/23/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>soft</td>
                    <td>Communication</td>
                    <td> <img src="https://interviewo.app/images/own-images/soft-skills/Communication-471.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/24/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>soft</td>
                    <td>Confidentiality</td>
                    <td> <img src="https://interviewo.app/images/own-images/soft-skills/Confidentiality-966.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/25/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>soft</td>
                    <td>Suppleness</td>
                    <td> <img src="https://interviewo.app/images/own-images/soft-skills/Adaptability-256.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/26/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>soft</td>
                    <td>Teamwork</td>
                    <td> <img src="https://interviewo.app/images/own-images/soft-skills/Teamwork-231.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/27/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>soft</td>
                    <td>Leadership</td>
                    <td> <img src="https://interviewo.app/images/own-images/soft-skills/Leadership-748.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/28/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>soft</td>
                    <td>Integrity</td>
                    <td> <img src="https://interviewo.app/images/own-images/soft-skills/Integrity-346.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/29/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>soft</td>
                    <td>Communication</td>
                    <td> <img src="https://interviewo.app/images/own-images/soft-skills/Communication-369.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/30/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>soft</td>
                    <td>Attention to detail</td>
                    <td> <img src="https://interviewo.app/images/own-images/soft-skills/Attention_to_detail-610.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/31/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>soft</td>
                    <td>Continuous learning</td>
                    <td> <img src="https://interviewo.app/images/own-images/soft-skills/Continuous_learning-136.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/32/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>soft</td>
                    <td>Flexibility</td>
                    <td> <img src="https://interviewo.app/images/own-images/soft-skills/Flexibility-374.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/33/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>soft</td>
                    <td>Strong communication skills</td>
                    <td> <img src="https://interviewo.app/images/own-images/soft-skills/Strong_communication_skills-227.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/34/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>soft</td>
                    <td>Confidence</td>
                    <td> <img src="https://interviewo.app/images/own-images/soft-skills/Confidence-195.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/35/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>soft</td>
                    <td>A natural curiosity</td>
                    <td> <img src="https://interviewo.app/images/own-images/soft-skills/A_natural_curiosity-275.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/36/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>soft</td>
                    <td>Collabaration</td>
                    <td> <img src="https://interviewo.app/images/own-images/soft-skills/Collabaration-118.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/37/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>soft</td>
                    <td>Negotiation</td>
                    <td> <img src="https://interviewo.app/images/own-images/soft-skills/Negotiation-542.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/38/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>soft</td>
                    <td>Team-building</td>
                    <td> <img src="https://interviewo.app/images/own-images/soft-skills/Team-building-676.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/39/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>soft</td>
                    <td>Organizational Development</td>
                    <td> <img src="https://interviewo.app/images/own-images/soft-skills/Organizational_Development-347.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/40/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>soft</td>
                    <td>Vendor management</td>
                    <td> <img src="https://interviewo.app/images/own-images/soft-skills/Vendor_management-485.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/41/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>soft</td>
                    <td>Buisness transformation</td>
                    <td> <img src="https://interviewo.app/images/own-images/soft-skills/Buisness_transformation-185.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/42/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>soft</td>
                    <td>Board presence</td>
                    <td> <img src="https://interviewo.app/images/own-images/soft-skills/Board_presence-409.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/43/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>soft</td>
                    <td>Presentation skills</td>
                    <td> <img src="https://interviewo.app/images/own-images/soft-skills/Presentation_skills-778.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/44/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>soft</td>
                    <td>Written and verbal skills</td>
                    <td> <img src="https://interviewo.app/images/own-images/soft-skills/Written_and_verbal_skills-539.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/45/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>soft</td>
                    <td>Good listening skills</td>
                    <td> <img src="https://interviewo.app/images/own-images/soft-skills/Good_listening_skills-677.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/46/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>soft</td>
                    <td>Ability to read and display positive body language</td>
                    <td> <img src="https://interviewo.app/images/own-images/soft-skills/Ability_to_read_and_display_positive_body_language-285.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/47/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>soft</td>
                    <td>Business sense</td>
                    <td> <img src="https://interviewo.app/images/own-images/soft-skills/Business_sense-989.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/48/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>soft</td>
                    <td>Leadership skills</td>
                    <td> <img src="https://interviewo.app/images/own-images/soft-skills/Leadership_skills-3.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/49/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>soft</td>
                    <td>Effective communication</td>
                    <td> <img src="https://interviewo.app/images/own-images/soft-skills/Effective_communication-724.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/50/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>soft</td>
                    <td>Decision-making skills</td>
                    <td> <img src="https://interviewo.app/images/own-images/soft-skills/Decision-making_skills-159.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/51/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>soft</td>
                    <td>Leading without authority</td>
                    <td> <img src="https://interviewo.app/images/own-images/soft-skills/Leading_without_authority-891.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/52/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>soft</td>
                    <td>Ability to conduct research</td>
                    <td> <img src="https://interviewo.app/images/own-images/soft-skills/Ability_to_conduct_research-665.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/53/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>soft</td>
                    <td>Strategic thinking skills</td>
                    <td> <img src="https://interviewo.app/images/own-images/soft-skills/Strategic_thinking_skills-325.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/54/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>soft</td>
                    <td>Time management skills</td>
                    <td> <img src="https://interviewo.app/images/own-images/soft-skills/Time_management_skills-312.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/55/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>soft</td>
                    <td>persuasion</td>
                    <td> <img src="https://interviewo.app/images/own-images/soft-skills/persuasion-395.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/56/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>soft</td>
                    <td>Prioritizing</td>
                    <td> <img src="https://interviewo.app/images/own-images/soft-skills/Prioritizing-153.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/57/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>soft</td>
                    <td>Delegation</td>
                    <td> <img src="https://interviewo.app/images/own-images/soft-skills/Delegation-551.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/58/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>soft</td>
                    <td>Critical thinking and analytical skills</td>
                    <td> <img src="https://interviewo.app/images/own-images/soft-skills/Critical_thinking_and_analytical_skills-314.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/59/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>soft</td>
                    <td>Leadership and the ability to take initiative</td>
                    <td> <img src="https://interviewo.app/images/own-images/soft-skills/Leadership_and_the_ability_to_take_initiative-349.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/60/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>soft</td>
                    <td>Ability to employ tech talent</td>
                    <td> <img src="https://interviewo.app/images/own-images/soft-skills/Ability_to_employ_tech_talent-91.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/61/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>soft</td>
                    <td>Time Management</td>
                    <td> <img src="https://interviewo.app/images/own-images/soft-skills/Time_Management-349.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/62/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>soft</td>
                    <td>Problem-Solving</td>
                    <td> <img src="https://interviewo.app/images/own-images/soft-skills/Problem-Solving-649.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/63/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>soft</td>
                    <td>Leadership</td>
                    <td> <img src="https://interviewo.app/images/own-images/soft-skills/Leadership-219.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/64/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>soft</td>
                    <td>Interpersonal skills</td>
                    <td> <img src="https://interviewo.app/images/own-images/soft-skills/Interpersonal_skills-844.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/65/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>soft</td>
                    <td>Communication Skills</td>
                    <td> <img src="https://interviewo.app/images/own-images/soft-skills/Communication_Skills-149.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/66/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>soft</td>
                    <td>Creativity and critical thinking</td>
                    <td> <img src="https://interviewo.app/images/own-images/soft-skills/Creativity_and_critical_thinking-689.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/67/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>soft</td>
                    <td>Collaboration</td>
                    <td> <img src="https://interviewo.app/images/own-images/soft-skills/Collaboration-43.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/68/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>soft</td>
                    <td>Adaptability and Versatility</td>
                    <td> <img src="https://interviewo.app/images/own-images/soft-skills/Adaptability_and_Versatility-622.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/69/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>soft</td>
                    <td>Coaching and inspiration</td>
                    <td> <img src="https://interviewo.app/images/own-images/soft-skills/Coaching_and_inspiration-150.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/70/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>soft</td>
                    <td>Attention to detail</td>
                    <td> <img src="https://interviewo.app/images/own-images/soft-skills/Attention_to_detail-266.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/71/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>soft</td>
                    <td>people management</td>
                    <td> <img src="https://interviewo.app/images/own-images/soft-skills/people_management-803.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/72/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>soft</td>
                    <td>Prioritizing</td>
                    <td> <img src="https://interviewo.app/images/own-images/soft-skills/Prioritizing-911.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/73/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>soft</td>
                    <td>Problem Solving and Conflict resolution</td>
                    <td> <img src="https://interviewo.app/images/own-images/soft-skills/Problem_Solving_and_Conflict_resolution-937.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/74/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>soft</td>
                    <td>Detailed thinking</td>
                    <td> <img src="https://interviewo.app/images/own-images/soft-skills/Detailed_thinking-162.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/75/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>soft</td>
                    <td>Conflict Management</td>
                    <td> <img src="https://interviewo.app/images/own-images/soft-skills/Conflict_Management-236.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/76/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>soft</td>
                    <td>Trust building</td>
                    <td> <img src="https://interviewo.app/images/own-images/soft-skills/Trust_building-387.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/77/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>soft</td>
                    <td>Knowledge management</td>
                    <td> <img src="https://interviewo.app/images/own-images/soft-skills/Knowledge_management-942.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/78/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>soft</td>
                    <td>Time management</td>
                    <td> <img src="https://interviewo.app/images/own-images/soft-skills/Time_management-120.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/79/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>soft</td>
                    <td>Listening</td>
                    <td> <img src="https://interviewo.app/images/own-images/soft-skills/Listening-384.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/80/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>soft</td>
                    <td>Company skills</td>
                    <td> <img src="https://interviewo.app/images/own-images/soft-skills/Company_skills-142.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/81/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>soft</td>
                    <td>Organisation</td>
                    <td> <img src="https://interviewo.app/images/own-images/soft-skills/Organisation-860.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/82/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>soft</td>
                    <td>Team management</td>
                    <td> <img src="https://interviewo.app/images/own-images/soft-skills/Team_management-704.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/83/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>soft</td>
                    <td>High level programming language</td>
                    <td> <img src="https://interviewo.app/images/own-images/soft-skills/High_level_programming_language-555.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/84/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>soft</td>
                    <td>Communication</td>
                    <td> <img src="https://interviewo.app/images/own-images/soft-skills/Communication-556.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/85/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>soft</td>
                    <td>Analytical skills</td>
                    <td> <img src="https://interviewo.app/images/own-images/soft-skills/Analytical_skills-24.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/86/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>soft</td>
                    <td>Self awareness</td>
                    <td> <img src="https://interviewo.app/images/own-images/soft-skills/Self_awareness-630.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/87/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>soft</td>
                    <td>Confidentiality</td>
                    <td> <img src="https://interviewo.app/images/own-images/soft-skills/Confidentiality-699.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/88/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>soft</td>
                    <td>Patience</td>
                    <td> <img src="https://interviewo.app/images/own-images/soft-skills/Patience-457.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/89/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>soft</td>
                    <td>Adaptability</td>
                    <td> <img src="https://interviewo.app/images/own-images/soft-skills/Adaptability-118.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/90/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>soft</td>
                    <td>Big picture thinking</td>
                    <td> <img src="https://interviewo.app/images/own-images/soft-skills/Big_picture_thinking-744.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/91/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>soft</td>
                    <td>Teamwork</td>
                    <td> <img src="https://interviewo.app/images/own-images/soft-skills/Teamwork-801.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/92/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>soft</td>
                    <td>Open mindedness</td>
                    <td> <img src="https://interviewo.app/images/own-images/soft-skills/Open_mindedness-600.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/93/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>soft</td>
                    <td>Problem Solving</td>
                    <td> <img src="https://interviewo.app/images/own-images/soft-skills/Problem_Solving-309.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/94/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>soft</td>
                    <td>The ability to adapt to change</td>
                    <td> <img src="https://interviewo.app/images/own-images/soft-skills/The_ability_to_adapt_to_change-56.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/95/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>soft</td>
                    <td>Accountability</td>
                    <td> <img src="https://interviewo.app/images/own-images/soft-skills/Accountability-40.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/96/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>soft</td>
                    <td>Leadership</td>
                    <td> <img src="https://interviewo.app/images/own-images/soft-skills/Leadership-849.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/97/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>soft</td>
                    <td>Initiative</td>
                    <td> <img src="https://interviewo.app/images/own-images/soft-skills/Initiative-457.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/98/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>soft</td>
                    <td>Attention to detail</td>
                    <td> <img src="https://interviewo.app/images/own-images/soft-skills/Attention_to_detail-452.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/99/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>soft</td>
                    <td>Good discernment or judgement</td>
                    <td> <img src="https://interviewo.app/images/own-images/soft-skills/Good_discernment_or_judgement-478.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/100/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>soft</td>
                    <td>Emotional Intelligence</td>
                    <td> <img src="https://interviewo.app/images/own-images/soft-skills/Emotional_Intelligence-430.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/101/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>soft</td>
                    <td>Flexibility</td>
                    <td> <img src="https://interviewo.app/images/own-images/soft-skills/Flexibility-528.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/102/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>soft</td>
                    <td>Emotional Intelligence</td>
                    <td> <img src="https://interviewo.app/images/own-images/soft-skills/Emotional_Intelligence-787.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/103/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>soft</td>
                    <td>Strong communication skills</td>
                    <td> <img src="https://interviewo.app/images/own-images/soft-skills/Strong_communication_skills-723.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/104/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>soft</td>
                    <td>Problem Solving and Conflict resolution</td>
                    <td> <img src="https://interviewo.app/images/own-images/soft-skills/Problem_Solving_and_Conflict_resolution-948.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/105/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>soft</td>
                    <td>Coaching and inspiration</td>
                    <td> <img src="https://interviewo.app/images/own-images/soft-skills/Coaching_and_inspiration-912.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/106/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>soft</td>
                    <td>Detailed thinking</td>
                    <td> <img src="https://interviewo.app/images/own-images/soft-skills/Detailed_thinking-334.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/107/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>soft</td>
                    <td>Good listening skills</td>
                    <td> <img src="https://interviewo.app/images/own-images/soft-skills/Good_listening_skills-88.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/108/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>soft</td>
                    <td>Creative thinking</td>
                    <td> <img src="https://interviewo.app/images/own-images/soft-skills/Creative_thinking-334.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/109/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>soft</td>
                    <td>Management</td>
                    <td> <img src="https://interviewo.app/images/own-images/soft-skills/Management-720.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/110/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>soft</td>
                    <td>Motivation</td>
                    <td> <img src="https://interviewo.app/images/own-images/soft-skills/Motivation-939.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/111/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>soft</td>
                    <td>Attention to detail</td>
                    <td> <img src="https://interviewo.app/images/own-images/soft-skills/Attention_to_detail-471.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/112/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>soft</td>
                    <td>People management</td>
                    <td> <img src="https://interviewo.app/images/own-images/soft-skills/People_management-581.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/113/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>soft</td>
                    <td>Project Management</td>
                    <td> <img src="https://interviewo.app/images/own-images/soft-skills/Project_Management-525.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/114/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>soft</td>
                    <td>Trust building</td>
                    <td> <img src="https://interviewo.app/images/own-images/soft-skills/Trust_building-781.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/115/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>soft</td>
                    <td>Strong networking and relationship-building skills</td>
                    <td> <img src="https://interviewo.app/images/own-images/soft-skills/Strong_networking_and_relationship-building_skills-43.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/116/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>soft</td>
                    <td>Technical skills</td>
                    <td> <img src="https://interviewo.app/images/own-images/soft-skills/Technical_skills-884.png" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/117/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>soft</td>
                    <td>Knowledge management</td>
                    <td> <img src="https://interviewo.app/images/own-images/soft-skills/Knowledge_management-207.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/118/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>soft</td>
                    <td>Verbal and Nonverbal communication</td>
                    <td> <img src="https://interviewo.app/images/own-images/soft-skills/Verbal_and_Nonverbal_communication-380.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/119/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>soft</td>
                    <td>Company skills</td>
                    <td> <img src="https://interviewo.app/images/own-images/soft-skills/Company_skills-204.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/120/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>soft</td>
                    <td>Listening skills</td>
                    <td> <img src="https://interviewo.app/images/own-images/soft-skills/Listening_skills-118.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/121/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>soft</td>
                    <td>Strategic thinking</td>
                    <td> <img src="https://interviewo.app/images/own-images/soft-skills/Strategic_thinking-502.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/122/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>soft</td>
                    <td>Decision making</td>
                    <td> <img src="https://interviewo.app/images/own-images/soft-skills/Decision_making-961.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/123/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>soft</td>
                    <td>Ability To Solve Conflicts</td>
                    <td> <img src="https://interviewo.app/images/own-images/soft-skills/Ability_To_Solve_Conflicts-904.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/124/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>soft</td>
                    <td>Ability To Stand The Deadlines And High Pressure.</td>
                    <td> <img src="https://interviewo.app/images/own-images/soft-skills/Ability_To_Stand_The_Deadlines_And_High_Pressure.-674.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/125/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>soft</td>
                    <td>Teamwork Skills</td>
                    <td> <img src="https://interviewo.app/images/own-images/soft-skills/Teamwork_Skills-770.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/126/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>soft</td>
                    <td>Assertiveness And Flexibility</td>
                    <td> <img src="https://interviewo.app/images/own-images/soft-skills/Assertiveness_And_Flexibility-333.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/127/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>soft</td>
                    <td>Team management</td>
                    <td> <img src="https://interviewo.app/images/own-images/soft-skills/Team_management-834.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/128/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>soft</td>
                    <td>Critical Thinking</td>
                    <td> <img src="https://interviewo.app/images/own-images/soft-skills/Critical_Thinking-130.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/129/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>soft</td>
                    <td>Resource fullness</td>
                    <td> <img src="https://interviewo.app/images/own-images/soft-skills/Resource_fullness-766.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/130/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>soft</td>
                    <td>Negotiation and problem resolving abilities</td>
                    <td> <img src="https://interviewo.app/images/own-images/soft-skills/Negotiation_and_problem_resolving_abilities-767.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/131/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>soft</td>
                    <td>Influence</td>
                    <td> <img src="https://interviewo.app/images/own-images/soft-skills/Influence-652.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/132/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>soft</td>
                    <td>Company and customer expertise</td>
                    <td> <img src="https://interviewo.app/images/own-images/soft-skills/Company_and_customer_expertise-337.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/133/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>tool</td>
                    <td>Photoshop</td>
                    <td> <img src="https://interviewo.app/images/own-images/skills/tool/Photoshop-772.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/134/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>tech</td>
                    <td>AutoIt</td>
                    <td> <img src="https://interviewo.app/images/own-images/skills/tech/AutoIt-193.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/135/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>tech</td>
                    <td>ABAP-Advanced Business Application Programming</td>
                    <td> <img src="https://interviewo.app/images/own-images/skills/tech/ABAP-Advanced_Business_Application_Programming-570.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/136/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>tech</td>
                    <td>Xaraya</td>
                    <td> <img src="https://interviewo.app/images/own-images/skills/tech/Xaraya-999.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/137/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>tech</td>
                    <td>ActionScript</td>
                    <td> <img src="https://interviewo.app/images/own-images/skills/soft/ActionScript-881.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/138/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>tech</td>
                    <td>Ada</td>
                    <td> <img src="https://interviewo.app/images/own-images/skills/soft/Ada-192.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/139/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>tech</td>
                    <td>UNIX Programming</td>
                    <td> <img src="https://interviewo.app/images/own-images/skills/tech/UNIX_Programming-341.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/140/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>tech</td>
                    <td>ALGOL</td>
                    <td> <img src="https://interviewo.app/images/own-images/skills/soft/ALGOL-597.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/141/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>tech</td>
                    <td>Alice</td>
                    <td> <img src="https://interviewo.app/images/own-images/skills/tech/Alice-75.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/142/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>tech</td>
                    <td>APL</td>
                    <td> <img src="https://interviewo.app/images/own-images/skills/tech/APL-294.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/143/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>tech</td>
                    <td>ASP / ASP.NET</td>
                    <td> <img src="https://interviewo.app/images/own-images/skills/tech/ASP_/_ASP.NET-747.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/144/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>tech</td>
                    <td>Assembly Language</td>
                    <td> <img src="https://interviewo.app/images/own-images/skills/tech/Assembly_Language-330.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/145/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>tech</td>
                    <td>Awk</td>
                    <td> <img src="https://interviewo.app/images/own-images/skills/tech/Awk-827.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/146/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>tech</td>
                    <td>AWK</td>
                    <td> <img src="https://interviewo.app/images/own-images/skills/tech/AWK-223.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/147/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>tech</td>
                    <td>BBC Basic</td>
                    <td> <img src="https://interviewo.app/images/own-images/skills/tech/BBC_Basic-526.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/148/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>tech</td>
                    <td>C programming</td>
                    <td> <img src="https://interviewo.app/images/own-images/skills/tech/C_programming-770.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/149/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>tech</td>
                    <td>C++</td>
                    <td> <img src="https://interviewo.app/images/own-images/skills/tech/C++-400.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/150/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>tech</td>
                    <td>C#</td>
                    <td> <img src="https://interviewo.app/images/own-images/skills/tech/C#-23.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/151/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>tech</td>
                    <td>COBOL</td>
                    <td> <img src="https://interviewo.app/images/own-images/skills/tech/COBOL-459.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/152/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>tech</td>
                    <td>CSS -Cascading Style Sheets</td>
                    <td> <img src="https://interviewo.app/images/own-images/skills/tech/CSS_-Cascading_Style_Sheets-876.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/153/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>tech</td>
                    <td>D Programming Language</td>
                    <td> <img src="https://interviewo.app/images/own-images/skills/tech/D_Programming_Language-23.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/154/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>tech</td>
                    <td>Delphi</td>
                    <td> <img src="https://interviewo.app/images/own-images/skills/tech/Delphi-688.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/155/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>tech</td>
                    <td>Dreamweaver</td>
                    <td> <img src="https://interviewo.app/images/own-images/skills/tech/Dreamweaver-56.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/156/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>tech</td>
                    <td>Erlang and Elixir</td>
                    <td> <img src="https://interviewo.app/images/own-images/skills/tech/Erlang_and_Elixir-170.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/157/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>tech</td>
                    <td>F#</td>
                    <td> <img src="https://interviewo.app/images/own-images/skills/tech/F#-743.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/158/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>tech</td>
                    <td>FORTRAN</td>
                    <td> <img src="https://interviewo.app/images/own-images/skills/tech/FORTRAN-634.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/159/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>tech</td>
                    <td>Functional Programming</td>
                    <td> <img src="https://interviewo.app/images/own-images/skills/tech/Functional_Programming-20.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/160/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>tech</td>
                    <td>Go</td>
                    <td> <img src="https://interviewo.app/images/own-images/skills/tech/Go-881.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/161/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>tech</td>
                    <td>Haskell</td>
                    <td> <img src="https://interviewo.app/images/own-images/skills/tech/Haskell-292.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/162/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>tech</td>
                    <td>HTML</td>
                    <td> <img src="https://interviewo.app/images/own-images/skills/tech/HTML-898.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/163/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>tech</td>
                    <td>IDL</td>
                    <td> <img src="https://interviewo.app/images/own-images/skills/tech/IDL-112.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/164/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>tech</td>
                    <td>Java</td>
                    <td> <img src="https://interviewo.app/images/own-images/skills/tech/Java-485.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/165/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>tech</td>
                    <td>Javascript</td>
                    <td> <img src="https://interviewo.app/images/own-images/skills/tech/Javascript-667.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/166/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>tool</td>
                    <td>Node.js</td>
                    <td> <img src="https://interviewo.app/images/own-images/skills/tool/Node.js-480.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/167/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>tech</td>
                    <td>Bootstrap</td>
                    <td> <img src="https://interviewo.app/images/own-images/skills/tech/Bootstrap-692.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/168/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>tech</td>
                    <td>jQuery</td>
                    <td> <img src="https://interviewo.app/images/own-images/skills/tech/jQuery-399.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/169/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>tech</td>
                    <td>LabVIEW</td>
                    <td> <img src="https://interviewo.app/images/own-images/skills/tech/LabVIEW-928.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/170/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>tech</td>
                    <td>Lisp</td>
                    <td> <img src="https://interviewo.app/images/own-images/skills/tech/Lisp-774.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/171/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>tech</td>
                    <td>MetaQuotes Language</td>
                    <td> <img src="https://interviewo.app/images/own-images/skills/tech/MetaQuotes_Language-958.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/172/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>tech</td>
                    <td>ML</td>
                    <td> <img src="https://interviewo.app/images/own-images/skills/tech/ML-907.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/173/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>tech</td>
                    <td>Modula-3</td>
                    <td> <img src="https://interviewo.app/images/own-images/skills/tech/Modula-3-846.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/174/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>tech</td>
                    <td>MS Access</td>
                    <td> <img src="https://interviewo.app/images/own-images/skills/tech/MS_Access-228.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/175/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>tech</td>
                    <td>MySQL</td>
                    <td> <img src="https://interviewo.app/images/own-images/skills/tech/MySQL-579.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/176/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>tech</td>
                    <td>NXT-G</td>
                    <td> <img src="https://interviewo.app/images/own-images/skills/tech/NXT-G-618.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/177/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>tech</td>
                    <td>Object-Oriented Programming</td>
                    <td> <img src="https://interviewo.app/images/own-images/skills/tech/Object-Oriented_Programming-33.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/178/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>tech</td>
                    <td>Objective-C</td>
                    <td> <img src="https://interviewo.app/images/own-images/skills/tech/Objective-C-865.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/179/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>tech</td>
                    <td>OCaml</td>
                    <td> <img src="https://interviewo.app/images/own-images/skills/tech/OCaml-289.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/180/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>tech</td>
                    <td>Pascal language</td>
                    <td> <img src="https://interviewo.app/images/own-images/skills/tech/Pascal_language-311.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/181/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>tech</td>
                    <td>PHP</td>
                    <td> <img src="https://interviewo.app/images/own-images/skills/tech/PHP-264.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/182/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>tech</td>
                    <td>PL/I</td>
                    <td> <img src="https://interviewo.app/images/own-images/skills/tech/PL/I-445.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/183/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>tech</td>
                    <td>PL/SQL</td>
                    <td> <img src="https://interviewo.app/images/own-images/skills/tech/PL/SQL-696.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/184/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>tech</td>
                    <td>PostgreSQL</td>
                    <td> <img src="https://interviewo.app/images/own-images/skills/tech/PostgreSQL-669.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/185/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>tech</td>
                    <td>PostScript</td>
                    <td> <img src="https://interviewo.app/images/own-images/skills/tech/PostScript-656.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/186/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>tech</td>
                    <td>Python</td>
                    <td> <img src="https://interviewo.app/images/own-images/skills/tech/Python-819.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/187/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>tech</td>
                    <td>R programming language</td>
                    <td> <img src="https://interviewo.app/images/own-images/skills/tech/R_programming_language-150.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/188/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>tech</td>
                    <td>RapidWeaver</td>
                    <td> <img src="https://interviewo.app/images/own-images/skills/tech/RapidWeaver-553.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/189/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>tech</td>
                    <td>RavenDB</td>
                    <td> <img src="https://interviewo.app/images/own-images/skills/tech/RavenDB-137.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/190/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                                <tr>
                    <td>tech</td>
                    <td>Rexx</td>
                    <td> <img src="https://interviewo.app/images/own-images/skills/tech/Rexx-362.jpg" height="30" alt=""></td>
                    <td>
                      <a href="https://interviewo.app/admin/master/skills/191/edit" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></a>
                      <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </td>
                </tr>
                            </tbody>
        </table>
    </div>
</div>    </div>
</div>
          <footer class="footer">
    <div class="row g-0 justify-content-between fs--1 mt-4 mb-3">
      <div class="col-12 col-sm-auto text-center">
        <p class="mb-0 text-600">Designed 2022 &copy; <a href="https://fintechgie.com" target="_blank">FintechGie</a></p>
      </div>
    </div>
  </footer>        </div>
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