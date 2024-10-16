<?php

namespace Database\Seeders;

use App\Jobs\TaskHandelarJob;
use App\Models\Task;
use App\Models\User;
use Database\Seeders\taskSeeder;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::truncate();   // delete old sessions and userd from database

        
        
      
            $this->call([
                UserSeeder::class,  // to run the code in the seeder class that get the factory method
                TaskSeeder::class, // to run the code in the seeder class that get the factory method
            ]);
            // TaskHandelarJob::dispatch()->onQueue('task_seeder');

       
    }
}
