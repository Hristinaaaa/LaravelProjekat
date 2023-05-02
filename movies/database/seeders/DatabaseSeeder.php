<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Reziser;


use App\Models\Film;


use App\Models\Glumac;

use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::truncate();
        Film::truncate();
        Reziser::truncate();
        Glumac::truncate();

        $user1 = User::factory()->create();
        $user2 = User::factory()->create();
        $user3 = User::factory()->create();
        $user4 = User::factory()->create();

        $reziser1 = Reziser::factory()->create();
        $reziser2 = Reziser::factory()->create();

        $glumac1 = Glumac::factory()->create();
        $glumac2 = Glumac::factory()->create();

        Film::factory(3)->create([
            'user_id' => $user1->id,
            'reziser_id' => $reziser1->id,
            'glumac_id' => $glumac1->id
        ]);
        Film::factory(4)->create([
            'user_id' => $user2->id,
            'reziser_id' => $reziser1->id,
            'glumac_id' => $glumac1->id
        ]);
        Film::factory(2)->create([
            'user_id' => $user3->id,
            'reziser_id' => $reziser2->id,
            'glumac_id' => $glumac2->id
        ]);
        Film::factory(2)->create([
            'user_id' => $user4->id,
            'reziser_id' => $reziser2->id,
            'glumac_id' => $glumac2->id
        ]);
    }
}
