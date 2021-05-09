<?php
require 'lib/site.inc.php';
$view = new ProximityRacing\GeneralView();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php echo $view->presentHeader("Contact | Proximity Racing"); ?>
</head>

<body>
  <?php echo $view->presentNavbar(); ?>
  <div class="container-fluid padding">
    <div class="row padding ">
      <div class="col-md-12">
        <h1 class="display-4 text-center">Contact Us</h1>
        <br>
        <p class="ps lead">Interested in joining Proximity Racing? Looking to find out more information about us or have a question? Feel free to fill out our form below and we will get back to you as soon as we can! </p>
      </div>
    </div>
  </div>

  <div class="container-fluid padding">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <form class="formstyle" method="post" action="mailto:ProximityRacing@gmail.com">
        <div class="form-group">
          <label for="exampleFormControlInput1">Email address</label>
          <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <div class="form-group">
          <label for="exampleFormControlSelect1">Contacting Because</label>
          <select class="form-control" id="exampleFormControlSelect1">
            <option>I am interested in joining the team</option>
            <option>I have a general question about the team</option>
            <option>I would like more info about the team</option>
          </select>
        </div>
        <div class="form-group">
          <label for="exampleFormControlTextarea1">Question/Comments</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <div>
          <button class="btn btn-primary" type="submit">Submit</button>
        </div>
      </form>

      <form method="post" name="emailform" action="email-form.php">
        <p>
          <label for="exampleFormControlSelect1"></label><br>

        </p>
      </form>
    </div>
  </div>
  <?php echo $view->footer(); ?>
</body>

</html>