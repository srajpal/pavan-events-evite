@props([
    'label' => '',
    'id',
    'checked' => false,
])

<div class="form-check form-switch d-flex align-items-center mb-3">
    <input class="form-check-input" type="checkbox" id="{{ $id }}" name="{{ $id }}"
        {{ $checked ? 'checked' : '' }}>
    <label class="form-check-label mb-0 ms-2" for="{{ $id }}">{{ $label }}</label>
</div>
