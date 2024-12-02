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
}
