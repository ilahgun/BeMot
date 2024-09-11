<?php
//ciptakan object dari class Part
$model = new Part();
//panggil fungsi untuk menampilkan data part
$data_part = $model->dataPart();
?>
<br><br><br>
<section class="section schedule">
    <div class="container" data-aos="fade-up">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h3>Daftar <span class="alternate">Part</span></h3><br>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="float-end mb-3">
                    <a class="btn btn-primary btn-sm" href="index.php?page=view/part/part_form" role="button" title="Tambah Part">
                        &nbsp;<i class="bi bi-plus" aria-hidden="true">Tambah Data Part</i>&nbsp;
                    </a>
                </div>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Kode</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Stok</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($data_part as $row) {
                        ?>
                            <tr>
                                <th scope="row"><?= $no ?></th>
                                <td><?= $row['kode'] ?></td>
                                <td><?= $row['nama'] ?></td>
                                <td><?= $row['harga'] ?></td>
                                <td><?= $row['stok'] ?></td>
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