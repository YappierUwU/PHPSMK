<form action="" method="POST">
    kategori :
    <input type="text" name="kategori">
    <br>
    <input type="submit" name="simpan" value="simpan">

</form>




<?php

require_once "../function.php";

if (isset($_POST['simpan'])) {
    $kategori = $_POST['kategori'];

    $sql = "INSERT INTO tblkategori VALUES ('','$kategori') ";

    $result = mysqli_query($koneksi, $sql);

    header("location:http://localhost/web-php/PHP%20untuk%20%20SMK/Vid%2017-22/restoran/kategori/select.php");
}
