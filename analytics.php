<?php
require 'lib/site.inc.php';
$view = new ProximityRacing\GeneralView();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php echo $view->presentHeader("Analytics | Proximity Racing"); ?>
</head>

<body style="background-color: #050505;">
  <?php echo $view->presentNavbar(); ?>

  <div class="proxanalyticsheader captionfadein">
  </div>

  <h2 class="text-center">Coming Soon.</h2>
  <br>
  <br>
  <?php echo $view->footer(); ?>
</body>

</html>