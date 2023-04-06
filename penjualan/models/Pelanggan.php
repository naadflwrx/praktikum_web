<?php
class Pelanggan{
    private $koneksi;
    // akses property yang bersifat private menggunakan $this
    public function __construct(){
    // function construct adalah function yang pertama kali di jalankan
    global $conn;
    $this->koneksi = $conn;
    }

    public function tampil(){
    // cetak seluruh data table produk menggunakan query select
    $sql = "SELECT p.*, k.nama AS member 
    FROM pelanggan p INNER JOIN kartu k ON k.id = p.kartu_id
    ORDER BY p.id DESC";
    // gunakan method prepare untuk mengirim data $sql
    $ps = $this->koneksi->prepare($sql);
    // eksekusi data yang sudah di siapkan menggunakan method prepare
    $ps->execute();
    // siapkan data sql yang sudah di eksekusi menggunakan method fetchAll
    $data = $ps->fetchAll();
    // kembalikan data produk yang dalam bentuk array
    return $data;
    }
}

?>