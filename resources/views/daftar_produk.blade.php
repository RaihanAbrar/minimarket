<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Produk - Toko Kelontong</title>
    <style>
        table {
            width: 80%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th,td {
            border: 1px solid #9a9a9a;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #bebebe;
        }
    </style>
</head>
<body>
    <h2>Daftar Produk Toko Kelontong</h2>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Produk</th>
                <th>SKU</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Gambar</th>
            </tr>
        </thead>
        <tbody>
            @foreach($produks as $index => $produk)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $produk['nama'] }}</td>
                <td>{{ $produk['sku'] }}</td>
                <td>Rp {{ number_format($produk['harga'], 0, ',', '.') }}</td>
                <td>{{ $produk['stok'] }}</td>
                <td><img src="{{ $produk['gambar'] }}" alt="{{ $produk['nama'] }}" width="100"></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>