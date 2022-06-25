<?php
include 'includes/functions.php';
include 'includes/header.php';
include 'includes/navbar.php';
include 'includes/scripts.php';

?>


<?php
// initializing variables
$dep_name = "";
$hod_name    = "";



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
  $dep_name  = mysqli_real_escape_string($db, $_POST['dep_name']);
  $hod_name     = mysqli_real_escape_string($db, $_POST['hod_name']);


    $query = "INSERT INTO department (dep_name,hod_name)
  			  VALUES('$dep_name','$hod_name')";
      if(mysqli_query($db, $query))
      {
      echo "<script>alert(' Data is Successfully stored');</script>";

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
             <h3 class="page-title">Add New Deparment</h3>
           </div>
           <form action="add_dep.php" method="POST">
           <div class="body">

              <!-- <div class="form-group">
                  <label for="">Installation Date </label>
                  <input type="number" id="inst_date" class="form-control" placeholder="">
               </div>-->

               <div class="form-group">
                  <label for=""> Deparment Name </label>
                  <input type="text" name="dep_name" id="dep_name" class="form-control" placeholder="" required>
                </div>
               <div class="form-group">
                  <label for=""> HOD Name</label>
                  <input type="varchar" name="hod_name" id="hod_name" class="form-control" placeholder="" required>
               </div>

              <button type="submit" class="btn btn-primary" name="add_data">Save</button>


             </form>






           </div>

   </div>
   <?php
   include 'includes/footer.php';
   include 'includes/scripts.php';
   ?>
