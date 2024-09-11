<?php
//------sertakan file koneksi db------
session_start();
include_once 'koneksi.php';
//------sertakan models------
include_once 'models/Montir.php';
include_once 'models/Service.php';
include_once 'models/Jasa.php';
include_once 'models/Part.php';
include_once 'models/Part_has_service.php';
include_once 'models/Customer.php';
include_once 'models/Transaksi.php';
include_once 'models/User.php';
//------sertakan potongan2 file template web------
include_once 'view/piece/header.php';
include_once 'view/piece/navigation.php';

//area main di logic
//tangkap request menu di url (index.php?page=.....)
$page = $_REQUEST['page'];
//jika ada request dari menu di url tampilkan hal sesuai request
if (!empty($page)) {
    include_once $page . '.php';
} else { //jika tidak ada request dari menu di url tampilkan hal home.php
    include_once 'view/home.php';
}

include_once 'view/piece/footer.php';
