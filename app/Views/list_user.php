<?= $this->include('layouts/app') ?>
<?= $this->section('content') ?>

<div class="container">
    <br>
    <h4>Ini Halaman List User</h4>
    <button><a href="<?= base_url('/user' . '/create') ?>">Tambah</a></button>

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
                        <a href="<?= base_url('/user' . '/' . $user['id'] . '/edit') ?>" type="submit"
                            class="btn btn-primary">EDIT
                        </a>
                        <form action="<?= base_url('user/' . $user['id']) ?> " method="post">
                            <input type="hidden" name="_method" value="delete" class="btn btn-danger">

                            <?= csrf_field() ?>
                            <button type="submit">DELETE</button></button>
                        </form>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>