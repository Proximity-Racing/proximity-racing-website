<?php
require 'lib/site.inc.php';
include_once '../config/db_conn.php';
$view = new ProximityRacing\GeneralView();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php echo $view->presentHeader("Members | Proximity Racing"); ?>
</head>

<body>
  <?php echo $view->presentNavbar(); ?>
  <div class="col-md-12">
    <h1 class="text-center display-4" style="margin-top: 1.5em; margin-bottom: 1.5em;font-weight:500">Our Team</h1>
  </div>

  <div class="container-fluid padding">
    <div class="row text-center">
      <?php

      $query = "SELECT * FROM members ORDER BY priority+0 LIMIT 1;";
      $query2 = "SELECT * FROM members ORDER BY priority+0 DESC LIMIT 1;";
      $first = mysqli_fetch_array(mysqli_query($con, $query));
      $last = mysqli_fetch_array(mysqli_query($con, $query2));
      $i = $first['priority'];
      while ($i <= $last['priority']) :
        $query3 = "SELECT * FROM proximityracing.members where priority = '$i';";
        $data = mysqli_fetch_array(mysqli_query($con, $query3));
        $_SESSION['userid'] = $data['member_id'];
        $_SESSION['firstname'] = $data['first_name'];
        $_SESSION['lastname'] = $data['last_name'];
        $_SESSION['profilepic'] = $data['profile_pic'];
        $_SESSION['position'] = $data['position'];
        $_SESSION['priority'] = $data['priority'];
        $str = "userid={$_SESSION['userid']}&fname={$_SESSION['firstname']}&lname={$_SESSION['lastname']}";
      ?>
        <?php if ($_SESSION['priority'] > 0) : ?>
          <div class="col-md-4">
            <a class="aye" href="user.php?<?php echo $str; ?>"><img class="aye img-fluid rounded-circle" src=<?php echo "profile_pictures/" . $_SESSION['profilepic'] ?> alt="driver"> </a>
            <div class="card-body">
              <h4 class="card-title"><?php echo $_SESSION['firstname'] ?> <?php echo $_SESSION['lastname'] ?></h4>
              <h6 class="card-title"><?php echo $_SESSION['position'] ?></h6>
            </div>
          </div>
        <?php endif; ?>
      <?php $i++;
      endwhile; ?>

    </div>
  </div>
  <?php echo $view->footer(); ?>
</body>

</html>