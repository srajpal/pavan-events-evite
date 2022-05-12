@props([
    'label' => '',
    'id',
    'placeholder' => '',
    'value' => '',
    'required' => false,
    'password' => false,
])

<div class="input-group input-group-static my-3 @error($id) is-invalid @enderror">
    <label for="{{ $id }}" class="@error($id) text-danger @enderror">
        {{ $label }}
        @error($id)
            &nbsp;({{ $message }})
        @enderror
    </label>
    <input type="{{ $password ? 'password' : 'text' }}" class="form-control" id="{{ $id }}"
        name="{{ $id }}" placeholder="{{ $placeholder }}" value="{{ old($id) ?? $value }}"
        {{ $required ? '' : '' }}>
</div>
