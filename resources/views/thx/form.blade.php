@extends('layouts.front')

@section('content')
    <section class="thx" id="thx">
        <div class="container">
            <div class="row row-eq-height py--5">
                <div class="col-12 col-lg-6 text-center d-none d-sm-flex flex-column align-items-center justify-content-center position--fixed position-lg--relative opacity--04 opacity-lg--1 wow fadeInUp"
                     data-wow-duration="1s" data-wow-delay="0.5s">
                    <div class="iron-animation position--relative">
                        <img src="{{ asset('images/thx-iron.png') }}" alt="żelazko" class="d-block mx--auto"/>
                        <img src="{{ asset('images/thx-fog-1.png') }}" alt="para wodna"
                             class="d-block mx--auto position--absolute fog-1 cloud-6"/>
                        <img src="{{ asset('images/thx-fog-2.png') }}" alt="para wodna"
                             class="d-block mx--auto position--absolute fog-2 cloud-6"/>
                    </div>
                </div>
                <div class="col-12 col-lg-6 text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.75s">
                    <h2 class="text-uppercase pb-5">DZIĘKUJEMY ZA UDZIAŁ W NASZYM PROGRAMIE, TWOJE ZGŁOSZENIE ZOSTAŁO
                        PRZYJĘTE!</h2>

                    <div class="row row-eq-height">
                        <div class="col-12 col-sm-2"></div>
                        <div class="col-12 col-sm-10 text-left mb--30">
                            <p>Aby dokończyć proces zwrotu żelazka:</p>
                        </div>
                    </div>
                    <div class="row row-eq-height">
                        <div class="col-12 col-sm-2 mb--30">
                            <img src="{{ asset('images/svg/s9.svg') }}" alt="SPAKUJ GO"
                                 class="d-block mx--auto info-icon-svg"/>
                        </div>
                        <div class="col-12 col-sm-10 text-left mb--30 d-flex flex-column align-items-center justify-content-center">
                            <p><strong>SPAKUJ GO</strong> do oryginalnego pudełka wraz ze wszystkimi akcesoriami,
                                instrukcją obsługi i kartą gwarancyjną oraz oryginałem dowodu zakupu</p>
                        </div>
                    </div>
                    <div class="row row-eq-height">
                        <div class="col-12 col-sm-2 mb--30">
                            <img src="{{ asset('images/svg/s10.svg') }}" alt="NADAJ URZĄDZENIE"
                                 class="d-block mx--auto info-icon-svg"/>
                        </div>
                        <div class="col-12 col-sm-10 text-left mb--30 d-flex flex-column align-items-center justify-content-center">
                            <p><strong>NADAJ URZĄDZENIE</strong> kurierem na nasz adres: Highlite Bielecka, Jellinek
                                Spółka Jawna, ul. Pomorska 55/2, 50-217 Wrocław</p>
                        </div>
                    </div>
                    <div class="row row-eq-height">
                        <div class="col-12 col-sm-2 mb--30">
                            <img src="{{ asset('images/svg/s11.svg') }}" alt="OTRZYMAJ ZWROT"
                                 class="d-block mx--auto info-icon-svg"/>
                        </div>
                        <div class="col-12 col-sm-10 text-left mb--30 d-flex flex-column align-items-center justify-content-center">
                            <p><strong>ZWROT GOTÓWKI</strong> nastąpi w ciągu 14 dni kalendarzowych od daty otrzymania
                                zwrotu produktu na numer konta podany w formularzu</p>
                        </div>
                    </div>

                    <a href="/" class="cta-button mt-5 d-inline-block py--10 px--60"><span>STRONA GŁÓWNA</span></a>
                </div>
            </div>
        </div>
    </section>
@endsection
