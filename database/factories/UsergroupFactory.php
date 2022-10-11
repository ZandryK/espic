<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class UsergroupFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'group_name'=>$this->faker->regexify('[A-Z]{3}[0-4]{1}')
        ];
    }
}
