@extends('layouts.front')

@section('content')
    @include('home.section.hero', ['isHome' => false, 'showSlide' => "qss"])

    @component( 'components.product.headline', ['title' => 'Stacja Parowa Quiet Super Steam'])
        Pożegnaj zagniecenia jednym ruchem! Dzięki wysokiej wydajności pary 315 g i ciśnieniu 8 barów wystarczy jeden ruch, by pozbyć się zagnieceń na ubraniach! Prasowanie jeszcze nigdy nie było tak efektywne i komfortowe! 20% cichsza praca urządzenia i technologia jednej temperatury sprawią, że wreszcie pokochasz domowe obowiązki!
    @endcomponent

    <section class="features text-center bg--six-row pb--90" id="features">
        <div class="container">
            <div class="row f1 features-ti d-flex">
                <div class="col-12 col-sm-7 col-md-7 col-lg-6 col-xl-5 offset-lg-1 offset-xl-2 d-flex flex-column justify-content-center text-right features-t py--30 py-sm--40 py-md--30 order-0">
                    <h5 class="accent accent-left-none text-tertiary text-right mb--15"></h5>
                    <h5 class="text-tertiary mb--30">Jeszcze dłuższa żywotność</h5>
                    <p>Wewnętrzny system usuwania kamienia sprawia, że czyszczenie stacji parowej to pestka! Dzięki temu urządzenie będzie służyło ci naprawdę długo. Wszystko to za sprawą technologii skuteczniejszej niż tefal*. </p>
                    <em class="mt--30">*w porównaniu z tefal gv9832. Zweryfikowano niezależnie</em>
                </div>
                <div class="col-12 col-sm-5 col-md-5 col-lg-5 col-xl-5 features-i order-1">
                    @component( 'components.product.image', ['name' => 'qss/qss-1', 'alt' => 'Jeszcze dłuższa żywotność'])
                    @endcomponent
                </div>
            </div>
            <div class="row f2 features-it d-flex">
                <div class="col-12 col-sm-5 col-md-5 col-lg-5 col-xl-5 features-i order-1 order-sm-0">
                    @component( 'components.product.image', ['name' => 'qss/qss-2', 'alt' => 'Ochrona przed kamieniem'])
                    @endcomponent
                </div>
                <div class="col-12 col-sm-7 col-md-7 col-lg-6 col-xl-5 d-flex flex-column justify-content-center text-left features-t py--30 py-sm--40 py-md--30 order-0 order-sm-1">
                    <h5 class="accent accent-right-none text-tertiary text-left mb--15"></h5>
                    <h5 class="text-tertiary mb--30">Ochrona przed kamieniem</h5>
                    <p>I to na 2 sposoby! Pierwsza linia ochrony przed kamieniem to bajecznie łatwy w czyszczeniu filtr antywapienny wielokrotnego użytku. Wystarczy opłukać go pod bieżącą wodą i ponownie włożyć do stacji. Jak często? Poinformuje cię o tym wbudowana kontrolka. Dla dodatkowej ochrony quiet super steam posiada specjalny system podgrzewania wstępnego, który minimalizuje osadzanie się kamienia wewnątrz urządzenia, dzięki czemu pozostaje ono wydajne, a prasowanie przyjemne.</p>
                </div>
            </div>
            <div class="row f3 features-ti d-flex">
                <div class="col-12 col-sm-7 col-md-7 col-lg-6 col-xl-5 offset-lg-1 offset-xl-2 d-flex flex-column justify-content-center text-right features-t py--30 py-sm--40 py-md--30 order-0">
                    <h5 class="accent accent-left-none text-tertiary text-right mb--15"></h5>
                    <h5 class="text-tertiary mb--30">Teraz możesz prasować w ciszy</h5>
                    <p>Czyli również wtedy, gdy inni domownicy jeszcze śpią. Stacja parowa została wyposażona w technologię, dzięki której urządzenie pracuje aż 20% ciszej*.</p>
                    <em class="mt--30">*w porównaniu z poprzednim modelem</em>
                </div>
                <div class="col-12 col-sm-5 col-md-5 col-lg-5 col-xl-5 features-i order-1">
                    @component( 'components.product.image', ['name' => 'qss/qss-3', 'alt' => 'Teraz możesz prasować w ciszy'])
                    @endcomponent
                </div>
            </div>
            <div class="row f4 features-it d-flex">
                <div class="col-12 col-sm-5 col-md-5 col-lg-5 col-xl-5 features-i order-1 order-sm-0">
                    @component( 'components.product.image', ['name' => 'qss/qss-4', 'alt' => 'Prasuj tak, jak ci wygodnie'])
                    @endcomponent
                </div>
                <div class="col-12 col-sm-7 col-md-7 col-lg-6 col-xl-5 d-flex flex-column justify-content-center text-left features-t py--30 py-sm--40 py-md--30 order-0 order-sm-1">
                    <h5 class="accent accent-right-none text-tertiary text-left mb--15"></h5>
                    <h5 class="text-tertiary mb--30">Prasuj tak, jak ci wygodnie</h5>
                    <p>Rozłóż ubranie na desce lub odśwież bezpośrednio na wieszaku. W quiet super steam masz do dyspozycji funkcję pary pionowej, dzięki czemu możesz dostosować urządzenie do swoich potrzeb. 2750 w mocy, ciśnienie 8 barów i wydajność 315 g bez problemu rozprawią się ze wszelkimi zagnieceniami.</p>
                </div>
            </div>
            <div class="row f5 features-ti d-flex">
                <div class="col-12 col-sm-7 col-md-7 col-lg-6 col-xl-5 offset-lg-1 offset-xl-2 d-flex flex-column justify-content-center text-right features-t py--30 py-sm--40 py-md--30 order-0">
                    <h5 class="accent accent-left-none text-tertiary text-right mb--15"></h5>
                    <h5 class="text-tertiary mb--30">Jedna bezpieczna temperatura</h5>
                    <p>Z quiet super steam nie musisz co chwilę dostosowywać temperatury do rodzaju tkaniny, jaką prasujesz. Urządzenie zostało wyposażone w technologię jednej, optymalnej temperatury, która bezpiecznie usunie zagniecenia zarówno z jeansu, jak i delikatnego jedwabiu. I masz to z głowy!</p>
                </div>
                <div class="col-12 col-sm-5 col-md-5 col-lg-5 col-xl-5 features-i order-1">
                    @component( 'components.product.image', ['name' => 'qss/qss-5', 'alt' => 'Jedna bezpieczna temperatura'])
                    @endcomponent
                </div>
            </div>
            <div class="row f6 features-it d-flex">
                <div class="col-12 col-sm-5 col-md-5 col-lg-5 col-xl-5 features-i order-1 order-sm-0">
                    @component( 'components.product.image', ['name' => 'qss/qss-6', 'alt' => '1,8 l wody, czyli całe pranie na jedno prasowanie'])
                    @endcomponent
                </div>
                <div class="col-12 col-sm-7 col-md-7 col-lg-6 col-xl-5 d-flex flex-column justify-content-center text-left features-t py--30 py-sm--40 py-md--30 order-0 order-sm-1">
                    <h5 class="accent accent-right-none text-tertiary text-left mb--15"></h5>
                    <h5 class="text-tertiary mb--30">1,8 l wody, czyli całe pranie na jedno prasowanie</h5>
                    <p>Pojemność zbiornika 1,8 l pozwoli ci sprawnie wyprasować dużą ilość ubrań - bez ciągłego przerywania, by dolać wodę. A jeśli w końcu jej zabraknie, dostaniesz ostrzeżenie o pustym zbiorniku. Nie musisz więc stale sprawdzać, ile wody jeszcze zostało.</p>
                </div>
            </div>
            <div class="row f7 features-ti d-flex">
                <div class="col-12 col-sm-7 col-md-7 col-lg-6 col-xl-5 offset-lg-1 offset-xl-2 d-flex flex-column justify-content-center text-right features-t py--30 py-sm--40 py-md--30 order-0">
                    <h5 class="accent accent-left-none text-tertiary text-right mb--15"></h5>
                    <h5 class="text-tertiary mb--30">Jeszcze gładszy poślizg</h5>
                    <p>Dzięki ceramicznej stopie żelazka prasujesz bez wysiłku! Równomiernie rozprowadza ciepło, gładko sunąc po tkaninie. Wystarczy jedno przeciągnięcie żelazkiem, by zagniecenia zniknęły.</p>
                </div>
                <div class="col-12 col-sm-5 col-md-5 col-lg-5 col-xl-5 features-i order-1">
                    @component( 'components.product.image', ['name' => 'qss/qss-7', 'alt' => 'Jeszcze gładszy poślizg'])
                    @endcomponent
                </div>
            </div>
            <div class="row f8 features-it d-flex">
                <div class="col-12 col-sm-5 col-md-5 col-lg-5 col-xl-5 features-i order-1 order-sm-0">
                    @component( 'components.product.image', ['name' => 'qss/qss-8', 'alt' => 'Zapomniałaś/eś wyłączyć?'])
                    @endcomponent
                </div>
                <div class="col-12 col-sm-7 col-md-7 col-lg-6 col-xl-5 d-flex flex-column justify-content-center text-left features-t py--30 py-sm--40 py-md--30 order-0 order-sm-1">
                    <h5 class="accent accent-right-none text-tertiary text-left mb--15"></h5>
                    <h5 class="text-tertiary mb--30">Zapomniałaś/eś wyłączyć?</h5>
                    <p>Z quiet super steam nie musisz o tym pamiętać. Stacja parowa wyłączy się automatycznie po 10 minutach bezczynności, jeśli zostawisz ją podłączoną do prądu. Zawsze będziesz wiedzieć, w jakim stanie jest urządzenie, dzięki kontrolce zasilania i temperatury.</p>
                </div>
            </div>
            <div class="row f9 features-ti d-flex">
                <div class="col-12 col-sm-7 col-md-7 col-lg-6 col-xl-5 offset-lg-1 offset-xl-2 d-flex flex-column justify-content-center text-right features-t py--30 py-sm--40 py-md--30 order-0">
                    <h5 class="accent accent-left-none text-tertiary text-right mb--15"></h5>
                    <h5 class="text-tertiary mb--30">1,9 metra swobody i poręczne uchwyty</h5>
                    <p>Quiet super steam ma przewód o długości 1,9 m, dzięki czemu z łatwością wyprasujesz duże powierzchnie, np. pościel. Stacja posiada wbudowany schowek na wąż i wtyczkę, więc wygodnie możesz je tam schować. Dodatkowym udogodnieniem są poręczne uchwyty, które ułatwią ci bezpieczne przenoszenie stacji.</p>
                </div>
                <div class="col-12 col-sm-5 col-md-5 col-lg-5 col-xl-5 features-i order-1">
                    @component( 'components.product.image', ['name' => 'qss/qss-9', 'alt' => '1,9 metra swobody i poręczne uchwyty'])
                    @endcomponent
                </div>
            </div>
        </div>
    </section>

        @include('product.section.whereBuy', ['productSlug' => 'qss'])
        @include('product.section.exploreOtherProduct', ['current' => 'qss'])
        @include('product.section.reviews')

@endsection
