<?php
include 'connection.php';

$get_blog_posts = "SELECT * 
from blog_posts
order by date desc";

$result_topics = mysqli_query($conn, $get_blog_posts);
$posts = array();

while ($row = mysqli_fetch_assoc($result_topics)) {
    $posts[] = $row;
}

echo json_encode($posts);
exit;
