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
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="img/favicon.png" type="image/png">
    <title><?php echo $_GET['fname']; ?> <?php echo $_GET['lname']; ?>| Proximity Racing</title>
    <meta name="description" content="Proximity Racing is a sanctioned iRacing.com motorsport team">
    <meta name="robots" content="index, follow" />
    <meta name="keywords" content="proximity racing, proximity, proximityracing, iracing, chris nosowsky">
    <link rel="stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <link rel="canonical" href="https://proximityracing.com/user.php" />
    <script src="jquery/scripts.js"></script>
    <link rel="stylesheet" type = "text/css" href="style.css" />
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
    <?php 
      include_once 'navbar.php';
    ?>
    <?php
    include '../config/db_conn.php';
    ?>
    <?php
      require_once('../config/db_conn.php');
      $id=$_GET['userid'];
      $result3 = mysqli_query($con, "SELECT * FROM members where member_id='$id'");
      $row3 = mysqli_fetch_array($result3);
      $fname=$row3['first_name'];
      $lname=$row3['last_name'];
      $address=$row3['hometown'];
      $contact=$row3['phone_number'];
      $about = $row3['about'];
      $picture=$row3['profile_pic'];
      $bday=$row3['birthday'];
      $school=$row3['school'];
      $iracing=$row3['iracing'];
      $facebook=$row3['facebook'];
      $twitter=$row3['twitter'];
      $instagram=$row3['instagram'];
      $youtube=$row3['youtube'];
      $snapchat=$row3['snapchat'];
      $twitch=$row3['twitch'];
      $position=$row3['position'];
    ?>
    <div class="container-fluid padding fade fadeinall">
      <div class="row">
        <div class="col-xs-12 col-md-6 text-center">
          <img class = "img-fluid fullpic" src= <?php echo "profile_pictures/".$picture ?>>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6 mobile-ml3">
        <h2 class="mt-5"><?php echo $fname; ?> <?php echo $lname; ?></h4>
        <h5><?php echo $position; ?></h5>
        <br>
        <p class="lead mt-4">Address: <?php echo $address; ?></p>
        <p class = "lead">Phone Number: <?php echo $contact; ?></p>
        <p class = "lead">Birthday: <?php echo $bday; ?></p>
        <p class = "lead">School: <?php echo $school; ?></p>
        </div>
      </div>
    </div>
    <hr class="purpleRuler fade">
    <div class="container-fluid padding fade">
      <div class="text-center">
            <h2>About</h2>
            
      </div>
      <p class = "pp lead mt-4"><?php echo $about; ?></p>
    </div>
    <hr class="purpleRuler fade">
    <div class="container-fluid padding fade">
      <div class="text-center">
            <h2>Achievements</h2>
            <h4><?php echo "Coming Soon"; ?></h4>
      </div>
    </div>
    <hr class="purpleRuler fade">
        <div class="container-fluid padding fade">
      <div class="text-center">
        <button onclick="window.location.href = <?php echo $iracing ?>;" type="button" class="btn btn-primary btn-lg btn-block">iRacing Profile</button>
      </div>
    </div>

<div class="container-fluid padding fade">
  <div class="text-center">
    <div class="social-footer-icons profileSocial">
        <a class="fi" href= <?php echo $facebook ?> target="_blank"><i class="fab fa-facebook" aria-hidden="true"></i></a>
        <a class="fi" href= <?php echo $twitter ?> target="_blank"><i class="fab fa-twitter" aria-hidden="true"></i></a>
        <a class="fi" href= <?php echo $instagram ?> target="_blank"><i class="fab fa-instagram" aria-hidden="true"></i></a>
        <a class="fi" href= <?php echo $youtube ?> target="_blank"><i class="fab fa-youtube" aria-hidden="true"></i></a>
        <a class="fi" href= <?php echo $snapchat ?> target="_blank"><i class="fab fa-snapchat" aria-hidden="true"></i></a>
        <a class="fi" href= <?php echo $twitch ?> target="_blank"><i class="fab fa-twitch" aria-hidden="true"></i></a>
    </div>
  </div>
  </div>
  <?php include 'footer.php'; ?>
  </body>
</html>