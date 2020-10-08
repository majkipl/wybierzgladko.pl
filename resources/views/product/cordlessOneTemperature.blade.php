@extends('layouts.front')

@section('content')
    @include('home.section.hero', ['isHome' => false, 'showSlide' => "cot"])

    @component( 'components.product.headline', ['title' => 'Żelazko Bezprzewodowe One Temperature'])
        Prasowanie bez plączącego się kabla i bez potrzeby regulowania temperatury? Tak, to możliwe! Poznaj nasze najnowsze żelazko One Temperature i przekonaj się, że dbanie o gładkość ulubionych ubrań jeszcze nigdy nie było tak wygodne.
    @endcomponent

    <section class="features text-center bg--six-row pb--90" id="features">
        <div class="container">
            <div class="row f1 features-ti d-flex">
                <div class="col-12 col-sm-7 col-md-7 col-lg-6 col-xl-5 offset-lg-1 offset-xl-2 d-flex flex-column justify-content-center text-right features-t py--30 py-sm--40 py-md--30 order-0">
                    <h5 class="accent accent-left-none text-tertiary text-right mb--15"></h5>
                    <h5 class="text-tertiary mb--30">Szybkie prasowanie bez przewodów</h5>
                    <p>Dobrze wiemy, że każdy poranek to walka z czasem. Z pewnością ucieszy cię fakt, że dzięki funkcji szybkiego ładowania, nasze żelazko jest gotowe do pracy w niespełna 6 sekund*. A ty możesz się cieszyć swobodą prasowania bez plączących się dookoła przewodów. I zawsze zdążysz na czas!</p>
                    <em class="mt--30">*w przypadku używania między 5-10 sekundowymi seriami prasowania</em>
                </div>
                <div class="col-12 col-sm-5 col-md-5 col-lg-5 col-xl-5 features-i order-1">
                    @component( 'components.product.image', ['name' => 'cot/cot-1', 'alt' => 'Szybkie prasowanie bez przewodów'])
                    @endcomponent
                </div>
            </div>
            <div class="row f2 features-it d-flex">
                <div class="col-12 col-sm-5 col-md-5 col-lg-5 col-xl-5 features-i order-1 order-sm-0">
                    @component( 'components.product.image', ['name' => 'cot/cot-2', 'alt' => 'Jedna temperatura do wszystkich tkanin'])
                    @endcomponent
                </div>
                <div class="col-12 col-sm-7 col-md-7 col-lg-6 col-xl-5 d-flex flex-column justify-content-center text-left features-t py--30 py-sm--40 py-md--30 order-0 order-sm-1">
                    <h5 class="accent accent-right-none text-tertiary text-left mb--15"></h5>
                    <h5 class="text-tertiary mb--30">Jedna temperatura do wszystkich tkanin</h5>
                    <p>jeszcze jedna znakomita wiadomość! Już nigdy więcej nie musisz się zastanawiać, jaką temperaturą prasować swoje ubrania. Od teraz wszystkie tkaniny – od jeansu po jedwab – są znakomicie wygładzone jedną, bezpieczną temperaturą. Bez stresu!</p>
                </div>
            </div>
            <div class="row f3 features-ti d-flex">
                <div class="col-12 col-sm-7 col-md-7 col-lg-6 col-xl-5 offset-lg-1 offset-xl-2 d-flex flex-column justify-content-center text-right features-t py--30 py-sm--40 py-md--30 order-0">
                    <h5 class="accent accent-left-none text-tertiary text-right mb--15"></h5>
                    <h5 class="text-tertiary mb--30">Imponująca moc</h5>
                    <p>Dzięki dużej mocy 2600w zapewnia wysoką wydajność, która jest w stanie poradzić sobie nawet z najtrudniejszymi zagnieceniami.</p>
                </div>
                <div class="col-12 col-sm-5 col-md-5 col-lg-5 col-xl-5 features-i order-1">
                    @component( 'components.product.image', ['name' => 'cot/cot-3', 'alt' => 'Imponująca moc'])
                    @endcomponent
                </div>
            </div>
            <div class="row f4 features-it d-flex">
                <div class="col-12 col-sm-5 col-md-5 col-lg-5 col-xl-5 features-i order-1 order-sm-0">
                    @component( 'components.product.image', ['name' => 'cot/cot-4', 'alt' => 'Pomoc z trudnymi materiałami'])
                    @endcomponent
                </div>
                <div class="col-12 col-sm-7 col-md-7 col-lg-6 col-xl-5 d-flex flex-column justify-content-center text-left features-t py--30 py-sm--40 py-md--30 order-0 order-sm-1">
                    <h5 class="accent accent-right-none text-tertiary text-left mb--15"></h5>
                    <h5 class="text-tertiary mb--30">Pomoc z trudnymi materiałami</h5>
                    <p>Potrzebujesz dodatkowej pomocy, aby usunąć zagniecenia z koszuli? Użyj funkcji uderzenie pary 210g. Kiedy skierujesz parę prosto na ubrania, materiał zmięknie, umożliwiając łatwe wygładzenie zagnieceń. A dzięki funkcji ciągłemu wytwarzaniu pary 45 g osiągniesz idealne efekty prasowania za każdym razem.</p>
                </div>
            </div>
            <div class="row f5 features-ti d-flex">
                <div class="col-12 col-sm-7 col-md-7 col-lg-6 col-xl-5 offset-lg-1 offset-xl-2 d-flex flex-column justify-content-center text-right features-t py--30 py-sm--40 py-md--30 order-0">
                    <h5 class="accent accent-left-none text-tertiary text-right mb--15"></h5>
                    <h5 class="text-tertiary mb--30">Oszczędność czasu</h5>
                    <p>dzięki ceramicznej stopie prasowanie zajmuje znacznie mniej czasu. Wszystko dzięki konstrukcji umożliwiającej równomierne rozprowadzanie ciepła i gładki poślizg po każdym rodzaju tkaniny.</p>
                </div>
                <div class="col-12 col-sm-5 col-md-5 col-lg-5 col-xl-5 features-i order-1">
                    @component( 'components.product.image', ['name' => 'cot/cot-5', 'alt' => 'Oszczędność czasu'])
                    @endcomponent
                </div>
            </div>
        </div>
    </section>

        @include('product.section.whereBuy', ['productSlug' => 'i'])
        @include('product.section.exploreOtherProduct', ['current' => 'i'])
        @include('product.section.reviews')

@endsection
