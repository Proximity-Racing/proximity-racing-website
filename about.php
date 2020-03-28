<?php session_start();
?>
<!DOCTYPE html>
<html lang ="en">
  <head>
    <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TBKGS5L');</script>
<!-- End Google Tag Manager -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="img/favicon.png" type="image/png">
    <title>About | Proximity Racing</title>
    <meta name="description" content="Proximity Racing is a sanctioned iRacing.com motorsport team">
    <meta name="robots" content="index, follow" />
    <meta name="keywords" content="proximity racing, proximity, proximityracing, iracing, chris nosowsky">
    <link rel="stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <script src="jquery/jquery.timelinr-0.9.7.js"></script>
    <script src="jquery/scripts.js"></script>
    <link rel="canonical" href="https://proximityracing.com/about.php" />
    <link rel="stylesheet" href="style.css" />
        <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-155164803-1"></script>
        <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-155164803-1');
    </script>
  </head>
  <body>
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TBKGS5L"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
    <div class="pagewide sticky-top">                  
      <?php if(isset($_SESSION['success'])): ?>
        <a class ="fo sign" href="logout.php?destroy">Logout</a>
        <a class ="fo prof" href="editprofile.php">My Profile</a>
        <?php else: ?>
        <a class="fo sign" href="login.php">Login</a>
        <a class="fo prof" href="register.php">Sign Up</a>
        <?php endif; ?></div>
    <!-- Navigation -->

    <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="./"><img src="img/prlogo1.png"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse"
        data-target="#navbarResponsive">
          <span class="navbar-toggler-icon"> </span>
        </button>
        <div class ="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="./">Home</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="./about.php">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./news.php">News</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./drivers.php">Members</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./gallery.php">Gallery</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./partners.php">Partners</a>
            </li>
            <li class="dropdown nav-item">
            <a href="./contact.php" data-toggle="dropdown" class="dropdown-toggle nav-link">Contact</a>
            <ul class="dropdown-menu" id="menu1">
              <li><a class = "fo" href="./contact.php">Contact Us</a></li>
              <li><a class = "fo" href="./apply.php">Apply</a></li>
              <li><a class = "fo" href="./sponsor.php">Become a Sponsor</a></li>
            </ul>
          </li>
          </ul>
        </div>

      </div>
    </nav>
    <div class="loader-wrapper">
    <span class="loader"><span class="loader-inner"></span></span>
</div>
    <script>
        $(window).on("load",function(){
          $(".loader-wrapper").fadeOut("slow");
        });
    </script>

<div class="aboutheader">
        <div class="col-lg-8 col-md-10 mx-auto">
            <h1 style="color: white; font-size: 100px;">About Us</h1>
            <br>
            <br>
        </div>
  </div>

<!-- About Container -->
<div class ="container-fluid padding fade">
<div class ="row padding">
  <div class="col-md-12">
    <p class="ps-2 mt-5 lead">Proximity Racing is a sanctioned iRacing.com motorsport team. Founded November 10th, 2016, our team started with five members.  After our 24 Hours of Daytona run coming short in 2017, we reformed our team, expanding our member base. After months worth of preparation for the 2017 6 Hours of The Glen, our two teams managed to score our first team endurance wins. We brought this confidence into the 2018 24 Hours of Daytona and ended up winning our class.</p>
    <br>
    <br>
    <p class="ps-2 lead">Our success doesn't just come on the track, but it also develops off the track. We make sure our team members are academically successful and ready for the business world. We train our members on how to effectively market themselves and the team. The majority of our members are in colleges all across the United States.</p>
    <br>
    <br>
    <p class="ps-2 lead">We continue to grow our team. We have a passion for racing. By preparing for the events, we ensure that our team will produce successful results.</p>
</div>
</div>
</div>
 <div class="container-fluid padding fade gap">
 <div class="row padding">
    <div class="col-md-12 mt-5">
      <h1 class="display-4 text-center">A Culture</h1>
      <br>

      <img class="center bigpic mt-5" src="img/teampic.jpg">
      <br>
      <br>
      <p class = "ps-2 lead mt-5">Proximity Racing has become engulfed into the racing community. With 15+ active drivers on the team racing regularly, it's been in our blood since the start. But we are more than a race team; We are family. It’s all about the long lasting friendships, building the necessary skills and giving back.</p>
      <br>
      <p class="ps-2 lead">From late night discords chats, fun league racing to sending each other funny memes and even playing other games such as Minecraft, Rocket League, Overwatch, etc. there’s always a way to build connections on the team.</p>
      <br>
      <p class="ps-2 lead">We gurantee you that we will make you a better racer. We help build new skills and sharpen old ones. No matter what series, car or track you prefer; We got you covered. Some of our notable board members and current drivers have been in the racing world for over a decade. Some of them even race in the real world. There is never not a resource to ask advice for.</p>
      <br>
      <p class="ps-2 lead">When joining our family, you get access to many replay files over multiple tracks, telemetry and real world knowledge setups and all our paint schemes, suits, helmets that are professionally designed. On top of that, you receive access to the discord, receive a website profile get email subscription access and get included in shoutouts on all our social media accounts. You would also get to represent our incredible sponsors on the track!</p>
     </div>
    </div>
   </div>

  <div class="container-fluid fixed5 fade">
  <div class="row">
          <div class="text-center col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 gap">
        <h1 class="fixedbackgroundheader">eNASCAR Ignite Series</h1>
        <a href="https://www.iracing.com/nascarignite/" target="_blank"><img src="img/ignitelogo.jpg" class="img-fluid picoverlay mt-5"></a>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 gap">
      <p class="lead pp fixedbackgroundtext">Proximity Racing competes in the NASCAR sanctioned series, Ignite. In the 2019 season, our drivers placed all in the top 30, making them all eligible to compete for the championship prize.</p>
      <br><br>
            <a target="_blank" href="https://www.iracing.com/nascarignite/"><button type="button" class="btn btn-secondary btn-lg pp-btn">Ignite Series Page</button></a>
    </div>
  </div>
</div>

 <div class="container-fluid padding fade gapbig">
 <div class="row padding text-center">
    <div class="col-md-12">
      <h1 class="display-4">Amenities</h1>
    </div>
      
 </div>

 <div class="container-fluid padding fade amenities">
 <div class="row padding">
      <div class="col-xs-12 col-md-6">
       <ul class="amenities">
        <li class="lead">Professional Training</li>
        <li class="lead">Access to replays, setups, telemetry files and tools</li>
        </ul>
      </div>
      <div class="col-xs-12 col-md-6">
       <ul class="amenities">
        <li class="lead">Paint scheme library access</li>
        <li class="lead">Representing our top sponsors</li>
        <li class="lead">Merchandise</li>
       </ul>
     </div>
</div>
</div>
</div>

  <div class="container-fluid fixed6 fade gapbig">
  <div class="row">
          <div class=" col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 gap">
            <h1 class="fixedbackgroundheader pp">iRacing Road to Pro</h1>
                  <p class="lead pp fixedbackgroundtext mt-5">This year we are making a run for one of the biggest series, Road to Pro. It is a way for our drivers to attain a Pro license.</p>
      <br><br>
            <a target="_blank" href="#"><button type="button" class="btn btn-primary btn-lg pp-btn">Pro Series Page</button></a>

    </div>
    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 gap">
        
        <a href="https://www.iracing.com/nascarignite/" target="_blank"><img src="img/rtp.png" class="img-fluid picoverlay mt-5"></a>
    </div>
  </div>
</div>


<div class="container-fluid padding fade gap">
  <div class="text-center">
    <h1 class="display-4">Current Stats</h1>
  </div>
 <div class="row padding gapbig">
      <div class="Count col-xs-12 col-md-6">
        <h1 class="text-center">Board Members</h1>
        <h1 class="Counter text-center" data-count = 8>0</h1>
     </div>
      <div class="Count col-xs-12 col-md-6">
        <h1 class="text-center">Active Drivers</h1>
        <h1 class="Counter text-center" data-count = 15>0</h1>
     </div>
</div>
</div>
<script>
var a = 0;
$(window).scroll(function() {
  var oTop = $('.Count').offset().top - window.innerHeight;
  if (a == 0 && $(window).scrollTop() > oTop) {
    $('.Counter').each(function() {
      var $this = $(this),
        countTo = $this.attr('data-count');
      $({
        countNum: $this.text()
      }).animate({
          countNum: countTo
        },
        {
          duration: 2000,
          easing: 'swing',
          step: function() {
            $this.text(Math.floor(this.countNum));
          },
          complete: function() {
            $this.text(this.countNum);
          }
        });
    });
    a = 1;
  }
});
</script>




<script>
    $(function(){
      $().timelinr({
        arrowKeys: 'true'
      })
    });
</script>

<section class="back fade gapbiggest gap-bot">
  <div class="col-md-12 text-center">
    <h1 style="font-size: 50px;">Our Timeline</h1>
  </div>
  <div id="timeline">
    <ul id="dates">
      <li><a href="#2016">2016</a></li>
      <li><a href="#2017">2017</a></li>
      <li><a href="#2018">2018</a></li>
      <li><a href="#2019">2019</a></li>
    </ul>
    <ul id="issues">
      <li id="2016">
        <img class ="override" src="images/pr1.png" width="256" height="256" />
        <h1 class="headerOverride">November 10, 2016</h1>
        <p>Proximity Racing Founded</p>
      </li>
      <li id="2017">
        <img class = "override" src="img/winglen.jpg" width="384" height="216" />
        <h1 class="headerOverride">2017</h1>
        <br><br>
        <p>6 Hours of Watkins Glen - Split 2 GT3 Class Winner<br>
        6 Hours of Watkins Glen - Split 6 GT3 Class Winner</p>
      </li>
      <li id="2018">
        <img class="override" src="images/Proximity24HoursWin.png" width="467" height="205" />
        <h1 class="headerOverride">2018</h1>
        <br>
        <p>24 Hours of Daytona - Split 14 GT3 Class Winner</p>
      </li>
      <li id="2019">
        <img class="override" src="img/winner42ss.jpg" width="384" height="216" />
        <h1 class="headerOverride">2019</h1>
        <br><br>
        <p class="poverride">iSCAR JTP Graphix Series Season 1 Champion<br>
          iSCAR Street Stock Series Season 6 Champion<br>
          iSCAR Tolsma Designs Truck Series Season 2 Champion <br>
          iSCAR Street Stock Series Season 8 Champion<br>
          iSCAR Modified Tour presented by SR Designs Season 1 Champion
        </p>
      </li>
    </ul>
    <div id="grad_left"></div>
    <div id="grad_right"></div>
    <a href="#" id="next">+</a>
    <a href="#" id="prev">-</a>
  </div>
</section>

<?php
include_once 'footer.php'; ?>
  </body>
</html>