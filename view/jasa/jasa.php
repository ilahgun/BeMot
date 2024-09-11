<?php
//ciptakan object dari class Jasa
$model = new Jasa();
//panggil fungsi untuk menampilkan data jasa
$data_jasa = $model->dataJasa();
?>
<br><br><br>
<section class="section schedule">
    <div class="container" data-aos="fade-up">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h3>Daftar <span class="alternate">Jasa</span></h3><br>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="float-end mb-3">
                    <a class="btn btn-primary btn-sm" href="index.php?page=view/jasa/jasa_form" role="button" title="Tambah Jasa">
                        &nbsp;<i class="bi bi-plus" aria-hidden="true"> Tambah Data Jasa</i>&nbsp;
                    </a>
                </div>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Kode</th>
                            <th scope="col">Nama</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($data_jasa as $row) {
                        ?>
                            <tr>
                                <th scope="row"><?= $no ?></th>
                                <td><?= $row['kode'] ?></td>
                                <td><?= $row['nama'] ?></td>
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