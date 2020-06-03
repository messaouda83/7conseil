(function ($) {
    /**
     * Select Icon
     */
    wp.customize('xstr_option[icon_picker]', function (value) {
        value.bind(function (newval) {
            $('.scroll-to-top a i').removeClass();
            $('.scroll-to-top a i').addClass(newval);
        });
    });

    /**
     * Icon width
     */
    wp.customize('xstr_option[size]', function (value) {
        value.bind(function (newval) {
            $('.scroll-to-top a').css('width', newval);
        });
    });

    /**
     * Icon Height
     */
    wp.customize('xstr_option[size]', function (value) {
        value.bind(function (newval) {
            $('.scroll-to-top a').css('height', newval);
        });
    });

    /**
     * Margin Left
     */
    wp.customize('xstr_option[size]', function (value) {
        value.bind(function (newval) {
            $('.scroll-to-top a').css('margin-left', -(newval/2));
        });
    });

    /**
     * Icon border radius
     */
    wp.customize('xstr_option[border_radius]', function (value) {
        value.bind(function (newval) {
            $('.scroll-to-top a').css('border-radius', newval+'%');
        });
    });


    /**
     * Icon size
     */
    wp.customize('xstr_option[size]', function (value) {
        value.bind(function (newval) {
            $('.scroll-to-top a').css('font-size', newval/2);
        });
    });

    /**
     * Icon color
     */
    wp.customize('xstr_option[icon_color]', function (value) {
        value.bind(function (newval) {
            $('.scroll-to-top a').css('color', newval);
        });
    });


    /**
     * Icon background
     */
    wp.customize('xstr_option[icon_bg_color]', function (value) {
        value.bind(function (newval) {
            $('.scroll-to-top a').css('background', newval);
        });
    });


    /**
     * Icon position
     */
    wp.customize('xstr_option[icon_position]', function (value) {
        value.bind(function (newval) {
            $('.scroll-to-top').css('left', newval + '%');
        });
    });

    

})(jQuery);