@extends('layouts.front')

@section('content')
    @include('home.section.baner', ['isHome' => false, 'showSlide' => "pgr"])
    @include('home.section.banerRwd', ['isHome' => false, 'showSlide'=>"pgr", 'includeClass' => "product-page"])

    <section class="product pearl-glide-rose py--70" id="pearlGlideRose">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-10 offset-lg-1 text-center wow fadeInUp" data-wow-duration="1s"
                     data-wow-delay="0.5s">
                    <h2 class="text-uppercase mb--50">Żelazko Pearl Glide</h2>

                    <p class="mb--40">Pearl Glide to bez wątpienia najbardziej stylowe żelazko z naszej oferty. Dzięki
                        niemu prasowanie przestaje być nudne! Ale design to nie wszystko. Urządzenie zachwyci Cię dużą
                        mocą, gładkim poślizgiem, wytrzymałością i szeregiem innych przydatnych funkcji. </p>
                </div>
            </div>

            <div class="row row-eq-height pb--30">
                <div
                    class="col-12 col-sm-6 col-lg-5 offset-lg-2 d-flex flex-column align-items-left justify-content-center order-1 order-sm-0 mt--30 mt-sm--0 text-center text-sm-left wow fadeInUp"
                    data-wow-duration="1s" data-wow-delay="0.5s">
                    <h3 class="text-uppercase mb--0">Niepowtarzalny styl</h3>

                    <div class="shape my--20 mx--auto mx-sm--0"></div>

                    <p>Zachwyć się modnym, perłowo-różowym wykończeniem z elementami różowego złota i pozwól, by Twoje
                        codzienne obowiązki stały się przyjemniejsze.</p>
                </div>
                <div
                    class="col-12 col-sm-6 col-lg-4 d-flex flex-column align-items-center justify-content-center order-0 order-sm-1 wow fadeInUp"
                    data-wow-duration="1s" data-wow-delay="0.75s">
                    <img src="{{ asset('images/products/pgr/1.jpg') }}" alt="Niepowtarzalny styl"
                         class="d-block product-circle"/>
                </div>
            </div>

            <div class="row row-eq-height pb--30">
                <div
                    class="col-12 col-sm-6 col-lg-4 offset-lg-1 d-flex flex-column align-items-center justify-content-center wow fadeInUp"
                    data-wow-duration="1s" data-wow-delay="0.75s">
                    <img src="{{ asset('images/products/pgr/2.jpg') }}" alt="50% płynniejsze prasowanie"
                         class="d-block product-circle"/>
                </div>
                <div
                    class="col-12 col-sm-6 col-lg-6 offset-lg-1 d-flex flex-column align-items-left justify-content-center mt--30 mt-sm--0 text-center text-sm-left wow fadeInUp"
                    data-wow-duration="1s" data-wow-delay="0.5s">
                    <h3 class="text-uppercase mb--0">50% płynniejsze prasowanie</h3>

                    <div class="shape my--20 mx--auto mx-sm--0"></div>

                    <p>Ceramiczna stopa z perłową powłoką zapewni Ci 50% gładszy poślizg, dla jeszcze łatwiejszego
                        prasowania.</p>
                </div>
            </div>

            <div class="row row-eq-height pb--30">
                <div
                    class="col-12 col-sm-6 col-lg-5 offset-lg-2 d-flex flex-column align-items-left justify-content-center order-1 order-sm-0 mt--30 mt-sm--0 text-center text-sm-left wow fadeInUp"
                    data-wow-duration="1s" data-wow-delay="0.5s">
                    <h3 class="text-uppercase mb--0">Duża moc pary</h3>

                    <div class="shape my--20 mx--auto mx-sm--0"></div>

                    <p>Duże uderzenie pary, aż 150 g na minutę, oraz stała dystrybucja pary o wartości 40 g na minutę
                        znacznie ułatwiają prasowanie, a Ty masz więcej czasu dla siebie.</p>
                </div>
                <div
                    class="col-12 col-sm-6 col-lg-4 d-flex flex-column align-items-center justify-content-center order-0 order-sm-1 wow fadeInUp"
                    data-wow-duration="1s" data-wow-delay="0.75s">
                    <img src="{{ asset('images/products/pgr/3.jpg') }}" alt="Duża moc pary"
                         class="d-block product-circle"/>
                </div>
            </div>

            <div class="row row-eq-height pb--30">
                <div
                    class="col-12 col-sm-6 col-lg-4 offset-lg-1 d-flex flex-column align-items-center justify-content-center wow fadeInUp"
                    data-wow-duration="1s" data-wow-delay="0.75s">
                    <img src="{{ asset('images/products/pgr/4.jpg') }}" alt="Zmienna i pionowa para wodna"
                         class="d-block product-circle"/>
                </div>
                <div
                    class="col-12 col-sm-6 col-lg-6 offset-lg-1 d-flex flex-column align-items-left justify-content-center mt--30 mt-sm--0 text-center text-sm-left wow fadeInUp"
                    data-wow-duration="1s" data-wow-delay="0.5s">
                    <h3 class="text-uppercase mb--0">Zmienna i pionowa para wodna</h3>

                    <div class="shape my--20 mx--auto mx-sm--0"></div>

                    <p>Z pewnością spodoba Ci się także funkcja Variable Steam, która pozwala wybrać dokładnie tyle
                        pary, ile potrzebujesz. Walczysz z upartymi zagnieceniami? Wybierz funkcję pionowej pary!</p>
                </div>
            </div>

            <div class="row row-eq-height pb--30">
                <div
                    class="col-12 col-sm-6 col-lg-5 offset-lg-2 d-flex flex-column align-items-left justify-content-center order-1 order-sm-0 mt--30 mt-sm--0 text-center text-sm-left wow fadeInUp"
                    data-wow-duration="1s" data-wow-delay="0.5s">
                    <h3 class="text-uppercase mb--0">Potrójna siła czyszcząca</h3>

                    <div class="shape my--20 mx--auto mx-sm--0"></div>

                    <p>Dzięki funkcji samooczyszczenia i systemowi zapobiegającemu tworzeniu się osadu żelazko będzie
                        służyło Ci sprawnie przed długi czas.</p>
                </div>
                <div
                    class="col-12 col-sm-6 col-lg-4 d-flex flex-column align-items-center justify-content-center order-0 order-sm-1 wow fadeInUp"
                    data-wow-duration="1s" data-wow-delay="0.75s">
                    <img src="{{ asset('images/products/pgr/5.jpg') }}" alt="Potrójna siła czyszcząca"
                         class="d-block product-circle"/>
                </div>
            </div>

        </div>
    </section>

    @include('product.section.whereBuy', ['productSlug' => "pgr"])
    @include('product.section.exploreOtherProduct', ['current' => 'pgr'])

    {{--    <section class="reviews my--70 bg-white wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s" id="reviews"></section>--}}

    @include('home.section.hesitate')

@endsection
