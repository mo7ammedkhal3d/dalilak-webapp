<?php

require_once('inc/app.php');

$db_server = "localhost:3307";
$db_user = "root";
$db_user_pass = "";
$db_name = "dalilakdb";

$conn = db_connect($db_server, $db_user, $db_user_pass, $db_name);

