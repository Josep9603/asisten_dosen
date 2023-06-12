<!DOCTYPE html>
<html>

<head>
    <title>Pendaftaran Asisten Pratikum</title>
    <style>
          body {
            font-family: Arial, sans-serif;
        }

        h1 {
            text-align: center;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
        }

        th,
        td {
            border: 1px solid black;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
            font-weight: bold;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #e0e0e0;
        }

        /* Additional Styling */
        .table-header {
            background-color: #4caf50;
            color: #ffffff;
        }

        .table-header th {
            border-color: #4caf50;
        }

        .table-header th:first-child {
            border-top-left-radius: 8px;
        }

        .table-header th:last-child {
            border-top-right-radius: 8px;
        }
    </style>
</head>

<body>
    <h1>Pendaftaran Asisten Pratikum</h1>
    <table>
        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Kelas Praktikum</th>
            <th>IPK</th>
        </tr>
        <?php foreach ($asisten as $row) : ?>
            <tr>
                <td><?= $row['no'] ?></td>
                <td><?= $row['nim'] ?></td>
                <td><?= $row['nama'] ?></td>
                <td><?= $row['praktikum'] ?></td>
                <td><?= $row['ipk'] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>