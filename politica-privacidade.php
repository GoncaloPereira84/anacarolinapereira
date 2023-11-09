<?php
$area = "politica-privacidade";
include "include/header.php";
?>

<div class="politica-privacidade-wrapper">
  <h1>Política de Privacidade e Protecção de Dados</h1>
  <div class="topics">
    <?php
    $sql_query = "SELECT * 
        from politica_privacidade
        order by display_order asc";

    $result = mysqli_query($conn, $sql_query);
    $about = array();

    while ($row = mysqli_fetch_assoc($result)) {
      $about[] = $row;
    }

    foreach ($about as $a) {
      echo '
            <div class="topic">
              <div class="title">' . $a['title'] . '</div>
              <div class="content">' . $a['content'] . '</div>
            </div>';
    }
    ?>
  </div>
</div>

<?php
include "include/footer.php";
?>