<?php

use App\Http\Controllers\ProjectsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::prefix("/projects")->group(function(){
    Route::get("/",[ProjectsController::class,"get_projects"]);
    Route::post("/",[ProjectsController::class,"create_project"]);
    Route::get("/{id}",[ProjectsController::class,"get_project"]);
    Route::put("/{id}",[ProjectsController::class,"update_project"]);
    Route::delete("/{id}",[ProjectsController::class,"delete_project"]);
});