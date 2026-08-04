@props([
    'showUrl' => '#',
    'editUrl' => '#',
    'deleteUrl' => '#'
])

<div class="d-flex justify-content-end gap-2">
    <a href="{{ $showUrl }}"
        class="btn btn-light border rounded-circle action-btn action-view"
        title="Ver">
        <i class="bi bi-eye"></i>
    </a>
    <a href="{{ $editUrl }}"
        class="btn btn-light border rounded-circle action-btn action-edit"
        title="Editar">
        <i class="bi bi-pencil"></i>
    </a>
    <button type="submit"
            class="btn btn-light border rounded-circle text-danger action-btn action-delete"
            title="Eliminar">
        <i class="bi bi-trash"></i>
    </button>
</div>