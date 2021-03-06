<?php

namespace Database\Factories;

use App\Models\Todo;
use App\Models\User
use Illuminate\Database\Eloquent\Factories\Factory;

class TodoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Todo::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
        ];
    }

$factory->define(Todo::class, function (Faker $faker) {
    return [
        'title'     => $faker->title,
        'status'    => $faker->boolean,
        'user_id'   => factory(User::class),
    ];
});
}
