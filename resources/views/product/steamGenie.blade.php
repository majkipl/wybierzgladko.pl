@extends('layouts.front')

@section('content')
    @include('home.section.hero', ['isHome' => false, 'showSlide' => "sg"])

    @component( 'components.product.headline', ['title' => 'Ręczny Generator Pary Steam Genie'])
        Prasowanie może być przyjemne! Zwłaszcza, kiedy nie musisz rozkładać ciężkiej deski. Ręczny generator pary to oszczędność miejsca i czasu. Odśwież nim ozdobne podsuszki na kanapie, wygładź wiszące zasłony, przeprasuj sukienkę na chwilę przed przybyciem gości, a nawet zabierz w podróż. Bądź w pełnej gotowości zawsze i wszędzie.
    @endcomponent

    <section class="features text-center bg--six-row pb--90" id="features">
        <div class="container">
            <div class="row f1 features-ti d-flex">
                <div class="col-12 col-sm-7 col-md-7 col-lg-6 col-xl-5 offset-lg-1 offset-xl-2 d-flex flex-column justify-content-center text-right features-t py--30 py-sm--40 py-md--30 order-0">
                    <h5 class="accent accent-left-none text-tertiary text-right mb--15"></h5>
                    <h5 class="text-tertiary mb--30">Wszechstronność</h5>
                    <p>Dzięki trzem nakładkom parownica ręczna jest wszechstronna i możesz ją używać do wielu różnych materiałów i przedmiotów. Nakładka do delikatnych tkanin ułatwi prasowanie jedwabiu i lekkich firanek. Specjalna nakładka do tapicerki czyści i odświeża sofy, materace czy pościel. A frędzle pomogą właścicielom zwierząt domowych w skutecznym usuwaniu sierści z tapicerki i dywanów. </p>
                </div>
                <div class="col-12 col-sm-5 col-md-5 col-lg-5 col-xl-5 features-i order-1">
                    @component( 'components.product.image', ['name' => 'sg/sg-1', 'alt' => 'Wszechstronność'])
                    @endcomponent
                </div>
            </div>
            <div class="row f2 features-it d-flex">
                <div class="col-12 col-sm-5 col-md-5 col-lg-5 col-xl-5 features-i order-1 order-sm-0">
                    @component( 'components.product.image', ['name' => 'sg/sg-2', 'alt' => 'Gotowy do pracy w chwilę'])
                    @endcomponent
                </div>
                <div class="col-12 col-sm-7 col-md-7 col-lg-6 col-xl-5 d-flex flex-column justify-content-center text-left features-t py--30 py-sm--40 py-md--30 order-0 order-sm-1">
                    <h5 class="accent accent-right-none text-tertiary text-left mb--15"></h5>
                    <h5 class="text-tertiary mb--30">Gotowy do pracy w chwilę</h5>
                    <p>Prasowanie możesz zacząć już w niespełna 45 sekund od włączenia. Spokojnie zdążysz przygotować swoje ubranie do pracy. Nawet jeśli zaśpisz.</p>
                </div>
            </div>
            <div class="row f3 features-ti d-flex">
                <div class="col-12 col-sm-7 col-md-7 col-lg-6 col-xl-5 offset-lg-1 offset-xl-2 d-flex flex-column justify-content-center text-right features-t py--30 py-sm--40 py-md--30 order-0">
                    <h5 class="accent accent-left-none text-tertiary text-right mb--15"></h5>
                    <h5 class="text-tertiary mb--30">Nie trać czasu</h5>
                    <p>Duży zbiornik na wodę o pojemności aż 220 ml pozwoli ci na 11 minut stałego generowania pary. Zdziwisz się, jak dużo ubrań wyprasujesz w tym czasie!</p>
                </div>
                <div class="col-12 col-sm-5 col-md-5 col-lg-5 col-xl-5 features-i order-1">
                    @component( 'components.product.image', ['name' => 'sg/sg-3', 'alt' => 'Nie trać czasu'])
                    @endcomponent
                </div>
            </div>
            <div class="row f4 features-it d-flex">
                <div class="col-12 col-sm-5 col-md-5 col-lg-5 col-xl-5 features-i order-1 order-sm-0">
                    @component( 'components.product.image', ['name' => 'sg/sg-4', 'alt' => 'Bezpieczeństwo'])
                    @endcomponent
                </div>
                <div class="col-12 col-sm-7 col-md-7 col-lg-6 col-xl-5 d-flex flex-column justify-content-center text-left features-t py--30 py-sm--40 py-md--30 order-0 order-sm-1">
                    <h5 class="accent accent-right-none text-tertiary text-left mb--15"></h5>
                    <h5 class="text-tertiary mb--30">Bezpieczeństwo</h5>
                    <p>Funkcja automatycznego wyłączania, gdy urządzenie nie jest używane, gwarantuje bezpieczeństwo tobie i twojemu domowi.</p>
                </div>
            </div>
        </div>
    </section>

        @include('product.section.whereBuy', ['productSlug' => 'i'])
        @include('product.section.exploreOtherProduct', ['current' => 'i'])
        @include('product.section.reviews')

@endsection
