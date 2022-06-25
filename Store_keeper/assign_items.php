

<?php
include 'includes/functions.php';
include 'includes/header.php';
include 'includes/navbar.php';

?>



<div class="main-panel">
        <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
              Assigned Items To Departments
            </h3>
            <nav aria-label="breadcrumb">

                    <a class="dropdown-item" href="assign.php">
                        <h5><b>+ Assign New Items </b></h5>

                    </a>


                <!-- Add form -->

     </nav>
          </div>
          <div class="card">
            <div class="card-body">
              <!--<h4 class="card-title">List of Assigned Items</h4>-->
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
                    <thead>
                        <tr>
                            <th>Storekeeper Name</th>
                            <th>Store Name</th>
                            <th>Item Id</th>
                            <th>Item Type</th>
                            <th>Item Name</th>
                            <th>Quantity</th>
                            <th>Batch No.</th>
                            <th>Department Name</th>
                            <th>Assigned Date</th>
                            <th>Status</th>

                        </tr>
                      </thead>
                      <tbody>

                        <?php
                            include_once 'includes/functions.php';
                           //$conn = new mysqli("localhost","root","","medicare");
                           $sql = "SELECT * FROM assigned_items";
                           $result = $db->query($sql);
                           $count=0;
                           if ($result -> num_rows >  0) {

                             while ($row = $result->fetch_assoc())
                                {
                                   $count=$count+1;
                          ?>

                                    <tr>

                                        <td><?php echo $row['skname'] ?></td>
                                        <td><?php echo $row['strname'] ?></td>
                                        <td>I-000<?php echo $count ?></td>
                                        <td><?php echo $row['ittype'] ?></td>
                                        <td><?php echo $row['itname'] ?></td>
                                        <td><?php echo $row['qty'] ?></td>
                                        <td><?php echo $row['btcno'] ?></td>
                                        <td><?php echo $row['depname'] ?></td>
                                        <td><?php echo $row['adate'] ?></td>
                                        <td>
                                          <button class="btn btn-outline-primary">View</button>
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
