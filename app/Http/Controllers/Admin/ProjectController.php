<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Technology;
use App\Models\Type;
use App\Functions\Helper;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::orderBy('date_of_creation')->paginate(20);

        $projects = Project::all();
        return view('admin.projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.projects.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $form_data = $request->all();
            $new_project = new Project();
            $new_project-> title = $form_data['title'];
            $new_project-> slug = Helper::generateSlug($new_project->title, new Project());
            $new_project-> description = $form_data['description'];
            $new_project-> date_of_creation = $form_data['date_of_creation'];
            $new_project-> author = $form_data['author'];

            $new_project->save();

            return redirect()->route('admin.projects.index');

       /* $exists = Project::where('title', $request->title)->first();
        if ($exists) {
            return redirect()->route('admin.projects.index')->with('error', 'Project already exists');
        }

        $projectData = $request->except('_token');
        Project::create($projectData);

        return redirect()->route('admin.projects.index')->with('success', 'Project created successfully'); */

    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        return view('admin.projects.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
