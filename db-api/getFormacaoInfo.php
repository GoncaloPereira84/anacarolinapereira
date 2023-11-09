<?php
include 'connection.php';

$sql_query = "SELECT *,
formacoes_topicos.id as top_id,
formacoes_topicos.title as top_title,
formacao_details.id as tp_id,
formacao_details.title as tp_title
from formacoes_topicos
inner join formacao_details on formacao_details.topico_id = formacoes_topicos.id
inner join home_formacoes on home_formacoes.id = formacoes_topicos.formacao_id";

$result = mysqli_query($conn, $sql_query);
$about = array();

while ($row = mysqli_fetch_assoc($result)) {
    $about[] = $row;
}

echo json_encode($about);
exit;
