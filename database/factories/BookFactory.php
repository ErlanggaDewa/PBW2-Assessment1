<?php

namespace Database\Factories;

use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
  /**
   * Define the model's default state.
   *
   * @return array
   */
  public function definition()
  {
    $status = ['Tersedia', 'Terjual', 'Disewa', 'Rusak'];
    return [
      'isbn' => $this->faker->unique()->isbn10(),
      'title' => $this->faker->words(2, true),
      'author' => $this->faker->name(),
      'price' => $this->faker->randomNumber(6, true),
      'release_year' => $this->faker->year(),
      'status' => Arr::random($status),
      'description' => $this->faker->paragraph(6)
    ];
  }
}
