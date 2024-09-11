<?php
include_once 'koneksi.php';
include_once 'models/Part.php';
//step 1 tangkap request form
$kode = $_POST['kode'];
$nama = $_POST['nama'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];
$foto = $_POST['foto'];
//step 2 simpan ke array
$data = [
    $kode, // ? 1
    $nama, // ? 2
    $harga, // ? 3
    $stok, // ? 4 
    $foto, // ? 5
];
//step 3 eksekusi tombol dengan mekanisme pdo
$model = new Part();
$tombol = $_REQUEST['proses'];
switch ($tombol) {
    case 'simpan':
        $model->simpan($data);
        break;
    default:
        header('Location: index.php?page=view/part/part');
        break;
}
//step 4 diarahkan ke suatu halaman, jika sudah selesai prosesnya
header('Location: index.php?page=view/part/part');
