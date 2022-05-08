@props(['id', 'options' => [], 'selected' => '', 'initial' => '', 'key' => 'key', 'value' => 'value'])

<div class="input-group input-group-outline mb-4">
    <select class="form-control" id="{{ $id }}" name="{{ $id }}">
        <option value='' disabled selected>{{ $initial }}</option>
        @foreach ($options as $_o)
            <option value="{{ $_o[$key] }}">{{ $_o[$value] }}</option>
        @endforeach
    </select>
</div>
