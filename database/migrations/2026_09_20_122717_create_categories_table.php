<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration{
    public function up(): void{
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            //Nama kategori (makanan, minuman, kosmetik, dll)
            $table->string('slug')->unique();
            //Slug untuk URL yang ramah SEO
            $table->timestamps();
        });
    }
    public function down(): void{
        Schema::dropIfExists('categories');
    }
};
