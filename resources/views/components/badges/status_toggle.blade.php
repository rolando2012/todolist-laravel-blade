@props([
    'completed' => false,
    'url' => '#'
])

<form action="{{ $url }}" method="POST" class="d-inline">
    @csrf
    @method('PATCH')

    <button
        type="submit"
        class="btn btn-link text-decoration-none p-0 border-0"
        title="{{ $completed ? 'Marcar como pendiente' : 'Marcar como completada' }}"
    >    
        <x-badges.status_badge :completed="$completed" />
    </button>
</form>