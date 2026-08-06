<x-layout title="To-Do List | Tareas">
    <section class="d-flex justify-content-between align-items-center mb-4">
        <x-titles.title icon="clipboard-check-fill">Tareas</x-titles.title>
        <x-btns.btn_primary href="{{ route('tasks.create') }}" icon="clipboard-plus">
            Nueva Tarea
        </x-btns.btn_primary>
    </section>

    <x-table.table_card>
        <thead class="table-light border-bottom text-uppercase text-secondary fs-7">
            <tr>
                <th scope="col" class="ps-4 py-3 fw-bold" style="font-size: 0.75rem; letter-spacing: 0.5px;">Estado</th>
                <th scope="col" class="py-3 fw-bold" style="font-size: 0.75rem; letter-spacing: 0.5px;">Título</th>
                <th scope="col" class="py-3 fw-bold" style="font-size: 0.75rem; letter-spacing: 0.5px;">Categoría</th>
                <th scope="col" class="py-3 fw-bold" style="font-size: 0.75rem; letter-spacing: 0.5px;">Etiquetas</th>
                <th scope="col" class="pe-4 py-3 text-end fw-bold" style="font-size: 0.75rem; letter-spacing: 0.5px;">Acciones</th>
            </tr>
        </thead>
        <tbody class="border-0">
            @forelse($tasks as $task)
                <tr class="border-bottom">
                    <td class="ps-4 py-3">
                        {{$task->state}}
                    </td>
                    <td class="py-3 fw-semibold text-dark">
                        <span class="{{ $task->state ? 'text-decoration-line-through text-muted' : '' }}">
                            {{ $task->title }}
                        </span>
                    </td>
                    <td class="py-3 text-secondary">
                        {{ $task->category->name ?? 'Sin categoría' }}
                    </td>
                    <td class="py-3">
                        {{0}}
                    </td>
                    <td class="pe-4 py-3 text-end">
                        <x-table.table_actions 
                            :showUrl="route('tasks.show', $task->id)"
                            :editUrl="route('tasks.edit', $task->id)"
                            :deleteUrl="route('tasks.destroy', $task->id)"
                        />
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-center py-4 text-muted">
                        No hay tareas registradas.
                    </td>
                </tr>
            @endforelse
        </tbody>
    </x-table.table_card>
</x-layout>