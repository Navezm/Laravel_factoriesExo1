<?php

namespace Database\Seeders;

use App\Models\Student;
use App\Models\Training;
use App\Models\TrainingType;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Training::factory()->count(6)->create();
        TrainingType::factory()->count(10)->create();
        Student::factory()->count(50)->create();

        $this->call([
            BuildingSeeder::class,
        ]);
    }
}
