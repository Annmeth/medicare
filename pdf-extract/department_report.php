<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Department Report</title>
  <style>
    * {
      text-align: center;
    }
  </style>
</head>

<body>
  <table border="1" cellpadding="10" cellspacing="0" width="100%">
    <div class="main-panel">
      <div class="content-wrapper">
        <div class="page-header">
          <h3 class="page-title">
            Department Report
          </h3>

        </div>

        <div class="panel-body">
          <!-- main content -->


          <!-- /main content -->
          <br />


        </div>
      </div>

    </div>
    </div>
    <div class="row">
      <div class="col-12">
        <div class="table-responsive">
          <table border="1" cellpadding="10" cellspacing="0" width="100%">
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
              <?php echo $tbody; ?>
            </tbody>
          </table>
  </table>
  </div>
  <!-- content-wrapper ends -->
  <!-- partial:../../partials/_footer.html -->
  <footer class="footer">

  </footer>
  <!-- partial -->
  </div>
  <!-- main-panel ends -->
  </div>
  <!-- page-body-wrapper ends -->
  </div>
</body>

</html>
