/* Hover Touch */
$(document).ready(function() {
    $('.hover').bind('touchstart', function(e) {
        e.preventDefault();
        $(this).toggleClass('cs-hover');
    });
});