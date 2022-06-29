<?php
include 'includes/functions.php';
include 'includes/header.php';
include 'includes/navbar.php';
include 'includes/scripts.php';

?>


<?php
// initializing variables
$depid = "";
$hodname = "";
$strname = "";
$rittype = "";
$ritname = "";
$qty = "";
$rrsn = "";
//$req_date = "";


// Add item
if (isset($_POST['add_data'])) {
  // receive all input values from the form
  //echo "connect";
  $depid  = mysqli_real_escape_string($db, $_POST['depid']);
  $hodname = mysqli_real_escape_string($db, $_POST['hodname']);
  $strname = mysqli_real_escape_string($db, $_POST['strname']);
  $rittype = mysqli_real_escape_string($db, $_POST['rittype']);
  $ritname = mysqli_real_escape_string($db, $_POST['ritname']);
  $qty = mysqli_real_escape_string($db, $_POST['qty']);
  $rrsn = mysqli_real_escape_string($db, $_POST['rrsn']);

  $query = "INSERT INTO dep_request1 (depid,hodname,strname,rittype,ritname,qty,rrsn)
  			  VALUES('$depid','$hodname','$strname','$rittype','$ritname','$qty','$rrsn')";
  if (mysqli_query($db, $query)) {
    echo "<script>alert('Successfully stored');</script>";
  } else {
    echo "<script>alert('Somthing wrong!!!');</script>";
  }

  //	header('location: hospital.php');

}
?>


<div class="main-panel">
  <div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title">Make A Department Request</h3>
    </div>
    <form action="add_req.php" method="POST">
      <div class="body">

        <div class="form-group">
          <label for=""> Department ID </label>
          <input type="varchar" name="depid" id="depid" class="form-control" placeholder="Please Enter a Valid ID" required>
        </div>
        <div class="form-group">
          <label for=""> HOD Name </label>
          <input type="varchar" name="hodname" id="hodname" class="form-control" value="" required>
        </div>
        <div class="form-group">
          <label for=""> Store Name </label>
          <input type="varchar" name="strname" id="strname" class="form-control" placeholder="" required>
        </div>
        <div class="form-group">
          <label for=""> Requested Item Type </label>
          <input type="varchar" name="rittype" id="rittype" class="form-control" placeholder="" required>
        </div>
        <div class="form-group">
          <label for=""> Requested Item Name </label>
          <input type="varchar" name="ritname" id="ritname" class="form-control" placeholder="" required>
        </div>

        <div class="form-group">
          <label for=""> Quantity </label>
          <input type="varchar" name="qty" id="qty" class="form-control" placeholder="" required>
        </div>

        <div class="form-group">
          <label for=""> Request Reason </label>
          <input type="varchar" name="rrsn" id="rrsn" class="form-control" value="">
        </div>

        <button type="submit" class="btn btn-primary" name="add_data">Save</button>


    </form>






  </div>

</div>
<?php
include 'includes/footer.php';
include 'includes/scripts.php';
?>