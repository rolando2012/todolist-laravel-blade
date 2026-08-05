<x-layout title="To-Do List | Nueva Etiqueta">

    <x-titles.title_secondary >Nueva etiqueta</x-titles.title_secondary>

    <x-forms.form_card>
        <form action="{{ route('tags.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="name" class="form-label text-secondary fw-semibold fs-7 mb-2">
                    Nombre
                </label>
                <input 
                    type="text" 
                    name="name" 
                    id="name" 
                    class="form-control rounded-3 py-2 @error('name') is-invalid @enderror" 
                    value="{{ old('name') }}" 
                    placeholder="Ej. importante, pendiente..."
                    
                    autofocus
                >                
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="d-flex align-items-center gap-3">
                <x-btns.btn_primary type="submit" icon="floppy-fill">
                    Guardar
                </x-btns.btn_primary>
                <x-btns.btn_secondary href="{{ route('tags.index') }}" >
                    Cancelar
                </x-btns.btn_secondary>
            </div>
        </form>
    </x-forms.form_card>
</x-layout>