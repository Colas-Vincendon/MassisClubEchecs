$(document).ready(function () {
  $(document).click(function (event) {
    var target = $(event.target);
    if (!target.closest(".dropdown").length) {
      $(".dropdown-menu").collapse("hide");
    }
  });
});
