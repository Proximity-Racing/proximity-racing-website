<?php
require 'lib/site.inc.php';
$view = new ProximityRacing\GeneralView();
?>
  <!DOCTYPE html>
<html lang ="en">
  <head>
  <?php echo $view->presentHeader("Login | Proximity Racing"); ?>
  </head>
  <body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TBKGS5L"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
  	<div class="container">
      <form class="form-signin" action="password-reset-token.php" method="post">
        <button onclick="window.location.href = './';" type="button" class="btn btn-dark btn-sm">Back to Home</button>
        <br>
  			<h1 class="text-center">Reset Password</h1>
        <br>
        <br>
  			<p>
  				<label class="sr-only" for="newPassword">Enter Email</label>
  				<input name = "email" type="email" placeholder="Enter Email" class="form-control" required autofocus id="newPassword">
  			</p>
  			<button type="submit" name="password-reset-token" class="btn btn-primary btn-block">Send Password Reset</button>
  		</form>
    </div>
</body>
</html>


