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
    <title>Kelulusan</title>
  </head>
  <body>
    <div class="container">
      <div
        class="mt-3 mb-2 p-4 bg-secondary text-white rounded"
        style="text-align: center"
      >
        <h1>Kelulusan</h1>
      </div>
      <form action="../prosesKelulusan" method="post">
        <div class="input-group mb-3">
          <span class="input-group-text" id="inputGroup-sizing-default"
            >NIM</span
          >
          <input
            type="text"
            class="form-control"
            aria-label="Sizing example input"
            aria-describedby="inputGroup-sizing-default"
            name="nim"
          />
        </div>
        <div class="input-group mb-3">
          <span class="input-group-text" id="inputGroup-sizing-default"
            >Nama</span
          >
          <input
            type="text"
            class="form-control"
            aria-label="Sizing example input"
            aria-describedby="inputGroup-sizing-default"
            name="nama"
          />
        </div>
        <div class="input-group mb-3">
          <span class="input-group-text" id="inputGroup-sizing-default"
            >Status Kelulusan</span
          >
          <select
            class="form-select"
            aria-label="Default select example"
            name="status"
          >
            <option selected>Pilih status kelulusan</option>
            <option value="Biasa Aja" name="status">Biasa Aja</option>
            <option value="Memuaskan" name="status">Memuaskan</option>
            <option value="Sangat Memuaskan" name="status">
              Sangat Memuaskan
            </option>
          </select>
        </div>
        <div class="d-flex justify-content-evenly">
          <button type="submit" class="btn btn-success" name="submit">
            Submit Data
          </button>
        </div>
      </form>
    </div>
  </body>
</html>
