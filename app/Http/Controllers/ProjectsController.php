<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class ProjectsController extends Controller
{
    //

    public function index()
    {

        $projects = auth()->user()->projects;


        return view('projects.index', compact('projects'));
    }


    public function store()
    {
        $attributes = request()->validate([
            'title'=>'required',
            'description'=> 'required',
            ]);

        $attributes["user_id"]= auth()->id();



        Project::create($attributes);

        return redirect('/projects');
    }

    public function show() {

        $project = Project::findOrFail(request('project'));

        // if(auth()->id() !== $project->user_id) {
        //     abort(403);
        // }

        return view('projects.show', compact('project'));
    }

}
