<?php

namespace Database\Factories;

use App\Models\Contact;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'familyname' => $this->faker->lastName(),
            'name' => $this->faker->firstName(),
            'gender' => $this->faker->randomElement($array=['男性','女性']),
            'email' => $this->faker->safeEmail(),
            'postcode' => $this->faker->regexify('[1-9]{3}-[0-9]{4}'),
            'address' => $this->faker->prefecture(),
            'address' => $this->faker->streetAddress(),
            'building_name' => $this->faker->secondaryAddress(),
            'option' => $this->faker->realText(10),
            'created_at' => $this->faker->date(),
            'updated_at' => $this->faker->date(),
        ];
    }
}
