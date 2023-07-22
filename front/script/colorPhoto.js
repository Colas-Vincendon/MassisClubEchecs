$(document).ready(function () {
  $(".gold").hover(
    function () {
      // Au survol
      $(".gold1, .gold2").css("filter", "grayscale(0)");
    },
    function () {
      // Au sortir du survol
      $(".gold1, .gold2").css("filter", "grayscale(100%)");
    }
  );
});
