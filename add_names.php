
<?php
include('header.php');
include('errors.php');
$con = mysqli_connect("localhost", "root", "", "adminpannel");
extract($_POST);
if (isset($submit)){
$query = mysqli_query($con, "INSERT INTO registration( fname, Sname, class, marks)VALUES( '$fname','$sname', '$class',$marks) ");
echo '<script> document.location = "names.php" </script>';
}
?>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-sm-12">
                <div class="home-tab">

                    <div class="col-lg-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                            <form class="forms-sample" action="add_names.php" method="POST">
                            <div class="form-group">
                      <!-- <label for="exampleInputEmail1">Id</label>
                      <input type="number"  class="form-control" id="exampleInputEmail1" name="id" >
                    </div> -->
                    <div class="form-group">
                      <label for="exampleInputUsername1">Fname</label>
                      <input type="text" class="form-control" id="exampleInputUsername1"  name="fname">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Sname</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" name="sname" >
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Class</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" name="class">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Marks</label>
                      <input type="number" class="form-control" id="exampleInputEmail1" name="marks">
                    </div>
                    <button type="submit" class="btn btn-primary me-2" name="submit" value="submit">Submit</button>
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