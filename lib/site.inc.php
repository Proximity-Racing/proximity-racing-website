<?php
$cwd = explode("\\", getcwd());

if(end($cwd) == "post") {
    require_once '../lib/ProximityRacing/GeneralView.php';
} else {
    require_once 'lib/ProximityRacing/GeneralView.php';
}
session_start();

