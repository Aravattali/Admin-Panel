
<?php
$con = mysqli_connect("localhost", "root", "", "adminpannel");

// registering User//

if(isset($_POST['register'])){

//recieving all inputs from the form

$username = mysqli_real_escape_string($con,$_POST['username']);

$password = mysqli_real_escape_string($con,$_POST['password']);

// form validation: ensure that the username and password are correctly filled

if(empty($username)){array_push($errors,"Username is required");}

if(empty($password)){array_push($errors, "password is required");}

// Checking if the user is already exist

$user_check = "SELECT * FROM users WHERE '$username'= 'username'";

$result = mysqli_query($con, $user_check);

$user = mysqli_fetch_assoc($result);
if($user){

    if($user['username']===$username){

        array_push($errors,"username is already exist");

    }

    // finnaly Register a user

    if(count($errors)==0){

        $password = md5($password);

        echo $password;

        $query = "INSERT INTO users (username , password)VALUES ('username','password')";

        mysqli_query($con,$query);

        $_SESSION['username'] = $username;

        $_SESSION['success'] = "you are now logged in";

        header('location: index.php');
    }

}



}
?>

