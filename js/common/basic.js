
$(document).ready(function () {

  /* gnb */
  $(".gnb .n2").mouseenter(function () {
    $(".gnb ul .dep_1, .nav_bg").stop().slideDown("fast")
  })

  $(".dep_1, .nav_bg").mouseleave(function () {
    $(".gnb ul ul, .nav_bg").stop().slideUp("fast")
  })


  $(".gnb .n4").mouseenter(function () {
    $(".gnb ul .dep_2, .nav_bg").stop().slideDown("fast")
  })

  $(".dep_2, .nav_bg").mouseleave(function () {
    $(".gnb ul ul, .nav_bg").stop().slideUp("fast")
  })
})