</div> <!-- main section close-->

<footer>
    <div class="container">
        <div class="line"></div>
        <div class="wrapper">
            <div class="sections">
                <?php
                    $contactos_query = "SELECT * 
                    from home_contactos";
                    
                    $result_cont = mysqli_query($conn, $contactos_query);
                    $contactos = array();
                    
                    while ($row_cont = mysqli_fetch_assoc($result_cont)) {
                        $contactos[] = $row_cont;
                    }

                    foreach ($contactos as $c) {
                        echo '<div class="section">
                                <div class="title">Contactos</div>
                                <div class="text">
                                    <a title="Telefone" class="link" href="tel:+351'.$c['tlf_1'].'">+351 ' . $c['tlf_1'] . '</a>
                                    <br />
                                    <a title="E-mail" class="link" href="mailto:' . $c['email_1'] . '">' . $c['email_1'] . '</a>
                                    <br />
                                    <p>' . $c['address'] . '</p>
                                </div>
                            </div>';
                    }
                ?>
                <div class="section">
                    <div class="title">Serviços</div>

                    <?php
                        $esp_query = "SELECT * 
                        from servicos
                        order by display_order asc";
                        
                        $result = mysqli_query($conn, $esp_query);
                        $esp = array();
                        
                        while ($row = mysqli_fetch_assoc($result)) {
                            $esp[] = $row;
                        }

                        foreach ($esp as $e) {
                            $link = $e['slug'];

                            if(isset($pathinfo[0]) && $pathinfo[0] == 'servicos') {
                                ?>
                                <div class="links">
                                    <div class="no-home">
                                        <a title="<?php echo $e['title']; ?>" class="link" onClick="toHash('<?php echo $link; ?>')"><?php echo $e['title']; ?></a>
                                    </div>
                                </div>
                                <?php
                            } else {
                                echo '<div class="links">
                                    <div class="home">
                                        <a title="' . $e['title'] . '" class="link" href="/servicos/' . $link . '">' . $e['title'] . '</a>
                                    </div>
                                </div>';
                            }
                        }
                    ?>
                </div>
                <div class="section">
                    <div class="title">Links Úteis</div>
                    <div class="links">
                        <a class="link" title="Link para sobre nós" href="/sobre-nos">Sobre Nós</a>
                        <?php 
                            if(isset($pathinfo[0]) && $pathinfo[0] == 'sobre-nos') {
                            ?>
                                <div class="sb">
                                    <a class="link" title="Link para a nossa equipa" onClick="toHash('equipa')">A Nossa Equipa</a>
                                </div>
                            <?php
                            } else {
                                echo '<div class="no-sb">
                                        <a title="Link para a nossa equipa" class="link" href="/sobre-nos#equipa">A Nossa Equipa</a>
                                    </div>';
                            }
                        ?>
                        <a title="Política de Privacidade" class="link" href="/politica-privacidade">Política de Privacidade</a>
                        <a title="Perguntas Frequentes" class="link" href="/perguntas-frequentes">Perguntas Frequentes</a>
                        <a title="Formulário de Marcação de Consulta" class="link" onClick="openMarcarForm()">Marcação de Consulta</a>
                        <a title="Livro de Reclamações Online" href="https://www.livroreclamacoes.pt/inicio" class="link" rel="noreferrer" target="_blank">Livro de Reclamações</a>
                    </div>
                </div>
            </div>
            <div class="social-icons">
                <?php
                    foreach ($contactos as $c) {
                        echo '<a href="' . $c['facebook'] . '" title="Facebook Ana Carolina Pereira" rel="noreferrer" target="_blank">
                                <div class="icon">
                                    <img src="'.IMG_PATH.'/fb.svg" alt="ícone do facebook" />
                                </div>
                            </a>
                            <a href="' . $c['instagram'] . '" title="Instagram Ana Carolina Pereira" rel="noreferrer" target="_blank">
                                <div class="icon">
                                    <img src="'.IMG_PATH.'/ig.svg" alt="ícone do instagram" />
                                </div>
                            </a>
                            <a href="' . $c['blog'] . '" title="Blog Ana Carolina Pereira" rel="noreferrer" target="_blank">
                                <div class="icon">
                                    <img src="'.IMG_PATH.'/blog.svg" alt="ícone de blog" />
                                </div>
                            </a>';
                    }
                ?>
            </div>
        </div>
        <div style="text-align: center; margin-top: 20px">
            <p>Ana Carolina Pereira © <?php echo date('Y') ?> todos os direitos reservados</p>
            <p style="font-size: 9px">
                - por
                <a style="color: #000" title="Site TwoBe Creative" href="https://twobecreative.pt/" target="_blank" rel="noreferrer">TwoBe Creative</a>
            </p>
        </div>
    </div>
</footer>

<div id="contact-form">
    <div class="content-wrapper">
        <div class="close-btn" onClick="closeForm()">
            <div class="icon">
                <div class="line"></div>
                <div class="line"></div>
            </div>
        </div>
        <div class="pages">
            <div class="page p4" tabindex="4">
                <div class="indicators">
                    <div class="line"></div>
                    <div class="indicator p1" style="background-image: url(<?php echo IMG_PATH;?>/check.png); background-size: cover;"></div>
                </div>
                <div class="text">
                    <div class="title-success">
                        A seu pedido de consulta foi enviado com sucesso!
                    </div>
                    <div class="copy">
                        Muito obrigado! Receberá um contacto breve da nossa parte!
                    </div>

                    <div class="btn-inicio">
                        <div class="btn">
                            <div class="txt">Início</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="page p3" tabindex="3">
                <div class="indicators">
                    <div class="line"></div>
                    <div class="indicator p0">
                        <div class="point"></div>
                    </div>
                    <div class="indicator p1">
                        <div class="point"></div>
                    </div>
                    <div class="indicator p2">
                        <div class="point"></div>
                    </div>
                    <div class="indicator p3 active-pg">
                        <div class="point"></div>
                    </div>
                </div>
                <div class="text">
                    <div class="question">Em qual das nossas clínicas?</div>
                    <div class="inputs">
                        <div class="input-container">
                            <div class="custom-select-clinica">
                                <select id="clinica" name="clinica">
                                    <option class="default" value="none" disabled selected>
                                        Seleccione a clínica
                                    </option>
                                    <option value="local-coimbra">Coimbra</option>
                                    <option value="local-viseu">Viseu</option>
                                </select>
                            </div>
                            <div class="balloon balloon-clinica-error" style="background-image: url(<?php echo IMG_PATH;?>/blue-balloon.png); top: -4px; right: -270px; width: 250px; height: 45px;">
                                <div>Por favor seleccione a clínica.</div>
                            </div>
                        </div>
                        <div class="accept-tc">
                            <div class="input-container">
                                <label for="accept-tc">
                                    <input type="checkbox" id="accept-tc" />
                                    Li e aceito a
                                    <a href="/politica-privacidade">Política de Privacidade</a>
                                </label>
                                <div class="balloon balloon-tc-error" style="background-image: url(<?php echo IMG_PATH;?>/blue-balloon.png); top: -15px; right: -270px; width: 250px; height: 60px;">
                                    <div>
                                        Por favor confirme que aceita
                                        <br />a Política de Privacidade.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="submit-btn">
                            <div>Submeter</div>
                        </button>
                    </div>
                </div>
            </div>

            <div class="page p2" tabindex="2">
                <div class="indicators">
                    <div class="line"></div>
                    <div class="indicator p0">
                        <div class="point"></div>
                    </div>
                    <div class="indicator p1">
                        <div class="point"></div>
                    </div>
                    <div class="indicator p2 active-pg">
                        <div class="point"></div>
                    </div>
                    <div class="indicator p3">
                        <div class="point"></div>
                    </div>
                </div>
                <div class="text">
                    <div class="question">Qual a especialidade pretendida?</div>
                    <div class="inputs">
                        <div class="input-container">
                            <div class="custom-select">
                                <select id="subject" name="subject">
                                    <option class="default" value="none" disabled selected>
                                        Seleccione a especialidade
                                    </option>
                                    <option value="consulta-adulto">Consulta | Adulto</option>
                                    <option value="consulta-jovem">Consulta | Jovem</option>
                                    <option value="consulta-criança">Consulta | Criança</option>
                                    <option value="consulta-online-jovem-adulto">Consulta Online | Jovem/Adulto</option>
                                    <option value="outro">Outro</option>
                                </select>
                            </div>
                            <div class="balloon balloon-subject-error" style="background-image: url(<?php echo IMG_PATH;?>/blue-balloon.png); top: -4px; right: -270px; width: 250px; height: 45px;">
                                <div>Por favor seleccione a especialidade.</div>
                            </div>
                        </div>
                        <button id="avancar-btn-2" class="submit-btn">
                            <div>Avançar</div>
                        </button>
                    </div>
                </div>
            </div>

            <div class="page p1" tabindex="1">
                <div class="indicators">
                    <div class="line"></div>
                    <div class="indicator p0">
                        <div class="point"></div>
                    </div>
                    <div class="indicator p1 active-pg">
                        <div class="point"></div>
                    </div>
                    <div class="indicator p2">
                        <div class="point"></div>
                    </div>
                    <div class="indicator p3">
                        <div class="point"></div>
                    </div>
                </div>
                <div class="text">
                    <div class="question">
                        Para que o/a possamos contactar, selecione uma opção.
                    </div>
                    <div class="radio">
                        <div class="option">
                            <label class="opt" for="contact-phone">
                                <input id="contact-phone" type="radio" value="contact-phone" name="contact-option" checked="true" />
                                <span class="radio-btn"></span>
                                Telefone
                            </label>
                        </div>

                        <div class="option">
                            <label class="opt" for="contact-email">
                                <input id="contact-email" type="radio" value="contact-email" name="contact-option" />
                                <span class="radio-btn"></span>
                                E-mail
                            </label>
                        </div>

                        <div class="option">
                            <label class="opt" for="contact-both">
                                <input id="contact-both" type="radio" value="contact-both" name="contact-option" />
                                <span class="radio-btn"></span>
                                Ambos
                            </label>
                        </div>
                    </div>
                    <div class="inputs">
                        <div class="input-container">
                            <input type="number" name="contact-phone" id="contact-phone-active" placeholder="ESCREVA AQUI O SEU Telefone" />
                            <div class="balloon balloon-phone-error-empty" style="{ 'background-image': 'url(' + balloon + ')' }">
                                <div>Por favor escreva o seu telefone.</div>
                            </div>
                            <div class="balloon balloon-phone-error" style="background-image: url(<?php echo IMG_PATH;?>/blue-balloon.png);">
                                <div>O nº de telefone tem de ter 9 dígitos.</div>
                            </div>
                        </div>
                        <div class="input-container" style="display: flex; position: relative">
                            <input type="email" name="contact-email" id="contact-email-active" placeholder="ESCREVA AQUI O SEU E-MAIL" style="display: none" />
                            <div class="balloon balloon-email" style="background-image: url(<?php echo IMG_PATH;?>/blue-balloon.png); display: none;">
                                <div>example@example.com</div>
                            </div>
                            <div class="balloon balloon-email-error" style="background-image: url(<?php echo IMG_PATH;?>/blue-balloon.png);">
                                <div>Por favor escreva o seu e-mail.</div>
                            </div>
                        </div>
                        <button id="avancar-btn-1" class="submit-btn">
                            <div>Avançar</div>
                        </button>
                    </div>
                </div>
            </div>

            <div class="page p0 active-pg" tabindex="0">
                <div class="indicators">
                    <div class="line"></div>
                    <div class="indicator p0 active-pg">
                        <div class="point"></div>
                    </div>
                    <div class="indicator">
                        <div class="point"></div>
                    </div>
                    <div class="indicator">
                        <div class="point"></div>
                    </div>
                    <div class="indicator">
                        <div class="point"></div>
                    </div>
                </div>
                <div class="text">
                    <div class="question">
                        Agradecemos o seu contacto! Pode-nos dizer o seu nome?
                    </div>
                    <div class="inputs">
                        <div class="input-container">
                            <input id="contact-name" type="text" name="contact-name" placeholder="ESCREVA AQUI O SEU NOME" />
                            <div class="balloon balloon-name-error" style="background-image: url(<?php echo IMG_PATH;?>/blue-balloon.png);">
                                <div>Por favor escreva o seu nome.</div>
                            </div>
                            <button id="avancar-btn-0" class="submit-btn">
                                <div>Avançar</div>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="contact-form-2">
    <div class="content-wrapper">
        <div class="close-btn" onClick="closeForm2()">
            <div class="icon">
                <div class="line"></div>
                <div class="line"></div>
            </div>
        </div>
        <div class="pages">
            <div class="page p3" tabindex="3">
                <div class="indicators">
                    <div class="line"></div>
                    <div class="indicator p0">
                        <div class="point"></div>
                    </div>
                    <div class="indicator p1" style="background-image: url(<?php echo IMG_PATH;?>/check.png); background-size: cover;"></div>
                    <div class="indicator p2">
                        <div class="point"></div>
                    </div>
                </div>
                <div class="text">
                    <div class="title-success">
                        A sua mensagem foi enviada com sucesso!
                    </div>
                    <div class="copy">
                        Muito obrigado! Receberá um contacto breve da nossa parte!
                    </div>
                    <div class="btn-inicio">
                        <div class="btn">
                            <div class="txt">Início</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="page p2" tabindex="2">
                <div class="indicators">
                    <div class="line"></div>
                    <div class="indicator p0">
                        <div class="point"></div>
                    </div>
                    <div class="indicator p1">
                        <div class="point"></div>
                    </div>
                    <div class="indicator p2 active-pg">
                        <div class="point"></div>
                    </div>
                </div>
                <div class="text">
                    <div class="question">Qual o assunto pelo qual nos contacta?</div>
                    <div class="inputs">
                        <div class="input-container">
                            <div class="custom-select-2">
                                <select id="subject-2" name="subject">
                                    <option class="default" value="none" disabled selected>
                                        Seleccione o assunto
                                    </option>
                                    <option value="servicos">Serviços</option>
                                    <option value="academia">Academia</option>
                                    <option value="outro">Outro</option>
                                </select>
                            </div>
                            <div class="balloon balloon-subject-error" style="background-image: url(<?php echo IMG_PATH;?>/blue-balloon.png);top: -4px; right: -270px; width: 250px; height: 45px">
                                <div>Por favor seleccione o assunto.</div>
                            </div>
                        </div>
                        <div class="input-container">
                            <textarea id="message" cols="30" rows="10" placeholder="Escreva aqui a sua mensagem."></textarea>
                            <div class="balloon balloon-msg-error" style="background-image: url(<?php echo IMG_PATH;?>/blue-balloon.png);top: 22px; right: -270px; width: 250px; height: 45px">
                                <div>Por favor escreva a mensagem.</div>
                            </div>
                        </div>
                        <div class="accept-tc">
                            <div class="input-container">
                                <input type="checkbox" id="accept-tc-2" />
                                <label for="accept-tc-2">
                                    Li e aceito a
                                    <a href="/politica-privacidade">Política de Privacidade</a>
                                </label>
                                <div class="balloon balloon-tc-error" style="background-image: url(<?php echo IMG_PATH;?>/blue-balloon.png);top: -15px;right: -270px;width: 250px;height: 60px;">
                                    <div>
                                        Por favor confirme que aceita
                                        <br />a Política de Privacidade.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="submit-btn">
                            <div>Submeter</div>
                        </button>
                    </div>
                </div>
            </div>

            <div class="page p1" tabindex="1">
                <div class="indicators">
                    <div class="line"></div>
                    <div class="indicator p0">
                        <div class="point"></div>
                    </div>
                    <div class="indicator p1 active-pg">
                        <div class="point"></div>
                    </div>
                    <div class="indicator p2">
                        <div class="point"></div>
                    </div>
                </div>
                <div class="text">
                    <div class="question">
                        Para que o/a possamos contactar, selecione uma opção.
                    </div>
                    <div class="radio">
                        <div class="option">
                            <label class="opt" for="contact-phone-2">
                                <input id="contact-phone-2" type="radio" value="contact-phone" name="contact-option-2" checked="true" />
                                <span class="radio-btn"></span>
                                Telefone
                            </label>
                        </div>

                        <div class="option">
                            <label class="opt" for="contact-email-2">
                                <input id="contact-email-2" type="radio" value="contact-email" name="contact-option-2" />
                                <span class="radio-btn"></span>
                                E-mail
                            </label>
                        </div>

                        <div class="option">
                            <label class="opt" for="contact-both-2">
                                <input id="contact-both-2" type="radio" value="contact-both" name="contact-option-2" />
                                <span class="radio-btn"></span>
                                Ambos
                            </label>
                        </div>
                    </div>
                    <div class="inputs">
                        <div class="input-container">
                            <input type="number" name="contact-phone" id="contact-phone-active-2" placeholder="ESCREVA AQUI O SEU Telefone" />
                            <div class="balloon balloon-phone-error-empty" style="background-image: url(<?php echo IMG_PATH;?>/blue-balloon.png);">
                                <div>Por favor escreva o seu telefone.</div>
                            </div>
                            <div class="balloon balloon-phone-error" style="background-image: url(<?php echo IMG_PATH;?>/blue-balloon.png);">
                                <div>O nº de telefone tem de ter 9 dígitos.</div>
                            </div>
                        </div>
                        <div class="input-container" style="display: flex; position: relative">
                            <input type="email" name="contact-email" id="contact-email-active-2" placeholder="ESCREVA AQUI O SEU E-MAIL" style="display: none" />
                            <div class="balloon balloon-email" style="background-image: url(<?php echo IMG_PATH;?>/blue-balloon.png);display: none">
                                <div>example@example.com</div>
                            </div>
                            <div class="balloon balloon-email-error" style="background-image: url(<?php echo IMG_PATH;?>/blue-balloon.png);">
                                <div>Por favor escreva o seu e-mail.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="page p0 active-pg" tabindex="0">
                <div class="indicators">
                    <div class="line"></div>
                    <div class="indicator p0 active-pg">
                        <div class="point"></div>
                    </div>
                    <div class="indicator">
                        <div class="point"></div>
                    </div>
                    <div class="indicator">
                        <div class="point"></div>
                    </div>
                </div>
                <div class="text">
                    <div class="question">
                        Agradecemos o seu contacto! Pode-nos dizer o seu nome?
                    </div>
                    <div class="inputs">
                        <div class="input-container">
                            <input id="contact-name-2" type="text" name="contact-name" placeholder="ESCREVA AQUI O SEU NOME" />
                            <div class="balloon balloon-name-error" style="background-image: url(<?php echo IMG_PATH;?>/blue-balloon.png);">
                                <div>Por favor escreva o seu nome.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="gdpr-box" class="cookie-bar">
    <p>
        Este site utiliza cookies para lhe fornecer uma experiência de utilizador melhorada. Ao usar este site, está a aceitar a nossa
        <a href="/politica-privacidade" target="_blank">Política de Privacidade</a>.
    </p>
    <button class="gdpr-button-accept">Aceitar cookies</button>
</div>

<a class="to-top" onClick="backToTop()">
    <div id="btt-btn">
        <div id="arrow">
            <i class="arrow up"></i>
        </div>
    </div>
</a>

<div id="popup">
    <div class="close-btn" onClick="closePopup()">
        <div class="icon">
            <div class="line"></div>
            <div class="line"></div>
        </div>
    </div>
    <?php
            $destaques_query = "SELECT *
                from popup_homepage";

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

                if ($d['formacao_categoria_id'] == 1) $categoria = 'formacao';
                else if ($d['formacao_categoria_id'] == 2) $categoria = 'curso';
                else if ($d['formacao_categoria_id'] == 3) $categoria = 'webinar';
                else $categoria = 'blog';

                if ($d['formacao_categoria_id'] == 1) $categoria_title = 'Formação';
                else if ($d['formacao_categoria_id'] == 2) $categoria_title = 'Curso';
                else if ($d['formacao_categoria_id'] == 3) $categoria_title = 'Webinar';
                else $categoria_title = 'Blog';

                $isFull = $d['is_full'] == 1 ? "is-full" : "";
                $hasVagas = $d['last_vagas'] == 1 ? "has-vagas" : "";
                $active_d = $count_d == 1 ? "active-dest" : "";

                if ($d['date_start'] == '1970-01-01') {
                    $date_start = 'disponível brevemente';
                    $date_end = '';
                    $calendar = true;
                    $calendar1 = true;
                } else if($d['date_start'] == '0000-00-00'){
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

                $calendar == true ? $display = 'flex' : $display = 'none';
                $calendar1 == true ? $max = '65%' : $max = '100%';

                echo '<div class="card is-visible">
                        <div class="card-img">
                            <img alt="Imagem de ' . $d['title'] . '" src="' . 'https://www.anacarolinapereira.pt/'. $trimmed . '">
                        </div>
                        <div class="card-content">
                            <div class="card-header">
                                <div class="card-type">' . $categoria_title . '</div>
                                <div class="card-status ' . $isFull . ' ' . $hasVagas . '">
                                    <span class="' . $isFull . '">vagas preenchidas</span>
                                    <span class="' . $hasVagas . '">últimas vagas</span>
                                </div>
                            </div>
                            <div class="card-body">
                                <h3 class="card-title" style="max-width: '.$max.';">' . $d['title'] . '</h3>
                                <div class="card-date" style="display: '.$display.';">
                                    <div class="txt">
                                        ' . $date_start . '
                                        <br />
                                        ' . $date_end . '
                                    </div>
                                    <img alt="Ícone de calendário" class="icon" src="img/calendar.svg">
                                </div>
                            </div>
                        </div>
                        <a title="' . $d['title'] . '" href="/academia/'. $categoria . '/' . $d['url_code'] . '">
                            <div class="card-cta">
                                <div class="txt">Saiba mais</div>
                            </div>
                        </a>
                    </div>';
        }
    ?>
</div>

</div> <!-- app close-->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.min.js"></script>
<script
  async
  src="https://cdn.jsdelivr.net/npm/vanilla-lazyload@latest/dist/lazyload.min.js"
></script>
<script src="/js/jquery-visible/jquery.visible.min.js"></script>
<script src="/js/lazysizes.min.js" async></script>
<script src="/js/main.js?v=20220819"></script>
<script src="/js/fade.min.js"></script>
<script src="/js/marcar-consulta-form.js"></script>
<script>
    function stickyFooter (){
        var e = $("body").height();
        var t = $("#app > #main-section");
        if ($(window).height() < e) {
            var n = $(window).height() - e;
            t.css("min-height", t.height() + n + "px");
        } else {
            t.css("min-height", 'calc(100vh - (' + ($('footer').height() + $('#menu').height()) + 'px))');
        }
    }

    window.addEventListener("load", stickyFooter);
    window.addEventListener("resize", stickyFooter);
</script>
<?php
if($area == 'sobre-nos')
echo '<script src="/js/sobre-nos.js"></script>';

if($area == 'home'){
echo '<script src="/js/slideshow.js"></script>';
echo '<script src="/js/contact-form.min.js"></script>';
echo '<script src="/js/popup.js"></script>';
}

if($area == 'contactos'){
echo '<script src="/js/contactos.js"></script>';
}

if($area == 'perguntas-frequentes'){
echo '<script src="/js/perguntas-frequentes.js"></script>';
}

if($area == 'blog'){
    echo '<script src="/js/blog.js"></script>';
}

if($area == 'servicos' && isset($pathinfo[1]))
echo '<script src="/js/servico-page.js"></script>';

if($area == 'academia' && isset($pathinfo[2]))
echo '<script src="/js/formacao-page.js?v=20220819112312312"></script>';

if($area == 'marcar-consulta')
echo '<script src="/js/marcar-consulta-page-form.js"></script>';
?>

</body>

</html>