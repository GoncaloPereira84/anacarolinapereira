function addSelectElementsContact(vm) {
  var x, i, j, l, ll, selElmnt, a, aa, b, c, d;
  /*look for any elements with the class "custom-select":*/
  x = document.getElementsByClassName("select-ref");
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

function submitFormContact() {
  var vm = this;
  var name = $("#name");
  var email = $("#email");
  var phone = $("#phone");
  var message = $("#message");

  //select
  var reason = document.querySelector(".select-ref .select-selected");
  var observer = new MutationObserver(function (mutations) {
    var subject = $(".select-ref .select-selected").text();
    var referrer = document.referrer;
  });
  var config = {
    attributes: true,
    childList: true,
    characterData: true,
  };
  observer.observe(reason, config);
  //select end

  var data = {
    name: name.val(),
    email: email.val(),
    phone: phone.val(),
    reason: reason.innerText,
    message: message.val(),
  };

  var accept_tc = document.querySelector("#accept-tc-4");

  if (accept_tc.checked == false) {
    $(".error.pp").text(
      "Tem de aceitar as condições da Política de Privacidade."
    );
  } else {
    $(".error.pp").text("");
  }

  if (data.message == "") {
    $(".error.msg").text("Por favor escreva a mensagem.");
  } else {
    $(".error.msg").text("");
  }

  if (data.reason == "Como obteve conhecimento?") {
    $(".error.reason").text("Por favor seleccione da lista.");
  } else {
    $(".error.reason").text("");
  }

  var nrLength = 0;
  if (data.phone == "") {
    $(".error.phone").text("Por favor preencha o telefone.");
  } else {
    if (String(data.phone).length < 9)
      $(".error.phone").text("O número de telefone tem de ter 9 dígitos.");
    else {
      nrLength = 9;
      $(".error.phone").text("");
    }
  }

  var controlEmail = false;
  if (data.email == "") {
    $(".error.email").text("Por favor preencha o e-mail.");
  } else {
    var verifyEmail = vm.checkEmail(data.email);
    if (verifyEmail) {
      controlEmail = true;
      $(".error.email").text("");
    } else {
      $(".error.email").text("O e-mail inserido não é válido.");
    }
  }

  if (data.name == "") {
    $(".error.name").text("Por favor preencha o nome.");
  } else {
    $(".error.name").text("");
  }

  if (
    data.name != "" &&
    data.phone != "" &&
    nrLength == 9 &&
    data.reason != "Como obteve conhecimento?" &&
    controlEmail == true &&
    data.message != "" &&
    accept_tc.checked == true
  ) {
    $.ajax({
      url: "https://www.anacarolinapereira.pt/ajax/contact.php",
      type: "POST",
      data: data,
      dataType: "json",
      success: function (response) {
        $(".error.general").text(response.result);

        setInterval(() => {
          $(".error.general").text("");
        }, 5000);
      },
    });
  }
}

addSelectElementsContact(this);