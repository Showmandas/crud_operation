<?php
include 'conn.php';
$id=$_GET['id'];
$delquery="DELETE FROM listTable where id={$id}";
$query= mysqli_query($con,$delquery);

header('location:display.php');
?>