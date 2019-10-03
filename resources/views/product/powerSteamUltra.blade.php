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
                            <p class="pb--20 px-sm--30">Choć lekkie prasuje dobrze, super długi kabel (w końcu mogę
                                prasować bez przedłużacza), nie kapie, wyrzut pary ok - jak dla mnie super.</p>
                        </li>
                        <li>
                            <p class="pb--20 px-sm--30">Żelazko użytkujemy od prawie 2 miesięcy - spisuje się świetnie -
                                rozprasowuje każde zagniecenie bez większego wysiłku, bardzo szybko się nagrzewa, mocny
                                wyrzut pary znacznie przyspiesza prasowanie. Zelazko ma spory pojemnik na wodę, wygodnie
                                się ją nalewa. Dlugi przewód, odpowiednia waga żelazka, ręcę się nie męczą nawet podczas
                                prasowania sterty ubrań, , dobrze radzi sobie ze prasowaniem wokół guzików, dzięki
                                specjalnym wycięciom. Jestem pozytywnie zaskoczona produktem- trudno znaleść opinie na
                                jego temat, stąd zakup był w ciemno, okazał się strzałem w 10! Świetna relacja ceny do
                                jakości.</p>
                        </li>
                        <li>
                            <p class="pb--20 px-sm--30">Doskonałe żelazko! Błyskawicznie się nagrzewa, dzięki silnemu
                                uderzeniu pary szybko i łatwo rozprasowuje nawet trudne zagniecenia. Ma też dłuższy niż
                                na ogół kabel, co czasami ułatwia pracę.</p>
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
