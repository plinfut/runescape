<div class="form-field-wrapper">
    <label>{{ $mainLabel }}</label>
    @foreach($options as $optionValue => $optionLabel)
        <?php $optionId = Str::slug($mainLabel.'-'.$optionValue) ?>
        <div class="form-option-wrapper">
            <input
                type="{{ $type }}"
                id="{{ $optionId }}"
                name="{{ $name }}"
                value="{{ $optionValue }}"
                @if(old($name, $default) == $optionValue) checked @endif
            />
            <label class="multiple-choice" for="{{ $optionId }}">{{ $optionLabel }}</label>
        </div>
    @endforeach
    @error($name)<div class="form-error">{{ $message }}</div>@enderror
    @if(!empty($info))<p class="form-info">{!! $info  !!}</p>@endif
</div>
