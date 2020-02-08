

<?php
session_start();

// initializing variables
$full_name = "";
$email    = "";
$errors = array(); 

include 'db_conn.php';

// REGISTER USER
if (isset($_POST['reg_user'])) {

  // receive all input values from the form
  $full_name = mysqli_real_escape_string($con, $_POST["full_name"]);
  $email = mysqli_real_escape_string($con, $_POST["email"]);
  $password_1 = mysqli_real_escape_string($con, $_POST["password_1"]);
  $password_2 = mysqli_real_escape_string($con, $_POST["password_2"]);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($full_name)) { array_push($errors, "Full name is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM user_login WHERE email='$email' LIMIT 1";
  $result = mysqli_query($con, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user["email"] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO 'user_login' (id, email, password, full_name) VALUES('8', 'ChrisNosowsky@gmail.com', 'chris123', 'Travis Scott')";
    if (mysqli_query($con, $query)) {
    echo "New record created successfully";
       echo "<script language=\"javascript\">alert(\"welcome \");document.location.href='./';</script>";
    } else {
         echo "<script language=\"javascript\">alert(\"welcome \");document.location.href='./';</script>";
        echo "Error: " . $query . "<br>" . mysqli_error($con);
    }
  	$_SESSION['full_name'] = $full_name;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: index.php');
  }
}