Cocoen.parse(document.body);

// ie: Engine.ui.misc();
jQuery(function ($) {
    "use strict";
    var Engine = {
        ui: {
            misc: function () {
                AOS.init({
                    duration: 1500,
                });
                $(() => {
                    if ($(".arealist:visible").length)
                        $(".noresult").hide();
                    else
                        $(".noresult").show();

                    $(".areas_loadMoreBtn").on('click', function () {
                        $(".arealist").show();
                        $(".areas_loadMoreWrap").remove();
                    });

                    $(".areas_alphabet").on('click', function () {
                        $(this).siblings().removeClass("active");
                        $(this).addClass("active");
                        $(".all-list").hide();
                        $(".arealist").show();
                        let chr = $(this).text();
                        $(".arealist").hide();
                        $(".char" + chr).show();
                        $(".areas_loadMoreWrap").remove();

                        if ($(".arealist:visible").length)
                            $(".noresult").hide();
                        else
                            $(".noresult").show();
                    });
                    $(".areas_allSearch").on('click', function () {
                        $(this).siblings().removeClass("active");
                        $(this).addClass("active");
                        $(".all-list").show();
                        $(".arealist").show();
                        $(".noresult").hide();
                    });


                    $('.arealist ul').each(function () {
                        var max = 19
                        if ($(this).find("li").length > max) {
                            $(this)
                                .find('li:gt(19)')
                                .hide()
                                .end()
                                .append(
                                    $('<li class="show-more mt-3">Show More</li>').click(function () {
                                        $(this).siblings(':hidden').show().end().remove();
                                    })
                                );
                        }
                    });

                    $('.areas_droplist > .caption').on('click', function () {
                        $(this).parent().toggleClass('open');
                    });

                    $('.areas_droplist > .list > .item').on('click', function () {
                        $('.areas_droplist > .list > .item').removeClass('active selected');
                        $(this).addClass('selected').parent().parent().removeClass('open').children('.caption').text($(this).text());
                    });
                });
            }, // end misc
        }, // end ui
        //utils: {

        //}, // end utils
    };
    Engine.ui.misc();
    //Engine.utils.sliders();
});

jQuery(window).scroll(function () {
    if (jQuery(this).scrollTop() > 1000) {
        jQuery('#back-top').fadeIn();
        jQuery("#back-top").addClass('active');
    } else {
        jQuery('#back-top').fadeOut();
        jQuery("#back-top").removeClass('active');
    }
});
jQuery('#back-top').click(function () {
    jQuery('body,html').animate({
        scrollTop: 0
    }, 1000);
    return false;
});