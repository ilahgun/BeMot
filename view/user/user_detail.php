<?php
//tangkap request id dari klik tombol detail
$id = $_REQUEST['id'];
//ciptakan object dari class Pegawai
$model = new User();
//panggil fungsi untuk menampilkan data pegawai
$user = $model->getUser($id);
?>
<section id="about" class="about">
    <div class="container" data-aos="fade-up">
        <div class="row g-4 g-lg-5" data-aos="fade-up" data-aos-delay="200">

            <div class="col-lg-5">
                <div class="about-img">
                    <img src="assets/img/<?= $user['foto'] ?>" class="img-fluid" alt="">
                </div>
            </div>

            <div class="col-lg-7">
                <h3 class="pt-0 pt-lg-5">User Details</h3>

                <!-- Tabs -->
                <ul class="nav nav-pills mb-3">
                    <li><a class="nav-link active" data-bs-toggle="pill"><?= $user['fullname'] ?></a></li>
                </ul><!-- End Tabs -->

                <!-- Tab Content -->
                <div class="tab-content">

                    <div class="tab-pane fade show active">

                        <p class="fst-italic">Consequuntur inventore voluptates consequatur aut vel et. Eos doloribus expedita. Sapiente atque consequatur minima nihil quae aspernatur quo suscipit voluptatem.</p>

                        <div class="d-flex align-items-center mt-4">
                            <ul class="mr-1">
                                <li>Username: <?= $user['username'] ?></li>
                                <li>Email: <?= $user['email'] ?></li>
                                <li>Role: <?= $user['role'] ?></li>
                            </ul>
                        </div>
                    </div><!-- End Tab 1 Content -->


                </div>

                <br><br><br><br>
                <p align="right">
                    <a href="index.php?page=view/user/user" class="btn btn-primary btn-sm" title="Back"><i class="bi bi-arrow-left-circle-fill" aria-hidden="true"></i></a>
                </p>

            </div>

        </div>
    </div>
</section>