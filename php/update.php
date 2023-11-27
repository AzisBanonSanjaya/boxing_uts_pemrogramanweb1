<?php
include("koneksi.php");
if (!isset($_GET['id'])) {
    header('Location:getdata.php');
}
$id = $_GET['id'];
$sql = "select * from calon_anggota where id=$id";
$query = mysqli_query($koneksi, $sql);
$murid = mysqli_fetch_assoc($query);
if (mysqli_num_rows($query) < 1) {
    die("data tidak ditemukan");
}
if (isset($_POST['update'])){
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $pendidikan = $_POST['pendidikan'];
    $sql = "update calon_anggota set nama='$nama', alamat='$alamat', jenis_kelamin='$jenis_kelamin', pendidikan='$pendidikan' where id=$id";
    $query = mysqli_query($koneksi, $sql);
    if($query){
        header('Location: getdata.php?status=update');
    } else {
        header('Location: getdata.php?status=gagal');
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Anggota</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body class="container mt-5">
    <h3 class="text-center">Edit Data Pendaftaran Boxing</h3>
    <form action="" method="post">
        <input type="hidden" name="id" value="<?php echo $murid['id'] ?>">
        <div class="form-group">
            <label for="nama">Nama:</label>
            <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan Nama"
                value="<?php echo $murid['nama'] ?>" required>
        </div>
        <div class="form-group">
            <label for="alamat">Alamat:</label>
            <input type="text" name="alamat" id="alamat" class="form-control" placeholder="Masukkan Alamat"
                value="<?php echo $murid['alamat'] ?>" required>
        </div>
        <div class="form-group">
            <label>Jenis Kelamin:</label>
            <div class="form-check">
                <input type="radio" name="jenis_kelamin" id="laki-laki" class="form-check-input"
                    value="Laki-laki" <?php echo ($murid['jenis_kelamin'] == 'Laki-laki') ? 'checked' : ''; ?>>
                <label class="form-check-label" for="laki-laki">Laki-laki</label>
            </div>
            <div class="form-check">
                <input type="radio" name="jenis_kelamin" id="perempuan" class="form-check-input"
                    value="Perempuan" <?php echo ($murid['jenis_kelamin'] == 'Perempuan') ? 'checked' : ''; ?>>
                <label class="form-check-label" for="perempuan">Perempuan</label>
            </div>
        </div>
        <div class="form-group">
            <label for="pendidikan">Pendidikan:</label>
            <select name="pendidikan" id="pendidikan" class="form-control">
                <option value="sd" <?php echo ($murid['pendidikan'] == 'sd') ? 'selected' : ''; ?>>SD</option>
                <option value="smp" <?php echo ($murid['pendidikan'] == 'smp') ? 'selected' : ''; ?>>SMP</option>
                <option value="smk" <?php echo ($murid['pendidikan'] == 'smk') ? 'selected' : ''; ?>>SMK</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary" name="update" value="update">Update Data</button>
        <a href="getdata.php" class="btn btn-warning">Kembali</a>
    </form>
</body>

</html>
