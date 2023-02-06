<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Report>
 */
class ReportFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        $user_id = User::all()->pluck('id')->toArray();


        return [
            'name' => $this->faker->unique()->name(),
            'user_id' => $this->faker->randomElement($user_id),
            'date' => $this->faker->date(),
        ];
    }
}
