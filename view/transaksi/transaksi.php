<?php
//ciptakan object dari class Montir
$model = new Transaksi();
//panggil fungsi untuk menampilkan data transaksi
$data_transaksi = $model->dataTransaksi();
?>
<br>
<section class="section schedule">
    <div class="container" data-aos="fade-up">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h3>Daftar <span class="alternate">Transaksi</span></h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="float-end mb-3">
                    <a class="btn btn-primary btn-sm" href="index.php?page=view/transaksi/transaksi_form" role="button" title="Tambah Montir">
                        &nbsp;<i class="bi bi-plus" aria-hidden="true">Tambah Data Transaksi</i>&nbsp;
                    </a>
                </div>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Kode Transaksi</th>
                            <th scope="col">Date Transaksi</th>
                            <th scope="col">Customer</th>
                            <th scope="col">Montir</th>
                            <th scope="col">Jasa</th>
                            <th scope="col">Part</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($data_transaksi as $row) {
                        ?>
                            <tr>
                                <th scope="row"><?= $no ?></th>
                                <td><?= $row['kode_transaksi'] ?></td>
                                <td><?= $row['date_transaksi'] ?></td>
                                <td><?= $row['customer_nama'] ?></td>
                                <td><?= $row['montir_nama'] ?></td>
                                <td><?= $row['jasa_nama'] ?></td>
                                <td><?= $row['part_nama'] ?></td>
                                <td><?= $row['harga'] ?></td>
                                <td>
                                    <a href="index.php?page=view/transaksi/transaksi_form&idedit=<?= $row['id'] ?>">
                                        <button type="button" title="Ubah Transaksi">
                                            <i class="bi bi-pencil-square" aria-hidden="true"></i>
                                        </button>
                                    </a>
                                    <button type="submit" name="proses" value="hapus" onclick="return confirm('anda yakin data anda dihapus')" title="hapus Pegawai">
                                        <i class="bi bi-trash" aria-hidden="true"></i>
                                    </button>
                                    <input type="hidden" name="idx" value="<?= $row['id'] ?>">
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