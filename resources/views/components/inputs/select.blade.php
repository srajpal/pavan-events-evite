@props([
    'label' => '',
    'id',
    'options' => [],
    'selected' => '',
    'initial' => '',
    'key' => 'key',
    'value' => 'value',
    'required' => false,
])

@php
$selected = old($id) ?? $selected;
@endphp

<div class="input-group input-group-static my-3 @error($id) is-invalid @enderror">
    <label for="{{ $id }}" class="@error($id) text-danger @enderror">
        {{ $label }}
        @error($id)
            &nbsp;({{ $message }})
        @enderror
    </label>
    <select class="form-control" id="{{ $id }}" name="{{ $id }}" {{ $required ? '' : '' }}>
        <option disabled selected>Please select an option</option>
        @foreach ($options as $_o)
            <option value="{{ $_o[$key] }}" {{ $selected == $_o[$key] ? 'selected' : '' }}>{{ $_o[$value] }}
            </option>
        @endforeach
    </select>
</div>
