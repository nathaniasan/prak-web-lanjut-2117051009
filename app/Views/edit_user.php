<?= $this->include('layouts/app') ?>
<?= $this->section('content') ?>

<div class="container">
    <h2>INI HALAMAN Edit USER</h2>
    <input type="hidden" name="_method" value="put">
    <form action="<?= base_url('/user/store') ?>" enctype="multipart/form-data" method="post">
        <?= csrf_field(); ?>
        <label for="nama">Nama:</label>
        <input type="text" class="form-control  <?= session()->has('error') ? 'is-invalid' : ''; ?>" id="nama"
            name="nama" value="<?= $user['nama']; ?>">
        <div class="invalid-feedback">
            <?php if (session()->has('error')):
                echo session('error')['nama'];
            endif; ?>
        </div>
        <br><br>

        <label for="npm">NPM:</label>
        <input type="text" class="form-control  <?= (session()->has('error')) ? 'is-invalid' : ''; ?>" id="npm"
            name="npm" value="<?= $user['npm']; ?>">
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
                <option value="<?= $item['id'] ?>" <? $user['id_kelas'] == $item['id'] ? 'selected' : '' ?>>
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
            <img src="<?= $user['foto'] ?? '<default-foto>' ?>">
            <input class="form-control" type="file" name="foto" multiple>
        </div>



        <input type="submit" value="Kirim">
    </form>
</div>