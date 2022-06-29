<?php
//include_once 'includes/functions.php';
include 'includes/header.php';
include 'includes/navbar.php';
include 'includes/scripts.php';

?>


<?php
// initializing variables
$hosp_name = "";
$email     = "";
$contact   = "";
$location  = "";
$price     = "";


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
  $hosp_name  = mysqli_real_escape_string($db, $_POST['hosp_name']);
  $email      = mysqli_real_escape_string($db, $_POST['email']);
  $contact    = mysqli_real_escape_string($db, $_POST['contact']);
  $location   = mysqli_real_escape_string($db, $_POST['location']);
  $price      = mysqli_real_escape_string($db, $_POST['price']);

  $query = "INSERT INTO hospital (hosp_name,email,contact,location,price)
  			  VALUES('$hosp_name','$email','$contact','$location','$price')";
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
      <h3 class="page-title">Add New Hospitals</h3>
    </div>
    <form action="add_hosp.php" method="POST">
      <div class="body">

        <!-- <div class="form-group">
                  <label for="">Installation Date </label>
                  <input type="number" id="inst_date" class="form-control" placeholder="">
               </div>-->

<<<<<<< HEAD
               <div class="form-group">
                  <label for=""> Hospital Name </label>
                  <input type="text" name="hosp_name" id="hosp_name" class="form-control" placeholder="" required>
                </div>
               <div class="form-group">
                  <label for=""> Email Address</label>
                  <input type="varchar" name="email" id="email" class="form-control" placeholder="" required>
               </div>
               <div class="form-group">
                  <label for=""> Contact</label>
                  <input type="varchar" name="contact" id="contact" class="form-control" placeholder="Enter Phone number +255.." required>
               </div>
               <div class="form-group">
                  <label for=""> Location</label>
                  <input type="text" name="location" id="location" class="form-control" placeholder="" required>
               </div>
=======
        <div class="form-group">
          <label for=""> Hospital Name </label>
          <input type="text" name="hosp_name" id="hosp_name" class="form-control" placeholder="" required>
        </div>
        <div class="form-group">
          <label for=""> Email Address</label>
          <input type="varchar" name="email" id="email" class="form-control" placeholder="" required>
        </div>
        <div class="form-group">
          <label for=""> Contact</label>
          <input type="varchar" name="contact" id="contact" class="form-control" placeholder="Enter Phone number +255.." required>
        </div>
        <div class="form-group">
          <label for=""> Location</label>
          <input type="text" name="location" id="location" class="form-control" placeholder="" required>
        </div>
>>>>>>> 4e2d39987be83a43112a9cdbd86dba95a0e49fb0

        <div class="form-group">
          <label for=""> Purchased price</label>
          <input type="text" name="price" id="price" class="form-control" placeholder="" required>
        </div>


        <button type="submit" class="btn btn-primary" name="add_data">Save</button>


    </form>






  </div>

</div>
<?php
include 'includes/footer.php';
include 'includes/scripts.php';
?>