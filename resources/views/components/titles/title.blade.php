@props(['icon' => null])

<div class="d-flex align-items-center gap-2">
    @if($icon)
        <i class="bi bi-{{ $icon }} text-dark fs-3"></i>
    @endif
    <h2 class="fw-bold text-dark m-0 fs-3">
        {{ $slot }}
    </h2>
</div>
