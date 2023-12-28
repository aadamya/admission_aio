<?php
include('config.php');
include('masterheader.php');
include('mastersidebar.php');
$query = "SELECT * FROM fee1";
$result = mysqli_query($config, $query);

?>

<div class="content-wrapper">
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">My Fee Report</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Academic</th>
                    <th>Academic Miscellaneous</th>
                    <th>Hostel</th>
                    <th>Hostel Miscellaneous</th>
                    <th>Transport</th>
                    <th>Transport Miscellaneous</th>
                    <th>Total</th>
                   
                  </tr>
                  </thead>
                  <tbody>
                        <?php
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<tr>";
                            echo "<td>{$row['academic']}</td>";
                            echo "<td>{$row['acadmic_mis']}</td>";
                            echo "<td>{$row['hostel']}</td>";
                            echo "<td>{$row['hostel_mis']}</td>";
                            echo "<td>{$row['transport']}</td>";
                            echo "<td>{$row['transport_mis']}</td>";
                            echo "<td>{$row['total']}</td>";
                            
                            echo "</tr>";
                        }
                        ?>
                  
                  </tbody>
                  <tfoot>
                  <tr>
          
                   
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card --><br>


            <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
               <div class="card-header">
                <!-- <h3 class="card-title">My Fee Report</h3>  -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Sr.No</th>
                    <th>Session</th>
                    <th>Fee Type</th>
                    <th>Head Name</th>
                    <th>Amount</th>
                    
                   
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>1</td>
                    <td>2020-2021</td>
                  
                    <td>Academic Fees</td>
                    <td>Exam Fee</td>
                    <td>0</td>
                    
                   
                  </tr>
                   <tr>
                    <td>2</td>
                    <td>2020-2021</td>
                  
                    <td>Academic Fees</td>
                    <td>Fine Fee</td>
                    <td>0</td>
                    
                   
                  </tr>
                  
                  </tbody>
                  <tfoot>
                  <tr>
          
                   
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
