<section class="slider d-none d-xl-block" id="baner">
    <ul id="homeHero">

        @if(!isset($showSlide))
            <li class="s1">
                <div class="container">
                    <div class="scene" data-pointer-events="true">

                        <!--zelazko-1-->
                        <div data-depth="0.9" class="l1">
                            <img src="{{ asset('images/slider/s1/s1-l1-1.png') }}" alt="zelazko 1"/>
                            <span>duża moc</span>
                        </div>
                        <div data-depth="1.0" class="l2">
                            <img src="{{ asset('images/slider/s1/s1-l1-2.png') }}" alt="para 1"/>
                        </div>

                        <!--zelazko-2-->
                        <div data-depth="0.7" class="l3">
                            <img src="{{ asset('images/slider/s1/s1-l2-1.png') }}" alt="zelazko 2"/>
                            <span>bezpieczeństwo</span>
                        </div>
                        <div data-depth="0.8" class="l4">
                            <img src="{{ asset('images/slider/s1/s1-l2-2.png') }}" alt="para 2"/>
                        </div>

                        <!--zelazko-3-->
                        <div data-depth="0.5" class="l5">
                            <img src="{{ asset('images/slider/s1/s1-l3-1.png') }}" alt="zelazko 3"/>
                            <span>odporność</span>
                        </div>
                        <div data-depth="0.6" class="l6">
                            <img src="{{ asset('images/slider/s1/s1-l3-2.png') }}" alt="para 3"/>
                        </div>

                        <!--zelazko-4-->
                        <a data-depth="0.3" class="l7">
                            <img src="{{ asset('images/slider/s1/s1-l4-1.png') }}" alt="zelazko 4"/>
                            <span>wygoda</span>
                        </a>
                        <div data-depth="0.4" class="l8">
                            <img src="{{ asset('images/slider/s1/s1-l4-2.png') }}" alt="para 4"/>
                        </div>

                        <!--satysfakcja gwarantowana-->
                        <div data-depth="0.1" class="l9">
                            <img src="{{ asset('images/slider/s1/s1-2.png') }}" alt="60dni"/>
                        </div>

                        <!--różne potrzeby-->
                        <div data-depth="0.2" class="l10">
                            <span>RÓŻNE <br/>POTRZEBY</span>
                            <div class="shape my--10"></div>
                            <span>TA SAMA <br/>SATYSFAKCJA</span>
                        </div>

                        <!--dowiedz się więcej-->
                        <div data-depth="0.3" class="l11">
                            <a href="#test" class="cta-button-reverse py--10 px--60 scroll-to">DOWIEDZ SIĘ WIĘCEJ</a>
                        </div>
                    </div>
                </div>
            </li>
        @endif

        @if (!isset($showSlide) || $showSlide === "psu")
            <li class="s2 bg-black">
                <div class="container w-100 h-100">
                    <div class="scene" data-pointer-events="true" style="min-height: 650px;">

                        <!--shape empty space-->
                        <div data-depth="0.9" class="l0">
                            <span class="d-block w-100 shape-empty-space"></span>
                        </div>

                        <!--zelazko-1-->
                        <div data-depth="0.7" class="l1">
                            <img src="{{ asset('images/slider/s2/s2-l4.png') }}" alt="psu"/>
                        </div>

                        <!--para-4-->
                        <div data-depth="0.3" class="l5 cloud-4">
                            <img src="{{ asset('images/slider/s3/s3-l2.png') }}" alt="para"/>
                        </div>

                        <!--para-3-->
                        <div data-depth="0.4" class="l4 cloud-3">
                            <img src="{{ asset('images/slider/s2/s2-l3.png') }}" alt="para"/>
                        </div>

                        <!--para-2-->
                        <div data-depth="0.6" class="l2 cloud-2">
                            <img src="{{ asset('images/slider/s2/s2-l2.png') }}" alt="para"/>
                        </div>

                        <!--para-1-->
                        <div data-depth="0.5" class="l3 cloud-1">
                            <img src="{{ asset('images/slider/s2/s2-l1.png') }}" alt="para"/>
                        </div>


                        <!--satysfakcja gwarantowana-->
                        <div data-depth="0.1" class="l9">
                            <img src="{{ asset('images/slider/60dni-small.png') }}" alt="60dni"/>
                        </div>

                        <!--różne potrzeby-->
                        <div data-depth="0.2" class="l10">
                            <span class="text-uppercase">Duża moc w <br/>dobrej cenie</span>
                        </div>

                        <!--dowiedz się więcej-->
                        <div data-depth="0.3" class="l11">
                            @if($isHome)
                                <a href="{{ route('front.product.psu') }}" class="cta-button-reverse py--10 px--60">DOWIEDZ SIĘ
                                    WIĘCEJ</a>
                            @else
                                <a href="#whereBuy" class="cta-button-reverse py--10 px--60 buy scroll-to">KUP TERAZ</a>
                            @endif
                        </div>

                    </div>
                </div>
            </li>
        @endif

        @if (!isset($showSlide) || $showSlide === "ot")
            <li class="s3">
                <div class="container w-100 h-100">
                    <div class="scene" data-pointer-events="true" style="min-height: 650px;">

                        <!--shape empty space-->
                        <div data-depth="0.9" class="l0">
                            <span class="d-block w-100 shape-empty-space"></span>
                        </div>

                        <!--zelazko-1-->
                        <div data-depth="0.7" class="l1">
                            <img src="{{ asset('images/slider/s3/s3-l4.png') }}" alt="ot"/>
                        </div>

                        <!--para-4-->
                        <div data-depth="0.3" class="l5 cloud-4">
                            <img src="{{ asset('images/slider/s3/s3-l5.png') }}" alt="para"/>
                        </div>

                        <!--para-3-->
                        <div data-depth="0.4" class="l4 cloud-3">
                            <img src="{{ asset('images/slider/s3/s3-l3.png') }}" alt="para"/>
                        </div>

                        <!--para-2-->
                        <div data-depth="0.6" class="l2 cloud-2">
                            <img src="{{ asset('images/slider/s3/s3-l2.png') }}" alt="para"/>
                        </div>

                        <!--para-1-->
                        <div data-depth="0.5" class="l3 cloud-1">
                            <img src="{{ asset('images/slider/s3/s3-l1.png') }}" alt="para"/>
                        </div>


                        <!--satysfakcja gwarantowana-->
                        <div data-depth="0.1" class="l9">
                            <img src="{{ asset('images/slider/60dni-small.png') }}" alt="60dni"/>
                        </div>

                        <!--różne potrzeby-->
                        <div data-depth="0.2" class="l10">
                            <span class="text-uppercase">Jedna temperatura <br/>dla wszystkich <br/>tkanin</span>
                        </div>

                        <!--dowiedz się więcej-->
                        <div data-depth="0.3" class="l11">
                            @if($isHome)
                                <a href="{{ route('front.product.ot') }}" class="cta-button-reverse py--10 px--60">DOWIEDZ SIĘ
                                    WIĘCEJ</a>
                            @else
                                <a href="#whereBuy" class="cta-button-reverse py--10 px--60 buy scroll-to">KUP TERAZ</a>
                            @endif
                        </div>

                    </div>
                </div>
            </li>
        @endif

        @if (!isset($showSlide) || $showSlide === "i")
            <li class="s4">
                <div class="container w-100 h-100">
                    <div class="scene" data-pointer-events="true" style="min-height: 650px;">

                        <!--shape empty space-->
                        <div data-depth="0.9" class="l0">
                            <span class="d-block w-100 shape-empty-space"></span>
                        </div>

                        <!--zelazko-1-->
                        <div data-depth="0.7" class="l1">
                            <img src="{{ asset('images/slider/s4/s4-l4.png') }}" alt="i"/>
                        </div>

                        <!--para-4-->
                        <div data-depth="0.3" class="l5 cloud-4">
                            <img src="{{ asset('images/slider/s4/s4-l5.png') }}" alt="para"/>
                        </div>

                        <!--para-3-->
                        <div data-depth="0.4" class="l4 cloud-3">
                            <img src="{{ asset('images/slider/s4/s4-l3.png') }}" alt="para"/>
                        </div>

                        <!--para-2-->
                        <div data-depth="0.6" class="l2 cloud-2">
                            <img src="{{ asset('images/slider/s4/s4-l2.png') }}" alt="para"/>
                        </div>

                        <!--para-1-->
                        <div data-depth="0.5" class="l3 cloud-1">
                            <img src="{{ asset('images/slider/s4/s4-l1.png') }}" alt="para"/>
                        </div>


                        <!--satysfakcja gwarantowana-->
                        <div data-depth="0.1" class="l9">
                            <img src="{{ asset('images/slider/60dni-small.png') }}" alt="60dni"/>
                        </div>

                        <!--różne potrzeby-->
                        <div data-depth="0.2" class="l10">
                            <span class="text-uppercase">Odporność <br/>na upadki</span>
                        </div>

                        <!--dowiedz się więcej-->
                        <div data-depth="0.3" class="l11">
                            @if($isHome)
                                <a href="{{ route('front.product.i') }}" class="cta-button-reverse py--10 px--60">DOWIEDZ SIĘ WIĘCEJ</a>
                            @else
                                <a href="#whereBuy" class="cta-button-reverse py--10 px--60 buy scroll-to">KUP TERAZ</a>
                            @endif
                        </div>

                    </div>
                </div>
            </li>
        @endif

        @if (!isset($showSlide) || $showSlide === "pgr")
            <li class="s5">
                <div class="container w-100 h-100">
                    <div class="scene" data-pointer-events="true" style="min-height: 650px;">

                        <!--shape empty space-->
                        <div data-depth="0.9" class="l0">
                            <span class="d-block w-100 shape-empty-space"></span>
                        </div>

                        <!--zelazko-1-->
                        <div data-depth="0.7" class="l1">
                            <img src="{{ asset('images/slider/s5/s5-l4.png') }}" alt="pgr"/>
                        </div>

                        <!--para-4-->
                        <div data-depth="0.3" class="l5 cloud-4">
                            <img src="{{ asset('images/slider/s5/s5-l5.png') }}" alt="para"/>
                        </div>

                        <!--para-3-->
                        <div data-depth="0.4" class="l4 cloud-3">
                            <img src="{{ asset('images/slider/s5/s5-l3.png') }}" alt="para"/>
                        </div>

                        <!--para-2-->
                        <div data-depth="0.6" class="l2 cloud-2">
                            <img src="{{ asset('images/slider/s5/s5-l2.png') }}" alt="para"/>
                        </div>

                        <!--para-1-->
                        <div data-depth="0.5" class="l3 cloud-1">
                            <img src="{{ asset('images/slider/s5/s5-l1.png') }}" alt="para"/>
                        </div>


                        <!--satysfakcja gwarantowana-->
                        <div data-depth="0.1" class="l9">
                            <img src="{{ asset('images/slider/60dni-black-small.png') }}" alt="60dni"/>
                        </div>

                        <!--różne potrzeby-->
                        <div data-depth="0.2" class="l10">
                            <span class="text-uppercase">Design i <br/>funkcjonalność</span>
                        </div>

                        <!--dowiedz się więcej-->
                        <div data-depth="0.3" class="l11">
                            @if($isHome)
                                <a href="{{ route('front.product.pgr') }}" class="cta-button-reverse py--10 px--60">DOWIEDZ SIĘ
                                    WIĘCEJ</a>
                            @else
                                <a href="#whereBuy" class="cta-button-reverse py--10 px--60 buy scroll-to">KUP TERAZ</a>
                            @endif
                        </div>

                    </div>
                </div>
            </li>
        @endif

        @if (!isset($showSlide) || $showSlide === "sg")
            <li class="s6">
                <div class="container w-100 h-100">
                    <div class="scene" data-pointer-events="true" style="min-height: 650px;">

                        <!--shape empty space-->
                        <div data-depth="0.9" class="l0">
                            <span class="d-block w-100 shape-empty-space"></span>
                        </div>

                        <!--zelazko-1-->
                        <div data-depth="0.7" class="l1">
                            <img src="{{ asset('images/slider/s6/s6-l4.png') }}" alt="sg"/>
                        </div>
                        {*
                        <!--para-4-->
                        <div data-depth="0.3" class="l5 cloud-4">
                            <img src="{{ asset('images/slider/s6/s6-l5.png') }}" alt="para"/>
                        </div>
                        *}

                        <!--para-3-->
                        <div data-depth="0.4" class="l4 cloud-3">
                            <img src="{{ asset('images/slider/s6/s6-l3.png') }}" alt="para"/>
                        </div>

                        <!--para-2-->
                        <div data-depth="0.6" class="l2 cloud-2">
                            <img src="{{ asset('images/slider/s6/s6-l2.png') }}" alt="para"/>
                        </div>

                        <!--para-1-->
                        <div data-depth="0.5" class="l3 cloud-1">
                            <img src="{{ asset('images/slider/s6/s6-l1.png') }}" alt="para"/>
                        </div>


                        <!--satysfakcja gwarantowana-->
                        <div data-depth="0.1" class="l9">
                            <img src="{{ asset('images/slider/60dni-small.png') }}" alt="60dni"/>
                        </div>

                        <!--różne potrzeby-->
                        <div data-depth="0.2" class="l10">
						<span class="text-uppercase">Szybkie i wygodne <br/>prasowanie <br/>
bez deski</span>
                        </div>

                        <!--dowiedz się więcej-->
                        <div data-depth="0.3" class="l11">
                            @if($isHome)
                                <a href="{{ route('front.product.sg') }}" class="cta-button-reverse py--10 px--60">DOWIEDZ SIĘ WIĘCEJ</a>
                            @else
                                <a href="#whereBuy" class="cta-button-reverse py--10 px--60 buy scroll-to">KUP TERAZ</a>
                            @endif
                        </div>

                    </div>
                </div>
            </li>
        @endif

        @if (!isset($showSlide) || $showSlide === "cot")
            <li class="s7">
                <div class="container w-100 h-100">
                    <div class="scene" data-pointer-events="true" style="min-height: 650px;">

                        <!--shape empty space-->
                        <div data-depth="0.9" class="l0">
                            <span class="d-block w-100 shape-empty-space"></span>
                        </div>

                        <!--zelazko-1-->
                        <div data-depth="0.7" class="l1">
                            <img src="{{ asset('images/slider/s7/s7-l4.png') }}" alt="sg"/>
                        </div>
                        {*
                        <!--para-4-->
                        <div data-depth="0.3" class="l5 cloud-4">
                            <img src="{{ asset('images/slider/s7/s7-l5.png') }}" alt="para"/>
                        </div>
                        *}

                        <!--para-3-->
                        <div data-depth="0.4" class="l4 cloud-3">
                            <img src="{{ asset('images/slider/s7/s7-l3.png') }}" alt="para"/>
                        </div>

                        <!--para-2-->
                        <div data-depth="0.6" class="l2 cloud-2">
                            <img src="{{ asset('images/slider/s7/s7-l2.png') }}" alt="para"/>
                        </div>

                        <!--para-1-->
                        <div data-depth="0.5" class="l3 cloud-1">
                            <img src="{{ asset('images/slider/s7/s7-l1.png') }}" alt="para"/>
                        </div>


                        <!--satysfakcja gwarantowana-->
                        <div data-depth="0.1" class="l9">
                            <img src="{{ asset('images/slider/60dni-small.png') }}" alt="60dni"/>
                        </div>

                        <!--różne potrzeby-->
                        <div data-depth="0.2" class="l10">
                            <span class="text-uppercase">WYGODNE PRASOWANIE <br/>BEZ KABLA <br/>I REGULOWANIA <br/>TEMPERATURY</span>
                        </div>

                        <!--dowiedz się więcej-->
                        <div data-depth="0.3" class="l11">
                            @if($isHome)
                                <a href="{{ route('front.product.cot') }}" class="cta-button-reverse py--10 px--60">DOWIEDZ
                                    SIĘ
                                    WIĘCEJ</a>
                            @else
                                <a href="#whereBuy" class="cta-button-reverse py--10 px--60 buy scroll-to">KUP TERAZ</a>
                            @endif
                        </div>

                    </div>
                </div>
            </li>
        @endif

        @if (!isset($showSlide) || $showSlide === "cx")
            <li class="s8">
                <div class="container w-100 h-100">
                    <div class="scene" data-pointer-events="true" style="min-height: 650px;">

                        <!--shape empty space-->
                        <div data-depth="0.9" class="l0">
                            <span class="d-block w-100 shape-empty-space"></span>
                        </div>

                        <!--zelazko-1-->
                        <div data-depth="0.7" class="l1">
                            <img src="{{ asset('images/slider/s8/s8-l4.png') }}" alt="sg"/>
                        </div>
                        {*
                        <!--para-4-->
                        <div data-depth="0.3" class="l5 cloud-4">
                            <img src="{{ asset('images/slider/s8/s8-l5.png') }}" alt="para"/>
                        </div>
                        *}

                        <!--para-3-->
                        <div data-depth="0.4" class="l4 cloud-3">
                            <img src="{{ asset('images/slider/s8/s8-l3.png') }}" alt="para"/>
                        </div>

                        <!--para-2-->
                        <div data-depth="0.6" class="l2 cloud-2">
                            <img src="{{ asset('images/slider/s8/s8-l2.png') }}" alt="para"/>
                        </div>

                        <!--para-1-->
                        <div data-depth="0.5" class="l3 cloud-1">
                            <img src="{{ asset('images/slider/s8/s8-l1.png') }}" alt="para"/>
                        </div>

                        <!--satysfakcja gwarantowana-->
                        <div data-depth="0.1" class="l9">
                            <img src="{{ asset('images/slider/60dni-small.png') }}" alt="60dni"/>
                        </div>

                        <!--różne potrzeby-->
                        <div data-depth="0.2" class="l10">
                            <span class="text-uppercase">SZYBKIE <br/>PRASOWANIE <br/>W PIĘKNYM STYLU </span>
                        </div>

                        <!--dowiedz się więcej-->
                        <div data-depth="0.3" class="l11">
                            @if($isHome)
                                <a href="{{ route('front.product.cx') }}" class="cta-button-reverse py--10 px--60">DOWIEDZ SIĘ
                                    WIĘCEJ</a>
                            @else
                                <a href="#whereBuy" class="cta-button-reverse py--10 px--60 buy scroll-to">KUP TERAZ</a>
                            @endif
                        </div>

                    </div>
                </div>
            </li>
        @endif

    </ul>
</section>
