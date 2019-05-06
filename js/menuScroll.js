  $("#aboutMe, #goDown").click(() => {
    $("html, body").animate(
      {
        scrollTop: $(".about-me").offset().top
      },
      600
    );
  });
  $("#myProjects").click(() => {
    $("html, body").animate(
      {
        scrollTop: $(".my-projects").offset().top
      },
      600
    );
  });
    $("#contactMe").click(() => {
    $("html, body").animate(
      {
        scrollTop: $(".contact-me").offset().top
      },
      600
    );
  });