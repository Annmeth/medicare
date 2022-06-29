<?php
include 'includes/functions.php';
include 'includes/header.php';
include 'includes/navbar.php';
include 'includes/scripts.php';

?>


<?php
// initializing variables
$nsname ="";
$ittype     = "";
$itname  = "";
$qty    = "";
$btcno = "";
$cdtn = "";
$dep_id = "";


// connect to the database
//$db = mysqli_connect('localhost', 'root', '', 'medicare');
//if (mysqli_connect_errno())
//  {
//  echo "Failed to connect to MySQL: " . mysqli_connect_error();
//  }

// Add item
if (isset($_POST['add_data'])) {
   // receive all input values from the form
   //echo "connect";

   $nsname  = mysqli_real_escape_string($db, $_POST['nsname']);
   $ittype      = mysqli_real_escape_string($db, $_POST['ittype']);
   $itname   = mysqli_real_escape_string($db, $_POST['itname']);
   $qty     = mysqli_real_escape_string($db, $_POST['qty']);
   $btcno   = mysqli_real_escape_string($db, $_POST['btcno']);
   $cdtn     = mysqli_real_escape_string($db, $_POST['cdtn']);
   $dep_id  = mysqli_real_escape_string($db, $_POST['dep_id']);


   $query = "INSERT INTO dep_items (dep_id,nsname,ittype,itname,qty,cdtn,btcno)
  			  VALUES('$dep_id','$nsname','$ittype','$itname','$qty','$cdtn','$btcno')";
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
         <h3 class="page-title"> Register New Item </h3>
      </div>
      <form action="add_items.php" method="POST">
         <div class="body">


            <div class="form-group">
              <label for="">Department ID</label>
              <input type="varchar" name="dep_id" id="dep_id" class="form-control" placeholder="Please enter a valid Dep ID" value="">
            </div>
            <div class="form-group">
               <label for="">Nurse Name </label>
               <input type="varchar" name="nsname" id="nsname" class="form-control" placeholder="" required>
            </div>

            <div class="form-group">
               <label for=""> Item Type </label>
               <input type="varchar" name="ittype" id="ittype" class="form-control" placeholder="" required>
            </div>

            <div class="form-group">
               <label for=""> Item Name </label>
               <input type="varchar" name="itname" id="itname" class="form-control" placeholder="" required>
            </div>

            <div class="form-group">
               <label for=""> Quantity Received</label>
               <input type="varchar" name="qty" id="qty" class="form-control" placeholder="" required>
            </div>

            <div class="form-group">
               <label for=""> Condition </label>
               <input type="varchar" name="cdtn" id="cdtn" class="form-control" placeholder="" required>
            </div>

            <div class="form-group">
               <label for=""> Batch no </label>
               <input type="varchar" name="btcno" id="btcno" class="form-control" placeholder="" required>
            </div>

            <button type="submit" class="btn btn-primary" name="add_data">Save</button>


      </form>






   </div>

</div>
<?php
include 'includes/footer.php';
include 'includes/scripts.php';
?>
