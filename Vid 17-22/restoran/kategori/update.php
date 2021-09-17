<!-- <h4>update data</h4> -->

<?php
require_once "../function.php";

// echo $id;

$sql = "SELECT * FROM tblkategori WHere idkategori = $id";
$result = mysqli_query($koneksi, $sql);

$row = mysqli_fetch_assoc($result);

// echo $row['kategori'];


// $kategori = 'Lontong Balap';

// $id = 10;

// $sql = "UPDATE tblkategori SET kategori='$kategori' WHERE idkategori =$id ";

// $result = mysqli_query($koneksi, $sql);

// echo $sql;


?>
<form action="" method="POST">
    kategori :
    <input type="text" name="kategori" value="<?php echo $row['kategori'] ?>">
    <br>
    <input type="submit" name="simpan" value="simpan">

</form>


<?php

if (isset($_POST['simpan'])) {
    $kategori = $_POST['kategori'];
    $sql = "UPDATE tblkategori SET kategori='$kategori' WHERE idkategori =$id ";
    $result = mysqli_query($koneksi, $sql);
    header("location:http://localhost/web-php/PHP%20untuk%20%20SMK/Vid%2017-22/restoran/kategori/select.php");
}




?>