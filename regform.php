
<?php

include('header.php');

include('server.php');
?>


<!DOCTYPE html>




<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <br>
    <br>
    <br>
    <br>



    <div class="row">
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Registration form</h4>
                    <p class="card-description">
                    </p>
                    <form class="forms-sample" action="./register.php" method="POST">
                        <?php 
                        include('errors.php');
                        ?>
                        <div class="form-group">
                            <label for="exampleInputUsername1">Username</label>
                            <input type="text" class="form-control" name="username" placeholder="Username" value="<?php echo $username; ?>" >
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" name="password" placeholder="Password">
                        </div>
                </div>
                <button type="submit" name="register" class="btn btn-primary me-2">Register user</button>
                <br>
                <button type="submit" class="btn btn-success me-2" href="login.php">Already have user</button>
                </form>
            </div>

</body>

</html>