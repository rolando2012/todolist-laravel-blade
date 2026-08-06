<x-layout title="To-Do List | Nueva Tarea">

    <x-titles.title_secondary >Nueva tarea</x-titles.title_secondary>

    <x-forms.form_card>
        <form action="{{ route('tasks.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="title" class="form-label text-secondary fw-semibold fs-7 mb-2">
                    Título <span class="text-danger">*</span>
                </label>
                <input 
                    type="text" 
                    name="title" 
                    id="title" 
                    class="form-control rounded-3 py-2 @error('title') is-invalid @enderror" 
                    value="{{ old('title') }}" 
                    placeholder="Ej. Preparar informe trimestral..."
                    required
                    autofocus
                >
                @error('title')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="description" class="form-label text-secondary fw-semibold fs-7 mb-2">
                    Descripción
                </label>
                <textarea 
                    name="description" 
                    id="description" 
                    rows="3" 
                    class="form-control rounded-3 py-2 @error('description') is-invalid @enderror" 
                    placeholder="Detalles adicionales de la tarea..."
                >{{ old('description') }}</textarea>
                @error('description')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="category_id" class="form-label text-secondary fw-semibold fs-7 mb-2">
                    Categoría
                </label>
                <select 
                    name="category_id" 
                    id="category_id" 
                    class="form-select rounded-3 py-2 @error('category_id') is-invalid @enderror" 
                                    >
                    <option value="" disabled selected>Selecciona una categoría</option>
                    @foreach($categories as $category)
                        <option 
                            value="{{ $category->id }}" 
                            {{ old('category_id') == $category->id ? 'selected' : '' }}
                        >
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
                @error('category_id')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="tags" class="form-label text-secondary fw-semibold fs-7 mb-2">
                    Etiquetas
                </label>

                @if($tags->isNotEmpty())

                    <select
                        name="tags[]"
                        multiple
                        class="form-select tom-select @error('tags') is-invalid @enderror"
                    >
                        @foreach($tags as $tag)
                            <option
                                value="{{ $tag->id }}"
                                @selected(in_array($tag->id, old('tags', [])))
                            >
                                {{ $tag->name }}
                            </option>
                        @endforeach
                    </select>

                    <div class="form-text">
                        Puedes buscar y seleccionar una o varias etiquetas.
                    </div>

                @else

                    <span class="text-muted fs-7">
                        No hay etiquetas creadas aún.
                    </span>

                @endif

                @error('tags')
                    <div class="invalid-feedback d-block">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="d-flex align-items-center gap-3 pt-2">
                <x-btns.btn_primary type="submit">
                    Guardar
                </x-btns.btn_primary>

                <x-btns.btn_secondary href="{{ route('tasks.index') }}">
                    Cancelar
                </x-btns.btn_secondary>
            </div>

        </form>
    </x-forms.form_card>

</x-layout>