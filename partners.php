
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
    <title>Partners | Proximity Racing</title>
    <meta name="description" content="Proximity Racing is a sanctioned iRacing.com motorsport team">
    <meta name="robots" content="index, follow" />
    <meta name="keywords" content="proximity racing, proximity, proximityracing, iracing, chris nosowsky">
    <link rel="stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <link rel="stylesheet" href="style.css" />
    <link rel="canonical" href="https://proximityracing.com/partners.php" />
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
    <nav class="navbar navbar-expand-md navbar-dark bg-dark stivky-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="./"><img src="img/ProximityRacing_Logo_Word Bright Blue.png"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse"
        data-target="#navbarResponsive">
          <span class="navbar-toggler-icon"> </span>
        </button>
        <div class ="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
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
            <li class="nav-item active">
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

<div class="partnerheader">
        <div class="col-lg-8 col-md-10 mx-auto">
            <h1 class="partnersHeaderFont">Our Partners</h1>
            <br>
            <br>
        </div>
  </div>
    <div class="container-fluid padding">

        <div class="row gap">
        <div class="col-md-6 inline">
          <a href="https://allservdoor.wixsite.com/allservdoor" target="_blank">
          <img class="img-fluid center partnerspic" src="img/AllserDoorOfficialLogo3.png"></a>
          <br>
          <p class="ps">
            Allserv Garage Door & Openers is one of Detroit Metros best when it comes to garage door service. Offering 24-hour emergency service and incredible work done by the business owner after being in the business for 20 years, you are guaranteed to get the best quality for the best price that their competitors cannot beat.
          </p>
        </div>
        <div class="col-md-6 inline">
          <a href="https://www.instagram.com/treshuttlesworthphotography/" target="_blank">
          <img class="img-fluid center partnerspic" src="img/TSP.png">
          </a>
          <p class="ps">
            Tre Shuttlesworth Photography is a freelance producer of photography and videography services specializing in motorsport. We aim to convey the passion and spirit of motorsport through multimedia solutions.
          </p>
        </div>
        <div class="col-md-6 inline">
          <a href="https://www.facebook.com/RexfordEngineering" target="_blank">
          <img class="img-fluid center partnerspic" src="img/RE_Black.png"></a>
          <br>
          <p class="ps">
            Rexford Engineering is a small sim-racing equipment manufacturer based out of Massachusetts that creates button boxes and is looking into creating other equipment such as custom rims, pedals, and shifters.
          </p>
        </div>

        <div class="col-md-6 inline">
          <a href="https://www.facebook.com/splashngographics/" target="_blank">
          <img class="img-fluid center splashGo partnerspic" src="img/splashgo.png"></a>
          <br>
          <p class="ps">
            Looking for the best in the business when it comes to paint schemes? Splash N Go Graphics is the top graphics design company on iRacing with some of the best designers around. With hundreds of paint schemes designed for their clients, they put dedication and precision together to make sure you are fully satisfied, no matter what vehicle.
          </p>
        </div>

        <div class="col-md-6 inline">
          <a target="_blank" href="https://soundcloud.com/graham-cracker-yuh">
          <img class="img-fluid center smallerPic" src="img/GramCrackerFinal.png"></a>
          <br>
          <p class="ps">
            If you are interested in rock, EDM or just music in general, then Graham Cracker will not fail to dissapoint. As a growing hobbyist for music, Grant Marquart writes, sings and produces his own music which all happens at home. He also has influence from German artists!
          </p>
        </div>
        <div class="col-md-6 inline"></div>
      </div>
    </div>
    <?php include 'footer.php'; ?>
  </body>
</html>