<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="<?= base_url('/assets/css/styles.css') ?>" />

    <title>
        <?= $title ?>
    </title>
</head>

<body>
    <h2>INI HALAMAN CREATE USER</h2>
    <form action="<?= base_url('/user/store') ?>" enctype="multipart/form-data" method="post">
        <label for="nama">Nama:</label>
        <input type="text" class="form-control  <?= session()->has('error') ? 'is-invalid' : ''; ?>" id="nama"
            name="nama">
        <div class="invalid-feedback">
            <?php if (session()->has('error')):
                echo session('error')['nama'];
            endif; ?>
        </div>
        <br><br>

        <label for="npm">NPM:</label>
        <input type="text" class="form-control  <?= (session()->has('error')) ? 'is-invalid' : ''; ?>" id="npm"
            name="npm">
        <div class="invalid-feedback">
            <?php if (session()->has('error')):
                echo session('error')['npm'];
            endif; ?>
        </div><br>

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
        <div class="mb-3">
            <label for="formFileMultiple" class="form-label">Multiple files input example</label>
            <input class="form-control" type="file" name="foto" multiple>
        </div>

        <input type="submit" value="Kirim">
    </form>
</body>

</html>