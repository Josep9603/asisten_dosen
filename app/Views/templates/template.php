<!DOCTYPE HTML>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <!-- CSS Styles -->
  <link rel="stylesheet" href="/css/style.css">

  <title><?= $title; ?></title>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-primary bg-primary">
    <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto">
                <a class="nav-item nav-link" href="/asisten"><i class="bi bi-people"></i> Asisten</a>
                <a class="nav-item nav-link" href="/asisten/simpan"><i class="bi bi-save"></i> Save</a>
                <a class="nav-item nav-link" href="/asisten/hapus"><i class="bi bi-trash"></i> Delete</a>
                <a class="nav-item nav-link" href="/asisten/update"><i class="bi bi-pencil"></i> Update</a>
                <a class="nav-item nav-link" href="/asisten/search"><i class="bi bi-search"></i> Search</a>
            </div>
            <?php if (session()->has('username')) : ?>
                <div class="navbar-nav ml-auto">
                    <div class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <span><?= session()->get('username'); ?> <i class="bi bi-person-circle"></i></span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDarkDropdownMenuLink">
                            <li><a class="dropdown-item" href="/asisten/logout">Log out</a></li>
                        </ul>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</nav>


  <div class="container">
    <?= $this->renderSection('content'); ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  </div>
</body>

</html>
