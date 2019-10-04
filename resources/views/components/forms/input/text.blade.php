<div class="field">
    <p>{{ $placeholder }}<span>{{ $required ? '*' : '' }}</span></p>
    <input type="text"
           name="{{ $name }}"
           id="{{ $name }}"
           value="{{ $value }}"
           aria-label="{{ $placeholder }}{{ $required ? '*' : '' }}"
           {{ $required ? 'required' : '' }}
           @if($max)
               maxlength="{{ $max }}"
           @endif
           @isset($class)
               class="{{ $class }}"
           @else
               class="input"
           @endisset
           autocomplete="off"/>
</div>
<span class="error-post error-{{ $name }}">{{ $error }}</span>
