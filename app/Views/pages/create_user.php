<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Input Data Mahasiswa</title>
</head>

<body>
    <h2>INI HALAMAN CREATE USER</h2>
    <form action="<?= base_url('/user/store') ?>" method="post">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" required><br><br>

        <label for="npm">NPM:</label>
        <input type="text" id="npm" name="npm" required><br><br>

        <label for="kelas">Kelas:</label>
        <input type="text" id="kelas" name="kelas" required><br><br>

        <input type="submit" value="Kirim">
    </form>
</body>

</html>