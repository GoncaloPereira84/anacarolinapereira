function openQuestion(id) {
  var pergunta = $('*[data-topic-id="' + id + '"]');
  $(".quest").css("font-weight", "400");
  $(".arrow").removeClass("rotate");
  if (pergunta.parent().find(".answer").hasClass("active")) {
    $(".active").slideUp("slow");
    $(".active").removeClass("active");
  } else {
    $(".active").slideUp("slow");
    $(".active").removeClass("active");
    pergunta.parent().find(".answer").slideDown("slow");
    pergunta.css("font-weight", "bold");
    pergunta.parent().find(".answer").addClass("active");
    pergunta.children().find(".arrow").addClass("rotate");
  }
}

function goToTopic(id) {
  var topico = $('*[data-topico-id="' + id + '"]');

  if (topico.hasClass("opened")) {
    // topico.removeClass("opened");
  } else {
    $("*[data-topico-id]").removeClass("opened");
    topico.addClass("opened");
  }
}

goToTopic(1);
