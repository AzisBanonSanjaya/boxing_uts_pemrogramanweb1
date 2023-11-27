<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="addapi.php" method="post">
        <input type="text" name="nama" id="nama" placeholder="masukan nama">
        <input type="text" name="alamat" id="alamat" placeholder="masukan alamat">
        <label for=""><input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="Laki-laki">Laki-laki</label>
        <label for="">
            <input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="Perempuan">
            Perempuan</label>
        <label for="Pendidikan">Pendidikan</label>
        <select name="pendidikan" id="pendidikan">
            <option value="sd">SD</option>
            <option value="smp">SMP</option>
            <option value="smk">SMK</option>
        </select>
        <button type="submit" value="daftarboxing" name="daftarboxing">daftarboxing</button>




    </form>
</body>

</html>