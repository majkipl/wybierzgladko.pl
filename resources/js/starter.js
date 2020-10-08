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
            starter.main.whereBuy();

            starter.dlmenu.init();
            starter.lightslider.init();
            starter.tooltip.init();
            starter.isotope.init();
            starter.selectbox.init();
            starter.scroll.auto();
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

            $(document).on('click', '#form .submit', function () {
                $('#form form#save').submit();
                return false;
            });

            $(document).on('click', '#contact a.send', function () {
                $(this).closest('form').submit();
                return false;
            });

            $(document).on("click", "section#explore .lSNav a", function () {
                if ($(this).hasClass("lSPrev")) {
                    starter.lightslider._var.products.goToPrevSlide();
                } else if ($(this).hasClass("lSNext")) {
                    starter.lightslider._var.products.goToNextSlide();
                }

                return false;
            });

            $(document).on("click", "section#reviews .lSNav a", function () {
                if ($(this).hasClass("lSPrev")) {
                    starter.lightslider._var.reviews.goToPrevSlide();
                } else if ($(this).hasClass("lSNext")) {
                    starter.lightslider._var.reviews.goToNextSlide();
                }

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
                            return starter.form.validator.isName(value, 'Imię i nazwisko');
                        // case 'firstname':
                        //     return starter.form.validator.isName(value, 'Imię');
                        // case 'lastname':
                        //     return starter.form.validator.isName(value, 'Nazwisko');
                        case 'email':
                            return starter.form.validator.isEmail(value, 'Adres e-mail');
                        // case 'phone':
                        //     return starter.form.validator.isPhone(value, 'Telefon');
                        // case 'address':
                        //     return starter.form.validator.isAddress(value, 'Ulica');
                        // case 'address_nb':
                        //     return starter.form.validator.isAddressNb(value, 'Numer mieszkania');
                        // case 'city':
                        //     return starter.form.validator.isCity(value, 'Miasto');
                        // case 'zip':
                        //     return starter.form.validator.isZip(value, 'Kod pocztowy');
                        // case 'iban':
                        //     return starter.form.validator.isIban(value, 'Numer rachunku bankowego');
                        // case 'reason':
                        //     return starter.form.validator.isMessage(value, 'Powód');
                        // case 'legal_1':
                        //     return starter.form.validator.isLegal(item);
                        // case 'legal_2':
                        //     return starter.form.validator.isLegal(item);
                        // case 'legal_3':
                        //     return starter.form.validator.isLegal(item);
                        // case 'legal_4':
                        //     return starter.form.validator.isLegal(item);
                        case 'legal_5':
                            return starter.form.validator.isLegal(item);
                        case 'message':
                            return starter.form.validator.isMessage(value, 'Wiadomość');
                        // case 'img_receipt':
                        //     return starter.form.validator.isFile(item, 'Zdjęcie paragonu');
                        default:
                            return true;
                    }
                }

                if (valid() !== true) {
                    $(`.error-${name}`).text(valid()).closest('.field').addClass('has-error');
                    starter._var.error[name] = valid();
                } else {
                    $(`.error-${name}`).text('').closest('.field').removeClass('has-error');
                    delete starter._var.error[name];
                }
            });
        },

        onSubmit: function () {
            $(document).on('submit', '#formContact form', function () {

                $('.input, .textarea, .checkbox, .file').trigger('change');

                console.log(starter._var.error);

                if (Object.keys(starter._var.error).length === 0) {

                    const fields = starter.form.getFields($(this).closest('form'));
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

                } else {
                    $('.error-post').text('');
                    for (let key in starter._var.error) {
                        if (starter._var.error.hasOwnProperty(key)) {
                            let value = starter._var.error[key];
                            $('.error-' + key).text(value).closest('.field').addClass('has-error');
                        }
                    }
                }

                return false;
            });
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

        auto: function () {
            var attri = starter.main.getElementDomByURL(window.location.pathname);

            if (attri !== undefined && $(attri).length > 0) {
                var offset = Math.abs($(attri).position().top);

                $("html, body").animate({scrollTop: offset}, 1000);
            }

            starter._var.window_is_load = true;
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

    form: {
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
