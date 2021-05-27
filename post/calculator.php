<?php
require '../lib/site.inc.php';

unset($_SESSION['error']);
unset($_SESSION['calculatedValue']);
unset($_SESSION['year']);
unset($_SESSION['irating']);

if(isset($_POST['year']) && isset($_POST['irating']) && is_numeric($_POST['irating'])) {
    $result = shell_exec('python ../python/calculator.py ' . $_POST['irating'] . ' ' . $_POST['year']);
    $_SESSION['calculatedValue'] = $result;
    $_SESSION['year'] = $_POST['year'];
    $_SESSION['irating'] = $_POST['irating'];
} else {
    $_SESSION['error'] = "Please provide a number in the iRating field";
}

header("Location: ../calculator.php");
exit;