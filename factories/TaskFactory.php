<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'accepted' => fake()->randomElement(['Si', 'No']), //randomElement tan solo permite coger los dos elementos dentro del parentesis
            'state' => fake()->randomElement(['ToDo', 'InProgress', 'Done']),
            'start_date' => fake()->dateTimeBetween('-1 year', 'now'),
            'final_date' => fake()->dateTimeBetween('-1 year', 'now'),
            'price' => fake()->randomFloat(2,0,100), //genera un número random con 2 decimales entre 0 y 100
            'manages' => fake()->randomElement(['Pymeralia', 'Personalmente']),
            'user_id' => function () {
                return fake()->unique()->randomNumber();
            },
            'questionnaires_id' => function () {
                return fake()->unique()->randomNumber();
            },
            'answer_id' => function () {
                return fake()->unique()->randomNumber();
            },
            'budget_id' => function () {
                return fake()->unique()->randomNumber();
            },
            'impact_id' => function () {
                return fake()->unique()->randomNumber();
            },
            'percentage' => fake()->randomNumber(2),
            'hidden' => fake()->dateTimeBetween('-1 year', 'now'),
            'created_at' => fake()->dateTimeBetween('-1 year', 'now'),
            'updated_at' => fake()->dateTimeBetween('-1 year', 'now'),
        ];
    }
}
