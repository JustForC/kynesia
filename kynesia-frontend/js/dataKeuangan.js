$(".money-dad").slice(0,3).show();
$(".money-form").slice(0,3).show();

$(".money-plus").on("click", function() {
    $(".money-dad:hidden").slice(0,1).show();
    $(".money-form:hidden").slice(0,1).show();

    if($(".money-dad:hidden").length == 0) {
        $(".money-plus").fadeOut();
    }
})