<?php
//ciptakan object dari class Montir
$model = new Montir();
//panggil fungsi untuk menampilkan data montir
$data_montir = $model->dataMontir();
?>
<br><br>
<section class="section schedule">
    <div class="container" data-aos="fade-up">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <br>
                    <h3>Daftar <span class="alternate">Montir</span></h3><br>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="float-end mb-3">
                    <a class="btn btn-primary btn-sm" href="index.php?page=view/montir/montir_form" role="button" title="Tambah Montir">
                        &nbsp;<i class="bi bi-plus" aria-hidden="true">Tambah Data Montir</i>&nbsp;
                    </a>
                </div>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">NIK</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Gender</th>
                            <th scope="col">Tempat Lahir</th>
                            <th scope="col">Tanggal Lahir</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($data_montir as $row) {
                        ?>
                            <tr>
                                <th scope="row"><?= $no ?></th>
                                <td><?= $row['nik'] ?></td>
                                <td><?= $row['nama'] ?></td>
                                <td><?= $row['gender'] ?></td>
                                <td><?= $row['tmp_lahir'] ?></td>
                                <td><?= $row['tgl_lahir'] ?></td>
                                <td><?= $row['alamat'] ?></td>
                                <td>
                                    <a href="index.php?page=view/montir/montir_detail&id=<?= $row['id'] ?>">
                                        <button type="button" title="Detail Montir">
                                            <i class="bi bi-eye"></i>
                                        </button>
                                    </a>
                                    <a href="index.php?page=view/montir/montir_form&idedit=<?= $row['id'] ?>">
                                        <button type="button" title="Ubah Montir">
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