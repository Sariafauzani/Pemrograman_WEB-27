<?php
include('Model.php');
class BukuModel extends Model
{
    private $db;
    private $table = 'm_buku';
    public function __construct()
    {
        include_once('../lib/connection.php');
        $this->db = $db;
        $this->db->set_charset('utf8');
    }
    public function insertData($data)
    {
        $query = $this->db->prepare("INSERT INTO {$this->table} (buku_kode, buku_nama, jumlah, deskripsi, gambar) VALUES (?, ?, ?, ?, ?)");
        $query->bind_param('ssiss', $data['buku_kode'], $data['buku_nama'], $data['jumlah'], $data['deskripsi'], $data['gambar']);
        $query->execute();
    }
    public function getData()
    {
        // query untuk mengambil data dari tabel bank_soal
        return $this->db->query("select * from {$this->table} ");
    }
    public function getDataById($id)
    {
        // query untuk mengambil data berdasarkan id
        $query = $this->db->prepare("select * from {$this->table} where buku_id = ?");
        // binding parameter ke query "i" berarti integer. Biar tidak kena SQL Injection
        $query->bind_param('i', $id);
        // eksekusi query
        $query->execute();
        // ambil hasil query
        return $query->get_result()->fetch_assoc();
    }
    public function updateData($id, $data)
    {
        $query = $this->db->prepare("UPDATE {$this->table} SET buku_kode = ?, buku_nama = ?, jumlah = ?, deskripsi = ?, gambar = ? WHERE buku_id = ?");
        $query->bind_param('ssissi', $data['buku_kode'], $data['buku_nama'], $data['jumlah'], $data['deskripsi'], $data['gambar'], $id);
        $query->execute();
    }

    public function deleteData($id)
    {
        $query = $this->db->prepare("DELETE FROM {$this->table} WHERE buku_id = ?");
        $query->bind_param('i', $id);
        $query->execute();
    }
}