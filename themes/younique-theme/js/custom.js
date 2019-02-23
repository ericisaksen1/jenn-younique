var loadCustom = (function($){
    'use-strict';

    var $win = $(window);
    var siteHeaderHeight = $('.site-header').outerHeight();
    var resizeHero = function() {
        $('.hero, .hero-left, .hero-right').css('height', $(window).height() - siteHeaderHeight)
        $('.hero').css('margin-top', siteHeaderHeight);
    }
    var animateMe = function(){
        $('[data-animate]').each(function(){
            var docHeight = $win.outerHeight() + $win.scrollTop(),
            offsetTop = $(this).offset().top - docHeight,
            animateClass = $(this).attr('data-animate'),
            animateOut = $(this).attr('data-animate-out') ? $(this).attr('data-animate-out') : "fadeOut";
            console.log(offsetTop);
            if(offsetTop < -50){
                $(this).removeClass(animateOut).addClass(animateClass + ' animated');
                if($(this).attr('data-animate-delay')){
                    $(this).css({
                        "animation-delay": $(this).attr('data-animate-delay') + 's'
                    })
                }
            } else {
                $(this).css({
                    "animation-delay": 0
                })
                $(this).removeClass(animateClass).addClass(animateOut);
            }
        })
    }
    load = function(){
        resizeHero();
        animateMe();
        $win.scroll(function(){
            animateMe();
        })
    }
    return {
        load: load
    }
})(jQuery);

jQuery(window).on('load', loadCustom.load);
