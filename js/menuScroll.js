/*jshint esversion: 6 */ 
  $("#home").click(() => {
    $("html, body").animate(
      {
        scrollTop: $(".hero").offset().top
      },
      600
    );
  });

  $("#aboutMe, #goDown").click(() => {
    $("html, body").animate(
      {
        scrollTop: $(".tab-section").offset().top -60
      },
      600
    );
  });
  $("#myProjects").click(() => {
    $("html, body").animate(
      {
        scrollTop: $(".my-projects").offset().top -40
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
  $("#myLogo").click(() => {
    $("html, body").animate(
      {
        scrollTop: $(".hero").offset().top
      },
      600
    );
  });