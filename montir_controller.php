<?php
include_once 'koneksi.php';
include_once 'models/Montir.php';
//step 1 tangkap request form
$nik = $_POST['nik'];
$nama = $_POST['nama'];
$gender = $_POST['gender'];
$foto = $_POST['foto'];
$tmp_lahir = $_POST['tmp_lahir'];
$tgl_lahir = $_POST['tgl_lahir'];
$alamat = $_POST['alamat'];
//step 2 simpan ke array
$data = [
    $nik, // ? 1
    $nama, // ? 2
    $gender, // ? 3
    $foto, // ? 4
    $tmp_lahir, // ? 5
    $tgl_lahir, // ? 6
    $alamat // ? 7
];
//step 3 eksekusi tombol dengan mekanisme pdo
$model = new Montir();
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
        header('Location: index.php?page=view/montir/montir');
        break;
}
//step 4 diarahkan ke suatu halaman, jika sudah selesai prosesnya
header('Location: index.php?page=view/montir/montir');
