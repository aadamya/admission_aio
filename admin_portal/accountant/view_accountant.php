<?php
    include('config.php');
    include('masterNavBar.php');
    include('masterSideBar.php');
    $id = $_GET['id'];
    $selecteddata = mysqli_query($config,"SELECT * FROM accountant_detail where id = '$id'");
    $result = mysqli_fetch_assoc($selecteddata);

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

    <div class="dashboard-content-one">
        <!-- Breadcubs Area Start Here -->
        <div class="breadcrumbs-area">
            <!-- <h3>Teacher Details</h3> -->
            <ul>
                
            </ul>
        </div>


        <div class="card height-auto">
            <div class="card-body">
                <div class="heading-layout1">
                    <div class="item-title">
                        <h3>Accountant Details</h3>
                    </div>
                </div>
                <br>
                <div class="single-info-details">
                    <div class="item-img">
                        <img src="" alt="teacher"
                            style="height: 150px; width: 150px;">
                    </div>
                    <div class="item-content">


                        <div class="info-table table-responsive">
                            <table class="table text-nowrap">
                                <tbody>

                                    <tr>
                                        <td>First Name:</td>
                                        <td class="font-medium text-dark-medium"><?php echo $result[frtn]?></td>
                                    </tr>
                                    <tr>
                                        <td>Last Name:</td>
                                        <td class="font-medium text-dark-medium"><?php echo $result[lstn]?></td>
                                    </tr>
                                    <tr>
                                        <td>Gender:</td>
                                        <td class="font-medium text-dark-medium"><?php echo $result[gen]?></td>
                                    </tr>
                                    <tr>
                                        <td>Joining Date:</td>
                                        <td class="font-medium text-dark-medium"><?php echo $result[dobe]?></td>
                                    </tr>
                                    <tr>
                                        <td>ID No:</td>
                                        <td class="font-medium text-dark-medium"><?php echo $result[admno]?></td>
                                    </tr>
                                    <tr>
                                        <td>Blood Group:</td>
                                        <td class="font-medium text-dark-medium"><?php echo $result[blgp]?></td>
                                    </tr>
                                    <tr>
                                        <td>Religion:</td>
                                        <td class="font-medium text-dark-medium"><?php echo $result[regin]?></td>
                                    </tr>
                                    <tr>
                                        <td>Email:</td>
                                        <td class="font-medium text-dark-medium"><?php echo $result[mail]?></td>
                                    </tr>
                                    <tr>
                                        <td>Password:</td>
                                        <td class="font-medium text-dark-medium"><?php echo $result[teapass]?></td>
                                    </tr>
                                    <tr>
                                        <td>Address:</td>
                                        <td class="font-medium text-dark-medium"><?php echo $result[adres]?></td>
                                    </tr>
                                    <tr>
                                        <td>Phone:</td>
                                        <td class="font-medium text-dark-medium"><?php echo $result[ponh]?></td>
                                    </tr>
                                    <tr>
                                        <td>Facebook ID:</td>
                                        <td class="font-medium text-dark-medium"><?php echo $result[facd]?></td>
                                    </tr>
                                    <tr>
                                        <td>Instagram ID:</td>
                                        <td class="font-medium text-dark-medium"><?php echo $result[insd]?></td>
                                    </tr>
                                    <tr>
                                        <td>Twitter ID:</td>
                                        <td class="font-medium text-dark-medium"><?php echo $result[twitd]?></td>
                                    </tr>
                                    <tr>
                                        <td>Short BIO:</td>
                                        <td class="font-medium text-dark-medium"><?php echo $result[mesae]?></td>
                                    </tr>
                                    <tr>
                                    <!-- <a href='showaccountant.php' class='btn btn-primary'>Close</a> -->
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>


<?php
  include('masterFooter.php');
?>