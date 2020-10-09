<div class="field @isset($classWrapper){{ $classWrapper }}@endisset">
    <textarea class="textarea p--15"
              name="{{ $name }}"
              id="{{ $name }}"
              {{ $required ? 'required' : '' }}
              @if($max)
                  maxlength="{{ $max }}"
              @endif
              autocomplete="off"
              placeholder=""
              aria-label="{{ $placeholder }}{{ $required ? '*' : '' }}"
    >{{ $slot }}</textarea>
    <label class="label" for="{{ $name }}">{{ $placeholder }}{{ $required ? '*' : '' }}</label>
    <span class="error-post error-{{ $name }}">{{ $error }}</span>
</div>
