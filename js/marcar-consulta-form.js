function addSelectElements(vm) {
  var x, i, j, l, ll, selElmnt, a, aa, b, c, d;
  /*look for any elements with the class "custom-select":*/
  x = document.getElementsByClassName("custom-select");
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

function addSelectElementsClinica(vm) {
  var x, i, j, l, ll, selElmnt, a, aa, b, c, d;
  /*look for any elements with the class "custom-select":*/
  x = document.getElementsByClassName("custom-select-clinica");
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

function getFormData() {
  var vm = this;
  $(document).ready(function () {
    $("#contact-form .page").css("pointer-events", "none");
    var form_data = new FormData();
    var name = document.querySelector("#contact-form #contact-name");

    //---- 1ª página - avançar para proxima pagina
    $('#avancar-btn-0').on('click', function (e) {
      e.preventDefault();
      if (name.value == "") {
        $("#contact-form .balloon-name-error").css("display", "flex");
      } else {
        $("#contact-form .balloon-name-error").css("display", "none");
        form_data.append("name_form", name.value);
        $("#contact-form .p0").removeClass("active-pg");
        $("#contact-form .p1").addClass("active-pg");

        $("#contact-form .p0").css("pointer-events", "none");
        $("#contact-form .p1").css("pointer-events", "all");
        $("#contact-form .p2").css("pointer-events", "none");
        $("#contact-form .p3").css("pointer-events", "none");
        $("#contact-form .p4").css("pointer-events", "none");

        $("#contact-form .p1 .text").animate({ left: 0, opacity: 1 }, 500);
      }
    });

    $('#contact-form div[tabindex="0"]').keyup(function (e) {
      e.preventDefault();
      if (e.key === "Enter") {
        if (name.value == "") {
          $("#contact-form .balloon-name-error").css("display", "flex");
        } else {
          $("#contact-form .balloon-name-error").css("display", "none");
          form_data.append("name_form", name.value);
          $("#contact-form .p0").removeClass("active-pg");
          $("#contact-form .p1").addClass("active-pg");

          $("#contact-form .p0").css("pointer-events", "none");
          $("#contact-form .p1").css("pointer-events", "all");
          $("#contact-form .p2").css("pointer-events", "none");
          $("#contact-form .p3").css("pointer-events", "none");
          $("#contact-form .p4").css("pointer-events", "none");

          $("#contact-form .p1 .text").animate({ left: 0, opacity: 1 }, 500);
        }
      }
    });
    //---- 1ª página END

    //---- 2ª página - avançar para proxima pagina
    var radios = document.querySelectorAll(
      '#contact-form input[name="contact-option"]'
    );
    var value;
    var map = Array.prototype.map;
    var phone_input;
    var email_input;
    var balloon_email;

    map.call(radios, function (r) {
      r.addEventListener("click", function () {
        if (r.type === "radio") {
          if (r.checked) {
            value = r.value;
            form_data.append("contact_form", value);
            phone_input = document.querySelector(
              "#contact-form #contact-phone-active"
            );
            email_input = document.querySelector(
              "#contact-form #contact-email-active"
            );
            balloon_email = document.querySelector(
              "#contact-form .balloon-email"
            );

            if (value == "contact-phone") {
              phone_input.style.display = "inline-block";
              email_input.style.display = "none";
              balloon_email.style.display = "none";

              form_data.append("contact_phone", phone_input.value);
              form_data.append("contact_email", email_input.value);
            } else if (value == "contact-email") {
              phone_input.style.display = "none";
              email_input.style.display = "inline-block";
              balloon_email.style.display = "flex";

              form_data.append("contact_phone", phone_input.value);
              form_data.append("contact_email", email_input.value);
            } else if (value == 'contact-both') {
              phone_input.style.display = "inline-block";
              email_input.style.display = "inline-block";
              balloon_email.style.display = "flex";

              form_data.append("contact_phone", phone_input.value);
              form_data.append("contact_email", email_input.value);
            }
          }
        }
      });
    });

    $('#avancar-btn-1').on('click', function (e) {
      e.preventDefault();
      phone_input = document.querySelector(
        "#contact-form #contact-phone-active"
      );
      email_input = document.querySelector(
        "#contact-form #contact-email-active"
      );

      var controlEmail = false;
      if (phone_input.style.display != "none" && email_input.style.display == "none") {
        if (String(phone_input.value).length < 9) {
          $("#contact-form .balloon-phone-error").css("display", "flex");
          $("#contact-form .balloon-email-error").css("display", "none");
          return;
        }
      }
      else if (phone_input.style.display == "none" && email_input.style.display != "none") {
        if (email_input.value == "") {
          $("#contact-form .balloon-email-error").css("display", "flex");
          $("#contact-form .balloon-phone-error").css("display", "none");
          return;
        }
      }

      if ((phone_input.value == "" || String(phone_input.value).length < 9) && phone_input.style.display == "inline-block") {
        $("#contact-form .balloon-phone-error-empty").css(
          "display",
          "flex"
        );
      }
      else {
        $("#contact-form .balloon-phone-error-empty").css(
          "display",
          "none"
        );
      }

      if ((email_input.value == "") && email_input.style.display == "inline-block") {
        $("#contact-form .balloon-email-error-empty").css(
          "display",
          "flex"
        );
      }
      else {
        $("#contact-form .balloon-email-error-empty").css(
          "display",
          "none"
        );
      }

      if (email_input.value != "") {
        var verifyEmail = vm.checkEmail(email_input.value);
        if (verifyEmail) {
          controlEmail = true;
        } else {
          $("#contact-form .balloon-email-error").css("display", "flex");
        }
      }
    });

    $('#contact-form div[tabindex="1"]').keyup(function (e) {
      e.preventDefault();
      phone_input = document.querySelector(
        "#contact-form #contact-phone-active"
      );
      email_input = document.querySelector(
        "#contact-form #contact-email-active"
      );

      if (e.keyCode == 13) {
        var controlEmail = false;
        if (String(phone_input.value).length < 9) {
          $("#contact-form .balloon-phone-error").css("display", "flex");
        } else {
          $("#contact-form .balloon-phone-error").css("display", "none");
          if (phone_input.value == "" && email_input.style.display == "none") {
            $("#contact-form .balloon-phone-error-empty").css(
              "display",
              "flex"
            );
            $("#contact-form .balloon-email-error").css("display", "none");
          }

          if (email_input.value == "" && phone_input.style.display == "none") {
            $("#contact-form .balloon-phone-error-empty").css(
              "display",
              "none"
            );
            $("#contact-form .balloon-email-error").css("display", "flex");
          }

          if (
            phone_input.value == "" &&
            email_input.value == "" &&
            phone_input.style.display == "inline-block" &&
            email_input.style.display == "inline-block"
          ) {
            $("#contact-form .balloon-phone-error-empty").css(
              "display",
              "flex"
            );
            $("#contact-form .balloon-email-error").css("display", "flex");
          }

          if (
            phone_input.value == "" &&
            email_input.value != "" &&
            phone_input.style.display == "inline-block" &&
            email_input.style.display == "inline-block"
          ) {
            $("#contact-form .balloon-phone-error-empty").css(
              "display",
              "flex"
            );
            $("#contact-form .balloon-email-error").css("display", "none");
          }

          if (
            phone_input.value != "" &&
            email_input.value == "" &&
            phone_input.style.display == "inline-block" &&
            email_input.style.display == "inline-block"
          ) {
            $("#contact-form .balloon-phone-error-empty").css(
              "display",
              "none"
            );
            $("#contact-form .balloon-email-error").css("display", "flex");
          }

          if (email_input.value != "") {
            var verifyEmail = vm.checkEmail(email_input.value);
            if (verifyEmail) {
              controlEmail = true;
            } else {
              $("#contact-form .balloon-email-error").css("display", "flex");
            }
          }

          if (
            (phone_input.value != "" &&
              email_input.value != "" &&
              controlEmail == true) ||
            (phone_input.value != "" && email_input.style.display == "none") ||
            (email_input.value != "" &&
              phone_input.style.display == "none" &&
              controlEmail == true)
          ) {
            $("#contact-form .balloon-phone-error-empty").css(
              "display",
              "none"
            );
            $("#contact-form .balloon-phone-error").css("display", "none");
            $("#contact-form .balloon-email-error").css("display", "none");
            $("#contact-form .p1").removeClass("active-pg");
            $("#contact-form .p2").addClass("active-pg");

            $("#contact-form .p0").css("pointer-events", "none");
            $("#contact-form .p1").css("pointer-events", "none");
            $("#contact-form .p2").css("pointer-events", "all");
            $("#contact-form .p3").css("pointer-events", "none");
            $("#contact-form .p4").css("pointer-events", "none");

            $("#contact-form .p2 .text").animate({ left: 0, opacity: 1 }, 500);
          }
        }
      }
    });
    //---- 2ª página END

    //---- 3ª página
    $('#avancar-btn-2').on('click', function (e) {
      e.preventDefault();
      phone_input = document.querySelector(
        "#contact-form #contact-phone-active"
      );
      email_input = document.querySelector(
        "#contact-form #contact-email-active"
      );

      // if (e.keyCode == 13) {
      var controlEmail = false;
      if (String(phone_input.value).length < 9) {
        $("#contact-form .balloon-phone-error").css("display", "flex");
      } else {
        $("#contact-form .balloon-phone-error").css("display", "none");
        if (phone_input.value == "" && email_input.style.display == "none") {
          $("#contact-form .balloon-phone-error-empty").css(
            "display",
            "flex"
          );
          $("#contact-form .balloon-email-error").css("display", "none");
        }

        if (email_input.value == "" && phone_input.style.display == "none") {
          $("#contact-form .balloon-phone-error-empty").css(
            "display",
            "none"
          );
          $("#contact-form .balloon-email-error").css("display", "flex");
        }

        if (
          phone_input.value == "" &&
          email_input.value == "" &&
          phone_input.style.display == "inline-block" &&
          email_input.style.display == "inline-block"
        ) {
          $("#contact-form .balloon-phone-error-empty").css(
            "display",
            "flex"
          );
          $("#contact-form .balloon-email-error").css("display", "flex");
        }

        if (
          phone_input.value == "" &&
          email_input.value != "" &&
          phone_input.style.display == "inline-block" &&
          email_input.style.display == "inline-block"
        ) {
          $("#contact-form .balloon-phone-error-empty").css(
            "display",
            "flex"
          );
          $("#contact-form .balloon-email-error").css("display", "none");
        }

        if (
          phone_input.value != "" &&
          email_input.value == "" &&
          phone_input.style.display == "inline-block" &&
          email_input.style.display == "inline-block"
        ) {
          $("#contact-form .balloon-phone-error-empty").css(
            "display",
            "none"
          );
          $("#contact-form .balloon-email-error").css("display", "flex");
        }

        if (email_input.value != "") {
          var verifyEmail = vm.checkEmail(email_input.value);
          if (verifyEmail) {
            controlEmail = true;
          } else {
            $("#contact-form .balloon-email-error").css("display", "flex");
          }
        }

        if (
          (phone_input.value != "" &&
            email_input.value != "" &&
            controlEmail == true) ||
          (phone_input.value != "" && email_input.style.display == "none") ||
          (email_input.value != "" &&
            phone_input.style.display == "none" &&
            controlEmail == true)
        ) {
          $("#contact-form .balloon-phone-error-empty").css(
            "display",
            "none"
          );
          $("#contact-form .balloon-phone-error").css("display", "none");
          $("#contact-form .balloon-email-error").css("display", "none");
          $("#contact-form .p2").removeClass("active-pg");
          $("#contact-form .p3").addClass("active-pg");

          $("#contact-form .p0").css("pointer-events", "none");
          $("#contact-form .p1").css("pointer-events", "none");
          $("#contact-form .p2").css("pointer-events", "none");
          $("#contact-form .p3").css("pointer-events", "all");
          $("#contact-form .p4").css("pointer-events", "none");

          $("#contact-form .p3 .text").animate({ left: 0, opacity: 1 }, 500);
        }
      }
      // }
    });

    var assunto = document.querySelector("#contact-form .custom-select .select-selected");

    $('#contact-form div[tabindex="2"]').keyup(function (e) {
      e.preventDefault();
      if (e.keyCode == 13) {
        if (assunto.innerText == "SELECCIONE A ESPECIALIDADE") {
          $("#contact-form .balloon-subject-error").css("display", "flex");
        }

        var observer = new MutationObserver(function (mutations) {
          var subject = $("#contact-form .custom-select .select-selected").text();
          var referrer = document.referrer;
          $("#contact-form .balloon-subject-error").css("display", "none");
        });

        var config = {
          attributes: true,
          childList: true,
          characterData: true,
        };

        observer.observe(assunto, config);

        if (
          assunto.innerText != "SELECCIONE A ESPECIALIDADE"
        ) {
          $("#contact-form .balloon-subject-error").css("display", "none");

          $("#contact-form .p2").removeClass("active-pg");
          $("#contact-form .p3").addClass("active-pg");

          $("#contact-form .p0").css("pointer-events", "none");
          $("#contact-form .p1").css("pointer-events", "none");
          $("#contact-form .p2").css("pointer-events", "none");
          $("#contact-form .p3").css("pointer-events", "all");
          $("#contact-form .p4").css("pointer-events", "none");

          $("#contact-form .p3 .text").animate(
            { left: 0, opacity: 1 },
            500
          );
        }
      }
    });
    //---- 3ª página END

    var submit_btn = document.querySelector("#contact-form .submit-btn");
    var local = document.querySelector("#contact-form .custom-select-clinica .select-selected");
    var accept_tc = document.querySelector("#contact-form #accept-tc");

    submit_btn.addEventListener("click", function () {
      if (accept_tc.checked != true) {
        $("#contact-form .balloon-tc-error").css("display", "flex");
      } else {
        $("#contact-form .balloon-tc-error").css("display", "none");
      }

      if (local.innerText == "SELECCIONE A CLÍNICA") {
        $("#contact-form .balloon-clinica-error").css("display", "flex");
      }

      var observer = new MutationObserver(function (mutations) {
        var local = $("#contact-form .custom-select-clinica .select-selected").text();
        var referrer = document.referrer;
        $("#contact-form .balloon-clinica-error").css("display", "none");
      });

      var config = {
        attributes: true,
        childList: true,
        characterData: true,
      };

      observer.observe(local, config);

      if (
        local.innerText != "SELECCIONE A CLÍNICA" &&
        accept_tc.checked == true
      ) {
        var data = {
          name: name.value,
          phone: phone_input.value,
          email: email_input.value,
          subject: assunto.innerText,
          local: local.innerText,
        };

        $.ajax({
          url: "https://www.anacarolinapereira.pt/ajax/marcar-consulta.php",
          type: "POST",
          data: data,
          dataType: "json",
          success: function (response) {
            $("#contact-form .balloon-tc-error").css("display", "none");
            $("#contact-form .balloon-clinica-error").css("display", "none");

            $("#contact-form .p3").removeClass("active-pg");
            $("#contact-form .p4").addClass("active-pg");

            $("#contact-form .p0").css("pointer-events", "none");
            $("#contact-form .p1").css("pointer-events", "none");
            $("#contact-form .p2").css("pointer-events", "none");
            $("#contact-form .p3").css("pointer-events", "none");
            $("#contact-form .p4").css("pointer-events", "all");

            $("#contact-form .p4 .text").animate({ left: 0, opacity: 1 }, 500);
          },
        });
      }
    });

    $('#contact-form div[tabindex="3"]').keyup(function (e) {
      e.preventDefault();
      if (e.keyCode == 13) {
        if (accept_tc.checked != true) {
          $("#contact-form .balloon-tc-error").css("display", "flex");
        } else {
          $("#contact-form .balloon-tc-error").css("display", "none");
        }

        if (local.innerText == "SELECCIONE A CLÍNICA") {
          $("#contact-form .balloon-clinica-error").css("display", "flex");
        }

        var observer = new MutationObserver(function (mutations) {
          var local = $("#contact-form .custom-select-clinica .select-selected").text();
          var referrer = document.referrer;
          $("#contact-form .balloon-clinica-error").css("display", "none");
        });

        var config = {
          attributes: true,
          childList: true,
          characterData: true,
        };

        observer.observe(local, config);

        if (
          local.innerText != "SELECCIONE A CLÍNICA" &&
          accept_tc.checked == true
        ) {
          var data = {
            name: name.value,
            phone: phone_input.value,
            email: email_input.value,
            subject: assunto.innerText,
            local: local.innerText,
          };

          $.ajax({
            url: "https://www.anacarolinapereira.pt/ajax/marcar-consulta.php",
            type: "POST",
            data: data,
            dataType: "json",
            success: function (response) {
              $("#contact-form .balloon-tc-error").css("display", "none");
              $("#contact-form .balloon-clinica-error").css("display", "none");

              $("#contact-form .p3").removeClass("active-pg");
              $("#contact-form .p4").addClass("active-pg");

              $("#contact-form .p0").css("pointer-events", "none");
              $("#contact-form .p1").css("pointer-events", "none");
              $("#contact-form .p2").css("pointer-events", "none");
              $("#contact-form .p3").css("pointer-events", "none");
              $("#contact-form .p4").css("pointer-events", "all");

              $("#contact-form .p4 .text").animate(
                { left: 0, opacity: 1 },
                500
              );
            },
          });
        }
      }
    });

    var btn_inicio = document.querySelector("#contact-form .btn-inicio");

    btn_inicio.addEventListener("click", function () {
      $("#contact-form .p4").removeClass("active-pg");
      $("#contact-form .p0").addClass("active-pg");

      $("#contact-form .p0").css("pointer-events", "all");
      $("#contact-form .p1").css("pointer-events", "none");
      $("#contact-form .p2").css("pointer-events", "none");
      $("#contact-form .p3").css("pointer-events", "none");
      $("#contact-form .p4").css("pointer-events", "none");

      $("#contact-form").find("input[type=text]").val("");
      $("#contact-form").find("textarea").val("");
      $("#contact-form").find("input[type=number]").val("");
      $("#contact-form").find("input[type=email]").val("");
      $("#contact-form").find("#contact-phone").prop("checked", true);
      $("#contact-form").find("#accept-tc").prop("checked", false);
      $("#contact-form").find("select").val("");
      document.querySelector("#contact-form .custom-select .select-selected").innerHTML =
        "<div>SELECCIONE A ESPECIALIDADE</div>";
      document.querySelector("#contact-form .custom-select-clinica .select-selected").innerHTML =
        "<div>SELECCIONE A CLÍNICA</div>";

      var email_input = document.querySelector(
        "#contact-form #contact-email-active"
      );
      email_input.style.display = "none";

      $("#contact-form .page .text").animate({ left: "-100px", opacity: 0 }, 0);
      $("#contact-form .p0 .text").animate({ left: 0, opacity: 1 }, 500);
    });

    $('#contact-form div[tabindex="4"]').keyup(function (e) {
      e.preventDefault();

      if (e.keyCode == 13) {
        $("#contact-form .p4").removeClass("active-pg");
        $("#contact-form .p0").addClass("active-pg");

        $("#contact-form .p0").css("pointer-events", "all");
        $("#contact-form .p1").css("pointer-events", "none");
        $("#contact-form .p2").css("pointer-events", "none");
        $("#contact-form .p3").css("pointer-events", "none");
        $("#contact-form .p4").css("pointer-events", "none");

        $("#contact-form").find("input[type=text]").val("");
        $("#contact-form").find("textarea").val("");
        $("#contact-form").find("input[type=number]").val("");
        $("#contact-form").find("input[type=email]").val("");
        $("#contact-form").find("#contact-phone").prop("checked", true);
        $("#contact-form").find("#accept-tc").prop("checked", false);
        $("#contact-form").find("select").val("");
        document.querySelector("#contact-form .custom-select .select-selected").innerHTML =
          "<div>SELECCIONE A ESPECIALIDADE</div>";
        document.querySelector("#contact-form .custom-select-clinica .select-selected").innerHTML =
          "<div>SELECCIONE A CLÍNICA</div>";

        var email_input = document.querySelector(
          "#contact-form #contact-email-active"
        );
        email_input.style.display = "none";

        $("#contact-form .page .text").animate(
          { left: "-100px", opacity: 0 },
          0
        );
        $("#contact-form .p0 .text").animate({ left: 0, opacity: 1 }, 500);
      }
    });
  });
}

function closeForm() {
  var contact_form = document.querySelector("#contact-form");

  $("#contact-form .p1").removeClass("active-pg");
  $("#contact-form .p2").removeClass("active-pg");
  $("#contact-form .p3").removeClass("active-pg");
  $("#contact-form .p4").removeClass("active-pg");
  $("#contact-form .p0").addClass("active-pg");

  $("#contact-form .page .text").animate({ top: "70px", opacity: 0 }, 0);

  $("#contact-form").find("input[type=text]").val("");
  $("#contact-form").find("textarea").val("");
  $("#contact-form").find("input[type=number]").val("");
  $("#contact-form").find("input[type=email]").val("");
  $("#contact-form").find("#contact-phone").prop("checked", true);
  $("#contact-form").find("#accept-tc").prop("checked", false);
  $("#contact-form").find("select").val("");
  document.querySelector("#contact-form .custom-select .select-selected").innerHTML =
    "<div>SELECCIONE A ESPECIALIDADE</div>";
  document.querySelector("#contact-form .custom-select-clinica .select-selected").innerHTML =
    "<div>SELECCIONE A CLÍNICA</div>";

  var email_input = document.querySelector(
    "#contact-form #contact-email-active"
  );
  email_input.style.display = "none";

  // contact_form.style.opacity = "0";
  contact_form.style.transform = "translate(60%, -50%)";
  contact_form.style.pointerEvents = "none";
  $("#contact-form .page").css("pointer-events", "none");
  var html_elem = document.documentElement;
  html_elem.style.overflowY = "inherit";
  $("body").css("overflow-y", "inherit");

  setTimeout(() => {
    contact_form.style.transition = "0s";
    contact_form.style.transform = "translate(-160%, -50%)";
  }, 1000);
}

function openMarcarForm() {
  var contact_form = document.querySelector("#contact-form");
  var menu = document.querySelector("#menu");

  contact_form.style.transition = "1s";
  contact_form.style.transform = "translate(-50%, -50%)";
  contact_form.style.pointerEvents = "all";
  $("#contact-form .page").css("pointer-events", "all");
  var html_elem = document.documentElement;
  html_elem.style.overflow = "hidden";

  $(".menu-wrapper-mobile .menu-items").removeClass("open");
  $(".menu-wrapper-mobile .btn-menu").removeClass("open");
  $(".menu-wrapper-mobile .close-menu").removeClass("open");
  $(".menu-wrapper-mobile .menu-item").removeClass("open");

  $("#contact-form .p0 .text").animate({ left: 0, opacity: 1 }, 500);
}

addSelectElements(this);
addSelectElementsClinica(this);
getFormData();