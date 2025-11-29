<?php 
// PASTIKAN BARIS INI ADA DI AWAL FILE
namespace App\Controllers;

// Pastikan Anda telah membuat file app/Models/PesananModel.php
use App\Models\PesananModel; 
use CodeIgniter\Controller; 

// Pembungkus Class dan inherit dari Controller
class Pesanan extends Controller
{
    public function index()
    {
        $model = new PesananModel();
        
        // Mengambil semua data dari tabel pesanan
        $data['pesanan'] = $model->findAll(); 
        
        // Memuat view untuk menampilkan data
        return view('pesanan/list_pesanan', $data); 
    }
    // READ: Menampilkan form tambah data
    public function new () 
    {
        return view('pesanan/form_tambah');
    }

    // CREATE: Memproses data yang dikirim dari form (POST /pesanan)
    public function create() 
    {
        // PENTING: Gunakan $this->validate() di sini jika Anda ingin validasi data

        $model = new PesananModel();
        
        // Ambil semua data POST
        $data = $this->request->getPost(); 
        
        // Simpan data ke database. Ini akan berhasil jika nama input form cocok 
        // dengan $allowedFields di PesananModel.
        $model->insert($data); 

        // Redirect kembali ke daftar pesanan
        return redirect()->to('/pesanan')->with('success', 'Data pesanan berhasil ditambahkan!');
    }

    // EDIT: Menampilkan form edit yang sudah terisi data
    public function edit($id = null)
    {
        $model = new PesananModel();
        
        // Mengambil satu baris data berdasarkan primary key
        $data['pesanan'] = $model->find($id); 
        
        // Jika data tidak ditemukan, kita bisa redirect atau tampilkan 404
        if (empty($data['pesanan'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Pesanan dengan ID ' . $id . ' tidak ditemukan.');
        }

        return view('pesanan/form_edit', $data);
    }

    // UPDATE: Memproses data perubahan dari form (POST /pesanan/update/{id})
    public function update($id)
    {
        // PENTING: Gunakan $this->validate() di sini untuk data yang diperbarui

        $model = new PesananModel();
        $data = $this->request->getPost();
        
        // Memperbarui data berdasarkan ID
        $model->update($id, $data); 

        return redirect()->to('/pesanan')->with('success', 'Data pesanan berhasil diperbarui!');
    }

    // DELETE: Menghapus data berdasarkan ID
    public function delete($id = null)
    {
        $model = new PesananModel();
        
        // Menghapus baris berdasarkan ID
        $model->delete($id); 
        
        return redirect()->to('/pesanan')->with('success', 'Data pesanan berhasil dihapus!');
    }
} // <--- PASTIKAN CLASS DITUTUP DI AKHIR FILE