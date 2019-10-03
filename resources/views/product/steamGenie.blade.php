@extends('layouts.front')

@section('content')
    @include('home.section.baner', ['isHome' => false, 'showSlide' => "sg"])
    @include('home.section.banerRwd', ['isHome' => false, 'showSlide'=>"sg", 'includeClass' => "product-page"])

    <section class="product steam-genie py--70" id="steamGenie">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-10 offset-lg-1 text-center wow fadeInUp" data-wow-duration="1s"
                     data-wow-delay="0.5s">
                    <h2 class="text-uppercase mb--50">Ręczny Generator Pary Steam Genie</h2>

                    <p class="mb--40">Prasowanie może być przyjemne! Zwłaszcza, kiedy nie musisz rozkładać ciężkiej
                        deski. Ręczny generator pary to oszczędność miejsca i czasu. Odśwież nim ozdobne podsuszki na
                        kanapie, wygładź wiszące zasłony, przeprasuj sukienkę na chwilę przed przybyciem gości, a nawet
                        zabierz w podróż. Bądź w pełnej gotowości zawsze i wszędzie.</p>
                </div>
            </div>

            <div class="row row-eq-height pb--30">
                <div
                    class="col-12 col-sm-6 col-lg-5 offset-lg-2 d-flex flex-column align-items-left justify-content-center order-1 order-sm-0 mt--30 mt-sm--0 text-center text-sm-left wow fadeInUp"
                    data-wow-duration="1s" data-wow-delay="0.5s">
                    <h3 class="text-uppercase mb--0">WSZECHSTRONNOŚĆ</h3>

                    <div class="shape my--20 mx--auto mx-sm--0"></div>

                    <p>Dzięki trzem nakładkom parownica ręczna jest wszechstronna i możesz ją używać do wielu różnych
                        materiałów i przedmiotów. Nakładka do delikatnych tkanin ułatwi prasowanie jedwabiu i lekkich
                        firanek. Specjalna nakładka do tapicerki czyści i odświeża sofy, materace czy pościel. A frędzle
                        pomogą właścicielom zwierząt domowych w skutecznym usuwaniu sierści z tapicerki i dywanów.</p>
                </div>
                <div
                    class="col-12 col-sm-6 col-lg-4 d-flex flex-column align-items-center justify-content-center order-0 order-sm-1 wow fadeInUp"
                    data-wow-duration="1s" data-wow-delay="0.75s">
                    <img src="{{ asset('images/products/sg/1.jpg') }}" alt="WSZECHSTRONNOŚĆ"
                         class="d-block product-circle"/>
                </div>
            </div>

            <div class="row row-eq-height pb--30">
                <div
                    class="col-12 col-sm-6 col-lg-4 offset-lg-1 d-flex flex-column align-items-center justify-content-center wow fadeInUp"
                    data-wow-duration="1s" data-wow-delay="0.75s">
                    <img src="{{ asset('images/products/sg/2.jpg') }}" alt="GOTOWY DO PRACY W CHWILĘ"
                         class="d-block product-circle"/>
                </div>
                <div
                    class="col-12 col-sm-6 col-lg-6 offset-lg-1 d-flex flex-column align-items-left justify-content-center mt--30 mt-sm--0 text-center text-sm-left wow fadeInUp"
                    data-wow-duration="1s" data-wow-delay="0.5s">
                    <h3 class="text-uppercase mb--0">GOTOWY DO PRACY W CHWILĘ</h3>

                    <div class="shape my--20 mx--auto mx-sm--0"></div>

                    <p>Prasowanie możesz zacząć już w niespełna 45 sekund od włączenia. Spokojnie zdążysz przygotować
                        swoje ubranie do pracy. Nawet jeśli zaśpisz.</p>
                </div>
            </div>

            <div class="row row-eq-height pb--30">
                <div
                    class="col-12 col-sm-6 col-lg-5 offset-lg-2 d-flex flex-column align-items-left justify-content-center order-1 order-sm-0 mt--30 mt-sm--0 text-center text-sm-left wow fadeInUp"
                    data-wow-duration="1s" data-wow-delay="0.5s">
                    <h3 class="text-uppercase mb--0">NIE TRAĆ CZASU</h3>

                    <div class="shape my--20 mx--auto mx-sm--0"></div>

                    <p>Duży zbiornik na wodę o pojemności aż 220 ml pozwoli Ci na 11 minut stałego generowania pary.
                        Zdziwisz się, jak dużo ubrań wyprasujesz w tym czasie!</p>
                </div>
                <div
                    class="col-12 col-sm-6 col-lg-4 d-flex flex-column align-items-center justify-content-center order-0 order-sm-1 wow fadeInUp"
                    data-wow-duration="1s" data-wow-delay="0.75s">
                    <img src="{{ asset('images/products/sg/3.jpg') }}" alt="NIE TRAĆ CZASU"
                         class="d-block product-circle"/>
                </div>
            </div>

            <div class="row row-eq-height pb--30">
                <div
                    class="col-12 col-sm-6 col-lg-4 offset-lg-1 d-flex flex-column align-items-center justify-content-center wow fadeInUp"
                    data-wow-duration="1s" data-wow-delay="0.75s">
                    <img src="{{ asset('images/products/sg/4.jpg') }}" alt="BEZPIECZEŃSTWO"
                         class="d-block product-circle"/>
                </div>
                <div
                    class="col-12 col-sm-6 col-lg-6 offset-lg-1 d-flex flex-column align-items-left justify-content-center mt--30 mt-sm--0 text-center text-sm-left wow fadeInUp"
                    data-wow-duration="1s" data-wow-delay="0.5s">
                    <h3 class="text-uppercase mb--0">BEZPIECZEŃSTWO</h3>

                    <div class="shape my--20 mx--auto mx-sm--0"></div>

                    <p>Funkcja automatycznego wyłączania, gdy urządzenie nie jest używane, gwarantuje bezpieczeństwo
                        Tobie i Twojemu domowi.</p>
                </div>
            </div>

        </div>
    </section>

    @include('product.section.whereBuy', ['productSlug' => "sg"])
    @include('product.section.exploreOtherProduct', ['current' => 'sg'])

    <section class="reviews my--70 bg-white wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s" id="reviews">
        <div class="container">
            <div class="row text-center">
                <div class="col-12 mb--30">
                    <h2 class="text-uppercase mt--50 py--60">opinie klientów</h2>
                </div>
            </div>
            <div class="row row-eq-height text-center mb--70">
                <div class="col-1 col-sm-1 col-lg-2 reviews-slider-prev text-right px-0 px-md--15">
                    <img
                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIAAAACACAMAAAD04JH5AAAAhFBMVEUAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAD8qm6wAAAAK3RSTlMAAQIECAoLDQ4PEBMUFxkaGxweJicpKzx7i5qbnaatr7DFztna3ubt9ff9UbhyhgAAAPZJREFUeNrtzslOAgEYBOEeVFxQQcV9BTfG//3fTy6GwXjQg1PGVJ87qS/5rW0MQu5wVnU75Ppnb7Xc64jtc4KPPiVY9RlBt08I1vv9Cz73l4Jdtl81h/tVB3C/pnC/tuH+Jdy/a+D+wL59+/btE/17+/bt27dvH+g/2Ldv3759+/bt27f/D/vHcD9PcH8H7mfva8BV0xcgL7TgtGjBuQIFChQoUKBAgQIFCn4kuFagQIECBQr+lOBGgQIFChQo6OwitGCLFpwEFozDCh6boILFfkIKFuOEFPTfXxe0QL8rYPorQTtJSEF7FGzT56rZKOSGm9+6vQOB+9uGFj/W7gAAAABJRU5ErkJggg=="
                        alt="prev" class="prev"/>
                </div>
                <div class="col-10 col-sm-10 col-lg-8">
                    <ul id="reviewsSlider" class="text-left">
                        <li>
                            <p class="pb--20 px-sm--30">Parownica świetnie sprawdza się w podróży. Prasowanie bez
                                wyciągania deski do prasowania jest również ogromnym plusem na co dzień. Jeśli nie ma
                                miejsca do powieszenia ubrania i prasowania w pionie, polecam położyć je na łóżku czy
                                fotelu. Fajny produkt, jestem zadowolona z efektów prasowania i odświeżania ubrań.</p>
                        </li>
                        <li>
                            <p class="pb--20 px-sm--30">Od kilku tygodni korzystam z tego urządzenia i jestem z niego
                                bardzo zadowolona. Świetnie sprawdza się do odświeżenia ubrań w podróży, ale korzystam z
                                niego również w domu. Jest małe i poręczne, dzięki temu można szybko z niego skorzystać.
                                Dzięki dużej mocy dobrze radzi sobie z plisami, fałdkami i tzw. trudnymi powierzchniami
                                - tam gdzie słabo radzi sobie tradycyjne żelazko. Polecam!</p>
                        </li>
                    </ul>
                </div>
                <div class="col-1 col-sm-1 col-lg-2 reviews-slider-next text-left px-0 px-md--15">
                    <img
                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIAAAACACAMAAAD04JH5AAAAilBMVEUAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAATAggvAAAALXRSTlMAAQIFBwgKCwwNDxARExgbHCIsMzo7PFBndYWGiImLjJidubzIz+Lk5ujr7fMBvYaJAAAA+UlEQVR42u3bV27CYBBF4TGmOaGXECAJvTP73x5CSMgYkHiJr8R/7gLmOxsYsxdWiE254tR91db51bWf15f5G7/sS+yLClK+pCBJ+4KCZOuuLChn/bwLFu7Sgk93bUHLxQVFVxcM1QXRjAIKKKCAAgoooIACCiiggAIKKKCAAgoooIACCih4k4KOumAfqQsaeQXY6HFAU+wfC1rfe2J/gB+EP8bHD9j/wcfHx8cP0v/Fx8eX+X/4+AH7E3x8fHz8IP1vsR+L/WePTrn5VhP7Zkuxbx8HrW9WP2j9u4Lc/UyBwL8pkPipApF/LZD5Zsncfdc15UqV/7t9AlBN8PZhAttoAAAAAElFTkSuQmCC"
                        alt="next" class="next"/>
                </div>
            </div>
        </div>
    </section>

    @include('home.section.hesitate')

@endsection
