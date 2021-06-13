$(document).ready(function() {
    /* page loader */
    var loading = $("#loading");
    $(window).on('load', function() {
        if (loading) {
            loading.hide();
        }
    });
})