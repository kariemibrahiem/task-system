<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    protected $fillable = [
        'title' , 'content' , 'status'
    ];

    public function subtasks()
    {
        // the relation between the task and subtask models 
        // One task can have many subtasks.
        return $this->hasMany(Subtask::class);
    }
}

