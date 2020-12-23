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
    <title>Members | Proximity Racing</title>
    <meta name="description" content="Proximity Racing is a sanctioned iRacing.com motorsport team">
    <meta name="robots" content="index, follow" />
    <meta name="keywords" content="proximity racing, proximity, proximityracing, iracing, chris nosowsky">
    <link rel="stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <link rel="stylesheet" href="style.css" />
    <link rel="canonical" href="https://proximityracing.com/drivers.php" />
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
    <div class="col-md-12">
      <h1 class="text-center display-4" style="margin-top: 1.5em; margin-bottom: 1.5em;font-weight:500">Our Team</h1>
    </div>

    <div class ="container-fluid padding">
      <div class="row text-center">
        <?php 
        include_once '../config/db_conn.php';
        $query = "SELECT * FROM members ORDER BY priority+0 LIMIT 1;";
        $query2 = "SELECT * FROM members ORDER BY priority+0 DESC LIMIT 1;";
        $first = mysqli_fetch_array(mysqli_query($con, $query));
        $last = mysqli_fetch_array(mysqli_query($con, $query2));
        $i = $first['priority'];
        while($i <= $last['priority']): 
          $query3 = "SELECT * FROM proximityracing.members where priority = '$i';";
          $data = mysqli_fetch_array(mysqli_query($con, $query3));
          $_SESSION['userid'] = $data['member_id'];
          $_SESSION['firstname'] = $data['first_name'];
          $_SESSION['lastname'] = $data['last_name'];
          $_SESSION['profilepic'] = $data['profile_pic'];
          $_SESSION['position'] = $data['position'];
          $_SESSION['priority'] = $data['priority'];
          $str = "userid={$_SESSION['userid']}&fname={$_SESSION['firstname']}&lname={$_SESSION['lastname']}";
          ?>
          <?php if($_SESSION['priority'] > 0): ?>
          <div class="col-md-4">
            <a class="aye" href="user.php?<?php echo $str; ?>"><img class="aye img-fluid rounded-circle" src=<?php echo "profile_pictures/".$_SESSION['profilepic'] ?> alt="driver"> </a>
            <div class="card-body">
              <h4 class="card-title"><?php echo $_SESSION['firstname'] ?> <?php echo $_SESSION['lastname'] ?></h4>
              <h6 class="card-title"><?php echo $_SESSION['position'] ?></h6>
            </div>
          </div>
        <?php endif; ?>
        <?php $i++;
        endwhile; ?>

      </div>
    </div>
    <?php include 'footer.php'; ?>
  </body>
</html>