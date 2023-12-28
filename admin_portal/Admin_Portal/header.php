<?php
include('config.php');
include('masterNavBar.php');
include('masterSideBar.php');
?>


<div class="content-wrapper">

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                         <div class="card card-primary">
                          <form method = "post" enctype="multipart/form-data">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Upload logo</label>
                                    <input type="file"  name = "logo" class="form-control" id="exampleInputEmail1"
                                        placeholder="Enter email">
                                </div>
                             </div>
                             <div class="card-footer">
                            <button type="submit" name = "submit" class="btn btn-primary">Submit</button>
                            </div>
                           </form>
                    </div>
                 </div>

            </div>
    </section>

</div>

<?php
include('masterFooter.php');
?>



<!-- php code  -->

<?php
$targetFolder = '../uploads/';
$orgFileName = $_FILES['logo']['name'];
$tempFileName = $_FILES['logo']['tmp_name'];
$fullImageAdress = $base_address.$targetFolder.$orgFileName;

if(isset($_POST['submit'])){
    $checkImgUpload  = mysqli_query($config,"INSERT INTO header (logo) VALUES('$fullImageAdress')");

    // echo "kishan inside";
    // echo $pic_name;
    if($checkImgUpload){
        move_uploaded_file($tempFileName,$targetFolder.$orgFileName);
        echo '<script>alert("data inserted")</script>';
    }
    else{
        echo '<script>alert("data inserted")</script>';
    }
}

?>