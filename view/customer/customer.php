<?php
//ciptakan object dari class Montir
$model = new Customer();
//panggil fungsi untuk menampilkan data customer
$data_customer = $model->dataCustomer();
?>
<br>
<section class="section schedule">
    <div class="container" data-aos="fade-up">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h3>Daftar <span class="alternate">Customer</span></h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="float-end mb-3">
                    <a class="btn btn-primary btn-sm" href="index.php?page=view/customer/customer_form" role="button" title="Tambah Montir">
                        &nbsp;<i class="bi bi-plus" aria-hidden="true">Tambah Data Customer</i>&nbsp;
                    </a>
                </div>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">NO Customer</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Gender</th>
                            <th scope="col">Motor</th>
                            <th scope="col">Email</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($data_customer as $row) {
                        ?>
                            <tr>
                                <th scope="row"><?= $no ?></th>
                                <td><?= $row['no_customer'] ?></td>
                                <td><?= $row['nama'] ?></td>
                                <td><?= $row['gender'] ?></td>
                                <td><?= $row['motor'] ?></td>
                                <td><?= $row['email'] ?></td>
                                <td>
                                    <a href="index.php?page=view/customer/customer_form&idedit=<?= $row['id'] ?>">
                                        <button type="button" title="Ubah Customer">
                                            <i class="bi bi-pencil-square" aria-hidden="true"></i>
                                        </button>
                                    </a>
                                </td>
                            </tr>
                        <?php
                            $no++;
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>