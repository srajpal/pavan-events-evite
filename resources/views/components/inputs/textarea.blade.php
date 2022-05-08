@props([
    'label' => '',
    'id',
    'placeholder' => '',
    'value' => '',
    'required' => false,
])

<div class="input-group input-group-dynamic my-3 @error($id) is-invalid @enderror"">
    <textarea class="form-control" rows="3"
        placeholder="{{ $label }} @error($id) &nbsp;({{ $message }}) @enderror" spellcheck="false"
        id="{{ $id }}" name="{{ $id }}" {{ $required ? '' : '' }}>
        {{ old($id) ?? $value }}
    </textarea>
</div>
