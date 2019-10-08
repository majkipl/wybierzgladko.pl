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
    _var: {
        error: []
    },

    main: {
        init: function () {
            console.log('starter');

            starter.main.onClick();
            starter.main.onChange();
            starter.main.onSubmit();

            starter.lightslider.hero();
            starter.lightslider.reviews();
            starter.quiz.init();
            starter.selectbox.init();
            starter.parallax.init();

            starter.main.whereBuy();
        },

        resize: function () {
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

            $(document).on('click', 'label.select-all', function () {
                const legals = $("#legal_1, #legal_2, #legal_3, #legal_4");
                const checked = $(this).prev().is(':checked');
                $(this).prev().add(legals).prop('checked', !checked);
                return false;
            });

            $(document).on("click", "button.button-uploads", function () {
                $(this).prev().find("input[type=file]").trigger("click");
            });

            $(document).on('click', '#form .submit', function () {
                $('#form form#save').submit();
                return false;
            });

            $(document).on('click', '#contact a.send', function () {
                $(this).closest('form').submit();
                return false;
            });
        },

        onChange: function () {
            $(document).on('change', '.input, .textarea, .checkbox, .file', function () {
                const item = $(this);
                const value = $(this).val().trim();
                const name = $(this).attr('name');

                if (item.hasClass('upload-file')) {
                    const fileUpload = item[0].files[0];
                    const fieldId = item.attr('id');

                    const errorDiv = $(`.error-${fieldId}`);

                    errorDiv.text('');

                    if (fileUpload) {
                        if (fileUpload.size <= 4 * 1024 * 1024) {
                            const extension = fileUpload.name.split('.').pop().toLowerCase();
                            if (['jpg', 'jpeg', 'png'].indexOf(extension) !== -1) {
                                let reader = new FileReader();
                                reader.onload = function (event) {
                                    $(`#${fieldId}_thumb`).attr('src', event.target.result).parent().removeClass('hidden').next().addClass('hidden');
                                }
                                reader.readAsDataURL(fileUpload);
                            }
                        }
                    }
                }

                const valid = () => {
                    switch (name) {
                        case 'name':
                            return starter.main.validator.isName(value, 'Imię i nazwisko');
                        case 'firstname':
                            return starter.main.validator.isName(value, 'Imię');
                        case 'lastname':
                            return starter.main.validator.isName(value, 'Nazwisko');
                        case 'email':
                            return starter.main.validator.isEmail(value, 'Adres e-mail');
                        case 'phone':
                            return starter.main.validator.isPhone(value, 'Telefon');
                        case 'address':
                            return starter.main.validator.isAddress(value, 'Ulica');
                        case 'address_nb':
                            return starter.main.validator.isAddressNb(value, 'Numer mieszkania');
                        case 'city':
                            return starter.main.validator.isCity(value, 'Miasto');
                        case 'zip':
                            return starter.main.validator.isZip(value, 'Kod pocztowy');
                        case 'iban':
                            return starter.main.validator.isIban(value, 'Numer rachunku bankowego');
                        case 'reason':
                            return starter.main.validator.isMessage(value, 'Powód');
                        case 'legal_1':
                            return starter.main.validator.isLegal(item);
                        case 'legal_2':
                            return starter.main.validator.isLegal(item);
                        case 'legal_3':
                            return starter.main.validator.isLegal(item);
                        case 'legal_4':
                            return starter.main.validator.isLegal(item);
                        case 'legal_5':
                            return starter.main.validator.isLegal(item);
                        case 'message':
                            return starter.main.validator.isMessage(value, 'Wiadomość');
                        case 'img_receipt':
                            return starter.main.validator.isFile(item, 'Zdjęcie paragonu');
                        default:
                            return true;
                    }
                }

                if (valid() !== true) {
                    $(`.error-${name}`).text(valid());
                    starter._var.error[name] = valid();
                } else {
                    $(`.error-${name}`).text('');
                    delete starter._var.error[name];
                }
            });
        },

        onSubmit: function () {
            $(document).on('submit', '#formContact form', function () {
                const fields = starter.getFields($(this).closest('form'));
                const url = $(this).closest('form').attr('action');

                axios({
                    method: 'post', url: url, headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }, data: fields,
                }).then(function (response) {
                    $('#contact h3').html(response.data.results.message);
                    $('#contact .form').hide();
                }).catch(function (error) {
                    $(`.error-post`).text('');

                    if (error.response) {
                        Object.keys(error.response.data.errors).map((item) => {
                            $(`.error-${item}`).text(error.response.data.errors[item][0]);
                        });
                    } else if (error.request) {
                        console.log(error.request);
                    } else {
                        console.log('Error', error.message);
                    }
                });

                return false;
            });

            $(document).on('submit', '#form form', function () {
                $('.input, .textarea, .checkbox, .file').trigger('change');

                if (Object.keys(starter._var.error).length === 0) {
                    const fields = starter.getFields($(this).closest('form'));
                    const url = $(this).closest('form').attr('action');
                    const formData = new FormData();

                    for (const field in fields) {
                        formData.append(field, fields[field]);
                    }

                    axios({
                        method: 'post', url: url, headers: {
                            'content-type': 'multipart/form-data',
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }, data: formData,
                    }).then(function (response) {
                        window.location = response.data.results.url;
                    }).catch(function (error) {
                        $(`.error-post`).text('');
                        if (error.response) {
                            Object.keys(error.response.data.errors).map((item) => {
                                $(`.error-${item}`).text(error.response.data.errors[item][0]);
                            });
                        } else if (error.request) {
                            console.log(error.request);
                        } else {
                            console.log('Error', error.message);
                        }
                    });
                } else {
                    $('.error-post').text('');
                    for (let key in starter._var.error) {
                        if (starter._var.error.hasOwnProperty(key)) {
                            let value = starter._var.error[key];
                            $('.error-' + key).text(value);
                        }
                    }
                }

                return false;
            });
        },

        autoscroll: function () {
            const attri = starter.main.getElementDomByURL(window.location.pathname);

            if ((attri !== undefined) && ($(attri).length > 0)) {
                const offset = Math.abs($(attri).position().top - 115);

                $('html, body').animate({scrollTop: offset}, 1000);
            }
        },

        whereBuy: function () {
            const whereBuy = $("#whereBuy");
            if (whereBuy.length > 0) {
                const product_id = whereBuy.data('product');
                const items = shops['popup-' + product_id];

                $.each(items, function (key, url) {
                    if (url !== '#') {
                        const item = $('<div>').addClass('col-12 col-sm-6 col-md-4 col-lg-3 shop-item');
                        const a = $('<a>').addClass('shop').attr('href', url).attr('title', 'KUP TERAZ').attr('target', '_blank');
                        item.append(a);
                        $("section#whereBuy .shops").append(item);
                    }
                });
            }
        },

        getElementDomByURL: function ($url) {
            switch ($url) {
                case '/wybierz-gladko':
                    return 'section#test';
                case '/zelazka':
                    return 'section#comparison';
                case '/kontakt':
                    return '#contact';
                case '/serwis':
                    return '#service';
                case '/satysfakcja-gwarantowana':
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

        validator: {
            isName: (value, name) => {
                if (value === "") {
                    return `Pole ${name} jest wymagane.`;
                } else if (value.length < 3 || value.length > 128) {
                    return `Pole ${name} musi mieć od 3 do 128 znaków.`;
                } else if (!/^[\p{L}\s-]+$/u.test(value)) {
                    return `Pole ${name} może zawierać tylko litery.`;
                } else {
                    return true;
                }
            },
            isEmail: (value, name) => {
                if (value === "") {
                    return `Pole ${name} jest wymagane.`;
                } else if (value.length > 255) {
                    return `Pole ${name} może mieć maksymalnie 255 znaków.`;
                } else if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(value)) {
                    return 'Wprowadź poprawny adres email.';
                } else {
                    return true;
                }
            },
            isPhone: (value, name) => {
                if (value === "") {
                    return `Pole ${name} jest wymagane.`;
                } else if (!/^\+48(\s)?([1-9]\d{8}|[1-9]\d{2}\s\d{3}\s\d{3}|[1-9]\d{1}\s\d{3}\s\d{2}\s\d{2}|[1-9]\d{1}\s\d{2}\s\d{3}\s\d{2}|[1-9]\d{1}\s\d{2}\s\d{2}\s\d{3}|[1-9]\d{1}\s\d{4}\s\d{2}|[1-9]\d{2}\s\d{2}\s\d{2}\s\d{2}|[1-9]\d{2}\s\d{3}\s\d{2}|[1-9]\d{2}\s\d{4})$/.test(value)) {
                    return 'Wprowadź poprawny numer telefonu.';
                } else {
                    return true;
                }
            },
            isAddress: (value, name) => {
                if (value === "") {
                    return `Pole ${name} jest wymagane.`;
                } else if (value.length > 255) {
                    return `Pole ${name} może mieć maksymalnie 255 znaków.`;
                } else {
                    return true;
                }
            },
            isAddressNb: (value, name) => {
                if (value === "") {
                    return `Pole ${name} jest wymagane.`;
                } else if (value.length > 16) {
                    return `Pole ${name} może mieć maksymalnie 16 znaków.`;
                } else {
                    return true;
                }
            },
            isCity: (value, name) => {
                if (value === "") {
                    return `Pole ${name} jest wymagane.`;
                } else if (value.length < 2 || value.length > 64) {
                    return `Pole ${name} musi mieć od 2 do 64 znaków.`;
                } else {
                    return true;
                }
            },
            isZip: (value, name) => {
                if (value === "") {
                    return `Pole ${name} jest wymagane.`;
                } else if (!/^[0-9]{2}-[0-9]{3}$/.test(value)) {
                    return 'Wprowadź poprawny kod pocztowy.';
                } else {
                    return true;
                }
            },
            isIban: (value, name) => {
                if (value === "") {
                    return `Pole ${name} jest wymagane.`;
                } else if (!/^\d{26}$/.test(value)) {
                    return 'Wprowadź poprawny numer rachunku.';
                } else {
                    return true;
                }
            },
            isLegal: (item) => {
                if (item.val() === "") {
                    return `Pole jest wymagane.`;
                } else if (!item.prop('checked')) {
                    return `Pole jest wymagane.`;
                } else {
                    return true;
                }
            },
            isMessage: (value, name) => {
                if (value === "") {
                    return `Pole ${name} jest wymagane.`;
                } else if (value.length < 3 || value.length > 4096) {
                    return `Pole ${name} musi mieć od 3 do 4096 znaków.`;
                } else {
                    return true;
                }
            },
            isFile: (file, name) => {
                const extension = file[0]?.files[0]?.name.split('.').pop().toLowerCase();
                if (file[0].files.length === 0) {
                    return `Pole ${name} jest wymagane.`;
                } else if (file[0].files[0].size > 4 * 1024 * 1024) {
                    return `Rozmiar pliku nie może przekraczać 4 MB`;
                } else if (['jpg', 'jpeg', 'png'].indexOf(extension) === -1) {
                    return `Można wybrać tylko pliki graficzne JPG, JPEG lub PNG`;
                } else {
                    return true;
                }
            },
        },
    },

    getFields: function ($form) {
        const inputs = $form.find('.input');
        const textareas = $form.find('.textarea');
        const checkboxes = $form.find('.checkbox');
        const files = $form.find('.file');
        const fields = {};

        $.each(inputs, function (index, item) {
            fields[$(item).attr('name')] = $(item).val();
        });

        $.each(textareas, function (index, item) {
            fields[$(item).attr('name')] = $(item).val();
        });

        $.each(checkboxes, function (index, item) {
            if ($(item).prop('checked')) {
                fields[$(item).attr('name')] = $(item).val();
            }
        });

        $.each(files, function (index, item) {
            if (item.files[0]) {
                fields[$(item).attr('name')] = item.files[0];
            }
        })

        fields['_token'] = $form.find('input[name=_token]').val();

        return fields;
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

        matchMaxHeight: function () {
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
