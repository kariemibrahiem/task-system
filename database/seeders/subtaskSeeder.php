<?php

namespace Database\Seeders;

use App\Models\Subtask;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class subtaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Subtask::create([
            'task_id' => 1,
            'title' => 'tit',
            'description' => 'Subtask 1',
            'is_completed' => false,
        ]);
    }
}
