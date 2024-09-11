<?php
$sesi = $_SESSION['USER'];
?>
<!-- ======= Header ======= -->
<header id="header" class="header fixed-top" data-scrollto-offset="0">
    <div class="container-fluid d-flex align-items-center justify-content-between">

        <a href="index.php?page=view/home" class="logo d-flex align-items-center scrollto me-auto me-lg-0">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <!-- <img src="assets/img/logo.png" alt=""> -->
            <h1><span>BeMot</span></h1>
        </a>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto" href="index.php?page=view/home">Home</a></li>
                <li><a class="nav-link scrollto" href="index.php?page=view/about">About</a></li>
                <li><a class="nav-link scrollto" href="index.php?page=view/contact">Contact</a></li>
                <i class="bi bi-list mobile-nav-toggle d-none"></i>

                <?php
                if (!isset($sesi)) { //---------------------jika belum/gagal login-----------------------
                ?>
                    <a class="btn-getstarted scrollto" href="index.php?page=view/login">Login</a>
                <?php
                } else { //---------------------jika berhasil login-----------------------
                ?>
                    <li><a class="nav-link scrollto" href="index.php?page=view/transaksi/transaksi">Transaksi</a></li>
                    <li class="dropdown"><a href="#"><span>Master Data</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                        <ul>
                            <li><a href="index.php?page=view/customer/customer">Customer</a></li>
                            <li><a href="index.php?page=view/montir/montir">Montir</a></li>
                            <li><a href="index.php?page=view/jasa/jasa">Jasa</a></li>
                            <li><a href="index.php?page=view/part/part">Part</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="btn-getstarted scrollto" href="#!" data-toggle="dropdown"><?= $sesi['fullname'] ?> <i class="fa fa-angle-down"></i></a>
                        <!-- Dropdown list -->
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="index.php?hal=member_profile">Profile</a></li>
                            <?php
                            if ($sesi['role'] == 'admin') { //----------------hanya untuk admin------------------
                            ?>
                                <li><a class="dropdown-item" href="index.php?page=view/user/user">Kelola User</a></li>
                            <?php
                            }
                            ?>
                            <li><a class="dropdown-item" href="end_session.php">Logout</a></li>
                        </ul>
                    </li>
                <?php
                }
                ?>
            </ul>
        </nav><!-- .navbar -->
    </div>
</header><!-- End Header -->