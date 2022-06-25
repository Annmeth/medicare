<?php
include 'includes/functions.php';
include 'includes/header.php';
include 'includes/navbar.php';
include 'includes/scripts.php';

?>


<?php
// initializing variables
$hod_name = "";
$dep_name   = "";
$email  = "";
$contact = "";
$role   = "";
$password_1 = "";
$password_2 = "";


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
$hod_name = mysqli_real_escape_string($db, $_POST['hod_name']);
$dep_name = mysqli_real_escape_string($db, $_POST['dep_name']);
$email    = mysqli_real_escape_string($db, $_POST['email']);
$contact  = mysqli_real_escape_string($db, $_POST['contact']);
$role     = mysqli_real_escape_string($db, $_POST['role']);
$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

if ($password_1 != $password_2) {
  array_push($errors, "The two passwords do not match");
}
    $password_1 = md5($password_1);
    $query = "INSERT INTO hod (hod_name,dep_name,email,contact,role,password)
  			  VALUES('$hod_name','$dep_name','$email','$contact','$role','$password_1')";
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
             <h3 class="page-title">Add New HOD</h3>
           </div>
           <form action="add_hod.php" method="POST">
           <div class="body">

              <!-- <div class="form-group">
                  <label for="">Installation Date </label>
                  <input type="number" id="inst_date" class="form-control" placeholder="">
               </div>-->

               <div class="form-group">
                  <label for=""> HOD Full Name </label>
                  <input type="text" name="hod_name" id="hod_name" class="form-control" placeholder="" required>
                </div>
               <div class="form-group">
                  <label for=""> Department Name</label>
                  <input type="varchar" name="dep_name" id="dep_name" class="form-control" placeholder="" required>
               </div>
               <div class="form-group">
                  <label for=""> Email Address</label>
                  <input type="varchar" name="email" id="email" class="form-control" placeholder="Enter a Valid Email Address" required>
               </div>
               <div class="form-group">
                  <label for=""> Contact</label>
                  <input type="text" name="contact" id="contact" class="form-control" placeholder="" required>
               </div>

               <div class="form-group">
                  <label for=""> Position (Role)</label>
                  <input type="text" name="role" id="role" class="form-control" placeholder="" required>
               </div>

               <div class="form-group">
                 <label for="">Password</label>
                 <input type="password" name="password_1" id="password_1" class="form-control" required>
               </div>

               <div class="form-group">
                 <label for="">Confirm Password</label>
                 <input type="password" name="password_2" id="password_2" class="form-control">
               </div>


              <button type="submit" class="btn btn-primary" name="add_data">Save</button>


             </form>






           </div>

   </div>
   <?php
   include 'includes/footer.php';
   include 'includes/scripts.php';
   ?>
