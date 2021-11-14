<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

class StudentFactory extends Factory
{
  /**
   * Define the model's default state.
   *
   * @return array
   */
  public function definition()
  {
    $status = ['Reguler', 'Magang', 'Beasiswa', 'Drop Out',];
    return [
      'nim' => $this->faker->unique()->randomNumber(5, true),
      'name' => $this->faker->name('Male'),
      'gender' => 'Pria',
      'class' => $this->faker->regexify('[A-Z]{3}[0-4]{3}'),
      'address' => $this->faker->address(),
      'status' => Arr::random($status),
      'img' => 'default.png',
    ];
  }
}
