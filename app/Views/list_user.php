<?= $this->include('layouts/app') ?>
<?= $this->section('content') ?>

<div class="container">
    <br>
    <h4>Ini Halaman List User</h4>
    <button><a href="">Tambah</a></button>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>NPM</th>
                <th>Kelas</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($users as $user) {
                ?>
                <tr>
                    <td>
                        <?= $user['id'] ?>
                    </td>
                    <td>
                        <?= $user['nama'] ?>
                    </td>
                    <td>
                        <?= $user['npm'] ?>
                    </td>
                    <td>
                        <?= $user['nama_kelas'] ?>
                    </td>
                    <td>
                        <button type="button" class="btn btn-primary">EDIT</button>
                        <button type="button" class="btn btn-secondary">HAPUS</button>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>