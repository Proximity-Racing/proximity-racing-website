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
    <title>Login | Proximity Racing</title>
    <meta name="description" content="Proximity Racing is a sanctioned iRacing.com motorsport team">
    <meta name="robots" content="index, follow" />
    <meta name="keywords" content="proximity racing, proximity, proximityracing, iracing, chris nosowsky">
    <link rel="stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
     <meta name="google-signin-scope" content="profile email">
    <meta name="google-signin-client_id" content="YOUR_CLIENT_ID.apps.googleusercontent.com">
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <link rel="stylesheet" href="login.css" />
    <link rel="canonical" href="https://proximityracing.com/login.php" />
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
  	<div class="container">
  		<form class="form-signin" action="" method="POST">
        <button onclick="window.location.href = './';" type="button" class="btn btn-dark btn-sm">Back to Home</button>
        <br>
  			<h1 class="text-center">Sign in</h1>
        <br>
<!--           <div class="g-signin2" data-onsuccess="onSignIn" data-theme="dark"></div>
          <script>
            function onSignIn(googleUser) {
              // Useful data for your client-side scripts:
              var profile = googleUser.getBasicProfile();
              console.log("ID: " + profile.getId()); // Don't send this directly to your server!
              console.log('Full Name: ' + profile.getName());
              console.log('Given Name: ' + profile.getGivenName());
              console.log('Family Name: ' + profile.getFamilyName());
              console.log("Image URL: " + profile.getImageUrl());
              console.log("Email: " + profile.getEmail());

              // The ID token you need to pass to your backend:
              var id_token = googleUser.getAuthResponse().id_token;
              console.log("ID Token: " + id_token);
            }
          </script> -->
          <br>
  			<p>
  				<label class="sr-only">Email address</label>
  				<input name = "email" type="email" placeholder="Email address" class="form-control" required autofocus>
  			</p>
  			<p>
  				<label class="sr-only">Password</label>
  				<input name = "password" type="password" placeholder="Password" class="form-control" required>
  			</p>
  			<p class="checkbox"><input type="checkbox">Remember me</p>
  			<button type="submit" name="login" class="btn btn-primary btn-block">Sign in</button>
        <a class="fo" href="register.php">Register</a>
  		</form>
  	</div>



 </body>
</html>

<?php
  include '../config/db_conn.php';
  if (mysqli_connect_errno()) {
    echo "<script> console.log('ERROR!!!');</script>";
  }
  else {
    echo "<script> console.log('SUCCESS');</script>";
  }
  IF(ISSET($_POST['login'])){
    $email = $_POST["email"];
    $password = md5($_POST["password"]);
    $sql = "SELECT * FROM proximityracing.login where email = '$email' and password = '$password'";
    $result = mysqli_query($con, $sql);
    $cek = mysqli_num_rows($result);
    $data = mysqli_fetch_array(mysqli_query($con, "SELECT * FROM proximityracing.login where email = '$email' and password = '$password'"));
    IF($cek > 0)
    {
     session_start();
     $_SESSION['email'] = $data['email'];
     $_SESSION['first_name'] = $data['first_name'];
     $_SESSION['last_name'] = $data['last_name'];
     $_SESSION['id'] = $data['login_id'];
     $_SESSION['role'] = $data['role'];
     $_SESSION['success'] = true;
     if(isset($_SESSION['success'])) {
      echo "<script> console.log('SUCCESS');</script>";
     }
     echo "<script language=\"javascript\">alert(\"Succesfully logged in! \");document.location.href='index.php';</script>";
    }else{

     echo "<script language=\"javascript\">alert(\"Invalid email or password\");document.location.href='login.php';</script>";
     
    }
  }
  mysqli_close($con);
  ?>










