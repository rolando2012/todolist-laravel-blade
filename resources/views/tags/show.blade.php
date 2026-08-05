<x-layout title="To-Do List | Ver Etiqueta">

    <x-titles.title_secondary>
        Detalle de etiqueta
    </x-titles.title_secondary>

    <x-forms.form_card>
        <x-details.detail_table>
            <x-details.detail_row label="Nombre">
                {{ $tag->name }}
            </x-details.detail_row>

            <x-details.detail_row label="Tareas">
                {{ 0 }}
            </x-details.detail_row>
        </x-details.detail_table>

        <div class="d-flex align-items-center gap-3">
            <x-btns.btn_primary
                href="{{ route('tags.edit',$tag) }}"
                icon="pencil-fill">
                Editar
            </x-btns.btn_primary>
            <x-btns.btn_secondary
                href="{{ route('tags.index') }}">
                Volver
            </x-btns.btn_secondary>
        </div>
    </x-forms.form_card>
</x-layout>