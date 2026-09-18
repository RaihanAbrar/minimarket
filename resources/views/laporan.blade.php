<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Penjualan</title>
</head>
<body>
    <h1>Rekap Statistik Penjualan</h1>
        <h3>Total Transaksi</h3>
        <p>{{ $data['total_transaksi'] }}</p>
   
        <h3>Total Produk Terjual</h3>
        <p>{{ $data['total_produk'] }}</p>
      
        <h3>Total Pendapatan</h3>
        <p>Rp {{ number_format($data['total_pendapatan'], 0, ',', '.') }}</p>
      
        <h3>Produk Terlaris</h3>
        <p>{{ $data['produk_terlaris'] }}</p>
</body>
</html>