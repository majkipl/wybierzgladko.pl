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
    @include('product.section.reviews')

    @include('home.section.hesitate')

@endsection
