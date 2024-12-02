<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function get_projects(Request $request){
        $projects = Project::all();
        return response()->json([
            "projects"=>$projects,
        ]);
    }

    public function create_project(Request $request){
        $project = Project::create([
            "name"=> $request->name,
        ]);

        return response()->json([
            "created_project"=> $project,
        ]);
    }

    public function update_project(Request $request)
    {
        $project = Project::find($request->id)->update([
            "name" => $request->name,
        ]);

        return response()->json([
            "updated_project" => $project,
        ]);

    }

    
}
