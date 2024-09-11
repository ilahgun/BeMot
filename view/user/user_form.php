<?php
//ciptakan object dari class User
$obj_user = new User();


//------------proses edit data------------
//tangkap request idedit di url (setelah klik tombol edit/icon pencil)
$idedit = $_REQUEST['idedit'];
// $cus = !empty($idedit) ? $obj_user->getUser($idedit) : array();
$use = !empty($idedit) ? $obj_user->getUser($idedit) : array();
?>
<br><br>
<section class="section contact-form">
    <div class="container">
        <div class="section-header">
            <h2>Input Data User</h2>
        </div>
    </div>
    <div class="container" data-aos="fade-up">
        <form action="user_controller.php" method="POST" class="row">
            <div class="col-md-6">
                <label class="form-label"><b>Fullname</b></label>
                <input type="text" class="form-control main" name="fullname" id="fullname" placeholder="Fullname" value="<?= $use['fullname'] ?>">
            </div>
            <div class="col-md-6">
                <label class="form-label"><b>email</b></label>
                <input type="text" class="form-control main" name="email" id="email" placeholder="Email" value="<?= $use['email'] ?>">
            </div>
            <div class="col-md-6">
                <label class="form-label"><b>User</b></label>
                <input type="text" class="form-control main" name="username" id="username" placeholder="Username" value="<?= $use['username'] ?>">
            </div>
            <div class="col-md-6">
                <div class="form-group flex-nowrap">
                    <label>Password</label>
                    <div class="input-group-append" id="show_hide_password">
                        <input type="password" value="<?php $cus['password'] ?>" class="form-control form-control-name" name="password" id="subject" placeholder="must input new/old password">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <label for="">Role</label>
                <select class="form-control main" name="role">
                    <option selected disabled value="-">-- Pilih Role --</option>
                    <?php
                    $no = 1;
                    $ar_role = [
                        'admin' => 'Admin',
                        'manager' => 'Manager',
                        'staff' => 'Staff'
                    ];
                    asort($ar_role);

                    foreach ($ar_role as $inisial => $role) {

                        $select1 = $use['role'] == $inisial ? 'selected' : '';
                    ?> <option value="<?= $inisial ?>" <?= $select1 ?>><?= $no++ ?>. <?= $role ?></option>
                    <?php } ?>
                </select>
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