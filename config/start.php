<?php
include "tools/tools.php";

error_reporting(E_ALL);
ini_set('display_errors', 1);
ini_set('memory_limit','300M');

date_default_timezone_set("Europe/Lisbon");

$host = "www.anacarolinapereira.pt";
$user = "admin_db";
$password = "Zmw148u*";
$dbname = "anacarol_db";

$conn = new mysqli($host, $user, $password, $dbname);

$conn->set_charset("utf8");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

define('DB_HOST', $host);
define('DB_NAME', $dbname);
define('DB_USER', $user);
define('DB_PASS', $dbname);
?>