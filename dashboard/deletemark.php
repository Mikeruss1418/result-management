<?php include '../For/crud/connection.php';
$id= $_GET['id'];
$query= "DELETE FROM marksheet  WHERE id='$id'";
$data=mysqli_query($connection, $query);
if($data){
    header('location:adashres.php');
}

        ?>
