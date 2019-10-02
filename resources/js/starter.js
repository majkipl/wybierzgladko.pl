import $ from 'jquery';
import Parallax from 'parallax-js';
import 'lightslider';


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

    starter.main.autoscroll();
    starter.effects.hideLoader();
});

$(window).on("resize", () => {
    starter.main.orientationchange();
});

$(window).scroll(() => {
    starter.main.scroll();
});

const starter = {
    _var: {},

    main: {
        init: function () {
            console.log('starter');

            starter.main.onClick();

            starter.lightslider.hero();
            starter.lightslider.reviews();

            starter.quiz.init();
            starter.selectbox.init();
            starter.parallax.init();
        },

        resize: function() {
            $(".mCS_no_scrollbar").removeClass('mCS_no_scrollbar');
            starter.effects.matchMaxHeight();
        },

        onClick: function () {
            $(document).on('click', '#top nav.navbar .hamburger', function () {
                $('section#top').css({'overflow': 'visible'});
                $('.container-menu').toggleClass("showed");

                if ($(this).hasClass("is-active")) {
                    $(this).removeClass("is-active");
                } else {
                    $(this).addClass("is-active");
                }
                return false;
            });

            $(document).on('click', 'a.popup-open,image.popup-open', function () {
                //close active popup
                $('.popup-show').removeClass('popup-show').fadeOut();
                starter.effects.enableScrolling();

                const popup = $('section#popup-layout');
                const items = shops['popup-' + $(this).data('popup')];

                $("section#popup-layout .html-body *").remove();

                $.each(items, function (key, url) {
                    if (url !== '#') {
                        const item = $('<div>').addClass('col-12 col-sm-6 col-md-4 col-lg-3 item');
                        const shop_content = $('<div>').addClass('shop-content');
                        const a = $('<a>').addClass('shop').attr('href', url).attr('title', 'KUP TERAZ').attr('target', '_blank');
                        shop_content.append(a);
                        item.append(shop_content);
                        $("section#popup-layout .list").append(item);
                    }
                });

                popup.addClass('popup-show').fadeIn();

                starter.effects.set_scroll_container_popup(popup.find('.popup-scroll'));
                starter.effects.disableScrolling();

                return false;
            });

            $(document).on('click', '.popup .popup-close', function () {
                const popup = $(this).parents('section');
                popup.find('.item').remove();
                popup.removeClass('popup-show').fadeOut();

                starter.effects.enableScrolling();
                $(".mCS_no_scrollbar").removeClass('mCS_no_scrollbar');

                return false;
            });

            $(document).on('click', 'a', function () {
                const $this = $(this);
                if ($this.hasClass('scroll-to')) {
                    $('html, body').animate({scrollTop: Math.abs($($this.attr('href')).position().top - 115)}, 1000);

                    setTimeout(function () {
                        $('html, body').animate({scrollTop: Math.abs($($this.attr('href')).position().top - 115)}, 1000);
                    }, 1000);

                    return false;
                } else {
                    const attri = starter.main.getElementDomByURL($this.attr('href'));

                    if ($this.closest('nav').hasClass('menu')) {
                        $('.container-menu').toggleClass("showed");

                        const hamburger = $("#top nav.navbar .hamburger");

                        if (hamburger.hasClass("is-active")) {
                            hamburger.removeClass("is-active");
                        } else {
                            hamburger.addClass("is-active");
                        }
                    }

                    if ((attri !== undefined) && ($(attri).length > 0)) {
                        const offset = Math.abs($(attri).position().top - 115);
                        setTimeout(function () {
                            $('html, body').animate({scrollTop: offset}, 1000);
                        }, 0);

                        return false;
                    }

                    return true;
                }
            });
        },

        autoscroll: function () {
            const attri = starter.main.getElementDomByURL(window.location.pathname);

            if ((attri !== undefined) && ($(attri).length > 0)) {
                const offset = Math.abs($(attri).position().top - 115);

                $('html, body').animate({scrollTop: offset}, 1000);
            }
        },

        getElementDomByURL: function ($url) {
            switch ($url) {
                case '/wybierz-gladko/':
                    return 'section#test';
                case '/zelazka/':
                    return 'section#comparison';
                case '/kontakt/':
                    return '#contact';
                case '/serwis/':
                    return '#service';
                case '/satysfakcja-gwarantowana/':
                    return '#hesitate';
            }
        },

        scroll: function () {
            if ($(window).scrollTop() > 25) {
                $('section#top').addClass('small');
            } else {
                $('section#top').removeClass('small');
            }

            starter.main.orientationchange();
        },

        orientationchange: function () {
            if (($(window).scrollTop() + $(window).height()) - $('section#top').height() > $('.twentytwenty-wrapper').height()) {
                $('section#baner .text-bottom').css({'position': 'absolute'});
            } else {
                $('section#baner .text-bottom').css({'position': 'fixed'});
            }
        },
    },

    quiz: {
        _var: {
            asked: [],
            random_color: '',
            step: 1,
            amount: {
                "ot": 0,
                "i": 0,
                "psu": 0,
                "sg": 0,
            },
        },

        init: function () {
            axios({
                method: 'get',
                url: '/json/asked.json'
            }).then(function (response) {
                starter.quiz._var.asked = response.data;

                if ($("#test #quiz").length > 0) {
                    starter.quiz._var.asked.shuffle();
                    $.each(starter.quiz._var.asked, function (index) {
                        starter.quiz._var.asked[index]['answers'].shuffle();
                    });
                    starter.quiz.setRandomColor(5);
                    starter.quiz.renderQuiz();
                    starter.quiz.clickAnswers();
                }
            });
        },

        renderQuiz: function () {
            $.each(starter.quiz._var.asked, function (index, answers) {
                let $t_html = $("#test #template").html();
                const $asked_length = starter.quiz._var.asked.length;

                $t_html = $t_html.replace("[index]", ($asked_length - index));
                $t_html = $t_html.replace("[full]", $asked_length);
                $t_html = $t_html.replace("[ask]", answers.ask);
                $t_html = $t_html.replace("[answers]", answers.answers.length);
                $t_html = $t_html.replace("[random_color]", starter.quiz._var.random_color[index]);

                $.each(answers.answers, function (index_a, answer) {
                    $t_html = $t_html.replace('[answer_' + index_a + ']', answers.answers[index_a].answer);
                    $.each(answer.points, function (index_p, point) {
                        $t_html = $t_html.replace('[' + index_p + index_a + ']', point);
                    });
                });

                const li = $("<li>").html($t_html);

                $("#test #quiz").prepend(li);
            });

            $("#test #quiz li").removeClass('d-none');

            starter.lightslider.quiz();
        },

        setRandomColor: function (index) {
            let randomize = Math.floor((Math.random() * index));

            if (starter.quiz._var.random_color.indexOf(randomize) < 0) {
                starter.quiz._var.random_color += randomize;
            }

            if (starter.quiz._var.random_color.length === index) {
                return false;
            } else {
                starter.quiz.setRandomColor(index);
            }
        },

        clickAnswers: function () {
            $('#test .answer').click(function () {
                ++starter.quiz._var.step;

                starter.quiz._var.amount.ot += $(this).data('ot');
                starter.quiz._var.amount.i += $(this).data('i');
                starter.quiz._var.amount.psu += $(this).data('psu');
                starter.quiz._var.amount.sg += $(this).data('sg');

                if (starter.quiz._var.step > starter.quiz._var.asked.length) {
                    let $points = 0;
                    let $ironMaxPoint = '';

                    $.each(starter.quiz._var.amount, function (key, value) {
                        if (value > $points) {
                            $points = value;
                            $ironMaxPoint = key;
                        }
                    });

                    const $indexSlide = $("#test #quiz li").index($("#win-" + $ironMaxPoint));

                    starter.lightslider._var.quiz.goToSlide($indexSlide);
                } else {
                    starter.lightslider._var.quiz.goToNextSlide();
                }
                return false;
            });
        },

    },

    parallax: {
        _var: {
            sceneFog: false,
        },
        init: function () {
            starter.parallax.fog();
        },

        fog: function () {
            const fogScene = $('body #sceneFog');
            if (fogScene.length > 0) {
                const $fog = fogScene.get(0);
                starter.parallax._var.sceneFog = new Parallax($fog);
            }
        },

        homehero: function () {
            for (let i = 1; i <= 8; i++) {
                const selector = '#baner .s' + i + ' .scene';
                const scene = $(selector).get(0);

                if (scene) {
                    new Parallax(scene);
                }
            }
        },
    },

    lightslider: {
        _var: {
            quiz: false,
            reviews: false,
        },

        hero: function () {
            const slider = $("#homeHero,#homeHeroRwd");
            if (slider.length > 0) {
                slider.lightSlider({
                    item: 1,
                    slideMargin: 0,
                    speed: 1000,
                    auto: true,
                    pause: 5000,
                    verticalHeight: 650,
                    vThumbWidth: 100,
                    gallery: false,
                    thumbMargin: 5,
                    swipeThreshold: 40,
                    responsive: [],
                    onSliderLoad: () => {
                        starter.parallax.homehero();
                    },
                });
            }
        },

        quiz: function () {
            const slider = $("#test #quiz");
            if (slider.length > 0) {
                starter.lightslider._var.quiz = slider.lightSlider({
                    item: 1,
                    slideMargin: 0,
                    mode: "fade",
                    controls: false,
                    adaptiveHeight: true,
                    verticalHeight: 650,
                    pager: false,
                    gallery: false,
                    thumbMargin: 5,
                    enableTouch: false,
                    enableDrag: false,
                    freeMove: false,
                    swipeThreshold: 40,
                    responsive: [],
                });
            }
        },

        reviews: function () {
            const slider = $("#reviews #reviewsSlider");
            if (slider.length > 0) {
                starter.lightslider._var.reviews = slider.lightSlider({
                    item: 1,
                    controls: false,
                    adaptiveHeight: true,
                    pager: false,
                    gallery: false,
                    thumbMargin: 5,
                    swipeThreshold: 40,
                    responsive: [],
                });
            }
        },
    },

    selectbox: {
        init: function () {
            const select = $("#comparison select");
            if (select.length > 0) {
                select.selectbox({
                    onChange: function (target) {
                        $('#comparisonMobile .d-block').addClass('d-none').removeClass('d-block');
                        $('#comparisonMobile .' + target).addClass('d-block').removeClass('d-none');
                    },
                    effect: "slide"
                });
            }
        },
    },

    effects: {
        hideLoader: function () {
            $('#loader').fadeOut();
        },

        set_scroll_container_popup: function (obj) {
            obj.mCustomScrollbar({
                advanced: {
                    updateOnContentResize: true
                },
            });
        },

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

        matchMaxHeight: function() {
            $('section#rules .ew-button').matchMaxHeight();
        },
    }
}

Array.prototype.shuffle = function () {
    let input = this;

    for (let i = input.length - 1; i >= 0; i--) {

        let randomIndex = Math.floor(Math.random() * (i + 1));
        let itemAtIndex = input[randomIndex];

        input[randomIndex] = input[i];
        input[i] = itemAtIndex;
    }
    return input;
}
