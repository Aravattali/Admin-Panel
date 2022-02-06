
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
    <title>Updating Form</title>
</head>

<body>

    <br>
    <br>
    <br>
    <br>

    <?php
    extract($_GET);

    $query = mysqli_query($con, " SELECT * FROM registration WHERE id = $id");

    while ($data = mysqli_fetch_array($query)) {

    ?>


        <div class="main-panel">
            <div class="content-wrapper">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="home-tab">

                            <div class="col-lg-12 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <form class="forms-sample" action="update.php" method="POST">
                                            <input type="hidden" name="id" value="<?php echo $data['id'];?>">
                                
                                            <div class="form-group">
                                                <label for="exampleInputUsername1">Fname</label>
                                                <input type="text" class="form-control" id="exampleInputUsername1" name="fname" value="<?php echo $data['fname']; ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Sname</label>
                                                <input type="text" class="form-control" id="exampleInputEmail1" name="sname" value="<?php echo $data['Sname']; ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Class</label>
                                                <input type="text" class="form-control" id="exampleInputEmail1" name="class" value="<?php echo $data['class']; ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Marks</label>
                                                <input type="number" class="form-control" id="exampleInputEmail1" name="marks" value="<?php echo $data['marks']; ?>"> 
                                            </div>
                                        <?php

                                    }
                                        ?>
                                        <button type="submit" class="btn btn-success me-2" name="update" value="submit">Submit</button>
                                        </form>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <?php
            include('footer.php');
            ?>

</body>

</html>