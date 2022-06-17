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
                    $("#menu-item-73 a").append('<span class="pl-3"><svg width="14" height="8" viewBox="0 0 14 8" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1.95947 1.42407L7.23725 6.42407L12.515 1.42407" stroke="#8DC63B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></span>');

                    $("#menu-item-73 a").hover(function(){
                        $("#service-menu-dropdown").css('display','block');
                    }, function(){
                        $("#service-menu-dropdown").css('display','none');
                    });

                    $("#service-menu-dropdown").hover(function(){
                        $(this).css('display','block');
                    }, function(){
                        $(this).css('display','none');
                    });

                    $(".cta__list").slick({
                        slidesToShow: 4,
                        arrows: false,
                        responsive: [
                            {
                                breakpoint: 1600,
                                autoplay:true,
                                settings: {
                                    slidesToShow: 3,
                                }
                            },
                            {
                                breakpoint: 1100,
                                settings: {
                                    slidesToShow: 2,
                                }
                            },
                            {
                                breakpoint: 540,
                                settings: {
                                    slidesToShow: 1,
                                }
                            }
                        ]
                    });

                    $(".accordion-head").on('click', function () {
                        $(".accordion-head").removeClass("active");
                        $(this).addClass('active');

                        if ($('.accordion-body').is(':visible')) {
                            $(".accordion-body").slideUp(300);
                            $(".plusminus").html('<svg width="18" height="13" viewBox="0 0 18 13" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M17.4371 3.9577C17.5909 3.79357 17.719 3.59064 17.814 3.36051C17.909 3.13039 17.9691 2.87756 17.9908 2.61647C18.0347 2.08918 17.9197 1.56024 17.6711 1.14602C17.4224 0.731795 17.0606 0.46622 16.6651 0.407715C16.2696 0.34921 15.8729 0.502568 15.5622 0.834052L9 7.83327L2.43782 0.834051C2.12714 0.502567 1.73041 0.349209 1.33492 0.407714C0.939421 0.466219 0.577557 0.731794 0.328928 1.14602C0.0802993 1.56024 -0.0347253 2.08918 0.00915708 2.61647C0.0530375 3.14376 0.252231 3.62622 0.562918 3.9577L8.06255 11.9568C8.32858 12.2408 8.65921 12.3955 9 12.3955C9.34079 12.3955 9.67142 12.2408 9.93745 11.9568L17.4371 3.9577Z" fill="#8DC63B" /></svg>');
                        }
                        if ($(this).next(".accordion-body").is(':visible')) {
                            $(this).next(".accordion-body").slideUp(300);
                            $(this).children(".plusminus").html('<svg width="18" height="13" viewBox="0 0 18 13" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M17.4371 3.9577C17.5909 3.79357 17.719 3.59064 17.814 3.36051C17.909 3.13039 17.9691 2.87756 17.9908 2.61647C18.0347 2.08918 17.9197 1.56024 17.6711 1.14602C17.4224 0.731795 17.0606 0.46622 16.6651 0.407715C16.2696 0.34921 15.8729 0.502568 15.5622 0.834052L9 7.83327L2.43782 0.834051C2.12714 0.502567 1.73041 0.349209 1.33492 0.407714C0.939421 0.466219 0.577557 0.731794 0.328928 1.14602C0.0802993 1.56024 -0.0347253 2.08918 0.00915708 2.61647C0.0530375 3.14376 0.252231 3.62622 0.562918 3.9577L8.06255 11.9568C8.32858 12.2408 8.65921 12.3955 9 12.3955C9.34079 12.3955 9.67142 12.2408 9.93745 11.9568L17.4371 3.9577Z" fill="#8DC63B" /></svg>');
                        } else {
                            $(this).next(".accordion-body").slideDown(300);
                            $(this).children(".plusminus").html('<svg width="18" height="13" viewBox="0 0 18 13" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M17.4371 8.83331C17.5909 8.99745 17.719 9.20037 17.814 9.4305C17.909 9.66063 17.9691 9.91346 17.9908 10.1745C18.0347 10.7018 17.9197 11.2308 17.6711 11.645C17.4224 12.0592 17.0606 12.3248 16.6651 12.3833C16.2696 12.4418 15.8729 12.2884 15.5622 11.957L9 4.95775L2.43782 11.957C2.12714 12.2884 1.73041 12.4418 1.33492 12.3833C0.939421 12.3248 0.577557 12.0592 0.328928 11.645C0.0802993 11.2308 -0.0347253 10.7018 0.00915708 10.1745C0.0530375 9.64725 0.252231 9.1648 0.562918 8.83331L8.06255 0.834208C8.32858 0.550233 8.65921 0.395508 9 0.395508C9.34079 0.395508 9.67142 0.550233 9.93745 0.834208L17.4371 8.83331Z" fill="#8DC63B"/></svg>');
                        }
                    });

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
                        let chr = $(this).find('.areas_alphabet_inner').text();
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

                    $(".nav-item.menu-item-has-children").find("> .nav-link").addClass('dropdown-toggle');

                    if($(window).width() < 1500) {
                        $(".nav-item.menu-item-has-children .nav-link.dropdown-toggle").on('click', function(e){
                            e.preventDefault();
                            $('.dropdown > .dropdown-menu').slideToggle();
                        })
                    }
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