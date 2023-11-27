<?php
include("koneksi.php");
if(isset($_POST['daftarboxing'])) {
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $pendidikan = $_POST['pendidikan'];

    $query = "INSERT INTO `calon_anggota`( `nama`, `alamat`, `jenis_kelamin`, `pendidikan`) 
    VALUES ('$nama','$alamat','$jenis_kelamin','$pendidikan')";
    $insert=mysqli_query($koneksi, $query);
    if($insert){
        header('Location: Boxing/contact.php?status=sukses');
    } else {
        header('Location: Boxing/contact.php?status=gagal');
    }
}
?>