<?php
include 'includes/functions.php';
include 'includes/header.php';
include 'includes/navbar.php';
include 'includes/scripts.php';

?>


<?php
// initializing variables
$nsname = "";
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
  //echo "connect";;
  $nsname  = mysqli_real_escape_string($db, $_POST['nsname']);
  $rittype      = mysqli_real_escape_string($db, $_POST['rittype']);
  $ritname   = mysqli_real_escape_string($db, $_POST['ritname']);
  $qty     = mysqli_real_escape_string($db, $_POST['qty']);
  $rrsn     = mysqli_real_escape_string($db, $_POST['rrsn']);



    $query = "INSERT INTO dep_request (nsname,rittype,ritname,qty,rrsn)
  			  VALUES('$nsname','$rittype','$ritname','$qty','$rrsn')";
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
             <h3 class="page-title"> Make A New Request </h3>
           </div>
           <form action="add_request.php" method="POST">
           <div class="body">


               <div class="form-group">
                  <label for=""> Nurse In Charge's Name </label>
                  <input type="varchar" name="nsname" id="nsname" class="form-control" placeholder="" required>
               </div>
               <div class="form-group">
                  <label for=""> Requested Item Type </label>
                  <input type="varchar" name="rittype" id="rittype" class="form-control" placeholder="Supply or Equipment" required>
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
