import $ from 'jquery';
import 'lightslider';
import Isotope from 'isotope-layout';

(function ($) {
    $.fn.matchMaxHeight = function () {
        const items = $(this);
        $(items).attr('style', '');
        $(items).css({});
        let max = 0;
        for (let i = 0; i < items.length; i++) {
            max = max < $(items[i]).height() ? $(items[i]).height() : max;

        }
        $(items).css({'display': 'block', 'height': '' + max + 'px'});
    }
})(jQuery);

$(window).on("load", () => {
    starter.main.init();

    // starter.main.autoscroll();
    // starter.effects.hideLoader();
});

$(window).on("resize", () => {
});

$(window).scroll(() => {
    starter.scroll.init();
    starter.menu.light();
});

const starter = {
    _var: {
        grid: false,
        window_is_load: false,
        error: []
    },

    main: {
        init: function () {
            console.log('starter');

            $("body").show();

            starter.main.onClick();
            starter.main.onChange();
            starter.main.onSubmit();

            starter.dlmenu.init();
            starter.lightslider.init();
            starter.tooltip.init();
            starter.isotope.init();
            starter.selectbox.init();
        },

        onClick: function () {
            $(document).on("click", "nav .hamburger", function () {
                if ($(this).hasClass("is-active")) {
                    $(this).removeClass("is-active");
                } else {
                    $(this).addClass("is-active");
                }
                return false;
            });

            $(document).on("click", ".sticky .popup-close", function () {
                $(this)
                    .closest(".sticky")
                    .fadeOut(1000, function () {
                        $(this).remove();
                    });

                return false;
            });

            $(document).on("click", ".sticky", function () {
                $(this).fadeOut(1000, function () {
                    $(this).remove();
                });

                return false;
            });

            $(document).on("click", "a", function () {
                return starter.scroll.orLink($(this));
            });

            $(document).on("click", "#compare .filters a.filter", function () {
                $("#compare .filters a").removeClass("active");

                const filterValue = $(this).addClass("active").attr("data-filter");

                starter._var.grid.arrange({filter: filterValue});

                return false;
            });

            $(document).on("click", "a.popup-open,image.popup-open", function () {
                $(".popup-show").removeClass("popup-show").fadeOut();
                starter.effects.enableScrolling();

                const popup = $("section#popup-layout");
                const popup_id = $(this).data("popup");
                const items = shops["popup-" + popup_id];

                $("section#popup-layout .html-body *").remove();

                $.each(items, function (key, url) {
                    if (url !== "#") {
                        const item = $("<div>").addClass(
                            "col-12 col-sm-6 col-md-4 col-lg-3 item"
                        );
                        const shop_content = $("<div>").addClass("shop-content");
                        const a = $("<a>")
                            .addClass("shop")
                            .attr("href", url)
                            .attr("title", "KUP TERAZ")
                            .attr("target", "_blank");
                        shop_content.append(a);
                        item.append(shop_content);
                        $("section#popup-layout .list").append(item);
                    }
                });

                popup.addClass("popup-show").fadeIn();
                starter.effects.disableScrolling();

                return false;
            });

            $(document).on("click", ".popup .popup-close", function () {
                const popup = $(this).parents("section");

                popup.find(".item").remove();
                popup.removeClass("popup-show").fadeOut();
                starter.effects.enableScrolling();

                return false;
            });
        },

        onChange: function () {

        },

        onSubmit: function () {

        },

        getElementDomByURL: function ($url) {
            switch ($url) {
                case "/porownaj":
                    return "#compare";
                    break;
                case "/niewahaj-sie":
                    return "#hesitate";
                    break;
                case "/kontakt":
                    return "#contact";
                    break;
                default:
                    return false;
            }
        },
    },

    menu: {
        light: function () {
            if (starter._var.window_is_load && $("body").hasClass("home")) {
                starter.main.light_section("#hero");
                starter.main.light_section("#compare");
                starter.main.light_section("#hesitate");
                starter.main.light_section("#contact");
            }
        },

        light_section: function (id) {
            var height = $(window).scrollTop() + $(window).height() / 2;

            var section = $("section" + id);

            if (section.length > 0) {
                if (
                    height > section.position().top &&
                    height < section.position().top + section.height()
                ) {
                    pathname = section.data("url");

                    if (location.pathname !== pathname) {
                        event.preventDefault();
                        history.pushState(null, null, pathname);
                    }
                }
            }
        },
    },

    scroll: {
        init: function () {
            if ($(window).scrollTop() > 25) {
                $("nav").addClass("show-color");
            } else {
                $("nav").removeClass("show-color");
            }
        },

        orLink: function (element) {
            var attri = starter.main.getElementDomByURL(element.attr("href"));

            if (attri !== false && $(attri).length > 0) {
                setTimeout(function () {
                    $("html, body").animate(
                        {scrollTop: Math.abs($(attri).position().top)},
                        500,
                        function () {
                            $("html, body").animate(
                                {scrollTop: Math.abs($(attri).position().top)},
                                500
                            );
                        }
                    );
                }, 0);

                return false;
            }

            return true;
        },
    },

    isotope: {
        init: function () {
            const grid = $(".grid");
            if (grid.length > 0) {
                starter._var.grid = new Isotope('.grid', {
                    itemSelector: ".grid-item",
                    masonry: {
                        columnWidth: ".grid-sizer",
                        gutter: ".gutter-sizer",
                    },
                    filter: "*",
                });
            }
        },
    },

    dlmenu: {
        init: function () {
            $("#dl-menu").dlmenu({
                animationClasses: {
                    classin: "dl-animate-in-2",
                    classout: "dl-animate-out-2",
                },
                onLinkClick: function (el, ev) {
                    return starter.scroll.orLink($(ev.target));
                },
            });
        }
    },

    tooltip: {
        init: function () {
            $('[data-toggle="tooltip"]').tooltip({
                template:
                    '<div class="tooltip" role="tooltip">' +
                    '   <div class="arrow"></div>' +
                    '   <div class="tooltip-inner"></div>' +
                    "</div>",
            });
        },
    },

    selectbox: {
        init: function () {
            const select = $("#compare select");
            if (select.length > 0) {
                select.selectbox({
                    classSelector: "sbSelector clear",
                    classToggle: "sbToggle clear",
                    onChange: function (target, value, text) {
                        starter._var.grid.arrange({filter: target});
                    },
                    effect: "slide",
                });
            }
        },
    },

    lightslider: {
        _var: {
            products: false,
            reviews: false,
        },

        init: function () {
            starter.lightslider.hero();
            starter.lightslider.products();
            starter.lightslider.reviews();
        },

        hero: function () {
            const slider = $("#homeHero,#homeHeroRwd");
            if (slider.length > 0) {
                slider.lightSlider({
                    item: 1,
                    autoWidth: false,
                    slideMove: 1, // slidemove will be 1 if loop is true
                    slideMargin: 0,

                    addClass: "",
                    mode: "slide",
                    useCSS: true,
                    cssEasing: "ease", //'cubic-bezier(0.25, 0, 0.25, 1)',//
                    easing: "linear", //'for jquery animation',////

                    speed: 1000, //ms'
                    auto: true,
                    loop: false,
                    slideEndAnimation: true,
                    pause: 5000,

                    keyPress: false,
                    controls: true,
                    prevHtml: "",
                    nextHtml: "",

                    rtl: false,
                    adaptiveHeight: false,

                    vertical: false,
                    verticalHeight: 650,
                    vThumbWidth: 100,

                    thumbItem: 10,
                    pager: false,
                    gallery: false,
                    galleryMargin: 5,
                    thumbMargin: 5,
                    currentPagerPosition: "middle",

                    enableTouch: true,
                    enableDrag: true,
                    freeMove: true,
                    swipeThreshold: 40,

                    responsive: [],
                });
            }
        },

        products: function () {
            const slider = $("#explore #productsSlider");
            if (slider.length > 0) {
                starter.lightslider._var.products = slider.lightSlider({
                    item: 3,
                    autoWidth: false,
                    slideMove: 1, // slidemove will be 1 if loop is true
                    slideMargin: 30,

                    addClass: "",
                    mode: "slide",
                    useCSS: true,
                    cssEasing: "ease", //'cubic-bezier(0.25, 0, 0.25, 1)',//
                    easing: "linear", //'for jquery animation',////

                    speed: 400, //ms'
                    auto: false,
                    loop: false,
                    slideEndAnimation: true,
                    pause: 2000,

                    keyPress: false,
                    controls: false,
                    prevHtml: "",
                    nextHtml: "",

                    rtl: false,
                    adaptiveHeight: true,

                    vertical: false,
                    verticalHeight: 500,
                    vThumbWidth: 100,

                    thumbItem: 10,
                    pager: false,
                    gallery: false,
                    galleryMargin: 5,
                    thumbMargin: 5,
                    currentPagerPosition: "middle",

                    enableTouch: true,
                    enableDrag: true,
                    freeMove: true,
                    swipeThreshold: 40,

                    responsive: [
                        {
                            breakpoint: 991,
                            settings: {
                                item: 2,
                            },
                        },
                        {
                            breakpoint: 768,
                            settings: {
                                item: 1,
                            },
                        },
                    ],

                    onSliderLoad: function (el) {
                        $("#" + el.attr("id") + " div").matchMaxHeight();
                        starter.lightslider._var.products.refresh();
                    },
                });
            }
        },

        reviews: function () {
            const slider = $("#reviews #reviewsSlider");
            if (slider.length > 0) {
                starter.lightslider._var.reviews = slider.lightSlider({
                    item: 1,
                    autoWidth: false,
                    slideMove: 1, // slidemove will be 1 if loop is true
                    slideMargin: 10,

                    addClass: "",
                    mode: "slide",
                    useCSS: true,
                    cssEasing: "ease", //'cubic-bezier(0.25, 0, 0.25, 1)',//
                    easing: "linear", //'for jquery animation',////

                    speed: 400, //ms'
                    auto: false,
                    loop: false,
                    slideEndAnimation: true,
                    pause: 2000,

                    keyPress: false,
                    controls: false,
                    prevHtml: "",
                    nextHtml: "",

                    rtl: false,
                    adaptiveHeight: true,

                    vertical: false,
                    verticalHeight: 500,
                    vThumbWidth: 100,

                    thumbItem: 10,
                    pager: false,
                    gallery: false,
                    galleryMargin: 5,
                    thumbMargin: 5,
                    currentPagerPosition: "middle",

                    enableTouch: true,
                    enableDrag: true,
                    freeMove: true,
                    swipeThreshold: 40,

                    responsive: [],
                });
            }
        },
    },

    effects: {
        disableScrolling: function () {
            const x = window.scrollX;
            const y = window.scrollY;
            window.onscroll = function () {
                window.scrollTo(x, y);
            };
        },

        enableScrolling: function () {
            window.onscroll = function () {
            };
        },
    },
}
