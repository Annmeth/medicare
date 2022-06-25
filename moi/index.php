<?php
include 'includes/header.php';
include 'includes/navbar.php';


?>


<!-- partial -->
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
                                <div class="col-xl-3 col-md-6 mb-4">
                                    <div class="card border-left-primary shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div class="text-xs font-weight-bold text-primary text-mb-1">
                                                      Total Equipment <br>
                                                      40 </div>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                       
                                                    </div>
                                                </div>
                                                <div class="col-auto">
                                                  <i class="fas fa-hospital user-icon"></i>
                                              
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
        
                                <!-- Earnings (Monthly) Card Example -->
                                <div class="col-xl-3 col-md-6 mb-4">
                                    <div class="card border-left-success shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div class="text-xs font-weight-bold text-success text-mb-1">
                                                        Total Supplies <br>
                                                         500</div>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                      
                                                    </div>
                                                </div>
                                                <div class="col-auto">
                                                    <i class="<i class="fas fa-hospital text-gray-300"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
        
                                <!-- Earnings (Monthly) Card Example -->
                                <div class="col-xl-3 col-md-6 mb-4">
                                    <div class="card border-left-info shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div class="text-xs font-weight-bold text-info text- mb-1">Total Staffs <br>
                                                      30
                                                    </div>
                                                    <div class="row no-gutters align-items-center">
                                                        <div class="col-auto">
                                                            <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                                                       
                                                            </div>
                                                        </div>
                                                      
                                                    </div>
                                                </div>
                                                <div class="col-auto">
                                                  <i class="fa fa-users menu-icon "></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
        
                                <!-- Pending Requests Card Example -->
                                <div class="col-xl-3 col-md-6 mb-4">
                                    <div class="card border-left-warning shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div class="text-xs font-weight-bold text-warning text-mb-1">
                                                        Total Departments <br>
                                                        15
                                                      </div>
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
                            </div>
                    <!-- Content Row -->
          <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">
                    <i class="fas fa-gift"></i>
                    Equipment & Supplies Status
                  </h4>
                  <canvas id="orders-chart"></canvas>
                  <div id="orders-chart-legend" class="orders-chart-legend"></div>                  
                </div>
              </div>
            </div>
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body d-flex flex-column">
                  <h4 class="card-title">
                    <i class="fas fa-tachometer-alt"></i>
                    Store Status
                  </h4>
                  <p class="card-description">Status per one month</p>
                  <div class="flex-grow-1 d-flex flex-column justify-content-between">
                    <canvas id="daily-sales-chart" class="mt-3 mb-3 mb-md-0"></canvas>
                    <div id="daily-sales-chart-legend" class="daily-sales-chart-legend pt-4 border-top"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
       
         
          <div class="row">
            <div class="col-md-8 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">
                    <i class="fas fa-table"></i>
                 request Status
                  </h4>
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Request type</th>
                          <th>Requested by</th>
                          <th>IDcode</th> 
                          <th> Date</th>
                          <th>Status</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td class="font-weight-bold">
                            Store 
                          </td>
                          <td class="text-muted">
                            Store A
                          </td>
                          <td class="text-muted">
                            ST100
                          </td>
                          <td>
                            12/03/2022
                          </td>
                          <td>
                            <label class="badge badge-success badge-pill">pending</label>
                          </td>
                        </tr>
                        <tr>
                        <td class="font-weight-bold">
                            Store 
                          </td>
                          <td class="text-muted">
                            Store A
                          </td>
                          <td class="text-muted">
                            ST100
                          </td>
                          <td>
                            12/03/2022
                          </td>
                          <td>
                            <label class="badge badge-success badge-pill">pending</label>
                          </td>
                         
                        </tr>
                        <tr>
                        <td class="font-weight-bold">
                            Departent 
                          </td>
                          <td class="text-muted">
                            Medical 
                          </td>
                          <td class="text-muted">
                            D100
                          </td>
                          <td>
                            12/03/2022
                          </td>
                        
                          <td>
                            <label class="badge badge-danger badge-pill">Processing</label>
                          </td>
                        </tr>
                        <tr>
                        <td class="font-weight-bold">
                            Department 
                          </td>
                          <td class="text-muted">
                            Nursing 
                          </td>
                          <td class="text-muted">
                            D200
                          </td>
                          <td>
                            12/03/2022
                          </td>
                        
                          <td>
                            <label class="badge badge-primary badge-pill">Delivered</label>
                          </td>
                        </tr>
                        <tr>
                        <td class="font-weight-bold">
                            Department 
                          </td>
                          <td class="text-muted">
                            Nursing 
                          </td>
                          <td class="text-muted">
                            D200
                          </td>
                          <td>
                            12/03/2022
                          </td>
                        
                          <td>
                            <label class="badge badge-primary badge-pill">Delivered</label>
                          </td>
                        
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 grid-margin stretch-card">
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
         
          
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2022<a href="https://www.urbanui.com/" target="_blank">Vametech</a>. All rights reserved.</span>
  
          </div>
        </footer>
        <!-- partial -->
      </div>

<?php
include 'includes/footer.php';
include 'includes/scripts.php';

?>