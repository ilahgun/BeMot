<?php
session_start();
include_once 'koneksi.php';
include_once 'models/User.php';
//step 1 tangkap request form
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
$role = $_POST['role'];
//step 2 simpan ke array
$data = [
    $fullname, // ? 1
    $email, // ? 2
    $username, // ? 3
    $password, // ? 4
    $role, // ? 5
];
//step 3 eksekusi tombol dengan mekanisme pdo
$model = new User();
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
        header('Location: index.php?page=view/user/user');
        break;
}
//step 4 diarahkan ke suatu halaman, jika sudah selesai prosesnya
header('Location: index.php?page=view/user/user');
