<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if(isset($_POST['password-reset-token']) && $_POST['email'])
{
    include "../config/db_conn.php";
     
    $emailId = $_POST['email'];

    $result = mysqli_query($con,"SELECT * FROM proximityracing.login WHERE email='$emailId'");

    $row= mysqli_fetch_array($result);
 
  if($row)
  {
     
     $token = md5($emailId).rand(10,9999);
 
     $expFormat = mktime(
     date("H"), date("i"), date("s"), date("m") ,date("d")+1, date("Y")
     );
 
    $expDate = date("Y-m-d H:i:s",$expFormat);
 
    $update = mysqli_query($con,"UPDATE proximityracing.login set reset_link_token='$token',exp_date='$expDate' WHERE email='$emailId'");
 
    $link = "<a href='www.proximityracing.com/passwordreset.php?key=".$emailId."&amp;token=".$token."'>www.proximityracing.com/passwordreset.php?key=".$emailId."&amp;token=".$token."</a>";

    require '../config/PHPMailer/src/Exception.php';
    require '../config/PHPMailer/src/PHPMailer.php';
    require '../config/PHPMailer/src/SMTP.php';
    include '../config/secret.php';
 
    $mail = new PHPMailer();
 
    $mail->CharSet =  "utf-8";
    $mail->IsSMTP();
    // enable SMTP authentication
    $mail->SMTPAuth = true;                  
    // GMAIL username
    $mail->Username = $gEmail;
    // GMAIL password
    $mail->Password = $gPass;
    $mail->SMTPSecure = "tls";
    $mail->SMTPAutoTLS = false;
    // sets GMAIL as the SMTP server
    $mail->Host = "smtp.gmail.com";
    // set the SMTP port for the GMAIL server
    $mail->Port = "587";
    $mail->SetFrom('administrator@proximityracing.com', 'Proximity Racing');
    $mail->AddAddress($emailId);
    $mail->Subject  =  'Proximity Racing - Reset Password';
    $mail->IsHTML(true);
    $mail->Body    = 'You recently requested to reset your password. Click the link to reset your password: '.$link.'';
    if($mail->Send())
    {
      echo '
      <p>Reset instructions have been sent to email provided.</p>
      <button onclick="window.location.href = `./`;" type="button" class="btn btn-dark btn-sm">Back to Home</button>
      ';
    }
    else
    {
      echo "Mail Error - >".$mail->ErrorInfo;
    }
  }else{
    echo "Invalid Email Address. Go back";
  }
}
?>