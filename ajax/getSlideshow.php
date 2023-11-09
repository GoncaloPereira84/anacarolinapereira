<?php
include 'connection.php';

$sql_query = "SELECT * 
from home_slideshow
order by display_order asc";

$result = mysqli_query($conn, $sql_query);
$about = array();

while ($row = mysqli_fetch_assoc($result)) {
    $about[] = $row;
}

echo 'true||' . json_encode($about) . '||' . json_encode($_POST);
exit;
