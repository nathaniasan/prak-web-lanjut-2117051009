<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="<?= base_url('/assets/css/styles.css') ?>" />

    <title>Formulir Input Data Mahasiswa</title>
</head>

<body>
    <h2>INI HALAMAN CREATE USER</h2>
    <h2>
        <?= 'k' . $validation->listErrors(); ?>
    </h2>
    <form action="<?= base_url('/user/store') ?>" method="post">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" required><br><br>

        <label for="npm">NPM:</label>
        <input type="text" id="npm" name="npm" required><br><br>

        <label for="kelas">Kelas:</label>
        <select id="kelas" name="kelas">

            <?php
            foreach ($kelas as $item) {
                ?>
                <option value="<?= $item['id'] ?>">
                    <?= $item['nama_kelas'] ?>
                </option>
                <option hidden value="<?= $item['nama_kelas'] ?>">
                </option>
                <?php
            } ?>
            <br><br>
        </select>

        <input type="submit" value="Kirim">
    </form>
</body>

</html>