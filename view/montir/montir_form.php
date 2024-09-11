<?php
//ciptakan object dari class Montir
$obj_montir = new Montir();

//------------proses edit data------------
//tangkap request idedit di url (setelah klik tombol edit/icon pencil)
$idedit = $_REQUEST['idedit'];
// $cus = !empty($idedit) ? $obj_montir->getMontir($idedit) : array();
$mon = !empty($idedit) ? $obj_montir->getMontir($idedit) : array();
?>
<br><br>
<section class="section contact-form">
    <div class="container">
        <div class="section-header">
            <h2>Input Data Montir</h2>
        </div>
    </div>
    <div class="container" data-aos="fade-up">
        <form action="montir_controller.php" method="POST" class="row">
            <div class="col-md-6">
                <label class="form-label"><b>NIK</b></label>
                <input type="text" class="form-control main" name="nik" id="nik" placeholder="NIK" value="<?= $mon['nik'] ?>">
            </div>
            <div class="col-md-6">
                <label class="form-label"><b>Nama</b></label>
                <input type="text" class="form-control main" name="nama" id="nama" placeholder="Nama" value="<?= $mon['nama'] ?>">
            </div>
            <div class="col-md-6">
                <label class="form-label"><b>Jenis Kelamin</b></label>
                <?php
                $ar_gender = ['Laki-Laki' => 'Laki-Laki', 'Perempuan' => 'Perempuan'];
                foreach ($ar_gender as $k => $jk) {
                    //proses edit gender
                    $cek = $mon['gender'] == $k ? 'checked' : '';
                ?>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" value="<?= $k ?>" <?= $cek ?>>
                        <label class="form-check-label">
                            <?= $jk ?>
                        </label>
                    </div>
                <?php } ?>
            </div>
            <div class="col-md-6">
                <label class="form-label"><b>Foto</b></label>
                <input type="text" class="form-control main" name="foto" id="foto" placeholder="Foto" value="<?= $mon['foto'] ?>">
            </div>
            <div class="col-md-6">
                <label class="form-label"><b>Tempat Lahir</b></label>
                <input type="text" class="form-control main" name="tmp_lahir" placeholder="Tempat Lahir" value="<?= $mon['tmp_lahir'] ?>">
            </div>
            <div class="col-md-6">
                <label class="form-label"><b>Tanggal lahir</b></label>
                <input type="date" class="form-control main" name="tgl_lahir" value="<?= $mon['tgl_lahir'] ?>">
            </div>
            <div class="col-md-12">
                <label class="form-label"><b>Alamat</b></label>
                <textarea name="alamat" id="alamat" class="form-control main" rows="10" placeholder="Alamat"><?= $mon['alamat'] ?></textarea>
            </div>
            <div class="col-12 text-center">
                <br><?php
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