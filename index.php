 <!--Proximity Racing Website Coded By: Chris Nosowsky-->
<?php
  session_start();
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
    <meta name="google-site-verification" content="AukAjPW9r21qYaTiRJPy5nR3cIypkD4IAXpG2TA57Bk" />
    <meta name="google-site-verification" content="PoZ0KOGt9LqkAqRfxtfaWOnWpzHvLvN5b4Bn2koSqM4" />
    <link rel="icon" href="img/favicon.png" type="image/png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home | Proximity Racing</title>
    <meta name="description" content="Proximity Racing is a sanctioned iRacing.com motorsport team">
    <meta name="robots" content="index, follow" />
    <meta name="keywords" content="proximity racing, proximity, proximityracing, iracing, chris nosowsky">
    <link rel="stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script type="application/ld+json">
      { "@context" : "http://schema.org",
        "@type" : "Organization",
        "name" : "Proximity Racing",
        "url" : "https://proximityracing.com/",
        "sameAs" : ["https://www.facebook.com/ProximityRacing",
                    "https://www.twitter.com/ProximityRacing",
                    "https://www.instagram.com/ProximityRacing",
                    "https://www.youtube.com/channel/UCzIyawQKpJ5DRM-_TROvZJw",
                    "https://www.twitch.tv/ProximityRacing"]
      }

    </script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <script src="jquery/scripts.js"></script>
    <link rel="canonical" href="https://www.proximityracing.com/" />
    <link rel="stylesheet" type = "text/css" href="style.css" />
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-155164803-1"></script>
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
    <nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top">

      <div class="container-fluid">
        <a class="navbar-brand" href="./"><img src="img/prlogo1.png"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse"
        data-target="#navbarResponsive">
          <span class="navbar-toggler-icon"> </span>
        </button>
        <div class ="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="./">Home</a>
            </li>
            <li class="nav-item">
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
    <div id="noback" class="video-background">
        <div id="noback">
          <video id="noback" autoplay loop muted playsinline>
            <source src="video/prox.mp4" type="video/mp4">
          </video>
        </div>
    </div>
    <div class="caption text-center">
      <h1 class="captionfadein">WELCOME TO</h1>
      <img class="captionfadein capimgsm" src="img/prlogo1.png">
    </div>
  <div class="container-fluid fixed4 fade">
  <div class="row">
          <div class="text-center col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 gap">
        <h1 class="fixedbackgroundheader">Who We Are</h1>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 gap">
      <p class="lead pp fixedbackgroundtext">Proximity Racing is a sanctioned iRacing.com motorsport team. Founded November 10th, 2016, our team started with five members.  After our 24 Hours of Daytona run coming short in 2017, we reformed our team, expanding our member base.</p>
      <br><br>
            <a href="./about.php"><button type="button" class="btn btn-secondary btn-lg pp-btn">Learn More</button></a>
    </div>
  </div>
</div>


<!-- Welcome -->
<div class="container-fluid padding fade">
<div class="row welcome text-center">
  <div class="col-12">
    <h1 class="display-4">Latest News</h1>
  </div>
  <hr>
</div>
</div>
<div class="container-fluid padding fade">
<div class="row text-center padding">
  <div class="col-xs-12 col-md-12">
    <a href="./news.php"><img src="img/blog4pic2.jpg" class="img-fluid bigpic"></a>
    <h1 class="display-4 ps-sm"><a class="nolink" href="./blog4.php">Daytona High Banks Claim Proximity Racing in iSCAR Competition</a></h1>
    <p class="mt-5 lead ps-3">While the harshness of a cold winter looms, putting an end to real-life motorsport across America for the year, virtual action ramped up...</p>
  </div>
</div>
</div>


<div class="loader-wrapper">
    <span class="loader"><span class="loader-inner"></span></span>
</div>
    <script>
        $(window).on("load",function(){
          $(".loader-wrapper").fadeOut("slow");
        });
    </script>


<div class="container-fluid fade fixed3">
<div class="row">
  <div class="col-sm-12 col-md-6">
    <br><br><br>
    <h1 class="text-center fixedbackgroundheader">Our Partners</h1>
    <p class="lead pp mt-5" style="color:white;  text-shadow: -1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000;font-size: 18px !important;">We are extremely fortunate to have our partners on board our vehicles for the 2020 season. Not only do they help us by providing opportunities to develop our talented drivers, but we help them get the best exposure on and off the track by frequently promoting their business on social media and using industry leading marketing strategies.</p>
    <a href="./about.php"><button type="button" class="btn btn-secondary btn-lg pp mt-5">Learn More</button></a>
  </div>
  <div class="col-6 col-sm-6 col-md-3">
    <br><br>
    <a href="https://allservdoor.wixsite.com/allservdoor" target="_blank"><img src="img/AllserDoorOfficialLogo3.png" class="img-fluid picoverlay hidesmall mt-5"></a>
    <a href="https://www.instagram.com/treshuttlesworthphotography/" target="_blank"><img src="img/TSP.png" class="img-fluid picoverlay hidesmall mt-5"></a>
    <a href="https://www.facebook.com/splashngographics/" target="_blank"><img src="img/splashgo.png" class="img-fluid center2 picoverlay hidesmall mt-5"></a>
  </div>
  <div class="col-6 col-sm-6 col-md-3">
    <br><br><br><br>
    <a href="https://www.facebook.com/RexfordEngineering" target="_blank"><img src="img/RE_White.png" class="img-fluid picoverlay hidesmall"></a>
    <a href="https://www.facebook.com/kirkwoodtransportation" target="_blank"><img src="img/KT2.png" class="img-fluid picoverlay hidesmall mt-5"></a>
    <a href="https://soundcloud.com/graham-cracker-yuh" target="_blank"><img src="img/GramCrackerFinal.png" class="img-fluid picoverlay hidesmall mt-5"></a>
  </div>
</div>
</div>


<!-- Meet the team -->
<div class="container-fluid padding fade">
<div class="row welcome text-center">
  <div class="col-12">
    <h1 class="display-4">Meet the Team</h1>
  </div>
  <hr>
</div>
</div>


<!-- Cards -->
<div class="container-fluid padding fade">
<div class="row padding">
  <div class="col-md-3">
    <div class="card">
      <?php
      include_once '../config/db_conn.php';
      $result3 = mysqli_query($con, "SELECT * FROM members where name='Chris Nosowsky'");
      $row3 = mysqli_fetch_array($result3);
      $image = $row3['profilepic']
      ?>
      <img class="card-img-top" src=<?php echo "profile_pictures/".$image ?>>
      <div class="card-body d-flex flex-column">
        <h4 class="card-title">Chris Nosowsky</h4>
        <h6 class="card-title">Founder; Vice President</h6>
        <p class="card-text">Chris is the Founder of Proximity Racing and currently serves as the website designer and vice president.</p>
        <div class="mt-auto">
        <a href="https://proximityracing.com/user.php?userid=6&name=Chris%20Nosowsky" class="btn btn-outline-secondary">Profile</a>
        </div>
      </div>
    </div>
  </div>

  <div class="col-md-3">
    <div class="card">
      <img class="card-img-top" src="img/chase.png">
      <div class="card-body d-flex flex-column">
        <h4 class="card-title">Chase Bonser</h4>
        <h6 class="card-title">President</h6>
        <p class="card-text">Chase is the current President of Proximity Racing and currently serves as an active driver.</p>
        <div class="mt-auto">
        <a href="#" class="btn btn-outline-secondary">Profile</a>
        </div>
      </div>
    </div>
  </div>

  <div class="col-md-3">
    <div class="card">
      <img class="card-img-top" src="img/dimaggio.jpg">
      <div class="card-body d-flex flex-column">
        <h4 class="card-title">Michael DiMaggio</h4>
        <h6 class="card-title">Co-Founder; Administration</h6>
        <p class="card-text">Michael DiMaggio is the Co-Founder and currently serves on the administration team at Proximity Racing.</p>
        <div class="mt-auto">
        <a href="#" class="bot btn btn-outline-secondary">Profile</a>
      </div>
      </div>
    </div>
  </div>    

<div class="col-md-3">
    <div class="card">
      <img class="card-img-top" src="img/tre.png">
      <div class="card-body d-flex flex-column">
        <h4 class="card-title">Tre Shuttlesworth</h4>
        <h6 class="card-title">Board Member; Blogger</h6>
        <p class="card-text">Tre Shuttlesworth is an active board member and serves as the teams secretary and blogger.</p>
        <div class="mt-auto">
        <a href="#" class="mt-auto btn btn-outline-secondary">Profile</a>
      </div>
      </div>
    </div>
  </div>    
</div>
</div>


<!-- Two Column Section -->
<div class="container-fluid fade fixed2 jumbotron">
<div class="row">
     <div class="col-xs-12 col-md-6 gap">
        <br><br>
    <h1 class="text-center" style="font-size: 55px; color: white;text-shadow: -1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000;">Current Leagues</h1>
    <p class ="lead pp mt-5" style="color:white;font-size: 25px !important;text-shadow: -1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000;">Leagues are a fun way to get exposure, win races and championships and ultimately build our drivers skill level. Here are some of the current leagues we run.</p>
  </div>
  <div class="col-6 col-md-3 gap">
    <img class ="img-fluid leaguepics mt-4" src="img/norse.png">
    <img class ="img-fluid leaguepics mt-4" src="img/norse2.png">
  </div>
  <div class="col-6 col-md-3 gap">
    <img class ="img-fluid leaguepics mt-4" src="img/flatout.png">
    <img class ="img-fluid leaguepics mt-4" src="img/iscar.png">
  </div>
</div>
</div>


<!-- Connect -->
<div class="container-fluid padding fade gap gap-bot">
<div class="row text-center padding">
  <div class="col-12">
    <h1>Connect</h1>
    <p class="lead mt-4">Keep up with the action on our social media! We post actively and give live feed updates on major races we run.</p>
  </div>
  <div class="col-12 social padding">
    <a href="https://www.facebook.com/ProximityRacing" target="_blank"><i class="fab fa-facebook"></i></a>
    <a href="https://www.twitter.com/ProximityRacing" target="_blank"><i class="fab fa-twitter"></i></a>
    <a href="https://www.instagram.com/ProximityRacing" target="_blank"><i class="fab fa-instagram"></i></a>
    <a href="https://www.youtube.com/channel/UCzIyawQKpJ5DRM-_TROvZJw" target="_blank"><i class="fab fa-youtube"></i></a>
    <a href="https://www.twitch.tv/ProximityRacing" target="_blank"><i class="fab fa-twitch"></i></a>
  </div>
</div>
</div>
<?php include 'footer.php'; ?>
  </body>
</html>
