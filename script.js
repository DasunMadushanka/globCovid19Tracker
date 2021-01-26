$(document).ready(function () {
    $(window).scroll(function () {
      if (this.scrollY > 500) {
        $(".scroll-up-btn").addClass("show");
      } else {
        $(".scroll-up-btn").removeClass("show");
      }
    });
  
    //slide up script
    $(".scroll-up-btn").click(function () {
      $("html").animate({ scrollTop: 0 });
    });
});