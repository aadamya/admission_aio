<?php
    include('config.php');
    include('masterNavBar.php');
    include('masterSideBar.php');

    $selecteddata = mysqli_query($config,"SELECT * FROM accountant_detail");

    // if (isset($_GET['search'])) {
    //     // Get the search term from the form
    //     $searchTerm = mysqli_real_escape_string($config, $_GET['search']);
        
    //     // Modify the SQL query to include the search term
    //     $selecteddata = mysqli_query($config, "SELECT * FROM accountant_detail WHERE frtn LIKE '%$searchTerm%' OR lstn LIKE '%$searchTerm%'");
    // } else {
    //     // If the search form is not submitted, fetch all data
    //     $selecteddata = mysqli_query($config, "SELECT * FROM accountant_detail");
    // }

?>

<!-- main content  -->

<div class="content-wrapper">

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <!-- <h1 class="m-0">All Students</h1> -->
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                         <!-- <li class="breadcrumb-item"><a href="#">Home</a></li> -->
                        <!-- <li class="breadcrumb-item active">Teacher Dashboard</li> -->
                    </ol>
                </div>
            </div>
        </div>
     </div>

     <div class="card height-auto">
                    <div class="card-body">
                        <div class="heading-layout1">
                            <div class="item-title">
                                <h3>All Accountant Data</h3>
                            </div>
                        </div>
                        <form class="mg-b-20">
                            <div class="row gutters-8">
                                <div class="col-4-xxxl col-xl-4 col-lg-3 col-12 form-group">
                                    <input type="text" placeholder="Search by Name ..." class="form-control">
                                </div>
                              
                                <div class="col-1-xxxl col-xl-2 col-lg-3 col-12 form-group">
                                    <button type="submit" name="search" class="btn btn-primary" onclick="serch()">SEARCH</button>
                                </div>
                            </div>
                        </form>
                        <div class="table-responsive">
                            <table border = "1" class="table display data-table text-nowrap">
                                <thead>
                                    <tr>
                                        
                                        <th>ID</th>
                                        <th>Photo</th>
                                        <th>ID No</th>
                                        <th>Firstname</th>
                                        <th>Lastname</th>
                                        <th>Gender</th>
                                        <th>Date</th>
                                        <th>Bloodgroup</th>
                                        <th>Religion</th>
                                        <th>Email</th>
                                        <th>Password</th>
                                        <th>Address</th>
                                        <th>Phone</th>
                                        <th>Facebook</th>
                                        <th>Instagram</th>
                                        <th>Twitter</th>
                                        <th>Bio</th>
                                        <th>View/Update</th>
                                        <th>Msg/Notice</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                while($result = mysqli_fetch_assoc($selecteddata)){
                                        echo "<tr>
                                                <td>".$result[id]."</td>
                                                <td>".$result[uspoto]."</td>
                                                <td>".$result[admno]."</td>
                                                <td>".$result[frtn]."</td>
                                                <td>".$result[lstn]."</td>
                                                <td>".$result[gen]."</td>
                                                <td>".$result[dobe]."</td>
                                                <td>".$result[blgp]."</td>
                                                <td>".$result[regin]."</td>
                                                <td>".$result[mail]."</td>
                                                <td>".$result[teapass]."</td>
                                                <td>".$result[adres]."</td>
                                                <td>".$result[ponh]."</td>
                                                <td>".$result[facd]."</td>
                                                <td>".$result[insd]."</td>
                                                <td>".$result[twitd]."</td>
                                                <td>".$result[mesae]."</td>
                                               
                                                <td>
                                                    <a href='view_accountant.php?id=$result[id]' class='btn btn-primary'>View</a>
                                                    <a href='update_accountant.php?id=$result[id]' class='btn btn-warning'>Update</a>
                                                </td>

                                                <td>
                                                    <a href='message_accountant.php?id=$result[id]' class='btn btn-info'>Message</a>
                                                    <a href='notice_accountant.php?id=$result[id]' class='btn btn-primary'>Notice</a>
                                                </td>

                                                <td>
                                                    <a href='delete_accountant.php?id=$result[id]' class='btn btn-danger'>Delete</a>
                                                </td>

                                                </tr>";
                                        
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
    </div>


<?php
  include('masterFooter.php');
?>