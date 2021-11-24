<?php

namespace Database\Seeders;

use App\Models\Game;
use Illuminate\Database\Seeder;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Game::create([
            'name' => 'Wiskunde Speletjie',
            'category_id' => 3,
        ]);
        Game::create([
            'name' => 'Minecraft',
            'category_id' => 2,
        ]);
        Game::create([
            'name' => 'Call of Duty',
            'category_id' => 1,
        ]);
    }
}
