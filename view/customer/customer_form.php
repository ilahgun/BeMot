<?php
//ciptakan object dari class Customer
$obj_customer = new Customer();

//------------proses edit data------------
//tangkap request idedit di url (setelah klik tombol edit/icon pencil)
$idedit = $_REQUEST['idedit'];
// $cus = !empty($idedit) ? $obj_customer->getCustomer($idedit) : array();
$cus = !empty($idedit) ? $obj_customer->getCustomer($idedit) : array();
?>
<br><br>
<section class="section contact-form">
    <div class="container">
        <div class="section-header">
            <h2>Input Customer</h2>
        </div>
    </div>
    <div class="container" data-aos="fade-up">
        <form action="customer_controller.php" method="POST" class="row">
            <div class="col-md-6">
                <label class="form-label"><b>No Customer</b></label>
                <input type="text" class="form-control main" name="no_customer" id="no_customer" placeholder="No Customer" value="<?= $cus['no_customer'] ?>">
            </div>
            <div class="col-md-6">
                <label class="form-label"><b>Nama</b></label>
                <input type="text" class="form-control main" name="nama" placeholder="Nama" value="<?= $cus['nama'] ?>">
            </div>
            <div class="col-md-6">
                <label class="form-label"><b>Motor</b></label>
                <input type="text" class="form-control main" name="motor" id="motor" placeholder="Motor" value="<?= $cus['motor'] ?>">
            </div>
            <div class="col-md-6">
                <label class="form-label"><b>Email</b></label>
                <input type="text" class="form-control main" name="email" id="email" placeholder="Email" value="<?= $cus['email'] ?>">
            </div>
            <div class="col-md-6">
                <label class="form-label"><b>Jenis Kelamin</b></label>
                <?php
                $ar_gender = ['Laki-Laki' => 'Laki-Laki', 'Perempuan' => 'Perempuan'];
                foreach ($ar_gender as $k => $jk) {
                    //proses edit gender
                    $cek = $cus['gender'] == $k ? 'checked' : '';
                ?>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" value="<?= $k ?>" <?= $cek ?>>
                        <label class="form-check-label">
                            <?= $jk ?>
                        </label>
                    </div>
                <?php } ?>
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