<?php
session_start();
$db = mysqli_connect('localhost', 'root', '', 'medicare');
//Checking User Logged or Not
if(empty($_SESSION['user'])){
 header('location:index.php');
}
//Restrict User or Moderator to Access Admin.php page
if($_SESSION['user']['role']=='user'){
 header('location:user.php');
}
if($_SESSION['user']['role']=='moderator'){
 header('location:moderator.php');
}

$fromm=$_POST['startpoint'];
$too=$_POST['endpoint'];
$startsat=$_POST['receiptrange'];


$_SESSION['from']=$fromm;
$_SESSION['to']=$too;
$_SESSION['receiptrange']=$startsat;

$from=$_SESSION['from'];
$to=$_SESSION['to'];
$startsat=$_SESSION['receiptrange'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Generate HTML to PDF</title>
	<style>
	*{text-align:center;}
	</style>
</head>
<body>	
	<h1>Users</h1>
	<table border="1" cellpadding="10" cellspacing="0" width="100%">
		<tr>
			<th>User ID</th>
			<th>Username</th>
			<th>Password</th>
			<th>Role</th>
		>
		</tr>
		
		<tbody>
           <?php   $sqlmember ="SELECT * FROM moi WHERE user_id>=$from && user_id<=$to";
             $retrieve = mysqli_query($conn,$sqlmember);
                            $count=0;
                     while($found = mysqli_fetch_array($retrieve))
                   {
                       $user=$found['username'];$pass=$found['password'];$role=$found['role'];$id=$found['user_id'];
                        $count=$count+1;  $time=time();
                                     
            echo"<tr>        <td>$id</td>                                       
                             <td>$user</td>          
                             <td>$pass</td>
                             <td>$role</td>     
                             </tr>"; 
           
           } 
    
                ?>
            </tbody>
	</table>	
</body>
</html>