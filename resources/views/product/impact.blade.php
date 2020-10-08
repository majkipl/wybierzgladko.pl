@extends('layouts.front')

@section('content')
    @include('home.section.hero', ['isHome' => false, 'showSlide' => "i"])

    @component( 'components.product.headline', ['title' => 'Żelazko Impact'])
        Wytrzymałość to drugie imię żelazka Impact. Dlatego nie martw się, jeśli w ferworze codziennych obowiązków przypadkiem upuścisz je na podłogę lub jeśli strącą je z deski Twoje dzieci podczas zabawy. Dzięki specjalnej obudowie żelazko wytrzyma każdy upadek.
    @endcomponent

    <section class="features text-center bg--six-row pb--90" id="features">
        <div class="container">
            <div class="row f1 features-ti d-flex">
                <div class="col-12 col-sm-7 col-md-7 col-lg-6 col-xl-5 offset-lg-1 offset-xl-2 d-flex flex-column justify-content-center text-right features-t py--30 py-sm--40 py-md--30 order-0">
                    <h5 class="accent accent-left-none text-tertiary text-right mb--15"></h5>
                    <h5 class="text-tertiary mb--30">Wytrzymałość</h5>
                    <p>Specjalna powłoka dura-coat zabezpiecza żelazko podczas upadków z wysokości do 1,2 m.</p>
                </div>
                <div class="col-12 col-sm-5 col-md-5 col-lg-5 col-xl-5 features-i order-1">
                    @component( 'components.product.image', ['name' => 'i/i-1', 'alt' => 'Wytrzymałość'])
                    @endcomponent
                </div>
            </div>
            <div class="row f2 features-it d-flex">
                <div class="col-12 col-sm-5 col-md-5 col-lg-5 col-xl-5 features-i order-1 order-sm-0">
                    @component( 'components.product.image', ['name' => 'i/i-2', 'alt' => 'Automatyczne wyłączanie'])
                    @endcomponent
                </div>
                <div class="col-12 col-sm-7 col-md-7 col-lg-6 col-xl-5 d-flex flex-column justify-content-center text-left features-t py--30 py-sm--40 py-md--30 order-0 order-sm-1">
                    <h5 class="accent accent-right-none text-tertiary text-left mb--15"></h5>
                    <h5 class="text-tertiary mb--30">Automatyczne wyłączanie</h5>
                    <p>Nawet jeśli zapomnisz wyłączyć żelazko, ono zrobi to za ciebie. Wbudowana funkcja samowyłączania robi to na 3 sposoby. Śpiesz się bez obaw.</p>
                </div>
            </div>
            <div class="row f3 features-ti d-flex">
                <div class="col-12 col-sm-7 col-md-7 col-lg-6 col-xl-5 offset-lg-1 offset-xl-2 d-flex flex-column justify-content-center text-right features-t py--30 py-sm--40 py-md--30 order-0">
                    <h5 class="accent accent-left-none text-tertiary text-right mb--15"></h5>
                    <h5 class="text-tertiary mb--30">Pionowy strumień pary</h5>
                    <p>Funkcja pionowego strumienia pary sprawdzi się znakomicie przy wyrównywaniu fałd na firankach czy poduszkach.</p>
                </div>
                <div class="col-12 col-sm-5 col-md-5 col-lg-5 col-xl-5 features-i order-1">
                    @component( 'components.product.image', ['name' => 'i/i-3', 'alt' => 'Pionowy strumień pary'])
                    @endcomponent
                </div>
            </div>
            <div class="row f4 features-it d-flex">
                <div class="col-12 col-sm-5 col-md-5 col-lg-5 col-xl-5 features-i order-1 order-sm-0">
                    @component( 'components.product.image', ['name' => 'i/i-4', 'alt' => 'Łatwe prasowanie'])
                    @endcomponent
                </div>
                <div class="col-12 col-sm-7 col-md-7 col-lg-6 col-xl-5 d-flex flex-column justify-content-center text-left features-t py--30 py-sm--40 py-md--30 order-0 order-sm-1">
                    <h5 class="accent accent-right-none text-tertiary text-left mb--15"></h5>
                    <h5 class="text-tertiary mb--30">Łatwe prasowanie</h5>
                    <p>Duże uderzenie pary, aż 160 g na minutę, oraz stała dystrybucja pary o wartości 45 g na minutę znacznie ułatwiają prasowanie, a ty masz więcej czasu dla siebie.</p>
                </div>
            </div>
            <div class="row f5 features-ti d-flex">
                <div class="col-12 col-sm-7 col-md-7 col-lg-6 col-xl-5 offset-lg-1 offset-xl-2 d-flex flex-column justify-content-center text-right features-t py--30 py-sm--40 py-md--30 order-0">
                    <h5 class="accent accent-left-none text-tertiary text-right mb--15"></h5>
                    <h5 class="text-tertiary mb--30">Potrójna siła czyszcząca</h5>
                    <p>Dzięki funkcji samooczyszczenia i systemowi zapobiegającemu tworzeniu się osadu żelazko będzie służyło ci sprawnie przed długi czas.</p>
                </div>
                <div class="col-12 col-sm-5 col-md-5 col-lg-5 col-xl-5 features-i order-1">
                    @component( 'components.product.image', ['name' => 'i/i-5', 'alt' => 'Potrójna siła czyszcząca'])
                    @endcomponent
                </div>
            </div>
        </div>
    </section>

        @include('product.section.whereBuy', ['productSlug' => 'i'])
        @include('product.section.exploreOtherProduct', ['current' => 'i'])
        @include('product.section.reviews')

@endsection
