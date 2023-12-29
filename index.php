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
        <blockquote class="instagram-media" data-instgrm-captioned data-instgrm-permalink="https://www.instagram.com/reel/C0UUnEAMFcH/?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="14" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:16px;"> <a href="https://www.instagram.com/reel/C0UUnEAMFcH/?utm_source=ig_embed&amp;utm_campaign=loading" style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;" target="_blank"> <div style=" display: flex; flex-direction: row; align-items: center;"> <div style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div></div></div><div style="padding: 19% 0;"></div> <div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg width="50px" height="50px" viewBox="0 0 60 60" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-511.000000, -20.000000)" fill="#000000"><g><path d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"></path></g></g></g></svg></div><div style="padding-top: 8px;"> <div style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;">Ver essa foto no Instagram</div></div><div style="padding: 12.5% 0;"></div> <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;"><div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);"></div> <div style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;"></div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);"></div></div><div style="margin-left: 8px;"> <div style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;"></div> <div style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)"></div></div><div style="margin-left: auto;"> <div style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);"></div> <div style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div> <div style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div></div></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;"></div></div></a><p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;"><a href="https://www.instagram.com/reel/C0UUnEAMFcH/?utm_source=ig_embed&amp;utm_campaign=loading" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">Uma publicação compartilhada por Ana Carolina Pereira (@anacarolinapereirapc)</a></p></div></blockquote> <script async src="//www.instagram.com/embed.js"></script>
    </div>
</div>


<?php
include "include/footer.php";
?>