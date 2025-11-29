<?php

namespace App\Models;

use CodeIgniter\Model;

class PesananModel extends Model
{
    // Nama tabel di database
    protected $table      = 'pesanan'; 
    // Kunci utama (Primary Key) dari tabel
    protected $primaryKey = 'id_pesanan'; 
    
    // Tipe data yang dikembalikan (object atau array)
    protected $returnType = 'array'; 
    // Aktifkan atau nonaktifkan penggunaan soft deletes
    protected $useSoftDeletes = false; 

    // Field/kolom yang diizinkan untuk diisi (Insert/Update)
    protected $allowedFields = ['id_pelanggan', 'id_produk', 'total_harga','status_pesanan']; 

    // Timestamping (optional, jika Anda memiliki kolom created_at dan updated_at)
    protected $useTimestamps = true; 
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
}