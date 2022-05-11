@props([
    'label' => '',
    'id',
    'value' => '',
    'required' => false,
])

<div class="input-group input-group-static my-3 @error($id) is-invalid @enderror">
    <label for="{{ $id }}" class="@error($id) text-danger @enderror">
        {{ $label }}
        @error($id)
            &nbsp;({{ $message }})
        @enderror
    </label>
    <input type="datetime-local" class="form-control" id="{{ $id }}" name="{{ $id }}"
        value="{{ old($id) ?? $value }}" {{ $required ? '' : '' }}>
</div>
