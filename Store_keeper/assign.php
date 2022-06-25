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
$depname = "";


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
  $strname  = mysqli_real_escape_string($db, $_POST['strname']);
  $ittype      = mysqli_real_escape_string($db, $_POST['ittype']);
  $itname   = mysqli_real_escape_string($db, $_POST['itname']);
  $qty     = mysqli_real_escape_string($db, $_POST['qty']);
  $btcno = mysqli_real_escape_string($db, $_POST['btcno']);
  $depname     = mysqli_real_escape_string($db, $_POST['depname']);




    $query = "INSERT INTO assigned_items (skname,strname,ittype,itname,qty,btcno,depname)
  			  VALUES('$skname','$strname','$ittype','$itname','$qty','$btcno','$depname')";
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
             <h3 class="page-title"> Assign Item  </h3>
           </div>
           <form action="assign.php" method="POST">
           <div class="body">

              <!-- <div class="form-group">
                  <label for="">Installation Date </label>
                  <input type="number" id="inst_date" class="form-control" placeholder="">
               </div>-->

               <div class="form-group">
                  <label for=""> Store Keeper's Name </label>
                  <input type="varchar" name="skname" id="skname" class="form-control" placeholder="" required>
                </div>
                <div class="form-group">
                   <label for=""> Store Name </label>
                   <input type="varchar" name="strname" id="strname" class="form-control" placeholder="" required>
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
                  <label for=""> Quantity </label>
                  <input type="varchar" name="qty" id="qty" class="form-control" placeholder="" required>
               </div>

               <div class="form-group">
                 <label for=""> Batch Number </label>
                 <input type="varchar" name="btcno" id="btcno" class="form-control" value="" required>
               </div>

               <div class="form-group">
                  <label for=""> Department Name </label>
                  <input type="varchar" name="depname" id="depname" class="form-control" placeholder="" required>
               </div>


              <button type="submit" class="btn btn-primary" name="add_data">Save</button>


             </form>






           </div>

   </div>
   <?php
   include 'includes/footer.php';
   include 'includes/scripts.php';
   ?>
