<section class="hero" id="hero" data-url="{{ route('front.home') }}">
    <ul id="homeHero">

        @if (!isset($showSlide) || $showSlide === "ccs")
            <li class="s2">
                <div class="container h--100 d-none d-xl-block">
                    <div class="row h--100">
                        <div
                            class="col-12 col-xl-5 text-center pt--150 pb--50 h--100 d-flex flex-column justify-content-around">
                            <div>
                                <img src="{{ asset('images/stemp.png') }}" alt="pieczątka" class="stamp"/>
                            </div>

                            <h5 class="desc pt--60">Chroń kolory swoich ubrań <br/>z żelazkiem <br/>COLOUR CONTROL
                                SUPREME
                            </h5>

                            <div>
                                <img src="{{ asset('images/svg/fiz.svg') }}" alt="fiź" class="fiz w--40"/>
                            </div>

                            @if (isset($showSlide) && $showSlide !== "ccs")
                                <div>
                                    <a href="{{ route('front.product.ccs') }}"
                                       class="cta-button-primary py--10 px--30 d-inline-block mb--0" title="poznaj żelazko">
                                        <span>poznaj żelazko</span>
                                    </a>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
                <a href="{{ route('front.product.ccs') }}" class="mobile d-block d-xl-none w--100 h--100"
                   title="poznaj żelazko"></a>
            </li>
        @endif

        @if (!isset($showSlide) || $showSlide === "ce")
            <li class="s3">
                <div class="container h--100 d-none d-xl-block">
                    <div class="row h--100">
                        <div
                            class="col-12 col-xl-5 text-center pt--150 pb--50 h--100 d-flex flex-column justify-content-around">
                            <div>
                                <img src="{{ asset('images/stemp.png') }}" alt="pieczątka" class="stamp"/>
                            </div>

                            <h5 class="desc pt--60">Wyraź swój styl <br/>z eleganckim żelazkiem <br/>COPPER EXPRESS</h5>

                            <div>
                                <img src="{{ asset('images/svg/fiz.svg') }}" alt="fiź" class="fiz w--40"/>
                            </div>

                            @if (isset($showSlide) && $showSlide !== "ce")
                                <div>
                                    <a href="{{ route('front.product.cx') }}" class="cta-button-primary py--10 px--30 d-inline-block mb--0"
                                       title="poznaj żelazko">
                                        <span>poznaj żelazko</span>
                                    </a>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
                <a href="{{ route('front.product.cx') }}" class="mobile d-block d-xl-none w--100 h--100" title="poznaj żelazko"></a>
            </li>
        @endif

        @if (!isset($showSlide) || $showSlide === "cot")
            <li class="s4">
                <div class="container h--100 d-none d-xl-block">
                    <div class="row h--100">
                        <div
                            class="col-12 col-xl-5 text-center pt--150 pb--50 h--100 d-flex flex-column justify-content-around">
                            <div>
                                <img src="{{ asset('images/stemp.png') }}" alt="pieczątka" class="stamp"/>
                            </div>

                            <h5 class="desc pt--60">Wygodne prasowanie <br/>bez kabla i regulacji <br/> temperatury z
                                żelazkiem <br/>CORDLESS ONE TEMPERATURE</h5>

                            <div>
                                <img src="{{ asset('images/svg/fiz.svg') }}" alt="fiź" class="fiz w--40"/>
                            </div>

                            @if (isset($showSlide) && $showSlide !== "cot")
                                <div>
                                    <a href="{{ route('front.product.cot') }}"
                                       class="cta-button-primary py--10 px--30 d-inline-block mb--0" title="poznaj żelazko">
                                        <span>poznaj żelazko</span>
                                    </a>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
                <a href="{{ route('front.product.cot') }}" class="mobile d-block d-xl-none w--100 h--100"
                   title="poznaj żelazko"></a>
            </li>
        @endif

        @if (!isset($showSlide) || $showSlide === "i")
            <li class="s5">
                <div class="container h--100 d-none d-xl-block">
                    <div class="row h--100">
                        <div
                            class="col-12 col-xl-5 text-center pt--150 pb--50 h--100 d-flex flex-column justify-content-around">
                            <div>
                                <img src="{{ asset('images/stemp.png') }}" alt="pieczątka" class="stamp"/>
                            </div>

                            <h5 class="desc pt--60">Działaj bez obaw z odpornym <br/>na upadki i zniszczenia <br/>żelazkiem
                                IMPACT</h5>

                            <div>
                                <img src="{{ asset('images/svg/fiz.svg') }}" alt="fiź" class="fiz w--40"/>
                            </div>

                            @if (isset($showSlide) && $showSlide !== "i")
                                <div>
                                    <a href="{{ route('front.product.i') }}" class="cta-button-primary py--10 px--30 d-inline-block mb--0"
                                       title="poznaj żelazko">
                                        <span>poznaj żelazko</span>
                                    </a>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
                <a href="{{ route('front.product.i') }}" class="mobile d-block d-xl-none w--100 h--100" title="poznaj żelazko"></a>
            </li>
        @endif

        @if (!isset($showSlide) || $showSlide === "ot")
            <li class="s6">
                <div class="container h--100 d-none d-xl-block">
                    <div class="row h--100">
                        <div
                            class="col-12 col-xl-5 text-center pt--150 pb--50 h--100 d-flex flex-column justify-content-around">
                            <div>
                                <img src="{{ asset('images/stemp.png') }}" alt="pieczątka" class="stamp"/>
                            </div>

                            <h5 class="desc pt--60">Prasuj bez potrzeby <br/>regulacji temperatury <br/>z żelazkiem ONE
                                TEMPERATURE</h5>

                            <div>
                                <img src="{{ asset('images/svg/fiz.svg') }}" alt="fiź" class="fiz w--40"/>
                            </div>

                            @if (isset($showSlide) && $showSlide !== "ot")
                                <div>
                                    <a href="{{ route('front.product.ot') }}"
                                       class="cta-button-primary py--10 px--30 d-inline-block mb--0"
                                       title="poznaj żelazko">
                                        <span>poznaj żelazko</span>
                                    </a>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
                <a href="{{ route('front.product.ot') }}" class="mobile d-block d-xl-none w--100 h--100" title="poznaj żelazko"></a>
            </li>
        @endif

        @if (!isset($showSlide) || $showSlide === "pgr")
            <li class="s7">
                <div class="container h--100 d-none d-xl-block">
                    <div class="row h--100">
                        <div
                            class="col-12 col-xl-5 text-center pt--150 pb--50 h--100 d-flex flex-column justify-content-around">
                            <div>
                                <img src="{{ asset('images/stemp.png') }}" alt="pieczątka" class="stamp"/>
                            </div>

                            <h5 class="desc pt--60">Ciesz się funkcjonalnym <br/>i stylowym żelazkiem <br/>PEARL GLIDE
                                ROSE
                            </h5>

                            <div>
                                <img src="{{ asset('images/svg/fiz.svg') }}" alt="fiź" class="fiz w--40"/>
                            </div>

                            @if (isset($showSlide) && $showSlide !== "pgr")
                                <div>
                                    <a href="{{ route('front.product.pgr') }}"
                                       class="cta-button-primary py--10 px--30 d-inline-block mb--0"
                                       title="poznaj żelazko">
                                        <span>poznaj żelazko</span>
                                    </a>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
                <a href="{{ route('front.product.pgr') }}" class="mobile d-block d-xl-none w--100 h--100" title="poznaj żelazko"></a>
            </li>
        @endif

        @if (!isset($showSlide) || $showSlide === "psu")
            <li class="s8">
                <div class="container h--100 d-none d-xl-block">
                    <div class="row h--100">
                        <div
                            class="col-12 col-xl-5 text-center pt--150 pb--50 h--100 d-flex flex-column justify-content-around">
                            <div>
                                <img src="{{ asset('images/stemp.png') }}" alt="pieczątka" class="stamp"/>
                            </div>

                            <h5 class="desc pt--60">Ciesz się dużą mocą żelazka <br/>POWER STEAM ULTRA <br/>w bardzo
                                dobrej
                                cenie!</h5>

                            <div>
                                <img src="{{ asset('images/svg/fiz.svg') }}" alt="fiź" class="fiz w--40"/>
                            </div>

                            @if (isset($showSlide) && $showSlide !== "psu")
                                <div>
                                    <a href="{{ route('front.product.psu') }}"
                                       class="cta-button-primary py--10 px--30 d-inline-block mb--0"
                                       title="poznaj żelazko">
                                        <span>poznaj żelazko</span>
                                    </a>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
                <a href="{{ route('front.product.psu') }}" class="mobile d-block d-xl-none w--100 h--100" title="poznaj żelazko"></a>
            </li>
        @endif

        @if (!isset($showSlide) || $showSlide === "qss")
            <li class="s9">
                <div class="container h--100 d-none d-xl-block">
                    <div class="row h--100">
                        <div
                            class="col-12 col-xl-5 text-center pt--150 pb--50 h--100 d-flex flex-column justify-content-around">
                            <div>
                                <img src="{{ asset('images/stemp.png') }}" alt="pieczątka" class="stamp"/>
                            </div>

                            <h5 class="desc pt--60">Pożegnaj zagniecenia <br/>jednym ruchem <br/>z cichą stacją parową
                                <br/>QUIET
                                SUPER STEAM</h5>

                            <div>
                                <img src="{{ asset('images/svg/fiz.svg') }}" alt="fiź" class="fiz w--40"/>
                            </div>

                            @if (isset($showSlide) && $showSlide !== "qss")
                                <div>
                                    <a href="{{ route('front.product.qss') }}"
                                       class="cta-button-primary py--10 px--30 d-inline-block mb--0"
                                       title="poznaj żelazko">
                                        <span>poznaj żelazko</span>
                                    </a>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
                <a href="{{ route('front.product.qss') }}" class="mobile d-block d-xl-none w--100 h--100" title="poznaj żelazko"></a>
            </li>
        @endif

        @if (!isset($showSlide) || $showSlide === "sg")
            <li class="s10">
                <div class="container h--100 d-none d-xl-block">
                    <div class="row h--100">
                        <div
                            class="col-12 col-xl-5 text-center pt--150 pb--50 h--100 d-flex flex-column justify-content-around">
                            <div>
                                <img src="{{ asset('images/stemp.png') }}" alt="pieczątka" class="stamp"/>
                            </div>

                            <h5 class="desc pt--60">Prasuj wygodnie <br/>bez rozkładania deski <br/>z parownicą ręczną
                                <br/>STEAM
                                GENIE</h5>

                            <div>
                                <img src="{{ asset('images/svg/fiz.svg') }}" alt="fiź" class="fiz w--40"/>
                            </div>

                            @if (isset($showSlide) && $showSlide !== "sg")
                                <div>
                                    <a href="{{ route('front.product.sg') }}" class="cta-button-primary py--10 px--30 d-inline-block mb--0"
                                       title="poznaj żelazko">
                                        <span>poznaj żelazko</span>
                                    </a>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
                <a href="{{ route('front.product.sg') }}" class="mobile d-block d-xl-none w--100 h--100" title="poznaj żelazko"></a>
            </li>
        @endif
    </ul>
</section>
