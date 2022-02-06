<?php
$con = mysqli_connect("localhost","root","","adminpannel");

extract($_POST);
if(isset($_POST['update'])){
    // $fname = $_POST['fname'];
    // $sname = $_POST['Sname'];
    // $class = $_POST['class'];
    // $marks = $_POST['marks'];
    // $id = $_POST['id'];


$sql = mysqli_query($con, "UPDATE registration SET fname = '$fname', Sname= '$sname', class = '$class', marks = $marks WHERE id= $id");
if($sql){
    header("location:names.php");

        echo'<script>alert("Updated Succesfully")</script>';
}
else{

    echo'Nothing Changed';
}
}
?>
