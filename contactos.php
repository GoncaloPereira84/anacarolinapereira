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
        <div class="title main">Contactos</div>
        <div class="line"></div>
        <div class="copy">
             <?php
               $sql_query = "SELECT * 
                from home_contactos";
                
                $result = mysqli_query($conn, $sql_query);
                $contact = array();
                
                while ($row = mysqli_fetch_assoc($result)) {
                    $contact[] = $row;
                }
              ?>
          <div class="topic conts">
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
          <div class="topic">
            <div style="display: flex">
              <div class="icon">
                <img src="<?php echo IMG_PATH;?>/location.svg" alt />
              </div>
              <div class="txt">Rua Conselheiro Afonso de Melo, Lote B, 39, 4.º Esq <br/>3510-024 Viseu</div>;
            </div>
          </div>
        </div>
      </div>
      <div class="right">
        <div class="iframe-container">
          <div class="iframe-title">Coimbra</div>
          <iframe title="Morada de Coimbra" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3046.7941210979407!2d-8.421087885152357!3d40.21364237938923!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd22f90cd124ea8b%3A0xba08bbce25b52ecd!2sR.%20Machado%20de%20Castro%207%20C%2C%20Coimbra!5e0!3m2!1spt-PT!2spt!4v1597231604896!5m2!1spt-PT!2spt" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
      </div>
      <div class="right">
        <div class="iframe-container">
          <div class="iframe-title">Viseu</div>
          <iframe title="Morada de Viseu" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3026.744239028587!2d-7.917203823563313!3d40.65756794094549!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd23364d5ea842ab%3A0x33c611d3136f9830!2sR.%20Conselheiro%20Afonso%20de%20Melo%2C%203510-024%20Viseu!5e0!3m2!1spt-PT!2spt!4v1700309491379!5m2!1spt-PT!2spt" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
      </div>

    </div>
  </div>

<?php
include "include/footer.php";
?>