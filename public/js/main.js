$(document).ready(function() {

    $('.toggler').click(function(event) {
        event.preventDefault();
        $('.hiddencontent').toggleClass('hidden');
    });

});