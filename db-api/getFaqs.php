<?php
include 'connection.php';

$sql_query_topics = "SELECT * 
from faqs";

$result_topics = mysqli_query($conn, $sql_query_topics);
$faqs_topics = array();

while ($row = mysqli_fetch_assoc($result_topics)) {
    $faqs_topics[] = $row;
}

$sql_query = "SELECT * 
from faqs_perguntas
left join faqs on faqs.id = faqs_perguntas.faqs_id
order by faqs_perguntas.display_order asc";

$result = mysqli_query($conn, $sql_query);
$faqs = array();

while ($row = mysqli_fetch_assoc($result)) {
    $faqs[] = $row;
}

echo "true||" . json_encode($faqs_topics) . "||" . json_encode($faqs);
exit;
