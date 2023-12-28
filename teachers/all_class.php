<?php

include('master_navbar.php');
include('master_siderbar.php');


?>

<div class="content-wrapper">

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">All Classes</h1>
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
                    <h3 class="card-title">All Class Detail</h3>
                    <div class="card-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                            <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
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
                                <th>Class</th>
                                <th>Section</th>
                                <th>Class Teacher</th>
                                <th>Teacher phone</th>
                                <th>Totel student</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>One</td>
                                <td>A</td>
                                <td><span class="tag tag-success">Chandan Chaturvedi</span></td>
                                <td>+91 9771572650</td>
                                <td>180</td>
                                <td>20/12/2023</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>One</td>
                                <td>A</td>
                                <td><span class="tag tag-success">Chandan Chaturvedi</span></td>
                                <td>+91 9771572650</td>
                                <td>180</td>
                                <td>20/12/2023</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>One</td>
                                <td>A</td>
                                <td><span class="tag tag-success">Chandan Chaturvedi</span></td>
                                <td>+91 9771572650</td>
                                <td>180</td>
                                <td>20/12/2023</td>
                            </tr>
                            
                        </tbody>
                    </table>
                </div>

            </div>

        </div>
    </div>




</div>

<?php
include('master_footer.php');

?>