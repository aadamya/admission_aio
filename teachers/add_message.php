<?php
include('config.php');
include('master_navbar.php');
include('master_siderbar.php');


?>

<!-- main content -->

<div class="content-wrapper">

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Add Message</h1>
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

    <section class="content">
        <div class="container-fluid">
            <div class="row">

                <div class="col-md-12">

                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Create A Notice</h3>
                        </div>


                        <form method="post">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Title</label>
                                    <input type="text" class="form-control"  name="title" >
                                </div>
                                
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Details</label>
                                    <input type="text" class="form-control"  name="details" >
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Assigned Role:</label>
                                    <input type="text" class="form-control"  name="assigned_role" >
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">Posted By</label>
                                    <input type="text" class="form-control"  name="posted_by" >
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">Date</label>
                                    <input type="date" class="form-control" name="dinak" placeholder="dd/mm/yyyy">
                                </div>
                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary" name="submit" >Submit</button>
                            </div>
                        </form>
                    </div>

    </section>




</div>


<?php
include('master_footer.php');

?>


<?php

if (isset($_POST['submit'])) {
    $Tital = $_POST['title'];
    $Details = $_POST['details'];
    $Assigned_role = $_POST['assigned_role'];
    $Posted_by = $_POST['posted_by'];
    $Date = $_POST['dinak'];

    $insertdData = mysqli_query($config, "INSERT INTO messaging(title, details, assigned_role, posted_by, dinak) VALUES ('$Tital', '$Details', '$Assigned_role', '$Posted_by', '$Date')");

    if ($insertdData) {
        echo "<script>alert('Data Inserted Successfully')</script>";
    } else {
        echo "<script>alert('Failed to Insert Data')</script>";
    }
}

?>