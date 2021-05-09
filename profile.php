<?php
require 'lib/site.inc.php';
$view = new ProximityRacing\GeneralView();
?>
<!DOCTYPE html>
<html lang ="en">
  <head>
  <?php echo $view->presentHeader("Edit My Profile | Proximity Racing"); ?>
  </head>
  <body>
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TBKGS5L"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
        <div class="pagewide sticky-top">                  
      <?php if(isset($_SESSION['success'])): ?>
        <a class ="fo sign" href="logout.php?destroy">Logout</a>
        <a class ="fo prof" href="editprofile.php">My Profile</a>
        <?php else: ?>
        <a class="fo sign" href="login.php">Login</a>
        <a class="fo prof" href="register.php">Sign Up</a>
        <?php endif; ?></div>
    <?php 
      include_once 'navbar.php';
    ?>
    


    <?php
    include '../config/db_conn.php';
    $userData = $_SESSION['first_name'];
    ?>
    <?php
      require_once('../config/db_conn.php');
      $id=$_SESSION['id'];
      $result3 = mysqli_query($con, "SELECT * FROM members where member_id='$id'");
      $row3 = mysqli_fetch_array($result3);
      $result4 = mysqli_query($con, "SELECT * FROM login where login_id='$id'");
      $row4 = mysqli_fetch_array($result4);
      $fname=$row3['first_name'];
      $lname=$row3['last_name'];
      $address=$row3['hometown'];
      $contact=$row3['phone_number'];
      $about = $row3['about'];
      $picture=$row3['profile_pic'];
      $bday=$row3['birthday'];
      $school=$row3['school'];
      $iracing=$row3['iracing'];
      $facebook=$row3['facebook'];
      $twitter=$row3['twitter'];
      $instagram=$row3['instagram'];
      $youtube=$row3['youtube'];
      $snapchat=$row3['snapchat'];
      $twitch=$row3['twitch'];
      $email = $row4['email'];
    ?>

<div class="loader-wrapper">
    <span class="loader"><span class="loader-inner"></span></span>
</div>
    <script>
        $(window).on("load",function(){
          $(".loader-wrapper").fadeOut("slow");
        });
    </script>
<div class="container-fluid padding">
    <form class="formstyle" target = "hidden-iframe" action="upload.php" method="POST" enctype="multipart/form-data">
      <br><br>
      <h2>Edit Profile</h2>
      <br>
      <div class="form-group">
        <label>iRacing Profile</label>
        <input class="form-control" type="file" name="file">
        <button type="submit" name="submit2">UPLOAD</button>
      </div>
  </form>
  <form class="formstyle" method="POST" action="">
    <div class="form-group">
      <label for="exampleFormControlInput1">City/State</label>
      <input class="form-control" id="exampleFormControlInput1" type="text" name="address" value= "<?php echo $address; ?>">
    </div>


    <div class="form-group">
      <label>Email (this will change your login)</label>
      <input class="form-control" type="text" name="email" value="<?php echo $email ?>">
    </div>


    <div class="form-group">
      <label>Phone Number</label>
      <input class="form-control" type="text" name="number" value="<?php echo $contact ?>">
    </div>

    <div class="form-group">
      <label for="inputlg">About</label>
      <textarea class="form-control" name="about" rows="5" id="comment"><?php echo $about ?></textarea>
    </div>

    <div class="form-group">
      <label>Birthday</label>
      <input class="form-control" type="text" name="birthday" value="<?php echo $bday ?>">
    </div>

    <div class="form-group">
      <label>Education</label>
      <input class="form-control" type="text" name="school" value="<?php echo $school ?>">
    </div>

    <div class="form-group">
      <label>iRacing Profile</label>
      <input class="form-control" type="url" name="iracing" value="<?php echo $iracing ?>">
    </div>

    <div class="form-group">
      <label>Snapchat</label>
      <input class="form-control" type="url" name="snapchat" value="<?php echo $snapchat ?>">
    </div>


    <div class="form-group">
      <label>Twitter</label>
      <input class="form-control" type="url" name="twitter" value="<?php echo $twitter ?>">
    </div>

    <div class="form-group">
      <label>Facebook</label>
      <input class="form-control" type="url" name="facebook" value="<?php echo $facebook ?>">
    </div>


    <div class="form-group">
      <label>Instagram</label>
      <input class="form-control" type="url" name="instagram" value="<?php echo $instagram ?>">
    </div>

    <div class="form-group">
      <label>Youtube</label>
      <input class="form-control" type="url" name="youtube" value="<?php echo $youtube ?>">
    </div>

    <div class="form-group">
      <label>Twitch</label>
      <input class="form-control" type="url" name="twitch" value="<?php echo $twitch ?>">
    </div>


    <div class="input-group">
      <button onclick="javascript:this.style.display='none'" type="submit" class="btn btn-primary" name="save">Save</button>
    </div>

    <?php
      if (isset($_POST['save'])) {
        $address = $_POST['address'];   
        $contact = $_POST['number'];
        $about = $_POST['about'];
        $bday = $_POST['birthday'];
        $picture = $_POST['file'];
        $school = $_POST['school'];
        $iracing = $_POST['iracing'];
        $snapchat = $_POST['snapchat'];
        $twitter = $_POST['twitter'];
        $instagram = $_POST['instagram'];
        $youtube = $_POST['youtube'];
        $facebook = $_POST['facebook'];
        $twitch = $_POST['twitch'];
        $email = $_POST['email'];
        include 'db_conn.php';
        $user_check_query = "UPDATE proximityracing.members 
        SET hometown = '$address', phone_number='$contact', about='$about', birthday='$bday', school='$school', iracing='$iracing', snapchat='$snapchat', twitter='$twitter',
        instagram='$instagram', facebook='$facebook', youtube='$youtube', twitch = '$twitch'
        WHERE member_id='$id';";
        mysqli_query($con, $user_check_query);

        $user_check_query2 = "UPDATE proximityracing.login
        SET email = '$email'
        WHERE login_id='$id';";
        mysqli_query($con, $user_check_query);
        echo "<script language=\"javascript\">alert(\"Saved Information.\");document.location.href='editprofile.php';</script>";
      }

    ?>
  </form>
</div>
<?php echo $view->footer(); ?>
  </body>
</html>