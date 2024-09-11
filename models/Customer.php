<?php
class Customer
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
    public function dataCustomer()
    {
        $sql = "SELECT * FROM customer";
        //menggunakan mekanisme prepare statement PDO
        $ps = $this->koneksi->prepare($sql);
        $ps->execute();
        $rs = $ps->fetchAll();
        return $rs;
    }
    // public function getcoba($id)
    // {
    //     $custumer = "SELECT * FROM customer WHERE id = ?";
    //     $ps = $this->koneksi->prepare($custumer);
    //     $ps->execute([$id]);
    //     $customer = $ps->fetch();

    //     $get_service = "SELECT * FROM service WHERE id = ?";
    //     $ps = $this->koneksi->prepare($get_service);
    //     $ps->execute([$customer['service_id']]);
    //     $get_service = $ps->fetch();

    //     $get_detai_jasa = "SELECT * FROM detai_jasa WHERE service_id = ?";
    //     $ps = $this->koneksi->prepare($get_detai_jasa);
    //     $ps->execute([$get_service['id']]);
    //     $get_detai_jasa = $ps->fetch();

    //     $get_jasa = "SELECT * FROM jasa WHERE id = ?";
    //     $ps = $this->koneksi->prepare($get_jasa);
    //     $ps->execute([$get_detai_jasa['jasa_id']]);
    //     $get_jasa = $ps->fetch();

    //     $get_part_service = "SELECT * FROM part_has_service WHERE service_id = ?";
    //     $ps = $this->koneksi->prepare($get_part_service);
    //     $ps->execute([$get_service['id']]);
    //     $get_part_service = $ps->fetch();

    //     $get_part = "SELECT * FROM part WHERE id = ?";
    //     $ps = $this->koneksi->prepare($get_part);
    //     $ps->execute([$get_part_service['part_id']]);
    //     $get_part = $ps->fetch();


    //     $customer['kode_transaksi'] = $get_service['kode_transaksi'];
    //     $customer['date'] = $get_service['date_transaksi'];
    //     $customer['qyt'] = $get_detai_jasa['qyt'];
    //     $customer['qty'] = $get_part_service['qty'];
    //     $customer['jasa_id'] = $get_jasa['id'];
    //     $customer['part_id'] = $get_part['id'];
    //     // var_dump($customer);
    //     return $customer;
    // }
    public function getCustomer($id)
    {
        $sql = "SELECT * FROM customer WHERE id = ?";
        //menggunakan mekanisme prepare statement PDO
        $ps = $this->koneksi->prepare($sql);
        $ps->execute([$id]);
        $rs = $ps->fetch();
        return $rs;
    }
    public function simpan($data)
    {
        $sql = "INSERT INTO customer(no_customer, nama, gender, motor, email)
        VALUES(?,?,?,?,?)";
        //menggunakan mekanisme prepare statement PDO
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }
    public function ubah($data)
    {
        $sql = "UPDATE customer SET no_customer=?, nama=?, gender=?, motor=?, email=?
                WHERE id=?";
        //menggunakan mekanisme prepare statement PDO
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }

    public function hapus($id)
    {
        $sql = "DELETE FROM customer WHERE id=?";
        //menggunakan mekanisme prepare statement PDO
        $ps = $this->koneksi->prepare($sql);
        $ps->execute([$id]);
    }
}
