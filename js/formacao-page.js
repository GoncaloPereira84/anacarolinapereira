var tab0 = $(".tab.t0");
var tab1 = $(".tab.t1");
var tab2 = $(".tab.t2");

$(".topic.t0").css("pointer-events", "all");
$(".topic.t1").css("pointer-events", "none");
$(".topic.t2").css("pointer-events", "none");
  
$(".topic.t0").addClass("active");
$(".topic.t1").removeClass("active");
$(".topic.t2").removeClass("active");

tab0.click(function () {
  $(".topic.t0").animate({ opacity: "1" }, 0);
  $(".topic.t1").animate({ opacity: "0" }, 0);
  $(".topic.t2").animate({ opacity: "0" }, 0);

  $(".topic.t0").css("pointer-events", "all");
  $(".topic.t1").css("pointer-events", "none");
  $(".topic.t2").css("pointer-events", "none");

  
  $(".topic.t0").addClass("active");
  $(".topic.t1").removeClass("active");
  $(".topic.t2").removeClass("active");

  var t0 = document.querySelector(".topic.t0");
  $(".topics").css("height", t0.clientHeight);

  if (window.innerWidth < 600) {
    // document.querySelector(".topics").scrollIntoView(true);
    $([document.documentElement, document.body]).animate(
      {
        scrollTop: $(".topics").offset().top - 100,
      },
      0
    );
  }
});

tab1.click(function () {
  $(".topic.t0").animate({ opacity: "0" }, 0);
  $(".topic.t1").animate({ opacity: "1" }, 0);
  $(".topic.t2").animate({ opacity: "0" }, 0);

  $(".topic.t0").css("pointer-events", "none");
  $(".topic.t1").css("pointer-events", "all");
  $(".topic.t2").css("pointer-events", "none");

  
  $(".topic.t0").removeClass("active");
  $(".topic.t1").addClass("active");
  $(".topic.t2").removeClass("active");

  var t1 = document.querySelector(".topic.t1");
  $(".topics").css("height", t1.clientHeight);

  if (window.innerWidth < 600) {
    // document.querySelector(".topics").scrollIntoView(true);
    $([document.documentElement, document.body]).animate(
      {
        scrollTop: $(".topics").offset().top - 100,
      },
      0
    );
  }
});

tab2.click(function () {
  $(".topic.t0").animate({ opacity: "0" }, 0);
  $(".topic.t1").animate({ opacity: "0" }, 0);
  $(".topic.t2").animate({ opacity: "1" }, 0);

  $(".topic.t0").css("pointer-events", "none");
  $(".topic.t1").css("pointer-events", "none");
  $(".topic.t2").css("pointer-events", "all");
  
  $(".topic.t0").removeClass("active");
  $(".topic.t1").removeClass("active");
  $(".topic.t2").addClass("active");

  var t2 = document.querySelector(".topic.t2");
  $(".topics").css("height", t2.clientHeight);

  if (window.innerWidth < 600) {
    // document.querySelector(".topics").scrollIntoView(true);
    $([document.documentElement, document.body]).animate(
      {
        scrollTop: $(".topics").offset().top - 100,
      },
      0
    );
  }
});

function addSelectElementsForm(vm) {
  var x, i, j, l, ll, selElmnt, a, aa, b, c, d;
  /*look for any elements with the class "custom-select":*/
  x = document.getElementsByClassName("select-referral");
  l = x.length;
  for (i = 0; i < l; i++) {
    selElmnt = x[i].getElementsByTagName("select")[0];
    ll = selElmnt.length;
    /*for each element, create a new DIV that will act as the selected item:*/
    a = document.createElement("DIV");
    a.setAttribute("class", "select-selected");
    x[i].appendChild(a);
    aa = document.createElement("DIV");
    aa.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
    a.appendChild(aa);
    /*for each element, create a new DIV that will contain the option list:*/
    b = document.createElement("DIV");
    b.setAttribute("class", "select-items select-hide");
    for (j = 1; j < ll; j++) {
      /*for each option in the original select element,
    create a new DIV that will act as an option item:*/
      c = document.createElement("DIV");
      c.innerHTML = selElmnt.options[j].innerHTML;
      c.addEventListener("click", function (e) {
        /*when an item is clicked, update the original select box,
        and the selected item:*/
        var y, i, k, s, h, sl, yl;
        s = this.parentNode.parentNode.getElementsByTagName("select")[0];
        sl = s.length;
        h = this.parentNode.previousSibling;
        for (i = 0; i < sl; i++) {
          if (s.options[i].innerHTML == this.innerHTML) {
            d = document.createElement("DIV");
            d.innerHTML = s.options[i].innerHTML;
            s.selectedIndex = i;
            h.innerHTML = "";
            h.appendChild(d);
            y = this.parentNode.getElementsByClassName("same-as-selected");
            yl = y.length;
            for (k = 0; k < yl; k++) {
              y[k].removeAttribute("class");
            }
            this.setAttribute("class", "same-as-selected");
            break;
          }
        }
        h.click();
      });
      b.appendChild(c);
    }
    x[i].appendChild(b);

    a.addEventListener("click", function (e) {
      /*when the select box is clicked, close any other select boxes,
    and open/close the current select box:*/
      e.stopPropagation();
      vm.closeAllSelect(this);
      this.nextSibling.classList.toggle("select-hide");
      this.classList.toggle("select-arrow-active");
    });
  }
}

function getFormDataInscricao() {
  var att = new FormData();
  var vm = this;

  var formacao_title = document.querySelector(".formacao-title");

  var name = document.getElementById("name");
  var dob = document.getElementById("dob");
  var age = document.getElementById("age");
  var address = document.getElementById("address");
  var pc = document.getElementById("pc");
  var city = document.getElementById("city");
  var phone = document.getElementById("phone");
  var email = document.getElementById("email");
  var nif = document.getElementById("nif");

  var name_recibo = document.getElementById("name-recibo");
  var address_recibo = document.getElementById("address-recibo");
  var pc_recibo = document.getElementById("pc-recibo");
  var nif_recibo = document.getElementById("nif-recibo");

  var education = document.getElementById("education");

  var experience = document.getElementById("experience");
  var profissao = document.getElementById("profissao");
  var local_trabalho = document.getElementById("local-trabalho");
  var local_ensino = document.getElementById("local-ensino");
  var curso = document.getElementById("curso");
  var ano_curso = document.getElementById("ano-curso");

  var q1 = document.getElementById("q1");
  var q2 = document.getElementById("q2");
  var q3 = document.getElementById("q3");

  var referral = document.querySelector(".select-referral .select-selected");
  var observer = new MutationObserver(function (mutations) {
    var subject = $(".select-referral .select-selected").text();
    var referrer = document.referrer;
  });
  var config = {
    attributes: true,
    childList: true,
    characterData: true,
  };
  observer.observe(referral, config);

  var file = document.getElementById("comp");

  var accept_tc = document.querySelector("#accept-tc-3");
  var optout = document.querySelector("#optout");

  var data = {
    formacao: formacao_title.innerText,
    name: name.value,
    dob: dob.value,
    age: age.value,
    address: address.value,
    pc: pc.value,
    city: city.value,
    phone: phone.value,
    email: email.value,
    nif: nif.value,
    name_recibo: name_recibo.value,
    address_recibo: address_recibo.value,
    pc_recibo: pc_recibo.value,
    nif_recibo: nif_recibo.value,
    education: education.value,
    experience: experience.value,
    profissao: profissao.value,
    local_trabalho: local_trabalho.value,
    local_ensino: local_ensino.value,
    curso: curso.value,
    ano_curso: ano_curso.value,
    q1: q1.value,
    q2: q2.value,
    q3: q3.value,
    referral: referral.innerText,
    file: file.value,
  };

  if (data.name == "") {
    $(".error-name").text("Por favor preencher o nome completo.");
  } else {
    $(".error-name").text("");
  }

  if (data.dob == "") {
    $(".error-dob").text("Por favor preencher a data de nascimento.");
  } else {
    $(".error-dob").text("");
  }

  if (data.age == "") {
    $(".error-age").text("Por favor preencher a idade.");
  } else {
    $(".error-age").text("");
  }

  if (data.address == "") {
    $(".error-address").text("Por favor preencher a morada.");
  } else {
    $(".error-address").text("");
  }

  if (data.pc == "") {
    $(".error-pc").text("Por favor preencher o Código-Postal.");
  } else {
    $(".error-pc").text("");
  }

  if (data.city == "") {
    $(".error-city").text("Por favor preencher a cidade.");
  } else {
    $(".error-city").text("");
  }

  var nrLength = 0;
  if (data.phone == "") {
    $(".error-phone").text("Por favor preencha o telefone.");
  } else {
    if (String(data.phone).length < 9)
      $(".error-phone").text("O número de telefone tem de ter 9 dígitos.");
    else {
      nrLength = 9;
      $(".error-phone").text("");
    }
  }

  if (data.age == "") {
    $(".error-age").text("Por favor preencher a idade.");
  } else {
    $(".error-age").text("");
  }

  var controlEmail = false;
  if (data.email != "") {
    var verifyEmail = vm.checkEmail(data.email);
    if (verifyEmail) {
      controlEmail = true;
      $(".error-email").text("");
    } else {
      $(".error-email").text("O e-mail fornecido não é válido.");
    }
  } else {
    $(".error-email").text("Por favor preencher o e-mail.");
  }

  var nrLength1 = 0;
  if (data.nif == "") {
    $(".error-nif").text("Por favor preencher o nº de contribuinte.");
  } else {
    if (String(data.nif).length < 9)
      $(".error-nif").text("O número de contribuinte tem de ter 9 dígitos.");
    else {
      nrLength1 = 9;
      $(".error-nif").text("");
    }
  }

  if (data.name_recibo == "") {
    $(".error-name-recibo").text("Por favor preencher o nome completo.");
  } else {
    $(".error-name-recibo").text("");
  }

  if (data.address_recibo == "") {
    $(".error-address-recibo").text("Por favor preencher a morada.");
  } else {
    $(".error-address-recibo").text("");
  }

  if (data.pc_recibo == "") {
    $(".error-pc-recibo").text("Por favor preencher o Código-Postal.");
  } else {
    $(".error-pc-recibo").text("");
  }

  var nrLength2 = 0;
  if (data.nif_recibo == "") {
    $(".error-nif-recibo").text("Por favor preencher o nº de contribuinte.");
  } else {
    if (String(data.nif_recibo).length < 9)
      $(".error-nif-recibo").text(
        "O número de contribuinte tem de ter 9 dígitos."
      );
    else {
      nrLength2 = 9;
      $(".error-nif-recibo").text("");
    }
  }

  if (data.education == "") {
    $(".error-education").text("Por favor preencher a Formação Académica.");
  } else {
    $(".error-education").text("");
  }

  if (data.experience == "") {
    $(".error-experience").text(
      "Por favor preencher a Experiência Profissional."
    );
  } else {
    $(".error-experience").text("");
  }

  if (data.profissao == "") {
    $(".error-profisao").text("Por favor preencher a Profissão.");
  } else {
    $(".error-profisao").text("");
  }

  if (data.local_trabalho == "") {
    $(".error-local-trabalho").text(
      "Por favor preencher o local/instituição de trabalho."
    );
  } else {
    $(".error-local-trabalho").text("");
  }

  if (data.q1 == "") {
    $(".error-q1").text("Por favor responder a esta pergunta.");
  } else {
    $(".error-q1").text("");
  }

  if (data.q2 == "") {
    $(".error-q2").text("Por favor responder a esta pergunta.");
  } else {
    $(".error-q2").text("");
  }

  if (data.q3 == "") {
    $(".error-q3").text("Por favor responder a esta pergunta.");
  } else {
    $(".error-q3").text("");
  }

  if (data.referral == "SELECCIONE...") {
    $(".error-referral").text("Por favor seleccione da lista.");
  } else {
    $(".error-referral").text("");
  }

  const files = document.querySelector("#comp").files;
  if (files.length < 1) {
    $(".error-comp").text("Por favor anexar comprovativo de pagamento.");
  } else {
    $(".error-comp").text("");
  }

  if (accept_tc.checked == false) {
    $(".error-pp").text(
      "Tem de aceitar as condições da Política de Privacidade."
    );
  } else {
    $(".error-pp").text("");
  }

  if (
    data.name != "" &&
    data.dob != "" &&
    data.age != "" &&
    data.address != "" &&
    data.pc != "" &&
    data.city != "" &&
    data.phone != "" &&
    nrLength == 9 &&
    controlEmail == true &&
    data.nif != "" &&
    nrLength1 == 9 &&
    data.name_recibo != "" &&
    data.address_recibo != "" &&
    data.pc_recibo != "" &&
    data.nif_recibo != "" &&
    nrLength2 == 9 &&
    data.education != "" &&
    data.experience != "" &&
    data.profissao != "" &&
    data.local_trabalho != "" &&
    data.q1 != "" &&
    data.q2 != "" &&
    data.q3 != "" &&
    data.referral != "SELECCIONE..." &&
    data.file != "" &&
    accept_tc.checked == true
  ) {
    document.querySelectorAll(".error").innerText = "";

    if (optout.checked == false) {
      data["optout"] =
        "O utilizador deseja receber informações sobre as iniciativas desenvolvidas por ACP - Clínica de Psicologia.";
    } else {
      data["optout"] =
        "O utilizador não deseja receber informações sobre as iniciativas desenvolvidas por ACP - Clínica de Psicologia.";
    }

    att.append("formacao", data.formacao);
    att.append("name", data.name);
    att.append("dob", data.dob);
    att.append("age", data.age);
    att.append("address", data.address);
    att.append("pc", data.pc);
    att.append("city", data.city);
    att.append("phone", data.phone);
    att.append("email", data.email);
    att.append("nif", data.nif);
    att.append("name_recibo", data.name_recibo);
    att.append("address_recibo", data.address_recibo);
    att.append("pc_recibo", data.pc_recibo);
    att.append("nif_recibo", data.nif_recibo);
    att.append("education", data.education);
    att.append("experience", data.experience);
    att.append("profissao", data.profissao);
    att.append("local_trabalho", data.local_trabalho);
    att.append("local_ensino", data.local_ensino);
    att.append("curso", data.curso);
    att.append("ano_curso", data.ano_curso);
    att.append("q1", data.q1);
    att.append("q2", data.q2);
    att.append("q3", data.q3);
    att.append("referral", data.referral);
    att.append("optout", data.optout);

    const files = document.querySelector("input[type=file]").files;

    if (files.length > 0) {
      for (let i = 0; i < files.length; i++) {
        let file = files[i];
        att.append("uploaded_file", file);
      }
    }

    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
        var resp = this.responseText.split("||");
        if (resp[0] == "true") {
          $(".server-msg").css("color", "#0babc5");
          $(".server-msg").text(resp[1]);
        } else {
          $(".server-msg").css("color", "#ff0000");
          $(".server-msg").text(resp[1]);
        }
      }
    };

    xhttp.open(
      "POST",
      "https://www.anacarolinapereira.pt/ajax/inscricao-formacao.php",
      true
    );
    xhttp.send(att);
  } else {
    $(".server-msg").text("Há campos com erros. Por favor, verificar.");
  }
}

function getWebDataInscricao() {
  var att = new FormData();
  var vm = this;

  var formacao_title = document.querySelector(".formacao-title");

  var name = document.getElementById("name");
  var dob = document.getElementById("dob");
  var age = document.getElementById("age");
  var address = document.getElementById("address");
  var pc = document.getElementById("pc");
  var city = document.getElementById("city");
  var phone = document.getElementById("phone");
  var email = document.getElementById("email");

  var education = document.getElementById("education");

  var experience = document.getElementById("experience");
  var profissao = document.getElementById("profissao");
  var local_trabalho = document.getElementById("local-trabalho");
  var local_ensino = document.getElementById("local-ensino");
  var curso = document.getElementById("curso");
  var ano_curso = document.getElementById("ano-curso");

  var referral = document.querySelector(".select-referral .select-selected");
  var observer = new MutationObserver(function (mutations) {
    var subject = $(".select-referral .select-selected").text();
    var referrer = document.referrer;
  });
  var config = {
    attributes: true,
    childList: true,
    characterData: true,
  };
  observer.observe(referral, config);

  var accept_tc = document.querySelector("#accept-tc-3");
  var optout = document.querySelector("#optout");

  var data = {
    formacao: formacao_title.innerText,
    name: name.value,
    dob: dob.value,
    age: age.value,
    address: address.value,
    pc: pc.value,
    city: city.value,
    phone: phone.value,
    email: email.value,
    education: education.value,
    experience: experience.value,
    profissao: profissao.value,
    local_trabalho: local_trabalho.value,
    local_ensino: local_ensino.value,
    curso: curso.value,
    ano_curso: ano_curso.value,
    referral: referral.innerText,
  };

  if (data.name == "") {
    $(".error-name").text("Por favor preencher o nome completo.");
  } else {
    $(".error-name").text("");
  }

  if (data.dob == "") {
    $(".error-dob").text("Por favor preencher a data de nascimento.");
  } else {
    $(".error-dob").text("");
  }

  if (data.age == "") {
    $(".error-age").text("Por favor preencher a idade.");
  } else {
    $(".error-age").text("");
  }

  if (data.address == "") {
    $(".error-address").text("Por favor preencher a morada.");
  } else {
    $(".error-address").text("");
  }

  if (data.pc == "") {
    $(".error-pc").text("Por favor preencher o Código-Postal.");
  } else {
    $(".error-pc").text("");
  }

  if (data.city == "") {
    $(".error-city").text("Por favor preencher a cidade.");
  } else {
    $(".error-city").text("");
  }

  var nrLength = 0;
  if (data.phone == "") {
    $(".error-phone").text("Por favor preencha o telefone.");
  } else {
    if (String(data.phone).length < 9)
      $(".error-phone").text("O número de telefone tem de ter 9 dígitos.");
    else {
      nrLength = 9;
      $(".error-phone").text("");
    }
  }

  if (data.age == "") {
    $(".error-age").text("Por favor preencher a idade.");
  } else {
    $(".error-age").text("");
  }

  var controlEmail = false;
  if (data.email != "") {
    var verifyEmail = vm.checkEmail(data.email);
    if (verifyEmail) {
      controlEmail = true;
      $(".error-email").text("");
    } else {
      $(".error-email").text("O e-mail fornecido não é válido.");
    }
  } else {
    $(".error-email").text("Por favor preencher o e-mail.");
  }

  if (data.education == "") {
    $(".error-education").text("Por favor preencher a Formação Académica.");
  } else {
    $(".error-education").text("");
  }

  if (data.experience == "") {
    $(".error-experience").text(
      "Por favor preencher a Experiência Profissional."
    );
  } else {
    $(".error-experience").text("");
  }

  if (data.profissao == "") {
    $(".error-profisao").text("Por favor preencher a Profissão.");
  } else {
    $(".error-profisao").text("");
  }

  if (data.local_trabalho == "") {
    $(".error-local-trabalho").text(
      "Por favor preencher o local/instituição de trabalho."
    );
  } else {
    $(".error-local-trabalho").text("");
  }

  if (data.referral == "SELECCIONE...") {
    $(".error-referral").text("Por favor seleccione da lista.");
  } else {
    $(".error-referral").text("");
  }

  if (accept_tc.checked == false) {
    $(".error-pp").text(
      "Tem de aceitar as condições da Política de Privacidade."
    );
  } else {
    $(".error-pp").text("");
  }

  if (
    data.name != "" &&
    data.dob != "" &&
    data.age != "" &&
    data.address != "" &&
    data.pc != "" &&
    data.city != "" &&
    data.phone != "" &&
    nrLength == 9 &&
    controlEmail == true &&
    data.education != "" &&
    data.experience != "" &&
    data.profissao != "" &&
    data.local_trabalho != "" &&
    data.referral != "SELECCIONE..." &&
    accept_tc.checked == true
  ) {
    document.querySelectorAll(".error").innerText = "";

    if (optout.checked == false) {
      data["optout"] =
        "O utilizador deseja receber informações sobre as iniciativas desenvolvidas por ACP - Clínica de Psicologia.";
    } else {
      data["optout"] =
        "O utilizador não deseja receber informações sobre as iniciativas desenvolvidas por ACP - Clínica de Psicologia.";
    }

    att.append("formacao", data.formacao);
    att.append("name", data.name);
    att.append("dob", data.dob);
    att.append("age", data.age);
    att.append("address", data.address);
    att.append("pc", data.pc);
    att.append("city", data.city);
    att.append("phone", data.phone);
    att.append("email", data.email);
    att.append("education", data.education);
    att.append("experience", data.experience);
    att.append("profissao", data.profissao);
    att.append("local_trabalho", data.local_trabalho);
    att.append("local_ensino", data.local_ensino);
    att.append("curso", data.curso);
    att.append("ano_curso", data.ano_curso);
    att.append("referral", data.referral);
    att.append("optout", data.optout);

    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
        var resp = this.responseText.split("||");
        if (resp[0] == "true") {
          $(".server-msg").css("color", "#0babc5");
          $(".server-msg").text(resp[1]);
        } else {
          $(".server-msg").css("color", "#ff0000");
          $(".server-msg").text(resp[1]);
        }
      }
    };

    xhttp.open(
      "POST",
      "https://www.anacarolinapereira.pt/ajax/inscricao-formacao.php",
      true
    );
    xhttp.send(att);
  } else {
    $(".server-msg").text("Há campos com erros. Por favor, verificar.");
  }
}

addSelectElementsForm(this);

var map = Array.prototype.map;

var mainTopic = document.querySelector(".topic.t2");
var topics = document.querySelectorAll(".topic");
var topicActive = document.querySelector(".topic.active");
var heights = [];

Array.prototype.max = function () {
  return Math.max.apply(null, this);
};

Array.prototype.min = function () {
  return Math.min.apply(null, this);
};

map.call(topicActive, function (pg) {
  heights.push(pg.clientHeight);
});

$(".topics").css("height", heights.max());

window.addEventListener("resize", function () {
  $(".topics").css("height", heights.max());
});

window.addEventListener("load", function () {
  $(".topics").css("height", $(".topic.t0").height());
});
