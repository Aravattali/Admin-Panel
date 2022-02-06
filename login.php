 <?php
  //  include('./header.php');
  error_reporting(E_ALL);
  ini_set('display_errors', '1');
  include('./server.php');

  if (isset($_POST['login'])) {

    $username =  mysqli_real_escape_string($con, $_POST['username']);

    $password =  mysqli_real_escape_string($con, $_POST['password']);

    // form validation

    // if ($username="") {

    //   echo '<script>alert("username is required ")</script>';
    // }
    // if (empty($password)) {

    //   array_push($errors, "password is required");
    // }

    if (count($errors) == 0) {

      $password = md5($password);

      $query = " SELECT * FROM users WHERE   username ='$username' AND  password ='$password'";

      $result = mysqli_query($con, $query);

      // if($result){

      //   echo('HI');
      // }
      // else{

      //   echo('error occured');
      // }

      if (mysqli_num_rows($result) == 1) {

        $_SESSION['username'] = $username;
        $_SESSION['success'] = "now you are logged in";
        header('location:index.php');
      } else {

      
        echo'<script>alert("Invalid username or password")</script>';
      }
    } else {
      header('location:loginForm.php');
    }
  }

  ?>
