<section class="explore-other-product my--70 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s"
         id="exploreOtherProduct">
    <div class="container">
        <div class="row text-center">
            <div class="col-12">
                <h2 class="text-uppercase my--50">poznaj pozostałe produkty</h2>
            </div>
        </div>
        <div class="row form text-center mb--70">
            <div class="col-12">
                <div class="row row-eq-height products">
                    @if($current != "psu")
                        <div class="col-12 col-sm-6 col-md-2 col-lg-2 text-center mt--60">
                            <a class="power-steam-ultra d-flex flex-column align-items-left justify-content-end w-100 h-100 pt--90 pb--15"
                               href="{{ route('front.product.psu') }}" title="Power Steam Ultra">
                                <img src="{{ asset('images/power-steam-ultra.png') }}" alt="Power Steam Ultra">
                                <span class="d-block">Power <br class="d-none d-xl-block">Steam Ultra</span>
                            </a>
                        </div>
                    @endif
                    @if($current != "ot")
                        <div class="col-12 col-sm-6 col-md-2 col-lg-2 text-center mt--90 mt-md--60">
                            <a class="one-temperature d-flex flex-column align-items-left justify-content-end w-100 h-100 pt--90 pb--15"
                               href="{{ route('front.product.ot') }}" title="One Temperature">
                                <img src="{{ asset('images/one-temperature.png') }}" alt="One Temperature">
                                <span class="d-block">One Temperature</span>
                            </a>
                        </div>
                    @endif
                    @if($current != "i")
                        <div class="col-12 col-sm-6 col-md-2 col-lg-2 text-center mt--90 mt-md--60">
                            <a class="impact w-100 d-flex flex-column align-items-left justify-content-end h-100 pt--90 pb--15"
                               href="{{ route('front.product.i') }}" title="Impact">
                                <img src="{{ asset('images/impact.png') }}" alt="Impact">
                                <span class="d-block">Impact</span>
                            </a>
                        </div>
                    @endif
                    @if($current != "pgr")
                        <div class="col-12 col-sm-6 col-md-2 col-lg-2 text-center mt--90 mt-md--60">
                            <a class="pearl-glide-rose d-flex flex-column align-items-left justify-content-end w-100 h-100 pt--90 pb--15"
                               href="{{ route('front.product.pgr') }}" title="Pearl Glide Rose">
                                <img src="{{ asset('images/pearl-glide-rose.png') }}" alt="Pearl Glide Rose">
                                <span class="d-block">Pearl Glide Rose</span>
                            </a>
                        </div>
                    @endif
                    @if($current != "sg")
                        <div class="col-12 col-sm-6 col-md-2 col-lg-2 text-center mt--90 mt-md--60">
                            <a class="steam-genie d-flex flex-column align-items-left justify-content-end w-100 h-100 pt--90 pb--15"
                               href="{{ route('front.product.sg') }}" title="Steam Genie">
                                <img src="{{ asset('images/steam-genie.png') }}" alt="Steam Genie">
                                <span class="d-block">Steam Genie</span>
                            </a>
                        </div>
                    @endif
                    @if($current != "cot")
                        <div class="col-12 col-sm-6 col-md-2 col-lg-2 text-center mt--90 mt-md--60">
                            <a class="cordless-one-temperature d-flex flex-column align-items-left justify-content-end w-100 h-100 pt--90 pb--15"
                               href="{{ route('front.product.cot') }}" title="Cordless One Temperature">
                                <img src="{{ asset('images/cordless-one-temperature.png') }}"
                                     alt="Cordless One Temperature">
                                <span class="d-block">Cordless One Temperature</span>
                            </a>
                        </div>
                    @endif
                    @if($current != "cx")
                        <div class="col-12 col-sm-6 col-md-2 col-lg-2 text-center mt--90 mt-md--60">
                            <a class="copper-express d-flex flex-column align-items-left justify-content-end w-100 h-100 pt--90 pb--15"
                               href="{{ route('front.product.cx') }}" title="Copper Express">
                                <img src="{{ asset('images/copper-express.png') }}" alt="Copper Express">
                                <span class="d-block">Copper Express</span>
                            </a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
