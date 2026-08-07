<x-layout title="To-Do List | Editar tarea">
    <x-titles.title_secondary>
        Editar tarea
    </x-titles.title_secondary>
    <x-forms.form_card>
        <form action="{{ route('tasks.update', $task) }}" method="POST">
            @csrf
            @method('PUT')
            @include('tasks.partials.form', compact('task'))
        </form>
    </x-forms.form_card>
</x-layout>