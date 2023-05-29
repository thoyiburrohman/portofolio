<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $store = $request->validate([
            'name' => 'required',
            'tech' => 'required',
            'client' => 'required',
            'revenue' => 'required',
            'deadline' => 'required',
        ]);
        if ($request->image) {
            $store['image'] = $request->file('image')->store('project_image');
        }
        $store['status'] = 'New';
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
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        $update = $request->validate([
            'name' => 'required',
            'tech' => 'required',
            'client' => 'required',
            'revenue' => 'required',
            'deadline' => 'required',
        ]);
        if ($request->image) {
            if ($request->gambarLama) {
                Storage::delete($request->gambarLama);
            }
            $update['image'] = $request->file('image')->store('project_image');
        }
        Project::where('id', $project->id)
            ->update($update);
        $request->session()->flash('pesan', 'Data berhasil diubah');
        return redirect('/project');
    }
    /**
     * Update Status the specified resource in storage.
     */
    public function updateStatus(Request $request, Project $project)
    {
        // dd($request->all());
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
