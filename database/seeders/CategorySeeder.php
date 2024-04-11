<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Support\Str;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'Accoustic',
            'slug' => 'accoustic',
            'description' => '-',
        ]);

        Category::create([
            'name' => 'Solo Vocal',
            'slug' => 'solo-vocal',
            'description' => '-',
        ]);

    }
}
