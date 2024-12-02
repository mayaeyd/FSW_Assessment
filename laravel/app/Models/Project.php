<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [ 'name' ];

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_project');
    }
}
