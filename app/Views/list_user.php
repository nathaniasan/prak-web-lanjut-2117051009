<?= $this->include('layouts/app') ?>
<?= $this->section('content') ?>

<div class="container">
    <br>
    <h4>Ini Halaman List User</h4>
    <br>
    <h4>Ini Halaman List User</h4>
    <br>
    <h4>Ini Halaman List User</h4>
    <br>
    <h4>Ini Halaman List User</h4>
    <br>
    <h4>Ini Halaman List User</h4>


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
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>