
<?php
include('config.php');
include('masterheader.php');
include('mastersidebar.php');

$query = "SELECT * FROM time_table";
$result = mysqli_query($config, $query);

?>

<div class="content-wrapper">
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Time Table for section 02 (II) March 2022 to March 2023</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Time Slots</th>
                    <th>Monday</th>
                    <th>Tuesday</th>
                    <th>Wednesday</th>
                    <th>Thursday</th>
                    <th>Friday</th>
                    <th>Saturday</th>
                    <th>Sunday</th>
                  </tr>
                  </thead>
                  <tbody>
                  
                      <?php
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<tr>";
                            echo "<td>{$row['time slots']}</td>";
                            echo "<td>{$row['monday']}</td>";
                            echo "<td>{$row['tuesday']}</td>";
                            echo "<td>{$row['wednesday']}</td>";
                            echo "<td>{$row['thursday']}</td>";
                            echo "<td>{$row['friday']}</td>";
                            echo "<td>{$row['saturday']}</td>";
                            echo "<td>{$row['sunday']}</td>";
                            echo "</tr>";
                        }
                        ?>
        
                  
                  
                  
                  
                  
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Time Table</th>
                    <th>day</th>
                    
                   
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->


<?php
include('masterfooter.php');

?>