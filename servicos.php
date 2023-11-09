<?php
$area = "servicos";
include "include/header.php";

if (isset($pathinfo[1])) {

    $sql_query = "SELECT * 
    from servicos";

    $result = mysqli_query($conn, $sql_query);
    $about = array();

    while ($row = mysqli_fetch_assoc($result)) {
        $about[] = $row;
    }

    foreach ($about as $a) {
        if ($a['slug'] == $pathinfo[1]) {

            echo '<div class="slideshow-wrapper-servico">
                <div id="slideshow">
                    <div class="slide">
                        <div class="copy">
                            <div class="title">' . $a['title'] . '</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="info-wrapper-servico">
                <div class="info">
                    <div class="tabs">
                        <div class="tab t0">
                            <div class="txt">
                                Sobre a
                                <span class="especialidade">' . $a['sigla'] . '</span>
                            </div>
                        </div>
                        <div class="tab t1">
                            <div class="txt">Porquê?</div>
                        </div>
                        <div class="tab t2">
                            <div class="txt">
                                Queríamos muito
                                <br />partilhar consigo
                            </div>
                        </div>
                    </div>
                    <div class="topics">
                        <div class="topic t0">' . $a['about'] . '</div>
                        <div class="topic t1">' . $a['why'] . '</div>
                        <div class="topic t2">' . $a['sharing'] . '</div>
                    </div>
                </div>
            </div>';
        }
    }
?>
<?php
} else {
?>
    <div class="slideshow-wrapper-servicos">
        <div id="slideshow">
            <div class="slide">
                <div class="copy">
                    <div class="line"></div>
                    <h1 class="title">Serviços</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="apresentacao-wrapper-servicos movement">
        <div>
            <div class="imgs">
                <img class="candeeiro" src="<?php echo IMG_PATH;?>/illustrations/candeeiro.svg" alt />
                <img class="cadeira" src="<?php echo IMG_PATH;?>/illustrations/cadeirao.svg" alt />
            </div>
            <div id="apresentacao">
                <?php
                $servicos_intro_query = "SELECT * 
                from servicos_intro";

                $result_si = mysqli_query($conn, $servicos_intro_query);
                $servicos_intro = array();

                while ($row_si = mysqli_fetch_assoc($result_si)) {
                    $servicos_intro[] = $row_si;
                }

                foreach ($servicos_intro as $s) {
                    echo '<div class="copy">' . $s['text'] . '</div>';
                }
                ?>
                <div class="line"></div>
            </div>
        </div>
    </div>

    <div class="servicos-wrapper-servicos">
        <div class="servicos">
            <?php
            $servicos_query = "SELECT * 
            from servicos
            order by display_order asc";

            $result_s = mysqli_query($conn, $servicos_query);
            $servicos = array();

            while ($row_s = mysqli_fetch_assoc($result_s)) {
                $servicos[] = $row_s;
            }

            foreach ($servicos as $s) {
                if ($s['display_order'] % 2 === 0) {
                    echo '<div id="'.$s['slug'].'" class="row lateral">
                        <div class="wrapper">
                            <div class="right">
                                <h2 class="txt">' . $s['title'] . '</h2>
                                <div class="line"></div>
                            </div>
                            <div class="left">
                                <div class="copy">
                                    <div class="text">' . $s['short_description'] . '</div>
                                    <a href="/servicos/' . $s['slug'] . '">
                                        <div class="btn blue">
                                            <div class="txt">Saiba mais</div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>';
                } else {
                    echo '<div id="'.$s['slug'].'" class="row lateralR">
                        <div class="wrapper">
                            <div class="right">
                                <div class="copy">
                                    <div class="text">' . $s['short_description'] . '</div>
                                    <a href="/servicos/' . $s['slug'] . '">
                                        <div class="btn blue">
                                            <div class="txt">Saiba mais</div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="left">
                                <h2 class="txt">' . $s['title'] . '</h2>
                                <div class="line"></div>
                            </div>
                        </div>
                    </div>';
                }
            }
            ?>
        </div>

        <div class="servicos-mobile">
            <?php
            foreach ($servicos as $s) {
                echo '<div class="row">
                        <div class="wrapper movement">
                            <div class="top">
                                <div class="copy">
                                    <div class="title">' . $s['title'] . '</div>
                                    <div class="line"></div>
                                    <div class="text">' . $s['short_description'] . '</div>
                                    <a href="/servicos/' . $s['slug'] . '">
                                        <div class="btn blue">
                                            <div class="txt">Saiba mais</div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>';
            }
            ?>
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
}
include "include/footer.php";
?>