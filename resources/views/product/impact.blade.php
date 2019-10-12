@extends('layouts.front')

@section('content')
    @include('home.section.baner', ['isHome' => false, 'showSlide' => "i"])
    @include('home.section.banerRwd', ['isHome' => false, 'showSlide'=>"i", 'includeClass' => "product-page"])

    <section class="product impact py--70" id="impact">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-10 offset-lg-1 text-center wow fadeInUp" data-wow-duration="1s"
                     data-wow-delay="0.5s">
                    <h2 class="text-uppercase mb--50">Żelazko Impact</h2>

                    <p class="mb--40">Wytrzymałość to drugie imię żelazka Impact. Dlatego nie martw się, jeśli w
                        ferworze codziennych obowiązków przypadkiem upuścisz je na podłogę lub jeśli strącą je z deski
                        Twoje dzieci podczas zabawy. Dzięki specjalnej obudowie żelazko wytrzyma każdy upadek.</p>
                </div>
            </div>

            <div class="row row-eq-height pb--30">
                <div
                    class="col-12 col-sm-6 col-lg-5 offset-lg-2 d-flex flex-column align-items-left justify-content-center order-1 order-sm-0 mt--30 mt-sm--0 text-center text-sm-left wow fadeInUp"
                    data-wow-duration="1s" data-wow-delay="0.5s">
                    <h3 class="text-uppercase mb--0">WYTRZYMAŁOŚĆ</h3>

                    <div class="shape my--20 mx--auto mx-sm--0"></div>

                    <p>Specjalna powłoka Dura-Coat zabezpiecza żelazko podczas upadków z wysokości do 1,2 m. </p>
                </div>
                <div
                    class="col-12 col-sm-6 col-lg-4 d-flex flex-column align-items-center justify-content-center order-0 order-sm-1 wow fadeInUp"
                    data-wow-duration="1s" data-wow-delay="0.75s">
                    <img src="{{ asset('images/products/i/1.png') }}" alt="WYTRZYMAŁOŚĆ" class="d-block"/>
                </div>
            </div>

            <div class="row row-eq-height pb--30">
                <div
                    class="col-12 col-sm-6 col-lg-4 offset-lg-1 d-flex flex-column align-items-center justify-content-center wow fadeInUp"
                    data-wow-duration="1s" data-wow-delay="0.75s">
                    <img src="{{ asset('images/products/i/2.jpg') }}" alt="AUTOMATYCZNE WYŁĄCZANIE"
                         class="d-block product-circle"/>
                </div>
                <div
                    class="col-12 col-sm-6 col-lg-6 offset-lg-1 d-flex flex-column align-items-left justify-content-center mt--30 mt-sm--0 text-center text-sm-left wow fadeInUp"
                    data-wow-duration="1s" data-wow-delay="0.5s">
                    <h3 class="text-uppercase mb--0">AUTOMATYCZNE WYŁĄCZANIE</h3>

                    <div class="shape my--20 mx--auto mx-sm--0"></div>

                    <p>Nawet jeśli zapomnisz wyłączyć żelazko, ono zrobi to za Ciebie. Wbudowana funkcja samowyłączania
                        robi to na 3 sposoby. Spiesz się bez obaw.</p>
                </div>
            </div>

            <div class="row row-eq-height pb--30">
                <div
                    class="col-12 col-sm-6 col-lg-5 offset-lg-2 d-flex flex-column align-items-left justify-content-center order-1 order-sm-0 mt--30 mt-sm--0 text-center text-sm-left wow fadeInUp"
                    data-wow-duration="1s" data-wow-delay="0.5s">
                    <h3 class="text-uppercase mb--0">PIONOWY STRUMIEŃ PARY</h3>

                    <div class="shape my--20 mx--auto mx-sm--0"></div>

                    <p>Funkcja pionowego strumienia pary sprawdzi się znakomicie przy wyrównywaniu fałd na firankach czy
                        poduszkach. </p>
                </div>
                <div
                    class="col-12 col-sm-6 col-lg-4 d-flex flex-column align-items-center justify-content-center order-0 order-sm-1 wow fadeInUp"
                    data-wow-duration="1s" data-wow-delay="0.75s">
                    <img src="{{ asset('images/products/i/3.jpg') }}" alt="PIONOWY STRUMIEŃ PARY"
                         class="d-block product-circle"/>
                </div>
            </div>

            <div class="row row-eq-height pb--30">
                <div
                    class="col-12 col-sm-6 col-lg-4 offset-lg-1 d-flex flex-column align-items-center justify-content-center wow fadeInUp"
                    data-wow-duration="1s" data-wow-delay="0.75s">
                    <img src="{{ asset('images/products/i/4.jpg') }}" alt="ŁATWE PRASOWANIE"
                         class="d-block product-circle"/>
                </div>
                <div
                    class="col-12 col-sm-6 col-lg-6 offset-lg-1 d-flex flex-column align-items-left justify-content-center mt--30 mt-sm--0 text-center text-sm-left wow fadeInUp"
                    data-wow-duration="1s" data-wow-delay="0.5s">
                    <h3 class="text-uppercase mb--0">ŁATWE PRASOWANIE</h3>

                    <div class="shape my--20 mx--auto mx-sm--0"></div>

                    <p>Duże uderzenie pary, aż 160 g na minutę, oraz stała dystrybucja pary o wartości 45 g na minutę
                        znacznie ułatwiają prasowanie, a Ty masz więcej czasu dla siebie. </p>
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
                    <img src="{{ asset('images/products/i/5.jpg') }}" alt="POTRÓJNA SIŁA CZYSZCZĄCA"
                         class="d-block product-circle"/>
                </div>
            </div>

        </div>
    </section>

    @include('product.section.whereBuy', ['productSlug' => "i"])
    @include('product.section.exploreOtherProduct', ['current' => 'i'])
    @include('product.section.reviews')

    @include('home.section.hesitate')

@endsection
