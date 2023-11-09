<?php
$host = "anacarolinapereira.pt";
$user = "admin_db";
$password = "Zmw148u*";
$dbname = "anacarol_db";

$conn = new mysqli($host, $user, $password, $dbname);

$conn->set_charset("utf8");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql_query = "SELECT * 
from formacao_details";

$result = mysqli_query($conn, $sql_query);
$forms = array();

while ($row = mysqli_fetch_assoc($result)) {
    $forms[] = $row;
}

foreach($forms as $f){
    $name = $f['title'];
    $dateStart = $f['date_start'];
    $dateEnd = $f['date_end'];

    $sql_update_date_dest = "UPDATE destaques_homepage
    SET date_start = '" . $dateStart . "',
    date_end = '" . $dateEnd . "'
    WHERE title = '" . $name . "'
    AND date_start <> '0000-00-00'
    AND date_end <> '0000-00-00'";

    $update_dest = mysqli_query($conn, $sql_update_date_dest);

    $sql_update_date_popup = "UPDATE popup_homepage
    SET date_start = '" . $dateStart . "',
    date_end = '" . $dateEnd . "'
    WHERE title = '" . $name . "'
    AND date_start <> '0000-00-00'
    AND date_end <> '0000-00-00'";

    $update_popup = mysqli_query($conn, $sql_update_date_dest);
}
?>