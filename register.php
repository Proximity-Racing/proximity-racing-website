

<!DOCTYPE html>
<html>
<head>
  <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TBKGS5L');</script>
<!-- End Google Tag Manager -->
  <link rel="icon" href="img/favicon.png" type="image/png">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Register | Proximity Racing</title>
  <meta name="description" content="Proximity Racing is a sanctioned iRacing.com motorsport team">
    <meta name="robots" content="index, follow" />
    <meta name="keywords" content="proximity racing, proximity, proximityracing, iracing, chris nosowsky">
    
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="canonical" href="https://proximityracing.com/register.php" />
          <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-155164803-1"></script>
      <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-155164803-1');
    </script>
</head>
<body>
  <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TBKGS5L"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
  <div class="container-fluid">
  	<div class="col-md-12">
  	<h2>Register</h2>
  	</div>
  </div>
	
  <form method="POST" action="">
  	<div class="form-group">
  	  <label>First Name</label>
  	  <input type="text" name="first_name" value="">
  	</div>
    <div class="form-group">
  	  <label>Last Name</label>
  	  <input type="text" name="last_name" value="">
  	</div>
  	<div class="form-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="">
  	</div>
  	<div class="form-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="form-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="form-group">
  	  <button type="submit" class="btn btn-primary" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>
</body>
</html>

<?php
session_start();

// initializing variables
$first_name = "";
$last_name = "";
$email    = "";
$errors = array(); 
$defaultimg = "stig.jpg";

include '../config/db_conn.php';

// REGISTER USER
if (isset($_POST["reg_user"])) {
  // receive all input values from the form
  $first_name = mysqli_real_escape_string($con, $_POST["first_name"]);
  $last_name = mysqli_real_escape_string($con, $_POST["last_name"]);
  $email = strtolower(mysqli_real_escape_string($con, $_POST["email"]));
  $password_1 = mysqli_real_escape_string($con, $_POST["password_1"]);
  $password_2 = mysqli_real_escape_string($con, $_POST["password_2"]);
  $role = 'MEMBER';

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($first_name)) { 
    echo "<script language=\"javascript\">alert(\"First name is required\");document.location.href='register.php';</script>";
    array_push($errors, "First name is required"); }
  if (empty($last_name)) { 
      echo "<script language=\"javascript\">alert(\"Last name is required\");document.location.href='register.php';</script>";
      array_push($errors, "Last name is required"); }
  if (empty($email)) { 
    echo "<script language=\"javascript\">alert(\"Email is required\");document.location.href='register.php';</script>";
    array_push($errors, "Email is required"); }
  if (empty($password_1)) { 
    echo "<script language=\"javascript\">alert(\"Password is required\");document.location.href='register.php';</script>";
    array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	echo "<script language=\"javascript\">alert(\"The two passwords do not match\");document.location.href='register.php';</script>";
  array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "select * from proximityracing.login where email = '$email' LIMIT 1;";
  $result = mysqli_query($con, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user["email"] === $email) {
      echo "<script language=\"javascript\">alert(\"Email already exists\");document.location.href='register.php';</script>";
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO proximityracing.login (login_id, email, password, first_name, last_name, role) VALUES(NULL, '$email', '$password', '$first_name', '$last_name', '$role')";


    if (mysqli_query($con, $query)) {
    echo "New record created successfully";
    $query2 = "INSERT INTO proximityracing.members 
    (first_name, last_name, hometown, phone_number, about, profile_pic, birthday, school, 
    facebook, twitter, youtube, instagram, snapchat, twitch, iracing, position, priority) 
    VALUES('$first_name', 
    '$last_name', NULL, NULL, NULL, '$defaultimg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0)";
    mysqli_query($con, $query2);
    $query3 = "SELECT * FROM proximityracing.login where email = '$email' AND first_name = '$first_name' AND last_name = '$last_name';";
    $data = mysqli_fetch_array(mysqli_query($con, $query3));
      $_SESSION['id'] = $data['login_id'];
      $_SESSION['first_name'] = $first_name;
      $_SESSION['last_name'] = $last_name;
      $_SESSION['success'] = true;
      $_SESSION['email'] = $email;
      $_SESSION['role'] = $role;
       echo "<script language=\"javascript\">document.location.href='welcome.php';</script>";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($con);
    }

  }
}

mysqli_close($con);
?>