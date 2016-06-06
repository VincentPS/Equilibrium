$(document).ready(function() {
    $(window).scroll(function() {
        $('#bg').toggle({
            effect: 'zIndex: 1000;'
        }, 'dequeue');
    });
});
