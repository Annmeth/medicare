<?php
include 'includes/functions.php';
include 'includes/header.php';
include 'includes/navbar.php';

$dep_id = "";

$count = 0;
$tbody = "";
$sql_item = "SELECT * FROM dep_items  ";
$result = $db->query($sql_item);
if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    $count = $count + 1;
    $dep_id = $row['dep_id'];
    $nsname = $row['nsname'];
    $ittype = $row['ittype'];
    $itname = $row['itname'];
    $qty = $row['qty'];
    $impdate = $row['impdate'];
    $btcno = $row['btcno'];
    $cdtn = $row['cdtn'];


    $tbody .= "<tr>
  <td>$count</td>
  <td>D-000$dep_id</td>
  <td>$nsname</td>
  <td>$ittype</td>
  <td>$itname</td>
  <td>$qty</td>
  <td>$impdate</td>
  <td>$cdtn</td>
  <td>$btcno</td>

  </tr>";
  }
}

?>

<div class="main-panel">
  <div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title">
        Store Report
      </h3>
    </div>
    <div class="card">
      <div class="card-body">
        <div id="right_content">
          <div class="panel-group">
            <div class="panel panel-primary">

              <div class="panel-heading">
                <span class="glyphicon glyphicon-list" aria-hidden="true"></span>
                Equipment & Supplies Report
              </div>
              <div class="panel-body">
                <!-- main content -->
                <b>Filter:</b>
                <select class="btn btn-default" id="report-choice">
                  <option value="all">All items</option>
                  <option value="depid">Equipment</option>
                  <option value="depid">Supplies</option>


                </select>

                <form method='POST' action='printbulk.php' style='border:none;display:inline;padding:0;'>
                  <input type='hidden' name='is_general' value='0' />
                  <input type='hidden' name='dep_id' value='<?php echo $dep_id; ?>' />
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

                    <th>Item ID</th>
                    <th>Store Keeper's Name</th>
                    <th>Item type</th>
                    <th>Item Name</th>
                    <th>Quantity received </th>
                    <th>Import date</th>
                    <th>Condition</th>
                    <th>Batch No</th>

                  </tr>
                </thead>
                <tbody>
                  <?php
                      include_once 'includes/functions.php';
                     //$conn = new mysqli("localhost","root","","medicare");
                     $sql = "SELECT * FROM items";
                     $result = $db->query($sql);
                     $count=0;
                     if ($result -> num_rows >  0) {

                       while ($row = $result->fetch_assoc())
                          {
                             $count=$count+1;
                    ?>

                              <tr>
                                  <td>I-000<?php echo $count ?></td>

                                  <td><?php echo $row['skname'] ?></td>
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

                  <?php //echo $tbody; ?>
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
