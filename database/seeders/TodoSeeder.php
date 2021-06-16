<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Todo;
use App\Models\User;

class TodoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
	$userOne = factory(User::class)->create([
            'name' => 'John Doe'
        ]);

        $userTwo = factory(User::class)->create([
            'name' => 'Anne Doe'
        ]);

//        TODOS by this month

        factory(Todo::class, 15)->create([
            'user_id' => $userOne,
            'status' => true
        ]);

        factory(Todo::class, 20)->create(['user_id' => $userOne]);

        factory(Todo::class, 14)->create([
            'user_id' => $userTwo,
            'status' => true
        ]);

        factory(Todo::class, 23)->create(['user_id' => $userTwo]);

//        TODOS ONE MONTH AGO

        factory(Todo::class, 5)->create([
            'user_id' => $userOne,
            'status' => true,
            'created_at' => now()->subMonth()
        ]);

        factory(Todo::class, 10)->create(['user_id' => $userOne, 'created_at' => now()->subMonth()]);

        factory(Todo::class, 4)->create([
            'user_id' => $userTwo,
            'status' => true,
            'created_at' => now()->subMonth()
        ]);

        factory(Todo::class, 13)->create(['user_id' => $userTwo, 'created_at' => now()->subMonth()]);

//        TODOS TWO MONTHS AGO

        factory(Todo::class, 8)->create([
            'user_id' => $userOne,
            'status' => true,
            'created_at' => now()->subMonths(2)
        ]);

        factory(Todo::class, 16)->create(['user_id' => $userOne, 'created_at' => now()->subMonths(2)]);

        factory(Todo::class, 14)->create([
            'user_id' => $userTwo,
            'status' => true,
            'created_at' => now()->subMonths(2)
        ]);

        factory(Todo::class, 23)->create(['user_id' => $userTwo, 'created_at' => now()->subMonths(2)]);
    }
}
