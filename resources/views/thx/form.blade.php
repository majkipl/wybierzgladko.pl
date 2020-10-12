@extends('layouts.front')

@section('content')
    <section class="top d-flex flex-row align-items-center justify-content-center" id="top"
             style="background-image: url({{ asset('images/form-baner.png') }});">
        <h2 class="accent">Dziękujemy</h2>
    </section>

    <section class="thx position-relative py--100" id="thx">
        <div class="section-icon"></div>
        <div class="container mt--30">
            <div class="row">
                <div class="col-12 col-xl-10 offset-xl-1">
                    <div class="bg--primary p--30 p-md--50 p-lg--60 p-xl--70 text-center">
                        <p>Potwierdzenie Twojego zgłoszenia do promocji Myślisz Czajnik Mówisz Russell Hobbs zostało
                            wysłane na adres e-mail podany w formularzu. Sprawdź pocztę i wróć do nas poprzez podany w
                            wiadomości link.</p>
                        <p>Pamiętaj, że wiadomość może znajdować się w SPAMIE. </p>

                        <a href="{{ route('front.home') }}" class="cta-button-primary py--10 px--30 mt--20 mb--0 d-inline-block">
                            <span>wróć do strony głównej &gt;</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
