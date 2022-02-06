<?php
include('header.php');
$con = mysqli_connect("localhost", "root", "", "adminpannel");

?>
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
                                <h4 class="card-title">Striped Table</h4>
                                <p class="card-description">
                                    Add class <code>.table-striped</code>
                                </p>
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>
                                                    Id
                                                </th>
                                                <th>
                                                    First Name
                                                </th>
                                                <th>
                                                    Second Name
                                                </th>
                                                <th>
                                                    Class
                                                </th>
                                                <th>
                                                    Marks
                                                </th>
                                                <th>
                                                    Update
                                                </th> <th>
                                                    Delete
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $query = mysqli_query($con, "SELECT * FROM REGISTRATION");
                                            while ($data = mysqli_fetch_array($query)) {



                                            ?>
                                                <tr>
                                                    <td class="py-1">
                                                        <?php echo $data['id'];?>
                                                    </td>
                                                    <td>
                                                        <?php echo $data['fname'];?>
                                                    </td>
                                                    <td>
                                                    <?php echo $data['Sname'];?>
                                                        
                                                    </td>
                                                    <td>
                                                    <?php echo $data['class'];?>
                                                       
                                                    </td>
                                                    <td>
                                                    <?php echo $data['marks'];?>
                                                        
                                                    </td>
                                                    <td>
                                                        <a href="updateform.php?id=<?php echo $data['id'];?>" class="btn btn-success btn-sm">Update</a>
                                                    </td>
                                                    <td>
                                                        <a href="delete.php?id=<?php echo $data['id'];?>" class="btn btn-danger btn-sm">Delete</a>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
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