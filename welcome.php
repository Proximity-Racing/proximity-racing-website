<?php
require 'lib/site.inc.php';
$view = new ProximityRacing\GeneralView();
?>
<!DOCTYPE html>
<html>
<head>
<?php echo $view->presentHeader("Welcome | Proximity Racing"); ?>
</head>
<body>
  <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TBKGS5L"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
  <div class="container-fluid">
  	<div class="col-md-12">
  		<button onclick="window.location.href = './';" type="button" class="btn btn-dark btn-sm">Back to Home</button>
  	<h2>Welcome to Proximity Racing!</h2>
  	<br>

  	<p>Thank you for registering. We will review your profile and determine your status. If you are on the team, you will be able to be viewed on the "Members" page. If you are not on the team, however, you will still access to your account after clicking the activation link sent to your email, it just won't be visible to others.
    </p>
  	</div>
  </div>
	
</body>
</html>

