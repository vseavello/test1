$(document).ready(function() {
  $(".read-more").click(function() {
    if($(this).hasClass("short")) {
      $(this).removeClass("short").addClass("full");
    } else {
      $(this).removeClass("full").addClass("short");
    }
  });
  $(".read-more").mouseover(function() {
    $(this).fadeTo("fast", 0.5);
  });
  $(".read-more").mouseleave(function() {
    $(this).fadeTo("fast", 1);
  });
});
