@extends('layouts.front')

@section('content')
    <section class="form" id="form">
        <div class="container">

            <form id="save" method="POST" action="{{ route('front.application.save') }}" class=" wow fadeInUp"
                  data-wow-duration="1s"
                  data-wow-delay="0.1s">
                @csrf

                <div class="row">
                    <div class="col-12 col-lg-10 col-xl-8 offset-lg-1 offset-xl-2 text-center mb--60">
                        <h1 class="text-uppercase">formularz zwrotu</h1>
                    </div>
                </div>

                <div class="row fieldset">
                    <div class="col-12 col-md-6 col-lg-5 col-xl-4 offset-lg-1 offset-xl-2 mb--20">
                        @component( 'components.forms.input.text', [
                                    'name' => 'firstname',
                                    'value' => '',
                                    'placeholder' => 'Imię',
                                    'required' => true,
                                    'max' => 128,
                                    'error' => ''])
                        @endcomponent
                    </div>
                    <div class="col-12 col-md-6 col-lg-5 col-xl-4 mb--20">
                        @component( 'components.forms.input.text', [
                                    'name' => 'lastname',
                                    'value' => '',
                                    'placeholder' => 'Nazwisko',
                                    'required' => true,
                                    'max' => 128,
                                    'error' => ''
                        ])
                        @endcomponent
                    </div>
                    <div class="col-12 col-md-6 col-lg-5 col-xl-4 offset-lg-1 offset-xl-2 mb--20">
                        @component( 'components.forms.input.email', [
                                    'name' => 'email',
                                    'value' => '',
                                    'placeholder' => 'E-mail',
                                    'required' => true,
                                    'max' => 255,
                                    'error' => ''
                        ])
                        @endcomponent
                    </div>
                    <div class="col-12 col-md-6 col-lg-5 col-xl-4 mb--20">
                        @component( 'components.forms.input.text', [
                                    'name' => 'phone',
                                    'value' => '',
                                    'placeholder' => 'Telefon',
                                    'required' => true,
                                    'max' => 32,
                                    'error' => ''
                        ])
                        @endcomponent
                    </div>
                    <div class="col-12 col-md-6 col-lg-5 col-xl-4 offset-lg-1 offset-xl-2 mb--20">
                        @component( 'components.forms.input.text', [
                                    'name' => 'address',
                                    'value' => '',
                                    'placeholder' => 'Ulica',
                                    'required' => true,
                                    'max' => 128,
                                    'error' => ''
                        ])
                        @endcomponent
                    </div>
                    <div class="col-12 col-md-6 col-lg-5 col-xl-4 mb--20">
                        @component( 'components.forms.input.text', [
                                    'name' => 'address_nb',
                                    'value' => '',
                                    'placeholder' => 'Numer mieszkania',
                                    'required' => true,
                                    'max' => 16,
                                    'error' => ''
                        ])
                        @endcomponent
                    </div>
                    <div class="col-12 col-md-6 col-lg-5 col-xl-4 offset-lg-1 offset-xl-2 mb--20">
                        @component( 'components.forms.input.text', [
                                    'name' => 'zip',
                                    'value' => '',
                                    'placeholder' => 'Kod pocztowy',
                                    'required' => true,
                                    'max' => 6,
                                    'error' => ''
                        ])
                        @endcomponent
                    </div>
                    <div class="col-12 col-md-6 col-lg-5 col-xl-4 mb--20">
                        @component( 'components.forms.input.text', [
                                    'name' => 'city',
                                    'value' => '',
                                    'placeholder' => 'Miasto',
                                    'required' => true,
                                    'max' => 64,
                                    'error' => ''
                        ])
                        @endcomponent
                    </div>
                </div>

                <div class="row fieldset py-3 pt-5">
                    @component( 'components.forms.input.file', [
                                'name' => 'img_receipt',
                                'required' => true,
                                'error' => '',
                                'class' => 'row mx-auto text-center',
                                'srcIcon' => asset('/images/upload-file-icon.png')
                            ])
                        Dodaj zdjęcie <br>dowodu zakupu <br/>(paragonu lub faktury)
                    @endcomponent
                </div>

                <div class="row fieldset">
                    <div class="col-12 col-lg-10 col-xl-8 offset-lg-1 offset-xl-2 mb--20">
                        @component( 'components.forms.input.text', [
                                    'name' => 'iban',
                                    'value' => '',
                                    'placeholder' => 'Numer konta bankowego',
                                    'required' => true,
                                    'max' => 128,
                                    'error' => ''
                        ])
                        @endcomponent
                    </div>
                    <div class="col-12 col-lg-10 col-xl-8 offset-lg-1 offset-xl-2 mb--20">
                        @component( 'components.forms.textarea', [
                                    'name' => 'reason',
                                    'value' => '',
                                    'placeholder' => 'Przyczyna braku satysfakcji z zakupionego żelazka Russell Hobbs',
                                    'required' => true,
                                    'max' => 4096,
                                    'error' => ''
                        ])
                        @endcomponent
                    </div>
                </div>

                <div class="row fieldset">
                    <div class="col-12 col-lg-10 col-xl-8 offset-lg-1 offset-xl-2 mb--20">
                        @component( 'components.forms.input.checkbox', [
                                    'name' => 'legal_all',
                                    'required' => false,
                                    'class' => 'tc-red fw-bold select-all',
                                    'error' => ''
                        ])
                            ZAZNACZ WSZYSTKIE
                        @endcomponent
                    </div>
                    <div class="col-12 col-lg-10 col-xl-8 offset-lg-1 offset-xl-2 mb--20">
                        @component( 'components.forms.input.checkbox', [
                                    'name' => 'legal_1',
                                    'required' => true,
                                    'error' => ''
                        ])
                            Oświadczam, że zapoznałam/em się i akceptuję <a href="{{ asset('regulamin.pdf') }}"
                                                                            title="Regulamin" target="_blank"
                                                                            rel="noreferrer">Regulamin Programu
                                „Satysfakcja Gwarantowana”</a>.
                        @endcomponent
                    </div>
                    <div class="col-12 col-lg-10 col-xl-8 offset-lg-1 offset-xl-2 mb--20">
                        @component( 'components.forms.input.checkbox', [
                                    'name' => 'legal_2',
                                    'required' => true,
                                    'error' => ''
                        ])
                            Zapoznałam/em się z <a href="{{ asset('polityka.pdf') }}" title="Polityka prywatności"
                                                   target="_blank">Polityką Prywatności</a>.
                        @endcomponent
                    </div>
                    <div class="col-12 col-lg-10 col-xl-8 offset-lg-1 offset-xl-2 mb--20">
                        @component( 'components.forms.input.checkbox', [
                                    'name' => 'legal_3',
                                    'required' => true,
                                    'error' => ''
                        ])
                            Wyrażam zgodę na przetwarzanie moich danych osobowych w celu realizacji obowiązków
                            wynikających z organizacji i przeprowadzenia programu „Satysfakcja Gwarantowana” przez
                            Highlite Bielecka, Jellinek Spółka Jawna z siedzibą we Wrocławiu, przy ul. Pomorskiej 55/2.
                        @endcomponent
                    </div>
                    <div class="col-12 col-lg-10 col-xl-8 offset-lg-1 offset-xl-2 mb--20">
                        @component( 'components.forms.input.checkbox', [
                                    'name' => 'legal_4',
                                    'required' => true,
                                    'error' => ''
                        ])
                            Wyrażam zgodę na przetwarzanie moich danych osobowych: imienia, nazwiska, adresu e-mail,
                            numeru telefonu w celach marketingowych przez Spectrum Brands Polska Sp. z o.o. z siedzibą w
                            Warszawie, przy ul. Bitwy Warszawskiej 1920 r. 7a.
                        @endcomponent
                    </div>
                </div>

                <div class="row fieldset">
                    <div class="col-12 col-lg-10 col-xl-8 offset-lg-1 offset-xl-2 text-right py-5">
                        <a href="#" class="cta-button py--10 px--30 d-inline-block submit" tabindex="115">
                            <span>WYŚLIJ</span>
                        </a>
                    </div>
                </div>
            </form>

        </div>
    </section>
@endsection
