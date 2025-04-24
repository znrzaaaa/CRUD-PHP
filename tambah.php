<?php include 'koneksi.php'; ?>
<h1>Tambah Data Kelas</h1>
<form method="post">
    Nama Kelas: <input type="text" name="nama_kelas"><br><br>
    Jurusan: <input type="text" name="jurusan"><br><br>
    <button type="submit">Simpan</button>
</form>

<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_kelas = $_POST['nama_kelas'];
    $jurusan = $_POST['jurusan'];
    mysqli_query($koneksi, "INSERT INTO kelas (nama_kelas, jurusan) VALUES ('$nama_kelas', '$jurusan')");
    header("Location: index.php");
    exit; 
}
?>
