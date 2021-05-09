<?php
require 'lib/site.inc.php';
$view = new ProximityRacing\GeneralView();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php echo $view->presentHeader("News | Proximity Racing"); ?>
</head>

<body>
  <?php echo $view->presentNavbar(); ?>
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
  <?php if (isset($_SESSION['role'])) : ?>
    <?php if ($_SESSION['role'] == 'ADMIN') : ?>
      <button class="btn btn-primary"><a class="nolink" href="./write.php">Write</a></button>
    <?php else : ?>
    <?php endif; ?>
  <?php else : ?>
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
  <?php echo $view->footer(); ?>
</body>

</html>