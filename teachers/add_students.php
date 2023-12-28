<?php

include('master_navbar.php');
include('master_siderbar.php');


?>

<!-- main contant -->

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
                    <h3>Add Teacher</h3>
                </div>

            </div>
            <br>
            <form method="POST" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                        <label>First Name*</label>
                        <input type="text" class="form-control" name="first_name" required>
                    </div>

                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                        <label>Last Name*</label>
                        <input type="text" class="form-control" name="last_name" required>
                    </div>

                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                        <label> Father Name*</label>
                        <input type="text" class="form-control" name="father_name" required>
                    </div>

                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                        <label> Mother Name*</label>
                        <input type="text" class="form-control" name="mother_name" required>
                    </div>

                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                        <label> Date-Of-Borth*</label>
                        <input type="date" name="date_of_birth" class="date_of_birth" required>
                    </div>


                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                        <label>Gender *</label>
                        <select class="select2 form-control" name="gender">
                            <option value="">Please Select Gender *</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Others">Others</option>
                        </select>
                    </div>

                    <!-- <div class="col-xl-3 col-lg-6 col-12 form-group">
                        <label>Joining Date *</label>
                        <input type="text" class="form-control" name="dobe" value="2023-12-17 12:22:38" readonly="">

                    </div> -->


                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                        <label>Blood Group *</label>
                        <select class="select2 form-control" name="blood_group">
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
                        <select class="select2 form-control" name="religion">
                            <option value="">Please Select Religion *</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Islam">Islam</option>
                            <option value="Christian">Christian</option>
                            <option value="Buddish">Buddish</option>
                            <option value="Others">Others</option>
                        </select>
                    </div>

                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                        <label>Father Occupation*</label>
                        <input type="text" class="form-control" name="father_occupation" required>
                    </div>

                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                        <label>Mother Occupation*</label>
                        <input type="text" class="form-control" name="mother_occupation" required>
                    </div>

                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                        <label>E-Mail*</label>
                        <input type="email" class="form-control" name="email" required>
                    </div>

                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                        <label>Password*</label>
                        <input type="password" class="form-control" name="pasword" required>
                    </div>

                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                        <label>Admission Date*</label>
                        <input type="date" class="form-control" name="admission_date" required>
                    </div>

                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                        <label>Admission ID*</label>
                        <input type="id" class="form-control" name="admission_id" required>
                    </div>

                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                        <label>Class *</label>
                        <select class="select2 form-control" name="class">
                            <option value="">Please Select Class *</option>
                            <option value="Play">Play</option>
                            <option value="Nursery">Nursery</option>
                            <option value="One">One</option>
                            <option value="Two">Two</option>
                            <option value="Three">Three</option>
                            <option value="Four">Four</option>
                            <option value="Five">Five</option>
                        </select>
                    </div>

                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                        <label>Section *</label>
                        <select class="select2 form-control" name="section">
                            <option value="">Please Select Section *</option>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                            <option value="D">D</option>
                            <option value="E">E</option>
                        </select>
                    </div>


                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                        <label>Roll No *</label>
                        <input type="roll" class="form-control" name="roll">
                    </div>


                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                        <label>Address *</label>
                        <input type="text" class="form-control" name="adress">
                    </div>


                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                        <label>Phone No*</label>
                        <input type="number" class="form-control" id="ponh" name="phone" min="1" pattern="/^-?\d+\.?\d*$/" onkeypress="if(this.value.length==13) return false;" oninput="validephone()" onchange="checkphone()">
                        <small style="display: none; color: darkred;" id="disp"></small>
                    </div>


                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                        <label>Facebook ID *</label>
                        <input type="text" class="form-control" name="facebook_id">
                    </div>

                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                        <label>Instagram ID *</label>
                        <input type="text" class="form-control" name="instagram_id">
                    </div>

                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                        <label>Twitter ID *</label>
                        <input type="text" class="form-control" name="twitter_id">
                    </div>

                    <div class="col-lg-6 col-12 form-group">
                        <label>Short Bio *</label>
                        <input type="text" class="form-control" name="short_bio">
                    </div>

                    <div class="col-lg-6 col-12 form-group">
                        <label class="text-dark-medium">Upload Teacher Photo *</label>
                        <input type="file" class="form-control-file" name="upload_student_hoto">
                    </div>

                    <div class="col-12 form-group mg-t-8">
                        <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark" name="submit">Save</button>

                        <a href="add_teachers.php">
                            <button type="button" class="btn-fill-lg bg-blue-dark btn-hover-yellow">Reset</button></a>
                    </div>
                </div>
            </form>

        </div>
    </div>



</div>




<?php
include('master_footer.php');

?>

<?php

if (isset($_POST['submit'])) {

    $FirstName = $_POST['first_name'];
    $LastName = $_POST['last_name'];
    $FatherName = $_POST['father_name'];
    $mother_name = $_POST['mother_name'];
    $DateOfBorth = $_POST['date_of_birth'];
    $Gender = $_POST['gender'];
    $BloodGroop = $_POST['blood_group'];
    $Religion = $_POST['religion'];
    $FatherOccuapation = $_POST['father_occupation'];
    $MotherOccuapation = $_POST['mother_occupation'];
    $Email = $_POST['email'];
    $password = $_POST['pasword'];
    $AdmissionDate = $_POST['admission_date'];
    $AdmissionId = $_POST['admission_id'];
    $Class = $_POST['class'];
    $Section = $_POST['	section'];
    $RollNo = $_POST['roll'];
    $Address = $_POST['adress'];
    $PhoneNo = $_POST['phone'];
    $FacebookId = $_POST['facebook_id'];
    $InstagramID = $_POST['instagram_id'];
    $TwitterId = $_POST['twitter_id'];
    $ShortBio = $_POST['short_bio'];
    

    $targetFolder = 'uploads/';
    $orgFileName = $_FILES['upload_student_hoto']['name']; 
    $tempFileName = $_FILES['upload_student_hoto']['tmp_name']; 

    $fullImageAddress = $base_address . $targetFolder . $orgFileName;

    if (isset($_POST['submit'])) {
        $insertdData = mysqli_query($config, "INSERT INTO add_new_students(first_name, last_name, father_name, mother_name, date_of_birth, gender, blood_group,religion, father_occupation, mother_occupation, email,pasword,admission_date, admission_id ,class, section,roll,adress , phone,facebook_id,instagram_id,twitter_id,short_bio,upload_student_hoto ) VALUES ('$FirstName', '$LastName', ' $FatherName', '$mother_name', '$DateOfBorth' , '$Gender' , '$BloodGroop', '$Religion', '$FatherOccuapation', '$MotherOccuapation','$Email', '$password', '$AdmissionDate', '$AdmissionId ', '$Class' ,'$Section', '$RollNo', '$Address ', '$PhoneNo' , '$FacebookId' , '$InstagramID' , '$TwitterId' ,  '$TwitterId', '$fullImageAddress')");

        if ($insertdData) {

            move_uploaded_file($tempFileName,$targetFolder.$orignalFileName);
            echo "<script>alert('Pic Uploaded Successfully')</script>";
        } else {
            echo "<script>alert('Nothing Uploaded')</script>";
        }
    }
}
?>