<?php

namespace Database\Seeders;

use App\Models\DefaultGameSettings;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::insert("INSERT INTO `default_game_settings` (`name`, `game_mode`, `seconds`, `miliseconds`, `max_words_len`) VALUES
        ('fácil', 'randomwords', 5, 0, 5),
        ('médio', 'randomwords', 4, 0, 10),
        ('difícil', 'randomwords', 4, 0, 20),
        ('mestre', 'randomletters', 4, 0, 10);");
    }
}
