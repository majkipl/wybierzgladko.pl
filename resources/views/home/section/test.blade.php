<section class="test py--70" id="test">
    <div class="container">
        <div class="row text-center mb--60">
            <div class="col-12 text-center wow fadeInUp" data-wow-duration="2s">
                <h2 class="text-uppercase">Zastanawiasz się, które żelazko spełni Twoje potrzeby?<br />
                    <span class="text--none">Rozwiąż test i</span> WYBIERZ GŁADKO!</h2>
            </div>
        </div>

        <div class="row text-center mb--30">
            <div class="col-12 col-xl-10 offset-xl-1 text-center wow fadeInUp" data-wow-duration="2s">
                <ul id="quiz">
                    <li id="win-psu" class="d-none">
                        <div class="win-container px--15 px-md--0">
                            <div class="row row-eq-height">
                                <div class="col-12 col-md-5 d-flex flex-column align-items-center justify-content-center px--0">
                                    <img src="{{ asset('images/win-psu.png') }}" alt="Power Steam Ultra" />
                                </div>
                                <div class="col-12 col-md-7 text-left py--40 pr--50">
                                    <h2 class="text-uppercase mb--30">POWER STEAM ULTRA</h2>
                                    <p class="mb--40">Wygląda na to, że potrzebujesz niezawodnego urządzenia, które poradzi sobie w wyścigu z czasem i trudnymi materiałami. Najlepszym wyborem będzie Power Steam Ultra. To żelazko to duża moc w bardzo dobrej cenie.</p>

                                    <a href="{{ route('front.product.psu') }}" class="cta-button py--10 px--20 mx--15 ml--0 mb--15 mb-sm--0 d-inline-block">więcej informacji</a>
                                    <a href="#" class="cta-button py--10 px--20 mx-sm--15 d-inline-block popup-open" data-popup="psu">kup teraz</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li id="win-ot" class="d-none">
                        <div class="win-container px--15 px-md--0">
                            <div class="row row-eq-height">
                                <div class="col-12 col-md-5 d-flex flex-column align-items-center justify-content-center px--0">
                                    <img src="{{ asset('images/win-ot.png') }}" alt="One Temperature" />
                                </div>
                                <div class="col-12 col-md-7 text-left py--40 pr--50">
                                    <h2 class="text-uppercase mb--30">ONE TEMPERATURE</h2>
                                    <p class="mb--40">Żelazko, które idealnie spełni Twoje potrzeby, to One Temperature. Dzięki niemu szybko i sprawnie wyprasujesz różne materiały, od jedwabiu po jeans, bez potrzeby regulacji temperatury i bez ryzyka zniszczenia tkanin.</p>

                                    <a href="{{ route('front.product.ot') }}" class="cta-button py--10 px--20 mx--15 ml--0 mb--15 mb-sm--0 d-inline-block">więcej informacji</a>
                                    <a href="#" class="cta-button py--10 px--20 mx-sm--15 d-inline-block popup-open" data-popup="ot">kup teraz</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li id="win-i" class="d-none">
                        <div class="win-container px--15 px-md--0">
                            <div class="row row-eq-height">
                                <div class="col-12 col-md-5 d-flex flex-column align-items-center justify-content-center px--0">
                                    <img src="{{ asset('images/win-i.png') }}" alt="Impact" />
                                </div>
                                <div class="col-12 col-md-7 text-left py--40 pr--50">
                                    <h2 class="text-uppercase mb--30">IMPACT</h2>
                                    <p class="mb--40">Wygląda na to, że potrzebujesz niezawodnego urządzenia do zadań specjalnych! Najlepszym wyborem będzie dla Ciebie funkcjonalne i odporne na upadki żelazko Impact.</p>

                                    <a href="{{ route('front.product.i') }}" class="cta-button py--10 px--20 mx--15 ml--0 mb--15 mb-sm--0 d-inline-block">więcej informacji</a>
                                    <a href="#" class="cta-button py--10 px--20 mx-sm--15 d-inline-block popup-open" data-popup="i">kup teraz</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li id="win-sg" class="d-none">
                        <div class="win-container px--15 px-md--0">
                            <div class="row row-eq-height">
                                <div class="col-12 col-md-5 d-flex flex-column align-items-center justify-content-center px--0">
                                    <img src="{{ asset('images/win-sg.png') }}" alt="Steam Genie" />
                                </div>
                                <div class="col-12 col-md-7 text-left py--40 pr--50">
                                    <h2 class="text-uppercase mb--30">STEAM GENIE</h2>
                                    <p class="mb--40">Do Twojego stylu prasowania idealnie sprawdzi się Ręczny Generator Pary Steam Genie. Dzięki niemu prasowanie stanie się szybkie i przyjemne. I to bez rozkładania deski!</p>

                                    <a href="{{ route('front.product.sg') }}" class="cta-button py--10 px--20 mx--15 ml--0 mb--15 mb-sm--0 d-inline-block">więcej informacji</a>
                                    <a href="#" class="cta-button py--10 px--20 mx-sm--15 d-inline-block popup-open" data-popup="sg">kup teraz</a>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <div class="d-none" id="template">
            <div class="row row-eq-height answers_[answers]" data-answers="[answers]">
                <div class="col-12 text-center question mb--30 color_[random_color]">
                    <div class="content d-flex flex-column align-items-center justify-content-center">
                        <p class="mb--10">[index]/[full]</p>
                        <p class="text-uppercase"><strong>[ask]</strong></p>
                    </div>
                </div>
                <a class="col-12 col-sm-6 answer mb--30" data-ot="[ot0]" data-i="[i0]" data-psu="[psu0]" data-sg="[sg0]">
					<span class="content d-flex align-items-center justify-content-center">
						<spanp>[answer_0]</span>
                    </span>
                </a>
                <a class="col-12 col-sm-6 answer mb--30" data-ot="[ot1]" data-i="[i1]" data-psu="[psu1]" data-sg="[sg1]">
					<span class="content d-flex align-items-center justify-content-center">
						<spanp>[answer_1]</span>
                    </span>
                </a>
                <a class="col-12 col-sm-6 answer mb--30" data-ot="[ot2]" data-i="[i2]" data-psu="[psu2]" data-sg="[sg2]">
					<span class="content d-flex align-items-center justify-content-center">
						<spanp>[answer_2]</span>
                    </span>
                </a>
                <a class="col-12 col-sm-6 answer mb--30" data-ot="[ot3]" data-i="[i3]" data-psu="[psu3]" data-sg="[sg3]">
					<span class="content d-flex align-items-center justify-content-center">
						<spanp>[answer_3]</span>
                    </span>
                </a>
            </div>
        </div>

    </div>
</section>
