<?php
include 'includes/header.php';
include 'includes/navbar.php';
include 'includes/scripts.php';

if(isset($_POST['add_data'])){
  //  $inst_date = $_REQUEST['inst_date'];
		$hosp_name = $_REQUEST['hosp_name'];
		$email = $_REQUEST['email'];
		$contact = $_REQUEST['contact'];
		$location = $_REQUEST['location'];
    $price = $_REQUEST['price'];
    $query = "INSERT INTO hospital VALUES ('$hosp_name','$email','$contact','$location','$price')";
    if (mysqli_query($db, $query)){
        echo "New record has been added successfully !";
    }
    else{
        echo "Error: ";
    }
}
 ?>
