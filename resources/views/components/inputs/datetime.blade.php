@props([
    'label' => '',
    'id',
    'value' => '',
])

<div class="input-group input-group-static my-3">
    <label>{{ $label }}</label>
    <input type="datetime-local" class="form-control" id="{{ $id }}" name="{{ $id }}"
        value="{{ $value }}">
</div>
