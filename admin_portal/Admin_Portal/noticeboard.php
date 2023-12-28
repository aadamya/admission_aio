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
                        <form method="post" enctype="multipart/form-data">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Heading of Notice board</label>
                                    <input type="text" name="heading_notice" class="form-control" id="exampleInputEmail1"
                                        placeholder="heading of notice board">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Description of notice</label>
                                    <input type="textarea" name="description_notice" class="form-control" id="exampleInputEmail1"
                                        placeholder="Description of notice">
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
$heading_notice = $_POST['heading_notice'];
$description_notice = $_POST['description_notice'];

if(isset($_POST['submit'])){
  $insertdata = mysqli_query($config,"INSERT INTO noticeboard (heading_notice,description_notice) VALUES ('$heading_notice','$description_notice')");
  if($insertdata){
    echo '<script>alert("Data inserted")</script>';
  }
  else{
    echo '<script>alert("Data not  inserted")</script>';
  }
}
?>