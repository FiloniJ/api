<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $num = 200;
        \App\Models\Diary::factory($num)->create();
        \App\Models\Expenses::factory($num)->create();
        \App\Models\Income::factory($num)->create();
        \App\Models\Tasks::factory($num)->create();
    }
}
