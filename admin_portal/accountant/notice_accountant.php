<?php
    include('config.php');
    include('masterNavBar.php');
    include('masterSideBar.php');


    $id = $_GET['id'];
    $selecteddata = mysqli_query($config,"SELECT * FROM accountant_detail");
    $result = mysqli_fetch_assoc($selecteddata);
?>

<!-- main content  -->


<div class="content-wrapper">

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">All Students</h1>
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
    <div class="card height-auto">
                            <div class="card-body">
                                <div class="heading-layout1">
                                    <div class="item-title">
                                        <h3>Create A Notice</h3>
                                    </div>
                                    <!--  <div class="dropdown">
                                        <a class="dropdown-toggle" href="#" role="button" 
                                        data-toggle="dropdown" aria-expanded="false">...</a>
                
                                        <div class="dropdown-menu dropdown-menu-right">	
                                            <a class="dropdown-item" href="#"><i class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                        </div>
                                    </div> -->
                                </div>
                                <br>
                                <form method="post">
                                    <div class="row">
                                        <div class="col-12-xxxl col-lg-6 col-12 form-group">
                                            <label>Title</label>
                                            <input type="text" class="form-control" name="tname">
                                        </div>

                                        <div class="col-12-xxxl col-lg-6 col-12 form-group">
                                            <label>Details</label>
                                            <input type="text" class="form-control" name="dets">
                                        </div>

                                        <div class="col-12-xxxl col-lg-6 col-12 form-group">
                                            <label>User Idno:</label>
                                            <input type="text" class="form-control" name="userRole" value="<?php echo $result[admno];?>" readonly="">
                                             
                                       </div>

                                        <div class="col-12-xxxl col-lg-6 col-12 form-group">
                                            <label>Posted By </label>
                                            <input type="text" class="form-control" name="psby" value="kishansiku97@gmail.com" readonly="">
                                        </div>

                                        <div class="col-12-xxxl col-lg-6 col-12 form-group">
                                            <label>Date</label>
                                            <input type="text" class="form-control" name="date" value="<?php echo $result[save_time];?>" readonly="">
                                        </div>

                                        <div class="col-12 form-group mg-t-8">
                                            <button type="submit" name="send" class="btn btn-primary">Save</button>

                                            <a href="notice_accountant.php"><button type="button" class="btn btn-danger">Reset</button></a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

</div>



<?php
  include('masterFooter.php');
?>