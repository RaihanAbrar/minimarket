<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder{
    public function run(): void{
        DB::table('suppliers')->insert([
            [
                'name' => 'Supplier A',
                'phone' => '1234567890',
                'address' => 'Jl. Contoh Alamat 1, Kota A',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Supplier B',
                'phone' => '0987654321',
                'address' => 'Jl. Contoh Alamat 2, Kota B',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Supplier C',
                'phone' => '1122334455',
                'address' => 'Jl. Contoh Alamat 3, Kota C',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
