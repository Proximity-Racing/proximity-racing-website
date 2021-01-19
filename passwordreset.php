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

  		</form>
        <?php
            if($_GET['key'] && $_GET['token'])
            {
            include "../config/db_conn.php";
            $email = $_GET['key'];
            $token = $_GET['token'];
            $query = mysqli_query($con,
            "SELECT * FROM `login` WHERE `reset_link_token`='".$token."' and `email`='".$email."';"
            );
            $curDate = date("Y-m-d H:i:s");
            if (mysqli_num_rows($query) > 0) {
            $row= mysqli_fetch_array($query);
            if($row['exp_date'] >= $curDate){ ?>
            <form method="post" action="update-forget-password.php">
                <input type="hidden" name="email" value="<?php echo $email;?>">
                <input type="hidden" name="reset_link_token" value="<?php echo $token;?>">
                <button onclick="window.location.href = './';" type="button" class="btn btn-dark btn-sm">Back to Home</button>
                <br>
                <h1 class="text-center">Reset Password</h1>
                <br>
                <br>
                <p>
                    <label class="sr-only" for="newPassword">New Password</label>
                    <input name = "password" type="password" placeholder="New Password" class="form-control" onChange="onChange()"  required autofocus id="newPassword">
                </p>
                <p>
                    <label class="sr-only">Confirm Password</label>
                    <input name = "cpassword" type="password" placeholder="Confirm Password" onChange="onChange()" class="form-control" required>
                </p>
                <button type="submit" name="reset_pw" class="btn btn-primary btn-block">Reset Password</button>
            </form>
            <?php } } else{ ?>
            <p>This password link has been expired</p>
            <button onclick="window.location.href = './';" type="button" class="btn btn-dark btn-sm">Back to Home</button>
            <?php
            }
            }
            ?>
    </div>
    <script type="text/JavaScript">
      function onChange() {
        const password = document.querySelector('input[name=password]');
        const confirm = document.querySelector('input[name=cpassword]');
        if (confirm.value === password.value) {
          confirm.setCustomValidity('');
        } else {
          confirm.setCustomValidity('Passwords do not match');
        }
      }
    </script>
</body>
</html>


