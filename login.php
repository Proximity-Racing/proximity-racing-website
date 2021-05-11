<?php
require 'lib/site.inc.php';
$view = new ProximityRacing\GeneralView();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php echo $view->presentHeader("Login | Proximity Racing"); ?>
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TBKGS5L" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <div class="container">
        <form class="form-signin" action="" method="POST">
            <button onclick="window.location.href = './';" type="button" class="btn btn-dark btn-sm">Back to
                Home</button>
            <br>
            <h1 class="text-center">Sign in</h1>
            <br>
            <br>
            <p>
                <label class="sr-only">Email address</label>
                <input name="email" type="email" placeholder="Email address" class="form-control" required autofocus>
            </p>
            <p>
                <label class="sr-only">Password</label>
                <input name="password" type="password" placeholder="Password" class="form-control" required>
            </p>
            <p class="checkbox"><input type="checkbox">Remember me</p>
            <button type="submit" name="login" class="btn btn-primary btn-block">Sign in</button>
            <p><a class="fo" href="register.php">Register</a></p>
            <p><a class="fo" href="sendpasswordreset.php">Reset Password</a></p>
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