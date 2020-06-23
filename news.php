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
    <?php 
      include_once 'navbar.php';
    ?>
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
  <?php if(isset($_SESSION['role'])): ?>
    <?php if($_SESSION['role'] == 'ADMIN'): ?>
    <button class="btn btn-primary"><a class="nolink" href="./write.php">Write</a></button>
    <?php else: ?>
    <?php endif; ?>
  <?php else: ?>
    <?php endif; ?>



  <?php 
    include_once('./newsBlog.php');
  
  ?>

  <!-- <div class='container-fluid'>
    <div class='row padding'>
      <div class='col-md-6'>
        <img class='newspic img-fluid' src='blogpics/blogpics$id/$mainpic' style='float:left;''>
      </div>
      <div class='col-md-6'>
        <div class='padding-top'>
        <p class='sm'>$blogger</p>
        <p class='sm'>$smallmonth $smallday | $readtime min</p>
        <a class='nolink' href='blog.php?id=$id'><h2 class='split'>$title</h2>
        <p class='split'>While the harshness of a cold winter looms, putting an end to real-life motorsport across America for the year, virtual action ramped up...</p>

        </a>
        </div>
      </div>
    </div>
  </div> -->
<?php include 'footer.php'; ?>
</body>
</html>