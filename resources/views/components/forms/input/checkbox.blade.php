<div class="field">
    <input type="checkbox"
           name="{{ $name }}"
           id="{{ $name }}"
           class="css-checkbox checkbox"
        {{ $required ? 'required' : '' }}/>
    <label for="{{ $name }}" class="css-label @isset($class){{ $class }}@endisset">
        <span>{{ $required ? '*' : '' }}{{ $slot }}</span>
    </label>
</div>
<span class="error-post error-{{ $name }}">{{ $error }}</span>
