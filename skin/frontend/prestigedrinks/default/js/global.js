$.noConflict();

function productTab() {
    jQuery(".product-collateral .tab-content").hide();
    jQuery(".product-collateral h2").click(function() {
        if(jQuery(this).hasClass("active")) {
            jQuery(".product-collateral .tab-content").hide();
            jQuery(".product-collateral h2").removeClass("active");
        }
        else {
            jQuery(".product-collateral .tab-content").hide();
            jQuery(".product-collateral h2").removeClass("active");
            jQuery(this).next(".tab-content").toggle();
            jQuery(this).toggleClass("active");
        }
    })
}

function podText() {
    jQuery(".holder-column > .grid-50, .holder-column-2 > .grid-50").each(function() {
        var boxHeight =	jQuery(this).height();
        var textHeight = jQuery(this).find(".pod-text-holder h2").height();
        if(boxHeight > 500) {
            if(jQuery(window).width() < 767) {
                jQuery(this).find(".footer-text").css("bottom",-boxHeight+textHeight+19);
            }
            else if(jQuery(window).width() < 1023 && jQuery(window).width() >767) {
                jQuery(this).find(".footer-text").css("bottom",-boxHeight+textHeight+19);
            }
            else {
                jQuery(this).find(".footer-text").css("bottom",-boxHeight+textHeight+29);
            }
        }
        else {
            if(jQuery(window).width() < 767) {
                jQuery(this).find(".footer-text").css("bottom",-boxHeight+textHeight+19);
                console.log("2");
            }
            else if(jQuery(window).width() < 1023 && jQuery(window).width() >767) {
                jQuery(this).find(".footer-text").css("bottom",-boxHeight+textHeight+19);
            }
            else {
                jQuery(this).find(".footer-text").css("bottom",-boxHeight+textHeight+29);
                console.log("4");
            }
        }
        if(jQuery(this).hasClass("large-pod")){
            if(jQuery(this).height() % 2 != 0) {
                jQuery(".twitter").height(jQuery(".small-block").height()-1);
            }
            else {
                jQuery(".twitter").height(jQuery(".small-block").height());
            }
        }
    });
}

jQuery( document ).ready(function( $ ) {
    productTab();
    $(".toggleFilters").click(function(event) {
	event.preventDefault();
	$("#narrow-by-list").toggle();
    })

    $(".mobile-search").click(function(event){
	event.preventDefault();
	$(".mobile-search-form").slideToggle();
    })

    if($(window).width() < 1025) {
	$('#mobile-nav li:has(li)').addClass('hasChildren');
    }

    $("#nav-toggle").click(function(){
        if($(this).hasClass("active")) {
            $(".menu-new-mobile-menu li").removeClass("dl-subviewopen");
        }
        $(".mobile-search-form").slideUp();
	$(".dl-menuwrapper").toggleClass("active");
        $("#mobile-search").slideUp();
        $("nav").removeClass("dl-subview");
        //$("#mobile-nav nav").toggleClass("mobile-menu-active");
        $("#mobile-nav").toggleClass("dl-menuopen");
    })

$('#dl-menu').dlmenu({
        animationClasses: {classin: 'dl-animate-in-5', classout: 'dl-animate-out-5'}
    });

    if($(window).width() > 1024) {
    $(".carousel-block").height($(window).width()/2.57);
    }

    if($(window).width() > 1024) {
        $(".carousel-block").height($(window).width()/2.57);
    }

    $(".fancybox").fancybox({
        closeBtn    : 'false',
        maxWidth	: 800,
        maxHeight	: 600,
        fitToView	: false,
        width		: '70%',
        height		: '70%',
        autoSize	: false,
        closeClick	: false,
        openEffect	: 'none',
        closeEffect	: 'none',
        helpers : {
            overlay : {
                closeClick : false,
                css : {
                    'background' : 'rgba(0, 0, 0, 0.80)'
                }
            }
        }
    });

    if(Cookies.get("age") != 1) {
        $(".fancybox").trigger("click");
    }

    $("#agegate #yesbutton").click(function() {
        Cookies.set("age","1", 3);
    })

    $("nav .column-1 li:first-of-type").trigger("hover");

    $(".cat-read-more").click(function(event) {
        event.preventDefault();
        $(".category-description-full").toggle();
	$(".category-description").toggle();
    })

    $(".discount h2").click(function(){
        $(".discount-form").slideToggle();
        $(this).toggleClass("active");
    })

    $('.owl-carousel').owlCarousel({
        loop:true,
        nav:true,
        responsive:{
            0:{
                items:1
            }
        },
        autoplay:true,
        autoplayTimeout:7000,
        autoplayHoverPause:true,
        pagination: true,
        animateOut: 'fadeOut'
    })
    $("nav > ul > li").hover(function() {
        $(this).find(".sub .tabs-options li:first-of-type").addClass("over");
    })
    $("nav .sub .tabs-options li").hover( function() {
        $("nav .sub .tabs-options li").removeClass("over");
        $(this).addClass("over");
    })



    $("#nav-toggle").click(function() {
        $(this).toggleClass("active");
    })

    var	maxLength = $(".input-box p.note strong").html()
    $(".product-options .input-box input").keyup(function() {
        var length = $(this).val().length;
        var length = maxLength-length;
        $(this).parent(".input-box").find("p.note strong").html(length);
    });

    $(".filter-title").click(function() {
        if($(this).parent(".filter-options").hasClass("active")) {
            $(".filter-options ul").hide();
        }
        else {
            $(".filter-options ul").hide();
            $(this).parent(".filter-options").find("ul").show();
        }
        $(this).parent(".filter-options").toggleClass("active");
    })

    $(".qty-plus").click(function(){
        var qty = parseInt(jQuery("#qty").val());
           jQuery("#qty").val(qty+1);
    })
    jQuery(".qty-minus").click(function() {
        var qty = parseInt(jQuery("#qty").val());
	    if(qty != 1) {
               jQuery("#qty").val(qty-1);
            }
    })
    if(jQuery(window).width() < 768) {
        jQuery(".footer-pod ul").hide();
        jQuery(".footer-pod h3").click(function() {
            if(jQuery(this).hasClass("active")) {
                jQuery(".footer-pod ul").hide();
                jQuery(".footer-pod h3").removeClass("active");
            }
            else {
                jQuery(".footer-pod ul").hide();
                jQuery(".footer-pod h3").removeClass("active");
                jQuery(this).next("UL").toggle();
                jQuery(this).toggleClass("active");
            }
        })
    }
});

jQuery(window).resize(function() {
    var podHeight = jQuery("#pods .small-block").height();
    if(jQuery(window).width < 767) {
        jQuery(".twitter").height(podHeight-1);
    }
    else {
        jQuery(".twitter").height(podHeight);
    }

    podText();
})

jQuery(window).load(function() {
    podText();
    var podHeight = jQuery("#pods .small-block").height();
});
