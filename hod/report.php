<?php
include 'includes/functions.php';
include 'includes/header.php';
include 'includes/navbar.php';

?>

<div class="main-panel">
  <div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title">
        Department Report
      </h3>

    </div>
    <div class="card">
      <div class="card-body">
        <div id="right_content">
          <div class="panel-group">
            <div class="panel panel-primary">

              <div class="panel-heading">
                <span class="glyphicon glyphicon-list" aria-hidden="true"></span>
                All Items Report
              </div>
              <div class="panel-body">
                <!-- main content -->
                <b>Filter:</b>
                <select class="btn btn-default" id="report-choice">
                  <option value="all">All </option>
                  <option value="department">Equipment</option>
                  <option value="department">Supplies</option>
                </select>

                <button id="print-btn" type="button" class="btn btn-success">
                  <a href="printbulk.php">PRINT</a>

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
                    <th>Dep-ID</th>
                    <th>Nurse Name</th>
                    <th>Item Type</th>
                    <th>Item Name</th>
                    <th>Quantity received</th>
                    <th>Import date</th>
                    <th>Condition</th>
                    <th>Batch no</th>
                  </tr>

                </thead>

                <tbody>
                  <?php
                  include_once 'includes/functions.php';
                  //$conn = new mysqli("localhost","root","","medicare");
                  $sql = "SELECT * FROM dep_items";
                  $result = $db->query($sql);
                  $count = 0;
                  if ($result->num_rows >  0) {

                    while ($row = $result->fetch_assoc()) {
                      $count = $count + 1;
                  ?>

                      <tr>
                        <td>I-000<?php echo $count ?></td>
                        <td><?php echo $row['dep_id'] ?></td>
                        <td><?php echo $row['nsname'] ?></td>
                        <td><?php echo $row['ittype'] ?></td>
                        <td><?php echo $row['itname'] ?></td>
                        <td><?php echo $row['qty'] ?></td>
                        <td><?php echo $row['impdate'] ?></td>
                        <td><?php echo $row['cdtn'] ?></td>
                        <td><?php echo $row['btcno'] ?></td>

                        <!--<td>
                                          <button class="btn btn-outline-primary">View</button>
                                        </td>-->

                      </tr>
                  <?php

                    }
                  }

                  ?>
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