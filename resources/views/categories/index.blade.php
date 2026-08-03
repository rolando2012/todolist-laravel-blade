<x-layout title="To-Do List | Categorias">
    <section class="d-flex justify-content-between align-items-center mb-4">
        <x-title icon="folder-fill">Categorías</x-title>
        <x-btns.btn_primary href="{{ route('categories.create') }}" icon="folder-plus">
            Nueva categoría
        </x-btns.btn_primary>

    </section>

    <x-table.table_card>
        <thead class="table-light border-top border-bottom text-uppercase text-secondary fs-7">
            <tr>
                <th scope="col" class="ps-4 py-3 text-secondary fw-bold th-custom-spacing">Nombre</th>
                <th scope="col" class="py-3 text-secondary fw-bold th-custom-spacing">Tareas</th>
                <th scope="col" class="pe-4 py-3 text-end text-secondary fw-bold th-custom-spacing">Acciones</th>
            </tr>
        </thead>
        <tbody class="border-0">
            @forelse($categories as $category)
                <tr class="border-bottom">
                    <td class="ps-4 py-3 fw-semibold text-dark">{{ $category->name }}</td>
                    <td class="py-3 text-muted">{{ $category->tasks_count ?? 0 }}</td>
                    <td class="pe-4 py-3 text-end">
                        
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="3" class="text-center py-4 text-muted">
                        No hay categorías registradas.
                    </td>
                </tr>
            @endforelse
        </tbody>
    </x-table.table_card>
</x-layout>
