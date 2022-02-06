
<?php

include('header.php');
include('server.php');
 ?>
 <br>
 <br>
 <br>
 <br>

 

<div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Login form</h4>
                  <p class="card-description">
                  </p>
                  <form class="forms-sample" action="./login.php" method="POST">
                      <?php
                      include('errors.php');
                      ?>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Username</label>
                      <input type="text"  class="form-control" name="username" placeholder="Username">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                      <input type="password" class="form-control" name="password" placeholder="Password">
                    </div>
                   
                   
                    </div>
                    <button type="submit" name="login" class="btn btn-primary me-2">Submit</button>
                  </form>
</div>
