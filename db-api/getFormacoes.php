<?php
include 'connection.php';

$sql_query = "SELECT * 
from formacoes_intro";

$result = mysqli_query($conn, $sql_query);
$about = array();

while ($row = mysqli_fetch_assoc($result)) {
    $about[] = $row;
}

$sql_query1 = "SELECT * 
from formacoes_topicos
order by display_order asc";

$result1 = mysqli_query($conn, $sql_query1);
$about1 = array();

while ($row1 = mysqli_fetch_assoc($result1)) {
    $about1[] = $row1;
}

echo 'true||' . json_encode($about) . '||' . json_encode($about1);
exit;
