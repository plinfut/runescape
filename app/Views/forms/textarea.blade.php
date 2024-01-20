<div class="form-field-wrapper">
    <label for="{{ $name }}">{{ $label }}</label>
    {!! htmlTag('textarea', $attr, old($name, $default ?? '')) !!}
    @error($name)<div class="form-error">{{ $message }}</div>@enderror
    @if(!empty($info))<p class="form-info">{!! $info  !!}</p>@endif
</div>
