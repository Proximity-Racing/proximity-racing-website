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
    <title>Apply | Proximity Racing</title>
    <meta name="description" content="Proximity Racing is a sanctioned iRacing.com motorsport team">
    <meta name="robots" content="index, follow" />
    <meta name="keywords" content="proximity racing, proximity, proximityracing, iracing, chris nosowsky">
    <link rel="stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <link rel="stylesheet" href="style.css" />
    <link rel="canonical" href="https://proximityracing.com/apply.php" />
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

<div class="aboutheader">
        <div class="col-lg-8 col-md-10 mx-auto">
            <h1 style="color: white; font-size: 100px;">Open Positions</h1>
            <br>
            <br>
        </div>
  </div>


  <div class="container-fluid mt-5">
    <div class="row padding" style="margin-right: 15em; margin-left: 15em;">
    <div class="col-md-12">
      <p>
        We are actively recruiting for any positions avaliable throughout the calendar year. If you find any interest in the positions listed below and feel like you would be a good fit for our team, fill out the form <a href="#">here.</a> The applications steps are as follows:

        1) When we receive your application, we will evaluate it with our current team and determine if you would be a good fit for the positon

        2) We will reach out to you and have you meet our current team and describe in detail the role and what tasks and responsibilties you would be doing

        3) If we would like to move forward, we will email you back on our decision and you'll be immedaitely added to the position and our board member team.
      </p>
    </div>
  </div>
  </div>
<hr class="purpleRuler">
<div class="container-fluid mt-5">
<div class="row padding" style="margin-right: 15em; margin-left: 15em;">
  <div class="col-md-12" >
    <h1>Setup Builder</h1>
    <p>
      We are looking for both a road and oval setup builder for the upcoming season. If you are familiar with setup building, telemetry, team testing or vehicle dynamics, this is the position for you. Your responsibilities will include delivering high quality setups for endurance races, official open series races and league races.
    </p>
  </div>

  <div class="col-md-12">
    <h1>Marketing</h1>
    <p>In this role, you will be engaging in all the board member meetings, reaching out to anyone interested in joining the team, helping with getting our brand out there on social media, posting on the forums, and reaching out to potential sponsors.</p>
  </div>

  <div class="col-md-12">
    <h1>Photographer</h1>
    <p>This role is for someone who is inspired by photographer, likes to take pictures, specifically racing related. In this role, you will be responsible for the teams screenshots used on social media, blogs and the website. Must be able to run iRacing graphics on high settings.</p>
  </div>

   <div class="col-md-12">
    <h1>Videographer</h1>
    <p>Someone who has an interest in making videos, recording, editing videos for the internet, etc. In this role, you will be creating weekly highlights, promotional videos, coordinating our livestreams and helping with the camera angles for livestreaming/videos. If you are passionate about creating videos, specifically racing related then this is the role for you. Having a portfolio such as a Twitch or Youtube channel is a plus. Attended or attending college for film/video is a plus.</p>
  </div>

  <div class="col-md-12">
    <h1>UX/UI Designer</h1>
    <p>Someone that has a base knowledge of HTML and CSS/SASS. Able to work on the website components and conduct layout models and adjustments. Quick on feedback to fix any underlying compatibility issues. Ability to work in Adobe Illustrator and Photoshop along with preferred knowledge in wireframe tools such as InVision or Wireframe.cc</p>
  </div>
</div>
</div>
<?php include 'footer.php'; ?>
</body>
</html>