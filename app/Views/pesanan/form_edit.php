<!DOCTYPE html>
<html>
<head>
    <title>Edit Pesanan</title>
</head>
<body>

    <h1>Edit Pesanan #<?= esc($pesanan['id_pesanan']) ?></h1>
    <p><a href="/pesanan">Kembali ke Daftar Pesanan</a></p>

        <form action="/pesanan/<?= esc($pesanan['id_pesanan']) ?>" method="post"> 
        
        <input type="hidden" name="_method" value="PUT">
        
        <input type="hidden" name="id_pesanan" value="<?= esc($pesanan['id_pesanan']) ?>">
        
        <label for="id_pelanggan">ID Pelanggan:</label><br>
        <input type="number" id="id_pelanggan" name="id_pelanggan" value="<?= esc($pesanan['id_pelanggan']) ?>" required><br><br>

        <label for="id_produk">ID Produk:</label><br>
        <input type="number" id="id_produk" name="id_produk" value="<?= esc($pesanan['id_produk']) ?>" required><br><br>

        <label for="total_harga">Total Harga:</label><br>
        <input type="number" id="total_harga" name="total_harga" value="<?= esc($pesanan['total_harga']) ?>" required><br><br>

        <label for="status_pesanan">Status Pesanan:</label><br>
        <select id="status_pesanan" name="status_pesanan" required>
            <option value="pending" <?= ($pesanan['status_pesanan'] == 'pending') ? 'selected' : '' ?>>Pending</option>
            <option value="diproses" <?= ($pesanan['status_pesanan'] == 'diproses') ? 'selected' : '' ?>>Diproses</option>
            <option value="selesai" <?= ($pesanan['status_pesanan'] == 'selesai') ? 'selected' : '' ?>>Selesai</option>
            <option value="dibatalkan" <?= ($pesanan['status_pesanan'] == 'dibatalkan') ? 'selected' : '' ?>>Dibatalkan</option>
        </select><br><br>

        <input type="submit" value="Update Pesanan">
    </form>

</body>
</html>