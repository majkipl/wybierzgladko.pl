@extends('layouts.front')

@section('content')
    <section class="top d-flex flex-row align-items-center justify-content-center" id="top" style="background-image: url({{ asset('images/form-baner.png') }});">
        <h2 class="accent text-center">Formularz zwrotu</h2>
    </section>

    <section class="form position-relative py--100" id="form">
        <div class="container">
            <form id="save" method="POST" action="{{ route('front.application.save') }}">
                @csrf
                <div class="row fieldset">
                    @component( 'components.forms.input.text', [
                                'name' => 'firstname',
                                'value' => '',
                                'placeholder' => 'Imię',
                                'required' => true,
                                'max' => 128,
                                'error' => '',
                                'classWrapper' => 'col-12 col-md-6 mb--20 my--20'
                                ])
                    @endcomponent

                    @component( 'components.forms.input.text', [
                                'name' => 'lastname',
                                'value' => '',
                                'placeholder' => 'Nazwisko',
                                'required' => true,
                                'max' => 128,
                                'error' => '',
                                'classWrapper' => 'col-12 col-md-6 mb--20 my--20'
                    ])
                    @endcomponent

                    @component( 'components.forms.input.email', [
                                'name' => 'email',
                                'value' => '',
                                'placeholder' => 'E-mail',
                                'required' => true,
                                'max' => 255,
                                'error' => '',
                                'classWrapper' => 'col-12 col-md-6 mb--20 my--20'
                    ])
                    @endcomponent

                    @component( 'components.forms.input.text', [
                                'name' => 'phone',
                                'value' => '',
                                'placeholder' => 'Telefon',
                                'required' => true,
                                'max' => 32,
                                'error' => '',
                                'classWrapper' => 'col-12 col-md-6 mb--20 my--20'
                    ])
                    @endcomponent
                </div>

                <div class="row fieldset">
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
                    @component( 'components.forms.input.text', [
                                'name' => 'iban',
                                'value' => '',
                                'placeholder' => 'Numer konta bankowego',
                                'required' => true,
                                'max' => 128,
                                'error' => '',
                                'classWrapper' => 'col-12 my--20'
                    ])
                    @endcomponent

                    @component( 'components.forms.textarea', [
                                'name' => 'reason',
                                'value' => '',
                                'placeholder' => 'Przyczyna braku satysfakcji z zakupionego żelazka Russell Hobbs',
                                'required' => true,
                                'max' => 4096,
                                'error' => '',
                                'classWrapper' => 'col-12 my--20'
                    ])
                    @endcomponent
                </div>

                <div class="row fieldset">
                    @component( 'components.forms.input.checkbox', [
                                'name' => 'legal_all',
                                'required' => false,
                                'class' => 'select-all mt--10 mb--0 pt--0 pl--60',
                                'error' => '',
                                'classWrapper' => 'col-12 mt--20'
                    ])
                        ZAZNACZ WSZYSTKIE
                    @endcomponent

                    @component( 'components.forms.input.checkbox', [
                                'name' => 'legal_1',
                                'required' => true,
                                'class' => 'mt--10 mb--0 pt--0 pl--60',
                                'error' => '',
                                'classWrapper' => 'col-12 mt--20'
                    ])
                        Oświadczam, że zapoznałam/em się i akceptuję <a href="{{ asset('pdf/regulamin.pdf') }}" title="Regulamin Programu Satysfakcja Gwarantowana" target="_blank" rel="noreferrer">Regulamin Programu „Satysfakcja Gwarantowana”</a>.
                    @endcomponent

                    @component( 'components.forms.input.checkbox', [
                                'name' => 'legal_3',
                                'required' => true,
                                'class' => 'mt--10 mb--0 pt--0 pl--60',
                                'error' => '',
                                'classWrapper' => 'col-12 mt--20'
                    ])
                            Wyrażam zgodę na przetwarzanie moich danych osobowych w celu realizacji obowiązków wynikających z organizacji i przeprowadzenia programu „Satysfakcja Gwarantowana” przez Highlite Bielecka, Jellinek Spółka Jawna z siedzibą we Wrocławiu, przy ul. Pomorskiej 55/2.
                    @endcomponent

                    @component( 'components.forms.input.checkbox', [
                                'name' => 'legal_4',
                                'required' => true,
                                'class' => 'mt--10 mb--0 pt--0 pl--60',
                                'error' => '',
                                'classWrapper' => 'col-12 mt--20'
                    ])
                            Wyrażam zgodę na przetwarzanie moich danych osobowych: imienia, nazwiska, adresu e-mail, numeru telefonu w celach marketingowych przez Spectrum Brands Polska Sp. z o.o. z siedzibą w Warszawie, przy ul. Bitwy Warszawskiej 1920 r. 7a.
                    @endcomponent
                </div>

                <div class="row fieldset">
                    <div class="col-12 text-right py--50">
                        <a href="#" class="cta-button-tertiary py--10 px--30 d-inline-block submit">
                            <span>WYŚLIJ</span>
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection
