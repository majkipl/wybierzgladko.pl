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
    @include('product.section.reviews')

    @include('home.section.hesitate')

@endsection
