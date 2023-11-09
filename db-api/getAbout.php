<?php
include 'connection.php';

$sql_query = "SELECT * 
from sobre_historia";

$result = mysqli_query($conn, $sql_query);
$about = array();

while ($row = mysqli_fetch_assoc($result)) {
    $about[] = $row;
}

$sql_query1 = "SELECT * 
from sobre_areas
order by display_order asc";

$result1 = mysqli_query($conn, $sql_query1);
$about1 = array();

while ($row1 = mysqli_fetch_assoc($result1)) {
    $about1[] = $row1;
}

$sql_query2 =
    "SELECT * 
from sobre_equipa
order by display_order asc";

$result2 = mysqli_query($conn, $sql_query2);
$about2 = array();

while ($row2 = mysqli_fetch_assoc($result2)) {
    $about2[] = $row2;
}

$sql_query3 = "SELECT * 
from sobre_confianca_apresentacao";

$result3 = mysqli_query($conn, $sql_query3);
$about3 = array();

while ($row3 = mysqli_fetch_assoc($result3)) {
    $about3[] = $row3;
}

$sql_query4 = "SELECT * 
from sobre_confianca_topicos
order by display_order asc";

$result4 = mysqli_query($conn, $sql_query4);
$about4 = array();

while ($row4 = mysqli_fetch_assoc($result4)) {
    $about4[] = $row4;
}

echo 'true||' . json_encode($about) . '||' . json_encode($about1) . '||' . json_encode($about2) . '||' . json_encode($about3) . '||' . json_encode($about4);
exit;
