<?php
include('masterheader.php');
include('mastersidebar.php');

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
<th>Sr.no</th>
<th>Exam</th>
<th>Subject</th>
<th>Date</th>
<th>From Time</th>
<th>To Time</th>
<th>Room no</th>
<th>Seat no</th>
</tr>
</thead>
<tbody>
<tr>
<td><a href="pages/examples/invoice.html">1</a></td>
<td>Mid Term Examination</td>
<td><span class="#"></span>English</td>
<td>
<div class="sparkbar" data-color="#00a65a" data-height="20">20-10-2023</div>
<td>03:30:00</td>
<td>05:00:00</td>
<td>A22</td>
<td>04</td>
</td>
</tr>
<tr>
<td><a href="pages/examples/invoice.html">2</a></td>
<td>Mid Term Examination</td>
<td><span class="#"></span>EVS</td>
<td>
	
<div class="sparkbar" data-color="#00a65a" data-height="20">23-10-2023</div>
<td>03:30:00</td>
<td>05:00:00</td>
<td>A22</td>
<td>04</td>
</td>
</tr>
<tr>
<td><a href="pages/examples/invoice.html">3</a></td>
<td>Mid Term Examination</td>
<td><span class="#"></span>Maths</td>
<td>
<div class="sparkbar" data-color="#00a65a" data-height="20">22-10-2023</div>
<td>03:30:00</td>
<td>05:00:00</td>
<td>A22</td>
<td>07</td>
</td>
</tr>
</tbody>
</table>
</div>
<div class="card-footer clearfix">
<a href="javascript:void(0)" class="btn btn-sm btn-info float-left">View all</a>
<a href="javascript:void(0)" class="btn btn-sm btn-secondary float-right">Filter</a>
</div>

</div>

</div>




<?php
include('masterfooter.php');

?>