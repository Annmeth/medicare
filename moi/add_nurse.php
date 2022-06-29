<?php
include 'includes/functions.php';
include 'includes/header.php';
include 'includes/navbar.php';
include 'includes/scripts.php';

?>


<?php
// initializing variables
$fname     = "";
$dep_name = "";
$username = "";
$email = "";
$contact = "";
$role = "";
$password = "";
//$password_1 = "";


// When form submitted, insert values into the database.
if (isset($_REQUEST['username'])) {
  // removes backslashes
  $username = stripslashes($_REQUEST['username']);
  //escapes special characters in a string
  $username = mysqli_real_escape_string($db, $username);
  $email    = stripslashes($_REQUEST['email']);
  $email    = mysqli_real_escape_string($db, $email);
  $password = stripslashes($_REQUEST['password']);
  $password = mysqli_real_escape_string($db, $password);
  $password_1 = stripslashes($_REQUEST['password_1']);
  $password_1 = mysqli_real_escape_string($db, $password_1);
  $dep_name = stripslashes($_REQUEST['dep_name']);
  $dep_name = mysqli_real_escape_string($db, $dep_name);
  $contact = stripslashes($_REQUEST['contact']);
  $contact = mysqli_real_escape_string($db, $_POST['contact']);
  $fname = stripslashes($_REQUEST['fname']);
  $fname = mysqli_real_escape_string($db, $fname);
  $role    = stripslashes($_REQUEST['role']);
  $role    = mysqli_real_escape_string($db, $role);

  if ($password != $password_1) {
    // code...
    echo "<script>alert('The Passwords Do not match');</script>";
  } else {
    // code...
    $query    = "INSERT into `nurses` (username, fname, dep_name, email, contact, role, password)
                     VALUES ('$username', '$fname', '$dep_name', '$email', '$contact', '$role', '" . md5($password) . "')";
    $result   = mysqli_query($db, $query);

    if ($result) {
      echo "<script>alert('Nurse data is Successfully Entered Please use the credentials to Login')</script>";
    } else {
      echo "<script>alert('Error!!!! Please register correctly')</script>";
    }
  }
}


?>


<div class="main-panel">
  <div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title">Add New Nurse</h3>
    </div>
    <form action="add_nurse.php" method="POST">
      <div class="body">

        <!-- <div class="form-group">
                  <label for="">Installation Date </label>
                  <input type="number" id="inst_date" class="form-control" placeholder="">
               </div>-->

        <div class="form-group">
          <label for=""> Full Name </label>
          <input type="text" name="fname" id="fname" class="form-control" placeholder="" required>
        </div>
        <div class="form-group">
          <label for=""> User Name </label>
          <input type="varchar" name="username" id="username" class="form-control" placeholder="" required>
        </div>
        <div class="form-group">
          <label for=""> Department Name</label>
          <input type="varchar" name="dep_name" id="dep_name" class="form-control" placeholder="" required>
        </div>
        <div class="form-group">
          <label for=""> Email Address</label>
          <input type="text" name="email" id="email" class="form-control" placeholder="Please enter a Valid Email Address" required>
        </div>
        <div class="form-group">
          <label for=""> Contact </label>
          <input type="varchar" name="contact" id="contact" class="form-control" placeholder="Please start with 0" required>
        </div>
        <div class="form-group">
          <label for=""> Position (Role) </label>
          <input type="text" name="role" id="role" class="form-control" required>
        </div>
        <div class="form-group">
          <label for=""> Password </label>
          <input type="password" name="password" id="password" class="form-control" required>
        </div>
        <div class="form-group">
          <label for=""> Confirm Password </label>
          <input type="password" name="password_1" id="password_1" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary" name="add_data">Save</button>


    </form>






  </div>

</div>
<?php
include 'includes/footer.php';
include 'includes/scripts.php';
?>