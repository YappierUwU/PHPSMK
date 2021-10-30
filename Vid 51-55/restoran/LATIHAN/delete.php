<?php
require_once "../function.php";


$sql = "DELETE FROM tblkategori WHERE idkategori = $id";

$result = mysqli_query($koneksi, $sql);

header("location:http://localhost/web-php/PHP%20untuk%20%20SMK/Vid%2017-22/restoran/kategori/select.php");
