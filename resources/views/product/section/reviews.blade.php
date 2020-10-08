@if(count($reviews))
    <section class="reviews text-center bg--primary pt--50" id="reviews">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-7 col-md-9 col-lg-7 offset-lg-1 ">
                    <h5 class="accent accent-right-none text-seven-row text-left mb--30"></h5>
                    <h5 class="text-left">Opinie klientów</h5>
                </div>
                <div class="col-12 col-sm-5 col-md-3 lSNav">
                    <a class="lSPrev clear"></a>
                    <a class="lSNext clear"></a>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-10 offset-lg-1 my--30">
                    <ul id="reviewsSlider" class="bg--secondary">
                        @foreach($reviews as $review)
                            <li class="r1 pt--80 pb--90">
                                <img src="{{ asset('images/svg/quota.svg') }}" alt="quote" class="mb--30" />
                                <h5 class="text-center mb--30">Marzena</h5>
                                <p class="pb--20 px-sm--30">{{ $review->content }}</p>
                                <h6 class="mt--40">
                                    <a href="https://www.ceneo.pl/89673770#tab=reviews" title="WIĘCEJ" target="_blank" rel="nofollow">WIĘCEJ &gt;</a>
                                </h6>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endif
