<?php require('partials/header.php'); ?>
<?php require('partials/nav.php'); ?>

<div class="container mt-3">
    <h1>Halaman Home</h1>

    <h3>Daftar Mahasiswa</h3>

    <a href="tambah.php" class="btn btn-primary">Tambah Data Mahasiswa</a>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Gambar</th>
                <th scope="col">NIM</th>
                <th scope="col">Nama</th>
                <th scope="col">Email</th>
                <th scope="col">Jurusan</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($students as $student) : ?>
            <tr>
                <th scope="row"><?= $i++; ?></th>
                <td>
                    <img src="img/<?= $student['gambar']; ?>" width="50">
                </td>
                <td><?= $student['NIM']; ?></td>
                <td><?= $student['NAMA']; ?></td>
                <td><?= $student['EMAIL']; ?></td>
                <td><?= $student['JURUSAN']; ?></td>
                <td>
                    <a href="" class="badge text-bg-warning">ubah</a> |
                    <a href="" class="badge text-bg-danger">hapus</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php require('partials/footer.php'); ?>