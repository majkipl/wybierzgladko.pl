@extends('layouts.front', ['metaTitle' => "Żelazko Power Steam Ultra", 'metaDescription' => "Duża moc w dobrej cenie"])

@section('content')
    @include('home.section.hero', ['isHome' => false, 'showSlide' => "psu"])

    @component( 'components.product.headline', ['title' => 'Żelazko Power Steam Ultra'])
        Wiemy, że nie masz czasu na prasowanie. Może nawet go nie lubisz. Dlatego stworzyliśmy żelazko o dużej mocy, które pozwoli Ci szybko i sprawnie rozprawić się z górą prania. I to w bardzo dobrej cenie. Dzięki niemu wszystko staje się prostsze.
    @endcomponent

    <section class="features text-center bg--six-row pb--90" id="features">
        <div class="container">
            <div class="row f1 features-ti d-flex">
                <div class="col-12 col-sm-7 col-md-7 col-lg-6 col-xl-5 offset-lg-1 offset-xl-2 d-flex flex-column justify-content-center text-right features-t py--30 py-sm--40 py-md--30 order-0">
                    <h5 class="accent accent-left-none text-tertiary text-right mb--15"></h5>
                    <h5 class="text-tertiary mb--30">Szybkie prasowanie </h5>
                    <p>3100 W mocy to gwarancja szybkiego prasowania i błyskawiczna gotowość do użycia. Dzięki temu masz więcej czasu dla siebie.</p>
                </div>
                <div class="col-12 col-sm-5 col-md-5 col-lg-5 col-xl-5 features-i order-1">
                    @component( 'components.product.image', ['name' => 'psu/psu-1', 'alt' => 'Szybkie prasowanie'])
                    @endcomponent
                </div>
            </div>
            <div class="row f2 features-it d-flex">
                <div class="col-12 col-sm-5 col-md-5 col-lg-5 col-xl-5 features-i order-1 order-sm-0">
                    @component( 'components.product.image', ['name' => 'psu/psu-2', 'alt' => 'Ceramiczna stopa'])
                    @endcomponent
                </div>
                <div class="col-12 col-sm-7 col-md-7 col-lg-6 col-xl-5 d-flex flex-column justify-content-center text-left features-t py--30 py-sm--40 py-md--30 order-0 order-sm-1">
                    <h5 class="accent accent-right-none text-tertiary text-left mb--15"></h5>
                    <h5 class="text-tertiary mb--30">Ceramiczna stopa</h5>
                    <p>dzięki idealnie gładkiej, ceramicznej stopie żelazko gładko sunie przez największe zagięcia. Prasowanie nigdy nie było przyjemniejsze.</p>
                </div>
            </div>
            <div class="row f3 features-ti d-flex">
                <div class="col-12 col-sm-7 col-md-7 col-lg-6 col-xl-5 offset-lg-1 offset-xl-2 d-flex flex-column justify-content-center text-right features-t py--30 py-sm--40 py-md--30 order-0">
                    <h5 class="accent accent-left-none text-tertiary text-right mb--15"></h5>
                    <h5 class="text-tertiary mb--30">Łatwe prasowanie trudno dostępnych miejsc</h5>
                    <p>Specjalnie zaprojektowana końcówka umożliwia bezproblemowe prasowanie przestrzeni pomiędzy guzikami i zapięciami. Nawet męska koszula nie będzie wyzwaniem.</p>
                </div>
                <div class="col-12 col-sm-5 col-md-5 col-lg-5 col-xl-5 features-i order-1">
                    @component( 'components.product.image', ['name' => 'psu/psu-3', 'alt' => 'Łatwe prasowanie trudno dostępnych miejsc'])
                    @endcomponent
                </div>
            </div>
            <div class="row f4 features-it d-flex">
                <div class="col-12 col-sm-5 col-md-5 col-lg-5 col-xl-5 features-i order-1 order-sm-0">
                    @component( 'components.product.image', ['name' => 'psu/psu-4', 'alt' => 'Idealne do trudnych materiałów'])
                    @endcomponent
                </div>
                <div class="col-12 col-sm-7 col-md-7 col-lg-6 col-xl-5 d-flex flex-column justify-content-center text-left features-t py--30 py-sm--40 py-md--30 order-0 order-sm-1">
                    <h5 class="accent accent-right-none text-tertiary text-left mb--15"></h5>
                    <h5 class="text-tertiary mb--30">Idealne do trudnych materiałów</h5>
                    <p>Duże uderzenie pary, aż 210 g na minutę, oraz stała dystrybucja pary o wartości 45 g na minutę, znacznie ułatwi ci prasowanie grubych materiałów, jak len czy dżins. </p>
                </div>
            </div>
            <div class="row f5 features-ti d-flex">
                <div class="col-12 col-sm-7 col-md-7 col-lg-6 col-xl-5 offset-lg-1 offset-xl-2 d-flex flex-column justify-content-center text-right features-t py--30 py-sm--40 py-md--30 order-0">
                    <h5 class="accent accent-left-none text-tertiary text-right mb--15"></h5>
                    <h5 class="text-tertiary mb--30">Pionowy strumień pary</h5>
                    <p>Funkcja pionowego strumienia pary sprawdza się znakomicie przy wyrównywaniu fałd na wiszących ubraniach, firankach czy tapicerce.</p>
                </div>
                <div class="col-12 col-sm-5 col-md-5 col-lg-5 col-xl-5 features-i order-1">
                    @component( 'components.product.image', ['name' => 'psu/psu-5', 'alt' => 'Pionowy strumień pary'])
                    @endcomponent
                </div>
            </div>
            <div class="row f6 features-it d-flex">
                <div class="col-12 col-sm-5 col-md-5 col-lg-5 col-xl-5 features-i order-1 order-sm-0">
                    @component( 'components.product.image', ['name' => 'psu/psu-6', 'alt' => 'Duża pojemność'])
                    @endcomponent
                </div>
                <div class="col-12 col-sm-7 col-md-7 col-lg-6 col-xl-5 d-flex flex-column justify-content-center text-left features-t py--30 py-sm--40 py-md--30 order-0 order-sm-1">
                    <h5 class="accent accent-right-none text-tertiary text-left mb--15"></h5>
                    <h5 class="text-tertiary mb--30">Duża pojemność</h5>
                    <p>Zbiornik, który mieści 350ml wody, zapewnia dłuższe korzystanie bez potrzeby częstego napełniania. </p>
                </div>
            </div>
            <div class="row f7 features-ti d-flex">
                <div class="col-12 col-sm-7 col-md-7 col-lg-6 col-xl-5 offset-lg-1 offset-xl-2 d-flex flex-column justify-content-center text-right features-t py--30 py-sm--40 py-md--30 order-0">
                    <h5 class="accent accent-left-none text-tertiary text-right mb--15"></h5>
                    <h5 class="text-tertiary mb--30">Potrójna siła czyszcząca</h5>
                    <p>Dzięki funkcji samooczyszczenia i systemowi zapobiegającemu tworzeniu się osadu żelazko będzie służyło ci sprawnie przed długi czas.</p>
                </div>
                <div class="col-12 col-sm-5 col-md-5 col-lg-5 col-xl-5 features-i order-1">
                    @component( 'components.product.image', ['name' => 'psu/psu-7', 'alt' => 'Potrójna siła czyszcząca'])
                    @endcomponent
                </div>
            </div>
        </div>
    </section>

    @include('product.section.whereBuy', ['productSlug' => 'psu'])
    @include('product.section.exploreOtherProduct', ['current' => 'psu'])
    @include('product.section.reviews')

@endsection
