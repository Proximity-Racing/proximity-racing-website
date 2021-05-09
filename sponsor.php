<?php
require 'lib/site.inc.php';
$view = new ProximityRacing\GeneralView();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php echo $view->presentHeader("Become a Sponsor | Proximity Racing"); ?>
</head>

<body>
  <?php echo $view->presentNavbar(); ?>
  <div class="test">
    <div class="col-lg-8 col-md-10 mx-auto">
      <h1 class="headertext">Become a Sponsor</h1>
      <br>
      <br>
    </div>
  </div>


  <div class="container-fluid">
    <div class="row padding">
      <div class="col-md-12">
        <p class="lead ps mt-2">
          The Proximity Racing team is welcoming any brand or company for potential sponsorship.

          We rely on the generosity of sponsors in order to continue to grow our team and complete our mission of not just developing our drivers on the track, but off as well.

          By becoming a sponsor, you will be giving passionate racers an opportunity to get access to the necessary equipment in order to climb through the rankings. Your brand will be represented by one of iRacings top teams, featuring some of the most intellectual and professional drivers.
        </p>
      </div>
    </div>
  </div>
  <hr class="purpleRuler">

  <div class="container-fluid">
    <h1 class="text-center">Sponsorship Proposal</h1>
    <embed src="./Proximity_Racing_Sponsorship_2020.pdf" type="application/pdf" width="100%" height="600px">

  </div>

  <?php echo $view->footer(); ?>
</body>

</html>