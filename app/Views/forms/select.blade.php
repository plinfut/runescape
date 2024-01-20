<div class="form-field-wrapper">
    <label for="{{ $name }}">{{ $mainLabel }}</label>
    <select id="{{ $name }}" name="{{ $name }}">
    @foreach($options as $optionValue => $optionLabel)
        <option value="{{ $optionValue }}" @if(old($id, $defaultValue ?? null) == $optionValue) selected @endif>{{ $optionLabel }}</option>
    @endforeach
    </select>
    @error($name)<div class="form-error">{{ $message }}</div>@enderror
    @if(!empty($info))<p class="form-info">{!! $info  !!}</p>@endif
</div>
