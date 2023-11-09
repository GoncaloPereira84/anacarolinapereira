<?php
$area = "marcar-consulta";
include "include/header.php";
?>

<div class="slideshow-wrapper-academia">
    <div id="slideshow">
        <div class="slide">
            <div class="copy">
                <div class="line" style="width: 45%;"></div>
                <h1 class="title">Marcar Consulta</h1>
            </div>
        </div>
    </div>
</div>

<div id="contact-form-page">
    <div class="content-wrapper">
        <div class="pages">

            <div class="page">
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
                        </div>
                    </div>
                </div>
            </div>

            <div class="page">
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
                    </div>
                </div>
            </div>

            <div class="page">
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
                        <div class="error-msg" style="margin-top: 20px;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
include "include/footer.php";
?>