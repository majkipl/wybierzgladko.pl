@extends('layouts.front')

@section('content')
    @include('home.section.hero', ['isHome' => false, 'showSlide' => "ce"])

    @component( 'components.product.headline', ['title' => 'Żelazko Copper Express'])
        Wyraź swój styl z żelazkiem Copper Express! Jego sprytny design i funkcje sprawią, że prasowanie stanie się samą przyjemnością. Dzięki niemu w mgnieniu oka uporasz się z uporczywymi zagnieceniami.
    @endcomponent

    <section class="features text-center bg--six-row pb--90" id="features">
        <div class="container">
            <div class="row f1 features-ti d-flex">
                <div class="col-12 col-sm-7 col-md-7 col-lg-6 col-xl-5 offset-lg-1 offset-xl-2 d-flex flex-column justify-content-center text-right features-t py--30 py-sm--40 py-md--30 order-0">
                    <h5 class="accent accent-left-none text-tertiary text-right mb--15"></h5>
                    <h5 class="text-tertiary mb--30">Ultraszybkie nagrzewanie</h5>
                    <p>Nie ma nic gorszego niż czekanie na nagrzanie się żelazka, gdy już dawno jest się spóźnionym do wyjścia z domu, prawda? Nasze żelazko copper express zostało wyposażone w ultraszybko nagrzewającą się miedzianą stopę, dzięki której w mig uporasz się z wyprasowaniem swojej wyjściowej sukienki. I zachwycisz wszystkich!</p>
                </div>
                <div class="col-12 col-sm-5 col-md-5 col-lg-5 col-xl-5 features-i order-1">
                    @component( 'components.product.image', ['name' => 'ce/ce-1', 'alt' => 'Ultraszybkie nagrzewanie'])
                    @endcomponent
                </div>
            </div>
            <div class="row f2 features-it d-flex">
                <div class="col-12 col-sm-5 col-md-5 col-lg-5 col-xl-5 features-i order-1 order-sm-0">
                    @component( 'components.product.image', ['name' => 'ce/ce-2', 'alt' => 'Ekskluzywny wygląd'])
                    @endcomponent
                </div>
                <div class="col-12 col-sm-7 col-md-7 col-lg-6 col-xl-5 d-flex flex-column justify-content-center text-left features-t py--30 py-sm--40 py-md--30 order-0 order-sm-1">
                    <h5 class="accent accent-right-none text-tertiary text-left mb--15"></h5>
                    <h5 class="text-tertiary mb--30">Ekskluzywny wygląd</h5>
                    <p>Daj się uwieść najbardziej stylowemu żelazku w naszej ofercie! Miedziane akcenty i piękne metaliczne czarne wykończenia sprawiają, że prasowanie staje się prawdziwie estetycznym doznaniem.</p>
                </div>
            </div>
            <div class="row f3 features-ti d-flex">
                <div class="col-12 col-sm-7 col-md-7 col-lg-6 col-xl-5 offset-lg-1 offset-xl-2 d-flex flex-column justify-content-center text-right features-t py--30 py-sm--40 py-md--30 order-0">
                    <h5 class="accent accent-left-none text-tertiary text-right mb--15"></h5>
                    <h5 class="text-tertiary mb--30">Pomoc przy trudniejszych materiałach</h5>
                    <p>Zmagasz się z uporczywymi zagnieceniami na ukochanej koszuli? Nie ma problemu! Użyj przycisku steam shot, a dzięki parze wodnej w potężnej dawce 150g skutecznie zmiękczysz tkaninę i z łatwością ją wygładzisz.</p>
                </div>
                <div class="col-12 col-sm-5 col-md-5 col-lg-5 col-xl-5 features-i order-1">
                    @component( 'components.product.image', ['name' => 'ce/ce-3', 'alt' => 'Pomoc przy trudniejszych materiałach'])
                    @endcomponent
                </div>
            </div>
            <div class="row f4 features-it d-flex">
                <div class="col-12 col-sm-5 col-md-5 col-lg-5 col-xl-5 features-i order-1 order-sm-0">
                    @component( 'components.product.image', ['name' => 'ce/ce-4', 'alt' => 'Pionowy i poziomy wyrzut pary'])
                    @endcomponent
                </div>
                <div class="col-12 col-sm-7 col-md-7 col-lg-6 col-xl-5 d-flex flex-column justify-content-center text-left features-t py--30 py-sm--40 py-md--30 order-0 order-sm-1">
                    <h5 class="accent accent-right-none text-tertiary text-left mb--15"></h5>
                    <h5 class="text-tertiary mb--30">Pionowy i poziomy wyrzut pary</h5>
                    <p>Doskonale wiemy, że niektóre tkaniny prasuje się zdecydowanie ciężej niż inne. Dlatego żelazko copper express posiada zmienną kontrolę pary wodnej. Dzięki niej możesz regulować jej wydajność, przez co z łatwością poradzisz sobie nawet z najtrudniejszymi zagnieceniami. Z kolei z opcją pionowego wyrzutu pary bez problemu usuniesz zagniecenia na wiszących ubraniach.</p>
                </div>
            </div>
            <div class="row f5 features-ti d-flex">
                <div class="col-12 col-sm-7 col-md-7 col-lg-6 col-xl-5 offset-lg-1 offset-xl-2 d-flex flex-column justify-content-center text-right features-t py--30 py-sm--40 py-md--30 order-0">
                    <h5 class="accent accent-left-none text-tertiary text-right mb--15"></h5>
                    <h5 class="text-tertiary mb--30">Duża moc</h5>
                    <p>Stylowy wygląd to nie wszystko! Żelazko copper express może pochwalić się imponującą mocą 2600w. Dzięki takiej wydajności będziesz w stanie wyprasować każde zagniecenie bez wysiłku.</p>
                </div>
                <div class="col-12 col-sm-5 col-md-5 col-lg-5 col-xl-5 features-i order-1">
                    @component( 'components.product.image', ['name' => 'ce/ce-5', 'alt' => 'Duża moc'])
                    @endcomponent
                </div>
            </div>
        </div>
    </section>

        @include('product.section.whereBuy', ['productSlug' => 'i'])
        @include('product.section.exploreOtherProduct', ['current' => 'i'])
        @include('product.section.reviews')

@endsection
