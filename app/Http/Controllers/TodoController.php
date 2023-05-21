<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'todo' => Todo::all(),
            'projects' => Project::whereNot('status', 'Done')->get(),
        ];

        return view('backend.pages.todo.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $store = $request->validate([
            'name' => 'required',
            'project_id' => 'required',
        ]);
        $store['status'] = 'New';
        Todo::create($store);
        $request->session()->flash('pesan', 'Data berhasil ditambahkan');
        return redirect('/todo-list');
    }

    /**
     * Display the specified resource.
     */
    public function show(Todo $todo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Todo $todo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Todo $todo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Todo $todo)
    {
        //
    }

    public function data(Todo $todo)
    {
        $todo = Todo::findOrFail($todo->id);
        $data = [
            'todos' => $todo,
        ];
        return response()->json($data);
    }
}
