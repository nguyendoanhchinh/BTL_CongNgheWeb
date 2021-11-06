$(document).ready(function() {
    $("#txtavatar").change(function(e) {
        $("#avatar").attr("src", "assets/img/" + e.target.files[0].name);
    });
});