<br><br>
<section class="section contact-form">
    <div class="container">
        <div class="section-header">
            <h2>Input Data Part</h2>
        </div>
    </div>
    <div class="container" data-aos="fade-up">
        <form action="part_controller.php" method="POST" class="row">
            <div class="col-md-6">
                <label class="form-label"><b>Kode</b></label>
                <input type="text" class="form-control main" name="kode" id="kode" placeholder="kode">
            </div>
            <div class="col-md-6">
                <label class="form-label"><b>Nama</b></label>
                <input type="text" class="form-control main" name="nama" id="nama" placeholder="Nama">
            </div>
            <div class="col-md-6">
                <label class="form-label"><b>Harga</b></label>
                <input type="text" class="form-control main" name="harga" id="Harga" placeholder="Harga">
            </div>
            <div class="col-md-6">
                <label class="form-label"><b>Stok</b></label>
                <input type="text" class="form-control main" name="stok" id="stok" placeholder="Stok">
            </div>
            <div class="col-md-6">
                <label class="form-label"><b>Foto</b></label>
                <input type="text" class="form-control main" name="foto" id="foto" placeholder="Foto">
            </div>
            <div class="col-12 text-center">
                <br><button type="submit" name="proses" value="simpan" class="btn btn-success btn-sm">Simpan</button>
                <button type="submit" name="proses" value="batal" class="btn btn-info btn-sm">Batal</button>
            </div>
        </form>
    </div>
</section>