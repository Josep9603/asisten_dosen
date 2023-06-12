<?= $this->extend('templates/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
  <div class="jumbotron bg-light text-center">
    <h1 class="display-4">Hapus Data Asisten Yang Telah Disimpan</h1>
    <hr class="my-4">
    <form action="/asisten/hapus" method="post">
      <?= csrf_field(); ?>
      <div class="form-group">
        <label for="nim" style="font-weight:  bold;">NIM</label>
        <input class="form-control mt-4" id="nim" name="nim" type="text" placeholder="Masukkan NIM" required>
      </div>
      <button class="btn btn-danger mt-4" name="btnsubmit" value="simpan" type="submit">
        <i class="bi bi-trash-fill"></i> Hapus
      </button>
    </form>
  </div>
</div>

<?= $this->endSection(); ?>
