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
            <!-- Your existing content-header code -->
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <!-- Your existing card-header code -->
                        <h3 class="card-title">All Teachers Data</h3>
                    </div>
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <!-- Your existing table header code -->
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
                                        <td>{$result['e-mail']}</td>
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
                            ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
} else {
    echo "No records found";
}

include('master_footer.php');
?>