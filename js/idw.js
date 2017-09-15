jQuery(document).ready(function($){

    var width = $(window).width();  //console.log(width);
    var cards = document.getElementsByClassName("s05-card"); //console.log(cards);
    var clength = cards.length; //console.log(clength);
        if (width < 1400 && width >= 1021) {
            jQuery('.s05-card').last().addClass('hidden-card');
        } else if (width < 1021 && width >= 700) {
            jQuery('.s05-card').last().addClass('hidden-card');
            jQuery('.s05-card:nth-last-child(2)').addClass('hidden-card');
        }else if (width < 700) {
            jQuery('.s05-card').last().addClass('hidden-card');
            jQuery('.s05-card:nth-last-child(2)').addClass('hidden-card');
            jQuery('.s05-card:nth-last-child(3)').addClass('hidden-card');
            jQuery('.s05-card:nth-last-child(4)').addClass('hidden-card');
        }



});
