<?= $this->extend('templates/template'); ?>

<?= $this->section('content'); ?>

<div class="jumbotron bg-light">
    <?php if (session()->getFlashdata('sukses')) : ?>
        <div class="alert alert-success" role="alert">
            <?= session()->getFlashdata('sukses'); ?>
        </div>
    <?php endif; ?>
    <h1 class="display-4">Daftar Nama Asisten</h1>
    <p class="lead">List Asisten yang berhasil disimpan :</p>
    <hr class="my-4">
    <div class="table-responsive">
        <table class="table table-primary">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">NIM</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Kelas Praktikum</th>
                    <th scope="col">IPK</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($asisten as $a) : ?>
                    <tr>
                        <th scope="row"><?= $i++; ?></th>
                        <td><?= $a['nim']; ?></td>
                        <td><?= $a['nama'] ?></td>
                        <td><?= $a['praktikum']; ?></td>
                        <td><?= $a['ipk']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<?= $this->endSection(); ?>
