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
        $this->call(QuestionnaireSeeder::class);
        $this->call(QuestionSeeder::class);
        $this->call(ImpactSeeder::class);
        $this->call(QuestionQuestionnaireSeeder::class);
        $this->call(TypeMeasureSeeder::class);
        $this->call(InterventionSeeder::class);
        $this->call(ProbabilitySeeder::class);
        $this->call(RiskSeeder::class);
        $this->call(ReportSeeder::class);
        $this->call(AnswerSeeder::class);
        $this->call(ResultSeeder::class);
  //      $this->call(QuestionnaireUserSeeder::class);
    }
}
