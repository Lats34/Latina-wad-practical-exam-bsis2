<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Transaction;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class TransactionFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
{
    return [
        'transaction' => $this->faker->word, // or another appropriate method
        'description' => $this->faker->sentence, // use sentence for a short description
        'status' => $this->faker->randomElement(['unsuccessful', 'declined']),
        'total_amount' => $this->faker->randomFloat(2, 1, 1000), // Random float for total amount
        'transaction_number' => $this->faker->unique()->numerify('TRN-#####'), // Example format
        'remember_token' => Str::random(10),
    ];
}

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
