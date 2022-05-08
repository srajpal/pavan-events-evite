@props([
    'label' => '',
    'id',
])

<div class="input-group input-group-outline">
    <label class="form-label">{{ $label }}</label>
    <input type="text" class="form-control" id="{{ $id }}">
</div>
