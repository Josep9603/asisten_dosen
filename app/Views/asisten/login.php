<?= $this->extend('templates/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
  <div class="jumbotron bg-light text-center">
    <?php if (session()->getFlashdata('error')) : ?>
      <div class="alert alert-danger" role="alert">
        <?= (session()->getFlashdata('error')); ?>
      </div>
    <?php endif; ?>
    <?php if (session()->getFlashdata('salah')) : ?>
      <div class="alert alert-danger" role="alert">
        <?= (session()->getFlashdata('salah')); ?>
      </div>
    <?php endif; ?>
    <h1 class="display-4" style="font-weight: bold;">Login</h1>
    <hr class="my-4">
    <form method="post" action="/asisten/cekLogin">
      <?= csrf_field(); ?>
      <div class="form-group">
        <label for="username">Username</label>
        <input class="form-control" id="username" name="username" type="text" placeholder="Username" required>
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input class="form-control" id="password" name="password" type="password" placeholder="Password" required>
      </div>
      <button class="btn btn-success mt-4" name="btnsubmit" value="Search" type="submit"> Login
      </button>
    </form>
  </div>
</div>

<?= $this->endSection(); ?>
