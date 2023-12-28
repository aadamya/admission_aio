<?php
include('masterheader.php');
include('mastersidebar.php');

?>

<div class="content-wrapper">
<div class="card card-danger">
              <div class="card-header">
                <h3 class="card-title">Grade Card List</h3>
              </div>
              <div class="card-body">
                <div class="row">
                 <label>Select Session:</label>	
                  <div class="col-2">
                    <input type="text" class="form-control" placeholder=".year">
                  </div>
                  <label>Select Exam</label>
                  <div class="col-2">
                    <input type="text" class="form-control" placeholder=".class">
                  </div>
              </div>
</div>
              <!-- /.card-body -->
</div>	
            <!-- <div class="card-footer"> -->
             <button type="submit" class="btn btn-primary">Submit</button><br>
                <!-- </div> -->	



<?php

include('masterfooter.php');

?>