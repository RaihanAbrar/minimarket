<?php

namespace Database\Seeders;

Use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
Use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder{
    public function run(): void{
        DB::table('users')->insert([
            'name' => 'Abrar',
            'email' => 'abrar@example.com',
            'password' => Hash::make('password'),
        ]);
        User::factory()->count(10)->create();
    }
}
