@props([
    'label' => '',
    'id',
    'placeholder' => '',
    'value' => '',
])

<div class="input-group input-group-dynamic">
    <textarea class="form-control" rows="5" placeholder="{{ $label }}" spellcheck="false" id="{{ $id }}"
        name="{{ $id }}">{{ $value }}</textarea>
</div>
