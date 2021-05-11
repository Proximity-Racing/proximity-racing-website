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
    <?php echo $view->footer(); ?>
</body>

</html>