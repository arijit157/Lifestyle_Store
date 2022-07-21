<?php 
session_start();
require("../includes/database_connection.php");

$email=$_POST['email'];
$password=$_POST['password'];
$password=sha1($password);

$sql="select * from users where email='$email' and password='$password'";
$result=mysqli_query($conn, $sql);

if(!$result)
{
    echo "Something went wrong";
    return;
}

$row_count=mysqli_num_rows($result);

if($row_count == 0)
{
    echo "Invalid email and password!!!, Please try again 😢";
    return;
}

$user_record=mysqli_fetch_assoc($result);

//storing id, email and name of an user to a session
$_SESSION['user_id']=$user_record['id'];
$_SESSION['user_email']=$user_record['email'];
$_SESSION['user_name']=$user_record['name'];

echo "Login successfull! 😊";
header("location: ../index.php");
mysqli_close($conn);
?>