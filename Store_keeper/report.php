<?php
include 'includes/header.php';
include 'includes/navbar.php';

?>

<div class="main-panel">
        <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
            Monthly Store Report
            </h3>
  
          </div>
          <div class="card">
            <div class="card-body">
              <div id="right_content" >
	       	<div class="panel-group">
 			    <div class="panel panel-primary">

 			 	<div class="panel-heading">
        <span class="glyphicon glyphicon-list" aria-hidden="true"></span>
        All Items Report </div>
  	  			<div class="panel-body">
              <!-- main content -->
              <b>Filter:</b>
                <select class="btn btn-default" id="report-choice">
                  <option value="all">All </option>
                  <option value="department">Equipment</option>
                  <option value="department">Supplies</option>
                </select>
                
                <button id="print-btn" type="button" class="btn btn-success">
                PRINT
                <span class="glyphicon glyphicon-print" aria-hidden="true"></span>
                </button>
                <div id="show-report"></div>

              <!-- /main content -->
              <br />

  	  			
            </div>
 			 </div>
  
		</div>
	</div>
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
                    <thead>
                        <tr>
					            	<th>S/N</th>
                        <th>Store ID</th>
                        <th>Storekeeper Name</th>
                        <th>Item Type</th>
						           <th>Item Name</th>
					          	<th>Quantity </th>
						          <th>Import date</th>
					          	<th>Condition</th>
					          	<th>Batch no</th>
					          	<th>Export date</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
							              <td>01</td>
                            <td>ST100</td>
                            <td>Amina Rashid</td>
                            <td>Equipment</td>
							              <td>X-Ray machine</td>
						               	<td>2</td>
						              	<td>01/03/2022</td>
							              <td>Working</td>
                            <td>0001</td>
						             	<td>---</td>
                        </tr>
                        <tr>
                        <tr>
						               <td>02</td>
                            <td>ST100</td>
                            <td>Amina Rashid</td>
                            <td>Supplies</td>
							              <td>scissors</td>
							              <td> 5 Boxes</td>
							              <td>01/03/2022</td>
						              	<td>present</td>
                            <td>0001</td>
						              	<td>---</td>
						
                        </tr>
                        <tr>
						              <td>03</td>
                            <td>ST100</td>
                            <td>Amina Rashid</td>
                            <td>Supplies</td>
							             <td>Syringes</td>
							             <td> 20 Boxes</td>
						            	<td>01/03/2022</td>
						             	<td>absent</td> 
                           <td>0001</td>
						            	<td>02/04/2022</td>
                      
                        </tr>
                        <tr>
						             <td>04</td>
                         <td>D100</td>
                         <td>Amina Rashid</td>
                         <td>Supplies</td>
							           <td>syringes</td>
						           	<td> 10 Boxes</td>
						          	<td>01/03/2022</td>
						          	<td>Out Of Stock</td>
                        <td>0001</td>
						          	<td>30/04/2022</td>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2022 <a href="https://www.urbanui.com/" target="_blank">vametech</a>. All rights reserved.</span>
 
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>




<?php
include 'includes/footer.php';
include 'includes/scripts.php';

?>