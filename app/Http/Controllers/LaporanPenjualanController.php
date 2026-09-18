<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporanPenjualanController extends Controller
{
    public function __invoke(Request $request)
    {
         $data = [
            'total_transaksi' => 150,
            'total_produk' => 320,
            'total_pendapatan' => 25000000,
            'produk_terlaris' => 'Laptop ThinkPad',
        ];

        return view('laporan', compact('data'));
    }
}
