<?php
class Transaksi
{
    //member1 variabel
    private $koneksi;
    //member2 konstruktor untuk koneksi database
    public function __construct()
    {
        global $dbh; //panggil instance object di koneksi.php 
        $this->koneksi = $dbh;
    }
    //member3 method2 CRUD
    public function dataTransaksi()
    {
        $sql = "SELECT sr.*, c.nama AS customer_nama, m.nama AS montir_nama, j.nama As jasa_nama, p.nama AS part_nama, p.harga
                FROM service sr
                INNER JOIN customer c ON c.id = sr.customer_id
                INNER JOIN montir m ON m.id = sr.montir_id
                INNER JOIN jasa j ON j.id = sr.jasa_id
                INNER JOIN part p ON p.id = sr.part_id
                ORDER BY sr.id DESC";
        //$data_transaksi = $dbh->query($sql);
        //menggunakan mekanisme prepare statement PDO
        $ps = $this->koneksi->prepare($sql);
        $ps->execute();
        $rs = $ps->fetchAll();
        return $rs;
    }

    public function getTransaksi($id)
    {
        $sql = "SELECT sr.*, c.nama AS customer_nama, m.nama AS montir_nama, j.nama As jasa_nama, p.nama AS part_nama, p.harga
                FROM service sr
                INNER JOIN customer c ON c.id = sr.customer_id
                INNER JOIN montir m ON m.id = sr.montir_id
                INNER JOIN jasa j ON j.id = sr.jasa_id
                INNER JOIN part p ON p.id = sr.part_id
                WHERE p.id = ?";
        //menggunakan mekanisme prepare statement PDO
        $ps = $this->koneksi->prepare($sql);
        $ps->execute([$id]);
        $rs = $ps->fetch();
        return $rs;
    }

    public function simpan($data)
    {
        $sql = "INSERT INTO service(kode_transaksi, date_transaksi, customer_id, montir_id, jasa_id, part_id)
                VALUES(?,?,?,?,?,?)";
        //menggunakan mekanisme prepare statement PDO
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }

    public function ubah($data)
    {
        $sql = "UPDATE service SET kode_transaksi=?, date_transaksi=?, customer_id=?, montir_id=?, jasa_id=?, part_id=?
                WHERE id=?";
        //menggunakan mekanisme prepare statement PDO
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }

    public function hapus($id)
    {
        $sql = "DELETE FROM service WHERE id=?";
        //menggunakan mekanisme prepare statement PDO
        $ps = $this->koneksi->prepare($sql);
        $ps->execute([$id]);
    }
}
