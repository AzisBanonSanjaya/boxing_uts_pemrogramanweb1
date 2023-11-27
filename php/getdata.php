<!DOCTYPE html>
<html lang="en">
<?php include("koneksi.php");   ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pendaftaran Boxing</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

</head>

<body>
    <div class="container mt-5">
        <div class="row">
             <div class="col-md-10">
                <h2>Data Pendaftaran Boxing</h2>
            </div>
            <div class="col-md-2">
                <a href="Boxing/index.php" class="btn btn-warning float-right">Halaman Utama</a>
            </div>
        </div>

        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr class="text-center">
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Jenis Kelamin</th>
                        <th>Pendidikan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    <?php
                    $query = mysqli_query($koneksi, "select * from calon_anggota");
                    while ($anggota = mysqli_fetch_array($query)) {
                    ?>
                        <tr>
                            <td>
                                <?php echo $anggota['nama'] ?>
        
                            </td>
                            <td>
                                <?php echo $anggota['alamat'] ?>
        
                            </td>
                            <td>
                                <?php echo $anggota['jenis_kelamin'] ?> 
        
                            </td>
                            <td>
                                <?php echo $anggota['pendidikan'] ?>
        
                            </td>
                            <td>
                            
                                <a class="btn btn-danger mr-3" href="delete.php?id= <?php echo $anggota['id'] ?>">Hapus</a>
                                <a class="btn btn-primary" href="update.php?id= <?php echo $anggota['id'] ?>">Edit</a>
                                
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    <?php if(!empty($_GET['status'])): ?>
        <?php
            if($_GET['status'] == 'sukses'){
                echo "<script>alert('Pendaftaran Berhasil');</script>";
            }elseif($_GET['status'] == 'update'){
                echo "<script>alert('Update Berhasil');</script>";
            }elseif($_GET['status'] == 'delete'){
                echo "<script>alert('Delete Berhasil');</script>";
            }else {
                echo "<script>alert('Pendaftaran Gagal');</script>";
            }
        ?>

    <?php endif; ?>
</body>

</html>