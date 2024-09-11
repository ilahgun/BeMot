<?php
include_once 'koneksi.php';
include_once 'models/Jasa.php';
//step 1 tangkap request form
$kode = $_POST['kode'];
$nama = $_POST['nama'];
//step 2 simpan ke array
$data = [
    $kode, // ? 1
    $nama, // ? 2
];
//step 3 eksekusi tombol dengan mekanisme pdo
$model = new Jasa();
$tombol = $_REQUEST['proses'];
switch ($tombol) {
    case 'simpan':
        $model->simpan($data);
        break;
    default:
        header('Location: index.php?page=view/jasa/jasa');
        break;
}
//step 4 diarahkan ke suatu halaman, jika sudah selesai prosesnya
header('Location: index.php?page=view/jasa/jasa');
