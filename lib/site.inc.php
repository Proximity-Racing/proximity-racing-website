<?php
$cwd = explode("\\", getcwd());
$cwdLinux = explode("/", getcwd());

if(end($cwd) == "post" || end($cwdLinux) == "post") {
    require_once '../lib/ProximityRacing/GeneralView.php';
} else {
    require_once 'lib/ProximityRacing/GeneralView.php';
}
session_start();

