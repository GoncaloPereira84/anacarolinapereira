<?php
$area = "sobre-nos";
include "include/header.php";
?>

<div class="slideshow-wrapper-sobre-nos">
    <div id="slideshow">
        <div class="slide">
            <div class="copy">
                <h1 class="title">Sobre Nós</h1>
                <div class="line"></div>
            </div>
        </div>
    </div>
</div>

<div class="historia-wrapper">
    <div class="historia">
        <div class="copy">
            <h2 class="title">A nossa história</h2>
            <div class="container">
                <?php
                $hist_query = "SELECT * 
                    from sobre_historia";

                $result_h = mysqli_query($conn, $hist_query);
                $hist = array();

                while ($row_h = mysqli_fetch_assoc($result_h)) {
                    $hist[] = $row_h;
                }

                foreach ($hist as $h) {
                    echo '<div class="p">
                                    <div class="paragraph">' . $h['text'] . '</div>
                                    <div class="line"></div>
                                </div>
                                <div class="paragraph">' . $h['text2'] . '</div>';
                }
                ?>
            </div>
        </div>
    </div>
</div>


<div class="reels-wrapper movement">
    <div id="formacoes">
        <div class="copy-content">
            <h3 class="title main">As Nossas Formações</h3>
            <div class="line"></div>
            <div class="copy">
                <p></p>
                <p>A Academia é um espaço de formação. De ideias. De projetos. De escritas. Que alia o conhecimento
                    científico à prática clínica e o aproxima de si. A Academia é, e assim ambiciona, um espaço que
                    concilia o saber técnico e clínico ao pluralismo de quem sabe que, como nos ensina a tradição
                    oral:<br><br><i>A desmanchar e a fazer é que se chega a aprender.</i><br></p>
                <p></p>
            </div>
        </div>
        <div class="cards-wrapper">
            <a title="O Método Rorschach na prática clínica"
                href="/academia/formacao/o-metodo-rorschach-na-pratica-clinica">
                <div class="card">
                    <div class="icon">
                        <img alt="Imagem de O Método Rorschach na prática clínica"
                            src="https://www.anacarolinapereira.pt//uploads/formacoes/rorschach.jpeg">
                    </div>

                    <div class="card-title">O Método Rorschach na prática clínica</div>
                    <div class="card-copy">
                        <i>
                            <p>Formação clínica que pretende pensar os fundamentos conceptuais e metodológicos do método
                                Rorschach para a sua aplicação prática na clínica da criança, do adolescente e do
                                adulto.<br></p>
                        </i>
                    </div>
                    <div class="cta">
                        <div class="txt">saiba mais</div>
                        <div class="arrow-cont">
                            <i class="arrow right"></i>
                        </div>
                    </div>
                </div>
            </a><a title="A Clínica da infância | Q&amp;A" href="/academia/webinar/a-clinica-da-infancia-qa">
                <div class="card">
                    <div class="icon">
                        <img alt="Imagem de A Clínica da infância | Q&amp;A"
                            src="https://www.anacarolinapereira.pt//uploads/mobile-1609809_1920.jpg">
                    </div>

                    <div class="card-title">A Clínica da infância | Q&amp;A</div>
                    <div class="card-copy">
                        <i>Webinar que pretende ser um espaço de partilha de conhecimentos. Que partirá de questões
                            colocadas, previamente, por todos os que participarem e que pretende pensar os fundamentos
                            clínicos psicodinâmica da prática infantil</i>
                    </div>
                    <div class="cta">
                        <div class="txt">saiba mais</div>
                        <div class="arrow-cont">
                            <i class="arrow right"></i>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>



<div class="servicos-wrapper">
    <div class="cards-wrapper">
        <?php
        $areas_query = "SELECT * 
            from sobre_areas
            order by display_order asc";

        $result_a = mysqli_query($conn, $areas_query);
        $areas = array();

        while ($row_a = mysqli_fetch_assoc($result_a)) {
            $areas[] = $row_a;
        }

        foreach ($areas as $a) {
            echo '<div class="card movement">
                        <h3 class="card-title">' . $a['title'] . '</h3>
                        <div class="card-copy">
                            <span>' . $a['text'] . '</span>
                        </div>
                    </div>';
        }
        ?>
    </div>
</div>

<div id="equipa" class="equipa-wrapper-sobre-nos">
    <div class="equipa movement">
        <div class="left">
            <div class="person-wrapper">
                <div class="team">
                    <?php
                    $equipa_query = "SELECT * 
                        from sobre_equipa
                        order by display_order asc";

                    $result_e = mysqli_query($conn, $equipa_query);
                    $equipa = array();

                    while ($row_e = mysqli_fetch_assoc($result_e)) {
                        $equipa[] = $row_e;
                    }

                    $count_e = 1;
                    foreach ($equipa as $e) {
                        $count_e++;
                        $img = $e['img_src'];
                        $dots = '/var/www/vhosts/anacarolinapereira.pt/backoffice';
                        $trimmed = str_replace($dots, '', $img);

                        if ($count_e - 1 == 1) {
                            echo '<div class="person active-equipa">
                                <img alt="' . $e['name'] . '" class="pic" src="https://www.anacarolinapereira.pt/' . $trimmed . '">
                                <div class="name">' . $e['name'] . '</div>
                                <div class="description">
                                    <i>' . $e['cargo'] . '</i>
                                </div>
                            </div>';
                        } else {
                            echo '<div class="person">
                                <img alt="' . $e['name'] . '" class="pic" src="https://www.anacarolinapereira.pt/' . $trimmed . '">
                                <div class="name">' . $e['name'] . '</div>
                                <div class="description">
                                    <i>' . $e['cargo'] . '</i>
                                </div>
                            </div>';
                        }
                    }
                    ?>
                </div>
                <div class="indicators">
                    <?php
                    for ($i = 1; $i < $count_e; $i++) {
                        if ($i == 1)
                            echo '<div class="idc active-equipa" onClick="currentSlideEquipa(' . $i . ')"></div>';
                        else
                            echo '<div class="idc" onClick="currentSlideEquipa(' . $i . ')"></div>';
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="right">
            <h2 class="title main">A nossa equipa</h2>
            <div class="line"></div>
            <div class="txt">
                <?php
                $count_e1 = 0;
                foreach ($equipa as $e) {
                    $count_e1++;
                    if ($count_e1 == 1)
                        echo '<div class="p active-equipa">' . $e['description'] . '</div>';
                    else
                        echo '<div class="p">' . $e['description'] . '</div>';
                }
                ?>
            </div>
        </div>
    </div>
</div>

<div class="confianca-wrapper">
    <div class="confianca">
        <div class="top movement">
            <?php
            $conf_apr_query = "SELECT * 
                from sobre_confianca_apresentacao";

            $result_c = mysqli_query($conn, $conf_apr_query);
            $conf_apr = array();

            while ($row_c = mysqli_fetch_assoc($result_c)) {
                $conf_apr[] = $row_c;
            }

            foreach ($conf_apr as $c) {
                echo '<h2 class="title main">' . $c['title'] . '</h2>
                        <div class="line"></div>
                        <div class="copy">' . $c['text'] . '</div>';
            }
            ?>
        </div>
        <div class="topics">
            <?php
            $conf_query = "SELECT * 
                from sobre_confianca_topicos
                order by display_order asc";

            $result_c2 = mysqli_query($conn, $conf_query);
            $conf = array();

            while ($row_c2 = mysqli_fetch_assoc($result_c2)) {
                $conf[] = $row_c2;
            }

            foreach ($conf as $c) {
                $img = $c['img_src'];
                $dots = '/var/www/vhosts/anacarolinapereira.pt/backoffice';
                $trimmed = str_replace($dots, '', $img);
                echo '<div class="topic movement">
                            <img alt="' . $c['title'] . '" class="icon" src="https://www.anacarolinapereira.pt/' . $trimmed . '">
                            <h3 class="title">' . $c['title'] . '</h3>
                            <div class="txt">' . $c['text'] . '</div>
                        </div>';
            }
            ?>
        </div>
    </div>
</div>

<div class="marcar-consulta-wrapper">
    <div class="marcar-consulta">
        <div class="left">
            <div class="copy">
                Gostaríamos muito que nos soubesse, também, aqui.
                Neste
                <i>espaço</i> que intervala entre o seu contacto e a confiança que espera de nós.
            </div>
        </div>
        <div class="right" onClick="openMarcarForm()">
            <div class="btn">
                <div class="txt">Marque a sua consulta</div>
            </div>
        </div>
    </div>
</div>

<?php
include "include/footer.php";
?>