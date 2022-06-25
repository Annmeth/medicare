<?php
include 'includes/header.php';
include 'includes/navbar.php';

?>




<div class="main-panel">
        <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
              List of hospitals
            </h3>
            <nav aria-label="breadcrumb">

                    <a class="dropdown-item" href="add_hosp.php" >
                        <h5><b>+ New Hospital</b></h5>

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
                            <th>Hospital ID</th>
                            <th>Istallation date</th>
                            <th>Hospital Name</th>
                            <th>Email Address</th>
                            <th>Contact </th>
                            <th> Location </th>
                            <th>Purchased Price(TZS)</th>

                        </tr>
                      </thead>

                      <tbody>
            <?php
                include_once 'includes/functions.php';
               //$conn = new mysqli("localhost","root","","medicare");
               $sql = "SELECT * FROM hospital";
               $result = $db->query($sql);
               $count=0;
               if ($result -> num_rows >  0) {

                 while ($row = $result->fetch_assoc())
				            {
					             $count=$count+1;
              ?>

                        <tr>
                            <td>H-000<?php echo $count ?></td>
                            <td><?php echo $row['inst_date'] ?></td>
                            <td><?php echo $row['hosp_name'] ?></td>
                            <td><?php echo $row['email'] ?></td>
                            <td><?php echo $row['contact'] ?></td>
                            <td><?php echo $row['location'] ?></td>
                            <td><?php echo $row['price'] ?></td>

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
