<?= $this->extend('templates/template'); ?>

<?= $this->section('content'); ?>

<div class="jumbotron bg-light text-center">
    <h1 class="display-4">Pendaftaran Asisten Praktikum</h1>
    <p class="lead">Data ini akan disimpan kedalam data base</p>
    <hr class="my-4">
    <form method="post" action="/asisten/simpan">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="nim">NIM</label>
                    <input class="form-control" id="nim" name="nim" type="text" placeholder="Masukkan NIM" required>
                </div>
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input class="form-control" id="nama" name="nama" type="text" placeholder="Masukkan Nama" required>
                </div>
                <div class="form-group">
                    <label for="praktikum">Praktikum</label>
                    <input class="form-control" id="praktikum" name="praktikum" type="text" placeholder="Masukkan Praktikum" required>
                </div>
                <div class="form-group">
                    <label for="ipk">IPK</label>
                    <input class="form-control" id="ipk" name="ipk" type="text" placeholder="Masukkan IPK" required>
                </div>
                <button class="btn btn-success mt-4" name="btnsubmit" value="simpan" type="submit">
                    <i class="bi bi-save"></i> Simpan
                </button>
            </div>
        </div>
    </form>
</div>

<?= $this->endSection(); ?>
