<?php
//include_once 'includes/functions.php';
include 'includes/header.php';
include 'includes/navbar.php';
include 'includes/scripts.php';
 ?>

 <?php
 // initializing variables
 // variable declaration
  $fname = "";
  $email = "";
  $contact = "";
  $username = "";
  $hosp_name = "";
  $password = "";
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
       $fname = stripslashes($_REQUEST['fname']);
       $fname = mysqli_real_escape_string($db, $fname);
       //$contact = stripslashes($_REQUEST['contact']);
       $contact = mysqli_real_escape_string($db, $_POST['contact']);
       $hosp_name = stripslashes($_REQUEST['hosp_name']);
       $hosp_name = mysqli_real_escape_string($db, $hosp_name);

       if ($password != $password_1) {
         // code...
         	echo "<script>alert('The Passwords Do not match');</script>";
       } else {
         // code...
         $query    = "INSERT into `moi` (fname, email, contact, username, hosp_name, password)
                      VALUES ('$fname', '$email', '$contact', '$username', '$hosp_name', '" . md5($password) . "')";
         $result   = mysqli_query($db, $query);

         if ($result) {
             echo "<script>alert('Moi Successfully Created')</script>";
         } else {
             echo "<script>alert('Error!!!! Please register correctly')</script>";
         }
       }



      /* if ($password != $password_1) {
     		echo "<script>alert('The Passwords Do not match');</script>";
     	}


       $query    = "INSERT into `moi` (fname, email, contact, username, hosp_name, password)
                    VALUES ('$fname', '$email', '$contact', '$username', '$hosp_name', '" . md5($password) . "')";
       $result   = mysqli_query($db, $query);
       if ($result) {
           echo "<script>alert('Moi Successfully Created')</script>";
       } else {
           echo "<script>alert('Error!!!! Please register correctly')</script>";
       }*/
   }
 ?>



 <div class="main-panel">
         <div class="content-wrapper">
           <div class="page-header">
             <h3 class="page-title">Add New MOI</h3>
           </div>
           <form action="add_moi.php" method="POST">
           <div class="modal-body">

               <div class="form-group">
                  <label for="">Full Name </label>
                  <input type="text" name="fname" id="fname" class="form-control" placeholder="" >
               </div>
               <div class="form-group">
                  <label for=""> Email Address</label>
                  <input type="varchar" name="email" id="email" class="form-control" placeholder="" >
               </div>
               <div class="form-group">
                  <label for=""> Contact</label>
                  <input type="varchar" name="contact" id="contact" class="form-control" placeholder="Please Start with 0" >
               </div>
               <div class="form-group">
                  <label for=""> Hospital Name</label>
                  <input type="text" name="hosp_name" id="hosp_name" class="form-control" placeholder="" >
               </div>

               <div class="form-group">
                  <label for="">Username</label>
                  <input type="varchar" name="username" id="username" class="form-control" placeholder="" >
               </div>
               <div class="form-group">
                  <label for="">Password</label>
                  <input type="password" name="password" id="password" class="form-control" placeholder="" >
               </div>
               <div class="form-group">
                 <label for="">Confirm Password</label>
                 <input type="password" name="password_1" id="password_1" class="form-control" >
               </div>


              <button type="submit" class="btn btn-primary" name="register">Save</button>


             </form>






           </div>

   </div>
