<div class="field file-uploads field-uploads @isset($class){{ $class }}@endisset">
    <div class="col-12 col-md-6 col-lg-5 col-xl-4 offset-lg-1 offset-xl-2 mt--20">
        <div class="info bg--primary">
            <img src="{{ $srcIcon }}" alt="cloud"/>
            <p>{{ $slot }}{{ $required ? '*' : '' }}</p>
            <button type="button" class="button-uploads cta-button-primary py--10 px--30 m--0 d-inline-block">WYBIERZ
                PLIK
            </button>
        </div>
        <div class="uploads uploads-d-none">
            <input type="file"
                   name="{{ $name }}"
                   id="{{ $name }}"
                   {{ $required ? 'required' : '' }}
                   class="upload-file file"/>
        </div>
    </div>
    <div class="col-12 col-md-6 col-lg-5 col-xl-4 mt--20">
        <div class="thumbs">
            <img src="{{ asset('images/square.png') }}" alt="thumbs" id="{{ $name }}_thumb"/>
        </div>
    </div>
    <div class="col-12 col-lg-10 col-xl-8 offset-lg-1 offset-xl-2 mb--20 text-left">
        <div class="error-post error-{{ $name }}">{{ $error }}</div>
    </div>
</div>
