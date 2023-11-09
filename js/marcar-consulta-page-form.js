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
        // a.setAttribute("data-v-6aabded5", "");
        // a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
        x[i].appendChild(a);
        aa = document.createElement("DIV");
        // aa.setAttribute("data-v-6aabded5", "");
        aa.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
        a.appendChild(aa);
        /*for each element, create a new DIV that will contain the option list:*/
        b = document.createElement("DIV");
        b.setAttribute("class", "select-items select-hide");
        // b.setAttribute("data-v-6aabded5", "");
        for (j = 1; j < ll; j++) {
            /*for each option in the original select element,
              create a new DIV that will act as an option item:*/
            c = document.createElement("DIV");
            // c.setAttribute("data-v-6aabded5", "");
            c.innerHTML = selElmnt.options[j].innerHTML;
            c.addEventListener("click", function(e) {
                /*when an item is clicked, update the original select box,
                    and the selected item:*/
                var y, i, k, s, h, sl, yl;
                s = this.parentNode.parentNode.getElementsByTagName("select")[0];
                sl = s.length;
                h = this.parentNode.previousSibling;
                for (i = 0; i < sl; i++) {
                    if (s.options[i].innerHTML == this.innerHTML) {
                        d = document.createElement("DIV");
                        // d.setAttribute("data-v-6aabded5", "");
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
                        // this.setAttribute("data-v-6aabded5", "");
                        break;
                    }
                }
                h.click();
            });
            b.appendChild(c);
        }
        x[i].appendChild(b);

        a.addEventListener("click", function(e) {
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
    $(document).ready(function() {
        var form_data = new FormData();
        var name = document.querySelector("#contact-form-page #contact-name");


        if (name.value == "") {
            $("#contact-form-page .balloon-name-error").css("display", "flex");
        } else {
            $("#contact-form-page .balloon-name-error").css("display", "none");
            form_data.append("name_form", name.value);
        }

        var radios = document.querySelectorAll(
            '#contact-form-page input[name="contact-option"]'
        );
        var value;
        var map = Array.prototype.map;
        var phone_input;
        var email_input;
        var balloon_email;

        map.call(radios, function(r) {
            r.addEventListener("click", function() {
                if (r.type === "radio") {
                    if (r.checked) {
                        value = r.value;
                        form_data.append("contact_form", value);
                        phone_input = document.querySelector(
                            "#contact-form-page #contact-phone-active"
                        );
                        email_input = document.querySelector(
                            "#contact-form-page #contact-email-active"
                        );
                        balloon_email = document.querySelector(
                            "#contact-form-page .balloon-email"
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


        phone_input = document.querySelector(
            "#contact-form-page #contact-phone-active"
        );
        email_input = document.querySelector(
            "#contact-form-page #contact-email-active"
        );

        var controlEmail = false;
        if (String(phone_input.value).length < 9) {
            $("#contact-form-page .balloon-phone-error").css("display", "flex");
        } else {
            $("#contact-form-page .balloon-phone-error").css("display", "none");
            if (phone_input.value == "" && email_input.style.display == "none") {
                $("#contact-form-page .balloon-phone-error-empty").css(
                    "display",
                    "flex"
                );
                $("#contact-form-page .balloon-email-error").css("display", "none");
            }

            if (email_input.value == "" && phone_input.style.display == "none") {
                $("#contact-form-page .balloon-phone-error-empty").css(
                    "display",
                    "none"
                );
                $("#contact-form-page .balloon-email-error").css("display", "flex");
            }

            if (
                phone_input.value == "" &&
                email_input.value == "" &&
                phone_input.style.display == "inline-block" &&
                email_input.style.display == "inline-block"
            ) {
                $("#contact-form-page .balloon-phone-error-empty").css(
                    "display",
                    "flex"
                );
                $("#contact-form-page .balloon-email-error").css("display", "flex");
            }

            if (
                phone_input.value == "" &&
                email_input.value != "" &&
                phone_input.style.display == "inline-block" &&
                email_input.style.display == "inline-block"
            ) {
                $("#contact-form-page .balloon-phone-error-empty").css(
                    "display",
                    "flex"
                );
                $("#contact-form-page .balloon-email-error").css("display", "none");
            }

            if (
                phone_input.value != "" &&
                email_input.value == "" &&
                phone_input.style.display == "inline-block" &&
                email_input.style.display == "inline-block"
            ) {
                $("#contact-form-page .balloon-phone-error-empty").css(
                    "display",
                    "none"
                );
                $("#contact-form-page .balloon-email-error").css("display", "flex");
            }

            if (email_input.value != "") {
                var verifyEmail = vm.checkEmail(email_input.value);
                if (verifyEmail) {
                    controlEmail = true;
                } else {
                    $("#contact-form-page .balloon-email-error").css("display", "flex");
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
                $("#contact-form-page .balloon-phone-error-empty").css(
                    "display",
                    "none"
                );
                $("#contact-form-page .balloon-phone-error").css("display", "none");
                $("#contact-form-page .balloon-email-error").css("display", "none");
                $("#contact-form-page .p1").removeClass("active-pg");
                $("#contact-form-page .p2").addClass("active-pg");

                $("#contact-form-page .p0").css("pointer-events", "none");
                $("#contact-form-page .p1").css("pointer-events", "none");
                $("#contact-form-page .p2").css("pointer-events", "all");
                $("#contact-form-page .p3").css("pointer-events", "none");

                $("#contact-form-page .p2 .text").animate({ left: 0, opacity: 1 }, 500);
            }
        }

        var submit_btn = document.querySelector("#contact-form-page .submit-btn");
        var assunto = document.querySelector("#contact-form-page .select-selected");
        var accept_tc = document.querySelector("#contact-form-page #accept-tc");

        submit_btn.addEventListener("click", function() {
            if (accept_tc.checked != true) {
                $("#contact-form-page .balloon-tc-error").css("display", "flex");
            } else {
                $("#contact-form-page .balloon-tc-error").css("display", "none");
            }

            if (assunto.innerText == "SELECCIONE A ESPECIALIDADE") {
                $("#contact-form-page .balloon-subject-error").css("display", "flex");
            }

            var observer = new MutationObserver(function(mutations) {
                var subject = $("#contact-form-page .select-selected").text();
                var referrer = document.referrer;
                $("#contact-form-page .balloon-subject-error").css("display", "none");
            });

            var config = {
                attributes: true,
                childList: true,
                characterData: true,
            };

            observer.observe(assunto, config);

            if (
                assunto.innerText != "SELECCIONE A ESPECIALIDADE" &&
                accept_tc.checked == true
            ) {
                var data = {
                    name: name.value,
                    phone: phone_input.value,
                    email: email_input.value,
                    subject: assunto.innerText,
                };

                $.ajax({
                    url: "https://www.anacarolinapereira.pt/ajax/marcar-consulta.php",
                    type: "POST",
                    data: data,
                    dataType: "json",
                    success: function(response) {
                        $("#contact-form-page .balloon-tc-error").css("display", "none");
                        $("#contact-form-page .balloon-subject-error").css("display", "none");

                        $(".error-msg").css('color', '#0babc5');
                        $(".error-msg").text(response.result);
                    },
                });
            }
        });
    });
}

// addSelectElements(this);
getFormData();