<?php
include 'includes/functions.php';
include 'includes/header.php';
include 'includes/navbar.php';
include 'includes/scripts.php';

?>


<?php
// initializing variables
$fname = "";
$dep_name     = "";
$email  = "";
$contact = "";
$role    = "";


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
  $fname  = mysqli_real_escape_string($db, $_POST['fname']);
  $dep_name      = mysqli_real_escape_string($db, $_POST['dep_name']);
  $email   = mysqli_real_escape_string($db, $_POST['email']);
	$contact   = mysqli_real_escape_string($db, $_POST['contact']);
	$role      = mysqli_real_escape_string($db, $_POST['role']);

    $query = "INSERT INTO nurses (fname,dep_name,email,contact,role)
  			  VALUES('$fname','$dep_name','$email','$contact','$role')";
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
             <h3 class="page-title">Assign New Items</h3>
           </div>
           <form action="add_nurse.php" method="POST">
           <div class="body">

              <!-- <div class="form-group">
                  <label for="">Installation Date </label>
                  <input type="number" id="inst_date" class="form-control" placeholder="">
               </div>-->

               <div class="form-group">
                  <label for="">Item Type</label>
                  <input type="text" name="fname" id="fname" class="form-control" placeholder="" required>
                </div>
               <div class="form-group">
                  <label for=""> Item Name</label>
                  <input type="varchar" name="dep_name" id="dep_name" class="form-control" placeholder="" required>
               </div>
               <div class="form-group">
                  <label for=""> Quantity</label>
                  <input type="varchar" number="number" id="email" class="form-control" placeholder="" required>
               </div>
               <div class="form-group">
                  <label for=""> Batch Number</label>
                  <input type="text" number="" id="number" class="form-control" placeholder="" required>
               </div>

               <div class="form-group">
                  <label for=""> Condition</label>
                  <input type="text" name="" id="Condition" class="form-control" placeholder="" required>
               </div>
               <div class="form-group">
                  <label for=""> Nurse Name</label>
                  <input type="text" name="" id="Condition" class="form-control" placeholder="" required>
               </div>

              
              <button type="submit" class="btn btn-primary" name="add_data">Save</button>


             </form>






           </div>

   </div>
   <?php
   include 'includes/footer.php';
   include 'includes/scripts.php';
   ?>
