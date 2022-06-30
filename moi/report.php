<?php
include 'includes/functions.php';
include 'includes/header.php';
include 'includes/navbar.php';

//$conn = new mysqli("localhost","root","","medicare");
/*$sql = "SELECT  * FROM department";
$result = $db->query($sql);
$count = 0;
if ($result->num_rows > 0) {
  $tbody = "";
  while ($row = $result->fetch_assoc()) {
    $count = $count + 1;
    $dep_id = $row['dep_id'];
    $dep_name = $row['dep_name'];
    $hod_name = $row['hod_name'];
    $total_equipment = 0;
    $total_supplies = 0;
    $sql_item = "SELECT qty, ittype FROM dep_items WHERE dep_id = '$dep_id'";
    $items_arr = $db->query($sql_item)->fetch_all();
    foreach ($items_arr as $item) {
      $ittype = $item[1];
      if (strtoupper($ittype) == "SUPPLIES") {
        $total_supplies += $item[0];
      } else if (strtoupper($ittype) == "EQUIPMENT") {
        $total_equipment += $item[0];
      }
    }

    $tbody .= "<tr>
  <td>D-000$dep_id</td>
  <td>$dep_name></td>
  <td>$hod_name</td>
  <td>$total_equipment</td>
  <td>$total_supplies</td>
  <td>
    <form method='POST' action='view_department_report.php' style='border:none;'>
      <input type='hidden' name='dep_id' value='$dep_id' </input>
      <button type='submit' class='btn btn-outline-primary' title='View Report'>View Report</button>
    </form>
  </td>
</tr>";
  }
}
*/
?>

<div class="main-panel">
  <div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title">
        Department Report
      </h3>
      <nav aria-label="breadcrumb">




        <!-- Add form -->

      </nav>
    </div>
    <div class="card">
      <div class="card-body">
        <div id="right_content">
          <div class="panel-group">
            <div class="panel panel-primary">

              <div class="panel-heading">
                <span class="glyphicon glyphicon-list" aria-hidden="true"></span>
                All Equipment & Supply Monthly Report
              </div>
              <div class="panel-body">
                <!-- main content -->
                <b>Filter:</b>
                <select class="btn btn-default" id="report-choice">
                  <option value="all">All </option>
                  <option value="department">D-0001</option>
                  <option value="department">D-0002</option>
                  <option value="department">D-0003</option>
                  <option value="department">D-0004</option>
                </select>

                <form method='POST' action='printbulk.php' style='border:none;display:inline;padding:0;'>
                  <input type='hidden' name='is_general' value='1' />
                  <button type='submit' id="print-btn" class='btn btn-outline-success' title='Print'>Print</button>
                </form>
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

                    <th>Department ID</th>
                    <th>Department Name</th>
                    <th>HOD Name</th>
                    <th>Total Equipment</th>
                    <th>Total Supplies</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                                 include_once 'includes/functions.php';
                                //$conn = new mysqli("localhost","root","","medicare");
                                $sql = "SELECT * FROM department";
                                $result = $db->query($sql);
                                $count=0;
                                if ($result -> num_rows >  0) {

                                  while ($row = $result->fetch_assoc())
                                    {
                                       $count=$count+1;
                               ?>

                                         <tr>
                                             <td>D-000<?php echo $count ?></td>
                                             <td><?php echo $row['dep_name'] ?></td>
                                             <td><?php echo $row['hod_name'] ?></td>
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

                                               <form method='POST' action='view_department_report.php' style='border:none;'>
                                                 <input type='hidden' name='dep_id' value='<?php //echo $dep_id; ?>'>
                                                 <button type='submit' class='btn btn-outline-primary' style="margin-left:-50px;" title='View Report'>View Report</button>
                                               </form>
                                             </td>
                                           </tr>
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
      <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2022 vametech. All rights reserved.</span>

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
