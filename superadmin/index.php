<?php
//include 'includes/functions.php';
include 'includes/header.php';
include 'includes/navbar.php';
if (!isLoggedIn()) {
	$_SESSION['msg'] = "You must log in first";
	header('location: login.php');
}
?>




<!--partial-->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                Dashboard
            </h3>
        </div>
        <!-- Content Row -->
        <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-6 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-mb-1">
                                    Total Users <br>
                                  <?php

																	 ?> 100</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">

                                </div>
                            </div>
                            <div class="col-auto">
                            <i class="fa fa-users menu-icon"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-6 col-md-6 mb-4">
                <div class="card border-left-info shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-info text- mb-1">Total Hospitals <br>
                                    <?php
																		include_once 'includes/functions.php';
																		$sql = "SELECT COUNT(*) AS total from hospital";
	                                  $result = $db->query($sql);
	                                  $data =  $result->fetch_assoc();
	                                   echo $data['total'];

																		 ?>
                                </div>
                                <div class="row no-gutters align-items-center">
                                    <div class="col-auto">
                                        <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">

                                        </div>
                                    </div>
                                    <div class="col">

                                    </div>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-hospital user-icon "></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        <!-- Content Row -->

      <!--  <div class="row">-->
            <div class="col-xl-6 col-md-6 mb-4 ">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">
                            <i class="fas fa-table"></i>
                            System Istallation Status
                        </h4>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Hospitals</th>
                                        <th>IDcode</th>
                                        <th>Users</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="font-weight-bold">
                                            Kairuki Hospital
                                        </td>
                                        <td class="text-muted">
                                            PT100
                                        </td>
                                        <td>
                                            350
                                        </td>
                                        <td>
                                            <label class="badge badge-success badge-pill">Complete</label>
                                        </td>
                                    </tr>



                                    <tr>
                                        <td class="font-weight-bold">
                                            Mlimani Hospital
                                        </td>
                                        <td class="text-muted">
                                            HF675
                                        </td>
                                        <td>
                                            790
                                        </td>
                                        <td>
                                            <label class="badge badge-info badge-pill">On Hold</label>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-md-6 mb-4 ">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">
                            <i class="fas fa-calendar-alt"></i>
                            Calendar
                        </h4>
                        <div id="inline-datepicker-example" class="datepicker"></div>
                    </div>
                </div>
            </div>
        </div>


  <!--  </div>-->
    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->
    <footer class="footer">
        <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2022<a
                    href="https://www.urbanui.com/" target="_blank">Vametech</a>. All rights reserved.</span>

        </div>
    </footer>
    <!-- partial -->
</div>

<?php
include 'includes/footer.php';
include 'includes/scripts.php';
 ?>
