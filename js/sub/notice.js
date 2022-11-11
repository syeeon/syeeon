$(document).ready(function(){
    $(".qst_box").click(function(){
        $(".ans_box").not($(this).find(".ans_box")).slideUp();
        $(this).find(".ans_box").slideToggle()
    })

})