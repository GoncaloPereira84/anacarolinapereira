<?php
$area = "contactos";
include "include/header.php";
?>

<div class="slideshow-wrapper-contactos">
    <div id="slideshow">
        <div class="slide">
            <div class="copy">
                <div class="line"></div>
                <div class="title">Contactos</div>
            </div>
        </div>
    </div>
</div>

<div class="formulario-contactos movement">
    <h1 class="title">
        Para qualquer questão que possamos corresponder,
        <br />estamos, também, aqui!
    </h1>
    <div class="line"></div>

    <div class="content">
        <div class="left">
            <div class="caderno" style="background-image:url(<?php echo IMG_PATH;?>/illustrations/caderno.svg)"></div>
        </div>
        <div class="right">
            <div class="form-wrapper">
                <div class="form">
                    <div class="form-group col50">
                        <input id="name" type="text" placeholder="Nome" />
                        <span class="error name"></span>
                    </div>
                    <div class="form-group col50">
                        <input id="email" type="email" placeholder="E-mail" />
                        <span class="error email"></span>
                    </div>
                    <div class="form-group col50">
                        <input id="phone" type="number" :value="amount" @input="updateValue" placeholder="Telefone" />
                        <span class="error phone"></span>
                    </div>
                    <div class="form-group col50 select-ref">
                        <select name="razao" id="area">
                            <option class="default" value="none" disabled selected>
                                Como obteve conhecimento?
                            </option>
                            <option value="colegas">Colegas</option>
                            <option value="div-email">Divulgação por e-mail</option>
                            <option value="redes-sociais">Redes Sociais</option>
                            <option value="site">Site</option>
                            <option value="familiares-amigos">Familiares/Amigos</option>
                            <option value="outro">Outro</option>
                        </select>
                        <span class="error reason"></span>
                    </div>
                    <div class="form-group textarea">
                        <textarea id="message" placeholder="Mensagem" cols="30" rows="10"></textarea>
                        <span class="error msg"></span>
                    </div>
                    <div class="form-group cta" onClick="submitFormContact()">
                        <button class="submit-msg">Enviar!</button>
                    </div>
                    <div class="form-group tc">
                        <div class="check">
                            <label class="check-cont" for="accept-tc-4">
                                Declaro que li e compreendi o alcance da
                                <a href="/politica-privacidade" target="_blank">Política de Privacidade</a>*
                              	<input type="checkbox" id="accept-tc-4" />
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <span class="error pp"></span>
                    </div>
                    <div class="form-group">
                        <span class="error general"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="contacto-wrapper-contactos movement">
    <div id="contacto">
      <div class="left">
        <div class="title main">Onde Estamos</div>
        <div class="line"></div>
        <div class="copy">
          <div class="topic">
            <div class="txt bold">Horário de Atendimento</div>
            <?php
                $sql_query = "SELECT * 
                from home_contactos";
                
                $result = mysqli_query($conn, $sql_query);
                $contact = array();
                
                while ($row = mysqli_fetch_assoc($result)) {
                    $contact[] = $row;
                }

                foreach ($contact as $c) {
                  echo '<div class="txt">'.$c['horario'].'</div>';
                }
              ?>
          </div>
          <div class="topic conts">
            <div class="txt bold">Contactos</div>
            <div>
              <div class="icon">
                <img src="<?php echo IMG_PATH;?>/phone.svg" alt />
              </div>
              <div class="txt">
                <?php
                  foreach ($contact as $c) {
                    echo '<a id="tlf1" href="tel:+351'.$c['tlf_1'].'">+351 '.$c['tlf_1'].'</a> ou <a id="tlf1" href="tel:+351'.$c['tlf_2'].'">+351 '.$c['tlf_2'].'</a>';
                  }
                ?>
                
              </div>
            </div>
            <div>
              <div class="icon">
                <img src="<?php echo IMG_PATH;?>/email.svg" alt />
              </div>
              <div class="txt">
                <?php
                  foreach ($contact as $c) {
                    echo '<a href="mailto:'.$c['email_1'].'">'.$c['email_1'].'</a>';
                  }
                ?>
              </div>
            </div>
          </div>

          <div class="topic">
            <div class="txt bold">Morada</div>
            <div style="display: flex">
              <div class="icon">
                <img src="<?php echo IMG_PATH;?>/location.svg" alt />
              </div>
              <?php
                foreach ($contact as $c) {
                  echo '<div class="txt">'.$c['address'].'</div>';
                }
              ?>
              
            </div>
          </div>
        </div>
      </div>
      <?php
        foreach ($contact as $c) {
          echo '<div class="right">'.$c['google_maps_code'].'</div>';
        }
      ?>
    </div>
  </div>

<?php
include "include/footer.php";
?>