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
            <button onclick="window.location.href = './';" type="button" class="btn btn-dark btn-sm">Back to
                Home</button>
            <br>
            <h1 class="text-center">Reset Password</h1>
            <br>
            <br>
            <p>
                <label class="sr-only" for="newPassword">New Password</label>
                <input name="password" type="password" placeholder="New Password" class="form-control"
                    onChange="onChange()" required autofocus id="newPassword">
            </p>
            <p>
                <label class="sr-only">Confirm Password</label>
                <input name="cpassword" type="password" placeholder="Confirm Password" onChange="onChange()"
                    class="form-control" required>
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