<section class="hesitate bg--six-row py--100 text-center" id="hesitate" data-url="/niewahaj-sie/">
    <h2 class="accent text-tertiary mt--30">Nadal się wahasz?</h2>
    <h4 class="text-tertiary">pamiętaj, że nic nie tracisz</h4>

    <div class="container mt--60">
        <div class="row">
            <div class="col-12 col-xl-10 offset-xl-1">
                <p class="mb--50">W przypadku, jeśli żelazko nie spełni Twoich oczekiwań, zwrócimy Ci pieniądze. <br/>Wystarczy,
                    że:</p>
            </div>
            <div class="col-12 col-md-4 col-xl-3 offset-xl-1">
                <img src="{{ asset('images/svg/warranty-1.svg') }}" alt="krok 1" class="mb--20"/>
                <p class="px--20">Wypełnisz <a href="{{ route('front.application.form') }}" title="formularz">formularz</a> zwrotu.</p>
            </div>
            <div class="col-12 col-md-4">
                <img src="{{ asset('images/svg/packed.svg') }}" alt="krok 2" class="mb--20"/>
                <p class="px--20">Zapakujesz żelazko i wyślesz je do nas kurierem razem z dowodem zakupu.</p>
            </div>
            <div class="col-12 col-md-4 col-xl-3">
                <img src="{{ asset('images/svg/cashback.svg') }}" alt="krok 3" class="mb--20"/>
                <p class="px--20">Zwrot pieniędzy na podany numer konta nastąpi w ciągu 14 dni roboczych.</p>
            </div>
            <div class="col-12">
                <a href="{{ route('front.application.form') }}" class="cta-button-tertiary py--10 px--30 mt--30 mb--0 d-inline-block">
                    <span>Wypełnij formularz zwrotu &gt;</span>
                </a>
            </div>
        </div>
    </div>
</section>
