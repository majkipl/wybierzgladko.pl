@extends('layouts.front', ['metaTitle' => "Żelazko Power Steam Ultra", 'metaDescription' => "Duża moc w dobrej cenie"])

@section('content')
    @include('home.section.baner', ['isHome' => false, 'showSlide' => "psu"])
    @include('home.section.banerRwd', ['isHome' => false, 'showSlide'=>"psu", 'includeClass' => "product-page"])

    <section class="product power-steam-ultra py--70" id="powerSteamUltra">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-10 offset-lg-1 text-center wow fadeInUp" data-wow-duration="1s"
                     data-wow-delay="0.5s">
                    <h2 class="text-uppercase mb--50">Żelazko Power Steam Ultra</h2>

                    <p class="mb--40">Wiemy, że nie masz czasu na prasowanie. Może nawet go nie lubisz. Dlatego
                        stworzyliśmy żelazko o dużej mocy, które pozwoli Ci szybko i sprawnie rozprawić się z górą
                        prania. I to w bardzo dobrej cenie. Dzięki niemu wszystko staje się prostsze.</p>
                </div>
            </div>

            <div class="row row-eq-height pb--30">
                <div
                        class="col-12 col-sm-6 col-lg-5 offset-lg-2 d-flex flex-column align-items-left justify-content-center order-1 order-sm-0 mt--30 mt-sm--0 text-center text-sm-left wow fadeInUp"
                        data-wow-duration="1s" data-wow-delay="0.5s">
                    <h3 class="text-uppercase mb--0">SZYBKIE PRASOWANIE</h3>

                    <div class="shape my--20 mx--auto mx-sm--0"></div>

                    <p>3100 W mocy to gwarancja szybkiego prasowania i błyskawiczna gotowość do użycia. Dzięki temu masz
                        więcej czasu dla siebie.</p>
                </div>
                <div
                        class="col-12 col-sm-6 col-lg-4 d-flex flex-column align-items-center justify-content-center order-0 order-sm-1 wow fadeInUp"
                        data-wow-duration="1s" data-wow-delay="0.75s">
                    <img src="{{ asset('images/products/psu/1.jpg') }}" alt="SZYBKIE PRASOWANIE"
                         class="d-block product-circle"/>
                </div>
            </div>

            <div class="row row-eq-height pb--30">
                <div
                        class="col-12 col-sm-6 col-lg-4 offset-lg-1 d-flex flex-column align-items-center justify-content-center wow fadeInUp"
                        data-wow-duration="1s" data-wow-delay="0.75s">
                    <img src="{{ asset('images/products/psu/2.jpg') }}" alt="CERAMICZNA STOPA"
                         class="d-block product-circle"/>
                </div>
                <div
                        class="col-12 col-sm-6 col-lg-6 offset-lg-1 d-flex flex-column align-items-left justify-content-center mt--30 mt-sm--0 text-center text-sm-left wow fadeInUp"
                        data-wow-duration="1s" data-wow-delay="0.5s">
                    <h3 class="text-uppercase mb--0">CERAMICZNA STOPA</h3>

                    <div class="shape my--20 mx--auto mx-sm--0"></div>

                    <p>Dzięki idealnie gładkiej, ceramicznej stopie żelazko gładko sunie przez największe zagięcia.
                        Prasowanie nigdy nie było przyjemniejsze.</p>
                </div>
            </div>

            <div class="row row-eq-height pb--30">
                <div
                        class="col-12 col-sm-6 col-lg-5 offset-lg-2 d-flex flex-column align-items-left justify-content-center order-1 order-sm-0 mt--30 mt-sm--0 text-center text-sm-left wow fadeInUp"
                        data-wow-duration="1s" data-wow-delay="0.5s">
                    <h3 class="text-uppercase mb--0">ŁATWE PRASOWANIE TRUDNO DOSTĘPNYCH MIEJSC</h3>

                    <div class="shape my--20 mx--auto mx-sm--0"></div>

                    <p>Specjalnie zaprojektowana końcówka umożliwia bezproblemowe prasowanie przestrzeni pomiędzy
                        guzikami i zapięciami. Nawet męska koszula nie będzie wyzwaniem.</p>
                </div>
                <div
                        class="col-12 col-sm-6 col-lg-4 d-flex flex-column align-items-center justify-content-center order-0 order-sm-1 wow fadeInUp"
                        data-wow-duration="1s" data-wow-delay="0.75s">
                    <img src="{{ asset('images/products/psu/3.jpg') }}"
                         alt="ŁATWE PRASOWANIE TRUDNO DOSTĘPNYCH MIEJSC" class="d-block product-circle"/>
                </div>
            </div>

            <div class="row row-eq-height pb--30">
                <div
                        class="col-12 col-sm-6 col-lg-4 offset-lg-1 d-flex flex-column align-items-center justify-content-center wow fadeInUp"
                        data-wow-duration="1s" data-wow-delay="0.75s">
                    <img src="{{ asset('images/products/psu/4.jpg') }}" alt="IDEALNE DO TRUDNYCH MATERIAŁÓW"
                         class="d-block product-circle"/>
                </div>
                <div
                        class="col-12 col-sm-6 col-lg-6 offset-lg-1 d-flex flex-column align-items-left justify-content-center mt--30 mt-sm--0 text-center text-sm-left wow fadeInUp"
                        data-wow-duration="1s" data-wow-delay="0.5s">
                    <h3 class="text-uppercase mb--0">IDEALNE DO TRUDNYCH MATERIAŁÓW</h3>

                    <div class="shape my--20 mx--auto mx-sm--0"></div>

                    <p>Duże uderzenie pary, aż 210 g na minutę, oraz stała dystrybucja pary o wartości 45 g na minutę,
                        znacznie ułatwi Ci prasowanie grubych materiałów, jak len czy dżins.</p>
                </div>
            </div>

            <div class="row row-eq-height pb--30">
                <div
                        class="col-12 col-sm-6 col-lg-5 offset-lg-2 d-flex flex-column align-items-left justify-content-center order-1 order-sm-0 mt--30 mt-sm--0 text-center text-sm-left wow fadeInUp"
                        data-wow-duration="1s" data-wow-delay="0.5s">
                    <h3 class="text-uppercase mb--0">PIONOWY STRUMIEŃ PARY</h3>

                    <div class="shape my--20 mx--auto mx-sm--0"></div>

                    <p>Funkcja pionowego strumienia pary sprawdza się znakomicie przy wyrównywaniu fałd na wiszących
                        ubraniach, firankach czy tapicerce.</p>
                </div>
                <div
                        class="col-12 col-sm-6 col-lg-4 d-flex flex-column align-items-center justify-content-center order-0 order-sm-1 wow fadeInUp"
                        data-wow-duration="1s" data-wow-delay="0.75s">
                    <img src="{{ asset('images/products/psu/5.jpg') }}" alt="PIONOWY STRUMIEŃ PARY"
                         class="d-block product-circle"/>
                </div>
            </div>

            <div class="row row-eq-height pb--30">
                <div
                        class="col-12 col-sm-6 col-lg-4 offset-lg-1 d-flex flex-column align-items-center justify-content-center wow fadeInUp"
                        data-wow-duration="1s" data-wow-delay="0.75s">
                    <img src="{{ asset('images/products/psu/6.jpg') }}" alt="DUŻA POJEMNOŚĆ"
                         class="d-block product-circle"/>
                </div>
                <div
                        class="col-12 col-sm-6 col-lg-6 offset-lg-1 d-flex flex-column align-items-left justify-content-center mt--30 mt-sm--0 text-center text-sm-left wow fadeInUp"
                        data-wow-duration="1s" data-wow-delay="0.5s">
                    <h3 class="text-uppercase mb--0">DUŻA POJEMNOŚĆ</h3>

                    <div class="shape my--20 mx--auto mx-sm--0"></div>

                    <p>Zbiornik, który mieści 350ml wody, zapewnia dłuższe korzystanie bez potrzeby częstego
                        napełniania.</p>
                </div>
            </div>

            <div class="row row-eq-height pb--30">
                <div
                        class="col-12 col-sm-6 col-lg-5 offset-lg-2 d-flex flex-column align-items-left justify-content-center order-1 order-sm-0 mt--30 mt-sm--0 text-center text-sm-left wow fadeInUp"
                        data-wow-duration="1s" data-wow-delay="0.5s">
                    <h3 class="text-uppercase mb--0">POTRÓJNA SIŁA CZYSZCZĄCA</h3>

                    <div class="shape my--20 mx--auto mx-sm--0"></div>

                    <p>Dzięki funkcji samooczyszczenia i systemowi zapobiegającemu tworzeniu się osadu żelazko będzie
                        służyło Ci sprawnie przed długi czas.</p>
                </div>
                <div
                        class="col-12 col-sm-6 col-lg-4 d-flex flex-column align-items-center justify-content-center order-0 order-sm-1 wow fadeInUp"
                        data-wow-duration="1s" data-wow-delay="0.75s">
                    <img src="{{ asset('images/products/psu/7.jpg') }}" alt="POTRÓJNA SIŁA CZYSZCZĄCA"
                         class="d-block product-circle"/>
                </div>
            </div>

        </div>
    </section>

    @include('product.section.whereBuy', ['productSlug' => "psu"])
    @include('product.section.exploreOtherProduct', ['current' => 'psu'])
    @include('product.section.reviews')

    @include('home.section.hesitate')

@endsection
