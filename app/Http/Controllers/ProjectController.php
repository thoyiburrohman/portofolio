<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'project' => Project::all(),
        ];

        return view('backend.pages.project.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.pages.project.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $store = $request->validate([
            'name' => 'required',
            'category' => 'required',
            'client' => 'required',
            'revenue' => 'required',
            'deadline' => 'required',
            'feature' => 'required',
        ]);

        $store['status'] = 'New';
        // dd($store);
        Project::create($store);
        $request->session()->flash('pesan', 'Data berhasil ditambahkan');
        return redirect('/project');
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        $project = Project::findOrFail($project->id);
        $data = [
            'feature' => $project->feature,
        ];

        return view('backend.pages.project.view', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        $project = Project::findOrFail($project->id);
        $data = [
            'projects' => $project,
            'feature' => $project->feature,
        ];

        return view('backend.pages.project.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        //
    }
    /**
     * Update Status the specified resource in storage.
     */
    public function updateStatus(Request $request, Project $project)
    {
        Project::where('id', $request->id)->update(['status' => $request->status]);
        $request->session()->flash('pesan', 'Status berhasil diupdate');
        return redirect('/project');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, Project $project)
    {
        $project::destroy($project->id);
        $request->session()->flash('pesan', 'Data berhasil dihapus');
        return redirect('/project');
    }

    public function data(Project $project)
    {
        $project = Project::findOrFail($project->id);
        $data = [
            'projects' => $project,
        ];
        return response()->json($data);
    }
}
