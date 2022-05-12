@props([
    'message' => '',
    'type' => 'success',
])

<div class="alert alert-{{ $type }} alert-dismissible fade show" role="alert">
    <span class="alert-text text-sm text-white">{{ $message }}</span>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
