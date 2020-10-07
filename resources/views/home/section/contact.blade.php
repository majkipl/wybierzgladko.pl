<section class="contact py--100" id="contact" data-url="/kontakt/">
    <h2 class="accent text-tertiary text-center mt--30">Masz pytania</h2>
    <h4 class="text-tertiary text-center">Napisz do nas</h4>
    <h3 class="text-tertiary text-center"></h3>
    <div class="container mt--70" id="formContact">

        <form class="form" method="post" action="{{ route('front.contact.send') }}">
            @csrf
            <div class="row fieldset">
                <div class="col-12 col-sm-10 col-lg-8 offset-sm-1 offset-lg-2 mb--20 my--20">
                    @component( 'components.forms.input.text', [
                                'name' => 'name',
                                'value' => '',
                                'placeholder' => 'Imię i nazwisko',
                                'required' => true,
                                'max' => 128,
                                'error' => ''])
                    @endcomponent
                </div>

                <div class="col-12 col-sm-10 col-lg-8 offset-sm-1 offset-lg-2 mb--20 my--20">
                    @component( 'components.forms.input.email', [
                                'name' => 'email',
                                'value' => '',
                                'placeholder' => 'E-mail',
                                'required' => true,
                                'max' => 255,
                                'error' => ''])
                    @endcomponent
                </div>

                <div class="col-12 col-sm-10 col-lg-8 offset-sm-1 offset-lg-2 my--20">
                    @component( 'components.forms.textarea', [
                                'name' => 'message',
                                'value' => '',
                                'placeholder' => 'Wiadomość',
                                'required' => true,
                                'max' => 4096,
                                'error' => ''])
                    @endcomponent
                </div>

            </div>

            <div class="row fieldset">
                <div class="col-12 col-sm-10 col-lg-8 offset-sm-1 offset-lg-2 mt--20">
                    @component( 'components.forms.input.checkbox', [
                                'name' => 'legal_5',
                                'required' => true,
                                'error' => '',
                                'class' => 'mt--10 mb--0 pt--0 pl--60'
                    ])
                        Wyrażam zgodę na przetwarzanie przekazanych przeze mnie danych osobowych (imienia, nazwiska i
                        adresu
                        e-mail) w celu utrzymywania kontaktu przez Spectrum Brands Poland sp. z o.o. z siedzibą w
                        Warszawie,
                        przy ul. Bitwy Warszawskiej 1920 r. 7A, jako administratora przekazanych danych osobowych.
                        Potwierdzam jednocześnie, że zostałem poinformowany o dobrowolności wyrażenia zgody na
                        przetwarzanie
                        danych osobowych, o prawie do wycofania zgody w dowolnym momencie oraz o zgodności z prawem
                        przetwarzania, którego dokonano na podstawie zgody przed jej wycofaniem. Więcej informacji o
                        przetwarzaniu danych osobowych pod linkiem Polityka prywatności.
                    @endcomponent
                </div>
            </div>

            <div class="row fieldset">
                <div class="col-12 col-sm-10 col-lg-8 offset-sm-1 offset-lg-2 text-right pt--50 mb--30">
                    <a href="#" class="send cta-button-tertiary py--10 px--30 d-inline-block">
                        <span>WYŚLIJ</span>
                    </a>
                </div>
            </div>
        </form>
    </div>
</section>
