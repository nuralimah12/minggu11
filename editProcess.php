<?php
include "myconnection.php";

$id = $_POST['myid'];

$name = $_POST["myname"];
$address = $_POST["myaddress"];
$gambar = $_FILES['foto']['name'];
$tmp = $_FILES['foto']['tmp_name'];

$target_path = "image/";

move_uploaded_file($tmp, $target_path . $gambar);


$query = "UPDATE student SET name='$name',address = '$address',foto='$gambar' WHERE id=$id";

if (mysqli_query($connect, $query)) {
    header('Location:homeCRUD.php');
} else {
    echo "gagal mengubah data <br>" . mysqli_error($connect);
}
mysqli_close($connect);