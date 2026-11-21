<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        foreach (['Teknologi', 'Akuntansi', 'Manajemen'] as $name) {
            Category::firstOrCreate(['name' => $name]);
        }
    }
}
