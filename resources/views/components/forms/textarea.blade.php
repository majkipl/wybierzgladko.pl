<div class="field">
    <p>{{ $placeholder }}<span>{{ $required ? '*' : '' }}</span></p>
    <textarea class="textarea"
              name="{{ $name }}"
              id="{{ $name }}"
              {{ $required ? 'required' : '' }}
              @if($max)
                  maxlength="{{ $max }}"
              @endif
              autocomplete="off"
{{--              placeholder="{{ $placeholder }}"--}}
              aria-label="{{ $placeholder }}{{ $required ? '*' : '' }}">{{ $slot }}</textarea>
    <div class="error-post error-{{ $name }}">{{ $error }}</div>
</div>
