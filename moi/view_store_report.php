

<?php
include 'includes/header.php';
include 'includes/navbar.php';

?>

<div class="main-panel">
        <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
            Store  Report
            </h3>
          </div>
          <div class="card">
            <div class="card-body">
              <div id="right_content" >
	       	<div class="panel-group">
 			    <div class="panel panel-primary">

 			 	<div class="panel-heading">
        <span class="glyphicon glyphicon-list" aria-hidden="true"></span>
         Equipment & Supplies Monthly Report </div>
  	  			<div class="panel-body">
              <!-- main content -->
              <b>Filter:</b>
                <select class="btn btn-default" id="report-choice">
                  <option value="all">All items</option>
                  <option value="depid">Equipment</option>
                  <option value="depid">Supplies</option>


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
                            <th>Item ID</th>
                            <th>Item Type</th>
                            <th>Item Name</th>
                            <th>Batch No.</th>
                            <th>Quantity Received</th>
                            <th>Date Received</th>
                            <th>Condition</th>
                            <th>Assigned Quantity</th>
                            <th>Assigned department</th>
                            <th>Assigned Date</th>
                            <th>Remaining Quantity</th>
                        </tr>
                      </thead>
                      <tbody>

                        

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
