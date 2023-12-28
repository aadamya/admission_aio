<?php
    include('../config.php');
    include('../masterNavBar.php');
    include('../masterSideBar.php');

    $id =$_GET['id'];
    $selecteddata = mysqli_query($config,"SELECT * FROM accountant_detail");
    $result = mysqli_fetch_assoc($selecteddata);



   if(isset($_POST['submit'])){
    $deletedData = mysqli_query($config,"DELETE FROM accountant_detail where id ='$id'");

    if($deletedData){
        echo '<script>alert("data deleted successfull")</script>';
    }

   }


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
                    <h3>Update</h3>
                </div>
            </div>
            <br>
            <form method="POST" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                        <label>ID No *</label>
                        <input type="text" class="form-control" name="admNo"  id = "admNo" value="<?php echo $result[admno]?>" readonly="">
                    </div>
                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                        <label>First Name *</label>
                        <input type="text" class="form-control" name="frtn" value ="<?php echo $result['frtn']?>" >
                    </div>
                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                        <label>Last Name *</label>
                        <input type="text" class="form-control" name="lstn" value ="<?php echo $result[lstn]?>">
                    </div>
                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                        <label>Gender *</label>
                        <select class="select2 form-control" name="gen" value ="<?php echo $result[gen]?>">
                            <option value="">Please Select Gender *</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Others">Others</option>
                        </select>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                        <label>Joining Date *</label>
                        <input type="date" class="form-control" name="dobe" value="<?php echo $result[dobe]?>">

                    </div>

                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                        <label>Blood Group *</label>
                        <select class="select2 form-control" name="blgp" value ="<?php $result[blgp]?>">
                            <option value="">Please Select Group *</option>
                            <option value="A+">A+</option>
                            <option value="A-">A-</option>
                            <option value="B+">B+</option>
                            <option value="B-">B-</option>
                            <option value="O+">O+</option>
                            <option value="O-">O-</option>
                        </select>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                        <label>Religion *</label>
                        <select class="select2 form-control" name="regin" value = "<?php echo $result[regin]?>">
                            <option value="">Please Select Religion *</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Islam">Islam</option>
                            <option value="Christian">Christian</option>
                            <option value="Buddish">Buddish</option>
                            <option value="Others">Others</option>
                        </select>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                        <label>E-Mail *</label>
                        <input type="email" class="form-control" name="mail" value ="<?php echo $result[mail]?>">
                    </div>
                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                        <label>Password*</label>
                        <input type="text" class="form-control" name="teapass" readonly="" id="teapass" value="<?php echo $result[teapass]?>">
                    </div>

                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                        <label>Address *</label>
                        <input type="text" class="form-control" name="adres" value ="<?php echo $result[adres]?>">
                    </div>

                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                        <label>Phone *</label>
                        <input type="number" class="form-control" value ="<?php echo $result[ponh]?>" id="ponh" name="ponh" min="1"
                            pattern="/^-?\d+\.?\d*$/" onkeypress="if(this.value.length==13) return false;"
                            oninput="validephone()" onchange="checkphone()">
                        <small style="display: none; color: darkred;" id="disp"></small>
                    </div>

                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                        <label>Facebook ID *</label>
                        <input type="text" class="form-control" name="facd" value ="<?php echo $result[facd]?>">
                    </div>
                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                        <label>Instagram ID *</label>
                        <input type="text" class="form-control" name="insd" value = "<?php echo $result[insd]?>">
                    </div>
                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                        <label>Twitter ID *</label>
                        <input type="text" class="form-control" name="twitd" value ="<?php echo $result[twitd]?>">
                    </div>
                    <div class="col-lg-6 col-12 form-group">
                        <label>Short BIO *</label>
                        <input type="text" class="form-control" name="mesae" value ="<?php echo $result[mesae]?>">
                    </div>
                    <div class="col-lg-6 col-12 form-group">
                        <label class="text-dark-medium">Upload Teacher Photo *</label>
                        <input type="file" class="form-control-file" name="uspoto" value ="<?php echo $result[uspoto]?>">
                    </div>
                    <div class="col-12 form-group mg-t-8">
                        <button type="submit" class="btn btn-danger"
                            name="submit">Delete</button>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>


<?php
  include('../masterFooter.php');
?>