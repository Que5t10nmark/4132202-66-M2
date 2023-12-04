<?php
require "condb.php";

$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];

echo $sql = "UPDATE tb_member SET menber_name='$name',member_email='$email'
WHERE id_member ='id_member='$id' ";

try {
    mysqli_query($conn, $sql);
} catch (Exception $e) {
    // echo $e->getMessage();
    echo "error";
}