<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class categorytaableseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    
    public function run(): void
    {
        \App\Models\Category::factory()->count(10)->create();
        \App\Models\Category::factory()->count(5)->active()->create();
    }
}
