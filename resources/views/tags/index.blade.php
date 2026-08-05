<x-layout title="To-Do List | Etiquetas">
    <section class="d-flex justify-content-between align-items-center mb-4">
        <x-titles.title icon="tags-fill">Etiquetas</x-titles.title>
        <x-btns.btn_primary href="{{ route('categories.create') }}" icon="bookmark-plus">
            Nueva Etiqueta
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
            @forelse($tags as $tag)
                <tr class="border-bottom">
                    <td class="ps-4 py-3 fw-semibold text-dark">{{ $tag->name }}</td>
                    <td class="py-3 text-muted">{{ 0 }}</td>
                    <td class="pe-4 py-3 text-end">
                        <x-table.table_actions 
                            :showUrl="route('tags.show', $tag)"
                            :editUrl="route('tags.edit', $tag)"
                            :deleteUrl="route('tags.destroy', $tag)"
                        />
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="3" class="text-center py-4 text-muted">
                        No hay etiquetas registradas.
                    </td>
                </tr>
            @endforelse
        </tbody>
    </x-table.table_card>
</x-layout>