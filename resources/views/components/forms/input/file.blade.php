

<div class="col-12 mb--20">
    <div class="field file-uploads field-uploads @isset($class){{ $class }}@endisset">
        <div class="col-12 col-sm-6 col-lg-5 col-xl-4 offset-lg-1 offset-xl-2">
            <div class="info">
                <img src="{{ $srcIcon }}" alt="cloud" />
                {{ $slot }}{{ $required ? '*' : '' }}
            </div>
            <div class="uploads uploads-d-none">
                <input type="file"
                       name="{{ $name }}"
                       id="{{ $name }}"
                       {{ $required ? 'required' : '' }}
                       class="upload-file file"/>
            </div>
            <button class="button full-width bold button-blue text-uppercase cta-button button-uploads py--10 px--30 mx--auto"
                    type="button">wgraj plik
            </button>
        </div>
        <div class="col-12 col-sm-6 col-lg-5 col-xl-4">
            <div class="thumbs">
                <img src="{{ asset('images/kwadrat.png') }}" alt="thumbs" id="{{ $name }}_thumb"/>
            </div>
        </div>
    </div>
    <div class="error-post error-{{ $name }}">{{ $error }}</div>
</div>
