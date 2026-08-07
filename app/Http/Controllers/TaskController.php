<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreTaskRequest;
use App\Http\Requests\UpdateTaskRequest;
use App\Models\Category;
use App\Models\Tag;
use App\Models\Task;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::latest()->get();
        return view('tasks.index',compact('tasks'));
    }

    public function create()
    {
        $categories = Category::orderBy('name')->get();
        $tags = Tag::orderBy('name')->get();
        return view('tasks.create', compact('categories', 'tags'));
    }

    public function store(StoreTaskRequest $request)
    {
        $task = Task::create([
            'title' => $request->title,
            'description' => $request->description,
            'category_id' => $request->category_id,
            'state' => $request->boolean('state'),
        ]);
        $task->tags()->sync($request->input('tags',[]));
        return redirect()->route('tasks.index')->with('success','Tarea creada correctamente.');
    }

    public function show(Task $task)
    {
        return view('tasks.show',compact('task'));
    }

    public function edit(Task $task)
    {
        //
    }

    public function update(UpdateTaskRequest $request, Task $task)
    {
        // 
    }

    public function destroy(Task $task)
    {
        //
    }
}
