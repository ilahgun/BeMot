<?php
include_once 'koneksi.php';
include_once 'models/Transaksi.php';
//step 1 tangkap request form
$kode = $_POST['kode_transaksi'];
$tanggal = $_POST['date_transaksi'];
$customer = $_POST['customer_id'];
$montir = $_POST['montir_id'];
$jasa = $_POST['jasa_id'];
$part = $_POST['part_id'];
//step 2 simpan ke array
$data = [
    $kode, // ? 1
    $tanggal, // ? 2
    $customer, // ? 3
    $montir, // ? 4
    $jasa, // ? 5
    $part // ? 6
];
//step 3 eksekusi tombol dengan mekanisme pdo
$model = new Transaksi();
$tombol = $_REQUEST['proses'];
switch ($tombol) {
    case 'simpan':
        $model->simpan($data);
        break;
    case 'ubah':
        //tangkap hidden field idx untuk klausa where id
        $data[] = $_POST['idx']; // ? 10 (kalusa where id=?)
        $model->ubah($data);
        break;
    default:
        header('Location: index.php?page=view/transaksi/transaksi');
        break;
}
//step 4 diarahkan ke suatu halaman, jika sudah selesai prosesnya
header('Location: index.php?page=view/transaksi/transaksi');
