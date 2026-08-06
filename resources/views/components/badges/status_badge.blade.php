@props(['completed' => false])

@if($completed)
    <span class="badge rounded-pill px-3 py-2 status-completed">
        <i class="bi bi-check-circle-fill me-1"></i>
        Completada
    </span>
@else
    <span class="badge rounded-pill px-3 py-2 status-pending">
        <i class="bi bi-clock-fill me-1"></i>
        Pendiente
    </span>
@endif