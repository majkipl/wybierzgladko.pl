<div class="field @isset($classWrapper){{ $classWrapper }}@endisset">
    <input type="email"
           name="{{ $name }}"
           id="{{ $name }}"
           value="{{ $value }}"
           aria-label="{{ $placeholder }}{{ $required ? '*' : '' }}"
           placeholder=""
           {{ $required ? 'required' : '' }}
           @if($max)
               maxlength="{{ $max }}"
           @endif
           @isset($class)
               class="{{ $class }}"
           @else
               class="input px--15"
           @endisset
           autocomplete="off"/>
    <label class="label" for="{{ $name }}">{{ $placeholder }}{{ $required ? '*' : '' }}</label>
    <span class="error-post error-{{ $name }}">{{ $error }}</span>
</div>
