<?php 
include 'koneksi.php'; 
$id = $_GET['id'];
$result = mysqli_query($koneksi, "SELECT * FROM kelas WHERE id='$id'");
$data = mysqli_fetch_array($result);
?>

<h2>Edit Data Kelas</h2>
<form method="post">
    Nama Kelas: <input type="text" name="nama_kelas" value="<?= $data['nama_kelas'] ?>"><br><br>
    Jurusan: <input type="text" name="jurusan" value="<?= $data['jurusan'] ?>"><br><br>
    <button type="submit">Update</button>
</form>

<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_kelas = $_POST['nama_kelas'];
    $jurusan = $_POST['jurusan'];

    mysqli_query($koneksi, "UPDATE kelas SET nama_kelas='$nama_kelas', jurusan='$jurusan' WHERE id='$id'");
    
    header("Location: index.php");
    exit;
}
?>
