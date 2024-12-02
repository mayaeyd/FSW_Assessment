<?php

use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\UsersController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::prefix("/projects")->middleware('update.requests.num')->group(function(){
    Route::get("/",[ProjectsController::class,"get_projects"]);
    Route::post("/",[ProjectsController::class,"create_project"]);
    Route::get("/{id}",[ProjectsController::class,"get_project"]);
    Route::put("/{id}",[ProjectsController::class,"update_project"]);
    Route::delete("/{id}",[ProjectsController::class,"delete_project"]);
});

Route::prefix("/users")->middleware('update.requests.num')->group(function(){
    Route::get("/",[UsersController::class,"get_users"]);
    Route::post("/",[UsersController::class,"create_user"]);
    Route::get("/{id}",[UsersController::class,"get_user"]);
    Route::put("/{id}",[UsersController::class,"update_user"]);
    Route::delete("/{id}",[UsersController::class,"delete_user"]);
});