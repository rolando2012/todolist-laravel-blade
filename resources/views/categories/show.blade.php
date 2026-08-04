<x-layout title="To-Do List | Categoría">

    <x-titles.title_secondary>
        Detalle de categoría
    </x-titles.title_secondary>

    <x-forms.form_card>
        <x-details.detail_table>
            <x-details.detail_row label="Nombre">
                {{ $category->name }}
            </x-details.detail_row>

            <x-details.detail_row label="Tareas">
                {{ 0 }}
            </x-details.detail_row>
        </x-details.detail_table>

        <div class="d-flex align-items-center gap-3">
            <x-btns.btn_primary
                href="{{ route('categories.edit',$category) }}"
                icon="pencil-fill">
                Editar
            </x-btns.btn_primary>
            <x-btns.btn_secondary
                href="{{ route('categories.index') }}">
                Volver
            </x-btns.btn_secondary>
        </div>
    </x-forms.form_card>

</x-layout>