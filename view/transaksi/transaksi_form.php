<?php
//ciptakan object dari class Transaksi
$obj_transaksi = new Transaksi();
$obj_customer = new Customer();
$obj_montir = new Montir();
$obj_jasa = new Jasa();
$obj_phs = new Part_has_service();

$data_customer = $obj_customer->dataCustomer();
$data_montir = $obj_montir->dataMontir();
$data_jasa = $obj_jasa->dataJasa();

//------------proses edit data------------
//tangkap request idedit di url (setelah klik tombol edit/icon pencil)
$idedit = $_REQUEST['idedit'];
// $trs = !empty($idedit) ? $obj_transaksi->getTransaksi($idedit) : array();
$trs = !empty($idedit) ? $obj_transaksi->getTransaksi($idedit) : array();
?>
<br><br>
<section class="section contact-form">
    <div class="container">
        <div class="section-header">
            <h2>Input Transaksi</h2>
        </div>
    </div>
    <div class="container" data-aos="fade-up">
        <form action="transaksi_controller.php" method="POST" class="row">
            <div class="col-md-6">
                <label class="form-label"><b>No Transaksi</b></label>
                <input type="text" class="form-control main" name="kode_transaksi" id="kode_transaksi" placeholder="Kode Transaksi" value="<?= $trs['kode_transaksi'] ?>">
            </div>
            <div class="col-md-6">
                <label class="form-label"><b>Tanggal Transaksi</b></label>
                <input type="date" class="form-control main" name="date_traksaksi" placeholder="date_transaksi" value="<?= $trs['date_transaksi'] ?>">
            </div>
            <div class="col-md-6">
                <label class="form-label"><b>Customer</b></label>
                <div class="form-group">
                    <select class="form-control main" name="divisi">
                        <option selected>-- Pilih Customer --</option>
                        <?php
                        foreach ($data_customer as $cs) {
                            //edit divisi
                            $sel1 = $trs['customer_id'] == $cs['id'] ? 'selected' : '';
                        ?>
                            <option value="<?= $cs['id'] ?>" <?= $sel1 ?>><?= $cs['nama'] ?></option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <label class="form-label"><b>Montir</b></label>
                <div class="form-group">
                    <select class="form-control main" name="divisi">
                        <option selected>-- Pilih Montir --</option>
                        <?php
                        foreach ($data_montir as $mn) {
                            //edit divisi
                            $sel2 = $trs['montir_id'] == $mn['id'] ? 'selected' : '';
                        ?>
                            <option value="<?= $mn['id'] ?>" <?= $sel2 ?>><?= $mn['nama'] ?></option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <label class="form-label"><b>Jasa</b></label>
                <div class="form-group">
                    <select class="form-control main" name="divisi">
                        <option selected>-- Pilih Jasa --</option>
                        <?php
                        foreach ($data_jasa as $js) {
                            //edit divisi
                            $sel3 = $trs['jasa_id'] == $js['id'] ? 'selected' : '';
                        ?>
                            <option value="<?= $js['id'] ?>" <?= $sel3 ?>><?= $js['nama'] ?></option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <label class="form-label"><b>Part</b></label>
                <input type="text" class="form-control main" name="part" id="part" placeholder="Part" value="<?= $trs['part_nama'] ?>">
            </div>
            <div class="col-md-6">
                <label class="form-label"><b>Harga</b></label>
                <input type="text" class="form-control main" name="harga" id="harga" placeholder="Harga" value="<?= $trs['harga'] ?>">
            </div>
            <div class="col-12 text-center">
                <br>
                <?php
                //----------modus entri data baru, form dlm keadaan kosong-------------
                if (empty($idedit)) {
                ?>
                    <button type="submit" name="proses" value="simpan" class="btn btn-success btn-sm">Simpan</button>
                <?php
                }
                //----------modus edit data lama, form terisi data lama -------------
                else {
                ?>
                    <button type="submit" name="proses" value="ubah" class="btn btn-warning btn-sm">Ubah</button>
                    <!-- hidden field untuk klausa where=id -->
                    <input type="hidden" name="idx" value="<?= $idedit ?>">
                <?php } ?>

                <button type="submit" name="proses" value="batal" class="btn btn-info btn-sm">Batal</button>

            </div>
        </form>
    </div>
</section>