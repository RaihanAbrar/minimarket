<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard_pos', [
        'nama_pegawai' => 'Raihan Abrar',
        'shift' => 'Pagi (08:00 - 15:00)',
    ]);
});

Route::get('/product/{id}', function ($id) {
    return "Menampilkan data product dengan ID: " . $id;
});

Route::get('/product/cari/{name?}', function ($name = null) {
    if ($name) {
        return "Hasil pencarian produk: " . $name;
    }
    return "Silakan masukkan kata kunci pencarian pada URL /product/cari/{name}";
});

Route::get('/admin/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::prefix('admin')->group(function () {
    Route::get('/product', function () {
        return "Halaman Kelola Produk (Admin)";
    })->name('admin.product');

    Route::get('/kategori', function () {
        return "Halaman Kelola Kategori Produk (Admin)";
    })->name('admin.kategori');
});

Route::prefix('kasir')->group(function () {
    Route::get('/transaksi', function () {
        return "Halaman Input Transaksi Penjualan (Kasir)";
    })->name('kasir.transaksi');
});

Route::get('/produk-toko', function () {
    $dataProduk = [
        [
            'nama' => 'Beras Premium 5kg',
            'sku' => 'BRS-001',
            'harga' => 65000,
            'stok' => 15,
            'gambar' => 'https://id-test-11.slatic.net/p/91c0b32d710fd6a78cff13c2deb3bbb3.jpg'
        ],
        [
            'nama' => 'Minyak Goreng 2L',
            'sku' => 'MYK-002',
            'harga' => 34000,
            'stok' => 20,
            'gambar' => 'https://lzd-img-global.slatic.net/g/p/84a8767b88d88a3b5158355784bc8f1e.jpg_720x720q80.jpg'
        ],
        [
            'nama' => 'Gula Pasir 1kg',
            'sku' => 'GLA-003',
            'harga' => 16000,
            'stok' => 25,
            'gambar' => 'https://cf.shopee.co.id/file/7202e472eb52588e73d6490bb7621cee'
        ],
    ];

    // Mengirimkan data ke view daftar_produk.blade.php
    return view('daftar_produk', ['produks' => $dataProduk]);
});