<?php
include 'includes/functions.php';
include 'includes/header.php';
include 'includes/navbar.php';
include 'includes/scripts.php';

?>


<?php
// initializing variables
$strid = "";
$skname = "";
$rittype     = "";
$ritname  = "";
$qty    = "";
$rrsn = "";


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
  $strid = mysqli_real_escape_string($db, $_POST['strid']);
  $skname  = mysqli_real_escape_string($db, $_POST['skname']);
  $rittype      = mysqli_real_escape_string($db, $_POST['rittype']);
  $ritname   = mysqli_real_escape_string($db, $_POST['ritname']);
  $qty     = mysqli_real_escape_string($db, $_POST['qty']);
  $rrsn     = mysqli_real_escape_string($db, $_POST['rrsn']);



    $query = "INSERT INTO request (strid,skname,rittype,ritname,qty,rrsn)
  			  VALUES('$strid','$skname','$rittype','$ritname','$qty','$rrsn')";
      if(mysqli_query($db, $query))
      {
      echo "<script>alert('Successfully stored');</script>";

    }
    else{
        echo"<script>alert('Somthing wrong!!!');</script>";
    }

  //	header('location: hospital.php');

}
?>


 <div class="main-panel">
         <div class="content-wrapper">
           <div class="page-header">
             <h3 class="page-title"> Items Requests </h3>
           </div>
           <form action="item_request.php" method="POST">
           <div class="body">

              <!-- <div class="form-group">
                  <label for="">Installation Date </label>
                  <input type="number" id="inst_date" class="form-control" placeholder="">
               </div>-->

               <div class="form-group">
                  <label for=""> Store ID </label>
                  <input type="varchar" name="strid" id="strid" class="form-control" placeholder="" required>
                </div>
               <div class="form-group">
                  <label for=""> Store Keeper's Name </label>
                  <input type="varchar" name="skname" id="skname" class="form-control" placeholder="" required>
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
                  <label for=""> Reason for Requesting </label>
                  <input type="varchar" name="rrsn" id="rrsn" class="form-control" placeholder="" required>
               </div>


              <button type="submit" class="btn btn-primary" name="add_data">Save</button>


             </form>






           </div>

   </div>
   <?php
   include 'includes/footer.php';
   include 'includes/scripts.php';
   ?>
