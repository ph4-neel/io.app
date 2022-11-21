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
    <link rel="stylesheet" href="{{ asset('css/Profile.css') }}">
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
                  

                    <li class="nav-link">
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
///////////////////////////////////////////////////////////////////////////////////////

<div class="accordion-wrap">
    <div class="accordion">
      <a href="#" class="active"><i class="fa fa-user"></i> Profile</a>
      <div class="sub-nav active">
        <div class="html about-me">
          <div class="photo">
            <div class="photo-overlay">
              <span class="plus">+</span>
            </div>
          </div>
          <h4>@khadkamhn</h4>
          <p>Hi, It's me Mohan. I'm a web and graphics designer. Designing is my passion and I have been working on various designing projects.</p>
          <div class="social-link">
            <a class="link link-twitter" href="https://twitter.com/khadkamhn/" target="_blank"><i class="fa fa-twitter"></i></a>
            <a class="link link-codepen" href="https://codepen.io/khadkamhn/" target="_blank"><i class="fa fa-codepen"></i></a>
            <a class="link link-facebook" href="https://facebook.com/khadkamhn/" target="_blank"><i class="fa fa-facebook"></i></a>
            <a class="link link-dribbble" href="http://dribbble.com/khadkamhn" target="_blank"><i class="fa fa-dribbble"></i></a>
          </div>
        </div>
      </div>
      <a href="#"><i class="fa fa-comments"></i> Chat</a>
      <div class="sub-nav">
        <div class="html chat">
          <div class="user user-khadkamhn clearfix">
            <span class="text-msg pull-right">I'm so unhappy :(</span>
          </div>
          <div class="user user-khadkamhn clearfix">
            <span class="text-msg pull-right">I have no invitation in dribbble yet. why?</span>
          </div>
          <div class="user user-dribble clearfix">
            <span class="photo pull-left" data-username="dribbble"><i class="fa fa-dribbble"></i></span>
            <span class="text-msg">Don't worry dude!</span>
          </div>
          <div class="user user-dribble clearfix">
            <span class="photo pull-left" data-username="dribbble"><i class="fa fa-dribbble"></i></span>
            <span class="text-msg">Some awesome people may find you and invite you soon.... :)</span>
          </div>
        </div>
      </div>
      <a href="#"><i class="fa fa-envelope"></i> Messages <span class="pull-right alert-numb">21</span></a>
      <div class="sub-nav">
        <a href="#">Inbox <span class="pull-right alert-numb">11</span></a>
        <a href="#">Important <span class="pull-right alert-numb">10</span></a>
        <a href="#">Sent</a>
        <a href="#">Draft</a>
        <a href="#">Trash</a>
        <a href="#">All messages</a>
      </div>
      <a href="#"><i class="fa fa-dribbble"></i> Dribbble Invite</a>
      <div class="sub-nav">
        <div class="html invite">
          <p>I would like to join <span class="dribbble">dribbble</span> community</p>
          <p>Could you please invite me?</p>
          <a class="btn" href="http://dribbble.com/khadkamhn/" target="_blank">Draft Me</a>
        </div>
      </div>
    </div>
  </div>

  <script>

$(function(){
  Profile.load();
});

Profile = {
  load:function(){
    this.links();
    this.social();
    this.accordion();
  },
  links:function(){
    $('a[href="#"]').click(function(e){
      e.preventDefault();
    });
  },
  social:function(){
    $('.accordion .about-me .photo .photo-overlay .plus').click(function(){
      $('.social-link').toggleClass('active');
      $('.about-me').toggleClass('blur');
    });
    $('.social-link').click(function(){
      $(this).toggleClass('active');
      $('.about-me').toggleClass('blur');
    });
  },
  accordion:function(){
    var subMenus = $('.accordion .sub-nav').hide();
    $('.accordion > a').each(function(){
      if($(this).hasClass('active')){
        $(this).next().slideDown(100);
      }
    });
    $('.accordion > a').click(function(){
      $this = $(this);
      $target =  $this.next();
      $this.siblings('a').removeAttr('class');
      $this.addClass('active');
      if(!$target.hasClass('active')){
        subMenus.removeClass('active').slideUp(100);
        $target.addClass('active').slideDown(100);
      }
      return false;
    });
  }
}
  </script>

</body>

</html>
