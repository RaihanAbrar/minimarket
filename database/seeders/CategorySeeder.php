<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder{
    public function run(): void{
         $categories = [
            'Makanan', 
            'Minuman', 
            'Kebutuhan Rumah Tangga', 
            'Obat-obatan',
        ];
        
        foreach ($categories as $cat) {
            Category::create([
                'name' => $cat,
                'slug' => Str::slug($cat)
            ]);
        }
    }
}
