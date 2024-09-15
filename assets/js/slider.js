$(document).ready(function(){
    var nextbuttons = $('.right-link');
    var previousbuttons = $('.left-link');

    $.each(nextbuttons, function(index, nextbutton) {
        $(nextbutton).on('click', function() {
            var parent = $(this).parent();
            var innerTarget = parent.find('.inner');
            var slides = innerTarget.find('.slide');
            var amount = parent.find('input');

            if (amount.val() > 0) {
                amount.val(parseFloat(amount.val()) - 100 / slides.length);
                innerTarget.css('transform', 'translateX(' + amount.val() + '%)');
            }

        });
    });

    $.each(previousbuttons, function(index, previousbutton) {
        $(previousbutton).on('click', function() {
            var parent = $(this).parent();
            var innerTarget = parent.find('.inner');
            var slides = innerTarget.find('.slide');
            var amount = parent.find('input');

            if (amount.val() < (slides.length - 4) * (100 / slides.length)) {
                amount.val(parseFloat(amount.val()) + 100 / slides.length);
                innerTarget.css('transform', 'translateX(' + amount.val() + '%)');
            }

        });
    });
});