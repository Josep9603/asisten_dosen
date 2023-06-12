<?= $this->extend('templates/template'); ?>

<?= $this->section('content'); ?>

<div class="jumbotron bg-light text-center">
    <h1 class="display-4" style="font-weight: bold;">Search</h1>
    <p class="lead">Cari Data Asisten</p>
    <hr class="my-4">
    <form method="post" action="/asisten/search">
        <?= csrf_field(); ?>
        <div class="input-group mb-3">
            <input class="form-control" id="key" name="key" type="text" placeholder="Masukkan kata NIM Asisten" required>
            <div class="input-group-append">
                <button class="btn btn-primary" name="btnsubmit" value="Search" type="submit">
                    <i class="bi bi-search"></i> Search
                </button>
            </div>
        </div>
    </form>

    <?php if (!empty($hasil)) : ?>
        <div class="card">
            <div class="card-body">
                <h2 class="card-title">Hasil Pencarian</h2>
                <p class="card-text">Nama: <?= $hasil['nama']; ?></p>
                <p class="card-text">Praktikum: <?= $hasil['praktikum']; ?></p>
                <p class="card-text">IPK: <?= $hasil['ipk']; ?></p>
            </div>
        </div>
    <?php endif; ?>

</div>

<?= $this->endSection(); ?>
