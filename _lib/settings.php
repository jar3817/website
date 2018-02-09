<?php

$settings = new StdClass();
$settings->dbhost = "localhost";
$settings->dbuser = "root";
$settings->dbpass = "";
$settings->dbschema = "jar3817";


$site = new StdClass();
$site->settings = $settings;

$site->title = "Joe Reid";

$site->styles[] = "/assets/css/main.css";

$site->scripts[] = "/assets/js/jquery-3.1.1.min.js";
$site->scripts[] = "/assets/js/bootstrap.min.js";
$site->scripts[] = "/assets/js/main.js";
?>