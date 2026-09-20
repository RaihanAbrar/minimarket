<?php

namespace Database\Seeders;

use App\Models\Product;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder{
    public function run(): void{
        $this->call(SupplierSeeder::class);
        
        $this->call(CategorySeeder::class);

        Product::factory(50)->create();
    }
}
