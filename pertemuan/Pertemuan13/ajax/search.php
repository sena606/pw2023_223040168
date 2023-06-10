<?php
require '../functions.php';
$keyword = $_GET['keyword'];
$query = "SELECT * FROM 
    mahasiswa 
    WHERE 
    NAMA    LIKE'%$keyword%' OR
    JURUSAN LIKE'%$keyword%' OR
    EMAIL   LIKE'%$keyword%' 
    ";
$students = query($query);
?>

<?php if ($students) : ?>
    <table class=" table">
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
<?php else : ?>
    <div class="row">
        <div class="col-md-6">
            <div class="alert alert-danger" role="alert">
                Not Found
            </div>
        </div>
    </div>
<?php endif; ?>