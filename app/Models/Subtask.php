<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subtask extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'description' , 'status' ];

    public function tasks()
    {
        // the relation between the task and subtask models 
        return $this->belongsTo(Task::class);
    }
}
