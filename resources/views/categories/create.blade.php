<x-layout title="To-Do List | Nueva Categoría">

    <h2 class="fw-bold text-dark mb-4 fs-3">Nueva categoría</h2>

    <x-forms.form_card>
        <form action="{{ route('categories.store') }}" method="POST">
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
                    placeholder="Ej. Estudio, Trabajo..."
                    required
                    autofocus
                >                
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="d-flex align-items-center gap-3">
            
                <x-btns.btn_primary type="button" icon="floppy-fill">
                    Guardar
                </x-btns.btn_primary>

                <x-btns.btn_secondary href="{{ route('categories.index') }}" >
                    Cancelar
                </x-btns.btn_secondary>
            </div>
        </form>
    </x-forms.form_card>
</x-layout>