<div class="field">
    <input type="checkbox"
           name="{{ $name }}"
           id="{{ $name }}"
           class="input-checkbox checkbox p--0 m--0"
        {{ $required ? 'required' : '' }}/>
    <label for="{{ $name }}" class="label-checkbox @isset($class){{ $class }}@endisset">
        <span>{{ $required ? '*' : '' }}{{ $slot }}</span>
    </label>
    <span class="error-post error-{{ $name }}">{{ $error }}</span>
</div>



{{--<div class="field col-12 col-sm-10 col-lg-8 offset-sm-1 offset-lg-2 field mt--20">--}}
{{--    <input class="input-checkbox p--0 m--0" type="checkbox" name="legal_1" id="legal_1" required="" />--}}
{{--    <label for="legal_1" class="label-checkbox mt--10 mb--0 pt--0 pl--60">Wyrażam zgodę na przetwarzanie przekazanych przeze mnie danych osobowych (imienia, nazwiska i adresu e-mail) w celu utrzymywania kontaktu przez Spectrum Brands Poland sp. z o.o. z siedzibą w Warszawie, przy ul. Bitwy Warszawskiej 1920 r. 7A, jako administratora przekazanych danych osobowych. Potwierdzam jednocześnie, że zostałem poinformowany o dobrowolności wyrażenia zgody na przetwarzanie danych osobowych, o prawie do wycofania zgody w dowolnym momencie oraz o zgodności z prawem przetwarzania, którego dokonano na podstawie zgody przed jej wycofaniem. Więcej informacji o przetwarzaniu danych osobowych pod linkiem Polityka prywatności.</label>--}}
{{--    <span class="error-post"></span>--}}
{{--</div>--}}
