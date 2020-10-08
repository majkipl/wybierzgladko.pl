@extends('layouts.front', ['metaTitle' => "Żelazko One Temperature", 'metaDescription' => "Jedna bezpieczna temperatura do wszystkich tkanin"])

@section('content')
    @include('home.section.hero', ['isHome' => false, 'showSlide' => "ot"])

    @component( 'components.product.headline', ['title' => 'Żelazko One Temperature'])
        Żelazko, które jedną temperaturą jest w stanie perfekcyjnie wyprasować wszystkie rodzaje materiałów – od delikatnego jedwabiu po twardy jeans. I to bez żadnego ryzyka! Możesz zapomnieć o sortowaniu prania i zmianach temperatury. Od dzisiaj prasowanie jest dziecinnie proste, a czytanie metek z instrukcją prasowania przechodzi do lamusa!
    @endcomponent

    <section class="features text-center bg--six-row pb--90" id="features">
        <div class="container">
            <div class="row f1 features-ti d-flex">
                <div class="col-12 col-sm-7 col-md-7 col-lg-6 col-xl-5 offset-lg-1 offset-xl-2 d-flex flex-column justify-content-center text-right features-t py--30 py-sm--40 py-md--30 order-0">
                    <h5 class="accent accent-left-none text-tertiary text-right mb--15"></h5>
                    <h5 class="text-tertiary mb--30">Bezpieczna temperatura</h5>
                    <p>Jedno optymalne ustawienie temperatury, które perfekcyjnie wygładzi wszystkie rodzaje tkanin. Prasuj wygodnie, bez ciągłego zmieniania temperatury i bez ryzyka zniszczenia twoich ulubionych ubrań!</p>
                </div>
                <div class="col-12 col-sm-5 col-md-5 col-lg-5 col-xl-5 features-i order-1">
                    @component( 'components.product.image', ['name' => 'ot/ot-1', 'alt' => 'Bezpieczna temperatura'])
                    @endcomponent
                </div>
            </div>
            <div class="row f2 features-it d-flex">
                <div class="col-12 col-sm-5 col-md-5 col-lg-5 col-xl-5 features-i order-1 order-sm-0">
                    @component( 'components.product.image', ['name' => 'ot/ot-2', 'alt' => 'Gładszy poślizg'])
                    @endcomponent
                </div>
                <div class="col-12 col-sm-7 col-md-7 col-lg-6 col-xl-5 d-flex flex-column justify-content-center text-left features-t py--30 py-sm--40 py-md--30 order-0 order-sm-1">
                    <h5 class="accent accent-right-none text-tertiary text-left mb--15"></h5>
                    <h5 class="text-tertiary mb--30">Gładszy poślizg</h5>
                    <p>Prasowanie staje się czystą przyjemnością! A to wszystko dzięki ceramicznej stopie z turmalinem, która pozwala na gładszy o 60% poślizg w porównaniu ze zwykłą ceramiczną powłoką. Materiał nie gniecie się, nie elektryzuje i nie przesuwa po desce, a stopa żelazka nie przykleja się do tkaniny podczas prasowania.</p>
                </div>
            </div>
            <div class="row f3 features-ti d-flex">
                <div class="col-12 col-sm-7 col-md-7 col-lg-6 col-xl-5 offset-lg-1 offset-xl-2 d-flex flex-column justify-content-center text-right features-t py--30 py-sm--40 py-md--30 order-0">
                    <h5 class="accent accent-left-none text-tertiary text-right mb--15"></h5>
                    <h5 class="text-tertiary mb--30">Automatyczne wyłączanie</h5>
                    <p>Gdyby zdarzyło ci się zapomnieć wyłączyć żelazko, ono zrobi to za ciebie po około 30 sekundach, jeśli stopa skierowana jest w dół lub po 8 minutach, jeśli jest w pozycji pionowej.</p>
                </div>
                <div class="col-12 col-sm-5 col-md-5 col-lg-5 col-xl-5 features-i order-1">
                    @component( 'components.product.image', ['name' => 'ot/ot-3', 'alt' => 'Automatyczne wyłączanie'])
                    @endcomponent
                </div>
            </div>
            <div class="row f4 features-it d-flex">
                <div class="col-12 col-sm-5 col-md-5 col-lg-5 col-xl-5 features-i order-1 order-sm-0">
                    @component( 'components.product.image', ['name' => 'ot/ot-4', 'alt' => 'Pionowy strumień pary'])
                    @endcomponent
                </div>
                <div class="col-12 col-sm-7 col-md-7 col-lg-6 col-xl-5 d-flex flex-column justify-content-center text-left features-t py--30 py-sm--40 py-md--30 order-0 order-sm-1">
                    <h5 class="accent accent-right-none text-tertiary text-left mb--15"></h5>
                    <h5 class="text-tertiary mb--30">Pionowy strumień pary</h5>
                    <p>Funkcja pionowego strumienia pary sprawdza się znakomicie przy wyrównywaniu fałd na firankach czy poduszkach.</p>
                </div>
            </div>
            <div class="row f5 features-ti d-flex">
                <div class="col-12 col-sm-7 col-md-7 col-lg-6 col-xl-5 offset-lg-1 offset-xl-2 d-flex flex-column justify-content-center text-right features-t py--30 py-sm--40 py-md--30 order-0">
                    <h5 class="accent accent-left-none text-tertiary text-right mb--15"></h5>
                    <h5 class="text-tertiary mb--30">Idealne do trudnych materiałów</h5>
                    <p>Duże uderzenie pary, aż 210 g na minutę, oraz stała dystrybucja pary o wartości 50 g na minutę, znacznie ułatwi ci prasowanie grubych materiałów, jak len czy dżins.</p>
                </div>
                <div class="col-12 col-sm-5 col-md-5 col-lg-5 col-xl-5 features-i order-1">
                    @component( 'components.product.image', ['name' => 'ot/ot-5', 'alt' => 'Idealne do trudnych materiałów'])
                    @endcomponent
                </div>
            </div>
            <div class="row f6 features-it d-flex">
                <div class="col-12 col-sm-5 col-md-5 col-lg-5 col-xl-5 features-i order-1 order-sm-0">
                    @component( 'components.product.image', ['name' => 'ot/ot-6', 'alt' => 'Duża pojemność'])
                    @endcomponent
                </div>
                <div class="col-12 col-sm-7 col-md-7 col-lg-6 col-xl-5 d-flex flex-column justify-content-center text-left features-t py--30 py-sm--40 py-md--30 order-0 order-sm-1">
                    <h5 class="accent accent-right-none text-tertiary text-left mb--15"></h5>
                    <h5 class="text-tertiary mb--30">Duża pojemność</h5>
                    <p>Zbiornik, który mieści aż 350 ml wody, zapewnia dłuższe korzystanie bez potrzeby częstego napełniania.</p>
                </div>
            </div>
            <div class="row f7 features-ti d-flex">
                <div class="col-12 col-sm-7 col-md-7 col-lg-6 col-xl-5 offset-lg-1 offset-xl-2 d-flex flex-column justify-content-center text-right features-t py--30 py-sm--40 py-md--30 order-0">
                    <h5 class="accent accent-left-none text-tertiary text-right mb--15"></h5>
                    <h5 class="text-tertiary mb--30">Potrójna siła czyszcząca</h5>
                    <p>Dzięki funkcji samooczyszczenia i systemowi zapobiegającemu tworzeniu się osadu żelazko będzie służyło ci sprawnie przed długi czas.</p>
                </div>
                <div class="col-12 col-sm-5 col-md-5 col-lg-5 col-xl-5 features-i order-1">
                    @component( 'components.product.image', ['name' => 'ot/ot-7', 'alt' => 'Potrójna siła czyszcząca'])
                    @endcomponent
                </div>
            </div>
        </div>
    </section>

        @include('product.section.whereBuy', ['productSlug' => 'ot'])
        @include('product.section.exploreOtherProduct', ['current' => 'ot'])
        @include('product.section.reviews')

@endsection
