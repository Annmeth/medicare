<?php
include 'includes/functions.php';
include 'includes/header.php';
include 'includes/navbar.php';

?>

<div class="main-panel">
  <div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title">
        Store Report
      </h3>
      </nav>
    </div>
    <div class="card">
      <div class="card-body">
        <div id="right_content">
          <div class="panel-group">
            <div class="panel panel-primary">

              <div class="panel-heading">
                <span class="glyphicon glyphicon-list" aria-hidden="true"></span>
                All Equipment & Supplies Monthly Report
              </div>
              <div class="panel-body">
                <!-- main content -->
                <b>Filter:</b>
                <select class="btn btn-default" id="report-choice">
                  <option value="all">All </option>
                  <option value="department">ST-0001</option>
                  <option value="department">ST-0002</option>
                  <option value="department">ST-0003</option>
                  <option value="department">ST-0004</option>
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
                    <th>Store ID</th>
                    <th>Store Name</th>
                    <th>Storekeeper Name</th>
                    <th>Total Equipment</th>
                    <th>Total Supplies</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>



                  <?php
                  include_once 'includes/functions.php';
                  //$conn = new mysqli("localhost","root","","medicare");
                  $sql = "SELECT * FROM store";
                  $result = $db->query($sql);
                  $count = 0;
                  if ($result->num_rows >  0) {

                    while ($row = $result->fetch_assoc()) {
                      $count = $count + 1;
                  ?>

                      <tr>
                        <td>ST-000<?php echo $count ?></td>
                        <td><?php echo $row['s_name'] ?></td>
                        <td><?php echo $row['skeeper_name'] ?></td>
                        <td>
                          <?php $sql = "SELECT COUNT(ittype) AS total FROM items WHERE ittype ='equipment'";
                                $result = $db->query($sql);
                                $data =  $result->fetch_assoc();
                                echo $data['total']; ?></td>
                        </td>
                        <td>
                            <?php $sql = "SELECT COUNT(ittype) AS total FROM items WHERE ittype ='supply'";
                                  $result = $db->query($sql);
                                  $data =  $result->fetch_assoc();
                                  echo $data['total']; ?>
                        </td>
                        <td>
                          <form method='POST' action='view_store_report.php' style='border:none;'>
                            <input type='hidden' name='dep_id' value='<?php echo $dep_id; ?>'>
                            <button type='submit' class='btn btn-outline-primary' style="margin-left:-50px;" title='View Report'>View Report</button>
                          </form>
                        </td>
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
