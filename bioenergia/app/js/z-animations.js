jQuery(document).ready(function ($) {
    function inview_animate(elem) {
        new Waypoint.Inview({
            element: elem,
            enter: function (direction) {
                $(this.element).addClass($(elem).data('animate') + ' animated');
            }
        });
    }

    $('[data-animate]').each(function () {
        inview_animate(this);
    });

});