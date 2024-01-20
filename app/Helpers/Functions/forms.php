<?php

/**
 * Returns the HTML code for a set of checkboxes.
 * @param string $name          The name of the field to retrieve the selected value by in validation.
 * @param string $mainLabel     The main label for the set of checkboxes.
 * @param array $options        Array of options as value => label.
 * @param string|null $default  The value to be selected by default. (If the form was submitted with a validation error, this is overridden with the input.)
 * @param string|null $info     Additional information to be displayed below the set of options.
 * @return string
 */
function formCheckboxes(string $name, string $mainLabel, array $options, ?string $default = null, ?string $info = null): string {
    return view('forms.multipleChoice', [
        'mainLabel' => $mainLabel,
        'options' => $options,
        'type' => 'checkbox',
        'name' => $name,
        'default' => $default,
        'info' => $info,
    ])->render();
}

/**
 * Returns the HTML code for a set of radio buttons.
 * @param string $name          The name of the field to retrieve the selected value by in validation.
 * @param string $mainLabel     The main label for the set of radio buttons.
 * @param array $options        Array of options as value => label.
 * @param string|null $default  The value to be selected by default. (If the form was submitted with a validation error, this is overridden with the input.)
 * @param string|null $info     Additional information to be displayed below the set of options.
 * @return string
 */
function formRadios(string $name, string $mainLabel, array $options, ?string $default = null, ?string $info = null): string {
    return view('forms.multipleChoice', [
        'mainLabel' => $mainLabel,
        'options' => $options,
        'type' => 'radio',
        'name' => $name,
        'default' => $default,
        'info' => $info,
    ])->render();
}

/**
 * Returns the HTML code for a hidden form input.
 * @param string $name  The name of the field to retrieve the selected value in validation.
 * @param string $value The value of the field.
 * @return string
 */
function formHidden(string $name, string $value): string {
    return htmlTag('input', ['type' => 'hidden', 'name' => $name, 'value' => $value]);
}

/**
 * Returns the HTML code for a submit button.
 * @param string $text  The text to display on the button.
 * @return string
 */
function formSubmit(string $text): string {
    return '<div class="form-field-wrapper">'.htmlTag('input', ['type'=>'submit', 'value'=>$text]).'</div>';
}

/**
 * Returns the HTML code for a general input field.
 * @param string $type          The type of input field: color, date, datetime-local, email, number, password, range, search, tel, text, time, url.
 * @param string $name          The name of the field to retrieve the selected value in validation.
 * @param string $label         The label of the field.
 * @param bool $required        Whether the field must be filled in.
 * @param string|null $default  The value of the field. (If the form was submitted with a validation error, this is overridden with the input.)
 * @param array $attr           Additional attributes for the input. Advised keys depend on the type:
 *                              - Date/time: min, max
 *                              - Number/range: min, max, step
 *                              - Text: minlength, maxlength, size
 * @param string|null $info     Additional information to be displayed below the set of options.
 * @return string
 */
function formInput(string $type, string $name, string $label, bool $required = true, ?string $default = null, array $attr = [], ?string $info = null): string {
    $attr['type'] = $type;
    $attr['value'] = old($name, $default);
    $attr['name'] = $name;
    $attr['id'] = $name;
    if ($required) $attr[] = 'required';
    return view('forms.input', [
        'label' => $label,
        'attr' => $attr,
        'name' => $name,
        'info' => $info,
    ])->render();
}

/**
 * Returns the HTML code for a select (dropdown list) input.
 * @param string $name          The name of the field to retrieve the selected value in validation.
 * @param string $label         The label of the field.
 * @param array $options        Array of options as value => label.
 * @param string|null $default  The value of the field. (If the form was submitted with a validation error, this is overridden with the input.)
 * @param string|null $info     Additional information to be displayed below the input.
 * @return string
 */
function formSelect(string $name, string $label, array $options, ?string $default = null, ?string $info = null): string {
    return view('forms.input', [
        'mainLabel' => $label,
        'name' => $name,
        'options' => $options,
        'default' => $default,
        'info' => $info,
    ])->render();
}

/**
 * Returns the HTML code for a textarea.
 * @param string $name          The name of the field to retrieve the selected value in validation.
 * @param string $label         The label of the field.
 * @param bool $required        Whether the field must be filled in.
 * @param string|null $default  The value of the field. (If the form was submitted with a validation error, this is overridden with the input.)
 * @param array $attr           Additional attributes for the input. (Rows and cols will be set to 5 and 60 if omitted.)
 * @param string|null $info     Additional information to be displayed below the input.
 * @return string
 */
function formTextarea(string $name, string $label, bool $required = true, ?string $default = null, array $attr = [], ?string $info = null): string {
    $attr['name'] = $name;
    $attr['id'] = $name;
    if (!isset($attr['rows'])) $attr['rows'] = 5;
    if (!isset($attr['cols'])) $attr['cols'] = 60;
    if ($required) $attr[] = 'required';
    return view('forms.textarea', [
        'label' => $label,
        'name' => $name,
        'attr' => $attr,
        'default' => $default,
        'info' => $info,
    ])->render();
}
