<?php
include 'includes/functions.php';
include 'includes/header.php';
include 'includes/navbar.php';
include 'includes/scripts.php';

?>


<?php
// initializing variables
$skname = "";
$ittype     = "";
$itname  = "";
$btcno = "";
$qty    = "";
$cdtn = "";


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
  $skname  = mysqli_real_escape_string($db, $_POST['skname']);
  $ittype      = mysqli_real_escape_string($db, $_POST['ittype']);
  $itname   = mysqli_real_escape_string($db, $_POST['itname']);
	$btcno   = mysqli_real_escape_string($db, $_POST['btcno']);
  $qty     = mysqli_real_escape_string($db, $_POST['qty']);
  $cdtn     = mysqli_real_escape_string($db, $_POST['cdtn']);



    $query = "INSERT INTO items (skname,ittype,itname,btcno,qty,cdtn)
  			  VALUES('$skname','$ittype','$itname','$btcno','$qty','$cdtn')";
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
             <h3 class="page-title"> Add New Item </h3>
           </div>
           <form action="add_items.php" method="POST">
           <div class="body">



               <div class="form-group">
                  <label for=""> Store Keeper's Name </label>
                  <input type="varchar" name="skname" id="skname" class="form-control" placeholder="" required>
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
                  <label for=""> Quantity Issued</label>
                  <input type="varchar" name="qty" id="qty" class="form-control" placeholder="" required>
               </div>
               <div class="form-group">
                  <label for=""> Batch no </label>
                  <input type="varchar" name="btcno" id="btcno" class="form-control" placeholder="" required>
               </div>
               <div class="form-group">
                  <label for=""> Condition </label>
                  <input type="varchar" name="cdtn" id="cdtn" class="form-control" placeholder="" required>
               </div>

    
              <button type="submit" class="btn btn-primary" name="add_data">Save</button>


             </form>






           </div>

   </div>
   <?php
   include 'includes/footer.php';
   include 'includes/scripts.php';
   ?>
