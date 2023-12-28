<?php
include('config.php');
include('master_navbar.php');
include('master_siderbar.php');


$displaydata = mysqli_query($config, "SELECT * FROM notice_board");
$total = mysqli_num_rows($displaydata);


if ($total != 0) {
    ?>

<div class="content-wrapper">

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">All Notice</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Teacher Dashboard</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">All Notice Details</h3>
                    <div class="card-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                            <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-default">
                                    <i class="fas fa-search"></i>
                                    
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Title Name</th>
                                <th>Details</th>
                                <th>Assigned</th>
                                <th>Post By</th>
                                <th>Date</th>
                                <th>Action</th>
                               
                            </tr>
                        </thead>
                        <?php
                       while ($result = mysqli_fetch_assoc($displaydata)) {
                        echo "<tr>
                                 <td>{$result['id']}</td>
                                 <td>{$result['title']}</td>
                                 <td>{$result['details']}</td>
                                 <td>{$result['assigned_role']}</td>
                                 <td>{$result['posted_by']}</td>
                                 <td>{$result['dinak']}</td>
                                 
                            </tr>";
                    }
} else {
"no records found";
}
                           
   ?>                                                   
                            
                        
                    </table>
                </div>

            </div>

        </div>
   

    
<?php
include('master_footer.php');

?>