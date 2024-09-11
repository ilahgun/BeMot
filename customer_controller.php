<?php
include_once 'koneksi.php';
include_once 'models/Customer.php';
//step 1 tangkap request form

$no_cus = $_POST['no_customer'];
$nama = $_POST['nama'];
$gender = $_POST['gender'];
$motor = $_POST['motor'];
$email = $_POST['email'];
//step 2 simpan ke array
$data = [
    $no_cus,
    $nama,
    $gender,
    $motor,
    $email,
];
//step 3 eksekusi tombol dengan mekanisme pdo
$model = new Customer();
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
        header('Location: index.php?page=view/customer/customer');
        break;
}
//step 4 diarahkan ke suatu halaman, jika sudah selesai prosesnya
header('Location: index.php?page=view/customer/customer');
