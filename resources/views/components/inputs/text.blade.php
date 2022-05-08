@props([
    'label' => '',
    'id',
    'placeholder' => '',
    'value' => '',
])

<div class="input-group input-group-static">
    <label>{{ $label }}</label>
    <input type="text" class="form-control" id="{{ $id }}" name="{{ $id }}"
        placeholder="{{ $placeholder }}" value="{{ $value }}">
</div>
