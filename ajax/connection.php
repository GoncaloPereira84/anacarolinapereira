<?php
$host = "beta.anacarolinapereira.pt";
$user = "admin_db";
$password = "Zmw148u*";
$dbname = "anacarol_db";

$conn = new mysqli($host, $user, $password, $dbname);

$conn->set_charset("utf8");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
