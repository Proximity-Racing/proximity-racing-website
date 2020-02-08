<?php 
IF(ISSET($_GET['destroy'])){
 session_start();
 session_destroy();
 echo "<script language=\"javascript\">alert(\"Successfully logged out!\");document.location.href='index.php';</script>";
}
?>