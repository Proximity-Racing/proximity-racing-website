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
    <title>News | Proximity Racing</title>
    <meta name="description" content="Proximity Racing is a sanctioned iRacing.com motorsport team">
    <meta name="robots" content="index, follow" />
    <meta name="keywords" content="proximity racing, proximity, proximityracing, iracing, chris nosowsky">
    <link rel="stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <link rel="stylesheet" href="style.css" />
    <link rel="canonical" href="https://proximityracing.com/news.php" />
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
            <li class="nav-item">
              <a class="nav-link" href="./">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./about.php">About</a>
            </li>
            <li class="nav-item active">
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
    <header class="masthead headerimg">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="post-heading">
            <h1 style="color: white; font-size: 100px;">News</h1>
            <br>
            <br>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- Latest Blog on Top -->
  <div class="container-fluid">
    <div class="row padding">
      <div class="col-md-6">
        <img class="newspic img-fluid" src="img/blog4pic2.jpg" style="float:left;">
      </div>
      <div class="col-md-6">
        <div class="padding-top">
        <p class="sm">Tre Shuttlesworth</p>
        <p class="sm">Nov 27 | 4 min</p>
        <a class="nolink" href="blog4.php"><h2 class="split">Daytona High Banks Claim Proximity Racing in iSCAR Competition</h2>
        <p class="split">While the harshness of a cold winter looms, putting an end to real-life motorsport across America for the year, virtual action ramped up...</p>

        </a>
        </div>
      </div>
    </div>
  </div>



  <div class="container-fluid">
    <div class="row padding">
      <div class="col-md-6">
        <img class="newspic img-fluid" src="img/parkerwin.png" style="float:left;">
      </div>
      <div class="col-md-6">
        <div class="padding-top">
        <p class="sm">Tre Shuttlesworth</p>
        <p class="sm">Aug 25 | 4 min</p>
        <a class="nolink" href="blog.php"><h2 class="split">Parker Retzlaff Nets a Controversial Ignite Win from Thompson</h2>
        <p class="split">Round 3 of the eNASCAR Ignite Series saw iRacing's best young oval racers head to the one-groove Thompson Speedway last Thursday Night...</p>

        </a>
        </div>
      </div>
    </div>
  </div>


  <div class="container-fluid">
    <div class="row padding">
      <div class="col-md-6">
        <img class="newspic img-fluid" src="img/bristolwin.jpg" style="float:left;">
      </div>
      <div class="col-md-6">
        <div class="padding-top">
        <p class="sm">Tre Shuttlesworth</p>
        <p class="sm">Aug 19 | 4 min</p>
        <a class="nolink" href="blog2.php"><h2 class="split">Retzlaff Continues Streak of Perfection with Bristol Win</h2>
        <p class="split">The Virtual Last Great Coliseum in Bristol, Tennessee played host the eNASCAR Ignite Series last Thursday where Parker Retzlaff continued his hot streak, leading flag to flag while Lucas Cram...</p>

        </a>
        </div>
      </div>
    </div>
  </div>


    <div class="container-fluid">
    <div class="row padding">
      <div class="col-md-6">
        <img class="newspic img-fluid" src="img/richmondwin.jpg" style="float:left;">
      </div>
      <div class="col-md-6">
        <div class="padding-top">
        <p class="sm">Tre Shuttlesworth</p>
        <p class="sm">Aug 10 | 4 min</p>
        <a class="nolink" href="blog3.php"><h2 class="split">Parker Retzlaff Sets Pace in eNASCAR Ignite Series Opener</h2>
        <p class="split">Thursday marked the opening round to the eNASCAR Ignite Series Playoff Opener, with Parker Retzlaff commanding raw pace over the field in...</p>
        </a>
        </div>
      </div>
    </div>
  </div>
<?php include 'footer.php'; ?>
</body>
</html>