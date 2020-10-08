@extends('layouts.front')

@section('content')
    @include('home.section.hero', ['isHome' => false, 'showSlide' => "ccs"])

    @component( 'components.product.headline', ['title' => 'Żelazko Colour Control Supreme'])
        Czy prasowanie może być jeszcze przyjemniejsze? TAK! Pozbądź się zagnieceń i jednocześnie chroń intensywne kolory swoich ulubionych ubrań z innowacyjnym żelazkiem Colour Control Supreme. Pozwól, by Twoja codzienność była pełna barw!
    @endcomponent

    <section class="features text-center bg--six-row pb--90" id="features">
        <div class="container">
            <div class="row f1 features-ti d-flex">
                <div class="col-12 col-sm-7 col-md-7 col-lg-6 col-xl-5 offset-lg-1 offset-xl-2 d-flex flex-column justify-content-center text-right features-t py--30 py-sm--40 py-md--30 order-0">
                    <h5 class="accent accent-left-none text-tertiary text-right mb--15"></h5>
                    <h5 class="text-tertiary mb--30">Ochrona koloru ubrań</h5>
                    <p>Nasze najnowsze żelazko wyposażyliśmy w ceramiczną stopę z ochroną uv, która podczas prasowania dba o kolory twoich ulubionych tkanin!</p>
                </div>
                <div class="col-12 col-sm-5 col-md-5 col-lg-5 col-xl-5 features-i order-1">
                    @component( 'components.product.image', ['name' => 'ccs/ccs-1', 'alt' => 'Ochrona koloru ubrań'])
                    @endcomponent
                </div>
            </div>
            <div class="row f2 features-it d-flex">
                <div class="col-12 col-sm-5 col-md-5 col-lg-5 col-xl-5 features-i order-1 order-sm-0">
                    @component( 'components.product.image', ['name' => 'ccs/ccs-2', 'alt' => 'Temperatura sterowana kolorami'])
                    @endcomponent
                </div>
                <div class="col-12 col-sm-7 col-md-7 col-lg-6 col-xl-5 d-flex flex-column justify-content-center text-left features-t py--30 py-sm--40 py-md--30 order-0 order-sm-1">
                    <h5 class="accent accent-right-none text-tertiary text-left mb--15"></h5>
                    <h5 class="text-tertiary mb--30">Temperatura sterowana kolorami</h5>
                    <p>Kolorowy przewodnik pozwoli ci z łatwością dopasować temperaturę prasowania do każdego materiału. Od teraz koniec ze zgadywaniem!</p>
                </div>
            </div>
            <div class="row f3 features-ti d-flex">
                <div class="col-12 col-sm-7 col-md-7 col-lg-6 col-xl-5 offset-lg-1 offset-xl-2 d-flex flex-column justify-content-center text-right features-t py--30 py-sm--40 py-md--30 order-0">
                    <h5 class="accent accent-left-none text-tertiary text-right mb--15"></h5>
                    <h5 class="text-tertiary mb--30">Szybsze i łatwiejsze prasowanie</h5>
                    <p>Pokonaj nawet najtrudniejsze zagniecenia dzięki imponującej mocy 3100w. Zapewnia ona szybsze i stałe nagrzewanie, możesz się więc cieszyć skuteczniejszym i wygodniejszym prasowaniem.</p>
                </div>
                <div class="col-12 col-sm-5 col-md-5 col-lg-5 col-xl-5 features-i order-1">
                    @component( 'components.product.image', ['name' => 'ccs/ccs-3', 'alt' => 'Szybsze i łatwiejsze prasowanie'])
                    @endcomponent
                </div>
            </div>
            <div class="row f4 features-it d-flex">
                <div class="col-12 col-sm-5 col-md-5 col-lg-5 col-xl-5 features-i order-1 order-sm-0">
                    @component( 'components.product.image', ['name' => 'ccs/ccs-4', 'alt' => 'Mocna para'])
                    @endcomponent
                </div>
                <div class="col-12 col-sm-7 col-md-7 col-lg-6 col-xl-5 d-flex flex-column justify-content-center text-left features-t py--30 py-sm--40 py-md--30 order-0 order-sm-1">
                    <h5 class="accent accent-right-none text-tertiary text-left mb--15"></h5>
                    <h5 class="text-tertiary mb--30">Mocna para</h5>
                    <p>Nasze żelazko zapewnia ciągłą parę 50g, która w bezpieczny sposób zmiękcza tkaninę, zapewniając najwyższą skuteczność w walce z uporczywymi zagnieceniami. Masz problem z wyprasowaniem swoich ulubionych dżinsów? Użyj funkcji mocnego uderzenia pary 180g – jej mocny strumień zmiękczy gruby materiał, dzięki czemu bez wysiłku wygładzisz każde zagniecenie.</p>
                </div>
            </div>
            <div class="row f5 features-ti d-flex">
                <div class="col-12 col-sm-7 col-md-7 col-lg-6 col-xl-5 offset-lg-1 offset-xl-2 d-flex flex-column justify-content-center text-right features-t py--30 py-sm--40 py-md--30 order-0">
                    <h5 class="accent accent-left-none text-tertiary text-right mb--15"></h5>
                    <h5 class="text-tertiary mb--30">Duży zbiornik na wodę</h5>
                    <p>Dzięki jego dużej pojemności (380 ml) szybko uporasz się z dużym stosem prania. Od teraz nie musisz przerywać pracy, by co chwilę uzupełniać brak wody.</p>
                </div>
                <div class="col-12 col-sm-5 col-md-5 col-lg-5 col-xl-5 features-i order-1">
                    @component( 'components.product.image', ['name' => 'ccs/ccs-5', 'alt' => 'Duży zbiornik na wodę'])
                    @endcomponent
                </div>
            </div>
            <div class="row f6 features-it d-flex">
                <div class="col-12 col-sm-5 col-md-5 col-lg-5 col-xl-5 features-i order-1 order-sm-0">
                    @component( 'components.product.image', ['name' => 'ccs/ccs-6', 'alt' => 'Stylowy wygląd'])
                    @endcomponent
                </div>
                <div class="col-12 col-sm-7 col-md-7 col-lg-6 col-xl-5 d-flex flex-column justify-content-center text-left features-t py--30 py-sm--40 py-md--30 order-0 order-sm-1">
                    <h5 class="accent accent-right-none text-tertiary text-left mb--15"></h5>
                    <h5 class="text-tertiary mb--30">Stylowy wygląd</h5>
                    <p>Urządzenie wygląda tak stylowo, że nie trzeba go chować w szafie. Dzięki chromowanym wstawkom i ceramicznej stopie, która zmienia kolor pod wpływem światła podczas ruchu żelazka, aż chce się je podziwiać!</p>
                </div>
            </div>
            <div class="row f7 features-ti d-flex">
                <div class="col-12 col-sm-7 col-md-7 col-lg-6 col-xl-5 offset-lg-1 offset-xl-2 d-flex flex-column justify-content-center text-right features-t py--30 py-sm--40 py-md--30 order-0">
                    <h5 class="accent accent-left-none text-tertiary text-right mb--15"></h5>
                    <h5 class="text-tertiary mb--30">Przewód zasilający</h5>
                    <p>Ciesz się swobodą prasowania bez ograniczeń, dzięki 3-metrowemu przewodowi zasilającemu.</p>
                </div>
                <div class="col-12 col-sm-5 col-md-5 col-lg-5 col-xl-5 features-i order-1">
                    @component( 'components.product.image', ['name' => 'ccs/ccs-7', 'alt' => 'Przewód zasilający'])
                    @endcomponent
                </div>
            </div>
        </div>
    </section>

        @include('product.section.whereBuy', ['productSlug' => 'ccs'])
        @include('product.section.exploreOtherProduct', ['current' => 'ccs'])
        @include('product.section.reviews')

@endsection
