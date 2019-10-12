@extends('layouts.front')

@section('content')
    @include('home.section.baner', ['isHome' => false, 'showSlide' => "cot"])
    @include('home.section.banerRwd', ['isHome' => false, 'showSlide'=>"cot", 'includeClass' => "product-page"])

    <section class="product cordless-one-temperature py--70" id="cordlessOneTemperature">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-10 offset-lg-1 text-center wow fadeInUp" data-wow-duration="1s"
                     data-wow-delay="0.5s">
                    <h2 class="text-uppercase mb--50">ŻELAZKO BEZPRZEWODOWE ONE TEMPERATURE</h2>

                    <p class="mb--40">Prasowanie bez plączącego się kabla i bez potrzeby regulowania temperatury? Tak,
                        to możliwe! Poznaj nasze najnowsze żelazko One Temperature i przekonaj się, że dbanie o gładkość
                        ulubionych ubrań jeszcze nigdy nie było tak wygodne.</p>
                </div>
            </div>

            <div class="row row-eq-height pb--30">
                <div
                    class="col-12 col-sm-6 col-lg-5 offset-lg-2 d-flex flex-column align-items-left justify-content-center order-1 order-sm-0 mt--30 mt-sm--0 text-center text-sm-left wow fadeInUp"
                    data-wow-duration="1s" data-wow-delay="0.5s">
                    <h3 class="text-uppercase mb--0">SZYBKIE PRASOWANIE BEZ PRZEWODÓW</h3>

                    <div class="shape my--20 mx--auto mx-sm--0"></div>

                    <p>Dobrze wiemy, że każdy poranek to walka z czasem. Z pewnością ucieszy Cię fakt, że dzięki funkcji
                        szybkiego ładowania, nasze żelazko jest gotowe do pracy w niespełna 6 sekund*. A Ty możesz się
                        cieszyć swobodą prasowania bez plączących się dookoła przewodów. I zawsze zdążysz na czas!</p>
                </div>
                <div
                    class="col-12 col-sm-6 col-lg-4 d-flex flex-column align-items-center justify-content-center order-0 order-sm-1 wow fadeInUp"
                    data-wow-duration="1s" data-wow-delay="0.75s">
                    <img src="{{ asset('images/products/cot/1.jpg') }}" alt="SZYBKIE PRASOWANIE BEZ PRZEWODÓW"
                         class="d-block product-circle"/>
                </div>
            </div>

            <div class="row row-eq-height pb--30">
                <div
                    class="col-12 col-sm-6 col-lg-4 offset-lg-1 d-flex flex-column align-items-center justify-content-center wow fadeInUp"
                    data-wow-duration="1s" data-wow-delay="0.75s">
                    <img src="{{ asset('images/products/cot/2.jpg') }}" alt="JEDNA TEMPERATURA DO WSZYSTKICH TKANIN "
                         class="d-block product-circle"/>
                </div>
                <div
                    class="col-12 col-sm-6 col-lg-6 offset-lg-1 d-flex flex-column align-items-left justify-content-center mt--30 mt-sm--0 text-center text-sm-left wow fadeInUp"
                    data-wow-duration="1s" data-wow-delay="0.5s">
                    <h3 class="text-uppercase mb--0">JEDNA TEMPERATURA DO WSZYSTKICH TKANIN </h3>

                    <div class="shape my--20 mx--auto mx-sm--0"></div>

                    <p>Jeszcze jedna znakomita wiadomość! Już nigdy więcej nie musisz się zastanawiać, jaką temperaturą
                        prasować swoje ubrania. Od teraz wszystkie tkaniny – od jeansu po jedwab – są znakomicie
                        wygładzone jedną, bezpieczną temperaturą. Bez stresu!</p>
                </div>
            </div>

            <div class="row row-eq-height pb--30">
                <div
                    class="col-12 col-sm-6 col-lg-5 offset-lg-2 d-flex flex-column align-items-left justify-content-center order-1 order-sm-0 mt--30 mt-sm--0 text-center text-sm-left wow fadeInUp"
                    data-wow-duration="1s" data-wow-delay="0.5s">
                    <h3 class="text-uppercase mb--0">IMPONUJĄCA MOC</h3>

                    <div class="shape my--20 mx--auto mx-sm--0"></div>

                    <p>Dzięki dużej mocy 2600W zapewnia wysoką wydajność, która jest w stanie poradzić sobie nawet z
                        najtrudniejszymi zagnieceniami.</p>
                </div>
                <div
                    class="col-12 col-sm-6 col-lg-4 d-flex flex-column align-items-center justify-content-center order-0 order-sm-1 wow fadeInUp"
                    data-wow-duration="1s" data-wow-delay="0.75s">
                    <img src="{{ asset('images/products/cot/3.jpg') }}" alt="IMPONUJĄCA MOC"
                         class="d-block product-circle"/>
                </div>
            </div>

            <div class="row row-eq-height pb--30">
                <div
                    class="col-12 col-sm-6 col-lg-4 offset-lg-1 d-flex flex-column align-items-center justify-content-center wow fadeInUp"
                    data-wow-duration="1s" data-wow-delay="0.75s">
                    <img src="{{ asset('images/products/cot/4.jpg') }}" alt="POMOC Z TRUDNYMI MATERIAŁAMI"
                         class="d-block product-circle"/>
                </div>
                <div
                    class="col-12 col-sm-6 col-lg-6 offset-lg-1 d-flex flex-column align-items-left justify-content-center mt--30 mt-sm--0 text-center text-sm-left wow fadeInUp"
                    data-wow-duration="1s" data-wow-delay="0.5s">
                    <h3 class="text-uppercase mb--0">POMOC Z TRUDNYMI MATERIAŁAMI</h3>

                    <div class="shape my--20 mx--auto mx-sm--0"></div>

                    <p>Funkcja pionowego strumienia pary sprawdza się znakomicie przy wyrównywaniu fałd na firankach czy
                        poduszkach.</p>
                </div>
            </div>

            <div class="row row-eq-height pb--30">
                <div
                    class="col-12 col-sm-6 col-lg-5 offset-lg-2 d-flex flex-column align-items-left justify-content-center order-1 order-sm-0 mt--30 mt-sm--0 text-center text-sm-left wow fadeInUp"
                    data-wow-duration="1s" data-wow-delay="0.5s">
                    <h3 class="text-uppercase mb--0">OSZCZĘDNOŚĆ CZASU</h3>

                    <div class="shape my--20 mx--auto mx-sm--0"></div>

                    <p>Dzięki ceramicznej stopie prasowanie zajmuje znacznie mniej czasu. Wszystko dzięki konstrukcji
                        umożliwiającej równomierne rozprowadzanie ciepła i gładki poślizg po każdym rodzaju tkaniny.</p>
                </div>
                <div
                    class="col-12 col-sm-6 col-lg-4 d-flex flex-column align-items-center justify-content-center order-0 order-sm-1 wow fadeInUp"
                    data-wow-duration="1s" data-wow-delay="0.75s">
                    <img src="{{ asset('images/products/cot/5.jpg') }}" alt="OSZCZĘDNOŚĆ CZASU"
                         class="d-block product-circle"/>
                </div>
            </div>

        </div>
    </section>

    @include('product.section.whereBuy', ['productSlug' => "cot"])
    @include('product.section.exploreOtherProduct', ['current' => 'cot'])
    @include('product.section.reviews')

    @include('home.section.hesitate')

@endsection
