<?php
    include('config.php');
    include('masterNavBar.php');
    include('masterSideBar.php');
?>

<!-- main content  -->
<div class="content-wrapper">

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <form method="post" enctype="multipart/form-data">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Name of school</label>
                                    <input type="text" name="name" class="form-control" id="exampleInputEmail1"
                                        placeholder="Enter name of school">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">About your school</label>
                                    <input type="textarea" name="about" class="form-control" id="exampleInputEmail1"
                                        placeholder="About you school(Ex:location)">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Upload Image</label>
                                    <input type="file"  name = "image" class="form-control" id="exampleInputEmail1"
                                        placeholder="upload image">
                                 </div> 
                            </div>
                            <div class="card-footer">
                                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
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

<?php
$name = $_POST['name'];
$about = $_POST['about'];
$targetFolder = 'uploads/';
$orgFileName = $_FILES['image']['name'];
$tempFileName = $_FILES['image']['tmp_name'];
$fullImageAdress = $base_address.$targetFolder.$orgFileName;
if(isset($_POST['submit'])){
    $insertdata = mysqli_query($config,"INSERT INTO mainbody (name,about,image) VALUES ('$name','$about','$fullImageAdress')");
    if($insertdata){
        echo '<script>alert("Data inserted")</script>';
    }
    else{
        echo '<script>alert("Data not inserted")</script>';
    }

}
    

?>