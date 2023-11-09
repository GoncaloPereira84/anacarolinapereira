<?php
$area = "perguntas-frequentes";
include "include/header.php";
?>

<div class="perguntas-wrapper">
    <h1>Perguntas Frequentes</h1>
    <div class="perguntas">
        <div class="right">
            <?php
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

                foreach ($faqs_topics as $ft) {
                    echo '<div class="topic-wrapper" data-topico-id="'.$ft['id'].'">
                            <div class="content">';
                        foreach ($faqs as $f) {
                            echo '<div class="question">
                                <div class="quest" onClick="openQuestion('.$f['faq_id'].')" data-topic-id="'.$f['faq_id'].'">
                                    <div class="text">'.$f['pergunta'].'</div>
                                    <div class="icon">
                                        <svg class="arrow" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 4.743 7.308">
                                            <defs>
                                                <clipPath id="a">
                                                    <rect width="4.743" height="7.308" fill="none" />
                                                </clipPath>
                                            </defs>
                                            <g clip-path="url(#a)">
                                                <path d="M3.654,4.743,0,1.088,1.088,0,3.654,2.566,6.22,0,7.308,1.088Z" transform="translate(0 7.308) rotate(-90)" fill="#707070" />
                                            </g>
                                        </svg>
                                    </div>
                                </div>
                                <div class="answer">
                                    <div class="text">'.$f['resposta'].'</div>
                                </div>
                            </div>';
                        }
                    echo '</div>
                    </div>';
                }
            ?>
        </div>
    </div>
</div>

<?php
include "include/footer.php";
?>