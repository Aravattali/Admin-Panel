<?php
extract($_GET);
$con = mysqli_connect("localhost", "root", "", "adminpannel");
mysqli_query($con,"delete from registration where id = $id");

header("location:names.php");

?>