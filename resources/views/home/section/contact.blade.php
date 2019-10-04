<section class="contact py--70 wow fadeInUp" data-wow-duration="2s" id="contact">
    <div class="container">
        <div class="row text-center">
            <div class="col-12 mb--60" data-aos="fade-up" data-aos-anchor-placement="center-bottom"
                 data-aos-duration="1000">
                <h2>MASZ PYTANIA?</h2>
                <p class="mt--20">NAPISZ DO NAS</p>

                <h3></h3>
            </div>
        </div>
        <div class="row form text-center" id="formContact">
            <form class="form row" method="post" action="{{ route('front.contact.send') }}">
                @csrf
                <div class="col-12 col-sm-6 col-md-4 offset-md-2 col-xl-4 offset-xl-2 mb--30" data-aos="fade-up"
                     data-aos-anchor-placement="center-bottom" data-aos-duration="1000">
                    @component( 'components.forms.input.text', [
                                'name' => 'name',
                                'value' => '',
                                'placeholder' => 'Imię i nazwisko',
                                'required' => true,
                                'max' => 128,
                                'error' => ''])
                    @endcomponent
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-xl-4 mb--30" data-aos="fade-up"
                     data-aos-anchor-placement="center-bottom" data-aos-duration="1000">
                    @component( 'components.forms.input.email', [
                                'name' => 'email',
                                'value' => '',
                                'placeholder' => 'E-mail',
                                'required' => true,
                                'max' => 255,
                                'error' => ''])
                    @endcomponent
                </div>
                <div class="col-12 col-md-8 offset-md-2 col-xl-8 offset-xl-2 mb--30" data-aos="fade-up"
                     data-aos-anchor-placement="center-bottom" data-aos-duration="1000">
                    @component( 'components.forms.textarea', [
                                'name' => 'message',
                                'value' => '',
                                'placeholder' => 'Wiadomość',
                                'required' => true,
                                'max' => 4096,
                                'error' => ''
                    ])
                    @endcomponent
                </div>
                <div class="col-12 col-md-8 offset-md-2 col-xl-8 offset-xl-2 mb--30" data-aos="fade-up"
                     data-aos-anchor-placement="center-bottom" data-aos-duration="1000">
                    @component( 'components.forms.input.checkbox', [
                                'name' => 'legal_5',
                                'required' => true,
                                'error' => ''
                    ])
                        Wyrażam zgodę na przetwarzanie przekazanych przeze mnie danych osobowych (imienia, nazwiska i
                        adresu e-mail) w celu utrzymywania kontaktu przez Spectrum Brands Poland sp. z o.o. z siedzibą w
                        Warszawie, przy ul. Bitwy Warszawskiej 1920 r. 7A, jako administratora przekazanych danych
                        osobowych. Potwierdzam jednocześnie, że zostałem poinformowany o dobrowolności wyrażenia zgody
                        na przetwarzanie danych osobowych, o prawie do wycofania zgody w dowolnym momencie oraz o
                        zgodności z prawem przetwarzania, którego dokonano na podstawie zgody przed jej wycofaniem.
                        Więcej informacji o przetwarzaniu danych osobowych pod linkiem Polityka prywatności.
                    @endcomponent
                </div>
                <div class="col-12 col-md-8 offset-md-2 col-xl-8 offset-xl-2 text-right">
                    <a href="#" class="send cta-button px--60 py--10 mt--30">wyślij</a>
                </div>
            </form>
        </div>
    </div>
</section>
