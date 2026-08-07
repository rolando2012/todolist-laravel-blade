<x-layout title="To-Do List | Nueva tarea">
    <x-titles.title_secondary>
        Nueva tarea
    </x-titles.title_secondary>
    <x-forms.form_card>
        <form action="{{ route('tasks.store') }}" method="POST">
            @csrf
            @include('tasks.partials.form', [
                'task' => new \App\Models\Task()
            ])
        </form>
    </x-forms.form_card>
</x-layout>