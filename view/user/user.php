<?php
//ciptakan object dari class User
$model = new User();
//panggil fungsi untuk menampilkan data user
$data_user = $model->dataUser();
//beri session untuk hak akses halaman user
$sesi = $_SESSION['USER'];
if (isset($sesi) && $sesi['role'] == 'admin') {
?>
    <br><br>
    <section class="section schedule">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h3>Daftar <span class="alternate">User</span></h3>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="float-end mb-3">
                    <a class="btn btn-primary btn-sm" href="index.php?page=view/user/user_form" role="button" title="Tambah User">
                        &nbsp;<i class="bi bi-plus" aria-hidden="true">Tambah Data User</i>&nbsp;
                    </a>
                </div>
                <br /><br />
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Fullname</th>
                            <th scope="col">Email</th>
                            <th scope="col">Username</th>
                            <th scope="col">Role</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($data_user as $row) {
                        ?>
                            <tr>
                                <th scope="row"><?= $no ?></th>
                                <td><?= $row['fullname'] ?></td>
                                <td><?= $row['email'] ?></td>
                                <td><?= $row['username'] ?></td>
                                <td><?= $row['role'] ?></td>
                                <td>
                                    <form action="user_controller.php" method="POST">
                                        <a href="index.php?page=view/user/user_detail&id=<?= $row['id'] ?>">
                                            <button type="button" class="btn btn-info btn-sm" title="Detail User">
                                                <i class="bi bi-eye"></i>
                                            </button>
                                        </a>
                                        <a href="index.php?page=view/user/user_form&idedit=<?= $row['id'] ?>">
                                            <button type="button" class="btn btn-warning btn-sm" title="Ubah User">
                                                <i class="bi bi-pencil-square" aria-hidden="true"></i>
                                            </button>
                                        </a>
                                        <button type="submit" class="btn btn-danger btn-sm" name="proses" value="hapus" onclick="return confirm('anda yakin data anda dihapus')" title="hapus User">
                                            <i class="bi bi-trash" aria-hidden="true"></i>
                                        </button>
                                        <input type="hidden" name="idx" value="<?= $row['id'] ?>">
                                    </form>
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
<?php
} else {
    echo '<script>alert("Anda Terlarang Akses Halaman ini");history.back();</script>';
}
?>