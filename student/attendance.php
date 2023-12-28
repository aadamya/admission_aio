<?php
include('masterheader.php');
include('mastersidebar.php');

?>

<div class="content-wrapper">
<div class="card card-danger">
              <div class="card-header">
                <h3 class="card-title">Attendance</h3>
              </div>
              <div class="card-body">
                <div class="row">
                 <label>Academic Year:</label>	
                  <div class="col-2">
                    <input type="text" class="form-control" placeholder=".year">
                  </div>
                  <label>Class</label>
                  <div class="col-2">
                    <input type="text" class="form-control" placeholder=".class">
                  </div>
                  <label>Section</label>
                  <div class="col-2">
                    <input type="text" class="form-control" placeholder=".section">
                  </div>
                </div>
              </div>
              <!-- /.card-body -->
            </div>	
            <!-- <div class="card-footer"> -->
             <button type="submit" class="btn btn-primary">Search</button>
                <!-- </div> -->


<?php
include('masterfooter.php');

?>
