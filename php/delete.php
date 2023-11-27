<?php
include("koneksi.php");
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "delete from calon_anggota where id='$id'";
    $delete=mysqli_query($koneksi, $query);
    if($delete){
        header('Location: getdata.php?status=delete');
    } else {
        header('Location: getdata.php?status=gagal');
    }
}
