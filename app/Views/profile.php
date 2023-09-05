<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
</head>

<body>
    <h1>Ini Halaman Profile Saya</h1>
    <table>
        <tr>
            <td>Nama Saya </td>
            <td> : </td>
            <td>
                <?= $nama ?>
            </td>
        </tr>
        <tr>
            <td>Kelas saya </td>
            <td> : </td>
            <td>
                <?= $kelas ?>
            </td>
        </tr>
        <tr>
            <td>NPM Saya </td>
            <td> : </td>
            <td>
                <?= $npm ?>
            </td>
        </tr>
    </table>

</body>

</html>