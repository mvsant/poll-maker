<?php

namespace Database\Seeders;

use App\Models\Poll;
use App\Models\Poll_alternatives;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        User::factory(5)->has(
            Poll::factory(random_int(5, 10))
                ->has(Poll_alternatives::factory(random_int(2, 3)))
        )->create();
    }
}
