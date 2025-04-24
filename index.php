<?php include 'koneksi.php'; ?>
<h1>Data Kelas</h1>
<a href="tambah.php">+ Tambah Kelas</a>
<table style="border: 1;" cellpadding="10">
    <tr>
        <th>No</th>
        <th>Nama Kelas</th>
        <th>Jurusan</th>
        <th>Aksi</th>
    </tr>
<?php
$no = 1;
$data = mysqli_query(mysql: $koneksi, query:"SELECT * FROM kelas");
while ($row = mysqli_fetch_array(result: $data)) {
    ?>
    <tr>
        <td><?= $no++ ?></td>
        <td><?= $row['nama_kelas'] ?></td>
        <td><?= $row['jurusan'] ?></td>
        <td>
            <a href="edit.php?id=<?= $row['id'] ?>">Edit</a>
            <a href="hapus.php?id=<?= $row['id'] ?>" onclick="return confirm('hapus data ini?')">Hapus</a>
        </td>
    </tr>
    <?php } ?>
</table>