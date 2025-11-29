<!DOCTYPE html>
<html>
<head>
    <title>Tambah Pesanan Baru</title>
</head>
<body>

    <h1>Tambah Pesanan Baru</h1>
    <p><a href="/pesanan">Kembali ke Daftar Pesanan</a></p>

    <form action="/pesanan" method="post">
        
        <label for="id_pelanggan">ID Pelanggan:</label><br>
        <input type="number" id="id_pelanggan" name="id_pelanggan" required><br><br>

        <label for="id_produk">ID Produk:</label><br>
        <input type="number" id="id_produk" name="id_produk" required><br><br>

        <label for="total_harga">Total Harga:</label><br>
        <input type="number" id="total_harga" name="total_harga" required><br><br>

        <label for="status_pesanan">Status Pesanan:</label><br>
        <select id="status_pesanan" name="status_pesanan" required>
            <option value="pending">Pending</option>
            <option value="diproses">Diproses</option>
            <option value="selesai">Selesai</option>
            <option value="dibatalkan">Dibatalkan</option>
        </select><br><br>

        <input type="submit" value="Simpan Pesanan">
    </form>

</body>
</html>