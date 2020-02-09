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
    <title>My Profile | Proximity Racing</title>
    <meta name="description" content="Proximity Racing is a sanctioned iRacing.com motorsport team">
    <meta name="robots" content="index, follow" />
    <meta name="keywords" content="proximity racing, proximity, proximityracing, iracing, chris nosowsky">

    <link rel="stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <script src="jquery/scripts.js"></script>
    <link rel="stylesheet" type = "text/css" href="style.css" />
    <link rel="canonical" href="https://proximityracing.com/editprofile.php" />
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
    <?php
      require_once('../config/db_conn.php');
      $id=$_SESSION['id'];
      $result3 = mysqli_query($con, "SELECT * FROM members where id='$id'");
      $row3 = mysqli_fetch_array($result3);
      $fname=$row3['name'];
      $address=$row3['home'];
      $contact=$row3['num'];
      $about = $row3['about'];
      $picture=$row3['profilepic'];
      $bday=$row3['bday'];
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
    <form method="POST" action="">
    <button type="submit" class="btn btn-primary" name="edit">Edit Profile</button>
    <?php
      if (isset($_POST['edit'])) {
        echo "<script language=\"javascript\">document.location.href='profile.php';</script>";
      }

    ?>
    </form>
    <h4>User ID: <?php echo $id; ?></h4>
    <div class="container-fluid padding fade">
      <div class="text-center">
        <h2><?php echo $fname; ?></h4>
        <h5><?php echo $position; ?></h5>
        <img class = "aye img-fluid rounded-circle" src= <?php echo "profile_pictures/".$picture ?>>
        <br>
        <p>Address: <?php echo $address; ?></p>
        <p>Phone Number: <?php echo $contact; ?></p>
        <p>Birthday: <?php echo $bday; ?></p>
        <p>School: <?php echo $school; ?></p>
      </div> 
    </div>
    <hr class="purpleRuler fade">
    <div class="container-fluid padding fade">
      <div class="text-center">
            <h2>About</h2>
            <p><?php echo $about; ?></p>
      </div>
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