<?php
    include('../config.php');
    include('../masterNavBar.php');
    include('../masterSideBar.php');

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
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    </ol>
                </div>
            </div>
        </div>
    </div>


    <div class="card height-auto">
                            <div class="card-body">
                                <div class="heading-layout1">
                                    <div class="item-title">
                                        <h3>Write New Message</h3>
                                    </div>
                                </div>
                                <br>
                                <form method="post">
                                    <div class="row">
                                        <div class="col-12 form-group">
                                            <label>Title</label>
                                            <input type="text" name="tname" class="form-control" required="">
                                        </div>
                                        <div class="col-12 form-group">
                                            <label>Message</label>
                                            <textarea class="textarea" required="" name="msg"></textarea>
                                        </div>

                                         <div class="col-12-xxxl col-lg-6 col-12 form-group">
                                            <label>User Idno:</label>
                                            <input type="text" name="userRole" class="form-control" value="<?php echo $result[admno];?>" readonly="">
                                       </div>
                                   
                                        <div class="col-12-xxxl col-lg-6 col-12 form-group">
                                            <label>Posted By </label>
                                            <input type="text" class="form-control" name="psby" value="kishansiku97@gmail.com" readonly="">
                                        </div>
                                      
                                         <div class="col-12-xxxl col-lg-6 col-12 form-group">
                                            <label>Date</label>
                                            <input type="text" name="date" class="form-control" value="<?php echo $result[save_time];?>" readonly="">
                                        
                                        </div>
                                        <div class="col-12 form-group mg-t-8">
                                            <button type="submit" name="send" class="btn btn-primary">Save</button>
                                            <a href="message_accountant.php"><button type="button" class="btn btn-danger">Reset</button></a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
    </div>



<?php
  include('../masterFooter.php');
?>