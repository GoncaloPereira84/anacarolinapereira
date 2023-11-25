<?php
$area = "home";
include "include/header.php";
?>

<div class="slideshow-wrapper">
    <div id="slideshow-home">
        <?php

        $slideshow_query = "SELECT * 
            from home_slideshow
            order by display_order asc
            limit 5";

        $result_s = mysqli_query($conn, $slideshow_query);
        $slideshow = array();

        while ($row_s = mysqli_fetch_assoc($result_s)) {
            $slideshow[] = $row_s;
        }

        $count = 0;
        $count_i = 1;

        foreach ($slideshow as $s) {
            $active = $count == 0 ? "active" : "";
            $count++;
            $count_i++;

            $img = $s['static_img'];
            $dots = '/var/www/vhosts/anacarolinapereira.pt/backoffice';
            $trimmed = str_replace($dots, '', $img);

            $img_mob = $s['img_mobile'];
            $dots_mob = '/var/www/vhosts/anacarolinapereira.pt/backoffice';
            $trimmed_mob = str_replace($dots_mob, '', $img_mob);

            $colored = $s['display_order'] % 2 === 0 ? '' : 'blue';

            $bg_img = 'style="background-image:url(https://www.anacarolinapereira.pt' . $trimmed . ');"';
            $bg_img_mobile = 'style="background-image:url(https://www.anacarolinapereira.pt' . $trimmed_mob . ');"';
            $display_svg = $s['img'] != 'none' ? 'flex' : 'none';

            echo '
                <a class="slide-a ' . $active . '" data-slide-id="' . $s['id'] . '" href="' . $s['link'] . '">
                    <div class="slide ' . $colored . '" ' . $bg_img . '>
                        <div class="svg-container" style="display: ' . $display_svg . '">';
            include_once('illustrations/' . $s['img'] . '.php');
            echo '</div>
        
                        <div class="copy" style="display: ' . $display_svg . '">
                            <div class="title">' . $s['title'] . '</div>
                            <div class="line"></div>
                            <div class="text">' . $s['text'] . '</div>
                            <div class="btn white">
                                <div class="txt">' . $s['cta_txt'] . '</div>
                            </div>
                        </div>
                    </div>
                </a>';
        }
        ?>
    </div>
    <div class="indicators">
        <?php
        for ($i = 1; $i < $count_i; $i++) {
            if ($i == 1)
                echo '<div class="ind active" onClick="currentSlide(' . $i . ')"></div>';
            else
                echo '<div class="ind" onClick="currentSlide(' . $i . ')"></div>';
        }
        ?>
    </div>
</div>

<div class="clinica-wrapper movement">
    <div id="clinica">
        <?php
        $about_query = "SELECT * 
            from home_about";

        $result_a = mysqli_query($conn, $about_query);
        $about = array();

        while ($row_a = mysqli_fetch_assoc($result_a)) {
            $about[] = $row_a;
        }

        foreach ($about as $a) {
            echo '<div class="copy-wrapper">
                        <h1 class="title main">' . $a['title'] . '</h1>
                        <div class="line"></div>
                        <div class="copy">' . $a['content'] . '</div>
                    </div>
                    <div class="ctas">
                        <a href="' . $a['link'] . '">
                            <div class="btn blue">
                                <div class="txt">' . $a['cta_txt'] . '</div>
                            </div>
                        </a>

                        <div class="btn white" onClick="openContactForm()">
                            <div class="txt">Contacte-nos</div>
                        </div>
                    </div>';
        }

        ?>
    </div>
</div>

<div class="especialidades-wrapper movement">
    <div id="especialidades">
        <div class="title-wrapper">
            <h1 class="title main">As Nossas Especialidades</h1>
            <div class="line"></div>
        </div>
        <div class="especialidades">
            <?php

            $esp_query = "SELECT * 
                    from servicos
                    order by display_order asc";

            $result_e = mysqli_query($conn, $esp_query);
            $esp = array();

            while ($row_e = mysqli_fetch_assoc($result_e)) {
                $esp[] = $row_e;
            }

            foreach ($esp as $e) {
                if ($e['img_src'] != '' || $e['img_src'] != null) {
                    $img = $e['img_src'];
                    $dots = '/var/www/vhosts/anacarolinapereira.pt/backoffice';
                    $trimmed = str_replace($dots, '', $img);
                } else {
                    $img = 'https://www.anacarolinapereira.pt/img/logo.png';
                }


                echo '<div class="especialidade">
                        <img alt="Imagem de ' . $e['title'] . '" class="icon" src="https://www.anacarolinapereira.pt' . $trimmed . '">
                        <h3 class="txt-big">' . $e['title'] . '</h3>
                        <div class="copy">' . $e['short_description'] . '</div>
                        <a title="' . $e['title'] . '" href="/servicos#' . $e['slug'] . '">
                            <div class="cta">
                                <div class="text">saiba mais</div>
                                <div class="arrow-cont">
                                    <i class="arrow right"></i>
                                </div>
                            </div>
                        </a>
                    </div>';
            }

            ?>
        </div>
    </div>
</div>

<div class="formacoes-wrapper movement">
    <div id="formacoes">
        <div class="copy-content">
            <?php

            $form_intro_query = "SELECT * 
                from home_formacoes_intro";

            $result_fi = mysqli_query($conn, $form_intro_query);
            $fi = array();

            while ($row_fi = mysqli_fetch_assoc($result_fi)) {
                $fi[] = $row_fi;
            }

            foreach ($fi as $f) {
                echo '<h3 class="title main">' . $f['title'] . '</h3>
                        <div class="line"></div>
                    <div class="copy">' . $f['text'] . '</div>';
            }

            ?>
        </div>
        <div class="cards-wrapper">
            <?php

            $form_query = "SELECT * 
                from formacoes
                inner join formacoes_categorias on formacoes_categorias.id = formacoes.categoria_id
                order by display_order asc";

            $result_f = mysqli_query($conn, $form_query);
            $form = array();

            while ($row_f = mysqli_fetch_assoc($result_f)) {
                $form[] = $row_f;
            }

            foreach ($form as $f) {
                $img = $f['img_src'];
                $dots = '/var/www/vhosts/anacarolinapereira.pt/backoffice';
                $trimmed = str_replace($dots, '', $img);

                if ($f['categoria_id'] == 1)
                    $categoria = 'formacao';
                else if ($f['categoria_id'] == 2)
                    $categoria = 'curso';
                else if ($f['categoria_id'] == 3)
                    $categoria = 'webinar';

                echo '<a title="' . $f['title'] . '" href="/academia/' . $categoria . '/' . $f['slug'] . '">
                        <div class="card">
                            <div class="icon">
                                <img alt="Imagem de ' . $f['title'] . '"  src="https://www.anacarolinapereira.pt/' . $trimmed . '">
                            </div>
                            
                            <div class="card-title">' . $f['title'] . '</div>
                            <div class="card-copy">
                                <i>' . $f['text'] . '</i>
                            </div>
                            <div class="cta">
                                <div class="txt">saiba mais</div>
                                <div class="arrow-cont">
                                    <i class="arrow right"></i>
                                </div>
                            </div>
                        </div>
                    </a>';
            }

            ?>
        </div>
    </div>
</div>

<div class="destaques-wrapper movement">
    <div id="destaques">
        <div class="slider-wrapper">
            <div class="slider">
                <?php
                $destaques_query = "SELECT *
                    from destaques_homepage";

                $result_d = mysqli_query($conn, $destaques_query);
                $dest = array();

                while ($row_d = mysqli_fetch_assoc($result_d)) {
                    $dest[] = $row_d;
                }

                $count_d = 0;
                foreach ($dest as $d) {
                    $count_d++;
                    $img = $d['img_src'];
                    $dots = '/var/www/vhosts/anacarolinapereira.pt/backoffice';
                    $trimmed = str_replace($dots, '', $img);

                    $positionImg = $d['display_order'] % 2 == 0 ? 'left' : 'right';
                    $positionContent = $d['display_order'] % 2 == 0 ? 'right' : 'left';

                    if ($d['formacao_categoria_id'] == 1)
                        $categoria = 'formacao';
                    else if ($d['formacao_categoria_id'] == 2)
                        $categoria = 'curso';
                    else if ($d['formacao_categoria_id'] == 3)
                        $categoria = 'webinar';
                    else
                        $categoria = 'blog';

                    if ($d['formacao_categoria_id'] == 1)
                        $categoria_title = 'Formação';
                    else if ($d['formacao_categoria_id'] == 2)
                        $categoria_title = 'Curso';
                    else if ($d['formacao_categoria_id'] == 3)
                        $categoria_title = 'Webinar';
                    else
                        $categoria_title = 'Blog';

                    $isFull = $d['is_full'] == 1 ? "is-full" : "";
                    $hasVagas = $d['last_vagas'] == 1 ? "has-vagas" : "";
                    $active_d = $count_d == 1 ? "active-dest" : "";

                    if ($d['date_start'] == '1970-01-01') {
                        $date_start = 'disponível brevemente';
                        $date_end = '';
                        $calendar = true;
                        $calendar1 = true;
                    } else if ($d['date_start'] == '0000-00-00') {
                        $date_start = '';
                        $date_end = '';
                        $calendar = false;
                        $calendar1 = false;
                    } else {
                        $date_start = date("d-m-Y", strtotime($d['date_start']));
                        $date_end = date("d-m-Y", strtotime($d['date_end']));
                        $calendar = true;
                        $calendar1 = true;
                    }

                    $calendar == true ? $display = 'flex' : $display = 'none;';
                    $calendar1 == true ? $bt = '' : $bt = 'blog-title';

                    echo '<div data-card-id="' . $d['id'] . '" class="card ' . $active_d . '">
                            <div class="card-img ' . $positionImg . '">
                                <img alt="Imagem de ' . $d['title'] . '" src="' . $trimmed . '">
                            </div>
                            <div class="card-content ' . $positionContent . '">
                                <div class="card-header">
                                    <div class="card-type">' . $categoria_title . '</div>
                                    <div class="card-status ' . $isFull . ' ' . $hasVagas . '">
                                        <span class="' . $isFull . '">vagas preenchidas</span>
                                        <span class="' . $hasVagas . '">últimas vagas</span>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h3 class="card-title ' . $bt . '">' . $d['title'] . '</h3>
                                    <div class="card-text">' . $d['text'] . '...</div>
                                    <div class="card-date">
                                        <a title="' . $d['title'] . '" href="' . $d['url_code'] . '">
                                            <div class="card-cta">
                                                <div class="cta-txt">Saiba mais</div>
                                            </div>
                                        </a>
                                        <div style="">
                                            <div class="txt" style="display: ' . $display . ';">
                                                ' . $date_start . '
                                                <br />
                                                ' . $date_end . '
                                            </div>
                                            <img class="icon" src="img/calendar.svg" alt="Ícone de calendário" style="display: ' . $display . ';">
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>';
                }
                ?>
            </div>
            <div class="indicators-dest">
                <?php
                for ($i = 0; $i < $count_d; $i++) {
                    if ($i == 0)
                        echo '<div class="ind-dest active-dest"></div>';
                    else
                        echo '<div class="ind-dest"></div>';
                }
                ?>
            </div>
        </div>
    </div>
</div>

<div class="equipa-wrapper movement">
    <div class="equipa">

        <?php
        $equipa_query = "SELECT * 
        from home_equipa";

        $result_equipa = mysqli_query($conn, $equipa_query);
        $equipa = array();

        while ($row_eq = mysqli_fetch_assoc($result_equipa)) {
            $equipa[] = $row_eq;
        }

        foreach ($equipa as $e) {
            $img = $e['img'];
            $dots = '/var/www/vhosts/anacarolinapereira.pt/backoffice';
            $trimmed = str_replace($dots, '', $img);

            echo '<div class="left">
                    <img alt="Fotografia de ' . $e['name'] . '" title="Fotografia de ' . $e['name'] . '" class="pic" src="https://www.anacarolinapereira.pt/' . $trimmed . '">
                    <div class="name">' . $e['name'] . '</div>
                    <div class="cargo">' . $e['cargo'] . '</div>
                </div>
                <div class="right">
                    <h3 class="title main">' . $e['title'] . '</h3>
                    <div class="quote">
                        <img class="icon" alt="Ícone de aspas" src="img/quote.png">
                        <div class="txt">' . $e['text'] . '</div>
                    </div>
                    <a title="Link para página Sobre Nós" href="' . $e['link'] . '">
                        <div class="subquote">Saiba mais</div>
                        <img src="img/arrow.svg" alt="Seta" />
                    </a>
                </div>';
        }
        ?>
    </div>
</div>

<div class="contacto-wrapper movement">
    <div id="contacto">
        <?php
        $contactos_query = "SELECT * 
            FROM home_contactos";

        $result_cont = mysqli_query($conn, $contactos_query);
        $contactos = array();

        while ($row_cont = mysqli_fetch_assoc($result_cont)) {
            $contactos[] = $row_cont;
        }

        foreach ($contactos as $c) {
            echo '<div class="left">
                        <h2 class="title main">Esperamos por si!</h2>
                        <div class="line"></div>
                        <div class="copy">
                            <div class="topic">
                                <div class="icon">
                                    <img src="img/phone.svg" alt="Ícone de telefone" />
                                </div>
                                <div class="txt">
                                    Fale connosco através do
                                    <a title="Telefone" href="tel:+351' . $c['tlf_1'] . '" id="tlf1">+351 ' . $c['tlf_1'] . '</a>
                                </div>
                            </div>

                            <div class="topic">
                                <div class="icon">
                                    <img src="img/email.svg" alt="Ícone de e-mail" />
                                </div>
                                <div class="txt">
                                    <a title="E-mail" href="mailto:' . $c['email_1'] . '">' . $c['email_1'] . '</a>
                                </div>
                            </div>

                            <div class="topic">
                                <div class="icon">
                                    <img src="img/location.svg" alt="Ícone de localização" />
                                </div>
                                <div class="txt">' . $c['address'] . '</div>
                            </div>
                            <div class="topic">
                                <div class="icon">
                                    <img src="img/location.svg" alt="Ícone de localização" />
                                </div>
                                <div class="txt">Rua Conselheiro Afonso de Melo, Lote B, 39, 4.º Esq<br />3510-024 Viseu</div>
                            </div>
                        </div>
                        <div class="cta" onClick="openContactForm()">
                            <div class="btn blue">
                                <div class="txt">contacte-nos</div>
                            </div>
                        </div>
                    </div>';

            echo '<div class="right">
                        <div style="font-size: 18px; margin-top: -10px;" class="iframe-title">Coimbra</div>' . $c['google_maps_code'] . '
                    </div>';
        }
        ?>

        <div class="right">
            <div style="font-size: 18px; margin-top: -10px;" class="iframe-title">Viseu</div>
            <iframe title="Morada de Viseu"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3026.744239028587!2d-7.917203823563313!3d40.65756794094549!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd23364d5ea842ab%3A0x33c611d3136f9830!2sR.%20Conselheiro%20Afonso%20de%20Melo%2C%203510-024%20Viseu!5e0!3m2!1spt-PT!2spt!4v1700309491379!5m2!1spt-PT!2spt"
                    width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                    tabindex="0"></iframe>
        </div>
    </div>
</div>


<?php
include "include/footer.php";
?>