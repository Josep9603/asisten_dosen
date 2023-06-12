<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <title>Status Kelulusan</title>
  </head>
  <body>
    <div class="container">
      <div
        class="mt-3 mb-2 p-4 bg-secondary text-white rounded"
        style="text-align: center"
      >
        <h1>STATUS KELULUSAN MAHASISWA</h1>

        
      </div>
      
        <p>
          Mahasiswa dengan Nama <?= $nama ?> dan NIM <?= $nim ?> berhasil menyelesaikan Studi S1 dengan predikat <?= $status ?>
        </p>
      
    </div>
  </body>
</html>
