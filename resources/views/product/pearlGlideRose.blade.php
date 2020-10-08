@extends('layouts.front')

@section('content')
    @include('home.section.hero', ['isHome' => false, 'showSlide' => "pgr"])

    @component( 'components.product.headline', ['title' => 'Pearl Glide'])
        Pearl Glide to bez wątpienia najbardziej stylowe żelazko z naszej oferty. Dzięki niemu prasowanie przestaje być nudne! Ale design to nie wszystko. Urządzenie zachwyci Cię dużą mocą, gładkim poślizgiem, wytrzymałością i szeregiem innych przydatnych funkcji.
    @endcomponent

    <section class="features text-center bg--six-row pb--90" id="features">
        <div class="container">
            <div class="row f1 features-ti d-flex">
                <div class="col-12 col-sm-7 col-md-7 col-lg-6 col-xl-5 offset-lg-1 offset-xl-2 d-flex flex-column justify-content-center text-right features-t py--30 py-sm--40 py-md--30 order-0">
                    <h5 class="accent accent-left-none text-tertiary text-right mb--15"></h5>
                    <h5 class="text-tertiary mb--30">Niepowtarzalny styl</h5>
                    <p>Zachwyć się modnym, perłowo-różowym wykończeniem z elementami różowego złota i pozwól, by Twoje codzienne obowiązki stały się przyjemniejsze.</p>
                </div>
                <div class="col-12 col-sm-5 col-md-5 col-lg-5 col-xl-5 features-i order-1">
                    @component( 'components.product.image', ['name' => 'pgr/pgr-1', 'alt' => 'Niepowtarzalny styl'])
                    @endcomponent
                </div>
            </div>
            <div class="row f2 features-it d-flex">
                <div class="col-12 col-sm-5 col-md-5 col-lg-5 col-xl-5 features-i order-1 order-sm-0">
                    @component( 'components.product.image', ['name' => 'pgr/pgr-2', 'alt' => '50% płynniejsze prasowanie'])
                    @endcomponent
                </div>
                <div class="col-12 col-sm-7 col-md-7 col-lg-6 col-xl-5 d-flex flex-column justify-content-center text-left features-t py--30 py-sm--40 py-md--30 order-0 order-sm-1">
                    <h5 class="accent accent-right-none text-tertiary text-left mb--15"></h5>
                    <h5 class="text-tertiary mb--30">50% płynniejsze prasowanie</h5>
                    <p>Ceramiczna stopa z perłową powłoką zapewni Ci 50% gładszy poślizg, dla jeszcze łatwiejszego prasowania.</p>
                </div>
            </div>
            <div class="row f3 features-ti d-flex">
                <div class="col-12 col-sm-7 col-md-7 col-lg-6 col-xl-5 offset-lg-1 offset-xl-2 d-flex flex-column justify-content-center text-right features-t py--30 py-sm--40 py-md--30 order-0">
                    <h5 class="accent accent-left-none text-tertiary text-right mb--15"></h5>
                    <h5 class="text-tertiary mb--30">Duża moc pary</h5>
                    <p>Duże uderzenie pary, aż 150 g na minutę, oraz stała dystrybucja pary o wartości 40 g na minutę znacznie ułatwiają prasowanie, a Ty masz więcej czasu dla siebie.</p>
                </div>
                <div class="col-12 col-sm-5 col-md-5 col-lg-5 col-xl-5 features-i order-1">
                    @component( 'components.product.image', ['name' => 'pgr/pgr-3', 'alt' => 'Duża moc pary'])
                    @endcomponent
                </div>
            </div>
            <div class="row f4 features-it d-flex">
                <div class="col-12 col-sm-5 col-md-5 col-lg-5 col-xl-5 features-i order-1 order-sm-0">
                    @component( 'components.product.image', ['name' => 'pgr/pgr-4', 'alt' => 'Zmienna i pionowa para wodna'])
                    @endcomponent
                </div>
                <div class="col-12 col-sm-7 col-md-7 col-lg-6 col-xl-5 d-flex flex-column justify-content-center text-left features-t py--30 py-sm--40 py-md--30 order-0 order-sm-1">
                    <h5 class="accent accent-right-none text-tertiary text-left mb--15"></h5>
                    <h5 class="text-tertiary mb--30">Zmienna i pionowa para wodna</h5>
                    <p>Z pewnością spodoba Ci się także funkcja Variable Steam, która pozwala wybrać dokładnie tyle pary, ile potrzebujesz. Walczysz z upartymi zagnieceniami? Wybierz funkcję pionowej pary!</p>
                </div>
            </div>
            <div class="row f5 features-ti d-flex">
                <div class="col-12 col-sm-7 col-md-7 col-lg-6 col-xl-5 offset-lg-1 offset-xl-2 d-flex flex-column justify-content-center text-right features-t py--30 py-sm--40 py-md--30 order-0">
                    <h5 class="accent accent-left-none text-tertiary text-right mb--15"></h5>
                    <h5 class="text-tertiary mb--30">Potrójna siła czyszcząca</h5>
                    <p>Dzięki funkcji samooczyszczenia i systemowi zapobiegającemu tworzeniu się osadu żelazko będzie służyło Ci sprawnie przed długi czas.</p>
                </div>
                <div class="col-12 col-sm-5 col-md-5 col-lg-5 col-xl-5 features-i order-1">
                    @component( 'components.product.image', ['name' => 'pgr/pgr-5', 'alt' => 'Potrójna siła czyszcząca'])
                    @endcomponent
                </div>
            </div>
        </div>
    </section>

        @include('product.section.whereBuy', ['productSlug' => 'i'])
        @include('product.section.exploreOtherProduct', ['current' => 'i'])
        @include('product.section.reviews')

@endsection
