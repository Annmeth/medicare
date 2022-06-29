<?php
include 'includes/functions.php';
include 'includes/header.php';
include 'includes/navbar.php';

?>


<div class="main-panel">
  <div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title">
        Department to Store Requests List
      </h3>
      <nav aria-label="breadcrumb">

        <a class="dropdown-item" href="add_req.php">
          <h5><b>+ New Request </b></h5>

        </a>
      </nav>
    </div>
    <div class="card">
      <div class="card-body">

        <div class="row">
          <div class="col-12">
            <div class="table-responsive">
              <table id="order-listing" class="table">
                <thead>
                  <tr>
                    <th>Request ID</th>
                    <th>Department ID</th>
                    <th>HOD Name</th>
                    <th>Store Name</th>
                    <th>Requested Item Type</th>
                    <th>Requested Item Name</th>
                    <th>Quantity</th>
                    <th>Request Reason</th>
                    <th>Request Date</th>
                    <th>Status</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  include_once 'includes/functions.php';
                  //$conn = new mysqli("localhost","root","","medicare");
                  $sql = "SELECT * FROM dep_request1";
                  $result = $db->query($sql);
                  $count = 0;
                  if ($result->num_rows >  0) {

                    while ($row = $result->fetch_assoc()) {
                      $count = $count + 1;
                  ?>

                      <tr>
                        <td><?php echo $count ?></td>
                        <td><?php echo $row['depid'] ?></td>
                        <td><?php echo $row['hodname'] ?></td>
                        <td><?php echo $row['strname'] ?></td>
                        <td><?php echo $row['rittype'] ?></td>
                        <td><?php echo $row['ritname'] ?></td>
                        <td><?php echo $row['qty'] ?></td>
                        <td><?php echo $row['rrsn'] ?></td>
                        <td><?php echo $row['rdate'] ?></td>
                        <td>
                          <button class="btn btn-outline-primary">Pending</button>
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