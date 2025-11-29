<!DOCTYPE html>
<html>
<head>
    <title>Daftar Pesanan</title>
</head>
<body>

    <h1>Daftar Pesanan</h1>
    <p><a href="/pesanan/new">Tambah Pesanan Baru</a></p>

    <?php if (session()->getFlashdata('success')): ?>
        <p style="color: green;"><?= session()->getFlashdata('success') ?></p>
    <?php endif; ?>

    <table border="1" width="100%">
        <thead>
            <tr>
                <th>ID Pesanan</th>
                <th>ID Produk</th>
                <th>ID Pelanggan</th> 
                <th>Total Harga</th>
                <th>Status</th>
                <th>Tanggal Dipesan</th>
                <th>Tanggal Diedit</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($pesanan) && is_array($pesanan)): ?>
                <?php foreach ($pesanan as $item): ?>
                <tr>
                    <td><?= esc($item['id_pesanan']) ?></td> 
                    <td><?= esc($item['id_produk']) ?></td> 
                    <td><?= esc($item['id_pelanggan']) ?></td> 
                    <td>Rp <?= esc(number_format($item['total_harga'], 0, ',', '.')) ?></td> 
                    <td><?= esc($item['status_pesanan']) ?></td> 
                    <td><?= esc($item['created_at']) ?></td> 
                    <td><?= esc($item['updated_at']) ?></td> 
                    <td>
                        <a href="/pesanan/<?= esc($item['id_pesanan']) ?>/edit">Edit</a>
                        <a href="/pesanan/delete/<?= esc($item['id_pesanan']) ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="8">Tidak ada data pesanan ditemukan.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>

</body>
</html>