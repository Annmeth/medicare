<?php
include 'includes/functions.php';
include 'includes/header.php';
include 'includes/navbar.php';
include 'includes/scripts.php';

?>


<?php
// initializing variables
$s_name = "";
$skeeper_name     = "";



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
  $s_name  = mysqli_real_escape_string($db, $_POST['s_name']);
  $skeeper_name      = mysqli_real_escape_string($db, $_POST['skeeper_name']);


    $query = "INSERT INTO store (s_name,skeeper_name)
  			  VALUES('$s_name','$skeeper_name')";
      if(mysqli_query($db, $query))
      {
      echo "<script>alert('Data is Successfully stored');</script>";

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
             <h3 class="page-title">Add New Store </h3>
           </div>
           <form action="add_store.php" method="POST">
           <div class="body">

              <!-- <div class="form-group">
                  <label for="">Installation Date </label>
                  <input type="number" id="inst_date" class="form-control" placeholder="">
               </div>-->

               <div class="form-group">
                  <label for=""> Store Name </label>
                  <input type="text" name="s_name" id="s_name" class="form-control" placeholder="" required>
                </div>
               <div class="form-group">
                  <label for=""> Store Keeper's Name</label>
                  <input type="varchar" name="skeeper_name" id="skeeper_name" class="form-control" placeholder="" required>
               </div>

              <button type="submit" class="btn btn-primary" name="add_data">Save</button>


             </form>






           </div>

   </div>
   <?php
   include 'includes/footer.php';
   include 'includes/scripts.php';
   ?>
