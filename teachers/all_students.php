<?php
include('config.php');
include('master_navbar.php');
include('master_siderbar.php');


$displaydata = mysqli_query($config, "SELECT * FROM add_new_students");
$total = mysqli_num_rows($displaydata);


if ($total != 0) {

    ?>
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


        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">All Students Data</h3>
                        <div class="card-tools">
                            <div class="input-group input-group-sm" style="width: 150px;">
                                <input type="text" name="table_search" class="form-control float-right"
                                    placeholder="Search">
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
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Father Name</th>
                                    <th>Mather Name</th>
                                    <th>Date Of Bireth</th>
                                    <th>Gender</th>
                                    <th>Blood Group </th>
                                    <th>Religion</th>
                                    <th>Father Occupation</th>
                                    <th>Mother Occupation</th>
                                    <th>Email</th>
                                    <th>Password</th>
                                    <th>Admission Date</th>
                                    <th>Admission ID</th>
                                    <th>Class</th>
                                    <th>Section</th>
                                    <th>Roll No.</th>
                                    <th>Address</th>
                                    <th>Phone No.</th>
                                    <th>FaceBook ID</th>
                                    <th>Instagram ID</th>
                                    <th>Twitter ID</th>
                                    <th>Short Bio</th>
                                    <th>Student Picture</th>
                                </tr>
                            </thead>
                            <?php

                            while ($result = mysqli_fetch_assoc($displaydata)) {
                                echo "<tr>
                                         <td>{$result['id']}</td>
                                         <td>{$result['first_name']}</td>
                                         <td>{$result['last_name']}</td>
                                         <td>{$result['father_name']}</td>
                                         <td>{$result['mother_name']}</td>
                                         <td>{$result['date_of_birth']}</td>
                                         <td>{$result['gender']}</td>
                                         <td>{$result['blood_group']}</td>
                                         <td>{$result['religion']}</td>
                                         <td>{$result['father_occupation']}</td>
                                         <td>{$result['mother_occupation']}</td>
                                         <td>{$result['email']}</td>
                                         <td>{$result['pasword']}</td>
                                         <td>{$result['admission_date']}</td>
                                         <td>{$result['admission_id']}</td>
                                         <td>{$result['class']}</td>
                                         <td>{$result['section']}</td>
                                         <td>{$result['roll']}</td>
                                         <td>{$result['adress']}</td>
                                         <td>{$result['phone']}</td>
                                         <td>{$result['facebook_id']}</td>
                                         <td>{$result['instagram_id']}</td>
                                         <td>{$result['twitter_id']}</td>
                                         <td>{$result['short_bio']}</td>
                                         <td>{$result['upload_student_hoto']}</td>
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