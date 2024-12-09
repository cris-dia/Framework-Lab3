<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    public function run()
    {
        DB::table('categories')->insert([
            ['name' => 'Ficțiune', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Non-Ficțiune', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'SF', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Istorie', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}

