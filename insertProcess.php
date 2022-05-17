<?php
include "myconnection.php";

$name = $_POST["myname"];
$address = $_POST["myaddress"];
$gambar = $_FILES['foto']['name'];
$tmp= $_FILES['foto']['tmp_name'];

$target_path = "image/";

move_uploaded_file($tmp, $target_path . $gambar);

$query = "INSERT into student(name,address,foto) 
    VALUES ('$name','$address','$gambar')";

if (mysqli_query($connect, $query)) {
    echo"Data Baru Berhasil Ditambahkan";
} else {
    echo "Data baru gagal dibuat <br>" . mysqli_error($connect);
}
mysqli_close($connect);
?>