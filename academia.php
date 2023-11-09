<?php
$area = "academia";
include "include/header.php";
if (isset($pathinfo[2])) {
?>
    <div class="info-wrapper-curso">
        <?php
        $sql_query = "SELECT *
        from formacoes
        inner join formacoes_categorias on formacoes_categorias.id = formacoes.categoria_id";

        $result = mysqli_query($conn, $sql_query);
        $about = array();

        while ($row = mysqli_fetch_assoc($result)) {
            $about[] = $row;
        }

        foreach ($about as $a) {
            if($a['url_code_form'] == $pathinfo[1]){
                if ($a['slug'] == $pathinfo[2]) {
                    if($a['url_code_form'] == 'formacao') {
                        echo '<h1 class="formacao-title">' . $a['title'] . '</h1>
                        <div class="info">
                            <div class="tabs">
                                <div class="tab t0">
                                    <h3 class="txt">
                                        Sobre
                                        <span class="formacao">' . $a['title'] . '</span>
                                    </h3>
                                </div>
                                <h3 class="tab t1">
                                    <div class="txt">Programa</div>
                                </h3>
                                <h3 class="tab t2">
                                    <div class="txt">Inscrições</div>
                                </h3>
                            </div>
                            <div class="topics">
                                <div class="topic t0">' . $a['about'] . '</div>
                                <div class="topic t1">' . $a['why'] . '</div>
                                <div class="topic t2">
                                    <span style="margin-bottom: 10px">(*) Campos de preenchimento obrigatório</span>
                                    <form method="post" enctype="multipart/form-data">
                                        <div class="form-wrapper">
                                            <div class="title">1. Dados Pessoais</div>
                                            <div class="input col100">
                                                <div class="form-controller">
                                                    <label for="name">Nome completo *</label>
                                                    <input id="name" type="text" />
                                                    <span class="error error-name"></span>
                                                </div>
                                            </div>
                                            <div class="input col50">
                                                <div class="form-controller">
                                                    <label for="dob">Data de nascimento *</label>
                                                    <input id="dob" type="date" />
                                                    <span class="error error-dob"></span>
                                                </div>
                                            </div>
                                            <div class="input col50">
                                                <div class="form-controller">
                                                    <label for="age">Idade *</label>
                                                    <input id="age" type="number" />
                                                    <span class="error error-age"></span>
                                                </div>
                                            </div>
                                            <div class="input col33">
                                                <div class="form-controller">
                                                    <label for="address">Morada *</label>
                                                    <input id="address" type="text" />
                                                    <span class="error error-address"></span>
                                                </div>
                                            </div>
                                            <div class="input col33">
                                                <div class="form-controller">
                                                    <label for="pc">Código-Postal *</label>
                                                    <input id="pc" type="text" />
                                                    <span class="error error-pc"></span>
                                                </div>
                                            </div>
                                            <div class="input col33">
                                                <div class="form-controller">
                                                    <label for="city">Localidade *</label>
                                                    <input id="city" type="text" />
                                                    <span class="error error-city"></span>
                                                </div>
                                            </div>
                                            <div class="input col50">
                                                <div class="form-controller">
                                                    <label for="phone">Contacto telefónico *</label>
                                                    <input value="" id="phone" type="number" />
                                                    <span class="error error-phone"></span>
                                                </div>
                                            </div>
                                            <div class="input col50">
                                                <div class="form-controller">
                                                    <label for="email">E-mail *</label>
                                                    <input id="email" type="text" />
                                                    <span class="error error-email"></span>
                                                </div>
                                            </div>
                                            <div class="input col25">
                                                <div class="form-controller">
                                                    <label for="nif">Nº de Contribuinte *</label>
                                                    <input value="" id="nif" type="number" />
                                                    <span class="error error-nif"></span>
                                                </div>
                                            </div>
                                        </div>
                    
                                        <div class="form-wrapper">
                                            <div class="title">2. Dados para emissão de recibo</div>
                                            <div class="input col100">
                                                <div class="form-controller">
                                                    <label for="name-recibo">Nome completo *</label>
                                                    <input id="name-recibo" type="text" />
                                                    <span class="error error-name-recibo"></span>
                                                </div>
                                            </div>
                                            <div class="input col33">
                                                <div class="form-controller">
                                                    <label for="address-recibo">Morada *</label>
                                                    <input id="address-recibo" type="text" />
                                                    <span class="error error-address-recibo"></span>
                                                </div>
                                            </div>
                                            <div class="input col33">
                                                <div class="form-controller">
                                                    <label for="pc-recibo">Código-Postal *</label>
                                                    <input id="pc-recibo" type="text" />
                                                    <span class="error error-pc-recibo"></span>
                                                </div>
                                            </div>
                                            <div class="input col33">
                                                <div class="form-controller">
                                                    <label for="nif-recibo">Nº de Contribuinte *</label>
                                                    <input value="" id="nif-recibo" type="number" />
                                                    <span class="error error-nif-recibo"></span>
                                                </div>
                                            </div>
                                        </div>
                    
                                        <div class="form-wrapper">
                                            <div class="title">3. Formação Académica</div>
                                            <div class="input col100">
                                                <div class="form-controller">
                                                    <label for="education">Formação Académica relevante *</label>
                                                    <textarea id="education" cols="30" rows="10" placeholder="Escreva aqui a sua Formação Académica relevante."></textarea>
                                                    <span class="error error-education"></span>
                                                </div>
                                            </div>
                                        </div>
                    
                                        <div class="form-wrapper">
                                            <div class="title">
                                                4. Experiência Profissional (se aplicável)
                                            </div>
                                            <div class="input col100">
                                                <div class="form-controller">
                                                    <label for="experience">Experiência Profissional relevante *</label>
                                                    <textarea id="experience" cols="30" rows="10" placeholder="Escreva aqui a sua Experiência Profissional relevante."></textarea>
                                                    <span class="error error-experience"></span>
                                                </div>
                                            </div>
                                            <div class="input col50">
                                                <div class="form-controller">
                                                    <label for="profissao">Profissão atual *</label>
                                                    <input id="profissao" type="text" />
                                                </div>
                                            </div>
                                            <div class="input col50">
                                                <div class="form-controller">
                                                    <label for="local-trabalho">Local de trabalho/instituição atual *</label>
                                                    <input id="local-trabalho" type="text" />
                                                </div>
                                            </div>
                                            <div class="subtitle">Estudantes (se aplicável)</div>
                                            <div class="input col33">
                                                <div class="form-controller">
                                                    <label for="local-ensino">Instituição de ensino</label>
                                                    <input id="local-ensino" type="text" />
                                                </div>
                                            </div>
                                            <div class="input col33">
                                                <div class="form-controller">
                                                    <label for="curso">Curso</label>
                                                    <input id="curso" type="text" />
                                                </div>
                                            </div>
                                            <div class="input col33">
                                                <div class="form-controller">
                                                    <label for="ano-curso">Ano de frequência do curso</label>
                                                    <input id="ano-curso" type="text" />
                                                </div>
                                            </div>
                                        </div>
                    
                                        <div class="form-wrapper">
                                            <div class="title">5. Candidatura</div>
                                            <div class="intro-text">
                                                <p>
                                                    Informa-se que as candidaturas a nós remetidas serão
                                                    sujeitas a processo de seleção.
                                                </p>
                                                <p>
                                                    Gostaríamos que nos ajudasse a promover uma comunicação
                                                    próxima e transparente consigo de modo a que esta formação
                                                    possa ser tão relevante para si como a nossa intenção e
                                                    desejo. Assim, e uma vez que a sua opinião é, para nós,
                                                    essencial, nomeadamente por nos permitir, continuamente,
                                                    maximizar as iniciativas desenvolvidas pela nossa Academia,
                                                    pedíamos-lhe que respondesse, de forma sucinta, a três
                                                    questões:
                                                </p>
                                            </div>
                                            <div class="input col100">
                                                <div class="form-controller">
                                                    <label for="q1">5.1. Quais as suas expetativas para esta formação?
                                                        *</label>
                                                    <textarea id="q1" cols="30" rows="5" placeholder="Escreva aqui"></textarea>
                                                    <span class="error error-q1"></span>
                                                </div>
                                            </div>
                                            <div class="input col100">
                                                <div class="form-controller">
                                                    <label for="q2">5.2. Qual a sua motivação para participar nesta formação?
                                                        *</label>
                                                    <textarea id="q2" cols="30" rows="5" placeholder="Escreva aqui"></textarea>
                                                    <span class="error error-q2"></span>
                                                </div>
                                            </div>
                                            <div class="input col100">
                                                <div class="form-controller">
                                                    <label for="q3">5.3. Quais as competências que imagina alcançar aquando
                                                        da conclusão da formação? *</label>
                                                    <textarea id="q3" cols="30" rows="5" placeholder="Escreva aqui"></textarea>
                                                    <span class="error error-q3"></span>
                                                </div>
                                            </div>
                                        </div>
                    
                                        <div class="form-wrapper">
                                            <div class="title">6. Onde nos conheceu *</div>
                                            <div class="input col100">
                                                <div class="form-controller">
                                                    <div class="select-referral">
                                                        <select id="where" name="where">
                                                            <option class="default" value="none" disabled selected>
                                                                Seleccione...
                                                            </option>
                                                            <option value="motivo-1">Colegas</option>
                                                            <option value="motivo-2">Divulgação por e-mail</option>
                                                            <option value="motivo-3">Redes Sociais</option>
                                                            <option value="motivo-4">Site</option>
                                                            <option value="motivo-5">Familiares/Amigos</option>
                                                            <option value="outro">Outro</option>
                                                        </select>
                                                    </div>
                                                    <span class="error error-referral"></span>
                                                </div>
                                            </div>
                                            <div class="input col100">
                                                <div class="form-controller comp">
                                                    <label for="comp">Anexar comprovativo de pagamento *</label>
                                                    <input id="comp" type="file" name="uploaded_file" />
                                                    <span class="error error-comp"></span>
                                                </div>
                                            </div>
                                        </div>
                    
                                        <div class="form-wrapper">
                                            <div class="input col100">
                                                <div class="check accept-tc">
                                                    <div class="input-container1 check">
                                                        <label class="check-cont" for="accept-tc-3">
                                                            Declaro que li e compreendi o alcance da
                                                            <a href="/politica-privacidade" target="_blank">Política de Privacidade</a>*
                                                        
                                                            <input type="checkbox" id="accept-tc-3" />
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </div>
                                                    <span class="error error-pp"></span>
                                                </div>
                    
                                                <div class="check optout">
                                                    <div class="input-container1 check">
                                                        <label class="check-cont" for="optout">
                                                            Caso não deseje receber informações sobre as
                                                            iniciativas desenvolvidas por ACP – Clínica de
                                                            Psicologia, por favor, indique-nos assinalando esta
                                                            opção que, em absoluto, respeitaremos a sua
                                                            decisão.
                                                        
                                                            <input type="checkbox" id="optout" />
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                    
                                        <div class="form-wrapper" style="justify-content: flex-end">
                                            <div class="input col100">
                                                <div class="form-controller" style="align-items: flex-end">
                                                    <span>(*) Campos de preenchimento obrigatório</span>
                                                    <div class="cta" onClick="getFormDataInscricao()">
                                                        <div class="txt">Submeter Candidatura</div>
                                                    </div>
                                                    <span class="server-msg"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>';
                    } else {
                        echo '<h1 class="formacao-title">' . $a['title'] . '</h1>
                        <div class="info">
                            <div class="tabs">
                                <div class="tab t0">
                                    <h3 class="txt">
                                        Sobre
                                        <span class="formacao">' . $a['title'] . '</span>
                                    </h3>
                                </div>
                                <h3 class="tab t1">
                                    <div class="txt">Programa</div>
                                </h3>
                                <h3 class="tab t2">
                                    <div class="txt">Inscrições</div>
                                </h3>
                            </div>
                            <div class="topics">
                                <div class="topic t0">' . $a['about'] . '</div>
                                <div class="topic t1">' . $a['why'] . '</div>
                                <div class="topic t2">
                                    <span style="margin-bottom: 10px">(*) Campos de preenchimento obrigatório</span>
                                    <form method="post" enctype="multipart/form-data">
                                        <div class="form-wrapper">
                                            <div class="title">1. Dados Pessoais</div>
                                            <div class="input col100">
                                                <div class="form-controller">
                                                    <label for="name">Nome completo *</label>
                                                    <input id="name" type="text" />
                                                    <span class="error error-name"></span>
                                                </div>
                                            </div>
                                            <div class="input col50">
                                                <div class="form-controller">
                                                    <label for="dob">Data de nascimento *</label>
                                                    <input id="dob" type="date" />
                                                    <span class="error error-dob"></span>
                                                </div>
                                            </div>
                                            <div class="input col50">
                                                <div class="form-controller">
                                                    <label for="age">Idade *</label>
                                                    <input id="age" type="number" />
                                                    <span class="error error-age"></span>
                                                </div>
                                            </div>
                                            <div class="input col33">
                                                <div class="form-controller">
                                                    <label for="address">Morada *</label>
                                                    <input id="address" type="text" />
                                                    <span class="error error-address"></span>
                                                </div>
                                            </div>
                                            <div class="input col33">
                                                <div class="form-controller">
                                                    <label for="pc">Código-Postal *</label>
                                                    <input id="pc" type="text" />
                                                    <span class="error error-pc"></span>
                                                </div>
                                            </div>
                                            <div class="input col33">
                                                <div class="form-controller">
                                                    <label for="city">Localidade *</label>
                                                    <input id="city" type="text" />
                                                    <span class="error error-city"></span>
                                                </div>
                                            </div>
                                            <div class="input col50">
                                                <div class="form-controller">
                                                    <label for="phone">Contacto telefónico *</label>
                                                    <input value="" id="phone" type="number" />
                                                    <span class="error error-phone"></span>
                                                </div>
                                            </div>
                                            <div class="input col50">
                                                <div class="form-controller">
                                                    <label for="email">E-mail *</label>
                                                    <input id="email" type="text" />
                                                    <span class="error error-email"></span>
                                                </div>
                                            </div>
                                        </div>
                    
                                        <div class="form-wrapper">
                                            <div class="title">2. Formação Académica</div>
                                            <div class="input col100">
                                                <div class="form-controller">
                                                    <label for="education">Formação Académica relevante *</label>
                                                    <textarea id="education" cols="30" rows="10" placeholder="Escreva aqui a sua Formação Académica relevante."></textarea>
                                                    <span class="error error-education"></span>
                                                </div>
                                            </div>
                                        </div>
                    
                                        <div class="form-wrapper">
                                            <div class="title">
                                                3. Experiência Profissional (se aplicável)
                                            </div>
                                            <div class="input col100">
                                                <div class="form-controller">
                                                    <label for="experience">Experiência Profissional relevante *</label>
                                                    <textarea id="experience" cols="30" rows="10" placeholder="Escreva aqui a sua Experiência Profissional relevante."></textarea>
                                                    <span class="error error-experience"></span>
                                                </div>
                                            </div>
                                            <div class="input col50">
                                                <div class="form-controller">
                                                    <label for="profissao">Profissão atual *</label>
                                                    <input id="profissao" type="text" />
                                                </div>
                                            </div>
                                            <div class="input col50">
                                                <div class="form-controller">
                                                    <label for="local-trabalho">Local de trabalho/instituição atual *</label>
                                                    <input id="local-trabalho" type="text" />
                                                </div>
                                            </div>
                                            <div class="subtitle">Estudantes (se aplicável)</div>
                                            <div class="input col33">
                                                <div class="form-controller">
                                                    <label for="local-ensino">Instituição de ensino</label>
                                                    <input id="local-ensino" type="text" />
                                                </div>
                                            </div>
                                            <div class="input col33">
                                                <div class="form-controller">
                                                    <label for="curso">Curso</label>
                                                    <input id="curso" type="text" />
                                                </div>
                                            </div>
                                            <div class="input col33">
                                                <div class="form-controller">
                                                    <label for="ano-curso">Ano de frequência do curso</label>
                                                    <input id="ano-curso" type="text" />
                                                </div>
                                            </div>
                                        </div>
                    
                                        <div class="form-wrapper">
                                            <div class="title">4. Onde nos conheceu *</div>
                                            <div class="input col100">
                                                <div class="form-controller">
                                                    <div class="select-referral">
                                                        <select id="where" name="where">
                                                            <option class="default" value="none" disabled selected>
                                                                Seleccione...
                                                            </option>
                                                            <option value="motivo-1">Colegas</option>
                                                            <option value="motivo-2">Divulgação por e-mail</option>
                                                            <option value="motivo-3">Redes Sociais</option>
                                                            <option value="motivo-4">Site</option>
                                                            <option value="motivo-5">Familiares/Amigos</option>
                                                            <option value="outro">Outro</option>
                                                        </select>
                                                    </div>
                                                    <span class="error error-referral"></span>
                                                </div>
                                            </div>
                                        </div>
                    
                                        <div class="form-wrapper">
                                            <div class="input col100">
                                                <div class="check accept-tc">
                                                    <div class="input-container1 check">
                                                        <label class="check-cont" for="accept-tc-3">
                                                            Declaro que li e compreendi o alcance da
                                                            <a href="/politica-privacidade" target="_blank">Política de Privacidade</a>*
                                                        
                                                            <input type="checkbox" id="accept-tc-3" />
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </div>
                                                    <span class="error error-pp"></span>
                                                </div>
                    
                                                <div class="check optout">
                                                    <div class="input-container1 check">
                                                        <label class="check-cont" for="optout">
                                                            Caso não deseje receber informações sobre as
                                                            iniciativas desenvolvidas por ACP – Clínica de
                                                            Psicologia, por favor, indique-nos assinalando esta
                                                            opção que, em absoluto, respeitaremos a sua
                                                            decisão.
                                                        
                                                            <input type="checkbox" id="optout" />
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                    
                                        <div class="form-wrapper" style="justify-content: flex-end">
                                            <div class="input col100">
                                                <div class="form-controller" style="align-items: flex-end">
                                                    <span>(*) Campos de preenchimento obrigatório</span>
                                                    <div class="cta" onClick="getWebDataInscricao()">
                                                        <div class="txt">Submeter Candidatura</div>
                                                    </div>
                                                    <span class="server-msg"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>';
                    }
                    
                }
            }
        }
        ?>
    </div>
<?php
} else {
?>

    <div class="slideshow-wrapper-academia">
        <div id="slideshow">
            <div class="slide">
                <div class="copy">
                    <div class="line"></div>
                    <h1 class="title">Academia</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="apresentacao-wrapper-academia movement">
        <div>
            <div class="img">
                <div style="background-image: url(<?php echo IMG_PATH;?>/illustrations/garca.svg)"></div>
            </div>
            <div id="apresentacao">
                <h2 class="title">A Academia</h2>
                <div class="line"></div>

                <?php
                $form_apr_query = "SELECT * 
                from formacoes_intro";

                $result_fa = mysqli_query($conn, $form_apr_query);
                $form_apr = array();

                while ($row_fa = mysqli_fetch_assoc($result_fa)) {
                    $form_apr[] = $row_fa;
                }

                foreach ($form_apr as $f) {
                    echo '<div class="copy">' . $f['text'] . '</div>';
                }
                ?>

            </div>
        </div>
    </div>

    <div class="formacoes-wrapper-formacoes">
        <div class="formacoes">
            <div class="cards-wrapper movement">
                <?php
                $form_query = "SELECT *
                from formacoes
                inner join formacoes_categorias on formacoes_categorias.id = formacoes.categoria_id";

                $result_f = mysqli_query($conn, $form_query);
                $form = array();

                while ($row_f = mysqli_fetch_assoc($result_f)) {
                    $form[] = $row_f;
                }

                foreach ($form as $f) {
                    $img = $f['img_src'];
                    $dots = '/var/www/vhosts/anacarolinapereira.pt/backoffice';
                    $trimmed = str_replace($dots, '', $img);

                    $last_vagas = $f['last_vagas'] == 1 ? 'has-vagas' : '';
                    $is_full = $f['is_full'] == 1 ? 'is-full' : '';

                    if ($f['categoria_id'] == 1) $categoria = 'formacao';
                    else if ($f['categoria_id'] == 2) $categoria = 'curso';
                    else if ($f['categoria_id'] == 3) $categoria = 'webinar';

                    if ($f['date_start'] == '0000-00-00') {
                        $date_start = 'disponível brevemente';
                        $date_end = '';
                    } else {
                        $date_start = date("d-m-Y", strtotime($f['date_start']));
                        $date_end = date("d-m-Y", strtotime($f['date_end']));
                    }

                    if ($f['is_visible'] == 1) {
                        echo '<div class="card is-visible">
                                <div class="card-img">
                                    <img src="https://www.anacarolinapereira.pt/'.$trimmed . '">
                                </div>
                                <div class="card-content">
                                    <div class="card-header">
                                        <div class="card-type">' . $f['name'] . '</div>
                                        <div class="card-status ' . $is_full . ' ' . $last_vagas . '">
                                            <span class="' . $is_full . '">vagas preenchidas</span>
                                            <span class="' . $last_vagas . '">últimas vagas</span>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <h3 class="card-title">' . $f['title'] . '</h3>
                                        <div class="card-date">
                                            <div class="txt">
                                                ' . $date_start . '
                                                <br />
                                                ' . $date_end . '
                                            </div>
                                            <div class="icon" style="background-image: url('.IMG_PATH.'/calendar.svg)"></div>
                                        </div>
                                    </div>
                                </div>
                                <a href="/academia/' . $categoria . '/' . $f['slug'] . '">
                                    <div class="card-cta">
                                        <div class="txt">Saiba mais</div>
                                    </div>
                                </a>
                            </div>';
                    }
                }
                ?>
            </div>
        </div>
    </div>

<?php
}
include "include/footer.php";
?>