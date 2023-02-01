<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;


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
        // $this->call(ActivitySeeder::class);
        $this->call(CourseSeeder::class);
        $this->call(CategorySeeder::class);
        // $this->call(DeliverySeeder::class);
        $this->call(EmblemSeeder::class);
        // $this->call(GradeSeeder::class);
        $this->call(RatingSeeder::class);
        $this->call(ResourceFileSeeder::class);
        $this->call(ResourceTextSeeder::class);
        $this->call(ResourceURLSeeder::class);
    }
}
