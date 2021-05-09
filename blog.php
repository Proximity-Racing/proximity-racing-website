<?php
require 'lib/site.inc.php';
$view = new ProximityRacing\GeneralView();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php echo $view->presentHeader("Blog | Proximity Racing"); ?>
</head>

<body>
  <?php echo $view->presentNavbar(); ?>
  <?php
  $id = $_GET['id'];
  include_once('../config/db_conn.php');
  $sql = "SELECT * FROM proximityracing.blogs WHERE id = $id ORDER BY id DESC";
  $res = mysqli_query($con, $sql);
  if (mysqli_num_rows($res) > 0) {
    while ($row = mysqli_fetch_assoc($res)) {
      $title = $row['title'];
      $content = $row['content'];
      $date = $row['date'];
      $blogger = $row['blogger'];
      $status = $row['status'];
      $readtime = $row['readtime'];
      $mainpic = $row['mainpic'];
      $label = $row['label'];
      $admin = "";
    }
  }

  ?>
  <header class="masthead" style="
  background-image: url(<?php echo './blogpics/blogpics' . $id . '/' . $mainpic ?>);
	width: auto;
	height: auto;">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="post-heading">
            <h1 style="color: white"><?php echo $title; ?></h1>
            <h2 class="subheading ignite"><?php echo $label; ?></h2>
            <span class="meta" style="color: white">Posted by <?php echo $blogger; ?>
              on <?php echo $date; ?></span>
          </div>
        </div>
      </div>
    </div>
  </header>
  <?php echo iconv("UTF-8", "ISO-8859-1//IGNORE", $content), PHP_EOL; ?>
  <?php echo $view->footer(); ?>
</body>

</html>