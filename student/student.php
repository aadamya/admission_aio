<?php
include('config.php');
include('masterheader.php');
include('mastersidebar.php');

// Assuming you have a database table named 'students'
$query = "SELECT * FROM students_list";
$result = mysqli_query($config, $query);

?>
<div class="content-wrapper">
    <div class="card">
        <div class="card-header border-transparent">
            <h3 class="card-title">Student List</h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>

        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table m-0">
                    <thead>
                        <tr>
                            <th>Student ID</th>
                            <th>Student</th>
                            <th>Gender</th>
                            <th>DOB</th>
                            <th>Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<tr>";
                            echo "<td>{$row['student_id']}</td>";
                            echo "<td>{$row['name']}</td>";
                            echo "<td>{$row['gender']}</td>";
                            echo "<td>{$row['dob']}</td>";
                            echo "<td>{$row['email']}</td>";
                            echo "</tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
            <div class="card-footer clearfix">
                <a href="javascript:void(0)" class="btn btn-sm btn-info float-left">View all</a>
                <a href="javascript:void(0)" class="btn btn-sm btn-secondary float-right">Filter</a>
            </div>
        </div>
    </div>
</div>

<?php
include('masterfooter.php');
?>