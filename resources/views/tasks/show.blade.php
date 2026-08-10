<x-layout title="To-Do List | Detalle de tarea">
    <x-titles.title_secondary>
        Detalle de tarea
    </x-titles.title_secondary>
    <x-forms.form_card>
        <x-details.detail_table>
            <x-details.detail_row label="Título">
                {{ $task->title }}
            </x-details.detail_row>
            <x-details.detail_row label="Descripción">
                @if($task->description)
                    <div class="text-break">
                        {{ $task->description }}
                    </div>
                @else
                    <span class="text-muted fst-italic">
                        Sin descripción
                    </span>
                @endif
            </x-details.detail_row>
            <x-details.detail_row label="Estado">
                <x-badges.status_badge :completed="$task->state" />
            </x-details.detail_row>
            <x-details.detail_row label="Categoría">
                @if($task->category)
                    <i class="bi bi-folder2 me-2 text-secondary"></i>
                    {{ $task->category->name }}
                @else
                    <span class="text-muted fst-italic">
                        Sin categoría
                    </span>
                @endif
            </x-details.detail_row>
            <x-details.detail_row label="Etiquetas">
                <x-badges.tag_badges :tags="$task->tags" />
            </x-details.detail_row>
        </x-details.detail_table>
        <div class="d-flex align-items-center gap-3">
            <x-btns.btn_primary
                href="{{ route('tasks.edit', $task) }}"
                icon="pencil-fill">
                Editar
            </x-btns.btn_primary>
            <x-btns.btn_secondary
                href="{{ route('tasks.index') }}">
                Volver
            </x-btns.btn_secondary>
        </div>
    </x-forms.form_card>
</x-layout>