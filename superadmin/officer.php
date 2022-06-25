<?php
include 'includes/header.php';
include 'includes/navbar.php';

?>


      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
             Medical Officer in charge List
            </h3>
            <nav aria-label="breadcrumb">

                    <a class="dropdown-item" href="add_moi.php">
                        <h5><b>+ New Medical Officer in Charge</b></h5>

                    </a>


                <!-- Add form
    <div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">

            <form action="routes.php" method="POST">
               <div class="modal-body">
               <h4><b>MOI ID</b></h4>
                   <div class="form-group">
                      <label for="">Full Name </label>
                      <input type="text" name="via" class="form-control" placeholder="">
                   </div>

                   <div class="form-group">
                      <label for=""> Email address </label>
                      <input type="varchar" name="via" class="form-control" placeholder="">
                   <div class="form-group">
                      <label for=""> Contact</label>
                      <input type="number" name="via" class="form-control" placeholder="Enter Phone number +255..">
                   </div>
                   <div class="form-group">
                      <label for=""> Hospital Name</label>
                      <input type="text" name="via" class="form-control" placeholder=".">
                   </div>

                   <div class="form-group">
                      <label for=""> password</label>
                      <input type="varchar" name="via" class="form-control" placeholder="">
                   </div>

                                <button type="send" class="btn btn-primary" name="send">Save</button>


                 </form>
                 </div>
               </div>-->
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
                            <th>MOI ID</th>
                            <th>Full Name</th>
                            <th>Email Address</th>
                            <th>Contact</th>
                            <th>Hospital Name</th>
                            <th>User Names</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                            include_once 'includes/functions.php';
                           //$conn = new mysqli("localhost","root","","medicare");
                           $sql = "SELECT * FROM MOI";
                           $result = $db->query($sql);
                           $count=0;
                           if ($result -> num_rows >  0) {

                             while ($row = $result->fetch_assoc())
            				            {
            					             $count=$count+1;
                          ?>

                                    <tr>
                                        <td>M-000<?php echo $count ?></td>
                                        <td><?php echo $row['fname'] ?></td>
                                        <td><?php echo $row['email'] ?></td>
                                        <td><?php echo $row['contact'] ?></td>
                                        <td><?php echo $row['hosp_name'] ?></td>
                                        <td><?php echo $row['username'] ?></td>
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
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2022 <a href="https://www.urbanui.com/" target="_blank">Vametech</a>. All rights reserved.</span>

          </div>
        </footer>
        <!-- partial -->






<?php
include 'includes/footer.php';
include 'includes/scripts.php';

?>
