<?php
include 'connection.php';

$sql_query = "SELECT * 
from servico_details
inner join servicos_topicos on servicos_topicos.id = servico_details.servicos_topicos_id";

$result = mysqli_query($conn, $sql_query);
$about = array();

while ($row = mysqli_fetch_assoc($result)) {
    $about[] = $row;
}

echo json_encode($about);
exit;
