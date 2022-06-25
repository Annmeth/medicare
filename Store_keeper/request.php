

<?php
include 'includes/functions.php';
include 'includes/header.php';
include 'includes/navbar.php';

?>


<div class="main-panel">
        <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
               Requests List
            </h3>
            <nav aria-label="breadcrumb">

                    <a class="dropdown-item" href="item_request.php" >
                        <h5><b>+ New Request </b></h5>

                    </a>


                <!-- Add form -->
    <div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">

            <form action="routes.php" method="POST">
               <div class="modal-body">
               <h4><b>Make New Request</b></h4>

                   <div class="form-group">
                      <label for="">Store ID </label>
                      <input type="varchar" name="via" class="form-control" placeholder="">
                   </div>
                   <div class="form-group">
                      <label for="">StoreKeeper Name </label>
                      <input type="text" name="via" class="form-control" placeholder="">
                   </div>
                   <div class="form-group">
                      <label for=""> Request Type </label>
                      <input type="text" name="via" class="form-control" placeholder="">
                      </div>
                      <div class="form-group">
                      <label for=""> Request Name</label>
                      <input type="number" name="via" class="form-control" placeholder="">
                   </div>
                   <div class="form-group">
                      <label for=""> Quantity</label>
                      <input type="number" name="via" class="form-control" placeholder="">
                   </div>
                   <div class="form-group">
                      <label for=""> Request date</label>
                      <input type="number" name="via" class="form-control" placeholder="">
                   </div>
                   <div class="form-group">
                      <label for=""> Reason</label>
                      <input type="text" name="via" class="form-control" placeholder="">
                   </div>
                                <button type="send" class="btn btn-primary" name="send">Send</button>

                 </form>
                 </div>
                 </div>
              </div>
     </nav>
          </div>
          <div class="card">
            <div class="card-body">
            <!--  <h4 class="card-title">List of  Requests</h4>-->
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
                    <thead>
                        <tr>
                           <th>Request ID</th>
                            <th>Store ID</th>
                            <th>Store Keeper's Name</th>
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
                           $sql = "SELECT * FROM request";
                           $result = $db->query($sql);
                           $count=0;
                           if ($result -> num_rows >  0) {

                             while ($row = $result->fetch_assoc())
                                {
                                   $count=$count+1;
                          ?>

                                    <tr>
                                        <td><?php echo $count ?></td>
                                        <td><?php echo $row['strid'] ?></td>
                                        <td><?php echo $row['skname'] ?></td>
                                        <td><?php echo $row['rittype'] ?></td>
                                        <td><?php echo $row['ritname'] ?></td>
                                        <td><?php echo $row['qty'] ?></td>
                                        <td><?php echo $row['rrsn'] ?></td>
                                        <td><?php echo $row['rdate'] ?></td>
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
