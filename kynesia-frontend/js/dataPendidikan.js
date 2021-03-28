$(".workshop").slice(0,1).show();

$(".edu-plus-workshop").on("click", function() {
    $(".workshop:hidden").slice(0,1).show();

    if($(".workshop:hidden").length == 0) {
        $(".edu-plus-workshop").fadeOut();
    }
})

$(".prestasi").slice(0,1).show();

$(".edu-plus-prestasi").on("click", function() {
    $(".prestasi:hidden").slice(0,1).show();

    if($(".prestasi:hidden").length == 0) {
        $(".edu-plus-prestasi").fadeOut();
    }
})

$(".bahasa").slice(0,1).show();

$(".edu-plus-bahasa").on("click", function() {
    $(".bahasa:hidden").slice(0,1).show();

    if($(".bahasa:hidden").length == 0) {
        $(".edu-plus-bahasa").fadeOut();
    }
})

$(".organisasi").slice(0,1).show();

$(".edu-plus-organisasi").on("click", function() {
    $(".organisasi:hidden").slice(0,1).show();

    if($(".organisasi:hidden").length == 0) {
        $(".edu-plus-organisasi").fadeOut();
    }
})

$(".talent").slice(0,1).show();

$(".edu-plus-talent").on("click", function() {
    $(".talent:hidden").slice(0,1).show();

    if($(".talent:hidden").length == 0) {
        $(".edu-plus-talent").fadeOut();
    }
})