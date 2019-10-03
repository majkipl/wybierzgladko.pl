@extends('layouts.front', ['metaTitle' => "Żelazko One Temperature", 'metaDescription' => "Jedna bezpieczna temperatura do wszystkich tkanin"])

@section('content')
    @include('home.section.baner', ['isHome' => false, 'showSlide' => "ot"])
    @include('home.section.banerRwd', ['isHome' => false, 'showSlide'=>"ot", 'includeClass' => "product-page"])

    <section class="product one-temperature py--70" id="oneTemperature">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-10 offset-lg-1 text-center wow fadeInUp" data-wow-duration="1s"
                     data-wow-delay="0.5s">
                    <h2 class="text-uppercase mb--50">Żelazko One Temperature</h2>

                    <p class="mb--40">Żelazko, które jedną temperaturą jest w stanie perfekcyjnie wyprasować wszystkie
                        rodzaje materiałów – od delikatnego jedwabiu po twardy jeans. I to bez żadnego ryzyka! Możesz
                        zapomnieć o sortowaniu prania i zmianach temperatury. <br/>Od dzisiaj prasowanie jest dziecinnie
                        proste, a czytanie metek z instrukcją prasowania przechodzi do lamusa! </p>
                </div>
            </div>

            <div class="row row-eq-height pb--30">
                <div
                    class="col-12 col-sm-6 col-lg-5 offset-lg-2 d-flex flex-column align-items-left justify-content-center order-1 order-sm-0 mt--30 mt-sm--0 text-center text-sm-left wow fadeInUp"
                    data-wow-duration="1s" data-wow-delay="0.5s">
                    <h3 class="text-uppercase mb--0">BEZPIECZNA TEMPERATURA</h3>

                    <div class="shape my--20 mx--auto mx-sm--0"></div>

                    <p>Jedno optymalne ustawienie temperatury, które perfekcyjnie wygładzi wszystkie rodzaje tkanin.
                        <br/>Prasuj wygodnie, bez ciągłego zmieniania temperatury i bez ryzyka zniszczenia Twoich
                        ulubionych ubrań!</p>
                </div>
                <div
                    class="col-12 col-sm-6 col-lg-4 d-flex flex-column align-items-center justify-content-center order-0 order-sm-1 wow fadeInUp"
                    data-wow-duration="1s" data-wow-delay="0.75s">
                    <img src="{{ asset('images/products/ot/1.jpg') }}" alt="BEZPIECZNA TEMPERATURA"
                         class="d-block product-circle"/>
                </div>
            </div>

            <div class="row row-eq-height pb--30">
                <div
                    class="col-12 col-sm-6 col-lg-4 offset-lg-1 d-flex flex-column align-items-center justify-content-center wow fadeInUp"
                    data-wow-duration="1s" data-wow-delay="0.75s">
                    <img src="{{ asset('images/products/ot/2.jpg') }}" alt="GŁADSZY POŚLIZG"
                         class="d-block product-circle"/>
                </div>
                <div
                    class="col-12 col-sm-6 col-lg-6 offset-lg-1 d-flex flex-column align-items-left justify-content-center mt--30 mt-sm--0 text-center text-sm-left wow fadeInUp"
                    data-wow-duration="1s" data-wow-delay="0.5s">
                    <h3 class="text-uppercase mb--0">GŁADSZY POŚLIZG</h3>

                    <div class="shape my--20 mx--auto mx-sm--0"></div>

                    <p>Prasowanie staje się czystą przyjemnością! A to wszystko dzięki ceramicznej stopie z turmalinem,
                        która pozwala na gładszy o 60% poślizg w porównaniu ze zwykłą ceramiczną powłoką. Materiał nie
                        gniecie się, nie elektryzuje i nie przesuwa po desce, a stopa żelazka nie przykleja się do
                        tkaniny podczas prasowania.</p>
                </div>
            </div>

            <div class="row row-eq-height pb--30">
                <div
                    class="col-12 col-sm-6 col-lg-5 offset-lg-2 d-flex flex-column align-items-left justify-content-center order-1 order-sm-0 mt--30 mt-sm--0 text-center text-sm-left wow fadeInUp"
                    data-wow-duration="1s" data-wow-delay="0.5s">
                    <h3 class="text-uppercase mb--0">AUTOMATYCZNE WYŁĄCZANIE</h3>

                    <div class="shape my--20 mx--auto mx-sm--0"></div>

                    <p>Gdyby zdarzyło Ci się zapomnieć wyłączyć żelazko, ono zrobi to za Ciebie, po ok. 30 sek. - jeśli
                        stopa skierowana jest w dół, a po 8 minutach - jeśli jest w pozycji pionowej.</p>
                </div>
                <div
                    class="col-12 col-sm-6 col-lg-4 d-flex flex-column align-items-center justify-content-center order-0 order-sm-1 wow fadeInUp"
                    data-wow-duration="1s" data-wow-delay="0.75s">
                    <img src="{{ asset('images/products/ot/3.jpg') }}" alt="AUTOMATYCZNE WYŁĄCZANIE"
                         class="d-block product-circle"/>
                </div>
            </div>

            <div class="row row-eq-height pb--30">
                <div
                    class="col-12 col-sm-6 col-lg-4 offset-lg-1 d-flex flex-column align-items-center justify-content-center wow fadeInUp"
                    data-wow-duration="1s" data-wow-delay="0.75s">
                    <img src="{{ asset('images/products/ot/4.jpg') }}" alt="PIONOWY STRUMIEŃ PARY"
                         class="d-block product-circle"/>
                </div>
                <div
                    class="col-12 col-sm-6 col-lg-6 offset-lg-1 d-flex flex-column align-items-left justify-content-center mt--30 mt-sm--0 text-center text-sm-left wow fadeInUp"
                    data-wow-duration="1s" data-wow-delay="0.5s">
                    <h3 class="text-uppercase mb--0">PIONOWY STRUMIEŃ PARY</h3>

                    <div class="shape my--20 mx--auto mx-sm--0"></div>

                    <p>Funkcja pionowego strumienia pary sprawdza się znakomicie przy wyrównywaniu fałd na firankach czy
                        poduszkach.</p>
                </div>
            </div>

            <div class="row row-eq-height pb--30">
                <div
                    class="col-12 col-sm-6 col-lg-5 offset-lg-2 d-flex flex-column align-items-left justify-content-center order-1 order-sm-0 mt--30 mt-sm--0 text-center text-sm-left wow fadeInUp"
                    data-wow-duration="1s" data-wow-delay="0.5s">
                    <h3 class="text-uppercase mb--0">IDEALNE DO TRUDNYCH MATERIAŁÓW</h3>

                    <div class="shape my--20 mx--auto mx-sm--0"></div>

                    <p>Duże uderzenie pary, aż 210 g na minutę, oraz stała dystrybucja pary o wartości 50 g na minutę,
                        znacznie ułatwi Ci prasowanie grubych materiałów, jak len czy dżins.</p>
                </div>
                <div
                    class="col-12 col-sm-6 col-lg-4 d-flex flex-column align-items-center justify-content-center order-0 order-sm-1 wow fadeInUp"
                    data-wow-duration="1s" data-wow-delay="0.75s">
                    <img src="{{ asset('images/products/ot/5.jpg') }}" alt="IDEALNE DO TRUDNYCH MATERIAŁÓW"
                         class="d-block product-circle"/>
                </div>
            </div>

            <div class="row row-eq-height pb--30">
                <div
                    class="col-12 col-sm-6 col-lg-4 offset-lg-1 d-flex flex-column align-items-center justify-content-center wow fadeInUp"
                    data-wow-duration="1s" data-wow-delay="0.75s">
                    <img src="{{ asset('images/products/ot/6.jpg') }}" alt="DUŻA POJEMNOŚĆ"
                         class="d-block product-circle"/>
                </div>
                <div
                    class="col-12 col-sm-6 col-lg-6 offset-lg-1 d-flex flex-column align-items-left justify-content-center mt--30 mt-sm--0 text-center text-sm-left wow fadeInUp"
                    data-wow-duration="1s" data-wow-delay="0.5s">
                    <h3 class="text-uppercase mb--0">DUŻA POJEMNOŚĆ</h3>

                    <div class="shape my--20 mx--auto mx-sm--0"></div>

                    <p>Zbiornik, który mieści aż 350 ml wody, zapewnia dłuższe korzystanie bez potrzeby częstego
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
                    <img src="{{ asset('images/products/ot/7.jpg') }}" alt="POTRÓJNA SIŁA CZYSZCZĄCA"
                         class="d-block product-circle"/>
                </div>
            </div>

        </div>
    </section>

    @include('product.section.whereBuy', ['productSlug' => "ot"])
    @include('product.section.exploreOtherProduct', ['current' => 'ot'])

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
                            <p class="pb--20 px-sm--30">Mimo lekkiej wagi żelazko prasuje bardzo dobrze różne tkaniny.
                                Jedna temperatura pozwala usprawnić cały proces prasowania. Duży zbiornik na wodę
                                zapobiega odrywaniu się od prasowania ubrań. Ogromny plus za funkcję automatycznego
                                wyłączania się. Jeśli cenisz sobie czas i nienaganny wygląd - to produkt dla Ciebie.</p>
                        </li>
                        <li>
                            <p class="pb--20 px-sm--30">Jeśli nienawidzisz prasować. Jeśli ta czynność to po prostu
                                konieczny obowiązek do wykonania w domu - to żelazko jest dla Ciebie! Prasujesz każdy
                                materiał przy ustawionej jednej temperaturze, co jest naprawdę wygodne dla osoby, która
                                nigdy nie wie jaką temperaturę wybrać, aby nie spalić koszuli. Ja zawsze miałam z tym
                                problem, czasami prasując lekką, jedwabną bluzeczkę, mimo niskiej temperatury paliła się
                                ;( . Tu nie ma z tym problemu.</p>
                        </li>
                        <li>
                            <p class="pb--20 px-sm--30">Największym plusem tego żelazka jest oczywiście fakt, że nie
                                ustawiasz temperatury. Zapewne nie raz zastanawiałaś się czy aby nie jest żelazko za
                                gorące i czy nie przypali ulubionej sukienki / bluzki. Fajnie się prasuje, ceramiczna
                                stopa sunie po materiale aż miło. Funkcja samo wyłączenia moje wybawienie :) szczerze
                                polecam, nie jest drogie a świetne.</p>
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
