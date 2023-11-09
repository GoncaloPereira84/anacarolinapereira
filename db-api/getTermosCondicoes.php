<?php
include 'connection.php';

$sql_query = "SELECT * 
from politica_privacidade
order by display_order asc";

$result = mysqli_query($conn, $sql_query);
$about = array();

while ($row = mysqli_fetch_assoc($result)) {
    $about[] = $row;
}

echo json_encode($about);
