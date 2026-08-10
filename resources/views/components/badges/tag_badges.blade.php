@props(['tags' => []])

<div class="d-flex flex-wrap gap-2">
    @forelse($tags as $tag)
        <span class="badge rounded-pill px-3 py-2 tag-badge">
            <i class="bi bi-tag-fill me-1"></i>
                {{ $tag->name }}
        </span>
    @empty
        <span class="text-muted small">Sin etiquetas</span>
    @endforelse
</div>