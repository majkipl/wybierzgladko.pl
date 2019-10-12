@extends('layouts.front')

@section('content')
    @include('home.section.baner', ['isHome' => false, 'showSlide' => "cx"])
    @include('home.section.banerRwd', ['isHome' => false, 'showSlide'=>"cx", 'includeClass' => "product-page"])

    <section class="product copper-express py--70" id="copperExpress">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-10 offset-lg-1 text-center wow fadeInUp" data-wow-duration="1s"
                     data-wow-delay="0.5s">
                    <h2 class="text-uppercase mb--50">ŻELAZKO COPPER EXPRESS</h2>

                    <p class="mb--40">Wyraź swój styl z żelazkiem Copper Express! Jego sprytny design i funkcje sprawią,
                        że prasowanie stanie się samą przyjemnością. Dzięki niemu w mgnieniu oka uporasz się z
                        uporczywymi zagnieceniami.</p>
                </div>
            </div>

            <div class="row row-eq-height pb--30">
                <div
                    class="col-12 col-sm-6 col-lg-5 offset-lg-2 d-flex flex-column align-items-left justify-content-center order-1 order-sm-0 mt--30 mt-sm--0 text-center text-sm-left wow fadeInUp"
                    data-wow-duration="1s" data-wow-delay="0.5s">
                    <h3 class="text-uppercase mb--0">ULTRASZYBKIE NAGRZEWANIE</h3>

                    <div class="shape my--20 mx--auto mx-sm--0"></div>

                    <p>Nie ma nic gorszego niż czekanie na nagrzanie się żelazka, gdy już dawno jest się spóźnionym do
                        wyjścia z domu, prawda? Nasze żelazko Copper Express zostało wyposażone w ultraszybko
                        nagrzewającą się ceramiczną stopę, dzięki której w mig uporasz się z wyprasowaniem swojej
                        wyjściowej sukienki. I zachwycisz wszystkich!</p>
                </div>
                <div
                    class="col-12 col-sm-6 col-lg-4 d-flex flex-column align-items-center justify-content-center order-0 order-sm-1 wow fadeInUp"
                    data-wow-duration="1s" data-wow-delay="0.75s">
                    <img src="{{ asset('images/products/cx/1.jpg') }}" alt="ULTRASZYBKIE NAGRZEWANIE"
                         class="d-block product-circle"/>
                </div>
            </div>

            <div class="row row-eq-height pb--30">
                <div
                    class="col-12 col-sm-6 col-lg-4 offset-lg-1 d-flex flex-column align-items-center justify-content-center wow fadeInUp"
                    data-wow-duration="1s" data-wow-delay="0.75s">
                    <img src="{{ asset('images/products/cx/2.jpg') }}" alt="EKSKLUZYWNY WYGLĄD"
                         class="d-block product-circle"/>
                </div>
                <div
                    class="col-12 col-sm-6 col-lg-6 offset-lg-1 d-flex flex-column align-items-left justify-content-center mt--30 mt-sm--0 text-center text-sm-left wow fadeInUp"
                    data-wow-duration="1s" data-wow-delay="0.5s">
                    <h3 class="text-uppercase mb--0">EKSKLUZYWNY WYGLĄD</h3>

                    <div class="shape my--20 mx--auto mx-sm--0"></div>

                    <p>Daj się uwieść najbardziej stylowemu żelazku w naszej ofercie! Miedziane akcenty i piękne
                        metaliczne czarne wykończenia sprawiają, że prasowanie staje się prawdziwie estetycznym
                        doznaniem.</p>
                </div>
            </div>

            <div class="row row-eq-height pb--30">
                <div
                    class="col-12 col-sm-6 col-lg-5 offset-lg-2 d-flex flex-column align-items-left justify-content-center order-1 order-sm-0 mt--30 mt-sm--0 text-center text-sm-left wow fadeInUp"
                    data-wow-duration="1s" data-wow-delay="0.5s">
                    <h3 class="text-uppercase mb--0">POMOC PRZY TRUDNIEJSZYCH MATERIAŁACH</h3>

                    <div class="shape my--20 mx--auto mx-sm--0"></div>

                    <p>Zmagasz się z uporczywymi zagnieceniami na ukochanej koszuli? Nie ma problemu! Użyj przycisku
                        Steam Shot, a dzięki parze wodnej w potężnej dawce 150g skutecznie zmiękczysz tkaninę i z
                        łatwością ją wygładzisz.</p>
                </div>
                <div
                    class="col-12 col-sm-6 col-lg-4 d-flex flex-column align-items-center justify-content-center order-0 order-sm-1 wow fadeInUp"
                    data-wow-duration="1s" data-wow-delay="0.75s">
                    <img src="{{ asset('images/products/cx/3.jpg') }}" alt="POMOC PRZY TRUDNIEJSZYCH MATERIAŁACH"
                         class="d-block product-circle"/>
                </div>
            </div>

            <div class="row row-eq-height pb--30">
                <div
                    class="col-12 col-sm-6 col-lg-4 offset-lg-1 d-flex flex-column align-items-center justify-content-center wow fadeInUp"
                    data-wow-duration="1s" data-wow-delay="0.75s">
                    <img src="{{ asset('images/products/cx/4.jpg') }}" alt="PIONOWY I POZIOMY WYRZUT PARY"
                         class="d-block product-circle"/>
                </div>
                <div
                    class="col-12 col-sm-6 col-lg-6 offset-lg-1 d-flex flex-column align-items-left justify-content-center mt--30 mt-sm--0 text-center text-sm-left wow fadeInUp"
                    data-wow-duration="1s" data-wow-delay="0.5s">
                    <h3 class="text-uppercase mb--0">PIONOWY I POZIOMY WYRZUT PARY</h3>

                    <div class="shape my--20 mx--auto mx-sm--0"></div>

                    <p>Doskonale wiemy, że niektóre tkaniny prasuje się zdecydowanie ciężej niż inne. Dlatego Żelazko
                        Copper Express posiada zmienną kontrolę pary wodnej. Dzięki niej możesz regulować jej wydajność,
                        przez co z łatwością poradzisz sobie nawet z najtrudniejszymi zagnieceniami. Z kolei z opcją
                        pionowego wyrzutu pary bez problemu usuniesz zagniecenia na wiszących ubraniach.</p>
                </div>
            </div>

            <div class="row row-eq-height pb--30">
                <div
                    class="col-12 col-sm-6 col-lg-5 offset-lg-2 d-flex flex-column align-items-left justify-content-center order-1 order-sm-0 mt--30 mt-sm--0 text-center text-sm-left wow fadeInUp"
                    data-wow-duration="1s" data-wow-delay="0.5s">
                    <h3 class="text-uppercase mb--0">DUŻA MOC</h3>

                    <div class="shape my--20 mx--auto mx-sm--0"></div>

                    <p>Stylowy wygląd to nie wszystko! Żelazko Copper Express może pochwalić się imponującą mocą 2600W.
                        Dzięki takiej wydajności będziesz w stanie wyprasować każde zagniecenie bez wysiłku.</p>
                </div>
                <div
                    class="col-12 col-sm-6 col-lg-4 d-flex flex-column align-items-center justify-content-center order-0 order-sm-1 wow fadeInUp"
                    data-wow-duration="1s" data-wow-delay="0.75s">
                    <img src="{{ asset('images/products/cx/5.jpg') }}" alt="DUŻA MOC" class="d-block product-circle"/>
                </div>
            </div>

        </div>
    </section>

    @include('product.section.whereBuy', ['productSlug' => "cx"])
    @include('product.section.exploreOtherProduct', ['current' => 'cx'])
    @include('product.section.reviews')

    @include('home.section.hesitate')

@endsection
